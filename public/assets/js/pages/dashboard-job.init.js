function getChartColorsArray(e) {
    if (null !== document.getElementById(e)) {
        var a = "data-colors" + ("-" + document.documentElement.getAttribute("data-theme") ?? ""),
            a = document.getElementById(e).getAttribute(a) ?? document.getElementById(e).getAttribute("data-colors");
        if (a) return (a = JSON.parse(a)).map(function(e) {
            var a = e.replace(" ", "");
            return -1 === a.indexOf(",") ? getComputedStyle(document.documentElement).getPropertyValue(a) || a : 2 == (e = e.split(",")).length ? "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(e[0]) + "," + e[1] + ")" : a
        });
        console.warn("data-colors attributes not found on", e)
    }
}
var linechartDashedColors = getChartColorsArray("line_chart_dashed"),
    chartDonutBasicColors = (linechartDashedColors && (options = {
        chart: {
            height: 345,
            type: "line",
            zoom: {
                enabled: !1
            },
            toolbar: {
                show: !1
            }
        },
        colors: linechartDashedColors,
        dataLabels: {
            enabled: !1
        },
        stroke: {
            width: [3, 4, 3],
            curve: "straight",
            dashArray: [0, 8, 5]
        },
        series: [{
            name: "New Application",
            data: [89, 56, 74, 98, 72, 38, 64, 46, 84, 58, 46, 49]
        }, {
            name: "Interview",
            data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10]
        }, {
            name: " Hired",
            data: [36, 42, 60, 42, 13, 18, 29, 37, 36, 51, 32, 35]
        }],
        markers: {
            size: 0,
            hover: {
                sizeOffset: 6
            }
        },
        xaxis: {
            categories: ["01 Jan", "02 Jan", "03 Jan", "04 Jan", "05 Jan", "06 Jan", "07 Jan", "08 Jan", "09 Jan", "10 Jan", "11 Jan", "12 Jan"]
        },
        grid: {
            borderColor: "#f1f1f1"
        }
    }, (chart = new ApexCharts(document.querySelector("#line_chart_dashed"), options)).render()), getChartColorsArray("store-visits-source")),
    worldemapmarkers = (chartDonutBasicColors && (options = {
        series: [44, 55, 41, 17, 15],
        labels: ["Direct", "Social", "Email", "Other", "Referrals"],
        chart: {
            height: 333,
            type: "donut"
        },
        legend: {
            position: "bottom"
        },
        stroke: {
            show: !1
        },
        dataLabels: {
            dropShadow: {
                enabled: !1
            }
        },
        colors: chartDonutBasicColors
    }, (chart = new ApexCharts(document.querySelector("#store-visits-source"), options)).render()), "");

