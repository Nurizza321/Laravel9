<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>Nur Izza</h1>
    <h1>SMK N 1 Sayung, {{$nama}}, {{$kelas}}</h1>
    
    @if($nama=='admin')
    <a href ="">Ke Halaman Admin</a>
    @elseif($nama=='user')
    <a href ="">Ke Halaman USER</a>
    @else
    <h2> Anda bukan ADMIN dan USER</a>
    @endif

    @switch($i)
    @case(1)
    @break

    @case(2)
    second case...
    @break

    @default
    default case...
    @endswitch

    <br> 

    @for ($i = 0; $i < 0; $i++)
    {{ $i }}
    @endfor

    @foreach($buah as $user)
    {{ $user }}</br>
    @endforeach

</body>
</html>
