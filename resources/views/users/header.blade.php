<style>

    ul li a{
        color:black;
    }
    img{
        margin-right: 750px;
        float:left;
    }
    
</style>


<nav>
    <ul class="nav">
        <img src="images/logo.png" height="80px" width="180px" alt="">
        <li class="nav-item"><a href="Home" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="about" class="nav-link">ABOUT</a></li>
        <li class="nav-item"><a href="Product" class="nav-link">SHOP</a></li>
        <li class="nav-item"><a href="signUp" class="nav-link">RAGISTER</a></li>
        <li class="nav-item"><a href="Login" class="nav-link">LOGIN</a></li>
    </ul>
</nav>


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