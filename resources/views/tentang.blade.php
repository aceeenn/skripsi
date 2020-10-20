<!-- menghubungkan dengan view template master -->

@extends ('master')

<!-- isi dengan judul halaman -->
<!-- cara penulisan isi dengan yang pendek -->

@section ('judul_halaman', 'Halaman Tentang')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->

@section ('konten')

    <p>ini adalah halaman tentang</p>
    <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab id deserunt consectetur harum! Dolores, reiciendis! Cupiditate animi eum temporibus necessitatibus soluta assumenda recusandae! At earum, non soluta dicta molestiae placeat!
    </p>

@endsection