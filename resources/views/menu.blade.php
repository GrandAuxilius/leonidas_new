@extends('layouts.header')

@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>Menu</h4>
                    <h6>Manage your Menu</h6>
                </div>
                <div class="page-btn">
                    <a href="{{ route('menu.create') }}" class="btn btn-added">
                        <img src="assets/img/icons/plus.svg" alt="img">Add Menu
                    </a>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table datanew">
                            <thead>
                            <tr>
                                <th>Menu Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($menuList as $menu)
                                    <tr>
                                        <td>{{ $menu->menuName }}</td>
                                        <td>{{ $menu->menuCategory }}</td>
                                        <td>{{ $menu->price }}</td>
                                        <td>
                                            @if ($menu->menuStatus == 'Available')
                                                <span class="bg-lightgreen badges">{{ $menu->menuStatus }}</span>
                                            @elseif ($menu->menuStatus == 'Unavailable')
                                                <span class="bg-lightred badges">{{ $menu->menuStatus }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a class="me-3" href="{{ route('menu.show', $menu->id) }}">
                                                <img src="assets/img/icons/eye.svg" alt="img">
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
