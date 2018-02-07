/**
 * Created by Cas on 14-11-2017.
 */
var input = document.getElementById("input");
var output = document.getElementById("output");





input.addEventListener('keydown', function(e) {
    console.log(e.keyCode);
    if (e.keyCode == 13) {
    switch (input.value) {
        case "1":
            output.value = "you have selected Aragon (ANT)";
            break;
        case "2":
            output.value = "you have selected Augur (REP)";
            break;
        case "3":
            output.value = "you have selected Basic Attention Token (BAT)";
            break;
        case "4":
            output.value = "you have selected Bitcoin (BTC)";
            break;
        case "5":
            output.value = "you have selected BighanCoin (BHC)";
            break;
        case "6":
            output.value = "you have selected Civic (CVC)";
            break;
        case "7":
            output.value = "you have selected Digital Cash (DASH)";
            break;
        case "8":
            output.value = "you have selected Decred (DCR)";
            break;
        case "9":
            output.value = "you have selected District0x (DNT)";
            break;
        case "10":
            output.value = "you have selected EOS";
            break;
        case "11":
            output.value = "you have selected Ethereum Classic (ETC)";
            break;
        case "12":
            output.value = "you have selected Ethereum (ETH)";
            break;
        case "13":
            output.value = "you have selected FunFair (FUN)";
            break;
        case "14":
            output.value = "you have selected Gnosis (GNO)";
            break;
        case "15":
            output.value = "you have selected Golem (GNT)";
            break;
        case "16":
            output.value = "you have selected LiteCoin (LTC)";
            break;
        case "17":
            output.value = "you have selected OmiseGo (OMG)";
            break;
        case "18":
            output.value = "you have selected SALT";
            break;
        case "m":
            output.value = "sorry bad programmer = bad program";
            break;
    }




    }
})