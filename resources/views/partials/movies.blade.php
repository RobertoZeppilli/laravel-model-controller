<section class="movies">
    @foreach ($movies as $movie)
        <div class="movie">
            <h3>{{ $movie->title }}</h3>
            <h4>{{ $movie->original_title }}</h4>
            <small class="nationality">{{ $movie->nationality }}</small>
            <small class="date">{{ $movie->date }}</small>
            <span>
                @for ($i = 0; $i < 5; $i++)
                    @if ($i <= $movie->vote / 2)
                        <i class="fas fa-star"></i>
                    @else 
                        <i class="far fa-star"></i>
                    @endif    
                @endfor
            </span>
        </div>
    @endforeach
</section>