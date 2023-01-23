<?php 

$pdf = new PDF_TextBox();
$pdf->AliasNbPages();


   
$pdf->AddPage();
$pdf->SetFont("Arial","B",12);
$pdf->SetXY(25,10);
$pdf->drawTextBox(utf8_decode("CONTRATO DE PRESTACIÓN  DE SERVICIOS"),155,10,'C','M','','false');
$pdf->SetXY(100,5);
$pdf->drawTextBox(utf8_decode($a['12']),155,10,'C','M','','false');
$pdf->SetXY(25,25);
$pdf->drawTextBox(utf8_decode("CONTRATO DE PRESTACIÓN DE SERVICIOS QUE CELEBRAN, POR UNA PARTE ASESORÍA, CONSTRUCCIÓN, INSTALACIÓN Y MANTENIMIENTO, S.A. DE C.V., A QUIEN EN LO SUCESIVO SE LE DENOMINARÁ COMO \"ACIMSA\", REPRESENTADA EN ESTE ACTO POR EL ING. JOAQUIN ACARDIO ANTONIO PAGAZA PEREZ, EN SU CARÁCTER DE REPRESENTANTE LEGAL, Y, POR LA OTRA ".$a['1'].", REPRESENTADA EN ESTE ACTO POR ".$a['2'].", EN SU CARÁCTER DE APODERADO LEGAL, A QUIEN EN LO SUCESIVO SE LE DENOMINARÁ COMO EL \"PRESTADOR DE SERVICIOS\", AL TENOR DE LAS SIGUIENTES DECLARACIONES Y CLÁUSULAS:"),160,50,'J','T','','false');
$pdf->SetXY(25,75);
$pdf->drawTextBox(utf8_decode("-D E C L A R A C I O N E S-"),155,10,'C','M','','false');
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(25,85);
$pdf->drawTextBox(utf8_decode('
I.	DECLARA "ACIMSA", POR CONDUCTO DE SU REPRESENTANTE LEGAL: '),155,10,'J','M','','false');
$pdf->SetFont('Arial','',12);
$pdf->SetXY(30,95);
$pdf->drawTextBox(utf8_decode("
I.1.	Que es una sociedad mercantil constituida conforme a las leyes de los Estados Unidos Mexicanos como consta en la escritura número 141309 del 19 de agosto de 1991 pasada ante la fe del Notario Público número 138 de la Ciudad de México y que su representada está inscrita en el Registro Federal de Contribuyentes bajo el número ACI910909830 y cuo objeto solcial consiste en Prestar, por si o a través de terceros, servicios de programación e instalación de redes de computación (Hardware), equipo de transmisiones (en todos sus medios y modalidades) y transporte de datos, de voz (routers, pasarelas, puentes, concentradores, repetidores, eliminadores, amplificadores, módems y todo aquel que sea necesario), aisladores de señal y todo lo relacionado con la instalación e infraestructura de telecomunicaciones.

I.2.	Que su representante legal acredita su personalidad para obligar jurídicamente a su representada en la formalización del presente contrato, mediante escritura pública número 141309.

I.3.	Que fue contratada por ". $a['13'] .", para la instalación de equipos de telecomunicación y telefonia y que en cumplimiento de este ha iniciado tales servicios en diversas ubicaciones en distintos puntos de la Republica Mexicana.

I.4.    Que requiere realizar la subcontratacion de servicios especializados con el \"PRESTADOR DE SERVICIOS\", a efecto de dar cumplimiento cabal a los servicios referidos en la declaracion inmediata anterioir, por ser necesarios para el completo desarrollo de ello y no formar parte del objeto o activadad preponderante de \"ACIMSA\", en terminos del articulo 13 de la Ley Federal del Trabajo.

I.5.    Que tiene su domicilio ubicado en Calle Alvaro Obregon #74 Col. Santa Anita, Iztacalco, CDMX, CP 08300.
"),155,140,'J','T','','false');
$pdf->SetXY(25,235);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('II.  DECLARA EL "PRESTADOR DE SERVICIOS", POR CONDUCTO DE SU REPRESENTANTE: '),155,10,'J','M','','false');
$pdf->SetXY(30,245);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
II.1.    Que es una sociedad mercantil constituida conforme a las leyes de los Estados Unidos Mexicanos, tal como consta en la escritura número". $a['7'] .", pasada ante la fe del Notario Público número ". $a['8'] ." de la ciudad de ". $a['9'] .", y que está inscrita en el Registro Federal de Contribuyentes bajo el número ". $a['10'] .""),155,30,'J','T','','false');

$pdf->AddPage();

$pdf->SetXY(30,10);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("II.2.   Que su representante legal cuenta con las facultades y capacidad jurídica para celebrar el presente contrato, como consta en la escritura número ". $a['7'] .", pasada ante la fe del Notario Público número ". $a['8'] ." de la ciudad de ". $a['9'] .".

II.3.   Que el objeto social del PRESTADOR DE SERVICIOS consiste en ".$a['22'].", y que no forma parte del objeto social, ni de la actividad preponderante de \"ACIMSA\", por lo que representa un servicio especializado requerido por ésta.

II.3.1. Que cuenta con el registro de servicios especializados ante la Secretaría del Trabajo y Previsión Social, bajo el número ".$a['21'].", a que se refieren los artículos 13 y 15 de la Ley Federal del Trabajo.

II.4.   Que reconoce y acepta que es el único patrón de todas y cada una de las personas que intervengan en el desarrollo y ejecución del objeto de este contrato, liberando a \"ACIMSA\" de cualquier responsabilidad laboral, civil, mercantil, administrativa, penal o de cualquier otra índole que pudiera derivarse como consecuencia de la ejecución del presente contrato.

II.5.   Que cuenta con la capacidad técnica, legal, financiera y administrativa para ejecutar los trabajos objeto del presente contrato.

II.6.   Que conoce los requerimientos exigidos por ". $a['13'] .".

II.7.   Que es su deseo celebrar el presente contrato con  ". '"ACIMSA"' . " con el fin de dar cumplimiento a las actividades requeridas por esta, derivadas de la declaración I, inciso I.4 anterior.
"),155,135,'J','T','','false');
$pdf->SetXY(30,145);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
Ambas partes manifiestan que, efectuadas las anteriores declaraciones, convienen en formalizar el presente contrato al tenor de las siguientes."),155,15,'J','T','','false');
$pdf->SetXY(25,160);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('CLÁUSULAS'),155,10,'C','M','','false');
$pdf->SetXY(25,170);
$pdf->drawTextBox(utf8_decode('PRIMERA: OBJETO DEL CONTRATO.'),155,10,'J','M','','false');
$pdf->SetXY(30,180);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
\"ACIMSA\" encomienda al \"PRESTADOR DE SERVICIOS\" la realización de los servicios de ".$a["5"]."".$a["12"]."  en los inmuebles de ".$a["13"].", tanto en lo técnico como en lo documental, de tal suerte que éstos puedan ser entregados, facturados y cobrados por \"ACIMSA\" a ".$a["13"].". Dichas acciones consistirán, de forma enunciativa y no limitativa, en ".$a["4"].",".$a["11"]." (detallar modo, tiempo y lugar de cada servicio en particular que no esté dentro del objeto social de la empresa).

El \"PRESTADOR DE SERVICIOS\" prestará los servicios de acuerdo al \"Anexo I\" del presente contrato.

Asimismo, para el cumplimiento del presente contrato, intervendrán ".$a["15"]." trabajadores del \"PRESTADOR DE SERVICIOS\", en términos del artículo 14 de la Ley Federal del Trabajo.
"),155,75,'J','T','','false');
$pdf->SetXY(25,255);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('SEGUNDA: PRECIOS.'),155,10,'J','M','','false');
$pdf->SetXY(30,265);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
El monto preciso por cada servicio prestado será determinado por las órdenes de
"),155,15,'J','T','','false');

$pdf->AddPage();
$pdf->SetXY(30,10);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
compra que se deriven del presente contrato, mismas que reflejarán los precios determinados en el catálogo de precios que se contiene en el \"Anexo I\" del presente contrato."),155,20,'J','T','','false');
$pdf->SetXY(25,30);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('TERCERA: FORMA Y CONDICIONES DE PAGO.'),155,10,'J','M','','false');
$pdf->SetXY(30,40);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
El pago por cada orden de compra se efectuará a los 30 (treinta) días naturales contados a partir de la presentación de la factura respectiva, misma que deberá cumplir con los requisitos exigidos por la legislación fiscal y los solicitados por \"ACIMSA\".

