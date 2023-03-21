@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <div>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <h2>I miei viaggi</h2>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITOLO</th>
                    <th scope="col">ANNO</th>
                    <th scope="col">AZIONI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $element)
                    <tr>
                        <th scope="row">{{ $element->id }}</th>
                        <td>{{ $element->title }}</td>
                        <td>{{ $element->date }}</td>
                        <td>
                            <a class="btn btn-primary" href="#">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a class="btn btn-warning" href="#">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                            <a class="btn btn-dark" href="#">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection