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
        <select class="custom-select" id="language" required onchange="selectLang(this)">
            <option selected disabled value="">Choose...</option>
            <option value="{{url('language/en')}}" id="english">English</option>
            <option value="{{url('language/gu')}}" id="gujarati">Gujarati</option>
            <option value="{{url('language/ge')}}" id="german">German</option>

        </select>
    </div>


    <script type="text/javascript">
        let english = document.getElementById('english');
        let german = document.getElementById('german');
        let gujarati = document.getElementById('gujarati');

        function selectLang(lang) {
            changeLocation = window.location = lang.value;
        }


        let getPath = window.location.pathname;
        console.log(getPath);
        switch (getPath) {
            case '/language/gu':
                gujarati.setAttribute('selected', true);
                break;
            case '/language/ge':
                german.setAttribute('selected', true);
                break;
        }
    </script>

</body>

</html>