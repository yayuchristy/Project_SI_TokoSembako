function seacrh() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searching");
  filter = input.value.toUpperCase();
  table = document.getElementById("tabelBarang");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
function tampil() {
  var table = document.getElementById("tabelBarang");

  for (var i = 1; i < table.rows.length; i++) {
    table.rows[i].onclick = function () {
      //rIndex = this.rowIndex;
      document.getElementById("kode").value = this.cells[1].innerHTML;
      document.getElementById("nama").value = this.cells[2].innerHTML;
      document.getElementById("harga").value = this.cells[3].innerHTML;
      document.getElementById("stok").value = this.cells[4].innerHTML;
    };
  }
}
