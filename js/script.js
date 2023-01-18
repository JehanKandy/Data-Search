function validate_search(){
    var searchIn = document.forms['search_form']['searchValue'].value;
    
    if(searchIn == "" || searchIn == null){
        document.getElementById('searchValue').style.borderColor = "red";
        document.getElementById('inputerror').innerHTML = "Empty Input..!";
        document.getElementById('inputerror').style.color = "red";
        return false;
    }
}
