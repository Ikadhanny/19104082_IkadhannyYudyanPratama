{{-- <?php
    $array  = [1,2,3,4,5];

    $nama = "Ikadhanny";

    $nilai = 90;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ini halaman beranda</h1>

    <?php echo "Halo dunia" ?>

    <p>
        {{ "Halo Dunia" }}
    </p>

    <?php if (1+1 == 2) { ?>
        <p>
            {{ "Halo Dunia" }}
        </p>
    <?php } ?>

    @if (1+1 == 2)
        <p>
            {{ "Halo Dunia" }}
        </p>
    @endif

    <hr>

    <h1>Perulangan</h1>

    <?php for($i = 0; $i < count($array); $i++) { ?>
        <p>
            {{ $array[$i] }}
        </p>
    <?php } ?>

    @for($i = 0; $i < count($array); $i++)
    <p>
        {{ $array[$i] }}
    </p>
    @endfor

    <hr>

    <h1>Percabangan</h1>

    @if(1+1 == 3)
        <p>
            {{ "Jawabanya Benar" }}
        </p>
    @else
        {{ "Jawabanya Salah" }}
    @endif

    @if($nama == "Ikadhanny")
        <p>
            {{ "Nama saya Ikadhanny" }}
        </p>
    @elseif($nama == "Wilda")
        <p>
            {{ "Nama saya Wilda" }}
        </p>
    @else
        <p>
            {{ "Nama saya Tidak Diketahui" }}
        </p>
    @endif

    <hr>

    <h1>Percabangan Switch</h1>

    @switch($nilai)
        @case(90)
            {{ "Nilai Anda A" }}
            @break

        @case(80)
            {{ "Nilai Anda B" }}
            @break

        @case(70)
            {{ "Nilai Anda C" }}
            @break

        @default
            {{ "Nilai Anda D" }}

    @endswitch

</body>
</html> --}}
