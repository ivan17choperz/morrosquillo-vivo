import axios from "axios";
import { Chart } from "chart.js/auto";

const $chart_speices = document.getElementById("chart_speices");
const $chart_students = document.getElementById("chart_students");
const $chart_cursos = document.getElementById("chart_cursos");


async function getDataCursos() {
    await axios
        .get("http://localhost:8000/admin/dashboard/get-cursos")
        .then((response) => {
            const data = response.data;

            data.forEach( (curso) => {
                const mounthNumber = curso.mes.split("-");
                const mounths = [
                    "Enero",
                    "Febrero",
                    "Marzo",
                    "Abril",
                    "Mayo",
                    "Junio",
                    "Julio",
                    "Agosto",
                    "Septiembre",
                    "Octubre",
                    "Noviembre",
                    "Diciembre",
                ];

                const mountLabel = mounths[parseInt(mounthNumber.pop() - 1)];

                new Chart($chart_cursos, {
                    type: "bar",
                    data: {
                        labels: [mountLabel],
                        datasets: [
                            {
                                label: "Especies Registradas",
                                data: [curso.cantidad],
                                backgroundColor: ["rgba(22, 163, 74,0.2)"],
                                borderColor: ["rgba(20, 83, 45,1)"],
                                borderWidth: 1,
                            },
                        ],
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                            },
                        },
                    },
                });

                console.log(curso);
            });
        });
}
getDataCursos();

async function getDataSpeices() {
    await axios
        .get("http://localhost:8000/admin/dashboard/get-speices")
        .then((response) => {
            const data = response.data;

            data.forEach( (speice) => {
                const mounthNumber =  speice.mes.split("-");
                const mounths = [
                    "Enero",
                    "Febrero",
                    "Marzo",
                    "Abril",
                    "Mayo",
                    "Junio",
                    "Julio",
                    "Agosto",
                    "Septiembre",
                    "Octubre",
                    "Noviembre",
                    "Diciembre",
                ];

                const mountLabel = mounths[parseInt(mounthNumber.pop() - 1)];

                new Chart($chart_speices, {
                    type: "bar",
                    data: {
                        labels: [mountLabel],
                        datasets: [
                            {
                                label: "Especies Registradas",
                                data: [speice.cantidad],
                                backgroundColor: ["rgba(22, 163, 74,0.2)"],
                                borderColor: ["rgba(20, 83, 45,1)"],
                                borderWidth: 1,
                            },
                        ],
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                            },
                        },
                    },
                });

                console.log();
            });
        });
}
getDataSpeices();

async function getDataStudests() {
    await axios
        .get("http://localhost:8000/admin/dashboard/get-students")
        .then((response) => {
            const data = response.data;

            data.forEach( (student) => {
                const mounthNumber =  student.mes.split("-");
                const mounths = [
                    "Enero",
                    "Febrero",
                    "Marzo",
                    "Abril",
                    "Mayo",
                    "Junio",
                    "Julio",
                    "Agosto",
                    "Septiembre",
                    "Octubre",
                    "Noviembre",
                    "Diciembre",
                ];

                const mountLabel = mounths[parseInt(mounthNumber.pop() - 1)];

                new Chart($chart_students, {
                    type: "bar",
                    data: {
                        labels: [mountLabel],
                        datasets: [
                            {
                                label: "Especies Registradas",
                                data: [student.cantidad],
                                backgroundColor: ["rgba(22, 163, 74,0.2)"],
                                borderColor: ["rgba(20, 83, 45,1)"],
                                borderWidth: 1,
                            },
                        ],
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                            },
                        },
                    },
                });

                console.log();
            });
        });
}
getDataStudests();





