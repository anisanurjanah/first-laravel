<nav class="navbar navbar-expand-lg narvar-dark bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="/">Anisa's Village</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home" ? "active" : "") }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About" ? "active" : "") }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Posts" ? "active" : "") }}" href="/posts">Posts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Categories" ? "active" : "") }}" href="/categories">Categories</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
