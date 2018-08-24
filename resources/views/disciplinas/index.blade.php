    <a href='disciplinas/create'>Cadastrar Disciplina</a>
    <ul>
    @foreach ($disciplinas as $disciplina)
        <li>
            <a href="/disciplinas/{{ $disciplina->id }}">
                {{ $disciplina->titulo }}
            </a>
        </li>
    @endforeach
    </ul>
