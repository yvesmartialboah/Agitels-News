@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Bonjour !')
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
Vous recevez ce courriel parce que nous avons reçu une demande de réinitialisation du mot de passe de votre compte.

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
Réinitialiser mon mot de passe
@endcomponent
@endisset

{{-- Intro Lines --}}

Si vous n'avez pas demandé une réinitialisation de votre mot de passe, aucune autre action n'est nécessaire.

Je vous prie d'agréer, Monsieur/Madame l'expression de mes salutations distinguées.


{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
{{ config('app.name') }}
@lang(""),<br>
@endif

{{-- Subcopy --}}
@isset($actionText)
@slot('subcopy')
@lang(
    "Si vous avez des difficultés à cliquer sur le bouton \"Réinitialiser mon mot de passe\", copiez et collez l'URL\n".
    'ci-dessous dans votre navigateur web : [:displayableActionUrl](:actionURL)',
    [
        'actionText' => $actionText,
        'actionURL' => $actionUrl,
        'displayableActionUrl' => $displayableActionUrl,
    ]
)
@endslot
@endisset
@endcomponent
