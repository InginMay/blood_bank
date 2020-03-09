 @extends("frontendtemplate")
 @section('content')

 <div class="container-fluid mt-2">
    <div class="row">
      <div class="col-12">
        <img src="{{asset('image/111.jpg')}}" style="width: 100%;height: 500px;">
      </div>
    </div>
  </div>

 <div class="container my-5">
    <h1 class="text-center"><b>သွေးအမျိုးအစား</b></h1>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 my-3 text-center">
        <img src="{{asset('image/a1.png')}}" width="160" height="260" data-toggle="modal" data-target="#AModel">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 my-4 text-center">
        <img src="{{asset('image/b1.png')}}" width="150" height="250" data-toggle="modal" data-target="#BModel">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 my-4 text-center">
        <img src="{{asset('image/ab2.png')}}" width="180" height="250" data-toggle="modal" data-target="#ABModel">
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 my-4 text-center">
        <img src="{{asset('image/o.png')}}" width="150" height="250" data-toggle="modal" data-target="#OModel">
      </div>
    </div>
</div>


<div class="container-fluid my-3">
    <div class="row">
        <div class="col-md-8 offset-2 card shadow mr-5">
            
          <div class="row">
            <div class="col-12 my-5">
              <h1 align="center"><b>သင်သွေးလှူရှင်ဖြစ်နိုင်ပါသလား</b></h1>
              <h5 class="mx-5">သင်သည် အသက်(၁၈) နှစ်မှ (၅၅) နှစ်အတွင်းရှိသူ ဖြစ်ရမည်။</h5>

              <h5 class="mx-5">အမျိုးသားအတွက် ကိုယ်အလေးချိန် ပေါင် (၁၁၀) အထက် ရှိရမည်။</h5>

              <h5 class="mx-5">အမျိုးသမီးအတွက် ကိုယ်အလေးချိန် ပေါင်(၁၀၀) အထက် ရှိရမည်။</h5>

              <h5 class="mx-5">အိပ်ရေးဝစွာ အိပ်စက်ထားသူဖြစ်ရပါမည်။</h5>

              <h5 class="mx-5">အရက်သေစာသောက်စားထားခြင်းမရှိသူ ဖြစ်ရပါမည်။</h5>

              <h5 class="mx-5">လတ်တလော ရောဂါဝေဒနာမရှိသူ ဖြစ်ရပါမည်။</h5>

              <h5 class="mx-5">လွန်ခဲ့သော ၆ လအတွင်းက ဆေးမင်ကြောင် ထိုးခြင်း၊ နားဖောက်ခဲ့ခြင်း၊ ဆေးအပ်စိုက်ခဲ့ခြင်းတို့ မရှိသူ ဖြစ်ရပါမည်။</h5>

              <h5 class="mx-5">ကိုယ်ဝန်ဆောင်ခြင်း၊ နို့တိုက်ခြင်း၊  လတ်တလော ဓမ္မတာလာခြင်းတို့ မရှိသူဖြစ်ရပါမည်။</h5>

              <h5 class="mx-5">ဖော်ပြပါ အချက်အလက်များနှင့်  ကိုက်ညီသော်လည်း  သွေးလှူဒါန်းခြင်းအားဖြင့် သင်၏ ကျန်းမာရေး မထိခိုက်စေရန် ဆရာဝန်များမှ တာဝန်ယူစောင့်ရှောက်ပေးပါမ ည်။</h5>
                
            </div>
          </div>
        </div>

    </div>
       
</div>



<!--A Modal -->
<div class="modal fade" id="AModel" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Aသွေးအကြောင်း</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <img src="{{asset('image/a1.png')}}" class="img-fluid" style="width: 250px;height: 300px;">
            </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                  A သွေး အမျိုးအစားပိုင်ရှင်တွေအတွက် ကြောက်စရာအကောင်းဆုံးကတော့နဲ့ အဖြစ်အများဆုံးကတော့ အစာအိမ်ကင်ဆာပါ။ A သွေးဟာ O သွေးထက်စာရင် အစာအိမ်ကို ရောဂါပိုးဖြစ်တဲ့ H. pylori ဘက်တီးရီးယားကို ပိုပြီးတုန့်ပြန်လွယ်တာကြောင့် အစာအိမ်ထိခိုက်မှုနှုန်းပိုများပြီး ကင်ဆာ​ဖြစ်နိုင်ချေ ပိုများရတာဖြစ်ပါတယ်။

                  ဘယ်လိုကာကွယ်ကြမလဲ ။ ။ A သွေးပိုင်ရှင်တွေ အနေနဲ့ အကင်တို့၊ ဝက်ပေါင်ခြောက်တို့၊ နဲ့ H. pylori ရောဂါပိုးတွေ အများကြီးရှိနေနိုင်တဲ့ လက်လုပ်ချဉ်တွေကို ရှောင်စား လျှော့စားသင့်ပါတယ်။ သွေးအုပ်စု A+ ကို A+, A-, O+, O- ဆီကသွေးသွင်းနိုင်ပါတယ်။
                </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!--B Modal -->
