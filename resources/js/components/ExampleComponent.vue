<template>
<div class="p-pro__container">
  <h2 class="p-pro__title">問題{{ currentProblemNum }}</h2>

    <div class="p-pro__box">

      <div class="p-pro__img-box" v-if="currentProblemNum === 1">
        <img :src="'http://localhost:8000/'+drill1.img" class="p-pro__img">
      </div>
      <div class="p-pro__img-box" v-else-if="currentProblemNum === 2">
        <img :src="'http://localhost:8000/'+drill2.img" class="p-pro__img">
      </div>
      <div class="p-pro__img-box" v-else-if="currentProblemNum === 3">
        <img :src="'http://localhost:8000/'+drill3.img" class="p-pro__img">
      </div>
      <div class="p-pro__img-box" v-else-if="currentProblemNum === 4">
        <img :src="'http://localhost:8000/'+drill4.img" class="p-pro__img">
      </div>
      <div class="p-pro__img-box" v-else-if="currentProblemNum === 5">
        <img :src="'http://localhost:8000/'+drill5.img" class="p-pro__img">
      </div>
      <div class="p-pro__img-box" v-else-if="currentProblemNum === 6">
        <img :src="'http://localhost:8000/'+drill6.img" class="p-pro__img">
      </div>
      <div class="p-pro__img-box" v-else-if="currentProblemNum === 7">
        <img :src="'http://localhost:8000/'+drill7.img" class="p-pro__img">
      </div>
      <div class="p-pro__img-box" v-else-if="currentProblemNum === 8">
        <img :src="'http://localhost:8000/'+drill8.img" class="p-pro__img">
      </div>
      <div class="p-pro__img-box" v-else-if="currentProblemNum === 9">
        <img :src="'http://localhost:8000/'+drill9.img" class="p-pro__img">
      </div>
      <div class="p-pro__img-box" v-else-if="currentProblemNum === 10">
        <img :src="'http://localhost:8000/'+drill10.img" class="p-pro__img">
      </div>

        <div class="p-pro__cont-box">
          <div class="p-pro__name">回答を選んで下さい</div>
          <div class="p-pro__button-box">
              <input type="radio" name="country_id" value="1" id="1" v-model="answerId">
              <label for="1" class="p-pro__label c-radio-box">日本</label>
              <input type="radio" name="country_id" value="2" id="2" v-model="answerId">
              <label for="2" class="p-pro__label c-radio-box">インド</label>
              <input type="radio" name="country_id" value="3" id="3" v-model="answerId">
              <label for="3" class="p-pro__label c-radio-box">インドネシア</label>
              <input type="radio" name="country_id" value="4" id="4" v-model="answerId">
              <label for="4" class="p-pro__label c-radio-box">韓国</label>
              <input type="radio" name="country_id" value="5" id="5" v-model="answerId">
              <label for="5" class="p-pro__label c-radio-box">カンボジア</label>
              <input type="radio" name="country_id" value="6" id="6" v-model="answerId">
              <label for="6" class="p-pro__label c-radio-box">北朝鮮</label>
              <input type="radio" name="country_id" value="7" id="7" v-model="answerId">
              <label for="7" class="p-pro__label c-radio-box">シンガポール</label>
              <input type="radio" name="country_id" value="8" id="8" v-model="answerId">
              <label for="8" class="p-pro__label c-radio-box">スリランカ</label>
              <input type="radio" name="country_id" value="9" id="9" v-model="answerId">
              <label for="9" class="p-pro__label c-radio-box">タイ</label>
              <input type="radio" name="country_id" value="10" id="10" v-model="answerId">
              <label for="10" class="p-pro__label c-radio-box">台湾</label>
              <input type="radio" name="country_id" value="11" id="11" v-model="answerId">
              <label for="11" class="p-pro__label c-radio-box">中国</label>
              <input type="radio" name="country_id" value="12" id="12" v-model="answerId">
              <label for="12" class="p-pro__label c-radio-box">ネパール</label>
              <input type="radio" name="country_id" value="13" id="13" v-model="answerId">
              <label for="13" class="p-pro__label c-radio-box">バングラデシュ</label>
              <input type="radio" name="country_id" value="14" id="14" v-model="answerId">
              <label for="14" class="p-pro__label c-radio-box">パキスタン</label>
              <input type="radio" name="country_id" value="15" id="15" v-model="answerId">
              <label for="15" class="p-pro__label c-radio-box">東ティモール</label>
              <input type="radio" name="country_id" value="16" id="16" v-model="answerId">
              <label for="16" class="p-pro__label c-radio-box">フィリピン</label>
              <input type="radio" name="country_id" value="17" id="17" v-model="answerId">
              <label for="17" class="p-pro__label c-radio-box">ブルネイ</label>
              <input type="radio" name="country_id" value="18" id="18" v-model="answerId">
              <label for="18" class="p-pro__label c-radio-box">ブータン</label>
              <input type="radio" name="country_id" value="19" id="19" v-model="answerId">
              <label for="19" class="p-pro__label c-radio-box">ベトナム</label>
              <input type="radio" name="country_id" value="20" id="20" v-model="answerId">
              <label for="20" class="p-pro__label c-radio-box">香港</label>
              <input type="radio" name="country_id" value="21" id="21" v-model="answerId">
              <label for="21" class="p-pro__label c-radio-box">マカオ</label>
              <input type="radio" name="country_id" value="22" id="22" v-model="answerId">
              <label for="22" class="p-pro__label c-radio-box">マレーシア</label>
              <input type="radio" name="country_id" value="23" id="23" v-model="answerId">
              <label for="23" class="p-pro__label c-radio-box">ミャンマー</label>
              <input type="radio" name="country_id" value="24" id="24" v-model="answerId">
              <label for="24" class="p-pro__label c-radio-box">モルディブ</label>
              <input type="radio" name="country_id" value="25" id="25" v-model="answerId">
              <label for="25" class="p-pro__label c-radio-box">モンゴル</label>
              <input type="radio" name="country_id" value="26" id="26" v-model="answerId">
              <label for="26" class="p-pro__label c-radio-box">ラオス</label>
              <input type="radio" name="country_id" value="62" id="62" v-model="answerId">
              <label for="62" class="p-pro__label c-radio-box">アフガニスタン</label>
              <input type="radio" name="country_id" value="63" id="63" v-model="answerId">
              <label for="63" class="p-pro__label c-radio-box">アラブ首長国連邦</label>
              <input type="radio" name="country_id" value="64" id="64" v-model="answerId">
              <label for="64" class="p-pro__label c-radio-box">イエメン</label>
              <input type="radio" name="country_id" value="65" id="65" v-model="answerId">
              <label for="65" class="p-pro__label c-radio-box">イスラエル</label>
              <input type="radio" name="country_id" value="66" id="66" v-model="answerId">
              <label for="66" class="p-pro__label c-radio-box">イラク</label>
              <input type="radio" name="country_id" value="67" id="67" v-model="answerId">
              <label for="67" class="p-pro__label c-radio-box">イラン</label>
              <input type="radio" name="country_id" value="68" id="68" v-model="answerId">
              <label for="68" class="p-pro__label c-radio-box">オマーン</label>
              <input type="radio" name="country_id" value="69" id="69" v-model="answerId">
              <label for="69" class="p-pro__label c-radio-box">カタール</label>
              <input type="radio" name="country_id" value="70" id="70" v-model="answerId">
              <label for="70" class="p-pro__label c-radio-box">クウェート</label>
              <input type="radio" name="country_id" value="71" id="71" v-model="answerId">
              <label for="71" class="p-pro__label c-radio-box">サウジアラビア</label>
              <input type="radio" name="country_id" value="72" id="72" v-model="answerId">
              <label for="72" class="p-pro__label c-radio-box">シリア</label>
              <input type="radio" name="country_id" value="73" id="73" v-model="answerId">
              <label for="73" class="p-pro__label c-radio-box">トルコ</label>
              <input type="radio" name="country_id" value="74" id="74" v-model="answerId">
              <label for="74" class="p-pro__label c-radio-box">バーレーン</label>
              <input type="radio" name="country_id" value="75" id="75" v-model="answerId">
              <label for="75" class="p-pro__label c-radio-box">パレスチナ</label>
              <input type="radio" name="country_id" value="76" id="76" v-model="answerId">
              <label for="76" class="p-pro__label c-radio-box">ヨルダン</label>
              <input type="radio" name="country_id" value="77" id="77" v-model="answerId">
              <label for="77" class="p-pro__label c-radio-box">レバノン</label>
          </div>
        </div>
      <div  @click="answerDrill" class="p-pro__submit">回答</div>
    <transition name="correct">
      <template v-if="correctBox">
        <div class="p-pro__answer-box">
          <div class="p-pro__answer-box-text">
            <p class="p-pro__answer-correct">◯正解！</p><p class="p-pro__answer-area">{{ areaName }}</p>
          </div>
          <template v-if="!isEnd">
            <div class="p-pro__next-box">
             <div @click="correct(); scrollTop(); radioLift()" class="p-pro__next-btn c-next-btn">次の問題へ</div>
            </div>
          </template>
          <template v-else-if="isEnd">
            <div class="p-pro__next-box">
             <button type="submit" :value="drillScore" name="resultScore" class="p-pro__next-btn c-next-btn">結果を表示</button>
            </div>
          </template>
        </div>
      </template>
    </transition>
    <transition name="correct">
      <template v-if="inCorrectBox">
        <div class="p-pro__answer-box">
          <div class="p-pro__answer-box-text">
            <p class="p-pro__answer-correct-non">×不正解です</p>
          </div>
          <template v-if="!isEnd">
            <div class="p-pro__next-box">
              <div @click="inCorrect(); scrollTop(); radioLift()" class="p-pro__next-btn c-next-btn">次の問題へ</div>
            </div>
          </template>
          <template v-else-if="isEnd">
            <div class="p-pro__next-box">
             <button type="submit" :value="drillScore" name="resultScore" class="p-pro__next-btn c-next-btn">結果を表示</button>
            </div>
          </template>
        </div>
      </template>
    </transition>
    </div>
