const { PrefetchPlugin } = require("webpack");

$(function() {
    'use strict';
  
  
    var colors = {
      primary        : "#6571ff",
      secondary      : "#7987a1",
      success        : "#05a34a",
      info           : "#66d1d1",
      warning        : "#fbbc06",
      danger         : "#ff3366",
      light          : "#e9ecef",
      dark           : "#060c17",
      muted          : "#7987a1",
      gridBorder     : "rgba(77, 138, 240, .15)",
      bodyColor      : "#000",
      cardBg         : "#fff"
    }
  
    var fontFamily = "'Roboto', Helvetica, sans-serif"
  
  
  
    // Mixed Line Bar Chart
    if($('#chartjsMixedBar').length) {
        new Chart($('#chartjsMixedBar'), {
          type: 'bar',
          data: {
            // labels: ["1900", "1950", "1999", "2050"],
            labels: [
                
                for (var i = 1; i <= 31; i++) {
                    print i . ",";
                }
                
            ]
            datasets: [
              // {
              //   label: "Europe",
              //   type: "line",
              //   borderColor: colors.danger,
              //   backgroundColor: "transparent",
              //   data: [408,547,675,734],
              //   fill: false,
              //   pointBackgroundColor: colors.cardBg,
              //   pointBorderWidth: 2,
              //   pointHoverBorderWidth: 3,
              //   tension: .3
              // }, {
              //   label: "Africa",
              //   type: "line",
              //   borderColor: colors.primary,
              //   backgroundColor: "transparent",
              //   data: [133,221,783,2478],
              //   fill: false,
              //   pointBackgroundColor: colors.cardBg,
              //   pointBorderWidth: 2,
              //   pointHoverBorderWidth: 3,
              //   tension: .3
              // },
              
              {
                label: "Europe",
                type: "bar",
                backgroundColor: colors.danger,
                data: [408,547,675,734],
              }, {
                label: "Africa",
                type: "bar",
                backgroundColor: colors.primary,
                data: [133,221,783,2478]
              }
            ]
          },
          options: {
            plugins: {
              legend: { 
                display: true,
                labels: {
                  color: colors.bodyColor,
                  font: {
                    size: '13px',
                    family: fontFamily
                  }
                }
              },
            },
            scales: {
              x: {
                display: true,
                grid: {
                  display: true,
                  color: colors.gridBorder,
                  borderColor: colors.gridBorder,
                },
                ticks: {
                  color: colors.bodyColor,
                  font: {
                    size: 12
                  }
                }
              },
              y: {
                grid: {
                  display: true,
                  color: colors.gridBorder,
                  borderColor: colors.gridBorder,
                },
                ticks: {
                  color: colors.bodyColor,
                  font: {
                    size: 12
                  }
                }
              }
            }
          }
        });
      }
  
  
  
  });