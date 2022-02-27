<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        NBA
      </a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">All teams</a>
        </li>
        @auth
        <li class="nav-item">
          <strong> Username: {{ auth()->user()->name }} </strong>
        </li>
        <li class="nav-item">
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Logout</button>
          </form>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="/register">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/login">Login</a>
        </li>
      @endauth
      </ul>
    </div>
  </nav>

  <style>
    .navbar-nav {
      flex-direction: row !important;
      align-items: center;
    }
    .nav-item {
      display: flex;
      align-items: center;
      margin-left: 15px;
      text-transform: capitalize
    }
  </style>
