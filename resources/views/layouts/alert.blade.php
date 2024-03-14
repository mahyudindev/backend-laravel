@if ($message = Session::get('success'))
    <style>
        #myAlert {
            background-color: rgba(55, 140, 231, 0.3);
        }
    </style>
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="myAlert">
        <div class="alert-body">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p>{{ $message }}</p>
        </div>
    </div>
    <script>
        setTimeout(function() {
            $('#myAlert').alert('close');
        }, 3000);
    </script>
@endif
