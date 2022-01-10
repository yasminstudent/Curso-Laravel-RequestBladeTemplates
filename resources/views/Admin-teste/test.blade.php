<h1>Página de teste</h1>

<p>Meu nome é {{ $name }}</p>
<p>Eu tenho {{ $age }} anos</p>

@isset($versao)
    <p>Versão: {{$versao}}</p>
@endisset

@empty($cidade)
    Não existe uma cidade <br>
@endempty

@if($age >= 18 AND $age < 60)
    Eu sou adulta
@elseif($age > 60)
    Eu sou idosa
@else
    Eu sou menor de idade
@endif

<br><br> Laços: <br>
@for($i=0; $i<5; $i++)
    O valor é {{$i}} <br>
@endfor

<br>

<ul>
    @foreach($lista as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>

<ul>
    @forelse($lista as $item)
        <li>{{$item}}</li>
    @empty
        <li>Não há ingredientes</li>
    @endforelse
</ul>

@while($cont < 3)
    Teste {{$cont++}} <br>
@endwhile

<ul>
    @foreach($lista2 as $item)
        <li>{{$item["nome"]}} - {{$item["qt"]}}</li>
    @endforeach
</ul>