El pago de las cantidades arriba señaladas, no se considerarán como aceptación definitiva de las obras, en virtud de que \"ACIMSA\" se reserva el derecho de reclamar por obras faltantes o mal ejecutadas, o pago en exceso o pago de lo indebido, dentro del período de garantía.
"),155,45,'J','T','','false');
$pdf->SetXY(25,85);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('CUARTA:  FORMA, CONDICIONES DE ENTREGA Y PROGRAMA DEL SERVICIO PRESTADO.'),155,10,'J','M','','false');
$pdf->SetXY(30,95);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
El \"PRESTADOR DE SERVICIOS\" se obliga a entregar a \"ACIMSA\" los trabajos objeto del presente contrato de acuerdo con el programa de trabajo contenido en cada orden de compra derivada del presente contrato.

\"ACIMSA\" y el \"PRESTADOR DE SERVICIOS\" levantarán acta circunstanciada de todas aquellas juntas, especificando los acuerdos o discrepancias técnicas existentes, e indicando, en su caso, la aceptación o rechazo de los trabajos y las causas que lo motivaron. Dichas actas deberán ser firmadas por las partes.

En el caso de que exista alguna actividad prioritaria para \"ACIMSA\" que demande reducir tiempos de entrega o reprogramaciones de estos, ésta se notificará al \"PRESTADOR DE SERVICIOS\", quien deberá actuar en consecuencia para realizar los trabajos que le sean requeridos en forma anticipada o reprogramada, iniciando estos trabajos inmediatamente a la recepción del aviso, para lo cual ambas partes se someterán al procedimiento establecido en la cláusula Décima Segunda del presente contrato.

