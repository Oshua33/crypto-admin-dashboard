<?php
require "./partials-includes/header.php";
?>

<main>
    <aside>
        <button id="close-btn">
            <span class="material-icons-sharp">close</span>
        </button>

        <div class="sidebar">
            <a href="#" class="active">
                <span class="material-icons-sharp">dashboard</span>
                <h4>Dashboard</h4>
            </a>

            <a href="#">
                <span class="material-icons-sharp">currency_exchange</span>
                <h4>Exchange</h4>
            </a>

            <a href="#">
                <span class="material-icons-sharp">account_balance_wallet</span>
                <h4>Wallet</h4>
            </a>

            <a href="#">
                <span class="material-icons-sharp">payment</span>
                <h4>Transactions</h4>
            </a>

            <a href="#">
                <span class="material-icons-sharp">pie_chart</span>
                <h4>Analytics</h4>
            </a>

            <a href="#">
                <span class="material-icons-sharp">message</span>
                <h4>Messages</h4>
            </a>

            <a href="#">
                <span class="material-icons-sharp">settings</span>
                <h4>Settings</h4>
            </a>

            <a href="#">
                <span class="material-icons-sharp">logout</span>
                <h4>Logout</h4>
            </a>
        </div>
        <!------- END OF SIDEBAR ------->


        <div class="updates">
            <span class="material-icons-sharp">update</span>
            <h4>update Available</h4>
            <p>Security Updates</p>
            <p>General Updates</p>
            <a href="#"> Update Now </a>
        </div>
    </aside>
    <!------- END OF ASIDE --------->

    <section class="middle">
        <div class="header">
            <h1>Overview</h1>
            <input type="date">
        </div>

        <div class="cards">
            <div class="card">
                <div class="top">
                    <div class="left">
                        <img src="./images/BTC.png">
                        <h2>BTC</h2>
                    </div>
                    <img src="./images/visa.png" class="right">
                </div>
                <div class="middle">
                    <h1>$827,189</h1>
                    <div class="chip">
                        <img src="./images/card chip.png">
                    </div>
                </div>
                <div class="bottom">
                    <div class="left">
                        <small>Card Holder </small>
                        <h5>JOHN DOE</h5>
                    </div>
                    <div class="right">
                        <div class="expiry">
                            <small>Expiry</small>
                            <h5>08/23</h5>
                        </div>

                        <div class="cvv">
                            <small>CVV</small>
                            <h5>132</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF CARD- 1 -------->

            <div class="card">
                <div class="top">
                    <div class="left">
                        <img src="./images/ETH.png">
                        <h2>EHT</h2>
                    </div>
                    <img src="./images/visa.png" class="right">
                </div>
                <div class="middle">
                    <h1>$98,589</h1>
                    <div class="chip">
                        <img src="./images/card chip.png">
                    </div>
                </div>
                <div class="bottom">
                    <div class="left">
                        <small>Card Holder </small>
                        <h5>JOHN DOE</h5>
                    </div>
                    <div class="right">
                        <div class="expiry">
                            <small>Expiry</small>
                            <h5>08/23</h5>
                        </div>

                        <div class="cvv">
                            <small>CVV</small>
                            <h5>132</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF CARD- 2 -------->

            <div class="card">
                <div class="top">
                    <div class="left">
                        <img src="./images/BTC.png">
                        <h2>BTC</h2>
                    </div>
                    <img src="./images/visa.png" class="right">
                </div>
                <div class="middle">
                    <h1>$87,189</h1>
                    <div class="chip">
                        <img src="./images/card chip.png">
                    </div>
                </div>
                <div class="bottom">
                    <div class="left">
                        <small>Card Holder </small>
                        <h5>JOHN DOE</h5>
                    </div>
                    <div class="right">
                        <div class="expiry">
                            <small>Expiry</small>
                            <h5>08/24</h5>
                        </div>

                        <div class="cvv">
                            <small>CVV</small>
                            <h5>132</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF CARD- 3 -------->
        </div>
        <!--- END OF CARDS  -------->

        <!--- START OF MONTHLY REPORT  -------->

        <div class="monthly-report">
            <div class="report">
                <h3>Income</h3>
                <div>
                    <details>
                        <h1>$29,023</h1>
                        <h6 class="success">+3.5%</h6>
                    </details>
                    <p class="text-muted">Compared to $26, 983 last month </p>
                </div>
            </div>

            <!--- END OF IMCOME REPORT  -------->
            <div class="report">
                <h3>Expenses</h3>
                <div>
                    <details>
                        <h1>$9,023</h1>
                        <h6 class="danger">-6.5%</h6>
                    </details>
                    <p class="text-muted">Compared to $26, 983 last month </p>
                </div>
            </div>
            <!--- END OF EXPENSES REPORT  -------->
            <div class="report">
                <h3>Cashback</h3>
                <div>
                    <details>
                        <h1>$79,023</h1>
                        <h6 class="success">+14.5%</h6>
                    </details>
                    <p class="text-muted">Compared to $26, 983 last month </p>
                </div>
            </div>
            <!--- END OF CASHBACK REPORT  -------->
            <div class="report">
                <h3>Turnover</h3>
                <div>
                    <details>
                        <h1>$114,023</h1>
                        <h6 class="danger">-3.5%</h6>
                    </details>
                    <p class="text-muted">Compared to $26, 983 last month </p>
                </div>
            </div>
            <!--- END OF TURNOVER REPORT  -------->
        </div>
        <!--- END OF MONTHLY REPORT  -------->

        <div class="fast-payment">
            <h2>Fast Payment</h2>
            <div class="badges">
                <div class="badge">
                    <span class="material-icons-sharp">add</span>
                </div>
                <div class="badge">
                    <span class="bg-primary"></span>
                    <div>
                        <h5>Training</h5>
                        <h4>$50</h4>
                    </div>
                </div>

                <div class="badge">
                    <span class="bg-success"></span>
                    <div>
                        <h5>Internet</h5>
                        <h4>$40</h4>
                    </div>
                </div>

                <div class="badge">
                    <span class="bg-danger"></span>
                    <div>
                        <h5>Gas</h5>
                        <h4>$190</h4>
                    </div>
                </div>

                <div class="badge">
                    <span class="bg-success"></span>
                    <div>
                        <h5>Movies</h5>
                        <h4>$30</h4>
                    </div>
                </div>

                <div class="badge">
                    <span class="bg-success"></span>
                    <div>
                        <h5>Education</h5>
                        <h4>$999</h4>
                    </div>
                </div>

                <div class="badge">
                    <span class="bg-danger"></span>
                    <div>
                        <h5>Electricity</h5>
                        <h4>$109</h4>
                    </div>
                </div>

                <div class="badge">
                    <span class="bg-danger"></span>
                    <div>
                        <h5>Food</h5>
                        <h4>$399</h4>
                    </div>
                </div>
            </div>
        </div>

        <!--- END OF FAST-PAYMENT  -------->

        <canvas id="chart"></canvas>
    </section>
    <!----------------- END OF MIDDLE -------------------->

    <section class="right">
        <div class="investments">
            <div class="header">
                <h1>Investments</h1>
                <a href="#">More <span class="material-icons-sharp">chevron_right</span></a>
            </div>

            <div class="investment">
                <img src="./images/uniliver.png">
                <h4>Uniliver</h4>
                <div class="date-time">
                    <p>7 Nov, 2023</p>
                    <small class="text-muted">9.16pm</small>
                </div>
                <div class="bonds">
                    <p>1402</p>
                    <small class="text-muted">Bonds</small>
                </div>
                <div class="amount">
                    <h4>$20,478</h4>
                    <small class="success">36.27%</small>
                </div>
            </div>
            <!------------------ END OF INVESTMENT ----------------------->
            <div class="investment">
                <img src="./images/tesla.png">
                <h4>Tesla</h4>
                <div class="date-time">
                    <p>7 Nov, 2023</p>
                    <small class="text-muted">9.16pm</small>
                </div>
                <div class="bonds">
                    <p>1402</p>
                    <small class="text-muted">Bonds</small>
                </div>
                <div class="amount">
                    <h4>$20,478</h4>
                    <small class="success">+7.27%</small>
                </div>
            </div>
            <!------------------ END OF INVESTMENT ----------------------->
            <div class="investment">
                <img src="./images/monster.png">
                <h4>Monster</h4>
                <div class="date-time">
                    <p>7 Nov, 2023</p>
                    <small class="text-muted">9.16pm</small>
                </div>
                <div class="bonds">
                    <p>1402</p>
                    <small class="text-muted">Bonds</small>
                </div>
                <div class="amount">
                    <h4>$20,478</h4>
                    <small class="danger">-4.27%</small>
                </div>
            </div>
            <!------------------ END OF INVESTMENT ----------------------->
            <div class="investment">
                <img src="./images/mcdonalds.png">
                <h4>McDonalds</h4>
                <div class="date-time">
                    <p>7 Nov, 2023</p>
                    <small class="text-muted">9.16pm</small>
                </div>
                <div class="bonds">
                    <p>1402</p>
                    <small class="text-muted">Bonds</small>
                </div>
                <div class="amount">
                    <h4>$20,478</h4>
                    <small class="danger">-4.27%</small>
                </div>
            </div>
            <!------------------ END OF INVESTMENT ----------------------->
        </div>
        <!------------------ END OF INVESTMENTS ----------------------->

        <div class="recent-transactions">
            <div class="header">
                <h2>Recent Transactions</h2>
                <a href="#">More <span class="material-icons-sharp">chevron_right</span></a>
            </div>

            <div class="transaction">
                <div class="service">
                    <div class="icon bg-purple-light">
                        <span class="material-icons-sharp purple">headphones</span>
                    </div>
                    <div class="details">
                        <h4>Music</h4>
                        <p>20:11:2023</p>
                    </div>
                </div>
                <div class="card-details">
                    <div class="card bg-danger">
                        <img src="./images/visa.png">
                    </div>
                    <div class="details">
                        <p> +3752</p>
                        <small class="text-muted">Credit Cards</small>
                    </div>
                </div>
                <h4>$28</h4>
            </div>
            <!-- END OF TRANSACTION-->


            <div class="transaction">
                <div class="service">
                    <div class="icon bg-purple-light">
                        <span class="material-icons-sharp purple">shopping_bag</span>
                    </div>
                    <div class="details">
                        <h4>shopping</h4>
                        <p>19:11:2023</p>
                    </div>
                </div>
                <div class="card-details">
                    <div class="card bg-primary">
                        <img src="./images/visa.png">
                    </div>
                    <div class="details">
                        <p> +3752</p>
                        <small class="text-muted">Credit Cards</small>
                    </div>
                </div>
                <h4>$28</h4>
            </div>
            <!-- END OF TRANSACTION-->


            <div class="transaction">
                <div class="service">
                    <div class="icon bg-purple-light">
                        <span class="material-icons-sharp danger">sports_esports</span>
                    </div>
                    <div class="details">
                        <h4>Games</h4>
                        <p>15:11:2023</p>
                    </div>
                </div>
                <div class="card-details">
                    <div class="card bg-danger">
                        <img src="./images/visa.png">
                    </div>
                    <div class="details">
                        <p> +2757</p>
                        <small class="text-muted">Credit Cards</small>
                    </div>
                </div>
                <h4>$28</h4>
            </div>
            <!-- END OF TRANSACTION-->


            <div class="transaction">
                <div class="service">
                    <div class="icon bg-purple-light">
                        <span class="material-icons-sharp success">restaurant</span>
                    </div>
                    <div class="details">
                        <h4>Restaurant</h4>
                        <p>19:11:2023</p>
                    </div>
                </div>
                <div class="card-details">
                    <div class="card bg-dark">
                        <img src="./images/master card.png">
                    </div>
                    <div class="details">
                        <p> +3752</p>
                        <small class="text-muted">Master Card</small>
                    </div>
                </div>
                <h4>$58</h4>
            </div>
            <!-- END OF TRANSACTION-->

            <div class="transaction">
                <div class="service">
                    <div class="icon bg-purple-light">
                        <span class="material-icons-sharp purple">medication</span>
                    </div>
                    <div class="details">
                        <h4>Pharmacy</h4>
                        <p>15:11:2023</p>
                    </div>
                </div>
                <div class="card-details">
                    <div class="card bg-primary">
                        <img src="./images/visa.png">
                    </div>
                    <div class="details">
                        <p> +3752</p>
                        <small class="text-muted">Credit Card</small>
                    </div>
                </div>
                <h4>-$38</h4>
            </div>
            <!-- END OF TRANSACTION-->

            <div class="transaction">
                <div class="service">
                    <div class="icon bg-purple-light">
                        <span class="material-icons-sharp primary">fitness_center </span>
                    </div>
                    <div class="details">
                        <h4>Fitness</h4>
                        <p>15:11:2023</p>
                    </div>
                </div>
                <div class="card-details">
                    <div class="card bg-dark">
                        <img src="./images/master card.png">
                    </div>
                    <div class="details">
                        <p> +3752</p>
                        <small class="text-muted">Master Card</small>
                    </div>
                </div>
                <h4>$18</h4>
            </div>
            <!-- END OF TRANSACTION-->
        </div>
        <!-- END OF TRANSACTIONs-->
    </section>

    <!------------------ END OF RIGHT ---------------------->
</main>
<!-- END OF ASIDE ---------->



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="module" src="./main.js"></script>
</body>

</html>