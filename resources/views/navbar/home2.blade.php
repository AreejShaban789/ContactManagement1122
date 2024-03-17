@extends('layouts.master')
@section('content')

<br><br>
<div class="container">
    <br>
    <h1 class="" style="color: #2487c0">Contact Management System</h1>
    <br>
    <div class="text-end mb-4">
        <div>
            <a class="btn btn-success" href="{{ route('contact.create') }}">Add Contact</a>
        </div>
    </div>
    @include('alert')
    <table id="contacts-table" class="table table-stripped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->id }}</td>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->address }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('contact.edit', ['id' => $contact->id]) }}"><i class="fa fa-edit"></i>Edit</a>
                    <a class="btn btn-danger btn-sm" href="{{ route('contact.delete', ['id' => $contact->id]) }}"><i class="fa fa-trash"></i>Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
    
        function fetchContacts() {
            $.ajax({
                url: '{{ route("contact.index") }}', 
                type: 'GET',
                success: function(response) {
                
                    updateContactTable(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                
                }
            });
        }

    
        function updateContactTable(contacts) {
            var tbody = $('#contacts-table tbody');
            tbody.empty(); 

            $.each(contacts, function(index, contact) {
                
                var newRow = '<tr>' +
                    '<td>' + contact.id + '</td>' +
                    '<td>' + contact.name + '</td>' +
                    '<td>' + contact.email + '</td>' +
                    '<td>' + contact.phone + '</td>' +
                    '<td>' + contact.address + '</td>' +
                    '<td>' +
                    '<a class="btn btn-primary btn-sm" href="/edit/' + contact.id + '"><i class="fa fa-edit"></i>Edit</a> ' +
                    '<a class="btn btn-danger btn-sm" href="/delete/' + contact.id + '"><i class="fa fa-trash"></i>Delete</a>' +
                    '</td>' +
                    '</tr>';

                tbody.append(newRow);
            });
        }

    
        fetchContacts();
    });
    success: function(response) {
    console.log(response); 
    updateContactTable(response);
},

</script>

</div>
<br><br>
@endsection
