<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="#">My Blogs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ $title === 'home' ? 'active' : '' }} "  href="/">Home</a>
                <a class="nav-link {{ $title === 'about' ? 'active' : '' }} " href="/about">about</a>
                <a class="nav-link{{ $title === 'Posts' || $title === 'Single Post' ? ' active' : '' }}" href="/posts">Blogs</a>
                <a class="nav-link {{ $title === 'categories' ? 'active' : '' }} " href="/categories">Catergories</a>
            </div>
        </div>
    </div>
</nav>
