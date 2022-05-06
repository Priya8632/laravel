<style>

    ul li a{
        color:black;
    }
</style>


<nav>
    <ul class="nav p-2">
        <img src="images/logo_cake.png" height="70px" width="150px" style="float:left;margin-right:900px;" alt="">
        <li class="nav-item"><a href="Home" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="about" class="nav-link">ABOUT</a></li>
        <li class="nav-item"><a href="Product" class="nav-link">SHOP</a></li>
        <li class="nav-item"><a href="userForm" class="nav-link">RAGISTER</a></li>
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