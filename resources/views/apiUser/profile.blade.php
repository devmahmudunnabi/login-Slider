<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER INFORMATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <table class="table  ">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $userInfo->name }}</td>
                        <td>{{$userInfo->email}}</td>
                        <td>{{$userInfo->phone}}</td>
                        <td>{{$userInfo->address}}</td>
                    </tr>
                    </tbody>               
                </table>
            </div>
            <div class="col-md-6">
                <form action="{{ Route('updateApi', $userInfo->id )}}" method="POST">
                    @csrf                
                    <div class="form-group">
                        <input type="text" name="appname" class="mt-3 form-control" placeholder="Enter your Appname" require>
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" class="mt-3 form-control" placeholder="Enter your Description" require>
                    </div>
                    <div class="form-group">
                        <input type="text" name="url" class="mt-3 form-control" placeholder="Enter your URL" require>
                    </div>
                    <button class="btn btn-success btn-sm mt-3">Save Change</button>
                </form>  
                <button value="{{ $userInfo->id}}" class="btn btn-info btn-sm mt-3 getCode">Get Code</button>  
                <h4>Your Cleint ID :- <span class="id"></span></h4>
                <h4>Your Token :- <span class="token"></span></h4>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    jQuery(document).ready(function(){
        jQuery(".getCode").click(function(){
           var id =jQuery(this).val();
           $.ajax({
                url:"/api/apiCode/"+id,
                type:"GET",
                dataType:"JSON",
                success:function(response){
                    jQuery(".id").text(response.alldata.clientid);
                    jQuery(".token").text(response.alldata.token);
                }
           });
        });
    });
</script>
</body>
</html>