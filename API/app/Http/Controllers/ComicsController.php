<?php 
namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index()
    {
        return view('listaComics',["comics" => Comics::all()]);
    }
    public function create(ComicsRequest $request)
    {
        $data = $request->all();

        if(!Comics::create($data))
            return back()->withErrors('An Error ocurred while created a new Marvel Comics.');
        return back()->with('succes', 'Your Marvel Comics'.$data['title'].'was created with success.');
    }
    public function delete(Request $request)
    {
        $data = $request->all();

        if(!Comics::destroy($data))
            return back()->withErrors('An Error ocurred while deleted your Marvel Comics.');
        return back()->with('Your Marvel Comics was deleted with success.');
    }
    public function update(Request $request)
    {
        $data = $request->except('_token', '_method','id_Comics');

        if(!Comics::where('id_Comics', $request->id_Comics)->update($data))
            return back()->withErrors('An Error ocurred while updated you Marvel Comics'.$data['title'].'.');
        return back()->with('Your Marvel Comics'.$data['title'].'was updated with success.');
    }
}
