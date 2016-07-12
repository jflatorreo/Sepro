<!DOCTYPE html>
<?php
header('Content-Type: text/html; charset=utf8');
?>
<html lang="en">
<head>
    <title id='Description'>Nuestro Equipo</title>
    <link rel="stylesheet" href="../js/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="../js/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="../js/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="../js/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="../js/jqwidgets/jqxsplitter.js"></script>
    <script type="text/javascript" src="../js/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="../js/jqwidgets/jqxdata.js"></script>
     <link rel="stylesheet" href="css/imagenes.css" type="text/css" />
    <script type="text/javascript">
        $(document).ready(function () {
            
            $("#splitter").jqxSplitter({  width: '100%', height: 400, panels: [{ size: '35%'}] });

            // prepare the data
            var data = new Array();

            var firstNames = ["Luis Ernesto Calderón Luna",
"Mateo Pachón Rincón",
"Victor Alfonso Quitiaquez Quitiaquez",
"Luisa Fernanda Rojas",
"Jose Sebastian Talero",
"Adrina Catalina Gutierrez Gómez"
];
                      
            var ids = ["avatar_apoyo",
                       "avatar_apoyo",
                       "avatar_apoyo",
                       "avatar_apoyo",
                       "avatar_apoyo",
                       "avatar_apoyo"];
            
            var imagenes=['<img style="max-width: 150px;" src="../images/'+ids[0]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[1]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[2]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[3]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[4]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[5]+'.jpg">',
                          ];

            var textos=['<th align="left" valign="top" scope="col"><table width="80%" border="0" cellspacing="0" cellpadding="0"><tr><th align="left" valign="top" class="style2" scope="col">Luis Ernesto Calderón Luna</th></tr></table></th>',
                        '<th align="left" valign="top" scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Mateo Pachón Rincón</th></tr><tr></table></th>',
                        '<th align="left" valign="top" scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th width="246"align="left"valign="top"class="style2"scope="col">Victor Alfonso Quitiaquez Quitiaquez</th></tr></table></th>',
                        '<th align="left" valign="top" scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Luisa Fernanda Rojas</th></tr></table></th>',
                        '<th align="left" valign="top" scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Jose Sebastian Talero</th></tr></table></th>',
                        '<th align="left" valign="top" scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Adrina Catalina Gutierrez Gómez</th></tr></table></th>',
                        ];

            var notes = ['<div id="container"><div id="floated_rigth">'+imagenes[0]+'</div>'+textos[0]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[1]+'</div>'+textos[1]+'</div>',
                         '<div id="container"><div id="floated_rigth">'+imagenes[2]+'</div>'+textos[2]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[3]+'</div>'+textos[3]+'</div>',
                         '<div id="container"><div id="floated_rigth">'+imagenes[4]+'</div>'+textos[4]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[5]+'</div>'+textos[5]+'</div>',
                         '<div id="container"><div id="floated_rigth">'+imagenes[6]+'</div>'+textos[6]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[7]+'</div>'+textos[7]+'</div>',
                         ];

            var k = 0;
            for (var i = 0; i < firstNames.length; i++) {
                var row = {};
                row["firstname"] = firstNames[k];
                row["ids"] = ids[k];
                row["notes"] = notes[k];
                data[i] = row;
                k++;
            }

            var source =
            {
                localdata: data,
                datatype: "array"
            };
            var dataAdapter = new $.jqx.dataAdapter(source);

            var updatePanel = function (index) {
                var container = $('<div style="margin: 5px;"></div>')
                var leftcolumn = $('<div style="float: left; width: 55%;"></div>');
                var rightcolumn = $('<div style="float: left; width: 40%;"></div>');
                container.append(leftcolumn);
                container.append(rightcolumn);

                var datarecord = data[index];

                var firstname = "<div style='margin: 10px;'><b>Integrante:</b> " + datarecord.firstname + "</div>";
                $(leftcolumn).append(firstname);

                var education = "<div style='clear: both; margin: 10px;'><div><b>Descripción:</b></div><div style='word-wrap: break-word;'>" +  $('#listbox').jqxListBox('getItem', index).value + "</div></div>";
                container.append(education);

                $("#ContentPanel").html(container.html());
            }

            $('#listbox').on('select', function (event) {
                updatePanel(event.args.index);
            });
      
            // Create jqxListBox
            $('#listbox').jqxListBox({ selectedIndex: 0,  source: dataAdapter, displayMember: "firstname", valueMember: "notes", itemHeight: 70, height: '100%', width: '100%',
                renderer: function (index, label, value) {
                    var datarecord = data[index];
                    var imgurl = '../images/' + datarecord.ids + '.jpg';
                    var img = '<img height="50" width="40" src="' + imgurl + '"/>';
                    var table = '<table style="min-width: 130px;"><tr><td style="width: 40px;" rowspan="2">' + img + '</td><td>' + datarecord.firstname + '</td></tr></table>';
                    return table;
                }
            });
            updatePanel(0);
        });
    </script>
</head>
<body class='default'>
    <h2>Estudiantes de Doctorado</h2>
    <div id="splitter">
        <div style="overflow: hidden;">
            <div style="border: none;" id="listbox">
            </div>
        </div>
        <div style="overflow: hidden;" id="ContentPanel">
        </div>
    </div>
</body>
</html>
