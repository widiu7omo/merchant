$(function () {

	'use strict';

	/* ChartJS
	 * -------
	 * Here we will create a few charts using ChartJS
	 */

	// -----------------------
	// - MONTHLY SALES CHART -
	// -----------------------

	// Get context with jQuery - using jQuery's .get() method.
	var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
	console.log(salesChartCanvas);
	// This will get the first returned node in the jQuery collection.
	// var salesChart       = new Chart(salesChartCanvas);

	var salesChartData = {
		labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
		datasets: [{
				label: 'Impression',
				fillColor: 'rgb(210, 214, 222)',
				borderColor: 'rgba(194, 0, 0, .7)',
				pointColor: 'rgb(210, 214, 222)',
				pointStrokeColor: '#c1c7d1',
				pointHighlightFill: '#fff',
				pointHighlightStroke: 'rgb(220,220,220)',
				data: [65, 59, 80, 81, 56, 55, 40]
			},
			{
				label: 'Call',
				fillColor: 'rgb(210, 214, 222)',
				borderColor: 'rgba(0, 64, 184, .7)',
				pointColor: 'rgb(210, 214, 222)',
				pointStrokeColor: '#c1c7d1',
				pointHighlightFill: '#fff',
				pointHighlightStroke: 'rgb(220,220,220)',
				data: [20, 22, 32, 12, 56, 55, 40]
			},
			{
				label: 'Message',
				fillColor: 'rgba(20,131,188,0.9)',
				borderColor: 'rgba(0, 61, 11, .7)',
				pointColor: '#3b8bba',
				pointStrokeColor: 'rgba(60,141,188,1)',
				pointHighlightFill: '#fff',
				pointHighlightStroke: 'rgba(60,141,188,1)',
				data: [28, 48, 40, 19, 86, 27, 90]
			},
			{
				label: 'Website',
				fillColor: 'rgb(110, 214, 222)',
				borderColor: 'rgba(61, 22, 0, .7)',
				pointColor: 'rgb(210, 214, 222)',
				pointStrokeColor: '#c1c7d1',
				pointHighlightFill: '#fff',
				pointHighlightStroke: 'rgb(220,220,220)',
				data: [11, 23, 54, 22, 90, 29, 20]
			},
		]
	};

	var salesChartOptions = {
		type: 'line',
		data: salesChartData,
		// Boolean - If we should show the scale at all
		showScale: true,
		// Boolean - Whether grid lines are shown across the chart
    scaleShowGridLines: true,
		// String - Colour of the grid lines
		scaleGridLineColor: 'rgba(0,0,0,.05)',
		// Number - Width of the grid lines
		scaleGridLineWidth: 1,
		// Boolean - Whether to show horizontal lines (except X axis)
		scaleShowHorizontalLines: true,
		// Boolean - Whether to show vertical lines (except Y axis)
		scaleShowVerticalLines: true,
		// Boolean - Whether the line is curved between points
		bezierCurve: true,
		// Number - Tension of the bezier curve between points
		bezierCurveTension: 0.3,
		// Boolean - Whether to show a dot for each point
		pointDot: true,
		// Number - Radius of each point dot in pixels
		pointDotRadius: 4,
		// Number - Pixel width of point dot stroke
		pointDotStrokeWidth: 1,
		// Number - amount extra to add to the radius to cater for hit detection outside the drawn point
		pointHitDetectionRadius: 20,
		// Boolean - Whether to show a stroke for datasets
		datasetStroke: true,
		// Number - Pixel width of dataset stroke
		datasetStrokeWidth: 4,
		// Boolean - Whether to fill the dataset with a color
		datasetFill: true,
		// String - A legend template
		legendTemplate: '<ul class=\'<%=name.toLowerCase()%>-legend\'><% for (var i=0; i<datasets.length; i++){%><li><span style=\'background-color:<%=datasets[i].lineColor%>\'></span><%=datasets[i].label%></li><%}%></ul>',
		// Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
		maintainAspectRatio: true,
		// Boolean - whether to make the chart responsive to window resizing
		responsive: true,
		multiTooltipTemplate: "<%=datasetLabel%> : <%= value %>"
	};
	var salesChart = new Chart(salesChartCanvas, salesChartOptions);

	// Create the line chart
	// salesChart(salesChartData, salesChartOptions);

	// ---------------------------
	// - END MONTHLY SALES CHART -
	// ---------------------------

});
