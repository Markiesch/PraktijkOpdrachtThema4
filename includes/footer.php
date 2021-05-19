<footer>
    <div>
        <p>2021 &copy; BTC de Pettelaer · Powered by <a href="https://markiesch.github.io/portfolio/" target="_blank">Mark Schuurmans</a></p>
        <a class="top" href="#top">Terug naar boven</a>
    </div>
    <?php
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
            echo "<div>
                    <p>U bent momenteel ingelogd</p>";
            echo "  <form action='/PraktijkOpdrachtThema4/pages/login.php' method='POST'>
                        <label type='submit' value='Uitloggen' for='logout'>Uitloggen</label>
                        <input name='logout' type='submit' id='logout' />
                    </form>
                  </div>";
        }
    ?>
</footer>