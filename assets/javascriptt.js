
//for sidebar
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");

closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});


// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}


//for delete button
$(document).ready( function () {
    $('#borrowedTable').DataTable();
} );


function deleteVisitor(id) {
    if (confirm('Do you want to delete this Prison?')) {
        window.location = "delete/visitor_delete.php?id=" + id;
    }
}
function deletePrison(id) {
    if (confirm('Do you want to delete this Prison?')) {
        window.location = "delete/prison_delete.php?id=" + id;
    }
}
function deleteCell(id) {
    if (confirm('Do you want to delete this cell?')) {
        window.location = "delete/cell_delete.php?id=" + id;
    }
}
function deleteJailer(id) {
    if (confirm('Do you want to delete this account?')) {
        window.location = "delete/jailer_delete.php?id=" + id;
    }
}
function deleteOfficer(id) {
    if (confirm('Do you want to delete this account?')) {
        window.location = "delete/officer_delete.php?id=" + id;
    }
}
function deleteAdmin(id) {
    if (confirm('Do you want to delete this account?')) {
        window.location = "delete/admin_delete.php?id=" + id;
    }
}
function deleteInmate(id) {
    if (confirm('Do you want to delete this inmate information?')) {
        window.location = "delete/in_delete.php?id=" + id;
    }
}
// end of delete button

//for update

function updatePrison(id) {
    $("#updateBookModal").modal("show");

    let prison_id = $("#prison_id-" + id).text();
    let prison_name = $("#prison_name-" + id).text();
    let prison_status = $("#prison_status-" + id).text();

    $("#prison_id").val(prison_id);
    $("#prison_name").val(prison_name);
    $("#prison_status").val(prison_status);
}


function updateBorrowedBook(id) {
    $("#updateBorrowedBookModal").modal("show");

    let updateID = $("#prison_id-" + id).text();
    let updateBookID = $("#bookID-" + id).text();
    let updateBorrowerName = $("#borrowerName-" + id).text();
    let updateBorrowerContact = $("#borrowerContact-" + id).text();
    let updateDateBorrowed = $("#dateBorrowed-" + id).text();
    let updateDateReturn = $("#dateReturn-" + id).text();

    $("#updateBorrowedID").val(updateBorrowedID);

    $("#updateBorrowedBook option").prop("selected", false);
    $("#updateBorrowedBook option[value='" + updateBookID + "']").prop("selected", true);

    $("#updateBorrowerName").val(updateBorrowerName);
    $("#updateBorrowerContact").val(updateBorrowerContact);
    $("#updateDateBorrowed").val(updateDateBorrowed);
    $("#updateDateReturn").val(updateDateReturn);
}
