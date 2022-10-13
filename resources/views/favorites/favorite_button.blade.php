{{-- @if (Auth::id() != $user->id) --}}
    @if (Auth::user()->is_favorites($micropost->id))
        {{-- お気に入りを削除するボタンのフォーム --}}
                        {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
                        {!! Form::submit('Unfavorite', ['class' => "btn btn-success btn-sm"]) !!}
                        {!! Form::close() !!}
                        @else
                            {{-- お気に入りボタンのフォーム --}}
                            {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
                            {!! Form::submit('Favorite', ['class' => "btn btn-light btn-sm"]) !!}
                            {!! Form::close() !!}
    @endif
{{--@endif--}}