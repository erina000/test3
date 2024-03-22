//問1//
function menseki(hankei){
  return(hankei*hankei*3.14);
}
document.write(menseki(5));
document.write("<br>");
document.write(menseki(7));
document.write("<br>");
document.write(menseki(10));


document.write("<br>");
document.write("<br>");

//問2//
// function goukei(otona,kodomo){
//  return (otona*500)+(kodomo*200);
// }
// document.write("Aグループの合計金額"+goukei(2,4)+"円です。");
// document.write("<br>");
// document.write("Bグループの合計金額"+goukei(1,5)+"円です。");
// document.write("<br>");
// document.write("Cグループの合計金額"+goukei(3,7)+"円です。");

function goukei(otona,kodomo){
  return "グループの合計金額"+((otona*500)+(kodomo*200))+"円です。";
}
document.write("A"+ goukei(2,4));
document.write("<br>");
document.write("B"+ goukei(1,5));
document.write("<br>");
document.write("C"+ goukei(3,7));
 