En caso de presentarse algún cambio en las actividades programadas, ambas partes se reunirán para determinar las acciones a seguir para efectuar dichos cambios, en el caso de no llegar a algún acuerdo, \"ACIMSA\" podrá cancelar las porciones correspondientes de los servicios no ejecutados o podrá dictaminar la terminación anticipada del presente contrato.
"),155,100,'J','T','','false');

$pdf->SetXY(25,195);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('QUINTA: COMPENSACIÓN FINANCIERA.'),155,10,'J','M','','false');
$pdf->SetXY(30,205);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
Por cada día de retraso en la entrega de uno o más servicios del presente contrato, por causas imputables al \"PRESTADOR DE SERVICIOS\" y de conformidad con el programa de entregas contenido en cada orden de compra que se derive del presente contrato, el \"PRESTADOR DE SERVICIOS\" se compromete a pagar a \"ACIMSA\" una compensación financiera del 1% (uno por ciento) sobre el valor total del servicio  por cada día de atraso en este respecto del programa de obra referido por cada día de atraso en este respecto del programa de obra referido, hasta un máximo del 10% (diez por ciento) del valor total del mismo.

En caso de presentarse un atraso mayor a diez días naturales, ambas partes se reunirán para determinar las acciones a tomar para completar la ejecución de los servicios retrasados, si no se llegare a un acuerdo; \"ACIMSA\", además de aplicar las penas convencionales correspondientes, podrá determinar la rescisión del presente contrato, de acuerdo a la cláusula Décima Séptima del presente contrato, a juicio de \"ACIMSA\"."),155,75,'J','T','','false');
$pdf->AddPage();
$pdf->SetXY(30,10);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
Las partes convienen, adicionalmente a lo establecido en el primer párrafo de esta cláusula, en fijar una pena convencional a cargo del \"PRESTADOR DE SERVICIOS\" del 5% (cinco por ciento) del valor total de los trabajos amparados por el presente contrato para el caso de atraso en el tiempo máximo comprometido (terminación total de la obra que se encomienda), por cada semana de atraso, con un periodo de gracia de una semana.

La compensación financiera, mencionada en los puntos anteriores, será pagada por el \"PRESTADOR DE SERVICIOS\" a \"ACIMSA\" dentro de los 30 (treinta) días naturales posteriores a la entrega real, o se descontarán del pago de las facturas respectivas o bien que estuviesen pendientes de pago, situación que en este acto expresamente autoriza el \"PRESTADOR DE SERVICIOS\".
"),155,60,'J','T','','false');
$pdf->SetXY(25,70);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('SEXTA: FORMA, CONDICIONES DE ENTREGA Y PROGRAMA DEL SERVICIO PRESTADO.'),155,10,'J','M','','false');
$pdf->SetXY(30,80);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
El \"PRESTADOR DE SERVICIOS\" se compromete a garantizar la ejecución de los servicios efectuados, durante un periodo de 12 (doce) meses contados a partir de la fecha de entrega – recepción de los trabajos real, mediante reparación o sustitución de los materiales por él suministrados que resulten con defectos, que influyan sobre el correcto y continuo funcionamiento de las instalaciones objeto del presente contrato, originado por deficiencias en las técnicas, métodos y materias primas empleadas en su construcción, vicios ocultos o por cualquier otra causa imputable exclusivamente al \"PRESTADOR DE SERVICIOS\", para lo cual \"ACIMSA\" deberá avisar por escrito al \"PRESTADOR DE SERVICIOS\" sobre el particular.

