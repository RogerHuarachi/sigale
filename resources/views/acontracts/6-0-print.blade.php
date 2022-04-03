<!DOCTYPE html>
<html lang="es_ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6-2021 MODELO- CONTRATO DE PRESTAMO CON GARANTE PERSONAL Y PRENDARIA DE DOCUMENTACION CON CODEUDOR Y CO GARANTE - {{ $request->deudor }}</title>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <style>css"> body { height: 842px; width: 595px; /* to centre page on screen*/ margin-left: auto; margin-right: auto; } </style>
</head>
<body>
    <div class="container text-justify">
        <font face="Arial">
            <div>
                @if ($request->encargado == "GUALBERTO EDSSON COCA VARGAS")
                    (CB/AL/CONTRATO/GC06-2021)
                @else
                    (LP/AL/CONTRATO/VA06-2021)
                @endif
            </div>
            <div class="text-center">
                <strong>DOCUMENTO PRIVADO</strong>
            </div>
            Por el presente, se celebra un contrato de préstamo de dinero, mismo que al simple reconocimiento de firmas y rubricas ante Autoridad competente surtirá los efectos legales de documento público, de conformidad a las siguientes cláusulas:
            <br>

            <b><u>PRIMERA: (PARTES DEL CONTRATO). -</u></b>
            <br>
            1.1.	<b>PROEZA S.R.L.</b>, institución legalmente constituida, con Matrícula de Comercio Nº 371063 otorgada por FUNDEMPRESA y Nº de NIT 382166027 en lo sucesivo simplemente “<b>PROEZA S.R.L.</b>”.
            <br>
            1.2.	{{ $request->deudor }} con C.I. No. {{ $request->deudorci }}, {{ $request->deudorec }}, {{ $request->deudoro }} y {{ $request->codeudor }} con C.I. Nº {{ $request->codeudorci }}, {{ $request->codeudorec }}, {{ $request->codeudoro }} ambos con domicilio en la {{ $request->domicilio }} zona {{ $request->zona }} de esta ciudad, mayor (es) de edad y hábil (es) por derecho, en adelante denominado (s) el (los) <b>DEUDOR (ES)</b>.
            <br>

            <b><u>SEGUNDA: (OBJETO DEL CONTRATO).-</u></b> Al presente y con sujeción a la reglamentación adoptada, <b>PROEZA S.R.L.</b>de sus recursos propios concede, a favor del DEUDOR  un préstamo de dinero, por la suma de Bs. {{ $request->monto }}.- ({{ $request->montolit }} 00/100 BOLIVIANOS), y que dicho DEUDOR  se obliga a recibir y restituir conforme a las estipulaciones del presente contrato.
            <br>

            <b><u>TERCERA: (DESEMBOLSO). -</u></b> El préstamo concedido quedará perfeccionado mediante un solo desembolso, acreditado por la respectiva papeleta de abono y/o comprobante de transferencia o entrega del efectivo por el monto total acordado en el presente documento. Dicho desembolso será realizado por <b>PROEZA S.R.L.</b> en bolivianos, previo cumplimiento por el DEUDOR  de todos los requisitos y condiciones establecidos al efecto.
            <br>

            <b><u>CUARTA: (DESTINO DE PRESTAMO Y SUPERVISION). -</u></b>  El préstamo es concedido por <b>PROEZA S.R.L.</b> para <b>CONSUMO (LIBRE DISPONIBILIDAD)</b>, con exclusión de cualquier otro uso o destino. En caso de que los fondos sean destinados a fines distintos de los especificados, sin que hubiere mediado previo acuerdo con PROEZAS.R.L., éste podrá dar por vencido el plazo del préstamo y su monto insoluto será inmediatamente exigible, sin perjuicio de las demás responsabilidades en que el deudor pueda haber incurrido.
            <br>
            <b>PROEZA S.R.L.</b>, podrá requerir datos e información necesarios para la o las inspecciones que se realicen, en cualquier momento y en el lugar que consideren convenientes y a simple aviso a dependientes o encargados de (los) <b>DEUDOR (ES)</b>. Así como cualquier información relacionada con la situación de (los) <b>DEUDOR (ES)</b>.
            <br>

            <b><u>QUINTA: (PLAZO Y AMORTIZACIONES).-</u></b> El plazo por el cual <b>PROEZA S.R.L.</b> concede el presente préstamo es de {{ $request->plazo }} meses computables a partir del desembolso del préstamo, y mediante el pago de “{{ $request->cuotas }}” cuotas consecutivas mediante amortizaciones cada “{{ $request->frecuencia }}” días. Los montos, el cronograma, así como el total acumulado de los pagos del servicio del crédito constarán en plan de pagos que es de conocimiento de (los) <b>DEUDOR (ES)</b> y que ha sido entregado en mano propia a el (los) <b>DEUDOR (ES)</b>. El plazo se estipula a favor de <b>PROEZA S.R.L.</b> Al vencimiento del plazo señalado, el préstamo y cualquier saldo deudor de capital, intereses, accesorios y todo lo demás aplicables al préstamo deberán quedar pagado en su integridad. Si alguna de las fechas de amortización cayese en día inhábil, el vencimiento correspondiente se producirá el día hábil siguiente.
            <br>
            El monto total que pagará (n) el (los) <b>DEUDOR (ES)</b> una vez cumplidos todos los pagos del crédito, incluidos capital e intereses, figura en el plan de pagos entregado a el (los) <b>DEUDOR (ES)</b>. Sin embargo, este monto podrá variar en caso de pagos adelantados que efectúe (n) el (los) <b>DEUDOR (ES)</b> o en caso de mora en el pago de las cuotas.
            <br>
            El (los) <b>DEUDOR (ES)</b> podrá (n) hacer amortizaciones extraordinarias o cancelar totalmente el saldo insoluto de la obligación en cualquier tiempo anterior al vencimiento del plazo convenido, sin recargo, comisión o penalidad alguna.
            <br>

            <b><u>SEXTA: (INTERESES). -</u></b> El préstamo desde el momento del desembolso hasta su cancelación total, devengará a favor de <b>PROEZA S.R.L.</b>, los siguientes intereses y cargos financieros:
            <br>
            6.1. Una tasa de interés fija nominal anual del <b>“36 %” (TREINTA Y SEIS POR CIENTO)</b>, sobre saldos deudores de capital desde la fecha de desembolso del préstamo. A los efectos del cálculo de intereses por periodos inferiores a un año, contablemente se considerará que el año tiene trescientos sesenta (360) días.
            <br>
            6.2. En caso de mora, la tasa de interés moratorio, que se aplicará conforme prevé el artículo 1334 del Código de Comercio con relación al art.1326 del mismo cuerpo de ley, es la tasa de interés corriente pactada, a la cual se recargará con el interés penal establecido para préstamos financieros por el Decreto Supremo No.28166 de 17 de mayo de 2005, modificado por el Decreto Supremo Nº 0530 de 02 de junio de 2010.
            <br>

            <b><u>SEPTIMA: (LUGAR Y FORMA DE PAGO). -</u></b> Todos los pagos de capital o de intereses, o de cualquier otra suma que deba pagarse bajo el presente contrato, deberán efectuarse en la misma moneda desembolsada, única moneda con efecto liberatorio, siendo inadmisible el pago, oferta de pago y consignación en moneda diferente a la señalada o mediante prestación diversa de la debida que no se adecue a las normas legales al efecto. Todos los pagos bajo este contrato se efectuarán por el (los) <b>DEUDOR (ES)</b> en las oficinas <b>PROEZA S.R.L.</b>, debiendo exigir por cada pago realizado el correspondiente Comprobante de pago oficial y conservar ese documento.
            <br>

            <b><u>OCTAVA: (MORA Y EJECUCIÓN).-</u></b> La falta de pago total o parcial del préstamo, intereses y/o sus accesorios o la simple demora en el pago de cualquier cuota de capital, intereses, etc., en las fechas de sus correspondientes vencimientos, constituirán al (los) <b>DEUDOR (ES)</b> en mora por el monto total de la obligación, la cual se considerará vencida, liquida y exigible, sin necesidad de intimación o requerimiento judicial o extrajudicial previo, ni de formalidad alguna, facultando en derecho a <b>PROEZA S.R.L.</b> para exigir el pago íntegro del préstamo y todos los saldos deudores de capital, intereses, accesorios, etc., aunque el plazo final no se encuentre vencido, pudiendo <b>PROEZA S.R.L.</b> interponer en consecuencia la correspondiente acción judicial para su cobranza, sea en la vía coactiva o ejecutiva o la vía que vea por conveniente, quedando en tal caso el (los) <b>DEUDOR (ES)</b> obligado (s) al pago de todos los gastos, expensas y demás costos ocasionados a <b>PROEZA S.R.L.</b> con la mora de la obligación, incluyendo los relacionados y emergentes de la cobranza judicial y/o extrajudicial, honorarios, costas y otros, sin excepción, todos los cuales serán pagados por el (los) <b>DEUDOR (ES)</b>, aunque no se haya dictado sentencia o cualquiera fuese el estado procesal a que llegue el juicio. El presente documento sin necesidad de ninguna formalidad previa, constituirá título ejecutivo.
            <br>

            <b><u>NOVENA: (CADUCIDAD Y DERECHOS DE ACELERACIÓN).-</u></b> Independientemente de la mora de (los) <b>DEUDOR (ES)</b> por incumplimiento de pago conforme lo previsto en la cláusula precedente, <b>PROEZA S.R.L.</b> podrá de la misma manera y con iguales efectos, declarar la caducidad del término y declarar el monto total del préstamo y sus intereses y accesorios pendientes de pago, de plazo vencido, sumas líquidas y exigibles y en mora aunque el término no se encuentre vencido, y proceder a la cobranza judicial del préstamo intereses, accesorios, etc., sin necesidad de ninguna intimación o requerimiento judicial o extrajudicial y en la forma establecida para este efecto en la cláusula anterior, por cualquiera de las siguientes causas: 9.1.Incumplimiento de cualesquiera de las cláusulas o estipulaciones del presente contrato; 9.2. Disminución de la solvencia de (los) <b>DEUDOR (ES)</b> librada a la sola apreciación y criterio de <b>PROEZA S.R.L.</b>; 9.3. Solicitud de concurso preventivo o de quiebra, o de concurso voluntario o necesario de acreedores, promovida por el (los) <b>DEUDOR (ES)</b> o por terceros; 9.4. Disminución de las garantías otorgadas, o del patrimonio de (los) <b>DEUDOR (ES)</b>, o de su fuga, o la persecución judicial, embargo o secuestro de sus bienes; 9.5. Si el (los) <b>DEUDOR (ES)</b> en cualquier momento desconocieran la validez legal o ejecutabilidad de las obligaciones contraídas bajo el presente contrato; o cualquier parte del mismo o de cualquier documento otorgado de acuerdo al presente; 9.6. Si el (los) <b>DEUDOR (ES)</b> admitiere (n) su imposibilidad de pagar sus deudas a medida que las mismas vencen; 9.7. Por falsead o encubrimiento de datos en la declaración de bienes o cualquier otra declaración o información presentada a <b>PROEZA S.R.L.</b> por el (los) <b>DEUDOR (ES)</b> o cualquiera de sus fiadores. 9.8. Por no destinar precisamente el importe del préstamo a la finalidad para la que se ha solicitado. 9.9. En general cualquier acto de (los) <b>DEUDOR (ES)</b> y/o cualquier circunstancia que a criterio de <b>PROEZA S.R.L.</b> pudiera poner en riesgo la total recuperación del crédito y demás obligaciones contraídas por el (los) <b>DEUDOR (ES)</b>.
            <br>

            <b><u>DÉCIMA: (GARANTIAS). -</u></b>  EL (LOS) <b>DEUDOR (ES)</b> garantizan a favor de <b>PROEZA S.R.L.</b> el cumplimiento de sus obligaciones contraídas en el presente contrato, con la generalidad de sus todos bienes muebles e inmuebles, presentes y futuros, sin limitación ni exclusión alguna, renunciando de su parte a los beneficios de exclusión, orden, división u otros que pudieran favorecerles. En caso de que sean dos o más deudores se constituyen además en co-deudores mancomunados, solidarios e indivisibles, renunciando expresamente a los beneficios de excusión, división y otros similares.
            <br>
            Por otra parte, y de manera especial el (los) <b>DEUDOR (ES)</b> acuerda (n) constituir y constituye (n) a favor <b>PROEZA S.R.L.</b> la (s) siguiente (s) garantía (s) expresa (s):
            <br>
            10.1. En igual garantía de todas las obligaciones de (los) <b>DEUDOR (ES)</b> bajo el presente contrato, se constituye en garante solidario mancomunado e indivisible el señor (es): {{ $request->garantea }} con C.I. Nº {{ $request->garantecia }}, {{ $request->garanteeca }}, {{ $request->garanteoa }} y {{ $request->garanteb }} con C.I. Nº {{ $request->garantecib }}, {{ $request->garanteecb }}, {{ $request->garanteob }} ambos con domicilio en la {{ $request->garantedomi }}   zona {{ $request->garantezona }} de esta ciudad, mayor (es) de edad, hábil (es) por derecho, quien garantiza el fiel cumplimiento de la presente obligación con todos sus bienes habidos y por haber, aceptando para sí todos los términos, condiciones, cláusulas y estipulaciones establecidas en el presente contrato, obligándose al pago de la deuda y demás obligaciones como el (los) propio  (s) <b>DEUDOR (ES)</b> y en forma incondicional e irrestricta, constituyéndose como si fuera principal y llano pagador de todas las obligaciones, capital, intereses y demás accesorios aplicables, relativos y emergentes, renunciando de su parte a los beneficios de excusión, división y otros beneficios legales.
            <br>
            Por otra parte, el (los) <b>DEUDOR (ES)</b> con la finalidad de evidenciar su solvencia patrimonial entregan a <b>PROEZA S.R.L.</b>, constituyéndose en anexo del presente contrato los documentos originales que se detallan a continuación:
            <br>
            <ul class="m-0">
                @if ($request->prendauno)
                    <li>{{ $request->prendauno }}</li>
                @endif
                @if ($request->prendados)
                    <li>{{ $request->prendados }}</li>
                @endif
                @if ($request->prendatres)
                    <li>{{ $request->prendatres }}</li>
                @endif
                @if ($request->prendacuatro)
                    <li>{{ $request->prendacuatro }}</li>
                @endif
                @if ($request->prendacinco)
                    <li>{{ $request->prendacinco }}</li>
                @endif
                @if ($request->prendaseis)
                    <li>{{ $request->prendaseis }}</li>
                @endif
            </ul>

            <b><u>DÉCIMA PRIMERA: (DERECHOS DEL DEUDOR). -</u></b> El (los) <b>DEUDOR (ES)</b> tendrá (n) los siguientes derechos:
            <br>
            a)	Solicitar en cualquier momento información relacionada al desglose de sus pagos (extracto del crédito).
            <br>
            b)	Solicitar en cualquier momento actualización del cronograma de pagos (plan de pagos actualizado).
            <br>
            c)	A recibir el nuevo plan de pagos, en caso de cualquier modificación al plan de pagos original realizado por acuerdo de partes
            <br>
            d)	A conocer la forma de cálculo de los cargos financieros.
            <br>
            e)	A acceder a medios o canales de reclamo eficientes, si los productos o servicios financieros recibidos no se ajustan a lo dispuesto por la normativa vigente.
            <br>
            f)	A la confidencialidad con las excepciones establecidas por Ley.
            <br>

            <b><u>DÉCIMA SEGUNDA: (CASTIGO DEL PRÉSTAMO). -</u></b> El castigo de la obligación de, el (los) <b>DEUDOR (ES)</b> no extingue ni afecta los derechos de <b>PROEZA S.R.L.</b> para ejercer las acciones legales judiciales y extrajudiciales con el propósito de la recuperación del monto adeudado. El reporte como crédito castigado procederá previa autorización del directorio y permanecerá hasta que la deuda sea cancelada en su totalidad. Entre tanto se reporte como deuda castigada el (los) <b>DEUDOR (ES)</b>, co<b>deudor (es)</b> y garante (s) no podrán ser sujetos de créditos de acuerdo a normativa vigente.
            <br>

            <b><u>DÉCIMA TERCERA: (CAPACIDAD Y PERSONERÍA). -</u></b> El (los) <b>DEUDOR (ES)</b> y codeudores reconocen expresamente la personalidad jurídica <b>PROEZA S.R.L.</b>, así mismo las facultades jurídicas y capacidad de sus personeros legales, motivo por el cual han celebrado el presente contrato de préstamo.
            <br>

            <b><u>DÉCIMA CUARTA: (DOMICILIO ESPECIAL).-</u></b> Para todos los efectos legales, las partes convienen y aceptan en conformidad al Art. 29 parágrafo II) del Código Civil, que se tendrá como domicilio del (los) <b>DEUDOR (ES) y GARANTE (ES)</b>, los señalados en las cláusulas precedentes (primera y decima), domicilios en los que se efectuarán las citaciones y notificaciones judiciales o cualquier otra comunicación; por otro lado, los avisos y comunicaciones a <b>PROEZA S.R.L.</b> se dirigirán a la siguiente dirección:
            <b>
                @if ($request->encargado == "GUALBERTO EDSSON COCA VARGAS")
                    CALLE OBISPO ANAYA #340 EDIFICIO SION OFICINA 2B ZONA CALA CALA.
                @else
                    Rio Seco, Av. Juan Pablo II entre Luis Espinal, Edificio San Francisco – 1er piso Dpto. A4.
                @endif

            </b>
             En caso de cambio de domicilio, las partes están en la obligación de comunicar en forma inmediata este hecho a PROEZA S.R.L caso contrario se reputará como domicilio vigente el señalado en conformidad al Art. 30 del Código Civil.
            <br>

            <b><u>DECIMA QUINTA: (OBLIGACIONES ESPECIALES). -</u></b> EL DEUDOR  queda forzado al cumplimiento de las siguientes obligaciones especiales:
            <br>
            1)	Realizar con carácter previo al desembolso el reconocimiento de firmas necesario, de acuerdo a normativa vigente.
            <br>
            2)	Cumplir y observar la reglamentación del programa de crédito, de <b>PROEZA S.R.L.</b> y presentar la documentación exigida por este.
            <br>
            3)	Suministrar a <b>PROEZA S.R.L.</b> cualquier información o documento legal y/o contable que este requiera durante la vigencia del préstamo.
            <br>
            4)	Permitir en cualquier momento la verificación del correcto uso y destino del importe del préstamo, por parte del <b>PROEZA S.R.L.</b>
            <br>

            <b><u>DECIMA SEXTA: (GASTOS EN CASO DE EJECUCION). -</u></b> Todos los gastos, relativos a la concesión del presente préstamo, serán de cargo y cuenta exclusiva del DEUDOR . El presente documento y respectivo comprobante de desembolso servirá de título ejecutivo y dará lugar al cobro ejecutivo judicial respectivo, conforme a lo establecido por el Código Procesal Civil y la ya referida Ley Nº 1760. Para esta eventualidad, El (los) DEUDOR(ES) ratifica (n) el domicilio señalado en la cláusula Primera, como especial y convencional válido para efectos procesales.
            <br>

            <b><u>DECIMA SEPTIMA: (CESION DE CREDITO).-</u></b> EL (LOS) <b>DEUDOR (ES)</b> autoriza en forma expresa a <b>PROEZA S.R.L.</b>, a ceder, subrogar y/o transferir a cualquier título el derecho de crédito emergente del presente contrato de préstamo a favor de terceros sin necesidad de aceptación de ninguno de ellos y mucho menos su intervención en los contratos que suscriba <b>PROEZA S.R.L.</b> con terceros, siendo suficiente la información que proporcione <b>PROEZA S.R.L.</b> a su elección, antes o después de la cesión subrogación y/o transferencia.
            <br>

            <b><u>DECIMA OCTAVA: (AUTORIZACION PARA INVESTIGACION E INCORPORACIÓN DE ANTECEDENTES CREDITICIOS). -</u></b> EL DEUDOR , y EL (LOS) GARANTE (S) PERSONAL (ES), autoriza expresa y plenamente a <b>PROEZA S.R.L.</b> a efectuar en cualquier momento la investigación de sus antecedentes crediticios, en cualquier entidad sea pública o privada y/o en cualquier otra fuente que <b>PROEZA S.R.L.</b> estime conveniente y necesaria.
            <br>
            Así mismo, EL DEUDOR  y EL (LOS) GARANTE (S) PERSONAL (ES) autorizan expresamente a <b>PROEZA S.R.L.</b> a incorporar los datos crediticios y otras cuentas por pagar de carácter económico, financiero y comercial derivados de la relación con <b>PROEZA S.R.L.</b> en la(s) base(s) de datos de propiedad de los Burós de información crediticia que cuenten con licencia de funcionamiento del Organismo de Supervisión.
            <br>

            <b><u>DECIMA NOVENA:(DEL SEGURO). -</u></b> EL DEUDOR se compromete y obliga a contratar, por intermedio de <b>PROEZA S.R.L.</b>, el respectivo <b>SEGURO DE VIDA EN GRUPO ANUAL RENOVABLE A CAPITAL CONSTANTE</b>, en una Compañía de Seguros, el cual será pagado mensualmente por EL DEUDOR conforme el plan de pagos establecidos al efecto.
            <br>
            EL <b>SEGURO DE VIDA EN GRUPO ANUAL RENOVABLE A CAPITAL CONSTANTE</b>., entrará en vigencia a partir de la fecha de aprobación del respectivo Formulario de Declaración de Estado de Salud DEL DEUDOR y el primer pago efectivo mensual a la Compañía Aseguradora por este concepto.
            <br>
            Se deja clara constancia que el <b>SEGURO DE VIDA EN GRUPO ANUAL RENOVABLE A CAPITAL CONSTANTE</b> cubrirá el saldo total de la deuda DEL DEUDOR en <b>PROEZA S.R.L.</b> a la fecha del siniestro dentro los límites y condiciones establecidas en el Contrato de Seguros, al cual <b>PROEZA S.R.L.</b> y EL DEUDOR declaran someterse. EL BENEFICIARIO del Seguro será <b>PROEZA S.R.L.</b>.
            <br>

            <b><u>VIGECIMA:(DE LA ACEPTACIÓN SEGURO DE VIDA EN GRUPO ANUAL RENOVABLE A CAPITAL CONSTANTE). -</u></b> EL DEUDOR manifiesta su plena y absoluta conformidad para ser incorporado como asegurado al contrato de <b>SEGURO DE VIDA EN GRUPO ANUAL RENOVABLE A CAPITAL CONSTANTE</b>, contratado por <b>PROEZA S.R.L.</b>, que actúa en dicho contrato como tomador del seguro. <b>PROEZA S.R.L.</b> será beneficiaria de la indemnización por el monto insoluto de la deuda en caso de producirse el fallecimiento o invalidez total y permanente DEL DEUDOR, autorizando que el costo de la prima correspondiente, se pague a la entidad aseguradora de acuerdo a las políticas de <b>PROEZA S.R.L.</b> y a los términos del contrato de Seguro.
            <br>

            <b><u>VIGECIMA PRIMERA: (INTERPRETACIÓN). –</u></b> Para efectos de la interpretación de este contrato, queda establecido que las denominaciones, vocablos y artículos empleados en el género masculinos incluyen también cuando sea aplicable el género femenino o viceversa según las personas que sean descritas en las cláusulas que anteceden de este contrato. Asimismo, las palabras en plural incluyen al singular o viceversa según el número de personas que intervengan bajo la misma denominación en las cláusulas que anteceden de este contrato.
            <br>

            <b><u>VIGECIMA SEGUNDA: (ACEPTACIÓN). –</u></b>Nosotros: <b>PROEZA S.R.L.</b>, legalmente representado por LUIS ALEJANDRO ARZE RICO con C.I. N° 3607626 CB en merito al Poder N.º 517/2021 otorgado ante Notaria N.º47 a cargo de la Dra. Luz Angela Russel Fuentes, ahora como PODERDANTE de <b>{{ $request->encargado }}</b> con C.I.
            @if ($request->encargado == "GUALBERTO EDSSON COCA VARGAS")
                3748209 CB
            @else
                9452529 CB
            @endif
             quien ahora es APODERADO y cuenta con poder especial, suficiente y bastante para celebrar, firmar y ejecutar los contratos de préstamo de dinero que otorga <b>PROEZA S.R.L.</b>, en mérito al
            <b>
                poder No.
                @if ($request->encargado == "GUALBERTO EDSSON COCA VARGAS")
                    604/2021
                @else
                    606/2021
                @endif
            </b>
            otorgado por Notaria de Fe Pública No. 47 a cargo de la Dra. Luz Ángela Russel Fuentes de la ciudad de Cochabamba por una parte y {{ $request->deudor }}, {{ $request->codeudor }} como <b>DEUDOR (ES)</b>, y el (los) Sr. (es): {{ $request->garantea }}, {{ $request->garanteb }} en su calidad de GARANTE (S) SOLIDARIO (S) MANCOMUNADO E INDIVISIBLE respectivamente por la otra, manifestamos nuestra entera y absoluta conformidad con todas y cada una de las cláusulas y estipulaciones del presente contrato, obligándonos a su fiel y estricto cumplimiento, firmando en constancia de ello. Así mismo el presente documento, tendrá el valor legal establecido por el Art. 519 del Código Civil, en caso de no contar con el reconocimiento de firmas y rubricas por cualquier motivo o circunstancia.
            <br><br>
            <div class="text-center">
                {{ $request->lugar }}, {{ $request->dia }} DE {{ $request->mes }} DE 2021
            </div>
            <br><br><br><br><br><br>
            <div>
                {{ $request->encargado }}
                <br>
                <b>Por PROEZA S.R.L.</b>
            </div>
            <br><br><br><br><br><br>
            <div class="row">
                <div class="col-6">
                    {{ $request->deudor }}
                    <br>
                    <b>Como DEUDOR (ES).</b>
                </div>
                <div class="col-6">
                    {{ $request->codeudor }}
                </div>
            </div>
            <br><br><br><br><br><br>
            <div class="row">
                <div class="col-6">
                    {{ $request->garantea }}
                    <br>
                    <b>Como GARANTE (S).</b>
                </div>
                <div class="col-6">
                    {{ $request->garanteb }}
                </div>
            </div>
        </font>
    </div>
</body>
</html>
