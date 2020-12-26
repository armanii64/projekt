@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="container-fluid">

                    <a href="/tabors/add" class="btn btn-outline-primary center-block" role="button" aria-pressed="true">Zgłoś tabor na wydarzenie</a>
                    <a href="/tabors/create" class="btn btn-outline-secondary center-block" role="button" aria-pressed="true">Stwórz tabor</a>
                    <a href="/tabors/print" class="btn btn-outline-success center-block" role="button" aria-pressed="true">Drukuj karty</a>

                </div>
            </div>
        </div>
    </div>
</div>
<p></p>

<div class="card body">
    <h1 class="float-left">Twoje Modele</h1>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">#Id</th>
            <th scope="col">Wagon czy lokomotywa</th>
            <th scope="col">Typ lokomotywy</th>
            <th scope="col">Nr wagonu</th>
            <th scope="col">Opis modelu</th>
            <th scope="col">Oznaczenie na spodzie modelu</th>
            <th scope="col">Wlasciciel modelu</th>
            <th scope="col">Producent modelu</th>
            <th scope="col">Sprzęgi</th>
            <th scope="col">Gniazdo NEM:</th>
            <th scope="col">KKS</th>
            <th scope="col">Zd spręż</th>
            <th scope="col">Koła</th>
            <th scope="col">Wymiar wew</th>
            <th scope="col">Felga</th>
            <th scope="col">RP25</th>
            <th scope="col">Długość modelu</th>
            <th scope="col">Ostatnia rewizja</th>
            <th scope="col">Waga modelu</th>
            <th scope="col">Przewoźnik</th>
            <th scope="col">UIC-Typ</th>
            <th scope="col">Rodzaj hamulca</th>
            <th scope="col">Długość całk</th>
            <th scope="col">Rozstaw osi</th>
            <th scope="col">Gr obc C:</th>
            <th scope="col">Vmax</th>
            <th scope="col">Dł ład</th>
            <th scope="col">Pow ład</th>
            <th scope="col">Obj ład</th>
            <th scope="col">Uwagi do ładunku</th>
          </tr>
        </thead>
        <tbody>
          </td>
          </tr>
        </tbody>
      </table>
    
</div>

@endsection


