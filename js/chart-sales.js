const labels = ['1', '2', '3', '4', '5', '6', '7'];
const data = {
    labels: labels,
    datasets: [{
        label: '2021',
        data: [65, 59, 80, 81, 56, 55, 40],
        fill: false,
        borderColor: 'rgb(75, 192, 192)',
        tension: 0.1
    }, {
        label: '2022',
        data: [6, 9, 0, 8, 5, 5, 40],
        fill: false,
        borderColor: 'rgb(7, 2, 2)',
        tension: 0.1
    }]
};

const config = {
    type: 'line',
    data: data,
    options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
            title: {
                display: true,
                text: 'Vendas por ano'
            }
        }
    }
};

const myChart = new Chart(
    document.getElementById('chart-sales'),
    config
)

