    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/">bibimbap</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li<?php if ($menu == "main")      echo ' class="active"'; ?>><a href="/">Home</a></li>
              <li<?php if ($menu == "start")     echo ' class="active"'; ?>><a href="/start">Get Started</a></li>
              <li<?php if ($menu == "features")  echo ' class="active"'; ?>><a href="/features">Features</a></li>
              <li<?php if ($menu == "downloads") echo ' class="active"'; ?>><a href="/downloads">Downloads</a></li>
              <li><a href="http://github.com/bibimbap-io/bibimbap">@ Github</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container" id="main" class="tab-pane active">
