<template>
    <div id="allDivision">
    
      <!--/////////////////////////  Before clicking the vending machine icon /////////////////////////-->
      <div id="background1" v-if="itemList==0">
        <br /><br /><br /><br /><br /><br /><br />
         <img src="images/logo.png"  width="270px">
         <h5 style="text-align:center;font-family:'Dosis';" >Click on the vending machine icon in Google Maps</h5>
         <br /><br /><br /><br /><br /><br />
      </div>  
      
      <!--/////////////////////////  After clicking the vending machine icon /////////////////////////-->
    <div id="background2" v-if="itemList!=0" >
      <br />
      <div v-if="trueOrFalse==false" class="hover15 column" id ="background2_title" v-for="(item, index) in itemList_v" :key="index">    <!-- 클릭한 현재 자판기 이름 -->
      <strong id="vendingMachineNameFont">{{item.name}}    </strong>   
      <!--  <audio id="audio" src="/images/realtime/ping.mp3"></audio> -->
      </div> 
      <div v-if="trueOrFalse==true" class="hover15 column" id ="background2_title2" v-for="(item, index) in itemList_v" :key="index">    <!-- 클릭한 현재 자판기 이름 -->
      <strong id="vendingMachineNameFont">{{item.name}}    </strong>    
      </div> 
      <!-- ~~~~~~~~~~~~ Before pressing the More button  ~~~~~~~~~~~ -->
        <!-- *********************** Beverage stock div ********************** -->
      <div >  
      <div v-if="trueOrFalse==false" id="bottom_left">
       <table id="drinkStockTable">
         <tr >
           <td id="tdBackground" v-for="(item, index) in itemList" :key="index" v-if="(index==0)" >
             <br />
             <tr style="text-align:center;vertical-align:middle " ><img v-bind:src="item.drink_img_path" style=" height:55px; width:55px; padding-left:7%; "></tr>
             <tr>
               <p v-if="(item.stock<4)" id="numberTop" class="blink" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse1==0))" id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse1>=1))" class="blink3"  id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="(item.stock==10)" id="numberBottom" class="blink2" >{{item.stock}}/10</p>
             </tr>
           </td>　
           <td id="tdBackground" v-for="(item, index) in itemList" :key="index" v-if="(index==1)">
             <br />
             <tr><img v-bind:src="item.drink_img_path" style=" height:55px; width:55px; padding-left:17%; "></tr>
             <tr>
               <p v-if="(item.stock<4)" id="numberTop" class="blink" >{{item.stock}}/10</p>
                <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse2==0))" id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse2>=1))" class="blink3"  id="numberCenter" >{{item.stock}}/10</p>
                <p v-if="(item.stock==10)" id="numberBottom" class="blink2" >{{item.stock}}/10</p> 
             </tr>
           </td>
           <td id="tdBackground" v-for="(item, index) in itemList" :key="index" v-if="(index==2)">
             <br />
             <tr><img v-bind:src="item.drink_img_path" style=" height:55px; width:55px; padding-left:17%;  "></tr>
             <tr>
               <p v-if="(item.stock<4)" id="numberTop" class="blink" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse3==0))" id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse3>=1))" class="blink3"  id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="(item.stock==10)" id="numberBottom" class="blink2" >{{item.stock}}/10</p> 
              </tr>
           </td>
           <td id="tdBackground" v-for="(item, index) in itemList" :key="index" v-if="(index==3)">
             <br />
             <tr><img v-bind:src="item.drink_img_path" style=" height:55px; width:55px; padding-left:17%;  "></tr>
             <tr>
               <p v-if="(item.stock<4)" id="numberTop" class="blink" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse4==0))" id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse4>=1))" class="blink3"  id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="(item.stock==10)" id="numberBottom" class="blink2" >{{item.stock}}/10</p>
             </tr>
           </td>
         </tr> 
         <tr >
           <td id="tdBackground" v-for="(item, index) in itemList" :key="index" v-if="(index==4)" >
             <br />
             <tr style="text-align:center;vertical-align:middle " ><img v-bind:src="item.drink_img_path" style=" height:55px; width:55px; padding-left:17%;  "></tr>
             <tr>
               <p v-if="(item.stock<4)" id="numberTop" class="blink" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse5==0))" id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse5>=1))" class="blink3"  id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="(item.stock==10)" id="numberBottom" class="blink2" >{{item.stock}}/10</p>
             </tr>
           </td>
           <td id="tdBackground" v-for="(item, index) in itemList" :key="index" v-if="(index==5)">
             <br />
             <tr><img v-bind:src="item.drink_img_path" style=" height:55px; width:55px; padding-left:17%; "></tr>
             <tr>
               <p v-if="(item.stock<4)" id="numberTop" class="blink" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse6==0))" id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse6>=1))" class="blink3"  id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="(item.stock==10)" id="numberBottom" class="blink2" >{{item.stock}}/10</p> 
             </tr>
           </td>
           <td id="tdBackground" v-for="(item, index) in itemList" :key="index" v-if="(index==6)">
             <br />
             <tr><img v-bind:src="item.drink_img_path" style=" height:55px; width:55px; padding-left:17%;  "></tr>
             <tr>
               <p v-if="(item.stock<4)" id="numberTop" class="blink" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse7==0))" id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse7>=1))" class="blink3"  id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="(item.stock==10)" id="numberBottom" class="blink2" >{{item.stock}}/10</p> 
              </tr>
           </td>
           <td id="tdBackground" v-for="(item, index) in itemList" :key="index" v-if="(index==7)">
             <br />
             <tr><img v-bind:src="item.drink_img_path" style=" height:55px; width:55px; padding-left:17%; "></tr>
             <tr>
               <p v-if="(item.stock<4)" id="numberTop" class="blink" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse8==0))" id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="((item.stock>=4)&&(item.stock<=9)&&(colorTrueOrFalse8>=1))" class="blink3"  id="numberCenter" >{{item.stock}}/10</p>
               <p v-if="(item.stock==10)" id="numberBottom" class="blink2" >{{item.stock}}/10</p>
             </tr>
           </td>
         </tr>
       </table>
      
      <br />
      </div>
       <!-- *********************** coin Stock div *********************** -->
      <div v-if="trueOrFalse==false" id="bottom_center">
       <div v-for="(item, index) in itemList_c" :key="index">
        <table>
          <tr id="trBgColor"><td  id="coin_stock_table1" style="padding-left:10px;padding-right:10px;padding-top:10px;padding-bottom:5px;">1,000円</td><td id="coin_stock_table2" style="padding-left:120px;padding-right:10px;">{{item.en100}}個</td></tr>
          <tr><td id="coin_stock_table1" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;">　500円</td><td id="coin_stock_table2" style="padding-left:120px;padding-right:10px;">{{item.en50}}個</td></tr>
          <tr id="trBgColor"><td id="coin_stock_table1" style="padding-left:10px;padding-right:10px;padding-top:5px;padding-bottom:5px;">　100円</td><td id="coin_stock_table2" style="padding-left:120px;padding-right:10px;" >{{item.en10}}個</td></tr>
        </table>
        <p id="CoinStockFont" style="text-align:left; font-size: 1.3em; ">　残高現況</p>
        <table id="trBgColor" style="margin-top:-15px">
         <tr id="CoinStockFont" ><td style="padding-left:180px;padding-right:10px;padding-top:5px;padding-bottom:5px;text-align:right;font-size: 0.7em; ">総合 </td></tr>
         <tr id="sumFont"><td style="padding-left:180px;padding-right:10px;padding-top:1px;padding-bottom:2px;">{{item.sum}}円</td></tr>
        </table>
       </div>
      </div>
      </div>
      <!-- *********************** More button  ************************ -->
      <div v-if="trueOrFalse==false" id="bottom_right" class="hover13 figure">
         <figure><img id="add_button" src="/images/realtime/more_button.png" @click="moreButton(true)" ></figure>
      </div>
      <!-- ~~~~~~~~~~~~ Press More Button~~~~~~~~~~~ -->
      <!-- *********************** More features div ********************** -->
      <div v-if="trueOrFalse==true" id="bottom_left2">
        <div id="add_table" v-for="(item, index) in itemList_v" :key="index">
          <br />
         <p id="top_info_settting" >Supporter Name</p>
         <p id="bottom_info_settting">{{item.supplementer}}</p>
         <br /><p id="top_info_settting">Area</p>
         <p id="bottom_info_settting">{{item.name}}</p>
         <br />
          <tr><img id="img_info_settting" src="/images/realtime/heart.png"></tr>
         
        </div>
        <div id="add_list_button">
        <div class="hover13 figure">
         <tr>
         <td> <!-- a sales list -->
           <figure><img id="add_button" style="width:100px;margin-top:2%;margin-right:24%;"  @click.stop="dialog = true" @click="sale_history()" src="/images/realtime/sell_button.png" ><p>　</p></figure>
         </td>
         <td> <!-- Job order creation -->
           <figure><img id="add_button" style="width:100px;margin-top:2%;margin-right:24%;" @click.stop="dialog2 = true"  src="/images/realtime/order_button.png" ></figure>
          </td>
         <td> <!-- View Analysis  -->
           <router-link :to="route_analysis" id="analyst" >
           <figure><img id="add_button" style="width:100px;margin-top:2%;margin-right:24%;" src="/images/realtime/analysis_button.png" ></figure>
           </router-link>
         </td>
         <td> <!-- Manage vending machines  -->
           <router-link :to="route_management" id="management">
           <figure><img id="add_button" style="width:100px;margin-top:2%;margin-right:24%;" src="/images/realtime/vending_button.png" ></figure>
           </router-link>
         </td>
         </tr>
        </div>  <!-- *************** Sales details modal ********************* -->
         <v-layout row justify-center>
            <v-dialog v-model="dialog" fullscreen transition="dialog-bottom-transition" :overlay="false">
             <v-card  color="light-blue darken-1">
                <v-toolbar >
                  <v-btn icon @click.native="dialog = false" >
                    <v-icon>close</v-icon>
                  </v-btn>
                  <v-toolbar-title>販売内訳</v-toolbar-title>
                  <v-spacer></v-spacer>
                  <v-toolbar-items>
                    <v-btn color="white" flat @click.native="dialog = false">Cancel</v-btn>
                  </v-toolbar-items>
                </v-toolbar>
                <v-card>
                   <div v-for="(item, index) in itemList_v" :key="index">
                    <v-card-title > ● 自販機名 : {{item.name}} </v-card-title>
                    <v-card-title >  ● 補充技師 : {{item.supplementer}}</v-card-title>
                   </div>
                </v-card>
                <v-card> 
                  <!-- data table pagenation -->
                 <v-data-table
                      :headers="headers"
                      :items="items"
                      :loading="true"
                      class="elevation-1"
                    >
                      <v-progress-linear slot="progress" color="blue" indeterminate></v-progress-linear>
                      <template slot="items" slot-scope="props">
                        <td>{{ props.item.sell_date }}</td>
                        <td class="text-xs-right">{{ props.item.name }}</td>
                        <td class="text-xs-right">{{ props.item.price }}</td>
                        <td class="text-xs-right">{{ props.item.dName }}</td>
                      </template>
                    </v-data-table>
                </v-card>
               <br />
             </v-card>
            </v-dialog>     
          </v-layout>
          <!-- *************** Task Instruction Modal *************** -->
          <v-layout>
              <v-dialog v-model="dialog2" max-width="520" max-height="300">
                  <v-card>
                  <v-card-title>
                  <h2>　　　　　　作業指示</h2>
                  </v-card-title>
                  <v-card-text>
                     <div v-for="(item, index) in itemList_v" :key="index">
                    <v-card-text>● 現自販機 : {{item.name}}  <v-spacer></v-spacer>
                  ● 補充技師 : {{item.supplementer}} </v-card-text>
                     </div>
                  <v-select
                      :items="select"
                      label="Please Select List"
                      item-value="text"
                      v-model ="selectedItem"
                    >
                  </v-select>
                    <div v-if="selectedItem=='その他'">
                    <v-text-field  label="作業指示を書いてください" v-model="selectedItem_etc"></v-text-field>
                </div> </v-card-text>
              
                <v-card-actions>
                  <v-spacer></v-spacer>
                  <v-btn color="green darken-1" flat="flat" @click.native="dialog2 = false">cancel</v-btn>
                  <v-btn color="green darken-1" flat="flat" @click.native="dialog2 = submit(selectedItem,selectedItem_etc)">submit</v-btn>
                </v-card-actions>
              </v-card>
            </v-dialog>
        </v-layout>
        </div>
      </div>
      <!-- *********************** back button  ********************** -->
      <div v-if="trueOrFalse==true" id="bottom_right2" class="hover13 figure">
           <figure><img id="add_button" src="/images/realtime/back.png" @click="moreButton(false)" ></figure>
      </div>
  </div>
