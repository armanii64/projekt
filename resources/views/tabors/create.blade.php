@extends ('layouts.app')
@section ('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
    <h1>Dodaj nowy tabor</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\TaborController@store', 'method' => 'POST', 'enctype'=> 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('Wagon czy lokomotywa:', 'Wpisz poniżej:')}}
        {{Form::text('Wagon czy lokomotywa', '', ['class'=>'form-control', 'placeholder' =>'Wagon czy lokomotywa'])}}
    </div>
    <div class="form-group">
        {{Form::label('Typ lokomotywy:', 'Typ lokomotywy:')}}
        {{Form::text('Typ lokomotywy:', '', ['class'=>'form-control', 'placeholder' =>'Typ lokomotywy'])}}
    </div>
    <div class="form-group">
        {{Form::label('Numer wagonu', 'Numer wagonu')}}
        {{Form::text('Numer wagonu', '', ['class'=>'form-control', 'placeholder' =>'Numer wagonu'])}}
    </div>
    <div class="form-group">
        {{Form::label('Opis modelu', 'Opis modelu')}}
        {{Form::text('Opis modelu', '', ['class'=>'form-control', 'placeholder' =>'Opis modelu'])}}
    </div>
    <div class="form-group">
        {{Form::label('Oznaczenie na spodzie modelu', 'Oznaczenie na spodzie modelu')}}
        {{Form::text('Oznaczenie na spodzie modelu', '', ['class'=>'form-control', 'placeholder' =>'Oznaczenie na spodzie modelu'])}}
    </div>
    <div class="form-group">
        {{Form::label('Sprzęgi', 'Sprzęgi')}}
        {{Form::text('Sprzęgi', '', ['class'=>'form-control', 'placeholder' =>'Sprzęgi'])}}
    </div>
    <div class="form-group">
        {{Form::label('Gniazdo NEM', 'Gniazdo NEM')}}
        {{Form::text('Gniazdo NEM', '', ['class'=>'form-control', 'placeholder' =>'Gniazdo NEM'])}}
    </div>
    <div class="form-group">
        {{Form::label('KKS', 'KKS')}}
        {{Form::text('KKS', '', ['class'=>'form-control', 'placeholder' =>'KKS'])}}
    </div>
    <div class="form-group">
        {{Form::label('Zd spręż', 'Zd spręż')}}
        {{Form::text('Zd spręż', '', ['class'=>'form-control', 'placeholder' =>'Zd spręż'])}}
    </div>
    <div class="form-group">
        {{Form::label('Koła', 'Koła')}}
        {{Form::text('Koła', '', ['class'=>'form-control', 'placeholder' =>'Koła'])}}
    </div>
    <div class="form-group">
        {{Form::label('Wymiar wew:', 'Wymiar wew:')}}
        {{Form::text('Wymiar wew:', '', ['class'=>'form-control', 'placeholder' =>'Wymiar wew:'])}}
    </div>
    <div class="form-group">
        {{Form::label('Felga', 'Felga')}}
        {{Form::text('Felga', '', ['class'=>'form-control', 'placeholder' =>'Felga'])}}
    </div>
    <div class="form-group">
        {{Form::label('RP25', 'RP25')}}
        {{Form::text('RP25', '', ['class'=>'form-control', 'placeholder' =>'RP25'])}}
    </div>
    <div class="form-group">
        {{Form::label('Długość modelu', 'Długość modelu')}}
        {{Form::text('Długość modelu', '', ['class'=>'form-control', 'placeholder' =>'Długość modelu'])}}
    </div>
    <div class="form-group">
        {{Form::label('Ostatnia rewizja', 'Ostatnia rewizja')}}
        {{Form::text('Ostatnia rewizja', '', ['class'=>'form-control', 'placeholder' =>'Ostatnia rewizja'])}}
    </div>
    <div class="form-group">
        {{Form::label('Waga modelu', 'Waga modelu')}}
        {{Form::text('Waga modelu', '', ['class'=>'form-control', 'placeholder' =>'Waga modelu'])}}
    </div>
    <div class="form-group">
        {{Form::label('Przewoźnik', 'Przewoźnik')}}
        {{Form::text('Przewoźnik', '', ['class'=>'form-control', 'placeholder' =>'Przewoźnik'])}}
    </div>
    <div class="form-group">
        {{Form::label('UIC-Typ', 'UIC-Typ')}}
        {{Form::text('UIC-Typ', '', ['class'=>'form-control', 'placeholder' =>'UIC-Typ'])}}
    </div>
    <div class="form-group">
        {{Form::label('Rodzaj hamulca' , 'Rodzaj hamulca')}}
        {{Form::text('Rodzaj hamulca', '', ['class'=>'form-control', 'placeholder' =>'Rodzaj hamulca'])}}
    </div>
    <div class="form-group">
        {{Form::label('Długość całk', 'Długość całk')}}
        {{Form::text('Długość całk', '', ['class'=>'form-control', 'placeholder' =>'Długość całk'])}}
    </div>
    <div class="form-group">
        {{Form::label('Rozstaw osi', 'Rozstaw osi')}}
        {{Form::text('Rozstaw osi', '', ['class'=>'form-control', 'placeholder' =>'Rozstaw osi'])}}
    </div>
    <div class="form-group">
        {{Form::label('Gr obc C', 'Gr obc C')}}
        {{Form::text('Gr obc C', '', ['class'=>'form-control', 'placeholder' =>'Gr obc C'])}}
    </div>
    <div class="form-group">
        {{Form::label('Dł ład', 'Dł ład')}}
        {{Form::text('Dł ład', '', ['class'=>'form-control', 'placeholder' =>'Dł ład'])}}
    </div>
    <div class="form-group">
        {{Form::label('Pow ład:', 'Pow ład:')}}
        {{Form::text('Pow ład:', '', ['class'=>'form-control', 'placeholder' =>'Pow ład:'])}}
    </div>
    <div class="form-group">
        {{Form::label('Obj ład', 'Obj ład')}}
        {{Form::text('Obj ład', '', ['class'=>'form-control', 'placeholder' =>'Obj ład'])}}
    </div>
    <div class="form-group">
        {{Form::label('Uwagi do ładunku', 'Uwagi do ładunku')}}
        {{Form::text('Uwagi do ładunku', '', ['class'=>'form-control', 'placeholder' =>'Uwagi do ładunku'])}}
    </div>

    {{Form::submit('Dodaj', ['class' =>'btn btn-primary'])}}
    {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection