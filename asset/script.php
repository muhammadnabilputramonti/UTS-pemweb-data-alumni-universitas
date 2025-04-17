<script>
    const ctxFakultas = document.getElementById('pieChartFakultas').getContext('2d');
    const pieChartFakultas = new Chart(ctxFakultas, {
        type: 'pie',
        data: {
            labels: [
                <?php foreach ($alumniByFakultas as $row) {
                    echo "'".$row['fakultas']."',";
                } ?>
            ],
            datasets: [{
                label: 'Jumlah Alumni per Fakultas',
                data: [
                    <?php foreach ($alumniByFakultas as $row) {
                        echo $row['total'].",";
                    } ?>
                ],
                backgroundColor: [
    '#1E3A8A', // Deep Navy
    '#3B82F6', // Soft Blue
    '#06B6D4', // Cyan
    '#A5B4FC', // Lavender-ish Blue
    '#FCD34D', // Soft Gold
    '#FBBF24', // Orange pastel
    '#FDE68A', // Butter Yellow
    '#D1D5DB', // Soft Grey
    '#93C5FD', // Cloud Blue
    '#E0F2FE'  // Light Ice Blue
],

                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });

    // OPTIONAL: Jika kamu mau isi chart lain di panel kanan
    const ctxRight = document.getElementById('fakultasChart').getContext('2d');
    new Chart(ctxRight, {
        type: 'doughnut',
        data: pieChartFakultas.data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'right'
                }
            }
        }
    });





    // DATA untuk jurusan
const ctxJurusan = document.getElementById('jurusanChart').getContext('2d');
const jurusanChart = new Chart(ctxJurusan, {
    type: 'doughnut',
    data: {
        labels: [
            <?php foreach ($alumniByJurusan as $row) {
                echo "'".$row['jurusan']."',";
            } ?>
        ],
        datasets: [{
            label: 'Jumlah Alumni per Jurusan',
            data: [
                <?php foreach ($alumniByJurusan as $row) {
                    echo $row['total'].",";
                } ?>
            ],
            backgroundColor: [
                '#1E3A8A', // Deep Navy
                '#3B82F6', // Soft Blue
                '#06B6D4', // Cyan
                '#A5B4FC', // Lavender-ish Blue
                '#FCD34D', // Soft Gold
                '#FBBF24', // Orange pastel
                '#FDE68A', // Butter Yellow
                '#D1D5DB', // Soft Grey
                '#93C5FD', // Cloud Blue
                '#E0F2FE'  // Light Ice Blue
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'right'
            }
        }
    }
});

</script>


<script>
const ctxJurusan = document.getElementById('jurusanChart').getContext('2d');
const jurusanChart = new Chart(ctxJurusan, {
    type: 'doughnut',
    data: {
        labels: [
            <?php foreach ($alumniByJurusan as $row) {
                echo "'".$row['jurusan']."',";
            } ?>
        ],
        datasets: [{
            label: 'Jumlah Alumni per Jurusan',
            data: [
                <?php foreach ($alumniByJurusan as $row) {
                    echo $row['total'].",";
                } ?>
            ],
            backgroundColor: [
                '#1E3A8A', '#3B82F6', '#06B6D4', '#A5B4FC', '#FCD34D',
                '#FBBF24', '#FDE68A', '#D1D5DB', '#93C5FD', '#E0F2FE'
            ],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'bottom',
                labels: {
                    boxWidth: 20,
                    padding: 10
                }
            }
        }
    }
});
</script>