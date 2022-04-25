
    
<nav>

    <ul class="nav p-2">
        <li class="nav-item"><a href="main" class="nav-link">HOME</a></li>
        <li class="nav-item"><a href="" class="nav-link">ABOUT US</a></li>
        <li class="nav-item"><a href="" class="nav-link">COURSE</a></li>
        <li class="nav-item"><a href="" class="nav-link">LOGIN</a></li>
        <li class="nav-item"><a href="userForm" class="nav-link">RAGISTER</a></li>
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