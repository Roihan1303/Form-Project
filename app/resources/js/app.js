import './bootstrap';
import 'flowbite';
import { DataTable, exportCSV, exportTXT } from 'simple-datatables';

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

window.DataTable = DataTable;


const tables = new DataTable("#tables", {
    searchable: true,
    sortable: true,
});