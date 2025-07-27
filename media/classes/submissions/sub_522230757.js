function logoutUser() {
    sessionStorage.clear();
    localStorage.clear();

    document.cookie.split(";").forEach(cookie => {
        document.cookie = cookie.replace(/^ +/, "").replace(/=.*/, "=;expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/");
    });

    history.pushState(null, null, location.href);
    history.replaceState(null, null, "index.php");
    window.onpopstate = function () {
        history.go(1);
    };
    
    alert("You have been logged out due to inactivity!");
    window.location.href = "index.php";
}

setTimeout(logoutUser, 6000000);