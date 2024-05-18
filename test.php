<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <form class="d-flex">
                            <a class="btn btn-success" href="{{route('user.create')}}">New users</a>
                        </form>
                        <h4 class=" page-title">Preloader</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable-buttons" class="table striped dt-responsive nowrap w-100 table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Profile</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($user as $key=>$data)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td id="image" style="display: flex;align-items: center;justify-content: center;margin: 30px;padding: 10px;"><img src="{{ asset('images/' . $data->image) }}" alt="" style="height: 38px;border-radius: 2px;"></td>
                                        <td>{{$data->name}}</td>
                                        <td>{{$data->gender}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->phone}}</td>
                                        <td>{{ $data->role == '1' ? 'enable' : 'disable' }}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td style="margin: 30px;padding: 10px;">
                                            <button value="{{$data->id}}" type="button" class="btn btn-outline-danger delete_users" data-bs-toggle="modal" data-bs-target="#centermodal">
                                                <i class="ri-delete-bin-2-line"></i>
                                            </button>
                                            <button value="{{$data->id}}" type="button" class="btn btn-outline-secondary update_users" data-bs-toggle="modal" data-bs-target="#fullscreeexampleModal">
                                                <i class="ri-ball-pen-line"></i>
                                            </button>
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
    </div>
    @include("admins.include.footer")
</div>