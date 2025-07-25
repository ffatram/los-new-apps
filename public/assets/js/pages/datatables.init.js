function initializeTables() {
    new DataTable("#example"), new DataTable("#scroll-vertical", {
        scrollY: "210px",
        scrollCollapse: !0,
        paging: !1
    }), new DataTable("#scroll-horizontal", {
        scrollX: !0
    }), new DataTable("#alternative-pagination", {
        pagingType: "full_numbers"
    }), new DataTable("#fixed-header", {
        fixedHeader: !0
    }), new DataTable("#model-datatables", {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(a) {
                        a = a.data();
                        return "Details for " + a[0] + " " + a[1]
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                    tableClass: "table"
                })
            }
        }
    }), new DataTable("#buttons-datatables", {
        scrollX: !0, // untuk membuat pada pagination tidak ikut ter scrole
        dom: "Bfrtip",
        buttons: ["copy", "csv", "excel", "print", "pdf"]
    }), new DataTable("#ajax-datatables", {
        ajax: "assets/json/datatable.json"
    });
    var a = $("#add-rows").DataTable(),
        e = 1;
    $("#addRow").on("click", function() {
        a.row.add([e + ".1", e + ".2", e + ".3", e + ".4", e + ".5", e + ".6", e + ".7", e + ".8", e + ".9", e + ".10", e + ".11", e + ".12"]).draw(!1), e++
    }), $("#addRow").trigger("click")
}
document.addEventListener("DOMContentLoaded", function() {
    initializeTables()
});