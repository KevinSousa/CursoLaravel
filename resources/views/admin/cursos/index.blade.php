@extends('layout.site')
@section('titulo','Cursos')
@section('conteudo')
	<div class="container">
		<h3 class="center">Lista de Cursos</h3>
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>TÍTULO</th>
						<th>DESCRIÇÃO</th>
						<th>IMAGEM</th>
						<th>PUBLICADO</th>
						<th>AÇÃO</th>
					</tr>
				</thead>
				<tbody>
					@foreach($registros as $registro)
						<tr>
							<td>{{$registro -> id}}</td>
							<td>{{$registro -> titulo}}</td>
							<td>{{$registro -> descricao}}</td>
							<td><img width="90" src="{{asset($registro->imagem)}}" alt="{{$registro->titulo}}"></td>
							<td>{{$registro -> publicado}}</td>
							<td>
								<a class="btn deep-orange" href="{{route('admin.cursos.editar', $registro->id) }}">Editar</a>
								<a class="btn deep-red" href="{{route('admin.cursos.deletar', $registro->id) }}">Deletar</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			<a class="btn deep-blue" href="{{route('admin.cursos.adicionar')}}">Adicionar</a>
		</div>
	</div>
@endsection()
