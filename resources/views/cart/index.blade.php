@extends('layouts.app')

@section('title') Cart @endsection

@section('content')
    <div class="container wow fadeIn"><br><br><br>
        <h2 class="my-5 h2 mt-5 text-center">Ваша корзина</h2>

        @if(Cart::getContent()->count() > 0)
            <table class="table table-striped">
                <thead class="black white-text">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Товар</th>
                    <th scope="col">Кол-во</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @php $i = 0; @endphp
                @foreach(Cart::getContent() as $key => $item)
                    @php $i++; @endphp

                    <tr>
                        <th scope="row">{{ $i }}</th>
                        <td>{{ $item->name }}</td>
                        <td>
                            <form action="{{ route('cart.update') }}" enctype="multipart/form-data" method="post">
                                {!! method_field('patch') !!}
                                {!!  csrf_field() !!}

                                <input type="hidden" name="productId" value="{{ $item->id }}">
                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1">

                                <button class="btn btn-sm btn-primary" type="submit">Обновить</button>

                            </form>
                        </td>

                        <td>
                            <a href="{{ route('cart.drop', ['productId' => $item->id]) }}" type="button"
                               class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3">Total:</td>
                    <td><strong>&dollar;{{ Cart::getTotal() }}</strong></td>
                </tr>
                </tfoot>
            </table>
            <a href="{{ route('cart.destroy') }}" class="btn-danger btn btn-lg">Очистить корзину</a>
            <a href="{{ route('cart.checkout') }}" class="btn-success btn btn-lg">
                Продолжить <i class="fa fa-arrow-right"></i>
            </a>
        @else
            <blockquote class="blockquote bq-warning">
                <p class="bq-title">Вам понравился этот продукт??</p>
                <p>Ваша корзина обновлена. Если вы хотите выбрать продукт перейдите в - <a href="{{ url('/#sec_fre') }}">каталог</a> a
                </p>
            </blockquote>
        @endif
    </div>
@stop
