		am4core.ready(function() {

		// Themes begin
		am4core.useTheme(am4themes_kelly);
		am4core.useTheme(am4themes_animated);
		// Themes end

		// Create chart instance
		var chart = am4core.create("chartdiv", am4charts.XYChart3D);

		// Add data
		chart.data = [{
		  "country": "Januari",
		  "visits": 4025
		}, {
		  "country": "Februari",
		  "visits": 1882
		}, {
		  "country": "Maret",
		  "visits": 1809
		}, {
		  "country": "April",
		  "visits": 1322
		}, {
		  "country": "Mei",
		  "visits": 1122
		}, {
		  "country": "Juni",
		  "visits": 1114
		}, {
		  "country": "Juli",
		  "visits": 984
		}, {
		  "country": "Agustus",
		  "visits": 711
		}, {
		  "country": "September",
		  "visits": 665
		}, {
		  "country": "Oktober",
		  "visits": 580
		}, {
		  "country": "November",
		  "visits": 443
		}, {
		  "country": "Desember",
		  "visits": 441
		}];

		// Create axes
		let categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
		categoryAxis.dataFields.category = "country";
		categoryAxis.renderer.labels.template.rotation = 270;
		categoryAxis.renderer.labels.template.hideOversized = false;
		categoryAxis.renderer.minGridDistance = 20;
		categoryAxis.renderer.labels.template.horizontalCenter = "right";
		categoryAxis.renderer.labels.template.verticalCenter = "middle";
		categoryAxis.tooltip.label.rotation = 270;
		categoryAxis.tooltip.label.horizontalCenter = "right";
		categoryAxis.tooltip.label.verticalCenter = "middle";

		let valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
		valueAxis.title.text = "Countries";
		valueAxis.title.fontWeight = "bold";

		// Create series
		var series = chart.series.push(new am4charts.ColumnSeries3D());
		series.dataFields.valueY = "visits";
		series.dataFields.categoryX = "country";
		series.name = "Visits";
		series.tooltipText = "{categoryX}: [bold]{valueY}[/]";
		series.columns.template.fillOpacity = .8;

		var columnTemplate = series.columns.template;
		columnTemplate.strokeWidth = 2;
		columnTemplate.strokeOpacity = 1;
		columnTemplate.stroke = am4core.color("#FFFFFF");

		columnTemplate.adapter.add("fill", (fill, target) => {
		  return chart.colors.getIndex(target.dataItem.index);
		})

		columnTemplate.adapter.add("stroke", (stroke, target) => {
		  return chart.colors.getIndex(target.dataItem.index);
		})

		chart.cursor = new am4charts.XYCursor();
		chart.cursor.lineX.strokeOpacity = 0;
		chart.cursor.lineY.strokeOpacity = 0;

		}); // end am4core.ready()