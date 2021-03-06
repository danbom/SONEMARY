// 메인 페이지 영화 목록 2, 상세 페이지 Score
// 육각형 그래프

// $(document).ready(function(){
//   function generateData(movieId){
//     $.ajax({
//       url: "score.php",
//       type: "GET",
//       success: function(data){
  
//         var userData = [];
  
//         for(var i in data[movieId]){
//           userData.push(data[movieId][i].avg1);
//           userData.push(data[movieId][i].avg2);
//           userData.push(data[movieId][i].avg3);
//           userData.push(data[movieId][i].avg4);
//           userData.push(data[movieId][i].avg5);
//           userData.push(data[movieId][i].avg6);
//         }
  
//         var chartData = {
//           labels: ["S", "M", "V", "A", "G", "E"],
//           datasets: [
//                 {
//                     label: "User",
//                     data: userData,
//                     backgroundColor: [
//                         "rgba(255, 99, 132, 0.2)"
//                     ],
//                     borderColor: [
//                         "rgba(255, 99, 132, 1)"
//                     ],
//                     borderWidth: 1,
//                 },
//                 {
//                     label: "Critic",
//                     data: [6, 7, 1, 3, 9, 9],
//                     backgroundColor: [
//                         "rgba(75, 192, 192, 0.2)"
//                     ],
//                     borderColor: [
//                         "rgba(75, 192, 192, 1)"
//                     ],
//                     borderWidth: 1,
//                 },
//           ],
//         };
  
//         return chartData;
//       },
//       error: function(data){}
//     });
//   };
// });


// 모든 차트 공통 옵션
var options = {
    scale: {
        angleLines: {
        display: false,
        },
        ticks: {
        suggestedMin: 0,
        suggestedMax: 10,
        }
    }
  };
  
  var ctx5 = document.getElementById("myChart5");
  var ctx6 = document.getElementById("myChart6");
  var ctx7 = document.getElementById("myChart7");
  var ctx8 = document.getElementById("myChart8");
  
  var myChart5 = new Chart(ctx5, {
    type:"radar",
    data: {
      labels: ["S", "M", "V", "A", "E", "G"],
      datasets: [
            {
                label: "User",
                data: [8, 6, 7, 6, 9, 5],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)"
                ],
                borderColor: [
                    "rgba(255, 99, 132, 1)"
                ],
                borderWidth: 1,
            },
            {
                label: "Critic",
                data: [7, 6, 8, 6, 7, 6],
                backgroundColor: [
                    "rgba(75, 192, 192, 0.2)"
                ],
                borderColor: [
                    "rgba(75, 192, 192, 1)"
                ],
                borderWidth: 1,
            },
      ],
    },
    options: options
  });
  var myChart6 = new Chart(ctx6, {
    type:"radar",
    data: {
      labels: ["S", "M", "V", "A", "E", "G"],
      datasets: [
            {
                label: "User",
                data: [4, 5, 7, 6, 5, 5],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)"
                ],
                borderColor: [
                    "rgba(255, 99, 132, 1)"
                ],
                borderWidth: 1,
            },
            {
                label: "Critic",
                data: [6, 6, 8, 6, 7, 6],
                backgroundColor: [
                    "rgba(75, 192, 192, 0.2)"
                ],
                borderColor: [
                    "rgba(75, 192, 192, 1)"
                ],
                borderWidth: 1,
            },
      ],
    },
    options: options
  });
  var myChart7 = new Chart(ctx7, {
    type:"radar",
    data: {
      labels: ["S", "M", "V", "A", "E", "G"],
      datasets: [
            {
                label: "User",
                data: [4, 5, 6, 5, 8, 7],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)"
                ],
                borderColor: [
                    "rgba(255, 99, 132, 1)"
                ],
                borderWidth: 1,
            },
            {
                label: "Critic",
                data: [5, 6, 7, 4, 7, 8],
                backgroundColor: [
                    "rgba(75, 192, 192, 0.2)"
                ],
                borderColor: [
                    "rgba(75, 192, 192, 1)"
                ],
                borderWidth: 1,
            },
      ],
    },
    options: options
  });
  var myChart8 = new Chart(ctx8, {
    type:"radar",
    data: {
      labels: ["S", "M", "V", "A", "E", "G"],
      datasets: [
            {
                label: "User",
                data: [7, 7, 8, 6, 5, 6],
                backgroundColor: [
                    "rgba(255, 99, 132, 0.2)"
                ],
                borderColor: [
                    "rgba(255, 99, 132, 1)"
                ],
                borderWidth: 1,
            },
            {
                label: "Critic",
                data: [6, 8, 9, 4, 6, 7],
                backgroundColor: [
                    "rgba(75, 192, 192, 0.2)"
                ],
                borderColor: [
                    "rgba(75, 192, 192, 1)"
                ],
                borderWidth: 1,
            },
      ],
    },
    options: options
  });
  