function loadCharts() {
    var e = getChartColorsArray("sales-by-locations");
    e && (document.getElementById("sales-by-locations").innerHTML = "", worldemapmarkers = "", worldemapmarkers = new jsVectorMap({
        map: "world_merc",
        selector: "#sales-by-locations",
        zoomOnScroll: !1,
        zoomButtons: !1,
        selectedMarkers: [0, 5],
        regionStyle: {
            initial: {
                stroke: "#9599ad",
                strokeWidth: .25,
                fill: e[0],
                fillOpacity: 1
            }
        },
        markersSelectable: !0,
        markers: [{
            name: "Palestine",
            coords: [31.9474, 35.2272]
        }, {
            name: "Russia",
            coords: [61.524, 105.3188]
        }, {
            name: "Canada",
            coords: [56.1304, -106.3468]
        }, {
            name: "Greenland",
            coords: [71.7069, -42.6043]
        }],
        markerStyle: {
            initial: {
                fill: e[1]
            },
            selected: {
                fill: e[2]
            }
        },
        labels: {
            markers: {
                render: function(e) {
                    return e.name
                }
            }
        }
    }))
}
window.onresize = function() {
    setTimeout(() => {
        loadCharts()
    }, 0)
}, loadCharts();
var jobListAll, searchResultList, options, chart, jobListAllData = [
        ["Marketing Director", "Meta4Systems", "Vinninga, Sweden", "$250 - $800", "0-5 year", "Full Time"],
        ["UI/UX designer", "Zoetic Fashion", "Cullera, Spain", "$400+", "0-2 year", "Part Time"],
        ["Web Designer", "Force Medicines", "Ugashik, US", "$412 - $241 ", "3+ year", "Freelancer"],
        ["Full Stack Engineer", "Syntyce Solutions", "Zuweihir, UAE", "$650 - $900", "0-1+ year", "Full Time"],
        ["Assistant / Store Keeper", "Moetic Fashion", "Limestone, US", "$340 - $800", "0-3 year", "Intership"],
        ["Project Manager", "Themesbrand", "California, US", "$400 - $600", "3+ year", "Part Time"],
        ["Education Training", "Micro Design", "Germany", "$750 - $940", "1.5+ year", "Freelancer"],
        ["Graphic Designer", "Digitech Galaxy", "Mughairah, UAE", "$160 - $230", "2-3+ year", "Full Time"],
        ["React Developer", "iTest Factory", "Khabākhib, UAE", "$90 - $160", "5+ year", "Intership"],
        ["Executive, HR Operations", "Micro Design", "Texanna, US", "$50 - $120", "1-5 year", "Part Time"],
        ["Project Manager", "Meta4Systems", "Limestone, US", "$210 - $300", "0-2+ year", "Freelancer"],
        ["Full Stack Engineer", "Force Medicines", "Ugashik, US", "$120 - $180", "2-5 year", "Part Time"],
        ["Full Stack Engineer", "Digitech Galaxy", "Maidaq, UAE", "$900 - $1020", "3-5 year", "Full Time"],
        ["Marketing Director", "Zoetic Fashion", "Quesada, US", "$600 - $870", "0-5 year", "Freelancer"]
    ],
    chartRadialbarBasicColors = (document.getElementById("recomended-jobs") && (jobListAll = new gridjs.Grid({
        columns: [{
            name: "Position",
            width: "150px"
        }, {
            name: "Company Name",
            width: "250px"
        }, {
            name: "Location",
            width: "250px"
        }, {
            name: "Salary",
            width: "250px"
        }, {
            name: "Experience",
            width: "150px"
        }, {
            name: "Job Type",
            width: "150px"
        }],
        sort: !0,
        pagination: {
            limit: 6
        },
        data: jobListAllData
    }).render(document.getElementById("recomended-jobs")), (searchResultList = document.getElementById("searchResultList")).addEventListener("keyup", function() {
        var e = searchResultList.value.toLowerCase();
        a = e;
        var a, e = jobListAllData.filter(function(e) {
            return -1 !== e[0].toLowerCase().indexOf(a.toLowerCase()) || -1 !== e[1].toLowerCase().indexOf(a.toLowerCase())
        });
        jobListAll.updateConfig({
            data: e
        }).forceRender()
    })), Array.from(document.querySelectorAll("#candidate-list li")).forEach(function(t) {
        t.querySelector("a").addEventListener("click", function() {
            var e = t.querySelector(".candidate-name").innerHTML,
                a = t.querySelector(".candidate-position").innerHTML,
                r = t.querySelector(".candidate-img").src;
            document.getElementById("candidate-name").innerHTML = e, document.getElementById("candidate-position").innerHTML = a, document.getElementById("candidate-img").src = r
        })
    }), window.addEventListener("load", () => {
        var r = document.getElementById("searchList"),
            t = document.querySelectorAll("#candidate-list li");
        r.onkeyup = () => {
            var e, a = r.value.toLowerCase();
            for (e of t) - 1 == e.querySelector(".candidate-name").innerHTML.toLowerCase().indexOf(a) ? e.classList.add("d-none") : e.classList.remove("d-none")
        }
    }), getChartColorsArray("total_jobs"));
