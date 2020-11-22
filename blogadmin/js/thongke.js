 

  $(document).ready(function () {
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ['Hoàn thành', 'Chưa xong', 'Quá hạn'],
        datasets: [{
          // label: '# of Votes',
          data: [1, 1, 1],
          backgroundColor: [
              'rgba(75, 192, 192, 0.2)', // xanh
                 'rgba(153, 102, 255, 0.2)', //tím
          'rgba(255, 99, 132, 0.2)', // đỏ

          ],
          borderColor: [
          
              'rgba(75, 192, 192, 1)', // xanh
                 'rgba(153, 102, 255, 1)', //tím
          'rgba(255, 99, 132, 1)', // đỏ
          ],
          borderWidth: 1
        }]
      },
      options: {
        title: {
          display: true,
          text: 'Hiệu suất công việc (tính năng đang làm) '
        }
      }
    });
  });
