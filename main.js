document.addEventListener('DOMContentLoaded', (event) => {

const chart = document.querySelector("#chart").getContext('2d');

// create a new chart instance
new Chart(chart, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov'],

        datasets: [
            {
                label: 'BTC',
                data: [29374, 33778, 49867, 59095, 57828, 36648, 33573, 39978, 48116, 61004],
                borderColor: 'red',
                borderWidth: 2
            },
            {
                label: 'ETH',
                data: [31374, 41000, 88890, 26000, 46000, 33698, 5000, 3000, 18456, 24004, 36844],
                borderColor: 'blue',
                borderWidth: 2
            }

        ]
    },
    options: {
        responsive: true,
    }
});
});

// show or hide sidebar
const menuBtn = document.querySelector('#menu-btn');
const closeBtn = document.querySelector('#close-btn');
const sidebar = document.querySelector('aside');

menuBtn.addEventListener('click', () => {
    sidebar.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
    sidebar.style.display = 'none';
})

// show and change theme mode
const themeBtn = document.querySelector('.theme-btn');

themeBtn.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');

    themeBtn.querySelector('span:first-child').classList.toggle('active');
    themeBtn.querySelector('span:last-child').classList.toggle('active');
    
})

