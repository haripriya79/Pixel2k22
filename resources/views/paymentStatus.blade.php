<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Success</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>


@if($status == true)

    <div class="container mx-auto text-center mt-5 pt-5">

        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTgyobPWtA8sK4FUdJ7v2mVN1k1XYUwsy1q8A&usqp=CAU" class="img-fluid">

        <h2>Your payment has been processed successfully</h2>
        <h2>Your payment id is </h2> <h1>{{$rp_payment_id}}</h1>
        <a class="btn btn-info" href="/">Back </a>

    </div>
@else

    <div class="container mx-auto text-center mt-5 p-5">
        <h3>Something went wrong</h3>
        <img src="https://i.ytimg.com/vi/z8wrRRR7_qU/maxresdefault.jpg" class="img-fluid">
    </div>
@endif

</body>

</html>
