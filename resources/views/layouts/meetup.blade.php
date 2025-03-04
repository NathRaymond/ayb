<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet-Up Conference</title>
    <script src="/js/script.js"></script>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/meetup.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <img id="logo" src="img/logo.png" alt="ayb-logo">
        <nav class="topnav" id="myTopnav">
            
            <a href="https://www.africanyoungbrains.com/">Event</a> 
            <a href="https://www.africanyoungbrains.com/sponsor">Partner</a>    
            <a href="https://www.africanyoungbrains.com/team">Team</a>  
            <a href="https://www.africanyoungbrains.com/">Home</a>  
            <a href="https://www.africanyoungbrains.com/about">About</a>    
            <a href="https://www.africanyoungbrains.com/contact">contact</a> 
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            <a href="" id="meet-reg-btn"><p>REGISTER FOR MEETUP</p></a>  
            
        </nav>
        <x-alert />
    </header>
    
    <main>
        <div id="flyer">
            <h1>AYB Meetup 2022</h1>
            <h2></h2>
            <h3>OCTOBER 13-14, 2022 </h3>
        </div>
        
        <form action="{{ route('meetup.register.store')}}" id="reg-form" method="post">
            
            @csrf
            <label class="lbl1">
                FIRST NAME 
                <input type="text" name="first_name" placeholder="First Name" required />
            </label>
            <label class="lbl1">
                LAST NAME 
                <input type="text" name="last_name" placeholder="Last Name" required />
            </label>
            <label class="lbl1">
                EMAIL 
                <input type="email" name="email" placeholder="email" required />
            </label>
            <label class="lbl1">
                PHONE 
                <input type="number" name="phone" placeholder="Phone" required />
            </label>
            <label class="lbl2">
                COMPANY/INSTITUITION 
                <input type="text" name="work_place" placeholder="Company/Instituition">
            </label>
            <label class="lbl2">
                DESIGNATION 
                <input type="text" name="designation" placeholder="designation">
            </label>
            <label class="lbl2">
                JOIN AS 
                <Select name="group">
                    <option value=""></option>
                    <option value="participant">Participant</option>
                    <option value="volunteer">Volunteer</option>
                    <option value="exhibitor">Exhibitor</option>
                </Select>
            </label>
            <input id="submit" type="submit" value="Register" />
            
        </form>
    </main>
    <footer></footer>
</body>
</html>