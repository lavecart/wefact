"use strict"


setTimeout(function() {
    $('#successMessage').fadeOut('fast');
}, 3000); 


// init donut chart if element exists
// -----------------

if ($("#donutChartHomepage").length) {
    var donutChart = $("#donutChartHomepage"); // donut chart data
    
    $.ajax({
    type: 'GET',
    url: '/client/invoice/status',
    success: function( res ) {

        console.log("I am here")

        var data = {
            labels: ['Expired', 'Open', 'Paid'],
            datasets: [{
                data: [],
                backgroundColor: ["#c21a1a", "#7e6fff", "#4ecc48"],
                hoverBackgroundColor: ["#c21a1a", "#7e6fff", '#4ecc48'],
                borderWidth: 0
            }]
        }; // -----------------

        
        data.datasets[0].data.push(res.expired);
        data.datasets[0].data.push(res.open);
        data.datasets[0].data.push(res.paid);


        new Chart(donutChart, {
            type: 'doughnut',
            data: data,
            options: {
                legend: {
                display: false
                },
                animation: {
                animateScale: true
                },
                cutoutPercentage: 80
            }
        });
    },
    error: function(error) {
        console.log("Error: ", error)
    }
    });
    // init donut chart
    // -----------------
} // -----------------
// init donut chart if element exists
// -----------------
