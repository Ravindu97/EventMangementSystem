<nav class="navbar navbar-dark navbar-expand-sm">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-list-4" style="margin-right: 80px">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://png.pngtree.com/png-vector/20191101/ourmid/pngtree-cartoon-color-simple-male-avatar-png-image_1934459.jpg"
                        width="40" height="40" class="rounded-circle">
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    {{-- <a class="dropdown-item" href="#" id="userName"></a> --}}
                    <div class="dropdown-item" id="userName" onclick="updateuser()" style="cursor: pointer;"></div>
                    <a class="dropdown-item" href="/create-event">Create Event</a>
                    <div class="dropdown-item" onclick="myevents()" style="cursor: pointer;">My Events</div>
                    <div class="dropdown-item" onclick="bookedevents()" style="cursor: pointer;">Booked Events</div>
                    <div class="dropdown-item" onclick="logout()" style="cursor: pointer;">Log Out</div>
                </div>
            </li>
        </ul>
    </div>
</nav>

<script>
    const userData = localStorage.getItem('loggedUser');
    const userObject = JSON.parse(userData);

    document.getElementById('userName').innerHTML = userObject.name

    function myevents() {
        if (userObject) {
            window.location.href = `/my-events/${userObject.id}`;
        }
    }

    function bookedevents() {
        if (userObject) {
            window.location.href = `/booked-events/${userObject.id}`;
        }
    }

    function updateuser() {
        if (userObject) {
            window.location.href = `/update-user/${userObject.id}/edit`;
        }
    }


    function logout() {
        localStorage.removeItem("loggedUser");
        console.log('Local storage cleared successfully.');
        window.location.href = '/';
    }
</script>
