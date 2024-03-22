function checkForm(){

  var name = document.getElementsByName('name');
  var mail = document.getElementsByName('mail');
  var age = document.getElementsByName('age');
  var comments = document.getElementsByName('comments');


  // document.write('name→[' + name[0].value + ']');
  // document.write('mail→[' + mail[0].value + ']');
  // document.write('age→[' + age[0].value + ']');
  // document.write('comments→[' + comments[0].value + ']');


  // nameが空白、またはmailが空白、またはageが空白、またはcommeentsが空白の場合
  if(name[0].value == '' || mail[0].value == '' || age[0].value == '' || comments[0].value == ''){
    alert("必須項目を入力して下さい。");
    return false;
  }
  else {
    alert("必須項目が入力されています。次に進みます");
    return ture;
  }

}
