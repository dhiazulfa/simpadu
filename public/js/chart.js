$(document).ready(function() {
    var ctx = $("#chart-line");
    var myLineChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Laki-laki", "Perempuan"],
            datasets: [{
                data: [1200, 1700],
                backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(200, 50, 255, 0.5)"]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Jenis Kelamin'
            }
        }
    });
});