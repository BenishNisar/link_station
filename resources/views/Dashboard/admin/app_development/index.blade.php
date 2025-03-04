@extends("Layout.layouttwo")

@section("AdminContent")

<style>
    /* Remove left and right padding for full-width usage */
    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }

    .table-container {
        margin-left: 10px;
        margin-right: 10px;
    }

    .table-wrapper {
        overflow-x: auto; /* Enables horizontal scrolling */
        -webkit-overflow-scrolling: touch; /* Smooth scrolling on mobile */
        margin-top: 15px; /* Margin above table */
        margin-bottom: 30px; /* Increased space below table */
        padding-bottom: 10px; /* Extra padding to add more space below the table */
    }

    .table {
        width: 100%;
        margin-bottom: 0;
    }

    /* Adjust table header and data cell padding */
    .table th, .table td {
        padding: 10px 12px;
        font-size: 14px;
        white-space: nowrap; /* Prevent text wrapping */
        text-align: left;
    }

    /* Button styling for add new */
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
        /* width: 30vh; */
    }

    .search-input:focus {
        border-color: rgba(0, 0, 0, 0.349);
    }


    /* Flexbox for action icons */
    .actions {
        display: flex;
        justify-content: center;
    }

    /* Spacing for action icons */
    .actions i {
        color: #86092b;
        margin: 0 4px;
        cursor: pointer;
    }

    .actions i:hover {
        transform: scale(1.08);
        color: gray;
    }
</style>

<div class="container-fluid mt-4 table-container">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h1 style="font-size: 23px; font-weight: bolder;">Web Development</h1>

        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search roles...">
            <a href="{{ url('app_development/add') }}" class="add-new-btn">Add New </a>
        </div>
    </div>

    <div class="table-wrapper">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Descripation</th>
                    <th>Profile_Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appDevelopments as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->descripation }}</td>
                    <td>
                        @if ($item->img)
                            <img src="{{ asset($item->img) }}" width="30" height="30" alt="Image">
                        @else
                            No Image
                        @endif
                    </td>
                    <td class="actions">

                        <a href="{{ route('Dashboard.admin.app_development.edit', $item->id) }}"><i class="fas fa-edit" title="Edit"></i></a>
                        <form action="{{ route('Dashboard.admin.app_development.delete', $item->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="border: none; background: none; padding: 0;">
                                <i class="fas fa-trash-alt" title="Delete"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
                <!-- Additional rows can be added here -->
            </tbody>
        </table>
    </div>
</div>

@endsection


