<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Article;
use App\Models\User;
use App\Models\Consultation;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'HomePage | NCC';
        $recipe = Recipe::orderBy('created_at', 'desc')->limit(3)->get();
        return view('pages.frontend.index', compact('title', 'recipe'));
    }
    public function recipe(){
        $data = Recipe::all();
        $latest = Recipe::orderBy('created_at', 'desc')->limit(3)->get();
        $title = 'Resep | CC';
        return view('pages.frontend.recipe.index', compact('data', 'title', 'latest'));
    }
    public function consultation(){
        $title = 'Konsultasi | CC';
        $data = Consultation::all();
        return view('pages.frontend.consultation.index', compact('title', 'data'));
    }
    public function createReservation(){
        $title = 'Konsultasi | CC';
        $consultan = User::where('role', 'Konsultan')->get();
        return view('pages.frontend.consultation.create', compact('title', 'consultan'));
    }
    public function reservation(Request $request){
        try {
            Consultation::create([
                'user_id' => 2,
                'consultant_id' => $request->consultant_id,
                'reservation_date' => date('Y-m-d', strtotime($request->reservation_date)),
            ]);
            return redirect('createReservation')->with('success', 'Berhasil menambah data!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return back()->with('failed', 'Gagal menambah data!' . $th->getMessage());
        }
    }
    public function recipeDetail($id){
        $data = Recipe::find($id);
        $title = $data->name.' | CC';
        return view('pages.frontend.recipe.detail', compact('data', 'title'));
    }
    public function about(){
        $title = 'Tentang | CC';
        return view('pages.frontend.about.index', compact('title'));
    }
    public function article(){
        $data = Article::all();
        $latest = Article::orderBy('created_at', 'desc')->limit(3)->get();
        $title = 'Artikel | CC';
        return view('pages.frontend.article.index', compact('data', 'title', 'latest'));
    }

    public function articleDetail($id){
        $data = Article::find($id);
        $title = $data->name.' | CC';
        return view('pages.frontend.article.detail', compact('data', 'title'));
    }

    public function profile()
    {
        $profiles = SchoolProfile::first();
        $title = 'Profil | NCC';
        return view('pages.frontend.profile.index', compact('profiles', 'title'));
    }



    public function programs(){
        $majors = Majors::all();
        return view('pages.frontend.programs.index', compact('majors'));
    }

    public function works(){
        $jobfair = JobFair::all();
        return view('pages.frontend.works.index', compact('jobfair'));
    }
}
