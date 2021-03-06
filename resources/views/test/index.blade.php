@extends('commons.app')
@section('content')
    <div class="text-center my-5">
        <h1>単語テスト</h1>
    </div>
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route' => ['users.test', Auth::id()], 'method' => 'get']) !!}
                <div class="form-group">
                    <div>
                    {!! Form::label('scope', '出題範囲') !!}
                    </div>
                    
                    <div>
                    {!! Form::radio('scope', 'my_cards', true) !!}
                    {!! Form::label('my_cards', 'My Cardsから出題', ['class' => 'mr-5']) !!}
                    </div>
                    
                    <div>
                    {!! Form::radio('scope', 'good') !!}
                    {!! Form::label('good', 'Likeしたカードから出題') !!}
                    </div>
                </div>
                <div class="form-group">
                    <div>
                    {!! Form::label('style', '出題形式') !!}
                    </div>
                    
                    <div>
                    {!! Form::radio('style', 'english_question', true) !!}
                    {!! Form::label('english_question', '英→日', ['class' => 'mr-5']) !!}
                    </div>

                    <div>
                    {!! Form::radio('style', 'japanese_question') !!}
                    {!! Form::label('japanese_question', '日→英') !!}
                    </div>
                </div>                
                {!! Form::submit('テスト開始', ['class' => 'btn btn-dark btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection