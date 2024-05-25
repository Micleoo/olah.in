<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/">Olah.in</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/Login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Sign-up") ? 'active' : '' }}" href="/Sign-up">Sign-up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Marketplace") ? 'active' : '' }}" href="/Marketplace">Market Place</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Kursus") ? 'active' : '' }}" href="/Kursus">Kursus</a>
          </li>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </ul>
      </div>
    </div>
  </nav>