</div> 
</template>

<script>
let temp; /* 현재 vendingmachine id */

let obj_v=[];

//import 'vuetify/dist/vuetify.min.css'
import { EventBus } from '../../app.js';
export default {
  data() {
    return {
    dialog: false,
    dialog2: false,
    fav: true,
    menu: false,
    message: false,
    hints: true,
    hover:true,
    itemList:[],
    itemList_c:[],
    itemList_v:[],
    items:[], /* Sales details */
      /* Sales History Table Header*/
    headers: [
      {
        text: '日付',
        align: 'left',
        value: 'name'
      },
      { text: '自販機名',align: 'center', value: 'sell_date' },
      { text: '価格',align: 'center', value: 'price' },
      { text: '商品名', align: 'center',value: 'dName' }
     ],
      vending_name:'', /* Modal - vending machine name */
      vending_manager:'', /*  Modal -  vending_manager  */
      vending_id : '',/* Modal - vending_id */
      select: [  /*  Modal -  select */
      { text: '緊急!飲料在庫不足' },
      { text: '緊急!残高不足' },
      { text: '祭り期間 ( 在庫や残高の確認要望 )' },
      { text: '機械異常や故障' },
      { text: 'その他' }
      ],
      selectedItem:'',
      selectedItem_etc:'',
      goToId:'',
      route_analysis:'', /*Corresponding Analysis Page */
      route_management:'' ,
      trueOrFalse:false/* Click More Button */,
      itemList_before :'' ,/* before the change item */
      vendingId_before :'' ,/* before the change vending id*/

      colorTrueOrFalse1: 0,/* Change in color when line number 1 is changed  */
      colorTrueOrFalse2: 0,/* Change in color when line number 2 is changed  */
      colorTrueOrFalse3: 0,/* Change in color when line number 3 is changed  */
      colorTrueOrFalse4: 0,/* Change in color when line number 4 is changed  */
      colorTrueOrFalse5: 0,/* Change in color when line number 5 is changed  */
      colorTrueOrFalse6: 0,/* Change in color when line number 6 is changed  */
      colorTrueOrFalse7: 0,/* Change in color when line number 7 is changed  */
      colorTrueOrFalse8: 0,/* Change in color when line number 8 is changed  */

    }
  },
  watch: {

    /* Automatic refresh --- Inventory and Balance of Goods */
    itemList: function(){

      this.refresh('http://soundbible.com/mp3/Elevator Ding-SoundBible.com-685385892.mp3');
    } 

  },
  created: function() {
    
     this.colorTrueOrFalse1=0; /* Reset Color Numbers */
     this.colorTrueOrFalse2=0; 
     this.colorTrueOrFalse3=0; 
     this.colorTrueOrFalse4=0; 
     this.colorTrueOrFalse5=0; 
     this.colorTrueOrFalse6=0; 
     this.colorTrueOrFalse7=0;
     this.colorTrueOrFalse8=0;

    /* Stock and balance of the vending machine */
     //<-------------- VendingId  EventBus  ------------->
    EventBus.$on('VendingId',(arg1,arg2,arg3,arg4) => {
  
    this.vendingId=arg1;
    this.vendingName=arg2;
    this.vendingSupplementer=arg3;
    this.vendingAddress=arg4;
    this.vending_id=this.vendingId;

   if(obj_v==[]){
        obj_v.push({id: this.vendingId,name:this.vendingName,supplementer:this.vendingSupplementer,address: this.vendingAddress});
        this.itemList_v=obj_v;
    
    }else{

        obj_v.splice(0,2);
        obj_v.push({name:this.vendingName,supplementer:this.vendingSupplementer,address: this.vendingAddress});
        this.itemList_v=obj_v;
   
    }
  
    temp=this.vendingId;
    this.route_analysis = "/analysis?id="+temp;
    this.route_management ="/management?id="+temp;
    this.goToId = temp;
  
    //<----------------- baverage stock axios ----------------------->
    this.axios.get("/realtime/getVdStock/"+this.vendingId)
       .then((response) =>{
           let key;
           let obj =[];    
           let array = [];
           response = response.data; 
           
           if(obj==[]){
             for(key in response){
                array[key] = {
                 line : response[key].line,
                 stock  : response[key].stock,
                 drink_img_path : response[key].drink_back_path
                }
                obj.push({line:array[key].line,
                         stock:array[key].stock,
                         drink_img_path:array[key].drink_img_path});
              }
           }
           else{
             obj.splice(0,);
              for(key in response){
                array[key] = {
                 line : response[key].line,
                 stock  : response[key].stock,
                 drink_img_path : response[key].drink_back_path
                }
                obj.push({line:array[key].line,
                         stock:array[key].stock,
                         drink_img_path:array[key].drink_img_path});   
              } 
           } 
        this.itemList = obj;         /* Variables that receive the entire stock */
        this.itemList_before=obj;   /*  variables that only receive stock  */  
 console.log(this.itemList);
         })
       .catch(function (error) {
         console.log(error);
       });
       
       
    //<----------------- coin stock axios ----------------------->
    this.axios.get("/realtime/coinStock/"+this.vendingId)
       .then((response) =>{
           let key;
           let obj_c=[];
           let array = [];
            response = response.data; 
           if(obj_c==[]){
             for(key in response){
                array[key] = {
                 en100 : response[key].en100,
                 en50  : response[key].en50,
                 en10 : response[key].en10,
                 sum : response[key].sum
                 
                }
                obj_c.push({en100:array[key].en100,
                         en50:array[key].en50,
                         en10:array[key].en10,
                         sum:array[key].sum});
              } 
           }
           else{
             obj_c.splice(0,);
              for(key in response){
                array[key] = {
                 en100 : response[key].en100,
                 en50  : response[key].en50,
                 en10 : response[key].en10,
                 sum : response[key].sum
                }
                 obj_c.push({en100:array[key].en100,
                         en50:array[key].en50,
                         en10:array[key].en10,
                         sum:array[key].sum});
              } 
           } 
         this.itemList_c=obj_c;       /*  Variables that receive  */  
         })
       .catch(function (error) {
         console.log(error);
       });
     
      
   });
  },

  methods: {

  //<----------------- refresh methods --------------------->
       refresh(sound){

         //<-----------------refresh baverage stock axios ----------------------->
        this.axios.get("/realtime/getVdStock/"+temp)
       .then((response) =>{
           let key;
           let obj=[];
           let array = [];
            response = response.data; 
           if(obj==[]){
             for(key in response){
                array[key] = {
                 line  : response[key].line,
                 stock : response[key].stock,
                 drink_img_path : response[key].drink_back_path
                }
                obj.push({line:array[key].line,
                         stock:array[key].stock,
                         drink_img_path :array[key].drink_img_path});
              }
           }
           else{
             obj.splice(0,);
              for(key in response){
                array[key] = {
                 line   : response[key].line,
                 stock  : response[key].stock,
                 drink_img_path : response[key].drink_back_path
                }
                obj.push({line:array[key].line,
                         stock:array[key].stock,
                         drink_img_path:array[key].drink_img_path});
              } 
           }   
             this.itemList = obj;  /* stock complete list */
         })
       .catch(function (error) {
         console.log(error);
       });
      
       //<----------------- refresh coin stock axios ----------------------->
       this.axios.get("/realtime/coinStock/"+this.vendingId)
       .then((response) =>{
           let key;
           let obj_c=[];
           let array = [];
            response = response.data; 
           if(obj_c==[]){
             for(key in response){
                array[key] = {
                 en100 : response[key].en100,
                 en50  : response[key].en50,
                 en10 : response[key].en10,
                 sum : response[key].sum
                 
                }
                obj_c.push({en100:array[key].en100,
                         en50:array[key].en50,
                         en10:array[key].en10,
                         sum:array[key].sum});
              }
           }
           else{
             obj_c.splice(0,);
              for(key in response){
                array[key] = {
                 en100 : response[key].en100,
                 en50  : response[key].en50,
                 en10 : response[key].en10,
                 sum : response[key].sum
                }
                 obj_c.push({en100:array[key].en100,
                         en50:array[key].en50,
                         en10:array[key].en10,
                         sum:array[key].sum});
              } 
           }  
            this.itemList_c=obj_c; /* List of coin stock  */ 
         })
       .catch(function (error) {
         console.log(error);
       }); 
      

      /* Sound effective when inventory numbers change */
     if(this.vendingId==this.vendingId_before){
      for (var i=0; i<8;i++){
        if((this.itemList[i].line==this.itemList_before[i].line)){
           if(this.itemList[i].stock!=this.itemList_before[i].stock){
      
             if(sound) {  /* an effective part */
                 var audio = new Audio(sound);
                 audio.play();
              }

             /*Convert Color When Numeric */
             if(this.itemList[i].line==1){
                this.colorTrueOrFalse1++;
             }
             if(this.itemList[i].line==2){
                this.colorTrueOrFalse2++;
             } 
             if(this.itemList[i].line==3){
                this.colorTrueOrFalse3++;
             } 
             if(this.itemList[i].line==4){
                this.colorTrueOrFalse4++;
             }  
             if(this.itemList[i].line==5){
                this.colorTrueOrFalse5++;
             } 
             if(this.itemList[i].line==6){
                this.colorTrueOrFalse6++;
             } 
             if(this.itemList[i].line==7){
                this.colorTrueOrFalse7++;
             } 
             if(this.itemList[i].line==8){
                this.colorTrueOrFalse8++;
             } 
           }
         } 
       }
     }
       
        this.vendingId_before = this.vending_id; //Put the current ID into the ID variable being compared
        this.itemList_before = this.itemList; //Place current inventory list in the inventory list array for comparison

       } ,
    
    //<----------------- sale history axios ----------------------->
       sale_history :function(){
      this.axios.get("realtime/getSellDataList").then((response) =>{
        response = response.data;
        var obj_sell =[];
        let array = [];
        if(this.itemList==[]){ 
           for(let key in response){
         array[key] = {
            name : response[key].vd_name,
            sell_date : response[key].sell_date,
            price : response[key].sell_price,
            dName : response[key].drink_name 
          }
          obj_sell.push({
            isActive: true,
            name:array[key].name,
            sell_date:array[key].sell_date,
            price:array[key].price,
            dName:array[key].dName
          }); 
        }}
        else{
           obj_sell.splice(0,);
           obj_sell=[];
        for(let key in response){
          array[key] = {
            name : response[key].vd_name,
            sell_date : response[key].sell_date,
            price : response[key].sell_price,
            dName : response[key].drink_name 
          }
          obj_sell.push({
            isActive: true,
            name:array[key].name,
            sell_date:array[key].sell_date,
            price:array[key].price,
            dName:array[key].dName
          });
        }
        }       
        this.items = obj_sell;                   
      })
    },
    /* <---------------------- Send modal contents db --------------------> */
    submit(selectedItem,selectedItem_etc){
        // console.log(selectedItem_etc);
         console.log(this.vending_id);

      if(selectedItem_etc==''){
        const formData = new FormData();
        formData.append('ven_id',this.vending_id);
        formData.append('ven_note',selectedItem);
       
         this.axios.post("realtime/addJobOrderVerTwo", formData).then((Response)=>{
            console.log(Response.data);
        }).catch(ex=>{
          console.log(ex);
        }) 
       } 
        else if(selectedItem_etc!=''){
        const formData = new FormData();
        formData.append('ven_id',this.vending_id);
        formData.append('ven_note',selectedItem_etc);
       
         this.axios.post("realtime/addJobOrderVerTwo", formData).then((Response)=>{
            console.log(Response.data);
        }).catch(ex=>{
          console.log(ex);
        }) 
       } 
        this.dialog = false
    },
    /* <--------------------Click More Button-------------------> */
    moreButton(arg1){
     this.trueOrFalse=arg1;
    }
  }
}
</script>

