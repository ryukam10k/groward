@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">Words - Edit</div>
                <div class="card-body">
                    @if (count($errors) > 0)
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="/word/edit" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$form->id}}">
                    <table class="table">
                        <tr>
                            <th>name: </th>
                            <td><input type="text" name="name" value="{{$form->name}}"></td>
                        </tr>
                        <tr>
                            <th>howtoread: </th>
                            <td><input type="text" name="howtoread" value="{{$form->howtoread}}"></td>
                        </tr>
                        <tr>
                            <th>meaning: </th>
                            <td><input type="text" name="meaning" value="{{$form->meaning}}"></td>
                        </tr>
                        <tr>
                            <th>source: </th>
                            <td><input type="text" name="source" value="{{$form->source}}"></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><input type="submit" value="send"></td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
