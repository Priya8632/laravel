<style>
    .nav-item a {
        color:black;
        font-size: medium;
    }
    .nav img {
        display: flex;
        flex-direction: row-reverse;
    }
</style>

    <nav class="navbar">
        <img src="photos/images/logo.png" height="80px" width="180px" alt="">
        <ul class="nav justify-content-end">
            <li class="nav-item"><a href="home" class="nav-link">HOME</a></li>
            <li class="nav-item"><a href="about" class="nav-link">ABOUT</a></li>
            <li class="nav-item"><a href="product" class="nav-link">SHOP</a></li>
            <li class="nav-item"><a href="signup" class="nav-link">RAGISTER</a></li>
            <li class="nav-item"><a href="login" class="nav-link">LOGIN</a></li>
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