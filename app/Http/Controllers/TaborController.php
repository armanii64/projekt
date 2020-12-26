<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Tabor;
use Illuminate\Http\Request;
use DB;

class TaborController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {   
       $this->middleware('auth', ['except'=>['show']]);
} 
    public function index()
    {
        
    return view('tabors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tabors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Wagon czy lokomotywa'=> 'required',
            'Typ lokomotywy' => 'required',
            'Numer wagonu' => 'required',
            'Opis modelu '=> 'required',
            'Oznaczenie na spodzie modelu'=> 'required',
            'Wlasciciel modelu'=> 'required',
            'Producent modelu'=> 'required',
            'Sprzęgi'=> 'required',
            'Gniazdo NEM'=> 'required',
            'KKS'=> 'required',
            'Zd spręż'=> 'required',
            'Koła'=> 'required',
            'Wymiar wew'=> 'required',
            'Felga'=> 'required',
            'RP25'=> 'required',
            'Długość modelu'=> 'required',
            'Ostatnia rewizja'=> 'required',
            'Waga modelu'=> 'required',
            'Przewoźnik'=> 'required',
            'UIC-Typ'=> 'required',
            'Rodzaj hamulca'=> 'required',
            'Długość całk'=> 'required',
            'Rozstaw osi'=> 'required',
            'Gr obc C'=> 'required',
            'Vmax'=> 'required',
            'Dł ład'=> 'required',
            'Pow ład'=> 'required',
            'Obj ład'=> 'required',
            'Uwagi do ładunku'=> 'required',

        ]);

        $tabor = new Tabor;
        $tabor->Wagonczylokomotywa = $request->input('Wagon czy lokomotywa');
        $tabor->Typlokomotywy = $request->input('Typ lokomotywy');
        $tabor->Numerwagonu = $request->input('Numer wagonu');
        $tabor->Opismodelu = $request->input('Opis modelu');
        $tabor->Oznaczenienaspodziemodelu = $request->input('Oznaczenie na spodzie modelu');
        $tabor->Wlascicielmodelu = $request->input('Wlasciciel modelu');
        $tabor->Producentmodelu = $request->input('Producent modelu');
        $tabor->Sprzęgi = $request->input('Sprzęgi');
        $tabor->Wymiarwew = $request->input('Wymiar wew');
        $tabor->Felga= $request->input('Felga');
        $tabor->RP25 = $request->input('RP25');
        $tabor->Długośćmodelu = $request->input('Długość modelu');
        $tabor->Ostatniarewizja = $request->input('Ostatnia rewizja');
        $tabor->Wagamodelu = $request->input('Waga modelu');
        $tabor->Przewoźnik = $request->input('Przewoźnik');
        //$tabor->UIC-Typ = $request->input('UIC-Typ');
        $tabor->Rodzajhamulca = $request->input('Rodzaj hamulca');
        $tabor->Długośćcałk = $request->input('Długość całk');
        $tabor->Rozstawosi = $request->input('Rozstaw osi');
        $tabor->GrobcC = $request->input('Gr obc C:');
        $tabor->Vmax = $request->input('Vmax');
        $tabor->Dłład = $request->input('Dł ład');
        $tabor->Powład = $request->input('Pow ład');
        $tabor->Objład = $request->input('Obj ład');
        $tabor->Uwagidoładunku = $request->input('Uwagi do ładunku');
        $tabor->user_id = auth()->user()->id;
        $tabor->save();

        return redirect('/tabors')->with('success', 'Tabor został dodany');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
