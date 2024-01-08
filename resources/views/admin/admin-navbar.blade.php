<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/admin/dashboard">
            <img src="{{ asset('images/logo.png') }}" width="150px" alt="logo" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="/admin/users">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/approved-events">Approved Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-disabled="true" href="/admin/pending-events">Pending Events</a>
                </li>


            </ul>
        </div>

        <div class="" id="logout-btn">
            <button class="btn btn-primary" onclick="logout()">Logout</button>
        </div>

    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const userData = localStorage.getItem("admin");

        if (!userData) {
            const userObject = JSON.parse(userData);
            document.getElementById("logout-btn").style.display = "none";
        }
    });

    function logout() {
        localStorage.removeItem("admin");
        console.log('Local storage cleared successfully.');
        window.location.href = '/admin/login';
    }
</script>
