@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="content__header__title"><a href="/sentence/">English Sentence</a> - Add</div>
                </div>
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
                    <form action="/sentence/add" method="post">
                        {{ csrf_field() }}
                        <div>Sentence</div>
                        <div>
                            <textarea @keypress.space="getWords" v-on:change="getWords" id="sentence" v-model="sentence" class="form-control" rows="4" name="name">{{old('name')}}</textarea>
                        </div>
                        <div>Meaning</div>
                        <div>
                            <textarea class="form-control" rows="4" name="meaning">{{old('meaning')}}</textarea>
                        </div>
                        <hr>
                        <div>
                            <input type="submit" class="btn btn-primary btn-block" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="content__header__title">Related words</div>
                </div>
                <div class="card-body">
                    <ul>
                        <li v-for="word in words">
                            @{{ word.name + "   " + word.meaning }}
                            <a v-if="word.meaning === 'unknown'" href="/eng_word/add" target="_blank">:Add</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
