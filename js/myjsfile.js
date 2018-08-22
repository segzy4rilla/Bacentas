var chart;
var res;
var res2;
var chart2;
var chart3;
var chart4;


function clickedbutton() {
    var myPhpValue = $("#myPhpValue").val();
    var myPhpValue2 = $("#myPhpValue2").val();
    res = myPhpValue.split(" ");
    res2 = myPhpValue2.split(" ");

    for (var ind = 0; ind < res.length; ind++) {
        chart.data[0].addTo("dataPoints", {label: res2[ind], y: parseInt(res[ind])});
        chart2.data[0].addTo("dataPoints", {label: res2[ind], y: parseInt(res[ind])});
        chart3.data[0].addTo("dataPoints", {label: res2[ind], y: parseInt(res[ind])});
        chart4.data[0].addTo("dataPoints", {label: res2[ind], y: parseInt(res[ind])});
        chart4.data[0].addTo("dataPoints2", {label: res2[ind], y: parseInt(res[ind]+2)});


    }
}

window.onload = function () {
    var dps = [];



    chart = new CanvasJS.Chart("chartContainer", {
        animationEnabled: true,
        height:300,
        width: 1280,
        title: {
            text: "Number of people that came to gathering service"
        },
        axisX: {
            minimum: 0,
            maximum: 7,
           // valueFormatString: "MMM YY"
        },
            axisY: {
                title: "Units Sold",
                titleFontColor: "#4F81BC",
                lineColor: "#4F81BC",
                labelFontColor: "#4F81BC",
                tickColor: "#4F81BC",
                includeZero: false


          //  suffix: "mn"
        },
        data: [{
            indexLabelFontColor: "Green",
            name: "views",
            type: "area",
            //yValueFormatString: "#,##0.0mn",
            dataPoints:[]
}]

});




     chart2 = new CanvasJS.Chart("columnContainer", {
        animationEnabled: true,
         height:300,
         width: 1280,
        title: {
            text: "Number of people that came to gathering service"
        },
        axisX: {
            minimum: 0,
            maximum: 7,
            // valueFormatString: "MMM YY"
        },
        axisY: {
            title: "Target",
            titleFontColor: "#4F81BC",
            minimum: 0,
            maximum: 30,
            //  suffix: "mn"
        },
        data: [{
            indexLabelFontColor: "darkSlateGray",
            name: "views",
            type: "column",
            //yValueFormatString: "#,##0.0mn",
            dataPoints: []
        }],


    });

     chart3 = new CanvasJS.Chart("pieContainer", {
         height:300,
         width: 1280,
        animationEnabled: true,
        title: {
            text: "Number of people that came to gathering service"
        },
        axisX: {
            minimum: 0,
            maximum: 7,
            // valueFormatString: "MMM YY"
        },
        axisY: {
            title: "Target",
            titleFontColor: "#4F81BC",
            minimum: 0,
            maximum: 30,
            //  suffix: "mn"
        },
        data: [{
            indexLabelFontColor: "darkSlateGray",
            name: "views",
            type: "pie",
            //yValueFormatString: "#,##0.0mn",
            dataPoints: []
        }]


    });
     chart4 = new CanvasJS.Chart("spineContainer", {
         height:300,
         width: 1280,
        animationEnabled: true,
        title: {
            text: "Number of people that came to gathering service"
        },
        axisX: {
            minimum: 0,
            maximum: 7,
            // valueFormatString: "MMM YY"
        },
        axisY: {
            title: "Target",
            titleFontColor: "#4F81BC",
            minimum: 0,
            maximum: 30,
            //  suffix: "mn"
        },
        data: [{
            indexLabelFontColor: "darkSlateGray",
            name: "views",
            type: "spline",
            //yValueFormatString: "#,##0.0mn",
            dataPoints: [],
        }]


    });

    chart.render();
    chart2.render();
    chart3.render();
    chart4.render();


}