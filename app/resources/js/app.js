import './bootstrap';
import 'flowbite';
import { DataTable } from 'simple-datatables';
import ApexCharts from 'apexcharts';

window.DataTable = DataTable;
window.ApexCharts = ApexCharts;

document.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    });

    const hiddenElements = document.querySelectorAll(".none");
    hiddenElements.forEach((el) => observer.observe(el));
});

document.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    });

    const hiddenElements = document.querySelectorAll(".none-right");
    hiddenElements.forEach((el) => observer.observe(el));
});

var tables = document.getElementById('tables');
if (tables) {
    tables = new DataTable("#tables", {
        searchable: true,
        sortable: true,
    });
}

const getJmlGuru = () => {
    return {
        series: [52.8, 26.8, 20.4],
        colors: ["#1C64F2", "#16BDCA", "#9061F9"],
        chart: {
            height: 420,
            width: "100%",
            type: "pie",
        },
        stroke: {
            colors: ["white"],
            lineCap: "",
        },
        plotOptions: {
            pie: {
                labels: {
                    show: true,
                },
                size: "100%",
                dataLabels: {
                    offset: -25
                }
            },
        },
        labels: ["S1", "S2", "Non Gelar"],
        dataLabels: {
            enabled: true,
            style: {
                fontFamily: "Plus Jakarta Sans, sans-serif",
            },
        },
        legend: {
            position: "bottom",
            fontFamily: "Plus Jakarta Sans, sans-serif",
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return value + "%"
                },
            },
        },
        xaxis: {
            labels: {
                formatter: function (value) {
                    return value + "%"
                },
            },
            axisTicks: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
        },
    }
}


if (document.getElementById("guru-jml") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("guru-jml"), getJmlGuru());
    chart.render();
}

const getConGuru = () => {
    return {
        series: [21, 29, 24, 26],
        colors: ["#1C64F2", "#16BDCA", "#9061F9", "#00D72E"],
        chart: {
            height: 420,
            width: "100%",
            type: "pie",
        },
        stroke: {
            colors: ["white"],
            lineCap: "",
        },
        plotOptions: {
            pie: {
                labels: {
                    show: true,
                },
                size: "100%",
                dataLabels: {
                    offset: -25
                }
            },
        },
        labels: ["PNS", "Guru Pembantu", "Guru Yayasan", "Guru Honorer"],
        dataLabels: {
            enabled: true,
            style: {
                fontFamily: "Plus Jakarta Sans, sans-serif",
            },
        },
        legend: {
            position: "bottom",
            fontFamily: "Plus Jakarta Sans, sans-serif",
        },
        yaxis: {
            labels: {
                formatter: function (value) {
                    return value + "%"
                },
            },
        },
        xaxis: {
            labels: {
                formatter: function (value) {
                    return value + "%"
                },
            },
            axisTicks: {
                show: false,
            },
            axisBorder: {
                show: false,
            },
        },
    }
}

if (document.getElementById("guru-keadaan") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("guru-keadaan"), getConGuru());
    chart.render();
}


const options = {
    colors: ["#1A56DB", "#FDBA8C"],
    series: [
        {
            name: "Laki Laki",
            color: "#1A56DB",
            data: [
                { x: "Kelas I", y: 231 },
                { x: "Kelas II", y: 122 },
                { x: "Kelas III", y: 63 },
                { x: "Kelas IV", y: 421 },
                { x: "Kelas V", y: 122 },
                { x: "Kelas VI", y: 323 },
            ],
        },
        {
            name: "Perempuan",
            color: "#FDBA8C",
            data: [
                { x: "Kelas I", y: 232 },
                { x: "Kelas II", y: 113 },
                { x: "Kelas III", y: 341 },
                { x: "Kelas IV", y: 224 },
                { x: "Kelas V", y: 522 },
                { x: "Kelas VI", y: 411 },
            ],
        },
    ],
    chart: {
        type: "bar",
        height: "320px",
        fontFamily: "Plus Jakarta Sans, sans-serif",
        toolbar: {
            show: false,
        },
    },
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: "70%",
            borderRadiusApplication: "end",
            borderRadius: 8,
        },
    },
    tooltip: {
        shared: true,
        intersect: false,
        style: {
            fontFamily: "Plus Jakarta Sans, sans-serif",
        },
    },
    states: {
        hover: {
            filter: {
                type: "darken",
                value: 1,
            },
        },
    },
    stroke: {
        show: true,
        width: 0,
        colors: ["transparent"],
    },
    grid: {
        show: false,
        strokeDashArray: 4,
        padding: {
            left: 2,
            right: 2,
            top: -14
        },
    },
    dataLabels: {
        enabled: false,
    },
    legend: {
        show: false,
    },
    xaxis: {
        floating: false,
        labels: {
            show: true,
            style: {
                fontFamily: "Plus Jakarta Sans, sans-serif",
                cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
            }
        },
        axisBorder: {
            show: false,
        },
        axisTicks: {
            show: false,
        },
    },
    yaxis: {
        show: false,
    },
    fill: {
        opacity: 1,
    },
}

if (document.getElementById("siswa-chart") && typeof ApexCharts !== 'undefined') {
    const chart = new ApexCharts(document.getElementById("siswa-chart"), options);
    chart.render();
}

