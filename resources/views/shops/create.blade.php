@extends('layouts.front')

@section('content')

<div class="register-area ptb-50">
    <div class="container-fluid">
        <div class="section-title-4 text-center mb-40">
            <h2>Request for creating your shop</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-12 col-lg-6 col-xl-6 ml-auto mr-auto">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-form">
                            <form action="{{route('shops.store')}}" method="post">
                                @csrf
                                <label for="name">Name of Shop</label>
                                <input type="text" name="name" id="name" aria-describedby="helpId" placeholder="">

                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3"></textarea>

                                <div class="button-box">
                                    <div class="login-toggle-btn">
                                        <button type="submit" class="default-btn floatright">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection