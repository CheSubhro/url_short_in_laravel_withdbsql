<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1,   shrink-to-fit=no">
            <title>URL Shortener</title>
            <!-- Bootstrap CSS CDN -->
            <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        </head>
            <body>
                <div class="container">
                    <h3 class="text-center">URL Shortener</h3>
                    <hr>
                    @if(session('shortened_url'))
                        <div class="alert alert-success">
                            Shortened URL: <a href="{{ session('shortened_url') }}" target="_blank">{{ session('shortened_url') }}</a>
                        </div>
                    @endif

                    <form method="POST" action="{{ url('/store') }}">
                            @csrf
                                <div class="mb-3">
                                <label for="url" class="form-label">Enter URL</label>
                                <input type="url" class="form-control" id="url" name="url" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Shorten URL</button>
                            </div> 
                        </form>
                </div>
                <!-- Bootstrap JS CDN -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            </body>
    </html>
