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

            var firstNames = ["Wilson Adarme Jaimes",
 "Luis Gerardo Astaiza Amado",
 "Juan Pablo Castrellon Torres",
 "John Willmer Escobar Velásquez",
 "Diego Fernando Hernández Losada",
 "Sonia Cecilia Mangones Matos",
 "Alberto Martínez",
 "Carlos Osorio Ramirez",
 "Leonardo Arturo Ronderos Lobo",
 "Hugo Felipe Salazar Sanabria",
 "Carlos Eduardo Sanchez Diaz",
 "Jairo Humberto Torres Acosta",
 "Juan Carlos Torres Pardo",
"Jorge Luis García Alcaraz",
"Jesus Gonzalez Feliu",
"Gustavo Gatica",
"José Holguín Veras"];
                      
            var ids = ["fotoprofe1",
                       "fotoprofe9",
                       "jpt",
                       "jwe",
                       "fotoprofe10",
                       "scm",
                       "fotoprofe6",
                       "cor",
                       "lar",
                       "fotoprofe3",
                       "",
                       "jht",
                       "jct",
                       "jlg",
                       "jgf",
                       "gg",
                       "jhv"];
            
            var imagenes=['<img style="max-width: 150px;" src="../images/'+ids[0]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[1]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[2]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[3]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[4]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[5]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[6]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[7]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[8]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[9]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[10]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[11]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[12]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[13]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[14]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[15]+'.jpg">',
                          '<img style="max-width: 150px;" src="../images/'+ids[16]+'.jpg">'
];
            var textos=['<th align="left" valign="top" scope="col"><table width="80%" border="0" cellspacing="0" cellpadding="0"><tr><th align="left" valign="top" class="style2" scope="col">Wilson Adarme Jaimes</th></tr><tr><th align="left" valign="top" class="style1" scope="col">Ingeniero Industrial Esp. en Producción</th></tr> <tr><th align="left" valign="top" class="style1" scope="col">MSc. en Ingeniería - Logística </th></tr><tr><th align="left" valign="top" class="style1" scope="col">PhD. Industria y Organizaciones (Logística)</th></tr><tr><th align="left" valign="top" class="style1" scope="col">Docente U.N. Director Grupo SEPRO</th></tr><tr><th align="left" valign="top" class="style1" scope="col">Área de Interés: Diseño de Estrategias de Coordinación </th></tr><tr><th align="left" valign="top" class="style1" scope="col">E-Mail: wadarmej@unal.edu.co </th></tr><tr><th align="left" valign="top" class="style1" scope="col"><a href="http://www.docentes.unal.edu.co/wadarmej" target="_blank"><u>www.docentes.unal.edu.co/wadarmej</u></a></th></tr><tr><th align="left" valign="top" class="style1" scope="col">&nbsp;</th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Luis Gerardo Astaiza</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ingeniero Mecánico U.N.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Magister en Ingeniería de Sistemas U.N.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Magister en Ingeniería Industrial e Investigación de Operaciones Universidad de Siracuse,Estados Unidos</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Docente</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Áreas de Interés:Simulación en C.S.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">E-mail:lgastaizaa@unal.edu.co</th></tr><tr><th align="left"valign="top"class="style1"scope="col"><a href="http://www.docentes.unal.edu.co/lgastaizaa/"target="_blank"><u>www.docentes.unal.edu.co/lgastaizaa</u></a></th></tr><tr><th align="left"valign="top"class="style1"scope="col">&nbsp;</th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th width="246"align="left"valign="top"class="style2"scope="col">Juan Pablo Castrellón</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Estudiante Maestria en Ingeniería Industrial,Universidad Nacional de Colombia</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ingeniero Industrial</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Cel.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">E-mail:jpcastrellont@unal.edu.co</th></tr><tr><th align="left"valign="top"scope="col">&nbsp;</th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">John Wilmer Escobar Velásquez</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ingeniero Industrial</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ph.D.in Automatic Control Systems and Operational Research</th></tr><tr><th align="left"valign="top"class="style1"scope="col">MSc.Ingenieria Industrial,Universidad del Valle</th></tr><tr><th align="left"valign="top"class="style1"scope="col">&nbsp;</th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Diego Fernando Hernandez Losada</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ingeniero Industrial U.N.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Magíster en Administración de Empresas de la Universidad del Valle</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Magíster en Economía de la Universidad Javeriana</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Master of Science in Finance de la Universidad de Illinois en Urbana-Champaign en los Estados Unidos</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Doctor en Ciencias Económicas U.N.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Docente</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Áreas de Interés:Finanzas y Riesgo en C.S.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">E-mail:<a href="mailto:dfhernandezl@unal.edu.co">dfhernandezl@unal.edu.co</a></th></tr><tr><th align="left"valign="top"class="style1"scope="col"><a href="http://www.docentes.unal.edu.co/dfhernandezl/"target="_blank"><u>www.docentes.unal.edu.co/dfhernandezl</u></a></th></tr><tr><th align="left"valign="top"class="style1"scope="col">&nbsp;</th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Sonia Cecilia Mangones Matos</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ingeniera Civil de la Universidad Nacional de Colombia</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Especialista Gestión Ambiental Urbana</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Maestría en Ingeniería – Transporte</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Áreas de Interés:Abasto/distribución,políticas públicas – planes y programas logística</th></tr><tr><th align="left"valign="top"class="style1"scope="col">E-mail:scmangonesm@unal.edu.co</th></tr><tr><th align="left"valign="top"class="style1"scope="col">&nbsp;</th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Alberto Martínez</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Antropólogo,U.N.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Maestría en Economia</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Especialista en Gestión Pública</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Doctorado en Salud Pública</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Docente</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Áreas de Interés:Sociología y Políticas Públicas en C.S.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">E-mail:albemartinez@unal.edu.co</th></tr><tr><th align="left"valign="top"class="style1"scope="col"><a href="http://www.docentes.unal.edu.co/albemartinez"target="_blank"><u>www.docentes.unal.edu.co/albemartinez</u></a></th></tr><tr><th align="left"valign="top"scope="col">&nbsp;</th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Carlos Osorio Ramírez</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Candidato a Ph.D.Ingeniería Industria y Organizaciones</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ingeniero Industrial</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Areas de interés:Logística Humanitaria,Resiliencia de la cadena de suministro,Gestión de Inventarios,Optimización</th></tr><tr><th align="left"valign="top"class="style1"scope="col"><div id="teacher_left"><a href="/cdn-cgi/l/email-protection#b2d1d3ddc1ddc0dbddc6f2c7dcd3de9cd7d6c79cd1dd">E-mail:caosoriora@unal.edu.co</a></div></th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Leonardo Arturo Ronderos Lobo</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ingeniero Civil de la Universidad Nacional de Colombia</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Magíster en Ingeniería Industrial de la Universidad de Los Andes</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Presidente de la Federación Colombiana de Logística FEDELOG</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Docente</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Áreas de Interés:Logística aeroportuaria.Comercio internacional.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">E-mail:leonardo.ronderos@gmail.com</th></tr><tr><th align="left"valign="top"class="style1"scope="col">&nbsp;</th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"scope="col"><strong class="style2">Hugo Felipe Salazar Sanabria</strong></th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ingeniero Industrial.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Especialista en Gerencia de la Producción Mejoramiento Continuo</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Profesor Especializaciones de la Universidad Pedagógica y Tecnológica de Colombia UPTC</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Áreas de Interés:Investigación de Operaciones en C.S.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">E-mail:<a href="http://www.docentes.unal.edu.co/wadarmej/docs/INVESTIGA_LOGISTICA/">hfsalazar@hotmail.com</a></th></tr><tr><th align="left"valign="top"class="style1"scope="col">&nbsp;</th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Carlos E.Sánchez Díaz</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ingeniero Eléctrico U.N.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Docente</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Áreas de Interés:Gestión en Tics.</th></tr><tr><th align="left"valign="top"class="style1"scope="col"><div id="teacher_left"><a href="/cdn-cgi/l/email-protection#177472647679747f726d73576279767b39727362397478">E-mail:cesanchezd@unal.edu.co</a></div></th></tr><tr><th align="left"valign="top"class="style1"scope="col"><a href="http://www.docentes.unal.edu.co/cesanchezd"target="_blank"><u>www.docentes.unal.edu.co/cesanchezd</tr><tr><th align="left"valign="top"class="style1"scope="col">&nbsp;</th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Jairo Humberto Torres Acosta</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ingeniero industrial</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Especialista en Ingeniería de Producción</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Magíster en Investigación de Operaciones</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Doctor en Ciencias Técnicas</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Áreas de Interés:Modelación matemática en CS,inventarios,abasto,políticas en logística</th></tr><tr><th align="left"valign="top"class="style1"scope="col">E-mail:jairohtorresa@gmail.com</th></tr><tr><th align="left"valign="top"class="style1"scope="col">&nbsp;</th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Juan Carlos Torres Pardo</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ingeniero de Sistemas Universidad Nacional de Colombia</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Especialización Informatica Y Ciencias De La Computación Fundación Universitaria Konrad Lorenz</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Maestría en Ingeniería de Sistemas U.N.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Docente</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Áreas de interés:Sistemas de información para la logística,Gestion de BD para la logística</th></tr><tr><th align="left"valign="top"class="style1"scope="col">E-mail:jctorresp@unal.edu.co</th></tr><tr><th align="left"valign="top"class="style1"scope="col">&nbsp;</th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Jorge Luis García Alcaraz</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ph.D.en Ciencias de la Ingeniería Industrial</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Especialista en Producción y Operaciones</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Profesor Investigador del Departamento de Ingeniería Industrial y Manufactura en el Instituto de Ingeniería y Tecnológica de la Universidad Autónoma de Ciudad Juárez.</th></tr><tr><th align="left"valign="top"class="style1"scope="col">México</th></tr><tr><th align="left"valign="top"class="style1"scope="col">&nbsp;</th></tr></table></th>',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Jesus Gonzalez Felliu</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Integrante del LET(Laboratoire d’Economie des Transports)</th></tr><tr><th align="left"valign="top"class="style1"scope="col">MSc.en Ingeniería Civil y Urbanismo en el INSA de Lyon(Francia)</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Ph.D.en ciencias de la computación y sistemas en el Politecnico di Torino(Italia)</th></tr><tr><th align="left"valign="top"class="style1"scope="col">&nbsp;</th></tr></table></th>',
                        '',
                        '<th align="left"valign="top"scope="col"><table width="80%"border="0"cellspacing="0"cellpadding="0"><tr><th align="left"valign="top"class="style2"scope="col">Jose Holguin-Veras</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Director of the Center for Infrastructure,Transportation,and the Environment(CITE).</th></tr><tr><th align="left"valign="top"class="style1"scope="col">Instituto Politécnico Renssealer</th></tr><tr><th align="left"valign="top"class="style1"scope="col">&nbsp;</th></tr></table></th>'
                        ];

            var notes = ['<div id="container"><div id="floated_rigth">'+imagenes[0]+'</div>'+textos[0]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[1]+'</div>'+textos[1]+'</div>',
                         '<div id="container"><div id="floated_rigth">'+imagenes[2]+'</div>'+textos[2]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[3]+'</div>'+textos[3]+'</div>',
                         '<div id="container"><div id="floated_rigth">'+imagenes[4]+'</div>'+textos[4]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[5]+'</div>'+textos[5]+'</div>',
                         '<div id="container"><div id="floated_rigth">'+imagenes[6]+'</div>'+textos[6]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[7]+'</div>'+textos[7]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[8]+'</div>'+textos[8]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[9]+'</div>'+textos[9]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[10]+'</div>'+textos[10]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[11]+'</div>'+textos[11]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[12]+'</div>'+textos[12]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[13]+'</div>'+textos[13]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[14]+'</div>'+textos[14]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[15]+'</div>'+textos[15]+'</div>',
                         '<div id="container"><div id="floated_left">'+imagenes[16]+'</div>'+textos[16]+'</div>',
                         
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
                var leftcolumn = $('<div style="float: left; width: 45%;"></div>');
                var rightcolumn = $('<div style="float: left; width: 40%;"></div>');
                container.append(leftcolumn);
                container.append(rightcolumn);

                var datarecord = data[index];

                var firstname = "<div style='margin: 10px;'><b>Integrante:</b> " + datarecord.firstname + "</div>";
                //var lastname = "<div style='margin: 10px;'><b>Last Name:</b> " + datarecord.lastname + "</div>";
                //var title = "<div style='margin: 10px;'><b>Title:</b> " + datarecord.title + "</div>";
                //var address = "<div style='margin: 10px;'><b>Address:</b> " + datarecord.address + "</div>";
                $(leftcolumn).append(firstname);
                //$(leftcolumn).append(lastname);
                //$(leftcolumn).append(title);
                //$(leftcolumn).append(address);

                //var postalcode = "<div style='margin: 10px;'><b>Postal Code:</b> " + datarecord.postalcode + "</div>";
                //var city = "<div style='margin: 10px;'><b>City:</b> " + datarecord.city + "</div>";
                //var phone = "<div style='margin: 10px;'><b>Phone:</b> " + datarecord.homephone + "</div>";
                //var hiredate = "<div style='margin: 10px;'><b>Hire Date:</b> " + datarecord.hiredate + "</div>";

                //$(rightcolumn).append(postalcode);
                //$(rightcolumn).append(city);
                //$(rightcolumn).append(phone);
                //$(rightcolumn).append(hiredate);

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
    <h2>Investigadores Principales</h2>
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
