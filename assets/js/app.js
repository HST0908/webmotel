function user_login(){
    document.getElementById("modal").style.display = "flex";
}

function back_login() {
    document.getElementById("modal").style.display = "none";
}

function dangbai() {
    window.location.href='admin/dangphong.php';
}
// counter = 1;
// setInterval(function(){
//     document.getElementById('radio' + counter).checked = true;
//     counter++
//     if(counter > 3){
//         counter = 1;
//     }
// }, 5000);

function Onback_press() {
    history.back();
}


// function admin add hover

let  list = document.querySelectorAll('.navigation li');
function activeLink(){
    list.forEach((item) =>
    item.classList.remove('hovered'));
    this.classList.add('hovered');
}
list.forEach((item) =>
item.addEventListener('mouseover',activeLink));

// MenuToggle

let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');

toggle.onclick = function() {
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}


// select type account

function myFunction() {
  var radios = document.getElementsByName("myRadio");
  for (var i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      // Nếu radio button được chọn
      // console.log(radios[i].value);
      if(radios[i].value == 1){
        // console.log("radio1");
        document.getElementById("register_boss1").style.display = "none";
        document.getElementById("register_boss2").style.display = "none";
        document.getElementById("register_boss3").style.display = "none";
        document.getElementById("register_boss4").style.display = "none";
        document.getElementById("register_boss5").style.display = "none";

        document.getElementById("register_boss1").setAttribute("required", false);
        document.getElementById("register_boss2").setAttribute("required", false);
        document.getElementById("register_boss3").setAttribute("required", false);
        document.getElementById("register_boss4").setAttribute("required", false);
        document.getElementById("register_boss5").setAttribute("required", false);
      }else{
        // console.log("radio2");
        document.getElementById("register_boss1").setAttribute("required", true);
        document.getElementById("register_boss2").setAttribute("required", true);
        document.getElementById("register_boss3").setAttribute("required", true);
        document.getElementById("register_boss4").setAttribute("required", true);
        document.getElementById("register_boss5").setAttribute("required", true);

        document.getElementById("register_boss1").style.display = "block";
        document.getElementById("register_boss2").style.display = "block";
        document.getElementById("register_boss3").style.display = "block";
        document.getElementById("register_boss4").style.display = "block";
        document.getElementById("register_boss5").style.display = "block";
      }
    }
  }
}


// ------------- Chart-------------------

var options = {
    series: [
    {
      name: 'Actual',
      data: [
        {
          x: 'Phạm Xuân Long',
          y: 1292,
          goals: [
            {
              name: 'Expected',
              value: 1400,
              strokeHeight: 5,
              strokeColor: '#775DD0'
            }
          ]
        },
        {
          x: 'Lê Văn Phong',
          y: 4432,
          goals: [
            {
              name: 'Expected',
              value: 5400,
              strokeHeight: 5,
              strokeColor: '#775DD0'
            }
          ]
        },
        {
          x: 'Võ Văn Quyết',
          y: 5423,
          goals: [
            {
              name: 'Expected',
              value: 5200,
              strokeHeight: 5,
              strokeColor: '#775DD0'
            }
          ]
        },
        {
          x: 'Nguyễn Nhật Nam',
          y: 8133,
          goals: [
            {
              name: 'Expected',
              value: 6600,
              strokeHeight: 13,
              strokeWidth: 0,
              strokeLineCap: 'round',
              strokeColor: '#775DD0'
            }
          ]
        },
        {
          x: 'Đỗ Hùng Dũng',
          y: 7132,
          goals: [
            {
              name: 'Expected',
              value: 7500,
              strokeHeight: 5,
              strokeColor: '#775DD0'
            }
          ]
        }
      ]
    }
  ],
    chart: {
    height: 350,
    type: 'bar'
  },
  plotOptions: {
    bar: {
      columnWidth: '60%'
    }
  },
  colors: ['#00E396'],
  dataLabels: {
    enabled: false
  },
  legend: {
    show: true,
    showForSingleSeries: true,
    customLegendItems: ['Actual', 'Expected'],
    markers: {
      fillColors: ['#00E396', '#775DD0']
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#bar-chart"), options);
  chart.render();

// =========================chart 2==================
  var options = {
    series: [{
    data: [34, 44, 54, 21, 12, 43, 33, 23, 66, 66, 58]
  }],
    chart: {
    type: 'line',
    height: 350
  },
  stroke: {
    curve: 'smooth',
  },
  dataLabels: {
    enabled: false
  },
  title: {
    text: 'Stepline Chart',
    align: 'left'
  },
  markers: {
    hover: {
      sizeOffset: 4
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#chart-tangtruong"), options);
  chart.render();