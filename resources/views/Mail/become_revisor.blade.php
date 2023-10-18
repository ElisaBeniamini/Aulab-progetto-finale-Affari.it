<x-layout><x-navbar/>
<div class="text-center mt-5">
    <h1>Un utente ha richiesto di lavorare con noi.</h1>
    <h2>Ecco i suoi dati:</h2>
    
    
    <div class="card-body shadow rounded col-6 mx-auto p-3">
    <h5 class="card-title">
    <p>Nome: {{$user->name}}</p>
    <p>Email: {{$user->email}}</p>
    <p>Se vuoi renderlo revisore clicca qui:</p>
    <a href="{{route('make.revisor',compact('user'))}}" class="rendi btn btn-outline-primary">Rendi revisore</a>
</div></div>
</div>
</x-layout>