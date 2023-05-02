<div class="nav">
    <h4><a href="/">Agradecimentos</a></h4>

    <li class="dropdown">
        <h4>Listas</h4>
    
        <ul class="dropdown-content">
            <li >
                <a href="{{ route("list.watching") }}">Watching</a>
            </li>
        
            <li>
                <a href="{{ route("list.completed") }}">Completed</a>
            </li>
        </ul>
    </li>

    <li class="last-item dropdown">
        <h4 class="dropdown">Perfil</h4>
    
        <ul class="dropdown-content">
            <li>
                <a href="{{ route("profile.editProfile") }}">Edit Profile</a>
            </li>
        
            <li>
                <a href="/">Logout</a>
            </li>
        </ul>
    </li>

</div>