<style>
   /* Before click the vending icon*/
  #background1{
    width:60%;   
    position: relative;
    right: 100px; 
    margin-bottom:35%;
  }
  /* After click the vending icon  */
  #background2 {  
    width:100%;   
    position: relative;
    right: 180px;
    margin-top:-60px;
    margin-left:30px;
  }
  /* Current Clicked vending Name -1*/ 
  #background2_title{
    position: relative;
    left: -280px;
    margin-top:60px;
  }
   /* Current Clicked vending Name -2*/
  #background2_title2{
    position: relative;
    left: -280px; 
    margin-top: 60px;
   
  }

  /* Beverage list */
  #bottom_left{
    margin-top:-15px;
    margin-left:22px;
    float: left; width: 47%; padding:3px
  }
  /* coin stock list  */
  #bottom_center{
    float: left;
    width: 35%; 
    margin-top: 10px;
    margin-right:6px;
    }
  /* more button */
  #bottom_right{
    margin-top: 10px;
    float: left;
  }
  /* more list */
  #bottom_left2{
    margin-left:60px;
    margin-top:6px;
    float: left; width: 66%;  
    background-image:url(/images/realtime/vertical_frame.png);
    background-repeat:no-repeat;
    background-size:650px 240px; 
    width: 660px;
    height: 250px; 
  }
  /* back button */
  #bottom_right2{
    float: left; 
    margin-top:14px;
    margin-left:15px;
  }
