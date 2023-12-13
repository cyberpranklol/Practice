@foreach($ocene as $ocenaUcenika)
    <p>{{$ocenaUcenika->predmet}} :
    {{$ocenaUcenika->ocena}} :
    {{$ocenaUcenika->profesor}}</p>
@endforeach
