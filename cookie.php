<?php 
//browser ပေါမှာ သိမ်း 
//login system မှာပါတဲ့ remember me
//Tracking analytics
//language change
// 4kb

    // setcookie("key","value",expire,domain,path)
    setcookie("age","10", time() + (86400 * 30), "/");

    if($_COOKIE["age"] == "18") {
        echo "You can buy";
    }else {
        echo "You can't buy";
    }


    // Product ID 101 ကို ကြည့်ခဲ့တယ်လို့ ၁ ပတ် သိမ်းထားမည်
setcookie("last_viewed_item", "101", time() + (86400 * 7), "/");

if (isset($_COOKIE["last_viewed_item"])) {
    echo "သင် နောက်ဆုံးကြည့်ခဲ့သော Product ID ကတော့: " . $_COOKIE["last_viewed_item"];
} else {
    echo "ပစ္စည်းများ လေ့လာကြည့်ရှုပါ";
}

?>