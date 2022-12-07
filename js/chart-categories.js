const labelsCategories = [
    'Cartas',
    'Dados',
    'Outros'
];

const dataCategories = {
    labels: labelsCategories,
    datasets: [{
        label: 'Vendas por Categorias',
        data: [300, 100, 60],
        backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)'
        ],
        hoverOffset: 4
    }]
};

const configCateries = {
    type: 'pie',
    data: dataCategories,
    options: {
        responsive: true,
        maintainAspectRatio: false,
        layout: {
            padding: {
                bottom: 20,
                top: 10
            }
        },
        plugins: {
            title: {
                display: true,
                text: 'Vendas por Categoria'
            }, legend: {
                labels: {
                    font: {
                        weight: 'bold'
                    }
                }
            }
        }
    }
};

Chart.defaults.font.size = 18;
const myChartCategories = new Chart(
    document.getElementById("chart-categories"),
    configCateries
)
