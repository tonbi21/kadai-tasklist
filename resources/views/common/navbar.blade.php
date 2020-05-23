<header class="mb-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <a class="navbar-brand" href="/">Task List</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            {!! link_to_route('tasks.create', 'Create', [], ['class' => 'nav-link']) !!}
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Signup</a>
          </li>
          <li class="nav-item">
             <a href="#" class="nav-link">Login</a>
           </li>
        </ul>
        
      </div>
    </nav>
</header>