<ul class="navdrawer-nav sidebar__inner">
    <a class="navdrawer-subheader" href="#">{{ @Auth::user()->name }}</a>
    <div class="navdrawer-divider"></div>
    <li class="nav-item">
        <a class="nav-link active" href="#"><i class="material-icons mr-3">list</i> News Feeds</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"><i class="material-icons mr-3">notifications_none</i> Notifications</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#"><i class="material-icons mr-3">account_circle</i> Followers
            <span class="badge badge-primary badge-pill float-right">20</span></a>
    </li>
</ul>