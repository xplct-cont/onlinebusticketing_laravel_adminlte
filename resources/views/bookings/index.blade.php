@extends('layouts.app')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 style="color: dimgray;">BOOKINGS</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-info float-right"
                       href="{{ route('bookings.create') }}">
                        Add New Bookings
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('bookings.table')

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

<style>
    h1{ 
     position: relative;
     left: 85%;  
 }

 </style>