<div class="modal fade" id="BModel" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bသွေးအကြောင်း</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <img src="{{asset('image/b1.png')}}" class="img-fluid" style="width: 200px;height: 300px;">
            </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                  B သွေး ကကျတော့ အမျိုးအစား ၂ ဆီးချိုနဲ့ ဆက်စပ်မှုအရှိဆုံး သွေးအမျိုးအစား တစ်ခုပါ။ O သွေးထက်စာရင် B သွေးက ဆီးချို ၂၁ ရာခိုင်နှုန်း ပိုဖြစ်နိုင်ပါတယ်။

                  ကိုယ်အလေးချိန်တက်လာခြင် းအထူးသဖြင့် ခါးအဆီတက်လာခြင်းက ဆီးချိြုဖစ်နိုင်ချေပိုများတာကြောင့် B သွေးပိုင်ရှင်တွေ အနေနဲ့ ကိုယ်အလေးချိန်ထိန်းထားဖို့ အရေးကြီးပါတယ်။ တစ်ချိန်လုံးထိုင်ပြီး အလုပ်လုပ်နေမယ့်အစား ကိုယ်လက်လှုပ်ရှားမှုလေးလုပ်ပါ။ အစားအသောက် ဆင်ခြင်ပါ။သွေးအုပ်စု B+ ကို   B+, B-, O+, O- ဆီကသွေးသွင်းနိုင်ပါတယ်။ 
                </div>
          </div>
        </div>
      </div>
    </div>
</div>

<!--AB Modal -->
<div class="modal fade" id="ABModel" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ABသွေးအကြောင်း</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <img src="{{asset('image/ab2.png')}}" class="img-fluid" style="width: 250px;height: 300px;">
            </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                  AB သွေး တွေနဲ့ ဆက်စပ်မှု အရှိဆုံးကတော့ နှလုံးရောဂါပါ။ AB သွေးပိုင်ရှင်တွေဟာ O သွေးပိုင်ရှင်တွေထက်စာရင် နှလုံးရောဂါဖြစ်နိုင်ချေ ၂၃ ရာခိုင်နှုန်းပိုမျာတယ်လို့ ဆိုပါတယ်။ ဘာ့ကြောင့်လဲဆိုတော့ သူတို့ဟာ ticker-hurting inflammation လို့ခေါ်တဲ့ နှလုံးရောင်ရမ်းခြင်းဖြစ်နိုင်ချေ အရမ်းကိုများလို့ပါ။

                  ကြိုတင်ကာကွယ်ချင်ရင်တော့ AB သွေးပိုင်ရှင်တွေ အနေနဲ့ တစ်နေ့ကို မိနစ် ၃၀ လောက်နှလုံးလေ့ကျင့်ခန်းတွေ လုပ်ပေးဖို့ လိုပါလိမ့်မယ်။ လမ်းလျှောက်တာတို့၊ စက်ဘီးနီးတာတို့ကို တစ်ပါတ် ၅ ကြိမ်လောက်လုပ်ပေါ့။ ချွေးထွက်လေလေ ၊ နှလုံးခုန်နှုန်းမြန်ပြီ းမောလေလေ နှလုံးကို လှုပ်ရှားမှုရအောင် လုပ်ပေးသလိုဖြစ်တာကြောင့် သွေးကြောပိတ်တာ၊ သွေးခဲတာတွေ လျော့ပါသွားပြီး နှလုံးရောဂါဖြစ်နိုင်ချေ နည်းသွားမှာပါ။
                  သွေးအုပ်စု AB+ ကို တော့ မည်သည့်သွေးအမျိုးအစားမဆိုသွင်းနိုင်ပါတယ်။
                </div>
          </div>
        </div>
      </div>
    </div>
</div>


<!--O Modal -->
<div class="modal fade" id="OModel" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Oသွေးအကြောင်း</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
              <img src="{{asset('image/o.png')}}" class="img-fluid" style="width: 200px;height: 300px;">
            </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                  O သွေးပိုင်ရှင်တွေ အတွက် စိတ်အညစ်ရဆုံး ရောဂါကတော့ ကလေးမရနိုင်တဲ့ ပြဿနာပဲဖြစ်ပါတယ်။ O သွေးနဲ့ reduced ovarian reserve လို့ခေါ်တဲ့ မျိုးဥနည်းခြင်း ပြဿနာနဲ့က အရမ်းကို ဆက်စပ်မှုရှိနေတဲ့အတွက်ကြောင့်ပါ။

                  ဒါပေမယ့် O သွေးပိုင်ရှင်တိုင်း ဒါမျိုး ဖြစ်ရမယ်လို့ မဆိုလိုပါဘူး။ အများဆုံး ဖြစ်တတ်တယ်လို့ ဆိုထားတဲ့အတွက်ကြောင့် မဖြစ်ချင်ရင်တော့ ကျန်းမာရေးနဲ့ညီညွတ်မျှတအောင်စားမယ်၊ အရက် တွေ ဆေးလိပ် တွေ လျှော့သောက်မယ်ဆိုရင်တော့ ဒီ ပြဿနာအတွက် စိတ်ပူစရာလိုတော့မှာ မဟုတ်ပါဘူး။သွေးအုပ်စု O+ ကို O+, O- ဆီကသွေးသွင်းနိုင်ပါတယ်။
                </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection