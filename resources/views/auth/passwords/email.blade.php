@extends('layouts.reset')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h2 class="text-center text-success">
            Réinitialiser votre mot de passe en renseignant votre addresse mail.
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
                <!-- Un lien de réïnitialisation de mot de passe vous à été envoyé sur votre boîte mail  -->
                {{ session('status') }}
            </div>
        @endif  
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="login-form">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <label>Addresse mail *</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Entrer votre addresse mail" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                    <button type="submit" value="Reinitialiser">Reinitialiser</button>

                    
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
