
// 메인 페이지 영화 목록 2 Score 육각형 그래프

var ctx = document.getElementById("myChart");
var ctx1 = document.getElementById("myChart1");
var ctx2 = document.getElementById("myChart2");
var ctx3 = document.getElementById("myChart3");
/*
- Chart를 생성하면서, 
- ctx를 첫번째 argument로 넘겨주고, 
- 두번째 argument로 그림을 그릴때 필요한 요소들을 모두 넘겨줍니다. 
*/

var myChart1 = new Chart(ctx1, {
  type: "radar",
  data: {
    labels: ["S", "M", "V", "A", "G", "E"],
    datasets: [
          {
              label: "User",
              data: [1, 6, 10, 9, 7, 5],
              backgroundColor: [
                  "rgba(112,112,112,0.2)"
              ],
              borderColor: [
                  "rgba(112,112,112,1)"
              ],
              borderWidth: 1,
          },
          {
              label: "Critic",
              data: [6, 7, 1, 3, 9, 9],
              backgroundColor: [
                  "rgba(108,99,255,0.2)"
              ],
              borderColor: [
                  "rgba(108,99,255,1)"
              ],
              borderWidth: 1,
          },
    ],
  },
  options: {
    scale: {
      angleLines: {
        display: false,
      },
      ticks: {
        suggestedMin: 0,
        suggestedMax: 10,
      },
    },
  },
});
