{{-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<!-- Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-danger text-white">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Whoops! There were some problems with your input.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <lu id="errorList">
                    <!-- Error messages will be displayed here -->
                </lu>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@if (count($errors) > 0)
    <script>
        $(document).ready(function() {
            $('#errorList').empty();
            @foreach ($errors->all() as $error)
                $('#errorList').append('<li>{{ $error }}</li>');
            @endforeach
            $('#errorModal').modal('show'); // Show the modal
        });
    </script>
@endif
