
@extends("Layout.layouttwo")
<style>
    .profile-image {
    width: 60px; /* Adjust as needed */
    height: 60px; /* Adjust as needed */
    object-fit: cover; /* Ensures the image is properly cropped */
    border-radius: 50%; /* Makes it circular */
    border: 2px solid #ddd; /* Optional: Adds a border */
    padding: 2px; /* Optional: Adds spacing */
}

</style>
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
        <a href="{{ url('users/add') }}" class="add-new-btn">Add New</a>
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
                                    <th>zip_code</th>
                                    <th>Role_id</th>

                                    <th>organization</th>

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

                                            <img src="{{ asset($item->profile_img) }}" width="50px" height="50px" alt="Profile Image">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $item->zip_code }}</td>

                                        <td>{{ $item->role_id }}</td>
                                        <td>{{ $item->organization }}</td>

                                        <td class="actions">




                                                 {{-- <a href="{{ route('dashboard.admin.users.show', $item->id) }}"><i class="fas fa-eye" title="View"></i></a> --}}
                                                 <a href="{{ route('Dashboard.admin.users.edit', $item->id) }}"><i class="fas fa-edit" title="Edit"></i></a>
                                                 <form action="{{ route('Dashboard.admin.users.delete', $item->id) }}" method="POST" style="display: inline;">
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