En caso de que el \"PRESTADOR DE SERVICIOS\" no cumpla con lo establecido en el párrafo anterior, \"ACIMSA\" corregirá las anomalías reportadas sin que esto deje sin efecto las garantías establecidas, siempre y cuando dichas correcciones sean llevadas a cabo, dejando en plena libertad a \"ACIMSA\" para ejercitar cualquier otro derecho que en virtud de la ley o del presente contrato le corresponda. Todos los cargos resultantes de este concepto serán reembolsados a \"ACIMSA\" por el \"PRESTADOR DE SERVICIOS\" en un plazo no mayor de 30 (treinta) días naturales después de haber efectuado los gastos, de conformidad a los precios unitarios acordados por las partes. En caso de no efectuar el reembolso en el plazo señalado, el \"PRESTADOR DE SERVICIOS\" autoriza a \"ACIMSA\" para descontar de cualquier saldo pendiente de pago dicho importe o de cualquier otro pago que tuviese pendiente de efectuar.
 
Si al concluir el periodo de garantía citado anteriormente, persistieren aún las fallas que fueron reportadas dentro de dicho periodo e imputables a las actividades desarrolladas por el \"PRESTADOR DE SERVICIOS\" o las instalaciones no funcionan a satisfacción de \"TELMEX(cliente)\", estas garantías se ampliarán hasta que queden eliminadas las deficiencias en los términos de la presente cláusula.

El \"PRESTADOR DE SERVICIOS\" garantiza la mano de obra y los materiales propios que suministre correspondientes al plazo de garantía de los trabajos amparados por este contrato durante la vigencia de este, en la mano de obra y materiales suministrados que hayan sido sustituidos.
A la terminación de este contrato el \"PRESTADOR DE SERVICIOS\" y \"ACIMSA\" levantará un acta de recepción que garantice que los trabajos realizados se encuentran en condiciones óptimas, con la firma de aceptación de \"ACIMSA\"."),155,170,'J','T','','false');
$pdf->SetXY(25,250);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('SÉPTIMA: IMPUESTOS.'),155,10,'J','M','','false');
$pdf->SetXY(30,260);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
Cada una de las partes será responsable por los impuestos que le correspondan."),155,10,'J','T','','false');

$pdf->AddPage();
$pdf->SetXY(25,10);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('OCTAVA: RIESGOS.'),155,10,'J','M','','false');
$pdf->SetXY(30,20);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
El \"PRESTADOR DE SERVICIOS\" será responsable por cualquier riesgo en su personal, maquinaria y equipos desde el inicio de actividad hasta la entrega a satisfacción de \"ACIMSA\", por lo que se obliga a contratar los seguros correspondientes, siendo el riesgo por daños y responsabilidad civil ante terceros de el \"PRESTADOR DE SERVICIOS\".

A fin de dar cumplimiento al objeto del presente contrato, \"ACIMSA\" pone en posesión material del inmueble en donde deban realizarse los trabajos al \"PRESTADOR DE SERVICIOS\", siendo en consecuencia este último el único y absoluto responsable por la seguridad del inmueble, así como de sus contenidos durante el tiempo que duren los trabajos y hasta el momento en que personal autorizado de \"ACIMSA\" reciba los trabajos objeto del presente contrato, por lo que el \"PRESTADOR DE SERVICIOS\" se obliga a tomar las medidas de seguridad que resulten necesarias a fin de resguardar el inmueble y sus contenidos.

El \"PRESTADOR DE SERVICIOS\" se obliga a permitir el acceso al inmueble a que se refiere el párrafo anterior, únicamente a los empleados de éste que vayan a participar en la realización de las actividades por lo que por ningún motivo permitirá el acceso a personas ajenas a dicho personal.
"),155,90,'J','T','','false');
$pdf->SetXY(25,110);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('NOVENA: FIANZA.'),155,10,'J','M','','false');
$pdf->SetXY(30,120);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
    A efecto de garantizar la debida aplicación de los flujos de efectivo otorgados por \"ACIMSA\" para el cumplimiento del contrato, así como el debido cumplimiento de todas y cada una de las obligaciones derivadas del presente contrato a cargo del \"PRESTADOR DE SERVICIOS\", este entregará a \"ACIMSA\", una fianza que deberá ser otorgada por una institución mexicana debidamente autorizada por la Secretaría de Hacienda y Crédito Público, la cual deberá ser expedida a favor y satisfacción de \"ACIMSA\" por el 30% (treinta por ciento) del valor total del presente contrato. ."),155,40,'J','M','','false');
