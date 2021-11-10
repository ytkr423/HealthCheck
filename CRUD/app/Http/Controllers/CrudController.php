<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Crud;

class CrudController extends Controller
{
    /**
     * 会員情報一覧
     * 
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $crud = Crud::orderBy('created_at','asc')->get();
        return view('crud.index',[
            'crud' => $crud,
        ]);
    }

    /**
     * 会員登録
     * 
     * @param Request $request
     * @return Response
     */
    // 画面表示 create
    public function create(Request $request)
    {
        return view('crud.create');
    }

    /**
     * データ登録部分 store
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'phone' => 'required',
            'email' => 'required|max:255',
        ]);
        $crud = new Crud;
        $form = $request->all();
        $crud->fill($form)->save();

        return redirect("crud");
    }

    // 
    public function edit($id)
    {
        $crud=Crud::find($id);

        return view('crud.edit',[
            'id' =>$id,
            'crud'=>$crud,
        ]);
    }

    public function update(Request $request)
    {
        $crud=Crud::find($request->id);

        $crud->name=$request->name;
        $crud->phone=$request->phone;
        $crud->email=$request->email;

        $crud->save();
        return redirect('/crud');
    }

    public function destroy($id)
    {
        $crud=Crud::find($id);

        $crud->delete();
        
        return redirect('/crud');
    }

}

