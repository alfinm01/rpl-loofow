@extends('layouts.default')

@section('title')
	Dashboard | Loofow
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
        <div id="flow">
            <span class="flow-1"></span>
            <span class="flow-2"></span>
            <span class="flow-3"></span>
        </div>
        <div class="section">
			<div class="title is-1"> 
				Dashboard <br> <br> 
			</div> 
			<div class="title is-3"> 
				My Post <br> 
			</div>
			<div class="hero is-info is-small"> 
				<div class="hero-body">
					<div class="container"> 
						<h1 class="title"> 
							Lost
						</h1>
					</div>
				</div>
			</div>
			<br>
			@foreach ($postLost as $key => $post)
				@if ($key % 3 == 0)
				<div class="row columns">
				@endif
			@endforeach
			@foreach ($postLost as $key => $post)
					<div class="column is-one-third">
						<div class="card large">
							<div class="card-image">
								<figure class="image is-square">
									<img src="{{ url($post->image) }}" alt="Image">
								</figure>
							</div>
							<div class="card-content">
								<div class="media">
									<div class="media-content">
										<p class="title is-4 no-padding">{{ $post->name }}</p>
										<p class="subtitle is-6">{{ $post->type }}</p>
									</div>
								</div>
								<div class="content">
									{{ substr($post->description, 0, 20) . "..." }}
								</div>
								<nav class="level"> 

								<div class="level-left">

									<div class="level-item">

										<a href="{{url('/post/' . $post->id)}}">

											<button class="button is-black">Details</button>

										</a>

									</div>

									<div class="level-item">

										<a href="{{url('/edit-post/' . $post->id)}}">

											<button class="button is-black">Edit</button>

										</a>

									</div>

								</div>

							</nav>
							</div>
						</div>
					</div>
			@endforeach
			@foreach ($postLost as $key => $post)
			@if ($key % 3 == 0)
				</div>
				@endif
			@endforeach
			<br>
			<div class="hero is-info is-small"> 
				<div class="hero-body">
					<div class="container"> 
						<h1 class="title"> 
							Found
						</h1>
					</div>
				</div>
			</div>
			<br>
            <div class="row columns is-multicolumn">
				@foreach ($postFound as $post)
                <div class="column is-one-third">
					<div class="card large">
						<div class="card-image">
							<figure class="image is-square">
							<img src="{{ url($post->image) }}" alt="Image">
							</figure>
						</div>
						<div class="card-content">
							<div class="media">
								<div class="media-content">
									<p class="title is-4 no-padding">{{ $post->name }}</p>
									<p class="subtitle is-6">{{ $post->type }}</p>
								</div>
							</div>
							<div class="content">
								{{ substr($post->description, 0, 20) . "..." }}
							</div>
							<nav class="level"> 
								<div class="level-left">
									<div class="level-item">
										<a href="{{url('/post/' . $post->id)}}">
											<button class="button is-black">Details</button>
										</a>
									</div>
									<div class="level-item">
										<a href="{{url('/edit-post/' . $post->id)}}">
											<button class="button is-black">Edit</button>
										</a>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<br>
			<div class="hero is-info is-small"> 
				<div class="hero-body">
					<div class="container"> 
						<h1 class="title"> 
							Claim
						</h1>
					</div>
				</div>
			</div>
			<br>
            <div class="row columns is-multicolumn">
				@foreach ($postClaim as $post)
                <div class="column is-one-third">
					<div class="card large">
						<div class="card-image">
							<figure class="image is-square">
							<img src="{{ url($post->image) }}" alt="Image">
							</figure>
						</div>
						<div class="card-content">
							<div class="media">
								<div class="media-content">
									<p class="title is-4 no-padding">{{ $post->name }}</p>
									<p class="subtitle is-6">{{ $post->type }}</p>
								</div>
							</div>
							<div class="content">
								{{substr($post->description, 0, 20) . "..." }}
							</div>
							<nav class="level"> 
								<div class="level-left">
									<div class="level-item">
										<a href="{{url('/post/' . $post->id)}}">
											<button class="button is-black">See</button>
										</a>
									</div>
								</div>
							</nav>
						</div>
					</div>
				</div>
				@endforeach
			</div>
        </div>
	</div>
@endsection