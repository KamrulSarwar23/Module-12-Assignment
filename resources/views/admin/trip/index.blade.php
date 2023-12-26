@extends('admin.layouts.master')

@section('content')
    <style>
        td a i {
            font-size: 15px;
        }
    </style>

    <section class="section">
        <div class="section-header">
            <h1>Trip</h1>

        </div>

        <div class="section-body">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Trip</h4>
                            <div class="card-header-action">
                                <a href="{{ route('trips.create') }}" class="btn btn-primary">Create Trip</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-hover">
                                <th>ID</th>
                                <th>From</th>
                                <th>To</th>
                                <th>Seat Capacity</th>
                                <th>Date</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                @foreach ($trip as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ ucwords($item->from) }}</td>
                                        <td>{{ ucwords($item->to) }}</td>
                                        <td>{{ $item->seat_capacity }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td><a class="btn btn-info m-1" href="{{ route('trips.edit', $item->id) }}"><i
                                            class="fa-solid fa-pen-to-square"></i></a></td>
                                        <td>
                                            <a class="btn btn-light m-1 delete-item"
                                                href="{{ route('trips.destroy', $item->id) }}"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
