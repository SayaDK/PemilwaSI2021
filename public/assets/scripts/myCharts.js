var myPieChart ={ 
    data: {
        datasets: [{
            "backgroundColor":[
                "rgb(122,141,75)",
                "rgb(163,124,164)"
            ],
            data:[100,230,212]
        }],
        labels:['one','two','three']
    }
}
var myPie = document.getElementById('myCharts').getContext('2d');
new Chart(myPie).Pie(myPieChart);