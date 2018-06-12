<?php

namespace App\Http\Controllers;

use App\Projet;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProjet;
use App\Services\Intervention;
use Storage;
use Auth;

class ProjetController extends Controller
{
    public function __construct(Intervention $intervention)
    {
        $this->intervention = $intervention;
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        return view('admin.projet.index',compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjet $request)
    {
        $request->validated();
        $projet = new Projet;
        $projet->titre = $request->titre;
        $projet->contenu = $request->contenu;
        $projet->user_id = Auth::user()->id;
        $projet->entreprise = $request->entreprise;
        $resizesm = [
            'image' => $request->image,
            'taille' => 50,
            'disk' =>'resizesm'
        ];
        $resizemd = [
            'image' => $request->image,
            'taille' => 200,
            'disk' =>'resizemd'
        ];
        $resizel = [
            'image' => $request->image,
            'taille' => 500,
            'disk' =>'resizel'
        ];



        if($request->image != null){
            $projet->image = $this->intervention->imageStore($resizesm);
            $projet->image = $this->intervention->imageStore($resizemd);
            $projet->image = $this->intervention->imageStore($resizel);

        }

        if($projet->save()){
            return redirect()->route('projets.index')->with([
                "status"=>"success",
                "message"=>trans('validation.ajout-valid')
                ]);
            }
            else{
                return redirect()->route('projets.index')->with([
                    "status"=>"danger",
                    "message"=>trans('validation.echec')
                    ]);
                }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        return view('admin.projet.show', compact('projet'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        return view('admin.projet.edit', compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProjet $request, Projet $projet)
    {
        $request->validated();
        $projet->titre = $request->titre;
        $projet->contenu = $request->contenu;
        $projet->entreprise = $request->entreprise;
        $resizesm = [
            'image' => $request->image,
            'taille' => 50,
            'disk' =>'resizesm'
        ];
        $resizemd = [
            'image' => $request->image,
            'taille' => 200,
            'disk' =>'resizemd'
        ];
        $resizel = [
            'image' => $request->image,
            'taille' => 500,
            'disk' =>'resizel'
        ];

        if($request->image != null){
            $this->intervention->imageDelete($request->image);
            $projet->image = $this->intervention->imageStore($resizesm);
            $projet->image = $this->intervention->imageStore($resizemd);
            $projet->image = $this->intervention->imageStore($resizel);
        }

        if($projet->save()){
            return redirect()->route('projets.index')->with([
                "status"=>"success",
                "message"=>trans('validation.modif-valid')
                ]);
            }
            else{
                return redirect()->route('projets.index')->with([
                    "status"=>"danger",
                    "message"=>trans('validation.echec')
                    ]);
                }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        if($projet->delete()){
            $this->intervention->imageDelete($projet->image);


            return redirect()->route('projets.index')->with([
                "status"=>"success",
                "message"=>trans('validation.supp-valid')
                ]);
        }
        else{
            return redirect()->route('projets.index')->with([
                "status"=>"danger",
                "message"=>trans('validation.echec')
                ]);
        }
    }
}
