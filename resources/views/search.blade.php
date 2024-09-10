@extends('layout')
@section('content')


<div class="search-container">
    <h4>Search</h4>
    <input type="text" class="form-control" placeholder="Search name/designation/department" id="searchInput">
</div>
<div id="resultFill" class="row mt-4">
    @include('search_sub', ['users' => $users])
</div>


<script type="text/javascript">
    $('#searchInput').on('input', function (e) {
        $('#resultFill').html("");
        $.ajax({
            url: "{{ route('search') }}",
            type: 'POST',
            data: {
                "_token": $('meta[name="csrf-token"]').attr('content'),
                searchparam: $('#searchInput').val()
            },
            success: function (response) {
                $('#resultFill').html(response);
            },
            error: function (xhr) {
                $('#error').html('<div class="alert alert-danger">Error: ' + xhr.responseText + '</div>');
            }
        });
    })
</script>
@endsection