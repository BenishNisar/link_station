@extends("Layout.layouttwo")
@section("AdminContent")

<style>
    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }

    .table-container {
        margin-left: 10px;
        margin-right: 10px;
    }

    .table-wrapper {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        margin-top: 15px;
        margin-bottom: 30px;
        padding-bottom: 10px;
    }

    .table {
        width: 100%;
        margin-bottom: 0;
    }

    .table th, .table td {
        padding: 10px 12px;
        font-size: 14px;
        white-space: nowrap;
        text-align: left;
    }

    .add-new-btn {
        background-color: #b10937;
        color: white;
        border: none;
        padding: 8px 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .add-new-btn:hover {
        background-color: #86092b;
        color: white;
    }

    .search-container {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-left: auto;
    }

    .search-input {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 250px;
        outline: none;
        font-size: 14px;
    }

    .search-input:focus {
        border-color: rgba(0, 0, 0, 0.349);
    }

    .actions {
        display: flex;
        justify-content: center;
        gap: 5px;
    }

    .actions i {
        color: #86092b;
        cursor: pointer;
        transition: color 0.3s;
    }

    .actions i:hover {
        transform: scale(1.08);
        color: gray;
    }
</style>

<div class="container-fluid mt-4 table-container">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1 style="font-size: 23px;">Users</h1>
        <a href="{{ url('dashboard/admin/users/add') }}" class="add-new-btn">Add New</a>
    </div>

    <div class="table-wrapper">
        <table class="table table-bordered table-striped">


                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Gender</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Profile_Image</th>
                                    <th>Role_id</th>
                                    <th>Martial_status</th>
                                    <th>Department</th> <!-- Add this header -->
                                    <th>employee_name</th>
                                    <th>designation</th>
                                    <th>location</th>

                                    <th>Actions</th> <!-- Add actions column -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $item)

                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->firstname }}</td>
                                        <td>{{ $item->lastname }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->password }}</td>
                                        <td>{{ $item->gender }}</td>
                                        <td>{{ $item->country }}</td>
                                        <td>{{ $item->city }}</td>
                                        <td>
                                            @if($item->profile_img)
                                                <img src="{{ asset($item->profile_img) }}" alt="Profile Image" style="width: 50px; height: auto;">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $item->role_name }}</td>
                                        <td>{{ $item->martial_status }}</td>
              <td>{{ $item->department_name ?? 'N/A' }}</td> <!-- Display department name -->
              <td>{{ $item->employee_name }}</td>
    <td>{{ $item->designation }}</td>
    <td>{{ $item->location_name ?? 'N/A' }}</td> <!-- Display location_name -->

                                        <td class="actions">
                                            {{-- <a href="{{ route('dashboard.admin.users.edit', $item->id) }}"><i class="fas fa-edit"></i></a> <!-- Edit -->

                                            <form action="{{ route('dashboard.admin.users.delete', $item->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn  btn-sm" onclick="return confirm('Are you sure you want to delete this user?');"><i class="fas fa-trash-alt"></i></a></button>
                                                 --}}


                                                 <a href="{{ route('dashboard.admin.users.show', $item->id) }}"><i class="fas fa-eye" title="View"></i></a>
                                                 <a href="{{ route('dashboard.admin.users.edit', $item->id) }}"><i class="fas fa-edit" title="Edit"></i></a>
                                                 <form action="{{ route('dashboard.admin.users.delete', $item->id) }}" method="POST" style="display: inline;">
                                                     @csrf
                                                     @method('DELETE')
                                                     <button type="submit" style="border: none; background: none; padding: 0;">
                                                         <i class="fas fa-trash-alt" title="Delete"></i>
                                                     </button>
                                                 </form>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>



@endsection
