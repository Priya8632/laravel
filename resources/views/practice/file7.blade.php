<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>function 4</title>
</head>
<body>

<div id="demo">

</div>

<div class="container bg-dark text-light p-3 m-3">
    @if(isset($result))
            @switch($result)
                @case('apple')
                    <h2>apple is red</h2>
                    <button class="btn btn-primary" onclick="check()">Click</button>
                @break

                @case('mango')
                    <h2>mango is orange</h2>
                @break

                @case('banana')
                    <h2>banana is yellow</h2>
                @break

                <!-- @default
                    <h2>all are fruits</h2>
                @break -->

            @endswitch
            @endif
</div>
<div class="container bg-success text-dark p-3 m-3">
    @if(isset($data))
    <h2>ans :{{$data}}</h2>
    @endif
</div>
<script>

    function check()
    {
        document.getElementById("demo").innerHTML = "thnk you so mach for one click.." ;
    }

</script>
</body>
</html>