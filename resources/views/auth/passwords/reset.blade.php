@extends('layouts.reset')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <h2 class="text-center text-success">
            Réinitialisation du mot de passe.
        </h2>
    </div> 
    <div class="row justify-content-center">
       @error('email')
            <div class="alert alert-danger" role="alert">
                <strong>
                        {{ $message }}
                </strong>
            </div>
        @enderror
    </div> 
    <div class="row justify-content-center">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif  
    </div>

    <div class="row justify-content-center">
    @error('password')
            <div class="alert alert-warning" role="alert">
                <strong>{{ $message }}</strong>
            </div>  
    @enderror
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="login-form">
                <form method="POST" action="{{ route('password.update') }}">
                     @csrf

                    <input type="hidden" name="token" value="{{ $token }}">
                    <label>Addresse mail *</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Entrer votre addresse mail" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    <label>Nouveau mot de passe *</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Entrer votre nouveau mot de passe" name="password" value="{{ old('password') }}"  autofocus required autocomplete="new-password">

                    <label>Confirmation du nouveau mot de passe *</label>
                    <input id="password-confirm" type="password" placeholder="Entrer le même mot de passe" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        
                    <button type="submit" value="Reinitialiser">Reinitialiser</button>

                    
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
