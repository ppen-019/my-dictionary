@extends('commons.app')

@section('content')
<div class="text-center">
    <h1>Good一覧</h1>
</div>
<div class="mx-0 my-2 py-2 border" style="background-color:#f0f8ff">    
    {!! Form::open(['route' => ['search.good_cards', $user->id]]) !!}
        <div class="form-group d-flex flex-row my-auto justify-content-between">
            {!! Form::text('keyword', null, ['class' => 'form-control col-sm-4', 'placeholder' => '日本語または英語で検索']) !!}
            {!! Form::submit('Search', ['class' => 'btn btn-primary btn-block col-sm-2']) !!}
        </div>               
    {!! Form::close() !!}     
</div>
<div>
    @include('cards.cards', ['cards' => $cards])
</div>    
@endsection