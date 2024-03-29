<?php
/** @var \App\Models\kendaraan $k */
/** @var */
?>
@extends('template')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Rekomendasi Pengiriman untuk kendaraan {{$k->nama_kendaraan}} ({{$k->plat_kendaraan}})
                <small></small>
            </h1>
        </section>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
        <!-- Main content -->
        <section class="content container-fluid">
            <!--------------------------
                  | Your Page Content Here |
                  -------------------------->
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Total Berat</h5>
                            <p class="card-text text-bold">{{$totalWt}} Kg</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">Total Harga</h5>
                            <p class="card-text text-bold">Rp. {{number_format($totalVal,0,',','.')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title ">Aksi</h5>
{{--                            <p class="card-text text-bold">--}}
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{url('/rekomendasi/kendaraan/'.$k->id_kendaraan.'/invoice')}}" class="btn btn-primary btn-sm" onclick="return confirm('Apakah anda yakin?')">Buat Invoice Pengiriman</a>
                                </div>
                                <div class="col-6">
                                    <a href="{{url('/rekomendasi')}}" class="btn btn-danger btn-sm">Batalkan Rekomendasi</a>
                                </div>
                            </div>
{{--                            </p>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <table id="table_id" class="display">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>No Resi</th>
                            <th>Harga</th>
                            <th>Berat</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($pickedItems as $a => $key)
                            <tr>
                                <?php
                                /** @var array $hargas */
                                /** @var integer $key */
                                /** @var array $berats */
                                ?>
                                <td>{{$a+1}}</td>
                                <td><a href="{{url('/pengiriman/show?')}}{{$barangs[$key]}}">{{$barangs[$key]}}</a></td>
                                <td>Rp. {{number_format($hargas[$key],0,',','.')}}</td>
                                <td>{{$berats[$key]}} Kg</td>
                                {{--                        <td><a href="{{url('/rekomendasi/kendaraan/'.$kendaraan->id_kendaraan)}}" class="btn btn-primary btn-sm">Rekomendasi Pengiriman</a> </td>--}}
                            </tr>
                        @endforeach
                        {{--                    <tr>--}}
                        {{--                        <td colspan="2"><b>Total</b></td>--}}
                        {{--                        <td>Rp. {{number_format($totalVal,0,',','.')}}</td>--}}
                        {{--                        <td>{{$totalWt}} Kg</td>--}}
                        {{--                    </tr>--}}
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" charset="utf8"
                src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function () {
                $.noConflict();
                $('#table_id').DataTable();
            });
        </script>
        <!-- /.content -->
    </div>
@endsection
