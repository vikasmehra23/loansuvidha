<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Upload;
use App\Models\BlogCategory;
use App\Models\Setting;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $sort_search = null;
        $blogs = Blog::orderBy('created_at', 'desc');

        if ($request->search != null){
            $blogs = $blogs->where('title', 'like', '%'.$request->search.'%');
            $sort_search = $request->search;
        }

        $blogs = $blogs->paginate(15);

        return view('admin.pages.blog.index', compact('blogs','sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blog_categories = BlogCategory::all();
        return view('admin.pages.blog.create', compact('blog_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
        ]);
        

        $blog = new Blog;
        $slug = preg_replace('/[^A-Za-z0-9]+/', '-', str_replace(' ', '-', $request->slug));

        $blog->title = $request->title;
        $blog->slug = strtolower($slug);
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $blog->meta_title = $request->meta_title;
        
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;

       
        if ($request->hasFile('meta_image')) 
        {
            $imageName = time()."-ws.". $request->file('meta_image')->getClientOriginalExtension();
            $request->file('meta_image')->move('uploads/uploads/', $imageName);
            
            $blog->meta_img = $imageName;
        }

        if ($request->hasFile('banner')) 
        {
            $imageName = time()."-ws.". $request->file('banner')->getClientOriginalExtension();
            $request->file('banner')->move('uploads/uploads/', $imageName);
            
            $blog->banner = $imageName;
        }
     
        $blog->save();
        $this->addUrlToSitemap($blog);

        return redirect()->route('blog.index')->with('success', 'Blog post has been created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view("frontend.blogs");
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        $blog_categories = BlogCategory::all();

        return view('admin.pages.blog.edit',  compact('blog','blog_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'title' => 'required|max:255',
        ]);

        $blog = Blog::find($id);
        
        $slug = preg_replace('/[^A-Za-z0-9]+/', '-', str_replace(' ', '-', $request->title));
        $newSlug = strtolower(trim($slug, '-'));

        // Check if the slug has changed
        if ($blog->slug !== $newSlug) {

            $this->removeUrlFromSitemap($blog);
        }

        $blog->title = $request->title;
        $blog->slug = strtolower($slug);
        $blog->short_description = $request->short_description;
        $blog->description = $request->description;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;


        if ($request->hasFile('meta_image')) 
        {
            $imageName = time()."-ws.". $request->file('meta_image')->getClientOriginalExtension();
            $request->file('meta_image')->move('uploads/uploads/', $imageName);
            
            $blog->meta_img = $imageName;
        }

        if ($request->hasFile('banner')) 
        {
            $imageName = time()."-ws.". $request->file('banner')->getClientOriginalExtension();
            $request->file('banner')->move('uploads/uploads/', $imageName);
            
            $blog->banner = $imageName;
        }
       
        $blog->save();
        $this->addUrlToSitemap($blog);

        return redirect()->route('blog.index')->with('success', 'Blog post has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        $blog->delete();
        $this->removeUrlFromSitemap($blog);
        return redirect()->route('blog.index')->with('success', 'Blog Deleted Successfully');
    }


    protected function handleImage($file)
    {
        $getSize = $file->getSize();
        $arr = explode('.', $file->getClientOriginalName());

        $imageName = time().'.'.$file->getClientOriginalExtension();  
        $file->move(public_path('uploads'), $imageName);

        $upload = new Upload();
        
        $upload->file_original_name = $arr[0];
        $upload->file_name = $imageName;
        $upload->user_id = auth()->id();
        $upload->extension = $file->getClientOriginalExtension();
        $upload->type = 'image';
        
        $upload->file_size = $getSize;
        $upload->save();

        return $upload->id;
    }




    //  Frontend blogs //

    public function blogshow(){
        $blogs = Blog::all();

        $metaTitle = Setting::where('type', 'title_blogs')->First();
        $metaDesc = Setting::where('type', 'description_blogs')->First();
        $metaKey = Setting::where('type', 'keyword_blogs')->First();
        return view('frontend.blogs', compact('blogs','metaTitle','metaDesc','metaKey'));
    }

    public function blogdetails($slug){

        $blog = Blog::where('slug', $slug)->first();
        $blogss = Blog::where('slug', $slug)->first();
        
        $metaDescriptionValue = $blogss->meta_description ?? 'Default description'; // Provide a default if not set
        $metaTitle = Setting::where('type', 'title_blogdetails')->First();
        $metaDesc = Setting::where('type', 'description_blogdetails')->First();
        $metaKey = Setting::where('type', 'meta_keywords')->First();
        
        return view('frontend.blog_details', compact('blog','metaTitle','metaDesc','metaKey','metaDescriptionValue'));
    }


    //  CK Editor Image Upload //


    public function uploadimage(Request $request){

        if($request->hasFile('upload')){
            $originalName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originalName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
    
            $fileName = $fileName.'_'.time().'.'.$extension;
                    
            $request->file('upload')->move(public_path('blog_image'), $fileName);
            $url = asset('blog_image/'.$fileName);
    
            return response()->json(['fileName' => $fileName, 'uploaded' => true, 'url' => $url]); // Changed 'uploaded' => 1 to 'uploaded' => true
        }
    }


    private function addUrlToSitemap($blog)
    {
        $sitemapPath = public_path('sitemap.xml');
    
     
        if (file_exists($sitemapPath)) {
            $sitemap = simplexml_load_file($sitemapPath);
        } else {
            $sitemap = new \SimpleXMLElement('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');
        }
    
       
        $blogUrl = url('blogs/' . $blog->slug);
        $urlExists = false;
    
        foreach ($sitemap->url as $urlElement) {
            if ((string)$urlElement->loc === $blogUrl) {
                $urlExists = true;
                break;
            }
        }
    
       
        if (!$urlExists) {
            $urlElement = $sitemap->addChild('url');
            $urlElement->addChild('loc', $blogUrl);
            $urlElement->addChild('lastmod', now()->toAtomString());
            $urlElement->addChild('priority', '0.64'); 
        }
    
       
        $sitemap->asXML($sitemapPath);
    }
    private function removeUrlFromSitemap($blog)
    {
        $sitemapPath = public_path('sitemap.xml');
    
        if (file_exists($sitemapPath)) {
          
            $sitemapContent = simplexml_load_file($sitemapPath);
          
            $urlToRemove = url('blogs/' . $blog->slug);
    
          
            $newSitemap = new \SimpleXMLElement('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');
    
           
            $urlFound = false;
    
            foreach ($sitemapContent->url as $urlElement) {
                if ((string)$urlElement->loc === $urlToRemove) {
                    $urlFound = true; 
                    continue; 
                }
    
              
                $newUrlElement = $newSitemap->addChild('url');
                $newUrlElement->addChild('loc', (string)$urlElement->loc);
                $newUrlElement->addChild('lastmod', (string)$urlElement->lastmod);
                if (isset($urlElement->priority)) {
                    $newUrlElement->addChild('priority', (string)$urlElement->priority);
                }
            }
    
            
            $newSitemap->asXML($sitemapPath);
    
            return $urlFound; 
        }
    
        return false; 
    }


}