$pdf->SetXY(25,160);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode("DÉCIMA:  OBLIGACIONES DE \"ACIMSA\"."),155,10,'J','M','','false');
$pdf->SetXY(30,170);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
1.   \"ACIMSA\" se obliga a cumplir con todas y cada una de las obligaciones a su cargo en el presente contrato.

2.  \"ACIMSA\" tendrá la obligación de informar al \"PRESTADOR DE SERVICIOS\", tan pronto como se detecten, defectos que puedan ser sujetos a las garantías establecidas en la cláusula Sexta y permitirá al \"PRESTADOR DE SERVICIOS\" inspeccionarlos e iniciar las acciones tendientes a remediarlos en el lugar donde se encuentren, dentro de los siguientes 2 (dos) días naturales siguientes a que el \"PRESTADOR DE SERVICIOS\" reciba la mencionada información. No obstante, si \"ACIMSA\" no informa en el plazo establecido al \"PRESTADOR DE SERVICIOS\", la garantía permanecerá vigente.
"),155,55,'J','M','','false');
$pdf->SetXY(25,225);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode("DÉCIMA PRIMERA:  OBLIGACIONES DEL \"PRESTADOR DE SERVICIOS\"."),155,10,'J','M','','false');
$pdf->SetXY(30,235);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
1.  El \"PRESTADOR DE SERVICIOS\" se obliga a cumplir todas y cada una de las obligaciones a su cargo, establecidas en el presente contrato, así como contar con el registro ante la Secretaría del Trabajo y Previsión Social para proporcionar servicios de subcontratación vigente.

2.  Contar con el personal debidamente capacitado para proporcionar servicio de garantía y asegurar así el correcto funcionamiento de las actividades encomendadas del presente de acuerdo con las garantías indicadas en el mismo "),155,40,'J','T','','false');
$pdf->AddPage();
$pdf->SetXY(30,10);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("a partir de la fecha de entrega de los trabajos.

3.  Entregar a \"ACIMSA\" los servicios materia de este contrato en las fechas, condiciones y términos establecidos en el presente contrato, realizándolos de acuerdo con los alcances y normas técnicas constructivas de ".$a["13"].", así como los procedimientos administrativos exigidos por ella misma.

4.  Abrir y mantener correctamente actualizadas la o las bitácoras de obra, según sea el caso, de los trabajos que se le encomiendan a través del presente contrato.

5.  El \"PRESTADOR DE SERVICIOS\" se obliga a presentar los informes de avances solicitados por \"ACIMSA\", así como un informe del resultado final de los trabajos y actividades desarrolladas para cumplir con el objeto del presente contrato.

6.  El \"PRESTADOR DE SERVICIOS\" se obliga a elaborar y someter a la aprobación del representante de \"ACIMSA\", los números generadores relativos a las actividades y volúmenes efectivamente realizados durante el trabajo.

7.  Si al concluir los trabajos asignados al \"PRESTADOR DE SERVICIOS\", existieran sobrantes de equipo y/o materiales que le hayan sido suministrados por \"ACIMSA\" y/ o ".$a["13"].", para el cumplimiento del contrato, el \"PRESTADOR DE SERVICIOS\" deberá efectuar la devolución de los materiales sobrantes a \"ACIMSA\" y/o ".$a["13"]." dentro de los 2 (dos) días naturales siguientes a la terminación de los trabajos objeto del presente contrato, previa conciliación de los materiales suministrados al \"PRESTADOR DE SERVICIOS\", en la bodega que \"ACIMSA\" y/o ".$a["13"]." al efecto le indique, por lo que dicha devolución será sin costo alguno para \"ACIMSA\" y/o ".$a["13"].".

8.  Tomar las medidas necesarias cuando se afecte los intereses de \"ACIMSA\", ".$a["13"]." y/o, en general, de terceros, por conducta inadecuada o violenta por parte de los trabajadores del \"PRESTADOR DE SERVICIOS\", debiendo el \"PRESTADOR DE SERVICIOS\" informar a \"ACIMSA\" sobre dichas medidas.

9.  Cumplir en tiempo y forma con el programa de obra acordado por ambas partes.

10. Tramitar y obtener todos los permisos y licencias que resulten necesarios para la ejecución de la obra que se le encomienda.
"),155,190,'J','T','','false');
$pdf->SetXY(25,200);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('DÉCIMA SEGUNDA: OBLIGACIONES CONJUNTAS.'),155,10,'J','M','','false');
$pdf->SetXY(30,210);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
1.   En caso de que \"ACIMSA\" requiera una ampliación o modificación de un servicio prestado, una vez iniciado, el \"PRESTADOR DE SERVICIOS\" la realizará, asentándose tal circunstancia en la bitácora de obra correspondiente.

