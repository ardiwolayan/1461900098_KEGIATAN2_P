@extends('0098layout')
@section('content')

<div>
    <!-- <a href="/0098/0098laravel">
        <img width="369" height="136" src="{{url('/laravel.png')}}">
    </a>
    <br>
    <a href="/0098/0098codeigniter">
        <img width="350" height="400" src="{{url('/codeigniter.png')}}">
    </a> -->

    <main role="main" class="flex-shrink0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Select Where</h1>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center" scope="col">Kode Buku</th>
                                            <th class="text-center" scope="col">Kode Penerbit</th>
                                            <th class="text-center" scope="col">Judul Buku</th>
                                            <th class="text-center" scope="col">Pengarang Buku</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- kode_buku kode_kategori kode_penerbit judul_buku jumlah_buku pengarang_buku tahun_terbit_buku -->
                                        @foreach($buku as $b)
                                        <tr>
                                            <td class="text-center">{{$b->kode_buku}}</td>
                                            <td class="text-center">{{$b->kode_penerbit}}</td>
                                            <td class="text-center">{{$b->judul_buku}}</td>
                                            <td class="text-center">{{$b->pengarang_buku}}</td>
                                            @endforeach
                                            <!-- <td>
                                                <a href="editmk.php?id=">
                                                    <center>Edit</center>
                                                </a>
                                                <a href="hapusmk.php?id=">
                                                    <center>Hapus</center>
                                                </a>
                                            </td> -->
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- 			 			<a type="botton" class="btn btn-primary" href="tambahmobilkeluar.php" style="float: left;" href="daftar.php"> Tambah Mobil </a>
 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>


    <ul>

    </ul>

</div>
@stop