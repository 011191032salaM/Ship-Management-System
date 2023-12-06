<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <title>Ship Manage</title>
</head>

<body>

    <div class="nav">

        <div class="mainnav">

            <ul>
                <li><a href=Department\read.php>Department</a></li>
                <li><a href=Management\read.php>Management</a></li>
                <li><a href=cabin\read.php>Cabin</a></li>
                <li><a href=location\read.php>Location</a></li>
                <li><a href=Owner\read.php>Owner</a></li>
                <li><a href=passenger\read.php>Passenger</a></li>
                <li><a href=path\read.php>Path</a></li>
                <li><a href=schedule\read.php>Schedule</a></li>
                <li><a href=staff\read.php>Staff</a></li>
                <li><a href=route\read.php>Route</a></li>
            </ul>

        </div>



        <h1>SEARCH YOUR SHIP</h1>
        <div class="for">

            <form method=get action=ss.php>


                <p>

                    <input type=text name="SHIP_NAME" placeholder="Search..."> <br>

                <p>

                    <input type=submit value="SEARCH" class="ui button">

            </form>
        </div>

    </div>

    <div class="section1">

        <div class="subsection11">
            <div class="shipcoutimg">
                <img src="count-down-1.svg" alt="Italian Trulli">
            </div>
            
            <h2>SHIP COUNT</h2>

            <a href=contract.php><button class="ui button">Contract</button></a>
            <p>Number of ship Available in Our Management</p>
        </div>
        <div class="subsection12">
            <div class="ownimg">
                <img src="schedule-19.svg" alt="Italian Trulli">
            </div>
            <h2>SCHEDULE</h2>
            <a href=b.php><button class="ui button">search</button></a>
            <p>Datewise Departs and Arrival  Schedule</p>
        </div>
        <div class="subsection13">
            <div class="ownimg">
                <img src="owner-side.svg" alt="Italian Trulli">
            </div>
            <h2> OWNER INCOME</h2>
            <a href=s1.php><button class="ui button">Maximum</button></a>
            <p>Ship Owner Monthly Maximum Income</p>
        </div>
        <div class="subsection14">
            <div class="ownimg">
                <img src="communication-9.svg" alt="Italian Trulli">
            </div>
            <h2>COMMUNICATION</h2>
            <a href=con1.php><button class="ui button">Contract</button></a>
            <p>Communication Details All Ship</p>
        </div>
    </div>

    <div class="section2">
        <div class="subsection21">
            <div class="staffimg">
                <img src="teaching-staff.svg" alt="Italian Trulli">
            </div>
            <h3>STAFF</h3>
            <a href=staff.php><button class="ui button">Details</button></a>
            <p>Staff Details All Available Ship</p>
        </div>
        <div class="subsection22">
            <div class="passimg">
                <img src="oasis-operation-passenger-flow.svg" alt="Italian Trulli">
            </div>
            <h3>PASSENGER</h3>
            <a href=pass.php><button class="ui button">Details</button></a>
            <p>Passenger Details All Available Ship</p>
        </div>
        <div class="subsection23">
            <div class="passimg">
                <img src="kisspng-stock-photography-boat-symbol-illustration-ship-vacation-page-52-free-icons-easy-to-download-5c7982c89b7069.1188395015514672086367.png"
                    alt="Italian Trulli">
            </div>
            <h3>DEPARTS</h3>
            <a href=departs.php><button class="ui button">Details</button></a>
            <p>Departs Details All Available Ship</p>
        </div>
    </div>

    <footer class="last">

        <div class="about">
            <div class="cabinimg">
                <img src="price-tag-2.svg" alt="Italian Trulli">
            </div>
            <h3> PRICE OF CABIN</h3>
            <div class="ui large buttons">
                <a href=min.php><button class="ui button">Minimum</button></a>
                <div class="or"></div>
                <a href=max.php><button class="ui button active">Maximum</button></a>
            </div>
        </div>
        <div class="about1">
            <div class="ownimg">
                <img src="owner-side.svg" alt="Italian Trulli">
            </div>
            <h3>SHIP OWNER </h3>
            <a href=ownde.php><button class="ui button">Details</button></a>
        </div>
        <div class="about2">
            <div class="cabinimg">
                <img src="price-tag-2.svg" alt="Italian Trulli">
            </div>
            <h3>CABIN PRICE</h3>
            <div class="ui large buttons">
                <a href=single.php><button class="ui button">Single</button></a>
                <div class="or"></div>
                <a href=double.php><button class="ui button active">Double</button></a>
            </div>

        </div>
        <div class="about3">
            <div class="routeimg">
                <img src="route-4-512.png" alt="Italian Trulli">
            </div>

            <h3>VIA</h3>
            <div class="five ui buttons">
                <a href=fotulla.php><button class="ui button">Fotulla</button></a>
                <a href=chandpur.php><button class="ui button">Chandpur</button></a>
                <a href=boga.php> <button class="ui button">Boga</button></a>
                <a href=munshiganj.php><button class="ui button">Munshiganj</button></a>

            </div>
        </div>

    </footer>
    <hr>

</body>

</html>