.hover13 figure:hover img {
  opacity: 1;
  -webkit-animation: flash 1.5s;
  animation: flash 2.5s;
}
  @-webkit-keyframes flash {
    0% {
      opacity: .4;
    }
    100% {
      opacity: 1;
    }
  }
  @keyframes flash {
    0% {
      opacity: .4;
    }
    100% {
      opacity: 1;
    }
  }

  /* coin stock table */
  #coin_stock_table1{
    font-family:"Fugaz One";
    color: rgb(48, 109, 170);
    font-size: 1.5em
  }
  #coin_stock_table2{
   font-family:"Fugaz One";
    color: black;
    font-size: 1.5em
  }
  #sumFont{
    font-family:"Fugaz One";
    color: rgb(48, 109, 170);
    font-size: 1.5em
  }
  /* table background color */
  #trBgColor{
  background-color:  rgb(229, 239, 248);
  }

  /* Settion vending name */
  #vendingMachineNameFont{
    font-family:"Nanum Gothic";
    color: black;
    font-size: 1.7em;
  }
  /* Setting table drink stock  */
  #drinkStockTable{
    
    padding-left:50px;
    margin-top: 7px;
    margin-left: 15px;
    margin-right: 10px;
    margin-bottom: 2px;

  }
  /* table background image */
  #tdBackground{
   background-image:url(/images/realtime/frame.png);
   background-repeat:no-repeat;
   background-size:87px 120px; 
   width: 88px;
   height: 130px;
   padding-right: 3%;
  }
  /* stock Top number */
  #numberTop{
    margin-left:5px;
    padding-left:5px;
    font-family:"Fugaz One";
    color: rgb(228, 142, 61);
    font-size: 1.5em
  }
  /* stock Middile number */
  #numberCenter{
    margin-left:5px;
    padding-left:5px;
    font-family:"Fugaz One";
    color: rgb(48, 109, 170);
     font-size: 1.5em
  }
  /* stock Low number */
  #numberBottom{
    margin-left:5px;
    padding-left:5px;
    font-family:"Fugaz One";
    color: rgb(52, 196, 83);
     font-size: 1.5em
  }
  /* Setting residual status title  */
  #CoinStockFont{
    font-family:"Nanum Gothic";
    color: black;
    font-size: 1.7em
  }
  .icon {
    width :30%;
    height:30% ;
    margin-top: 10%;
    margin-bottom: 10%;
  }

  .partInfo:hover .icon{
      opacity: 0.3
  }
  .partInfo {
    width: 15%;
    height: 90px;
    margin-left: 4%;
    margin-top: 3%;
    margin-bottom: 3%;
    margin-right: 1%;
    background-color: rgba(20, 124, 136, 0.72);
    display: inline-block;
    overflow-x:hidden;
    overflow-y:hidden;
    color: rgb(218, 216, 230);
    border-radius: 20px;
    text-align: center;
  }

  /* Set number flicker when sold out */
  .blink{
    color:rgb(255, 255, 255);
    font-size:20px;
    animation:blink_animation .6s 7;
  }
  @keyframes blink_animation {
      50%   {color:rgb(255, 255, 255);}      
      100% {color: rgb(228, 142, 61);}
  }

  /* Set number flicker if buffer */
  .blink2{
    color:rgb(255, 255, 255);
    font-size:20px;
    animation:blink_animation2 .6s 2;
  }
  @keyframes blink_animation2 {
      50%   {color:rgb(255, 255, 255);}      
      100% {color: rgb(52, 196, 83)}
  }
  
  /* Set flicker if number changes */
  .blink3{
    color:rgb(255, 255, 255);
    font-size:20px;
    animation:blink_animation3 .6s 3;
  }
  @keyframes blink_animation3 {
      50%  {color:rgb(255, 255, 255);}      
      100% {color: rgb(248, 74, 149)}
  }

  /* The left-hand description of the More View function */
  #add_table{
  float: left; width: 30%;  
  margin-left: -20px;
  }
  /* More View Right Button */
  #add_list_button{
  float :left;
  width: 60%; 
  margin-top: 5%;
  margin-left: 3%;
  }
  /* More View Left Button */
  #top_info_settting{
    font-family:"Nanum Gothic";
    color: rgb(255, 255, 255);
    font-size:16px;
    text-align: left;
    font-weight: bold;
    margin-left: 20%;
  }
  #bottom_info_settting{
    font-family:"Nanum Gothic";
    color: rgb(255, 255, 255);
    font-size:20px;
    text-align: left;
    font-weight: bold;
    margin-left: 20%;
  }
  #img_info_settting{
    width:70%;
    margin-left: -280%;
    margin-top: -127%;
  
  }
  /* Refresh button */
  #add_button{
    width: 78% ;
  }
</style>




