@if (Auth::user()->rol=="Usuario")
    @php($vista="usuario")
@elseif(Auth::user()->rol=="Administrador")    
    @php($vista="app")
    @elseif(Auth::user()->rol=="Conductor")    
    @php($vista="perfilconductor")
@endif

@extends('layouts.'. $vista)

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Welcome Back / Bienvenido de nuevo') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
