

Route::get('/',function(){
    return view('index');
})

<header>
        <div class="header-content">
          <button id="mode-toggle" class="left-button" style="left: 2px;">Dark/Light </button>
            <h1>Welcome </h1>
            <p>here we have more information about our club</p>
    
            <div class="container mt-3">
                <!-- <h2>Button Outline</h2> -->
                <button type="button" class="btn btn-outline-info"><a href="./about.html" style="background-color: #7f6b6b;">about</a></button>
                <button type="button" class="btn btn-outline-secondary"><a href="./activities.html" style="background-color: #7f6b6b;">activities</a></button>
                <button type="button" class="btn btn-outline-success"><a href="./index.html" style="background-color: #7f6b6b;">career-gates</a></button>
                <button type="button" class="btn btn-outline-info"><a href="./question.html" style="background-color: #7f6b6b;">question</a></button>
        </div>
    </header>

<!-- @yield('content') -->


    <nav class="container mt-3">
    <h2>cards with information</h2>
    <p>nice to read it </p>
    <div class="alert alert-success">
      <strong><div class="container">
        <h2>information</h2>
        <p>Click on the button to toggle between showing and hiding content.</p>
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
        <div id="demo" class="collapse">
          technology club in career gates : 
          is a student's area for build a creative activities and knowledge ,
           to make for members a great place in the community 
           by share a knowledge , ....

        career gates : 
        </div>




        
</nav>

