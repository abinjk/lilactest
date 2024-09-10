@foreach($users as $user)
    <div class="col-md-6">
        <div class="card mb-4">
            <h5 class="user-info">{{ $user->name }}</h5>
            <p class="card-text">
            <h6>{{ $user->department->name ?? 'N/A' }}</h6>
            <h8>{{ $user->designation->name ?? 'N/A' }}</h8>
            </p>
        </div>
    </div>
@endforeach