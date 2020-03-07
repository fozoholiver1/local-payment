@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome To Our Purchase Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="  ">

                        You are logged in!
                    </div>
                <h1>buy our image</h1>


                <div class="">

                    <div class="pt-3  ">
                        <img src="wolfgang-hasselmann-WrVvYxq11Yk-unsplash.jpg" alt=" forget" class=" w-100">
                    </div>

                    <div
                    class="mobile-money-qr-payment pt-3"
                           data-api-user-id="be01a94f04954736a2a07460c9ce244f"
                           data-amount="100"
                           data-currency="XAF"
                           data-external-id="144-123-323"
                    >
                        <a href="wolfgang-hasselmann-WrVvYxq11Yk-unsplash.jpg" download="wolfgang-hasselmann-WrVvYxq11Yk-unsplash.jpg">
                            <button type="submit" class=" btn btn-success  " > Download</button>
                        </a>

                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
