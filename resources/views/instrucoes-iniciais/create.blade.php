@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Nova instrução</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                {!! Form::open() !!}
                <div class="form-group">
                    {!! Form::label('lbIntrucao', 'Instrução:') !!}
                    {!! Form::textarea('txtInstrucao', null, ['rows' => '5', 'class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Criar Instrução', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection