<?php 
namespace App\Http\Controllers;

use App\Models\Comics;
use Illuminate\Http\Request;
use App\Http\Request\TaskRequest;
use Illuminate\Support\Facades\DB;

class ComicsController extends Controller
{
    public function index()
    {
        return view('comics',["comics" => Comics::paginate(15)]);
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
    public function toggle(Request $request)
    {
        $Comics = Comics::where('id_Comics', $request->id)->first();
        $Comics->finished = !$Comics->finished;
        $Comics->finish_in = $Comics->finish_in ? null : date("Y-m-d H:i:s");

        if(!Comics->save())
            return back()->withErrors('An Error ocurred while Updated your Marvel Comics'.$Comics['title'].'.');
        return back()->with('Your Marvel Comics'.$Comics['title'].'was updated with success.');
    }
}
