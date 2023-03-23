<?php

namespace App\Http\Controllers;

use App\Models\Control;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      
        $busqueda= $request->busqueda;
        $datos = Control::where('dni','LIKE','%'.$busqueda.'%')
        ->orwhere('Apellidos','LIKE','%'.$busqueda.'%')
        ->orwhere('caserio','LIKE','%'.$busqueda.'%')
        ->orwhere('observacion','LIKE','%'.$busqueda.'%')
        ->latest('created_at')
        ->paginate(20);
        $control =[
            'control'=>$datos,
        ];
      
         
         return view('control.index',$control);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('control.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //$datosEmpleado =$request->all();

        $campos=[
            'Nombres'=>'required|string|max:100',
            'Apellidos'=>'required|string|max:100',
            'dni'=>'required|string|max:100',
            'caserio'=>'required|string|max:100',
            'observacion'=>'required|string|max:100',
            'created_at'=>'required|string|max:100',
            
        ];

        $mensaje=[

            'require'=>'El :attribute es requerido',

        ];

        if($request->hasFile('Foto')){
            $campos=['Foto'=>'required|max:1000|mimes:jpeg,png,jpg'];
            $mensaje=['Foto.require'=>'La foto es requerida'];
        }

        $this->validate($request, $campos,$mensaje);



        $datosEmpleado = request()->except('_token');

        if($request->hasFile('foto')){
            $datosEmpleado['foto']=$request->file('foto')->store('uploads','public');
        }

        Control::insert($datosEmpleado);
        return  redirect('control')->with('mensaje','Empleado agregado');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Control  $control
     * @return \Illuminate\Http\Response
     */
    public function show(Control $control)
    {
        
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Control  $control
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $control=Control::findOrFail($id);
        return view('control.edit', compact('control'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Control  $control
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $campos=[
            'Nombres'=>'required|string|max:100',
            'Apellidos'=>'required|string|max:100',
            'dni'=>'required|string|max:100',
            'caserio'=>'required|string|max:100',
            'observacion'=>'required|string|max:100',
            'created_at'=>'required|string|max:100',
         
        ];

        $mensaje=[

            'require'=>'El :attribute es requerido',
          

        ];

        if($request->hasFile('Foto')){
            $campos=['Foto'=>'required|max:1000|mimes:jpeg,png,jpg'];
            $mensaje=['Foto.require'=>'La foto es requerida'];
        }

        $this->validate($request, $campos,$mensaje);


        //
        $datosEmpleado = request()->except(['_token','_method']);

        if($request->hasFile('foto')){
            $control=Control::findOrFail($id);
            Storage::delete('public/'.$control->Foto);
            $datosEmpleado['foto']=$request->file('foto')->store('uploads','public');
        }

        Control::where('id','=',$id)->update($datosEmpleado);

        $control=Control::findOrFail($id);
        //return view('control.edit', compact('control'));
        return redirect('control')->with('mensaje','Empleado Editado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Control  $control
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $control=Control::findOrFail($id);

        if(Storage::delete('public/'.$control->Foto)){
            Control::destroy($id);
        }

       
        return redirect('control')->with('mensaje','Empleado Borrado');


    }
}
