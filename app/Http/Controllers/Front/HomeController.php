<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\NewsLetter as tblNewsLetter;
use App\Models\ContactUs;
use App\Models\Inquiry;
use App\Models\Category;
use App\Models\Portfolio;

use App\Models\BlogCategory;
use App\Models\BlogTag;
use App\Models\Post;

use Validator;
use Session;

class HomeController extends Controller{
    public $title="AdiRoha Solutions";


    public function index(Request $request){
        try {
            $data                = [];
            // $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
            //     $q->where('name', '!=', 'Graphics');
            // })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(4)->get();
            $data['title']=$this->title;
            return view('front.index',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function financial_services()
    {
        $data                = [];
        $data['title']='Services';
        return view('front.financial-services',$data);
    }

    public function training()
    {
        $data                = [];
        $data['title']='Training';
        return view('front.training',$data);
    }

    public function forcorporate()
    {
        $data                = [];
        $data['title']='For Corporate';
        return view('front.forcorporate',$data);
    }

    public function blog()
    {
        $post=BlogCategory::with('posts')->get();
        $data                = [];
        $data['post']        = $post;
        $data['title']='Blog';
        return view('front.blog',$data);
    }

    public function about_us()
    {
         $data                = [];
        $data['title']='About Us';
        return view('front.about_us',$data);
    }

    public function schedulemeeting()
    {
         $data                = [];
        $data['title']='Schedule Meeting';
        return view('front.schedulemeeting',$data);
    }

    public function services()
    {
         $data                = [];
        $data['title']='Services';
        return view('front.services',$data);
    }

    public function industry()
    {
         $data                = [];
        $data['title']='Industry';
        return view('front.industry',$data);
    }

    public function contactus()
    {
         $data                = [];
        $data['title']='Contact Us';
        return view('front.contactus',$data);
    }

    public function meetingschedul()
    {
         $data                = [];
        $data['title']='Meeting Schedul';
        return view('front.meetingschedul',$data);
    }

    public function coursesindex()
    {
         $data                = [];
        $data['title']='Cyber Security Course';
        return view('front.coursesindex',$data);
    }

    public function courses_sucess()
    {
         $data                = [];
        $data['title']='Courses';
        return view('front.courses_sucess',$data);
    }

    public function scheduledemo()
    {
         $data                = [];
        $data['title']='Schedule Meeting';
        return view('front.scheduledemo',$data);
    }

    public function downloadpdf()
    {
         $data                = [];
        $data['title']='Download PDF';
        return view('front.downloadpdf',$data);
    }

    public function blog_detail($id)
    {
         $data                = [];
         $post=Post::find($id);
         $cat_id=$post->categories->toArray();
         $cat_id=array_column($cat_id, 'id');
         $category=BlogCategory::with('posts')->whereIn('id',$cat_id)->get();
         $data['post']=$post;
         $data['category']=$category;
        $data['title']='Blog Detail';
        return view('front.blog_detail',$data);
    }


    public function hire_dedicated_web_developers(Request $request){
        return view('front.hire_dedicated_web_developers');
    }

    public function hire_dedicated_frontend_developers(Request $request){
        return view('front.hire_dedicated_frontend_developers');
    }

    public function hire_dedicated_full_stack_developers(Request $request){
        return view('front.hire_dedicated_full_stack_developers');
    }

    public function hire_dedicated_mobile_app_developers(Request $request){
        return view('front.hire_dedicated_mobile_app_developers');
    }

    public function hire_server_administrator(Request $request){
        return view('front.hire_server_administrator');
    }

    public function hire_dedicated_qa_engineer(Request $request){
        return view('front.hire_dedicated_qa_engineer');
    }

    public function website_design_company(Request $request){
        try {
            $data                = [];
            $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
                $q->where('name', '!=', 'Graphics');
            })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(2)->get();
            return view('front.website_design_company',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function website_development_company(Request $request){
        try {
            $data                = [];
            $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
                $q->where('name', '!=', 'Graphics');
            })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(2)->get();
            return view('front.website_development_company',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function mobile_application_development_company(Request $request){
        try {
            $data                = [];
            $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
                $q->where('name', '!=', 'Graphics');
            })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(2)->get();
            return view('front.mobile_application_development_company',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function ecommerce_development_company(Request $request){
        try {
            $data                = [];
            $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
                $q->where('name', '!=', 'Graphics');
            })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(2)->get();
            return view('front.ecommerce_development_company',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function crm_development_company(Request $request){
        try {
            $data                = [];
            $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
                $q->where('name', '!=', 'Graphics');
            })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(2)->get();
            return view('front.crm_development_company',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function custom_software_development(Request $request){
        try {
            $data                = [];
            $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
                $q->where('name', '!=', 'Graphics');
            })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(2)->get();
            return view('front.custom_software_development',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function seo_agency(Request $request){
        try {
            $data                = [];
            $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
                $q->where('name', '!=', 'Graphics');
            })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(2)->get();
            return view('front.seo_agency',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function graphics_design_company(Request $request){
        try {
            $data                = [];
            $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
                $q->where('name', '=', 'Graphics');
            })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(2)->get();
            return view('front.graphics_design_company',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function branding_agency(Request $request){
        try {
            $data                = [];
            $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
                $q->where('name', '=', 'Graphics');
            })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(2)->get();
            return view('front.branding_agency',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function content_writing_service(Request $request){
        try {
            $data                = [];
            $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
                $q->where('name', '!=', 'Graphics');
            })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(2)->get();
            return view('front.content_writing_service',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function server_administration_service(Request $request){
        try {
            $data                = [];
            $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
                $q->where('name', '!=', 'Graphics');
            })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(2)->get();
            return view('front.server_administration_service',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function annual_maintenance_service(Request $request){
        try {
            $data                = [];
            $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
                $q->where('name', '!=', 'Graphics');
            })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(2)->get();
            return view('front.annual_maintenance_service',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function it_consulting_service(Request $request){
        try {
            $data                = [];
            $data['portfolios']  = Portfolio::where('status',1)->whereNotNull('image')->whereHas('category', function($q){
                $q->where('name', '!=', 'Graphics');
            })->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->limit(2)->get();
            return view('front.it_consulting_service',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }




    public function portfolio(Request $request){
        try {
            $data                = [];
            $data['categories']  = Category::with('lazy')->where('status',1)->get();
            //return view('front.portfolio',$data);
            return view('front.portfolio_pagination',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function portfolioBypage(Request $request, $category_id, $page=1) {
        $category       = Category::where('id',$category_id)->first();
        $skip           = ($category->name=='Graphics')?$page * 3:$page * 2;
        $portfolios     = Portfolio::where('category_id',$category_id)->where('status',1)->whereNotNull('image')->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->skip($skip)->limit(($category->name=='Graphics')?3:2)->get();
        $next_link      = '';
        $content        = '';
        if($portfolios->count() > 0){
            $content    = $this->returnPortfolio($portfolios,$category);
            $next_link  = '<div class="lazy" data-src="'.route('front.portfolio.data',[$category_id,++$page]).'"></div>';
        }else if(!$portfolios && $page==0){
            $content    = '';
        }
        return response()->json(['status'=>200, 'html'=> $content, 'next_link'=>$next_link]);
    }

    public function returnPortfolio($portfolios,$category){
        if($portfolios->count() > 0){
            return view('front.ajax_portfolio',compact('portfolios','category'))->render();
        }else{
            return '';
        }
    }

    public function portfolioData(Request $request) {
        $data['html']                   =
            '<div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">No record found</h4>
                </div>
            </div>';
        if($request->ajax()){
            try {
                $data['success']        = false;
                $data['message']        = "No record found";

                $category               = Category::where('id',$request->id)->first();
                $paginate               = ($category->name=='Graphics')?15:12;

                $portfolios             = Portfolio::where('category_id',$category->id)->where('status',1)->whereNotNull('image')->orderByRaw('-display_no DESC')->orderBy('id', 'DESC')->paginate($paginate);
                if($portfolios->count() > 0){
                    $html               = view('front.ajax_portfolio_pagination',compact('portfolios','category'))->render();
                    $data['success']    = true;
                    $data['message']    = "Portfolio retrieved successfully.";
                    $data['html']       = $html;
                }
            }catch (\Exception $e) {
                $data['success']        = false;
                $data['message']        = $e->getMessage();
            }
        }else{
            $data['success']            = false;
            $data['message']            = "Oops! Something went wrong..";
        }
        return response()->json($data);
    }

    public function blogs(Request $request){
        try {
            $data                       = [];
            $data['blog_categories']    =  BlogCategory::with(['posts' => function($q){
                    $q->where('status', '=', 1);
                }])->where('status',1)->get();
            $data['recent_posts']       = Post::query()->where('status', '=', 1)->orderBy('id', 'desc')->limit(5)->get();
            return view('front.blogs',$data);
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function blogsData(Request $request){
        $data['html']                   =
            '<div class="row">
                <div class="col-md-12">
                    <h4 class="text-center">No record found</h4>
                </div>
            </div>';
        if($request->ajax()){
            try {
                $data['success']        = false;
                $data['message']        = "No record found";
                $posts                  = Post::query();
                $posts->where(function ($query) use($request){
                    $query->where('status', 1);
                });
                $posts                  = $posts->orderBy('id', 'DESC')->paginate(6);
                if($posts->count() > 0){
                    $html               = view('front.ajax_blog',compact('posts'))->render();
                    $data['success']    = true;
                    $data['message']    = "Post retrieved successfully.";
                    $data['html']       = $html;
                }
            }catch (\Exception $e) {
                $data['success']        = false;
                $data['message']        = $e->getMessage();
            }
        }else{
            $data['success']            = false;
            $data['message']            = "Oops! Something went wrong..";
        }
        return response()->json($data);
    }

    public function blogsDetail($slug){
        try {
            $post                           = Post::query()->where('slug',$slug)->where('status',1)->first();
            if ($post) {
                $data['page_title']         = $post->category_name;
                $data['post']               = $post;
                $data['blog_categories']    = BlogCategory::with(['posts' => function($q){
                    $q->where('status', '=', 1);
                }])->where('status',1)->get();
                $data['recent_posts']       = Post::query()->where('id', '!=', $post->id)->where('status', '=', 1)->orderBy('id', 'desc')->limit(5)->get();
                $blog_category_id           = $post->categories->pluck('id')->toArray();
                if(!empty($blog_category_id)){
                    $related_posts          = Post::query()->where('status',1)->where('id','!=',$post->id);
                    $related_posts->where(function ($q) use($blog_category_id){
                        $q->whereHas('categories', function ($query) use ($blog_category_id){
                            $query->whereIn('blog_categories.id', $blog_category_id);
                        });
                    });
                    $data['related_posts']  = $related_posts->orderBy('id', 'DESC')->limit(2)->get();
                }else{
                    $data['related_posts']  = Post::inRandomOrder()->where('status',1)->where('id','!=',$post->id)->orderBy('id', 'DESC')->limit(2)->get();
                }
                return view('front.blog_detail',$data);
            }else{
                return abort(404);
            }
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function blogsByCat($slug){
        try {
            $blog_category                  = BlogCategory::query()->where('slug',$slug)->where('status',1)->first();
            if ($blog_category) {
                $data['page_title']         = $blog_category->name;
                $data['blog_category']      = $blog_category;
                $data['id']                 = $blog_category->id;
                $data['blog_categories']    =  BlogCategory::with(['posts' => function($q){
                        $q->where('status', '=', 1);
                    }])->where('status',1)->get();
                $data['recent_posts']       = Post::query()->where('status', '=', 1)->orderBy('id', 'desc')->limit(5)->get();
                return view('front.blog_by_tag_cat',$data);
            }else{
                return abort(404);
            }
        } catch (\Exception $e) {
            return abort(404);
        }
    }

    public function blogsByCatData(Request $request,$id){
        if($request->ajax()){
            try {
                $data['success']        = false;
                $data['message']        = "No record found";
                $data['html']           =
                        '<div class="row">
                            <div class="col-md-12">
                                <h4 class="text-center">No record found</h4>
                            </div>
                        </div>';

                $posts                  = Post::query();
                $posts->where(function ($query) use($id){
                    $query->where('status', 1)->whereHas('categories', function ($query) use($id){
                        $query->where('blog_categories.id', $id);
                    });
                });
                $posts                  = $posts->orderBy('id', 'DESC')->paginate(6);
                if($posts->count() > 0){
                    $html               = view('front.ajax_blog',compact('posts'))->render();
                    $data['success']    = true;
                    $data['message']    = "Post retrieved successfully.";
                    $data['html']       = $html;
                }
            }catch (\Exception $e) {
                $data['success']        = false;
                $data['message']        = $e->getMessage();
            }
        }else{
            $data['success']            = false;
            $data['message']            = "Oops! Something went wrong..";
        }
        return response()->json($data);
    }

    public function contact_us(Request $request){
        return view('front.contact_us');
    }

    public function privacy_policy(Request $request){
        return view('front.privacy_policy');
    }

    public function terms_and_conditions(Request $request){
        return view('front.terms_and_conditions');
    }

    public function contact_us_store(Request $request){
        if ($request->ajax()) {
            try {
                $rules      = [
                    'first_name'            => ['required', 'string', 'max:255'],
                    'last_name'             => ['required', 'string', 'max:255'],
                    'email'                 => ['required', 'string', 'email', 'max:255'],
                    'phone_no'              => ['required', 'digits:10'],
                    'message'               => ['required']
                ];
                $messages   = [
                    'first_name.required'   => 'The first name field is required.',
                    'last_name.required'    => 'The last name field is required.',
                    'email.required'        => 'The email field is required.',
                    'phone_no.required'     => 'The phone no field is required.',
                    'message.required'      => 'The message field is required.'
                ];
                $validator = Validator::make($request->all(), $rules, $messages);
                if ($validator->fails()) {
                    $response['errors']     = $validator->errors()->all();
                    $response['success']    = false;
                    $response['message']    = "Oops! Something went wrong..";
                    return response()->json($response);
                }
                $item       = ContactUs::create([
                    'name'                  => $request->first_name.' '.$request->last_name,
                    'first_name'            => $request->first_name,
                    'last_name'             => $request->last_name,
                    'email'                 => $request->email,
                    'phone_no'              => $request->phone_no,
                    'message'               => $request->message,
                    'created_at'            => date("Y-m-d H:i:s")
                ]);
                if ($item) {
                    \Mail::to(env('MAIL_TO_ADDRESS','info@empyrealinfotech.com'))->cc(env('MAIL_CC_ADDRESS','meram.empyreal@gmail.com'))->send(new \App\Mail\ContactUsMail($item));
                    if (\Mail::failures()) {
                        $response['success']= true;
                        $response['message']= "Contact added successfully but mail sent unsuccessfully!.";
                    }else{
                        $response['success']= true;
                        $response['message']= "Contact added successfully.";
                    }
                }else{
                    $response['success']    = false;
                    $response['message']    = "Contact added successfully.";
                }
            }catch (\Exception $e) {
                $response['success']        = false;
                $response['message']        = $e->getMessage();
            }
        }else{
            $response['success']            = false;
            $response['message']            = "Oops! Something went wrong..";
        }
        return response()->json($response);
    }

    public function inquiry_store(Request $request){
        if ($request->ajax()) {
            try {
                $rules      = [
                    'name'                  => ['required', 'string', 'max:255'],
                    'email'                 => ['required', 'string', 'email', 'max:255'],
                    'phone_no'              => ['required', 'digits:10']
                ];
                $messages   = [
                    'name.required'         => 'The full name field is required.',
                    'email.required'        => 'The email field is required.',
                    'phone_no.required'     => 'The phone no field is required.'
                ];
                $validator = Validator::make($request->all(), $rules, $messages);
                if ($validator->fails()) {
                    $response['errors']     = $validator->errors()->all();
                    $response['success']    = false;
                    $response['message']    = "Oops! Something went wrong..";
                    return response()->json($response);
                }
                $item       = Inquiry::create([
                    'company_name'          => $request->company_name,
                    'name'                  => $request->name,
                    'email'                 => $request->email,
                    'phone_no'              => $request->phone_no,
                    'created_at'            => date("Y-m-d H:i:s")
                ]);
                if ($item) {
                    \Mail::to(env('MAIL_TO_ADDRESS','info@empyrealinfotech.com'))->cc(env('MAIL_CC_ADDRESS','meram.empyreal@gmail.com'))->send(new \App\Mail\InquiryMail($item));
                    if (\Mail::failures()) {
                        $response['success']= true;
                        $response['message']= "Quote added successfully but mail sent unsuccessfully!.";
                    }else{
                        $response['success']= true;
                        $response['message']= "Quote added successfully.";
                    }
                }else{
                    $response['success']    = false;
                    $response['message']    = "Quote added successfully.";
                }
            }catch (\Exception $e) {
                $response['success']        = false;
                $response['message']        = $e->getMessage();
            }
        }else{
            $response['success']            = false;
            $response['message']            = "Oops! Something went wrong..";
        }
        return response()->json($response);
    }

    public function news_letter_store(Request $request){
        if ($request->ajax()) {
            try {
                $validator  = Validator::make($request->all(), [
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:news_letters,email']
                ]);
                if ($validator->fails()) {
                    $response['errors']     = $validator->errors()->all();
                    $response['success']    = false;
                    $response['message']    = "Oops! Something went wrong..";
                    return response()->json($response);
                }
                $newsletter = tblNewsLetter::create([
                    'email'                 => $request->email,
                    'created_at'            => date("Y-m-d H:i:s")
                ]);
                if ($newsletter) {
                    $response['success']    = true;
                    $response['message']    = "Submitted successfully.";
                }else{
                    $response['success']    = false;
                    $response['message']    = "Submitted unsuccessfully.";
                }
            }catch (\Exception $e) {
                $response['success']        = false;
                $response['message']        = $e->getMessage();
            }
        }else{
            $response['success']            = false;
            $response['message']            = "Oops! Something went wrong..";
        }
        return response()->json($response);
    }


}
