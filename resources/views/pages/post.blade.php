@extends('layouts.default')

@section('title')
	Post | Loofow
@endsection

@section('style')
	.content {
	    text-align: center;
	}

	.title {
	    font-size: 84px;
	}

	.links > a {
	    color: #636b6f;
	    padding: 0 25px;
	    font-size: 13px;
	    font-weight: 600;
	    letter-spacing: .1rem;
	    text-decoration: none;
	    text-transform: uppercase;
	}

	.m-b-md {
	    margin-bottom: 30px;
	}
@endsection

@section('content')
<div class="container">
	<p class="title is-1">{{ $post[0]->name }}</p>
	<p class="subtitle is-3">{{ $post[0]->category }}</p>
	
	{{ csrf_field() }}
	<div class="columns">
		<div class="column is-one-third">
			<figure class="image">
				<img src="{{ url($post[0]->image) }}">
			</figure>
		</div>
		<div class="column">
			<p class="subtitle is-5"><strong>Provinsi:</strong> {{ $post[0]->province }}</p>
			<p class="subtitle is-5"><strong>Kota:</strong> {{ $post[0]->city }}</p>
			<p class="subtitle is-5"><strong>Jalan:</strong> {{ $post[0]->district }}</p>
			<p class="subtitle is-5"><strong>Tanggal Ditemukan/Hilang:</strong> {{ $post[0]->date }}-{{ $post[0]->month }}-{{ $post[0]->year }}</p>
			<p class="subtitle is-5"><strong>Warna:</strong> {{ $post[0]->color }}</p>
			<p class="subtitle is-5"><strong>Model:</strong> {{ $post[0]->model }}</p>
		</div>
		<div class="column">
			<p class="subtitle is-5"><strong>ID Barang:</strong> {{ $post[0]->id }}</p>
			<p class="subtitle is-5"><strong>Deskripsi:</strong></p>
			<div class="subtitle is-5">{{ $post[0]->description }}</div>
			<div class="buttons">
			<a href="{{url('/verification/' . $post[0]->id)}}">
				<button type="submit" class="button is-warning"><strong>Claim</strong></button>
			</a>
			</div>
		</div>
	</div>
	
</div>

@endsection
