<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reBuy URL shortener</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">reBuy URL shortener</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('shorten.store') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input class="form-control" type="url" name="url" required="required" placeholder="Enter URL" aria-label="Enter URL" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="submit" id="button-addon2">Shorten</button>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
            @if(session('shortened_url'))
                <div class="input-group mb-3">
                        <input type="text" id="shortened-url" class="form-control" value="{{ session('shortened_url') }}" readonly>
                        <button type="button" id="copy-btn" class="btn btn-secondary copy-btn">Copy</button>
                </div>
            @endif
        </div>
    </div>
</div>
<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Success</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">URL has been shortened successfully!</div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script>const copyBtn = document.querySelector('#copy-btn');
    const inputField = document.querySelector('#shortened-url');
    const toastEl = document.getElementById('liveToast');
    const toast = new bootstrap.Toast(toastEl);

    copyBtn.addEventListener('click', () => {
        navigator.clipboard.writeText(inputField.value);
        toast.show();
    });
</script>
</body>
</html>
