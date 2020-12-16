// 메인 페이지 영화 목록 2, 상세 페이지 Score
// 육각형 그래프


$(document).ready(function(){
  showGraph();
});

function showGraph(){
  $.ajax({
    url: "score.php",
    type: "GET",
    success: function(data){
      console.log(data);

      var userData = [];

      for(var i in data){
        userData.push(data[i].avg1);
        userData.push(data[i].avg2);
        userData.push(data[i].avg3);
        userData.push(data[i].avg4);
        userData.push(data[i].avg5);
        userData.push(data[i].avg6);
      }
      
      var chartData = {
        labels: ["S", "M", "V", "A", "G", "E"],
        datasets: [
              {
                  label: "User",
                  data: userData,
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
                  data: [6, 7, 1, 3, 9, 9],
                  backgroundColor: [
                      "rgba(75, 192, 192, 0.2)"
                  ],
                  borderColor: [
                      "rgba(75, 192, 192, 1)"
                  ],
                  borderWidth: 1,
              },
        ],
      };

      var options = {
        scale: {
            angleLines: {
            display: false,
            },
            ticks: {
            suggestedMin: 0,
            suggestedMax: 10,
            },
        }
      }
      
      var ctx = document.getElementById("myChart1");

      var myChart = new Chart(ctx, {
        type:"radar",
        data: chartdata,
        options: options
      });

    },
    error: function(data){}
  });
};

// function showGraph(){
//   $.post("review.php", function(data){
//     console.log(data);

//     var userData = [];
//     var criticData = [];
//   })
// }

// $.ajax({
//   url: 'review.php',
//   type: 'GET',
//   success:function(data){
//     console.log(data);

//     var userData = [];
//     // var criticData = [];

//     // for(var count in data){
//     //   userData.push(data[count].gender);
//     //   sum.push(data[count].total);
//     // }

//     userData = data;

//     var chartData = {
//       labels: ["S", "M", "V", "A", "G", "E"],
//       datasets: [
//             {
//                 label: "User",
//                 data: userData,
//                 backgroundColor: [
//                     "rgba(255, 99, 132, 0.2)"
//                 ],
//                 borderColor: [
//                     "rgba(255, 99, 132, 1)"
//                 ],
//                 borderWidth: 1,
//             },
//             {
//                 label: "Critic",
//                 data: criticData,
//                 backgroundColor: [
//                     "rgba(75, 192, 192, 0.2)"
//                 ],
//                 borderColor: [
//                     "rgba(75, 192, 192, 1)"
//                 ],
//                 borderWidth: 1,
//             },
//       ],
//     };

//     var ctx = $('#myChart');

//     var myChart = new Chart(ctx, {
//       type:"radar",
//       data: chartdata,
//       options: options
//     });
//   },
//   error:function(data){
//     console.log(data);
//   }
// });


// var ctx1 = document.getElementsByClassName("myChart1");

// var myChart1 = new Chart(ctx1, {
//   type: "radar",
//   data: {
//     labels: ["S", "M", "V", "A", "G", "E"],
//     datasets: [
//           {
//               label: "User",
//               data: [1, 6, 10, 9, 7, 5],
//               backgroundColor: [
//                   "rgba(255, 99, 132, 0.2)"
//               ],
//               borderColor: [
//                   "rgba(255, 99, 132, 1)"
//               ],
//               borderWidth: 1,
//           },
//           {
//               label: "Critic",
//               data: [6, 7, 1, 3, 9, 9],
//               backgroundColor: [
//                   "rgba(75, 192, 192, 0.2)"
//               ],
//               borderColor: [
//                   "rgba(75, 192, 192, 1)"
//               ],
//               borderWidth: 1,
//           },
//     ],
//   },
//   options: {
//     scale: {
//       angleLines: {
//         display: false,
//       },
//       ticks: {
//         suggestedMin: 0,
//         suggestedMax: 10,
//       },
//     },
//   },
// });

// var myChart2 = new Chart(ctx2, {
//   type: "radar",
//   data: {
//     labels: ["S", "M", "V", "A", "G", "E"],
//     datasets: [
//           {
//               label: "User",
//               data: [8, 6, 1, 2, 1, 5],
//               backgroundColor: [
//                   "rgba(255, 99, 132, 0.2)"
//               ],
//               borderColor: [
//                   "rgba(255, 99, 132, 1)"
//               ],
//               borderWidth: 1,
//           },
//           {
//               label: "Critic",
//               data: [6, 4, 8, 3, 1, 4],
//               backgroundColor: [
//                   "rgba(75, 192, 192, 0.2)"
//               ],
//               borderColor: [
//                   "rgba(75, 192, 192, 1)"
//               ],
//               borderWidth: 1,
//           },
//     ],
//   },
//   options: {
//     scale: {
//       angleLines: {
//         display: false,
//       },
//       ticks: {
//         suggestedMin: 0,
//         suggestedMax: 10,
//       },
//     },
//   },
// });

// var myChart3 = new Chart(ctx3, {
//   type: "radar",
//   data: {},
//   options: {},
// });
