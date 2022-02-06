@extends('layouts.app')

@section('title') Обработка заказа @endsection

@section('content')
    <div class="container wow fadeIn">

        <!-- Heading -->
        <h2 class="my-5 h2 text-center">Обработка</h2>

        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-md-8 mb-4">
                <!--Card-->
                <div class="card">
                    <!--Card content-->
                    <form class="card-body" action="{{ route('order.store') }}" method="post">
                    {{ csrf_field() }}

                    <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-6 mb-2">
                                <!--firstName-->
                                <div class="form-group">
                                    <label for="firstName" class="">Ваше имя</label>
                                    <input type="text" id="firstName" class="form-control" name="customerName"
                                           value="{{ auth()->user()->name ?? null }}">
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-2">
                                <!--lastName-->
                                <div class="form-group">
                                    <label for="lastName" class="">Ваша фамилия</label>
                                    <input type="text" id="lastName" class="form-control" name="customerLastName"
                                           value="{{ auth()->user()->lastname ?? null }}">
                                </div>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--email-->
                        <div class="form-group mb-5">
                            <label for="email" class="">Email</label>
                            <input type="text" id="email" class="form-control" placeholder="youremail@example.com"
                                   name="customerEmail" value="{{ auth()->user()->email ?? null }}" required>
                        </div>

                        <!--address-->
                        <div class="form-group mb-5">
                            <label for="phone" class="">Номер телефона</label>
                            <input type="text" id="phone" class="form-control" placeholder="+7 (123) 456-7890"
                                   name="customerPhone" value="{{ auth()->user()->phone ?? null }}">
                        </div>

                        <div class="form-group mb-5">
                            <label for="address" class="">Адресс проживания</label>
                            <input type="text" id="address" class="form-control"
                                   placeholder="Г.Оренбург , победы 155 , д3."
                                   name="customerAddress" value="{{ auth()->user()->address ?? null }}">
                        </div>

                        <div class="form-group mb-5">
                            <label for="comment" class="">Коментраий</label>
                            <textarea type="text" id="comment" class="form-control"
                                      placeholder="Оставьте коментарий к заказу"
                                      name="customerComment"></textarea>
                        </div>

                        <hr class="mb-4">

                        @guest
                        @else
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="save-info" name="updateUser">
                                <label class="custom-control-label" for="save-info">Сохранить информацию на следующий раз</label>
                            </div>
                            <hr class="mb-4">
                        @endif
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Оформить заказ</button>

                    </form>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-4">
                <!-- Heading -->
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Ваша корзина</span>
                    <span class="badge badge-secondary badge-pill">{{ Cart::getTotal() }}</span>
                </h4>

                <!-- Cart -->
                <ul class="list-group mb-3 z-depth-1">
                    @foreach(Cart::getContent() as $item)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">{{ $item->name }}</h6>
                                <small class="text-muted">x {{ $item->quantity }}</small>
                            </div>
                            <span class="text-muted">&dollar;{{ $item->price *  $item->quantity }}</span>
                        </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Итог:</span>
                        <strong>&dollar;{{ Cart::getTotal() }}</strong>
                    </li>
                </ul>
                <!-- Cart -->
                <a href="{{ route('cart.index') }}" class="btn-info btn btn-lg"><i class="fa fa-arrow-left"></i> Вернуться</a>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
@endsection
