<div>
    @if($comments)
        @foreach ($comments as $articleComment)
            {{$articleComment->body}}
        @endforeach
    @endif
</div>
