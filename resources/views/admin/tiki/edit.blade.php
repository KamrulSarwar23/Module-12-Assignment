@extends('admin.layouts.master')

@section('content')
    <style>
        textarea {
            width: 100%;
            border: 1px solid rgb(206, 206, 206);
            border-radius: 5px;
            background-color: #FDFDFF;
            outline: none;
        }

        .fa-trash {
            cursor: pointer;
            color: rgb(134, 6, 6);
            border: none;
            margin-top: 35px;
            font-size: 20px;

        }

        .fa-trash:hover {
            color: rgb(211, 0, 0);
        }

        button.submit-btn {

            padding: 10px;
            font-size: 16px;
        }

        .fa-percent {
            color: rgb(151, 8, 8);
            font-size: 18px;
        }

        .fa-star {
            color: rgb(177, 2, 2);
            font-size: 8px;
        }
    </style>


    <section class="section">
        <div class="section-header">
            <h1>Table</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Product</h4>
                        </div>

                        <div class="card-body">

                            <form action="{{ route('store-ticket') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Trip Name <i class="fa-solid fa-star"></i></label>
                                            <input type="text" class="form-control" name="trip_name"
                                                value="{{ old('title') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>From <i class="fa-solid fa-star"></i></label>
                                            <select name="from" id="" class="form-control">
                                                <option value="dhaka">Dhaka</option>
                                                <option value="comilla">Comilla</option>
                                                <option value="chittagong">Chittagong</option>
                                                <option value="coxsbazar">Cox's Bazaar</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>To <i class="fa-solid fa-star"></i></label>
                                            <select name="to" id="" class="form-control">
                                                <option value="dhaka">Dhaka</option>
                                                <option value="comilla">Comilla</option>
                                                <option value="chittagong">Chittagong</option>
                                                <option value="coxsbazar">Cox's Bazaar</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Date <i class="fa-solid fa-star"></i></label>
                                            <input type="date" class="form-control" name="date"
                                                value="{{ old('title') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Status <i class="fa-solid fa-star"></i></label>
                                            <select name="status" id="" class="form-control">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="submit-btn btn btn-primary">Add a Trip</button>

                                    </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
