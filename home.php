<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="evo-calendar.min.css">
    <link rel="stylesheet" href="evo-calendar.midnight-blue.min.css">

</head>

<body>
<div>
    <input type="checkbox" id="sidebar-toggle">
    </div>
    <div class="sidebar">
        <div class="sidebar-header">
            <h3 class="brand">
                <span class="ti-unlink"></span> 
                <span>E-Voting System</span>
            </h3> 
            <label for="sidebar-toggle" class="ti-menu-alt"></label>
        </div>
        
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="index.php">
                        <span class="ti-home"></span>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="candidates.php">
                        <span class="ti-face-smile"></span>
                        <span>Candidates</span>
                    </a>
                </li>
                <!-- <li>
                    <a href="vote.php">
                        <span class="ti-agenda"></span>
                        <span>Vote Now</span>
                    </a>
                </li> -->
                <li>
                    <a href="location.php">
                        <span class="ti-folder"></span>
                        <span>Location</span>
                    </a>
                </li>
                <li>
                    <a href="Timesheet.php">
                        <span class="ti-time"></span>
                        <span>Timesheet</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-book"></span>
                        <span>Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="ti-settings"></span>
                        <span>Account</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        
        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" placeholder="Search">
            </div>
            
            <div class="social-icons">
                <span class="ti-bell"></span>
                <span class="ti-comment"></span>
                <a href="logout.php" title="Logout" class="text-danger"><span class="ti-power-off"></span></a>
                <div></div>
            </div>
        </header>
    <div class="hero">
        <div id="calendar"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="evo-calendar.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#calendar').evoCalendar({
                theme:"Midnight Blue",
                calendarEvents: [
                    {
                        id: 'bHay68s', // Event's ID (required)
                        name: "New Year", // Event name (required)
                        date: "January/1/2020", // Event date (required)
                        type: "holiday", // Event type (required)
                        everyYear: true // Same event every year (optional)
                    },
                    {
                        id: "PokharaElection",
                        name:"MP Election",
                        date: "June/15/2021",
                        description: "Election for national level member of parliament",
                        type: "election"
                    },
                    {
                        name: "Vacation Leave",
                        badge: "02/13 - 02/15", // Event badge (optional)
                        date: ["February/13/2021", "February/15/2021"], // Date range
                        description: "Vacation leave for 3 days.", // Event description (optional)
                        type: "event",
                        color: "#63d867" // Event custom color (optional)
                    }
                ]
            })
        })
    </script>
    </div>
</body>

</html>