</div>
</template>

<script>
  export default{
   props:['drill1','drill2','drill3','drill4','drill5','drill6','drill7','drill8','drill9','drill10'],
   data : function(){
      return{
         correctNum : 0, //正解数
         inCorrectNum : 0, //不正解数
         currentProblemNum : 1, //現在の問題番号
         answerId : '', //ラジオボタンの回答ID
         areaName : '', //正解した場合の国名
         correctBox : false, //正解の文字を出す
         inCorrectBox : false, //不正解の文字を出す
         isEnd : false
      }
    },
    computed : {
      //最終結果
      drillScore : function(){
        return this.correctNum
      }
    },
    methods : {
      answerDrill : function(){
       switch(this.currentProblemNum){
         case 1:
         if(this.drill1['country_id'] == this.answerId){
           this.correctBox = true
           this.areaName = this.drill1['area_name']
         }else{
         this.inCorrectBox = true
         }
         break;
         case 2:
         if(this.drill2['country_id'] == this.answerId){
           this.correctBox = true
           this.areaName = this.drill2['area_name']
         }else{
         this.inCorrectBox = true
         }
         break;
         case 3:
         if(this.drill3['country_id'] == this.answerId){
           this.correctBox = true
           this.areaName = this.drill3['area_name']
         }else{
         this.inCorrectBox = true
         }
         break;
         case 4:
         if(this.drill4['country_id'] == this.answerId){
           this.correctBox = true
           this.areaName = this.drill4['area_name']
         }else{
         this.inCorrectBox = true
         }
         break;
         case 5:
         if(this.drill5['country_id'] == this.answerId){
           this.correctBox = true
           this.areaName = this.drill5['area_name']
         }else{
         this.inCorrectBox = true
         }
         break;
         case 6:
         if(this.drill6['country_id'] == this.answerId){
           this.correctBox = true
           this.areaName = this.drill6['area_name']
         }else{
         this.inCorrectBox = true
         }
         break;
         case 7:
         if(this.drill7['country_id'] == this.answerId){
           this.correctBox = true
           this.areaName = this.drill7['area_name']
         }else{
         this.inCorrectBox = true
         }
         break;
         case 8:
         if(this.drill8['country_id'] == this.answerId){
           this.correctBox = true
           this.areaName = this.drill8['area_name']
         }else{
         this.inCorrectBox = true
         }
         break;
         case 9:
         if(this.drill9['country_id'] == this.answerId){
           this.correctBox = true
           this.areaName = this.drill9['area_name']
         }else{
         this.inCorrectBox = true
         }
         break;
         case 10:
         if(this.drill10['country_id'] == this.answerId){
           ++this.correctNum
           this.correctBox = true
           this.areaName = this.drill10['area_name']
         }else{
         ++this.inCorrectNum
         this.inCorrectBox = true
         }
         this.isEnd = true
         break;
        }
      },
      correct : function(){
        ++this.correctNum
        ++this.currentProblemNum
        this.answerId = ''
        this.correctBox = false
      },
      inCorrect : function(){
        ++this.inCorrectNum
        ++this.currentProblemNum
        this.answerId = ''
        this.inCorrectBox = false
      },
      //トップへスクロール
      scrollTop : function(){
        window.scrollTo({
          top:0,
          behavior: 'smooth'
        })
      },
      //ラジオボタン解除
      radioLift : function(){
        this.answerId = ''
      },
    },
  }
</script>
