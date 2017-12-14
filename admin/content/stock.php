<!-- WallacePOS: Copyright (c) 2014 WallaceIT <micwallace@gmx.com> <https://www.gnu.org/licenses/lgpl.html> -->
<div class="page-header">
    <h1 class="inline">
        Item Inventory
    </h1>
    <button onclick="openAddStockDialog();" id="addbtn" class="btn btn-primary btn-sm pull-right"><i class="icon-pencil align-top bigger-125"></i>Add</button>
    <button class="btn btn-success btn-sm pull-right" style="margin-right: 10px;" onclick="exportStock();"><i class="icon-cloud-download align-top bigger-125"></i>Download Template</button>
    <button class="btn btn-success btn-sm pull-right" style="margin-right: 10px;" onclick="openImportDialog();"><i class="icon-cloud-upload align-top bigger-125"></i>Update Inventory</button>
<!--    <input type="file" id="files" name="inventory" data-buttonText="" class="btn btn-success btn-sm pull-right" style="margin-right: 10px;"/>-->
</div><!-- /.page-header -->

<div class="row">
<div class="col-xs-12">
<!-- PAGE CONTENT BEGINS -->

<div class="row">
<div class="col-xs-12">

<div class="table-header">
    Manage your product inventory
</div>

<table id="stocktable" class="table table-striped table-bordered table-hover dt-responsive" style="width:100%;">
    <thead>
        <tr>
            <th data-priority="0" class="center">
                <label>
                    <input type="checkbox" class="ace" />
                    <span class="lbl"></span>
                </label>
            </th>
            <th data-priority="2">Name</th>
            <th data-priority="5">Supplier</th>
            <th data-priority="3">Location</th>
            <th data-priority="4">Qty</th>
            <th>Reorder Point</th>
            <th data-priority="5">Cost</th>
            <th data-priority="6">Price</th>
            <th data-priority="7">Code</th>
            <th data-priority="8">Inventry No</th>
            <th data-priority="9">Expiry Date</th>
            <th data-priority="1" class="noexport"></th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>
</div>
</div>

</div><!-- PAGE CONTENT ENDS -->
</div><!-- /.row -->
<div id="editstockdialog" class="hide">
    <table>
        <tr>
            <input type="hidden" id="setstockid" />
            <input type="hidden" id="setstockinventoryid" />
            <input type="hidden" id="setstocklocid" />
<!--            <input type="hidden" id="setstocksupid" />-->
        </tr>
      <tr>
        <td style="text-align: right;"><label>Name:</label></td>
        <td><input type="text" id="setstockname" class="form-control" disabled/></td>
      </tr>
<!--      <tr>-->
<!--        <td style="text-align: right;"><label>Supplier:</label></td>-->
<!--        <td><select id="addstocksupid" class="supselect form-control">-->
<!--          </select></td>-->
<!--      </tr>-->
      <tr>
        <td style="text-align: right;"><label>Qty:&nbsp;</label></td>
        <td><input id="setstockqty" type="text" class="form-control"/></td>
      </tr>
      <tr>
        <td style="text-align: right;"><label>Reorder Point:&nbsp;</label></td>
        <td><input id="setstockreorderpoint" class="form-control" type="text"/></td>
      </tr>
      <tr>
        <td style="text-align: right;"><label>Cost:&nbsp;</label></td>
        <td><input id="setstockcost" class="form-control" type="text"/></td>
      </tr>
      <tr>
        <td style="text-align: right;"><label>Price:&nbsp;</label></td>
        <td><input id="setstockprice" class="form-control" type="text"/></td>
      </tr>
      <tr>
        <td style="text-align: right;"><label>Expiry Date:&nbsp;</label></td>
        <td><input id="setstockexpiryDate" class="form-control" type="text" value=""/></td>
      </tr>
      <tr>
        <td style="text-align: right;"><label>Inventory No:&nbsp;</label></td>
        <td><input id="setstockinventoryNo" class="form-control" type="text"/></td>
      </tr>
      <tr>
        <td style="text-align: right;"><label>BatchNo/Code:&nbsp;</label></td>
        <td><input id="setstockcode" class="form-control" type="text"/></td>
      </tr>
    </table>
