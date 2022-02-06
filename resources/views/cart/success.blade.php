@extends('layouts.auth')

@section('title') Cпасибо за заказ! @stop

@section('content')
    <div class="container mt-5">
        <blockquote class="blockquote bq-success mt-5"><br>
            <p class="bq-title mt-5">Спасибо за заказ!</p>
            <p>Привет, {{ auth()->user()->name  ?? 'Пользователь' }}</p>

            <p>Твой заказ <strong>#{{ $order->id }}</strong> Обработан и передан нашем менеджерам! Мы обязательно свяжемся с вами!</p>
        </blockquote>

        <div class="row">
            <div class="col">
                <a href="{{ route('index') }}" class="btn btn-success mt-2">На главную</a>
            </div>
        </div>
    </div>

@stop