2.  Todo cambio a los trabajos objeto del presente contrato, ya sea propuesto por el \"PRESTADOR DE SERVICIOS\" o por \"ACIMSA\" derivado de órdenes o reglamentos de cualquier autoridad, con el fin de cumplir con las disposiciones legales que entren en vigor con posterioridad a la firma del presente contrato, deberá ser aprobado por ambas partes mediante un convenio por escrito y firmado por los representantes legales de \"ACIMSA\" y del \"PRESTADOR DE SERVICIOS\" y agregarse al presente contrato para todos los efectos a que haya lugar.  Dicho convenio deberá especificar todo cambio, ya sea referente a precios, fechas de entrega términos de pago, según sea el caso.
"),155,65,'J','T','','false');

$pdf->AddPage();

$pdf->SetXY(30,10);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
Ninguna de las partes deberá efectuar cambio alguno hasta en tanto no exista el acuerdo debidamente firmado por ambas partes."),155,15,'J','T','','false');


$pdf->SetXY(25,25);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('DÉCIMA TERCERA: GENERALIDADES.'),155,10,'J','M','','false');

$pdf->SetXY(30,35);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("1.   El \"PRESTADOR DE SERVICIOS\" en ningún caso podrá subcontratar con terceros la ejecución parcial o total de los trabajos objeto del presente contrato sin la autorización previa y por escrito de \"ACIMSA\", siendo en todo caso el \"PRESTADOR DE SERVICIOS\", durante la vigencia del presente contrato, el único responsable ante \"ACIMSA\" de la calidad de los trabajos realizados con base en el presente contrato, no obstante lo anterior, el \"PRESTADOR DE SERVICIOS\" otorga su consentimiento para que \"ACIMSA\" para que en caso de reclamaciones por parte de un tercero,  originados por los servicios objeto del presente contrato y que ocasionen algún problema a \"ACIMSA\", este pueda retener cualquier pago pendiente hasta en tanto se soluciona dicho problema.

2.  Los representantes autorizados indicados en la cláusula Décima Novena estarán capacitados para firmar la correspondencia relativa al presente contrato y su ejecución, los representantes no tendrán facultades para convenir cambios al contrato.

A solicitud de cualquiera de las partes contratantes, los representantes tramitarán lo necesario a efecto de llevar reuniones para la revisión y evaluación del cumplimiento de los trabajos objeto del presente contrato.

3.  Con la salvedad señalada en la cláusula octava, el \"PRESTADOR DE SERVICIOS\" será responsable ante \"ACIMSA\", ante terceros y, en su caso, ante cualquier autoridad, de los accidentes y/o siniestros causados directa o indirectamente por el \"PRESTADOR DE SERVICIOS\" o por sus empleados, ya sea en los equipos, materiales, herramientas y, en general, a las instalaciones del cliente o propiedades de \"ACIMSA\" y/o de terceros, derivados del cumplimiento del objeto del presente contrato, en el mismo sentido también será responsable el \"PRESTADOR DE SERVICIOS\" por los daños y perjuicios que en su caso se llegasen a ocasionar por su personal, por incumplimiento del presente contrato y/o los términos y condiciones acordados por las partes, siempre y cuando sea imputable al \"PRESTADOR DE SERVICIOS o a su personal.

4.  El \"PRESTADOR DE SERVICIOS\" guardará estricta confidencialidad con respecto a la documentación e información impresa, verbal, audiovisual o de cualquier otra índole que \"ACIMSA\" le proporcione para el cumplimiento del objeto del presente contrato.  En caso de trasgresión a lo especificado en el presente punto, el \"PRESTADOR DE SERVICIOS\" se obliga a cubrir a \"ACIMSA\" a título de pena convencional, una cantidad igual al monto señalado en todas las órdenes de compra que deriven del presente instrumento. 
"),155,170,'J','T','','false');
$pdf->SetXY(25,205);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode("DÉCIMA CUARTA: DE RESPONSABILIDAD LABORAL"),155,10,'J','M','','false');
$pdf->SetXY(30,215);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
Ambas partes acuerdan que, para efectos laborales, el presente contrato deberá entenderse solamente como la prestación de servicios especializados, por lo que \"ACIMSA\" no podrá ser considerado como patrón ante ningún trabajador del \"PRESTADOR DE SERVICIOS\".

