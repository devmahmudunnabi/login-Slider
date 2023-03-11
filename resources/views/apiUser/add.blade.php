<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h2  style="text-align: center">API SECTION</h2>
                <form action="{{Route('alldataStore')}}" method="POST">
                  @csrf
                    <input type="text" name="name" class="form-control mt-3" placeholder="Enter your name" requird>
                    <input type="text" name="email" class="form-control mt-3" placeholder="Enter your email" requird>
                    <input type="text" name="phone" class="form-control mt-3" placeholder="Enter your phone" requird>
                    <input type="text" name="address" class="form-control mt-3" placeholder="Enter your address" requird>
                    <button class="btn btn-sm btn-success mt-3">Apply now</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>