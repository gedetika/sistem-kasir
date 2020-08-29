@extends('template.theme')
@section('title-page', 'Daftar barang terjual')
@section('container')
@include('template.navbar')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
                <!--card-->
                <div class="card">
                    <div class="card-body">
                        <h3>Daftar Barang Terjual</h3>
                        <!--tabel barang-->
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                        <!--end tabel barang-->
                    </div>
                </div>
                <!--end card-->
        </div>
    </div>
</div>
@endsection