Asimismo, el \"El \"PRESTADOR DE SERVICIOS\" será el único responsable de las obligaciones derivadas de las disposiciones legales y demás ordenamientos en la materia de trabajo y seguridad social, respecto al personal que llegaré a intervenir en la prestación de los servicios contratados.  El \"PRESTADOR DE SERVICIOS\" conviene por lo mismo en responder ante el INSTITUTO MEXICANO DEL SEGURO SOCIAL (IMSS), así como cualquier otro organismo público o dependencia, de todas las reclamaciones que sus trabajadores presentasen en su contra o en contra de \"ACIMSA\" o de terceros en relación con "),155,60,'J','T','','false');

$pdf->AddPage();
$pdf->SetXY(30,10);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("los trabajos materia de este contrato.

Como consecuencia de lo anterior, el \"PRESTADOR DE SERVICIOS\" se obliga a sacar en paz y a salvo tanto a \"ACIMSA\" como a ".$a["13"].", a sus empleados, directores, gerentes, contratistas y afiliados de cualquier controversia que llegare a suscitarse como consecuencia de la relación laboral del \"PRESTADOR DE SERVICIOS\" y sus trabajadores.

De igual manera el \"PRESTADOR DE SERVICIOS\" se obliga a cubrir los daños y perjuicios que pudieran derivarse de una declaración de responsabilidad solidaria con \"ACIMSA\" en virtud de un incumplimiento de las obligaciones a que se refiere el artículo 14 de la Ley Federal del Trabajo.
"),155,55,'J','T','','false');


$pdf->SetXY(25,65);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('DÉCIMA QUINTA: CASO FORTUITO O FUERZA MAYOR.'),155,10,'J','M','','false');
$pdf->SetXY(30,75);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
    Ninguna de las partes será considerada como responsable ni estará sujeta a la imposición de sanciones por incumplimiento o demora de sus obligaciones materia de este contrato, cuando dicho incumplimiento o demora sea motivado por casos fortuitos o de fuerza mayor tales como: guerra, guerrilla, actos de terrorismo, secuestro, motín, disturbio, incendio, inundación, temblor, terremoto, erosión, cataclismo, o de manera general cualquier causa fuera de control de cualesquiera de las partes o no atribuible a ellas siempre que se imposibilite la ejecución de los servicios objeto del presente contrato.  En tal caso, la parte afectada comunicará a la otra dentro de las 24 horas siguientes al acontecimiento.  Toda la información disponible relacionada al mismo, en la medida en que las circunstancias lo permitan, será proporcionada por la parte afectada a la otra parte a la brevedad posible.
"),155,60,'J','T','','false');

$pdf->SetXY(25,135);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('DÉCIMA SEXTA: TERMINACIÓN ANTICIPADA.'),155,10,'J','M','','false');
$pdf->SetXY(30,145);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
\"ACIMSA\" podrá dar por terminado anticipadamente el presente contrato sin expresión de causa y sin incurrir en responsabilidad, con el único requisito de dar aviso por escrito al \"PRESTADOR DE SERVICIOS\", con una anticipación de 24 (veinticuatro) horas a la fecha efectiva de terminación y en donde \"ACIMSA\" efectuará los pagos por los servicios ya realizados y/o recibidos al momento de terminación anticipada."),155,35,'J','T','','false');
$pdf->SetXY(25,180);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('DÉCIMA SEPTIMA: CAUSALES DE RESCISIÓN Y TERMINACIÓN ANTICIPADA.'),155,10,'J','M','','false');
$pdf->SetXY(30,190);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
\"ACIMSA\" podrá rescindir el presente contrato en forma inmediata y sin necesidad de declaración judicial mediando solamente un comunicado por escrito en los siguientes casos:

a)  Por incumplimiento por parte del \"PRESTADOR DE SERVICIOS\" a cualesquiera de las obligaciones estipuladas en el presente contrato.

b)  Por resolución o mandamiento de autoridad administrativa o judicial que así lo ordene."),155,45,'J','T','','false');
$pdf->SetXY(25,235);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('DÉCIMA OCTAVA: VALIDEZ ENTRADA EN VIGOR Y PLAZO DE EJECUCIÓN.'),155,10,'J','M','','false');
$pdf->SetXY(30,245);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
Las partes acuerdan que el presente contrato rija las relaciones que las partes mantengan a partir de su firma y permanecerá vigente hasta que se cumplan los periodos de garantía y las obligaciones que el \"PRESTADOR DE SERVICIOS\" contrae en el presente contrato.
"),155,30,'J','T','','false');

$pdf->AddPage();

