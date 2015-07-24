$(document).ready(function () {

    $("#verticalSplitter").kendoSplitter({
        orientation: "vertical",
        panes: [
            {resizable: false, size: "50px"},
            {scrollable: false}
        ]
    });

    $("#horizontalSplitter").kendoSplitter({
        panes: [
            {collapsible: true, size: "180px"},
            {collapsible: false}
        ],
        orientation: "horizontal"
    });

    $("#treeView").kendoTreeView();

    $("#myGrid").kendoGrid({
        columns: [
            {title: "ID", field: "id"},
            {title: "Code", field: "code"},
            {title: "Number", field: "num"},
            {title: "Date", field: "date", format: "{0:MM/dd/yyyy}"}
        ],
        dataSource: {
            transport: {
                read: {
                    dataType: "json",
                    url: "data/person.json"
                }
            },
            schema: {
                model: {
                    fields: {
                        id: {type: "number"},
                        code: {type: "string"},
                        num: {type: "number"},
                        date: {type: "string"}
                    }
                }
            }
        },
        sortable: true,
        selectable: true
    });
});