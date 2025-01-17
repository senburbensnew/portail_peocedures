<h1>Liste des procédures</h1>
<ul>
    @foreach ($procedures as $procedure)
        <li>{{ $procedure->nom }} - {{ $procedure->description }}</li>
    @endforeach
</ul>
