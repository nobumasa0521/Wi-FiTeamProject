<template>
  <v-container >
    <v-sheet rounded="lg" class="spacing-playground pa-6">
    <v-row>
      <v-col cols="auto" xs="12">
      <client-select-component v-on:select-device="onSelectDevice"></client-select-component>
      </v-col>
      <v-col cols="auto">
        <v-sheet rounded="lg" class="spacing-playground pa-6" elevation="1">
          <!-- <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" width="520" height="520" class="preview-svg" id="noneroom"> -->
            <!-- <rect x="0" y="150" width="200" height="200" stroke="#808080" v-bind:class="stateenv2" id="Env2ndroom"/>
            <rect x="200" y="150" width="300" height="200" stroke="#808080" v-bind:class="statefa" id="Faroom" /> -->
            <!-- <rect :style="{
              transform: `translate(${room_rect_stat.env2ndroom.x}px, ${room_rect_stat.env2ndroom.y}px)`}"  width="200" height="200" stroke="#808080" v-bind:class="stateenv2" id="Env2ndroom"/>
            <rect :style="{
              transform: `translate(${room_rect_stat.faroom.x}px, ${room_rect_stat.faroom.y}px)`}"  width="300" height="200" stroke="#808080" v-bind:class="statefa" id="Faroom" />
            <rect  rx="20" ry="20" :style="{
              transform: `translate(${target_rect_stat.x}px, ${target_rect_stat.y}px)`}" width="50" height="50" stroke="#63fc89" fill="#63fc89" id="target"
              class="target-svg"/>
          </svg> -->
          <div>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="662px" height="370px" viewBox="-0.5 -0.5 662 370" id="master">
            <g>
              <rect x="541.5" y="109.5" width="88" height="90" fill="#ffffff" stroke="#000000" transform="rotate(-90,585.5,154.5)" pointer-events="all"/>
              <rect x="466" y="124" width="89" height="60" fill="#ffffff" stroke="#000000" transform="rotate(-90,510.5,154)" pointer-events="all"/>
              <rect x="484" y="-63" width="113" height="239" fill="#ffffff" stroke="#000000" transform="rotate(-90,540.5,56.5)" pointer-events="all"/>
              <rect v-bind:class="stateenv2" id="Env2ndroom" x="153" y="-62" width="85" height="210" fill="#ffffff" stroke="#000000" transform="rotate(-90,195.5,43)" pointer-events="all"/>
              <rect v-bind:class="statefa" id="Faroom" x="3" y="-2" width="85" height="90" fill="#ffffff" stroke="#000000" transform="rotate(-90,45.5,43)" pointer-events="all"/>
              <rect x="198" y="96" width="85" height="120" fill="#ffffff" stroke="#000000" transform="rotate(-90,240.5,156)" pointer-events="all"/>
              <rect x="78" y="96" width="85" height="120" fill="#ffffff" stroke="#000000" transform="rotate(-90,120.5,156)" pointer-events="all"/>
              <rect x="297" y="203" width="128" height="120" fill="#ffffff" stroke="#000000" transform="rotate(-90,361,263)" pointer-events="all"/>
              <rect x="-12" y="126" width="85" height="60" fill="#ffffff" stroke="#000000" transform="rotate(-90,30.5,156)" pointer-events="all"/>
              <rect x="339" y="287" width="43" height="120" fill="#ffffff" stroke="#000000" transform="rotate(-90,360.5,347)" pointer-events="all"/>
              <path d="M 0.5 113.5 L 0.5 85.5" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 480.5 198.5 L 421 199" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 300.5 0.5 L 421 0" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 301.13 54.77 L 420.5 55" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 300.5 113.5 L 347 114 L 347 198" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 480.02 169.86 L 421 145 L 421 113" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
              <path d="M 660 113 L 660 198 L 630.5 198.5" fill="none" stroke="#000000" stroke-miterlimit="10" pointer-events="stroke"/>
            </g>
            <rect  rx="20" ry="20" :style="{
              transform: `translate(${target_rect_stat.x}px, ${target_rect_stat.y}px)`}" width="50" height="50" stroke="#afeeee" fill="#afeeee" fill-opacity="1" id="target"
              class="target-svg">
              <v-icon>
                mdi-access-point
              </v-icon>  
            </rect>
          </svg>
          </div>
        </v-sheet>
      </v-col>
    </v-row>
    </v-sheet>
  </v-container>
</template>

