import "./bootstrap";
import "flowbite";
import "preline";
import _ from 'lodash';
import ApexCharts from 'apexcharts';
import 'preline/dist/helper-apexcharts';
import Alpine from "alpinejs";

window.Alpine = Alpine;
window.ApexCharts = ApexCharts;
window._ = _;

Alpine.start();
