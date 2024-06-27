@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <!-- Tautan Kategori -->
                    <div class="mt-3">
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                            {{ __('Categories') }}
                        </a>
                    </div>

                    <!-- Tautan Produk -->
                    <div class="mt-3">
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">
                            {{ __('Products') }}
                        </a>
                    </div>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary mt-3">
                            {{ __('Logout') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