</div>
<div id="transferstockdialog" class="hide">
    <table>
        <tr>
            <input type="hidden" id="tstockitem" />
            <input type="hidden" id="tstockitemid" />
            <input type="hidden" id="tstocklocid" />
            <td style="text-align: right;"><label>Transfer to:&nbsp;</label></td>
            <td><select id="tstocknewlocid" class="locselect form-control">
                </select></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Qty:&nbsp;</label></td>
            <td><input id="tstockqty" type="text" class="form-control" value="1"/></td>
        </tr>
        <tr>
          <td style="text-align: right;"><label>Reorder Point:&nbsp;</label></td>
          <td><input id="tstockreorderpoint" type="text" class="form-control" value="1"/></td>
        </tr>
    </table>
</div>
<div id="addstockdialog" class="hide">
    <table>
        <tr>
            <td style="text-align: right;"><label>Item:</label></td>
            <td><select id="addstockitemid" class="itemselect form-control">
                </select></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Location:</label></td>
            <td><select id="addstocklocid" class="locselect form-control">
            </select></td>
        </tr>
      <tr>
        <td style="text-align: right;"><label>Supplier:</label></td>
        <td><select id="addstocksupid" class="supselect form-control">
          </select></td>
      </tr>
        <tr>
            <td style="text-align: right;"><label>Qty:&nbsp;</label></td>
            <td><input id="addstockqty" type="text" class="form-control" value="1"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Reorder Point:&nbsp;</label></td>
            <td><input id="addstockreorderpoint" class="form-control" type="text"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Cost:&nbsp;</label></td>
            <td><input id="addstockcost" class="form-control" type="text"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Price:&nbsp;</label></td>
            <td><input id="addstockprice" class="form-control" type="text"/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Expiry Date:&nbsp;</label></td>
            <td><input id="addstockexpiryDate" class="form-control" type="text" value=""/></td>
        </tr>
        <tr>
            <td style="text-align: right;"><label>Inventory No:&nbsp;</label></td>
            <td><input id="addstockinventoryNo" class="form-control" type="text"/></td>
        </tr>
        <tr>
              <td style="text-align: right;"><label>BatchNo/Code:&nbsp;</label></td>
              <td><input id="addstockcode" class="form-control" type="text"/></td>
        </tr>
    </table>
</div>
<div id="stockhistdialog" class="hide">

    <div style="width: 100%; overflow-x: auto;">
    <table class="table table-responsive table-stripped">
        <thead>
            <tr>
                <th>Item</th>
                <th>Location</th>
                <th>Type</th>
                <th>Amount</th>
                <th>DT</th>
            </tr>
        </thead>
        <tbody id="stockhisttable">

        </tbody>
    </table>
    </div>
</div>

