
    
<nav class="navbar navbar-expand-lg bg-dark">

    <ul class="navbar nav mr-auto">
        <li class="nav-item"><a href="" class="nav-link text-success">HOME</a></li>
        <li class="nav-item"><a href="" class="nav-link text-success">ABOUT US</a></li>
        <li class="nav-item"><a href="" class="nav-link text-success">COURSE</a></li>
        <li class="nav-item"><a href="" class="nav-link text-success">LOGIN</a></li>
        <li class="nav-item"><a href="" class="nav-link text-success">RAGISTER</a></li>
    </ul>
</nav>

<!-- <nav class="navbar navbar-expand-lg bg-dark">

    <ul class="navbar nav mr-auto">
        <li class="nav-item"><a href="" class="nav-link text-success">HOME</a></li>
        <li class="nav-item"><a href="" class="nav-link text-success">ABOUT US</a></li>
        <li class="nav-item"><a href="" class="nav-link text-success">COURSE</a></li>
        <li class="nav-item"><a href="" class="nav-link text-success">LOGIN</a></li>
        <li class="nav-item"><a href="" class="nav-link text-success">RAGISTER</a></li>
    </ul>
    <button class="badge badge-pill badge-info p-2" style="float:right;" id ="btn">SIGN IN</button>
</nav>
<script>
        $(document).ready(function() {
            $("#btn").click(function() {
                $(".form").slideDown();
            });
        });
    </script>-->

<!--Tab panes--> 
<div class="tab-content">
    <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
    <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
</div>

<script>
    $('#navId a').click(e => {
        e.preventDefault();
        $(this).tab('show');
    });
</script>