$pdf->SetXY(25,10);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('DÉCIMA NOVENA: CAUSALES DE RESCISIÓN Y TERMINACIÓN ANTICIPADA.'),155,10,'J','M','','false');
$pdf->SetXY(30,20);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("  
Las partes designan como sus representantes autorizados para los efectos del contrato a las siguientes personas:

\"ACIMSA\"
ING. JOAQUIN ACARDIO ANTONIO PAGAZA PEREZ
Cargo: Representante
Domicílio: Álvaro Obregón Nº 74 Col. Santa Anita, México, D.F.
Tel.: 55388260
E-mail: apagaza@acimsa.com 


\"". $a['3'] ."\"
". $a['2'] ."
Cargo: Representante
Domicílio: ". $a['11'] ."
Tel.: ". $a['17'] ."
E-mail: ". $a['18'] ."
"),155,90,'J','T','','false');
$pdf->SetXY(25,110);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('VIGESIMA: ACUERDO TOTAL Y PREVALENCIA.'),155,10,'J','M','','false');
$pdf->SetXY(30,120);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
El presente contrato constituye el acuerdo total entre las partes, dejando sin efecto cualquier otro acuerdo que las partes hayan tenido ya sea de manera verbal o por escrito anterior a esta fecha.
"),155,20,'J','T','','false');
$pdf->SetXY(25,140);
$pdf->SetFont('Arial','B',12);
$pdf->drawTextBox(utf8_decode('VIGESIMO PRIMERA: INTERPRETACION Y JURISDICCIÓN'),155,10,'J','M','','false');
$pdf->SetXY(30,150);
$pdf->SetFont('Arial','',12);
$pdf->drawTextBox(utf8_decode("
En caso de cualquier divergencia en la interpretación del presente contrato, o en la solución de cualquier controversia que se derive del mismo, y que no pueda ser resuelto satisfactoriamente por las partes, se someterán incondicional e irrevocablemente a las disposiciones establecidas en las leyes mexicanas y en específico a los Tribunales de la Ciudad de México,  en consecuencia, las partes expresamente renuncian a cualquier otro fuero que le pudiera corresponder en razón de sus domicilios particulares presentes o futuros, o por cualquier otra causa.

Leído que fue el presente contrato y sus anexos los ratifican y firman por triplicado los que en el intervinieron y declaran que no existe error, dolo, mala fe o vicio alguno que altere su libre consentimiento, en la Ciudad de México, a ".$a['19'].".

"),155,70,'J','T','','false');





$pdf->AddPage();

$pdf->SetXY(10,20);
$pdf->drawTextBox(utf8_decode("\"ACIMSA\""),90,10,'C','T','','false');
$pdf->SetXY(10,55);
$pdf->Image('firmas/pagaza.jpg',20,30, 60, 40);
$pdf->drawTextBox(utf8_decode('
___________________________________
REPRESENTANTE LEGAL
JOAQUIN ACARDIO ANTONIO PAGAZA PEREZ'),90,30,'C','T','','false'  );
$pdf->SetXY(115,20);
$pdf->drawTextBox(utf8_decode("\"PRESTADOR DE SERVICIOS\""),90,10,'C','T','','false');
$pdf->SetXY(115,55);
if (file_exists('firmas/'.$id.'.jpg')) {
    $pdf->Image('firmas/'.$id.'.jpg',125,30, 60, 40);
}
$pdf->drawTextBox(utf8_decode("
___________________________________  
REPRESENTANTE LEGAL          
". utf8_encode($a['2']) .""),90,30,'C','T','','false');
$pdf->SetXY(30,105);
$pdf->Image('firmas/su.jpg',30,80, 75, 40);
$pdf->drawTextBox(utf8_decode('
_______________________________
   SUJEY REYES LOPEZ
   TESTIGO'),75,20,'C','T','','false');
$pdf->SetXY(105,105);
$pdf->Image('firmas/ev.jpg',115,80, 75, 40);
$pdf->drawTextBox(utf8_decode('
______________________________
   EVARISTO MONDRAGON LOPEZ
   TESTIGO'),75,20,'C','T','','false');



// ,'','false'

$hoy=date("d-m-Y H:i:s");
$ruta=trim("C:/Info/Personal/ProveedoresContratos/".$a['3']."/$cuatrimestre/");

if (!file_exists($ruta)) {
    
    mkdir($ruta, 0777, true);

}
$pdf->Output('F', $ruta.$a['12']."-$resi.pdf");

$otaf=$a['12'];

$sql="UPDATE [PROVEEDORES PAGOS] SET FechaIC='$hoy' WHERE I=$resi";


$res=$db->executeUpdate($sql);



?>