<script>
let count = 0;
//部屋情報一覧用変数
let statdata = null;
// 部屋密度情報用変数
let roomstatnow = {"env2ndroom":"empty","faroom":"empty"};
// クライアント位置情報用変数
let clientplace = null;
let XYdata = 0;
let env2ndroom_stat = "empty";
let faroom_stat = "empty";
let tmpjson = null;

let tmpxpt = 0; //ターゲットsvgのアニメーションの開始値
let tmpypt = 0; //ターゲットsvgのアニメーションの開始値
let place_elem = 0; //ターゲットがいる場所のsvgエレメント
let changeColorTimer = null;

export default {
  name: 'TargetComponent',
    data: function () {
    return {

    //特定対象のデバイス一覧
    //後々管理画面で操作できるようにしないといけない。
    DeviceList: [
    "COMPB13",
    "COMPB16",
    "COMPB17",
    "COMPB20"
    ],
    //htmlからv-bind:classで読み込むクラス名
    //changeColorで書き換える
    stateenv2: "empty",
    statefa: "empty",
    //特定対象機器が入るところ
    //htmlのselectタグでいれる
    TargetDevice: "未選択",
    room_rect_stat  : {
        "faroom" : {
          "x" : 170,
          "y" : 20
        },
        "env2ndroom" :{
          "x" : 20,
          "y" : 20
        }
    },
    target_rect_stat : {
        "x" : 0,
        "y" : 500,
      }
    }
  },
  methods:{
    changeColor: function(){
      console.log("changecolor");
      count++;
  
      axios.get('http://192.168.10.163/sample/statget')
        .then(function (response) {
          // handle success
          // レスポンスのデータをstatdataに退避
          statdata =  response.data;
          // statdataの中の部屋密度情報roomstatオブジェクトを取得
          roomstatnow = statdata.roomstat;
          // statdataの中のクライアント位置情報を取得
          clientplace = statdata.clientstat;
      })
      .catch(function (error) {
          // handle error
        console.log(error);
      })
      .finally(function () {
          // always executed
      });

      //部屋密度情報更新部
      // 部屋密度情報用変数からそれぞれの部屋情報を取得して
      // vueオブジェクトdataに格納
      this.env2ndroom_stat = roomstatnow.env2ndroom;
      this.faroom_stat = roomstatnow.faroom;
      this.stateenv2 = String(this.env2ndroom_stat);
      this.statefa = String(this.faroom_stat);

      //クライアント位置情報更新部
      // クライアント位置情報構造体変数からターゲットに一致する情報を取得して
      // それをキーにroom_rect_statから対応するsvgの座標を取得して
      // target_rect_statに代入
      if(this.TargetDevice === "未選択"){
        console.log(this.TargetDevice);
        this.target_rect_stat.x = 0;
        this.target_rect_stat.y = 500;
      }else{
        for(let key in clientplace){
          if(key === this.TargetDevice){
            this.target_rect_stat.x = this.room_rect_stat[clientplace[key]].x;
            this.target_rect_stat.y = this.room_rect_stat[clientplace[key]].y;
          }
        }
      }
      
      console.log(count);
    },
    onSelectDevice:function(e){
      this.TargetDevice = e;
    }
  },
  mounted: function(){
    console.log("mounted");
    let that = this;
    this.place_elem = document.getElementById("noneroom");
    this.changeColorTimer = setInterval(
      this.changeColor
    , 1000);
  },
  beforeUpdate: function(){
    console.log("change");
    this.changeColor();
  },
  beforeDestroy: function() {
    clearInterval(this.changeColorTimer);
  }
}
</script>

<style scoped>
  #target{
    position: absolute;
    left: 0;
    top: 0;
    margin: 0px auto auto 0px;
    fill:#83aefd;
    stroke: #83aefd;
  }
  .empty{
    fill: #f3fcff;
  }
  .some{
    fill: rgb(255, 232, 155)
  }
  .many{
    fill: rgb(255, 128, 78)
  }
  .full{
    fill: rgb(252, 48, 48)
  }

  svg{
    margin-left: auto;
    margin-right: auto; 
    text-align:center;
    margin: 30;
    padding: 30;
    vertical-align: top;
    width : 640px;
    height: 480px;
    background-color : var(--color-secondary);
  }
  
  .target-svg {
  transition: transform 1s ease;
  will-change: transform;
  }

  #master{
    width: 100%;
    height: auto;
  }
</style>