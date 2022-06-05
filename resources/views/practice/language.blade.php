<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <h1>{{__('product.userName')}}</h1>
    <h2>{{__('product.Details')}}</h2>

    <!-- language dropdown -->
    <div class="col-md-3 mb-3">
           <h2> <label for="validationDefault04">Languages</label></h2>
            <select class="custom-select" id="validationDefault04" required onchange = "javascript:handle(this)">
                <option selected disabled value="">Choose...</option>
                <option><a href="{{url('mac/en')}}">English</a></option>
                <option><a href="{{url('mac/gu')}}">Gujarati</a></option>
            </select>
    </div>

    
<script type="text/javascript">
    function handle(elm)
    {
        window.location = elm.value;
    }

</script>
  
</body>

</html>