<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container">
        <div class="navbar-translate">
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="sr-only">Toggle navigation</span>
    <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
    <span class="navbar-toggler-icon"></span>
    </button>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav"> 
                <li class="nav-item">
                    <a href="{{ route('blog') }}" class="nav-link">Blogs</a>
                </li>
            </ul>

            <form class="form-inline ml-auto">
                <div class="form-group no-border">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-white btn-just-icon btn-round">
        <i class="material-icons">search</i>
    </button>
            </form>
        </div>
    </div>
</nav>