chartRadialbarBasicColors && (options = {
    series: [95],
    chart: {
        type: "radialBar",
        width: 105,
        sparkline: {
            enabled: !0
        }
    },
    dataLabels: {
        enabled: !1
    },
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "70%"
            },
            track: {
                margin: 1
            },
            dataLabels: {
                show: !0,
                name: {
                    show: !1
                },
                value: {
                    show: !0,
                    fontSize: "16px",
                    fontWeight: 600,
                    offsetY: 8
                }
            }
        }
    },
    colors: chartRadialbarBasicColors
}, (chart = new ApexCharts(document.querySelector("#total_jobs"), options)).render()), (chartRadialbarBasicColors = getChartColorsArray("apply_jobs")) && (options = {
    series: [97],
    chart: {
        type: "radialBar",
        width: 105,
        sparkline: {
            enabled: !0
        }
    },
    dataLabels: {
        enabled: !1
    },
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "70%"
            },
            track: {
                margin: 1
            },
            dataLabels: {
                show: !0,
                name: {
                    show: !1
                },
                value: {
                    show: !0,
                    fontSize: "16px",
                    fontWeight: 600,
                    offsetY: 8
                }
            }
        }
    },
    colors: chartRadialbarBasicColors
}, (chart = new ApexCharts(document.querySelector("#apply_jobs"), options)).render()), (chartRadialbarBasicColors = getChartColorsArray("interview_chart")) && (options = {
    series: [89],
    chart: {
        type: "radialBar",
        width: 105,
        sparkline: {
            enabled: !0
        }
    },
    dataLabels: {
        enabled: !1
    },
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "70%"
            },
            track: {
                margin: 1
            },
            dataLabels: {
                show: !0,
                name: {
                    show: !1
                },
                value: {
                    show: !0,
                    fontSize: "16px",
                    fontWeight: 600,
                    offsetY: 8
                }
            }
        }
    },
    colors: chartRadialbarBasicColors
}, (chart = new ApexCharts(document.querySelector("#interview_chart"), options)).render()), (chartRadialbarBasicColors = getChartColorsArray("hired_chart")) && (options = {
    series: [64],
    chart: {
        type: "radialBar",
        width: 105,
        sparkline: {
            enabled: !0
        }
    },
    dataLabels: {
        enabled: !1
    },
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "70%"
            },
            track: {
                margin: 1
            },
            dataLabels: {
                show: !0,
                name: {
                    show: !1
                },
                value: {
                    show: !0,
                    fontSize: "16px",
                    fontWeight: 600,
                    offsetY: 8
                }
            }
        }
    },
    colors: chartRadialbarBasicColors
}, (chart = new ApexCharts(document.querySelector("#hired_chart"), options)).render()), (chartRadialbarBasicColors = getChartColorsArray("rejected_chart")) && (options = {
    series: [20],
    chart: {
        type: "radialBar",
        width: 105,
        sparkline: {
            enabled: !0
        }
    },
    dataLabels: {
        enabled: !1
    },
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "70%"
            },
            track: {
                margin: 1
            },
            dataLabels: {
                show: !0,
                name: {
                    show: !1
                },
                value: {
                    show: !0,
                    fontSize: "16px",
                    fontWeight: 600,
                    offsetY: 8
                }
            }
        }
    },
    colors: chartRadialbarBasicColors
}, (chart = new ApexCharts(document.querySelector("#rejected_chart"), options)).render()), (chartRadialbarBasicColors = getChartColorsArray("new_jobs_chart")) && (options = {
    series: [80],
    chart: {
        type: "radialBar",
        width: 105,
        sparkline: {
            enabled: !0
        }
    },
    dataLabels: {
        enabled: !1
    },
    plotOptions: {
        radialBar: {
            hollow: {
                margin: 0,
                size: "70%"
            },
            track: {
                margin: 1
            },
            dataLabels: {
                show: !0,
                name: {
                    show: !1
                },
                value: {
                    show: !0,
                    fontSize: "16px",
                    fontWeight: 600,
                    offsetY: 8
                }
            }
        }
    },
    colors: chartRadialbarBasicColors
}, (chart = new ApexCharts(document.querySelector("#new_jobs_chart"), options)).render());