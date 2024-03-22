//問1//
for (var star=1; star<=5; star++){
  document.write("★");
}


document.write("<br>");
document.write("<br>");

//問２//
for (var line=1; line<=2; line++){
  for (var column=1; column<=3; column++){
    document.write("★");
  }
  document.write("<br>");
}


document.write("<br>");

//問3//
for (var line=1; line<=2; line++){
  for (var column=1; column<=5; column++){
    document.write("☆");
  }
  document.write("<br>");
}


document.write("<br>");

//問4//
for (var line=1; line<=4; line++){
  for (var column=1; column<=5; column++){
    document.write("★");
 }
 document.write("<br>");
}


document.write("<br>");

//問５//
for (var line=1; line<=4; line++){
  for (var column=1; column<=3; column++){
    document.write("★");
  }
  document.write("<br>");
}


document.write("<br>");

//問6//
for (var line=0; line<3; line++){
  for (var column=0; column<3; column++){
    if(column%2==0){
      document.write("★");
    }
    else{
      document.write("☆");
    }
  }
  document.write("<br>");
}


document.write("<br>");

//問7//
for (var line=0; line<4; line++){
  for (var column=0; column<5; column++){
    if(column%2==0){
      document.write("★");
    }
    else{
      document.write("☆");
    }
  }
  document .write("<br>");
}

  
document .write("<br>");

//問8//
for (var line=1; line<=5; line++){
  for (var column=1; column<=line; column++){
    document.write("★");
  }
  document.write("<br>");
}


