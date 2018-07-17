@extends('layouts.app')

@section('content')
    <link href="/css/bubble.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Chats</div>



                <div class="wrap">
                    <canvas id="bubble"></canvas>
                </div>
                <div class="panel-footer">
                    <chat-form
                            v-on:messagesent="addMessage"
                            :user="{{ Auth::user() }}"
                    ></chat-form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
