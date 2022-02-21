<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="#">Sancho</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav">
      <li class="nav-item">
      <div class="navbar-nav">
        <a class="nav-link {{ ( $title === 'Home') ? 'active' : ''}}" aria-current="page" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ( $title === 'About') ? 'active' : ''}}" href="/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ( $title === 'Gallery') ? 'active' : ''}}" href="/gallery">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ ( $title === 'Contacts') ? 'active' : ''}}" href="/contacts">Contacts</a>
      </li>

    </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a Class="nav-link" href="{{route ('login')}}">Login</a>
            </li>
            <li class="nav-item">
                <a Class="nav-link" href="{{route ('register')}}">Register</a>
            </li>
        </ul>
      </div>
    </div>
  </div>
</nav>