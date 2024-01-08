@extends('template')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Mahasiswa</div>
                <div class="card-body">
                    <form action="{{url('mahasiswa')}}" method="post">
                        @csrf
                        <div class="row-group row">
                            <label for="nama" class=""></label>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>