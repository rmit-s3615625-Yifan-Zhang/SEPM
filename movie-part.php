<h2>NOW ON SHOWING</h2>
</div>
<hr>

<form action="cart.php" method="post">
    <p>please select movie here</p>
    <div id="movie-container">
        <input type="radio" class="movie-box" name="movie" value= "movie1"><img id="1" src='img/1.jpg'>
        <input type="radio" class="movie-box" name="movie" value= "movie2"><img id="2" src='img/2.jpg'>
        <input type="radio" class="movie-box" name="movie" value= "movie3"><img id="3" src='img/3.jpg'>
        <input type="radio" class="movie-box" name="movie" value= "movie4"><img id="4" src='img/4.jpg'>
        <input type="radio" class="movie-box" name="movie" value= "movie5"><img id="5" src='img/5.jpg'>
        <input type="radio" class="movie-box" name="movie" value= "movie6"><img id="6" src='img/6.jpg'>
    </div>

    <hr><div class="subtitle">
        <h3><a id="time">TIME ON SHOWING</a></h3>
    </div>
    <hr>

    <p>please select time and session here</p>
    <div id="week-container">
        <input type="radio" class="week-box" name="week" value= "Sunday">SUNDAY
        <input type="radio" class="week-box" name="week" value= "Monday">MONDAY
        <input type="radio" class="week-box" name="week" value= "Tuesday">TUESDAY
        <input type="radio" class="week-box" name="week" value= "Wednesday">WEDNESDAY
        <input type="radio" class="week-box" name="week" value= "Thursday">THURSDAY
        <input type="radio" class="week-box" name="week" value= "Friday">FRIDAY
        <input type="radio" class="week-box" name="week" value= "Saturday">SATURDAY
    </div>

    <div id="time-container">
        <input type="radio" class="time-box" name="time" value= "12:00">12:00
        <input type="radio" class="time-box" name="time" value= "15:00">15:00
        <input type="radio" class="time-box" name="time" value= "18:00">18:00
        <input type="radio" class="time-box" name="time" value= "21:00">21:00
    </div>

    <hr><div class="subtitle" id="booking">
        <h4>BOOKING NOW</h4>
    </div>
    <hr>

    <p id="available">available ticket: </p>
    <p id="price">ticket price: </p>
    <button id="button">Add to your cart</button>
</form>
