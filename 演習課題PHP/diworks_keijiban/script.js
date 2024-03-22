function checkForm(){

  var title = document.getElementsByName('title');
  var comments = document.getElementsByName('comments');
  var handlename = document.getElementsByName('handlename');


  // document.write('name→[' + name[0].value + ']');
  // document.write('comments[' + mail[0].value + ']');
  // document.write('handlename[' + handlename[0].value + ']');


  // nameが空白、またはmailが空白、またはageが空白、またはcommeentsが空白の場合
  if(title[0].value == '' || comments[0].value == '' || handlename[0].value == ''){
    alert("必須項目を入力して下さい。");
    return false;
  }
  else {
    // alert("必須項目が入力されています。次に進みます");
    // return ture;
  }
}
