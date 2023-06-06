@extends("layouts.app")
@section("content")
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">Item List</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('employees.create') }}" class="btn
btn-dark bg-secondary">Input Item</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Amount</th>
                        <th>Information</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->nameitem }}</td>
                            <td>{{ $employee->priceitem }}</td>
                            <td>{{ $employee->descriptionitem }}</td>
                            <td>{{ $employee->amount }}</td>
                            <td>{{ $employee->position->name }}</td>
                            <td>@include("item.actions")</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