<!-- page specific plugin scripts; migrated to index.php due to heavy use -->
<script type="text/javascript" src="/admin/assets/js/jquery.csv.js"></script>
<link rel="stylesheet" href="/admin/assets/js/csv-import/lib/jquery.ezdz.min.css"/>
<script type="text/javascript" src="/admin/assets/js/csv-import/lib/jquery.ezdz.min.js"></script>
<script type="text/javascript" src="/admin/assets/js/csv-import/lib/jquery-sortable-min.js"></script>
<script type="text/javascript" src="/admin/assets/js/csv-import/lib/jquery.csv-0.71.min.js"></script>
<script type="text/javascript" src="/admin/assets/js/csv-import/csv.import.tool.js"></script>
<!-- inline scripts related to this page -->
<script type="text/javascript">
    var stock = null;
    var items = null;
    var suppliers = null;
    var locations = null;
    var datatable;
    $(function() {
        stock = WPOS.getJsonData("stock/get");
        items = WPOS.getJsonData("items/get");
        suppliers = WPOS.getJsonData("suppliers/get");
        locations = WPOS.locations;
        var stockarray = [];
        var tempstock;
        for (var key in stock){
            tempstock = stock[key];
            stockarray.push(tempstock);
        }
        datatable = $('#stocktable').dataTable({"bProcessing": true,
            "aaData": stockarray,
            "aaSorting": [[ 1, "asc" ]],
            "aLengthMenu": [ 10, 25, 50, 100, 200],
            "aoColumns": [
                { mData:null, sDefaultContent:'<div style="text-align: center"><label><input class="ace dt-select-cb" type="checkbox"><span class="lbl"></span></label><div>', bSortable: false },
                { mData:function(data,type,val){return (data.name==null?"Unknown":data.name) } },
                { mData:"supplier" },
                { mData:function(data,type,val){return (data.locationid!=='0'?(WPOS.locations.hasOwnProperty(data.locationid)?WPOS.locations[data.locationid].name:'Unknown'):'Warehouse');} },
                { mData:"stocklevel" },
                { mData:"reorderPoint" },
                { mData:"cost" },
                { mData:"price" },
                { mData:"code" },
                { mData:"inventoryNo" },
                { mData:"expiryDate" },
                { mData:function(data,type,val){return '<div class="action-buttons"><a class="green" onclick="openEditStockDialog('+data.id+');"><i class="icon-pencil bigger-130"></i></a><a class="blue" onclick="openTransferStockDialog('+data.id+')"><i class="icon-arrow-right bigger-130"></i></a><a class="red" onclick="getStockHistory('+data.id+', '+data.locationid+');"><i class="icon-time bigger-130"></i></a><a class="red" onclick="deleteStockItem('+data.id+');"><i class="icon-trash bigger-130"></i></a></div>'; }, "bSortable": false }
            ],
            "columns": [
                {},
                {type: "string"},
                {type: "string"},
                {type: "string"},
                {type: "numeric"},
                {type: "numeric"},
                {type: "numeric"},
                {type: "numeric"},
                {type: "string"},
                {type: "string"},
                {type: "string"},
                {}
            ],
            "fnInfoCallback": function( oSettings, iStart, iEnd, iMax, iTotal, sPre ) {
                // Add selected row count to footer
                var selected = this.api().rows('.selected').count();
                return sPre+(selected>0 ? '<br/>'+selected+' row(s) selected':'');
            }
        });

        // row selection checkboxes
        datatable.find("tbody").on('click', '.dt-select-cb', function(e){
            var row = $(this).parents().eq(3);
            if (row.hasClass('selected')) {
                row.removeClass('selected');
            } else {
                row.addClass('selected');
            }
            datatable.api().draw(false);
            e.stopPropagation();
        });

        $('table.dataTable th input:checkbox').on('change' , function(){
            var that = this;
            $(this).closest('table.dataTable').find('tr > td:first-child input:checkbox')
                .each(function(){
                    var row = $(this).parents().eq(3);
                    if ($(that).is(":checked")) {
                        row.addClass('selected');
                        $(this).prop('checked', true);
                    } else {
                        row.removeClass('selected');
                        $(this).prop('checked', false);
                    }
                });
            datatable.api().draw(false);
        });

        // dialogs
        $( "#addstockdialog" ).removeClass('hide').dialog({
                resizable: false,
                width: 'auto',
                modal: true,
                autoOpen: false,
                title: "Add Stock",
                title_html: true,
                buttons: [
                    {
                        html: "<i class='icon-save bigger-110'></i>&nbsp; Save",
                        "class" : "btn btn-success btn-xs",
                        click: function() {
                            saveItem(1);
                        }
                    }
                    ,
                    {
                        html: "<i class='icon-remove bigger-110'></i>&nbsp; Cancel",
                        "class" : "btn btn-xs",
                        click: function() {
                            $( this ).dialog( "close" );
                        }
                    }
                ],
            create: function( event, ui ) {
                // Set maxWidth
                $(this).css("maxWidth", "400px");
            }
        });
        $( "#editstockdialog" ).removeClass('hide').dialog({
            resizable: false,
            width: 'auto',
            modal: true,
            autoOpen: false,
            title: "Edit Stock",
            title_html: true,
            buttons: [
                {
                    html: "<i class='icon-save bigger-110'></i>&nbsp; Update",
                    "class" : "btn btn-success btn-xs",
                    click: function() {
                        saveItem(2);
                    }
                }
                ,
                {
                    html: "<i class='icon-remove bigger-110'></i>&nbsp; Cancel",
                    "class" : "btn btn-xs",
                    click: function() {
                        $( this ).dialog( "close" );
                    }
                }
            ],
            create: function( event, ui ) {
                // Set maxWidth
                $(this).css("maxWidth", "375px");
            }
        });
        $( "#transferstockdialog" ).removeClass('hide').dialog({
            resizable: false,
            width: 'auto',
            modal: true,
            autoOpen: false,
            title: "Transfer Stock",
            title_html: true,
            buttons: [
                {
                    html: "<i class='icon-save bigger-110'></i>&nbsp; Update",
                    "class" : "btn btn-success btn-xs",
                    click: function() {
                        saveItem(3);
                    }
                }
                ,
                {
                    html: "<i class='icon-remove bigger-110'></i>&nbsp; Cancel",
                    "class" : "btn btn-xs",
                    click: function() {
                        $( this ).dialog( "close" );
                    }
                }
            ],
            create: function( event, ui ) {
                // Set maxWidth
                $(this).css("maxWidth", "375px");
            }
        });
        $( "#stockhistdialog" ).removeClass('hide').dialog({
            resizable: false,
            width: 'auto',
            maxWidth: '700px',
            modal: true,
            autoOpen: false,
            title: "Stock History",
            title_html: true,
            buttons: [
                {
                    html: "<i class='icon-remove bigger-110'></i>&nbsp; Close",
                    "class" : "btn btn-xs",
                    click: function() {
                        $( this ).dialog( "close" );
                    }
                }
            ],
            create: function( event, ui ) {
                // Set maxWidth
                $(this).css("maxWidth", "700px");
            }
        });
        // fill location selects
        var locselect = $(".locselect");
        locselect.html('');
        for (key in WPOS.locations){
            if (key == 0){
                locselect.append('<option class="form-control locid-0" value="0">Warehouse</option>');
            } else {
                locselect.append('<option class="form-control locid-'+WPOS.locations[key].id+'" value="'+WPOS.locations[key].id+'">'+WPOS.locations[key].name+'</option>');
            }
        }

        // fill supplier selects
        var supselect = $(".supselect");
        supselect.html('');
        for (key in suppliers){
          supselect.append('<option class="form-control supid-'+suppliers[key].id+'" value="'+suppliers[key].id+'">'+suppliers[key].name+'</option>');
        }

        // hide loader
        WPOS.util.hideLoader();

        if (window.File && window.FileReader && window.FileList && window.Blob) {
          $('#files').bind('change', importStock);
        } else {
          alert('Update your browser.');
        }
    });
    // Update inventory

    function importStock(event) {
      var inventory = event.target.files[0];
      var reader = new FileReader();
      reader.readAsText(inventory);
      reader.onload = function (event) {
        var csv = event.target.result;
        var data = $.csv.toArrays(csv);
        for(var i=1; i<data.length;i++){
          if (data[i][4] === "0") {
            continue;
          }
          var item = {
            storeditemid: getStoredItemId(data[i][1]),
            locationid: getLocation(data[i][3]),
            amount: data[i][4],
            reorderpoint: data[i][5]
          };
          updateStock(item);
          var sitem = items[getStoredItemId(data[i][1])];
          sitem.supplierid = getSupplierId(data[i][2]);
          WPOS.sendJsonData("stock/supplier", JSON.stringify(sitem));
        }
      };
      reader.onerror = function () {
        alert('Unable to read ' + file.fileName);
      };
    }

    function getLocation(location) {
      var l = -1;
      for(var i in locations) {
        if(location === locations[0].name) {
          l = 0;
          break;
        } else if (location !== locations[i].name) {
          continue;
        } else {
          l = locations[i].id;
        }
      }
      if (l === -1) {
        alert(location + ' is not a registered location. Item will be added to Warehouse');
      }
      return l;
    }

    function updateStock(item) {
      if (WPOS.sendJsonData("stock/add", JSON.stringify(item))!==false){
        reloadTable();
      }
    }

    function getStoredItemId(name) {
      var n = '';
      for(var item in items) {
        if (items[item].name === name) {
          n = item;
        } else {
          continue;
        }
        n === ''? alert(name + ' is not in the stock.') : '';
        return n;
      }

    }

    function getSupplier(id) {
      var supplier = 'Unknown';
      for (var i in suppliers) {
        if (id == suppliers[i].id)
          supplier = suppliers[i].name;
      }
      return supplier;
    }

    function getSupplierId(name) {
      var supplier = 0;
      for (var i in suppliers) {
        if (name == suppliers[i].name)
          supplier = i;
      }
      return supplier;
    }
    // updating records
    function getStockHistory(id, locationid){
        WPOS.util.showLoader();
        var stockhist = WPOS.sendJsonData("stock/history", JSON.stringify({stockitemid: id, locationid: locationid}));
        // populate stock dialog with list
        $("#stockhisttable").html("");
        var hist;
        for (var i in stockhist){
            hist = stockhist[i];
            $("#stockhisttable").append('<tr><td>'+hist.name+'</td><td>'+hist.location+'</td><td>'+hist.type+(hist.auxid!=-1?(hist.auxdir==1?" from ":" to ")+(hist.auxid==0?"Warehouse":WPOS.locations[hist.auxid].name):"")+'</td><td>'+hist.amount+'</td><td>'+hist.dt+'</td></tr>');
        }
        WPOS.util.hideLoader();
        $("#stockhistdialog").dialog('open');
    }
    function deleteStockItem(id){
      var results = WPOS.sendJsonData("stock/delete", JSON.stringify(id));
      if (results) {
        reloadTable();
      }
    }
    function openEditStockDialog(id){
        var item = stock[id];
        $("#setstockid").val(item.id);
        $("#setstockname").val(item.name);
        $("#setstockinventoryid").val(item.stockinventoryid);
        $("#setstocklocid").val(item.locationid);
        $("#setstockqty").val(item.stocklevel);
        $("#setstockcost").val(item.cost);
        $("#setstockprice").val(item.price);
        $("#setstockexpiryDate").val(item.expiryDate);
        $("#setstockinventoryNo").val(item.inventoryNo);
        $("#setstockcode").val(item.code);
        $("#setstockreorderpoint").val(item.reorderPoint);
        $("#editstockdialog").dialog("open");
    }
    function openAddStockDialog(){
        populateItems();
        $("#addstockdialog").dialog("open");
    }
    function openTransferStockDialog(id){
        var item = stock[id];
        $("#tstockitem").val(id);
        $("#tstockitemid").val(item.stockinventoryid);
        $("#tstocklocid").val(item.locationid);
        $("#tstockreorderpoint").val(item.reorderpoint);
        $("#transferstockdialog").dialog("open");
    }
    function populateItems(){
        WPOS.util.showLoader();
        items = WPOS.sendJsonData("items/get");
        var itemselect = $(".itemselect");
        itemselect.html('');
        for (var i in items){
          itemselect.append('<option class="itemid-'+items[i].id+'" value="'+items[i].id+'">'+items[i].name+'</option>');
        }
        WPOS.util.hideLoader();
    }
    function saveItem(type){
        // show loader
        WPOS.util.showLoader();
        var item = {};
        switch (type){
        case 1:
            // adding new stock
            item.storeditemid = $("#addstockitemid option:selected").val();
            item.locationid = $("#addstocklocid option:selected").val();
            item.supplierid = $("#addstocksupid option:selected").val();
            item.amount = $("#addstockqty").val();
            item.reorderpoint = $("#addstockreorderpoint").val();
            item.cost = $("#addstockcost").val();
            item.price = $("#addstockprice").val();
            item.expiryDate = $("#addstockexpiryDate").val();
            item.inventoryNo = $("#addstockinventoryNo").val();
            item.code = $("#addstockcode").val();
            if (WPOS.sendJsonData("stock/add", JSON.stringify(item))!==false){
                reloadTable();
                $("#addstockdialog").dialog("close");
            }
            break;
        case 2:
            // set stock level
            item.id = $("#setstockid").val();
            item.name = $("#setstockname").val();
            item.stockinventoryid = $("#setstockinventoryid").val();
            item.locationid = $("#setstocklocid").val();
            item.stocklevel = $("#setstockqty").val();
            item.reorderPoint = $("#setstockreorderpoint").val();
            item.cost = $("#setstockcost").val();
            item.price = $("#setstockprice").val();
            item.expiryDate = $("#setstockexpiryDate").val();
            item.code = $("#setstockcode").val();
            item.inventoryNo = $("#setstockinventoryNo").val();
            if (WPOS.sendJsonData("stock/set", JSON.stringify(item))!==false){
                reloadTable();
                $("#editstockdialog").dialog("close");
            }
            break;
        case 3:
            // transfer stock
            item = stock[$("#tstockitem").val()];
            item.data = {};
            item.storeditemid = $("#tstockitemid").val();
            item.locationid = $("#tstocklocid").val();
            item.newlocationid = $("#tstocknewlocid").val();
            item.amount = $("#tstockqty").val();
            item.reorderpoint = $("#tstockreorderpoint").val();
            if (WPOS.sendJsonData("stock/transfer", JSON.stringify(item))!==false){
               reloadTable();
               $("#transferstockdialog").dialog("close");
            }
            break;
        }
        // hide loader
        WPOS.util.hideLoader();
    }
    function reloadTable(){
        stock = WPOS.getJsonData("stock/get");
        var stockarray = [];
        var tempstock;
        for (var key in stock){
            tempstock = stock[key];
            stockarray.push(tempstock);
        }
        datatable.fnClearTable(false);
        datatable.fnAddData(stockarray, false);
        datatable.api().draw(false);
    }
    function exportStock(){
        //var data  = WPOS.table2CSV($("#stocktable"));
        var filename = "stock-"+WPOS.util.getDateFromTimestamp(new Date());
        filename = filename.replace(" ", "");

        var data = {};
//        var items = WPOS.getJsonData('stock/get');
        var config = JSON.parse(localStorage.getItem('wpos_config'));
        var sortable=[];
        for(var key in items)
          if(items.hasOwnProperty(key))
            sortable.push([key, items[key]]);
        var sorted = sortable.sort(function(a, b) {
          return a[1].name.localeCompare(b[1].name);
        });
        for(var item in sorted) {
          data[item] = {
            id: sorted[item][0],
            name: sorted[item][1].name,
            description: "",
            supplier: '',
            locationid: config.deviceconfig.locationid,
            cost: 0.00,
            price: 0.00,
            stocklevel: "",
            reorderpoint: "",
            code: "",
            expiryDate: "31/12/2020",
            inventoryNo: "0000",
            taxName: "No VAT",
            category: "Medicine"
          };
        }


        var csv = WPOS.data2CSV(
            ['Name', 'Description', 'Supplier', 'Location', 'Unit Cost', 'Unit Price', 'Amount', 'Reorder Point', 'Item Code/Batch No', 'Expiry Date', 'Inventory No', 'Tax Name', 'Category Name'],
            ['name', 'description', 'supplier', {key:'locationid', func: function(value){ return WPOS.locations.hasOwnProperty(value) ? WPOS.locations[value].name : 'Unknown'; }}, 'cost', 'price', 'stocklevel', 'reorderpoint', 'code', 'expiryDate', 'inventoryNo', 'taxName', 'category'],
            data
        );

        WPOS.initSave(filename, csv);
    }

    var importdialog = null;
    function openImportDialog(){
      if (importdialog!=null) {
        importdialog.csvImport("destroy");
      }
      importdialog = $("body").csvImport({
        jsonFields: {
          'name': {title:'Name', required: true},
          'description': {title:'Description', required: false, value: ""},
          'supplier_name': {title:'Supplier Name', required: true},
          'location': {title:'Location', required: true},
          'cost': {title:'Unit Cost', required: true},
          'price': {title:'Unit Price', required: true},
          'amount': {title:'Amount', required: true},
          'reorderpoint': {title:'Reorder Point', required: false, value: "0"},
          'code': {title:'Item Code/Batch No', required: false, value: "0000"},
          'expiryDate': {title:'Expiry Date', required: false, value: "31/12/2020"},
          'inventoryNo': {title:'Inventory No', required: false, value: "0000"},
          'tax_name': {title:'Tax Name', required: false, value: "VAT"},
          'category_name': {title:'Category Name', required: false, value: "Medicine"}
        },
        csvHasHeader: true,
        importOptions: [
          {label: "Set unknown tax names to no tax", id:"skip_tax", checked:false},
          {label: "Create Items if doesn't exists", id:"add_items", checked:true},
          {label: "Create unknown suppliers", id:"add_suppliers", checked:true},
          {label: "Create unknown categories", id:"add_categories", checked:true}
        ],
        // callbacks
        onImport: function(jsondata, options){
          var data = [];
          for(var i=0; i<jsondata.length;i++){
            if (jsondata[i].amount === "0") {
              continue;
            }
            data.push({
              name: jsondata[i].name,
              description: jsondata[i].description,
              supplier_name: jsondata[i].supplier_name,
              locationid: getLocation(jsondata[i].location),
              cost: jsondata[i].cost,
              price: jsondata[i].price,
              amount: jsondata[i].amount,
              reorderPoint: jsondata[i].reorderpoint,
              code: jsondata[i].code,
              expiryDate: jsondata[i].expiryDate,
              inventoryNo: jsondata[i].inventoryNo,
              category_name: jsondata[i].category_name
            });
          }
          importItems(data, options);
        }
      });
    }

    function importItems(jsondata, options){
      showModalLoader("Importing Stock");
      var total = jsondata.length;
      setModalLoaderStatus("Uploading data...");
      var data = {"options":options, "import_data": jsondata};
      var result = WPOS.sendJsonDataAsync('stock/import/set', JSON.stringify(data), function(data){
        if (data!==false){
          WPOS.startEventSourceProcess(
            '/api/stock/import/start',
            function(data){
              if (data.hasOwnProperty('progress')) {
                setModalLoaderSubStatus(data.progress +" of "+ total);
                var progress = Math.round((100*data.progress)/total);
                setModalLoaderProgress(progress);
              }

              if (data.hasOwnProperty('status'))
                setModalLoaderStatus(data.status);

              if (data.hasOwnProperty('error')) {
                if (data.error == "OK") {
                  showModalCloseButton('Stock Import Complete!');
                } else {
                  showModalCloseButton("Error Importing Stock", data.error);
                }
                if (data.hasOwnProperty('data')){
                  // update table with imported items
                  for (var i in data.data) {
                    if (data.data.hasOwnProperty(i))
                      stock[i] = data.data[i];
                  }
                  reloadTable();
                }
              }
            },
            function(e){
              showModalCloseButton("Event feed failed "+ e.message);
            }
          );
        } else {
          showModalCloseButton("Stock Import Failed!");
        }
      }, function(error){
        showModalCloseButton("Stock Import Failed!", error);
      });
      if (!result)
        showModalCloseButton("Stock Import Failed!");
    }

    var eventuiinit = false;
    function initModalLoader(title){
      $("#modalloader").removeClass('hide').dialog({
        resizable: true,
        width: 400,
        modal: true,
        autoOpen: false,
        title: title,
        title_html: true,
        closeOnEscape: false,
        open: function(event, ui) { $(".ui-dialog-titlebar-close").hide(); }
      });
    }
    function showModalLoader(title){
      if (!eventuiinit){
        initModalLoader(title);
        eventuiinit = true;
      }
      $("#modalloader_status").text('Initializing...');
      $("#modalloader_substatus").text('');
      $("#modalloader_cbtn").hide();
      $("#modalloader_img").show();
      $("#modalloader_prog").show();
      var modalloader = $("#modalloader");
      modalloader.dialog('open');
    }
    function setModalLoaderProgress(progress){
      $("#modalloader_progbar").css('width', progress+"%")
      $("#modalloader_progbar").text(progress+"%");
    }
    function showModalCloseButton(result, substatus){
      $("#modalloader_status").text(result);
      setModalLoaderSubStatus(substatus? substatus : '');
      $("#modalloader_img").attr('src', '/assets/images/Check_mark.png');
      $("#modalloader_prog").hide();
      $("#modalloader_cbtn").show();
    }
    function setModalLoaderStatus(status){
      $("#modalloader_status").text(status);
    }
    function setModalLoaderSubStatus(status){
      $("#modalloader_substatus").text(status);
    }
</script>
<div id="modalloader" class="hide" style="width: 360px; height: 320px; text-align: center;">
  <img id="modalloader_img" style="width: 128px; height: auto;" src="/admin/assets/images/cloud_loader.gif"/>
  <div id="modalloader_prog" class="progress progress-striped active">
    <div class="progress-bar" id="modalloader_progbar" style="width: 100%;"></div>
  </div>
  <h4 id="modalloader_status">Initializing...</h4>
  <h5 id="modalloader_substatus"></h5>
  <button id="modalloader_cbtn" class="btn btn-primary" style="display: none; margin-top:40px;" onclick="$('#modalloader').dialog('close');">Close</button>
</div>

<style type="text/css">
    #itemstable_processing {
        display: none;
    }
</style>