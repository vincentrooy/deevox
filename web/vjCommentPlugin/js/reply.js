function reply(id, value, form_name){
  document.getElementById(form_name+"_reply").value = id;
  document.getElementById(form_name+"_reply_author").value = value;
  document.getElementById("tr_reply_author_"+form_name).style.display = "table-row";
  document.getElementById("tr_reply_author_delete_"+form_name).style.display = "table-row";
  document.location.href = document.location.toString().split("#")[0]+"#top";
}

function deleteReply(form_name){
  document.getElementById(form_name+"_reply").value = "";
  document.getElementById(form_name+"_reply_author").value = "";
  document.getElementById("tr_reply_author_"+form_name).style.display = "none";
  document.getElementById("tr_reply_author_delete_"+form_name).style.display = "none";
}