# Патч для Edit-in-place (UMI.CMS), исправляющий конфликты с jquery

Установка:
1. Из файла /classes/modules/custom.php перенести метод includeQuickEditJs в custom.php проекта
2. Скопировать папку /js/custom/
3. Подключить jquery до макросов, вставляющих скрипты edit-in-place
4. В шаблоне вместо
    <xsl:value-of select="document('udata://system/includeQuickEditJs')/udata" disable-output-escaping="yes"/>
использовать
    <xsl:value-of select="document('udata://custom/includeQuickEditJs')/udata" disable-output-escaping="yes"/>

Пример шаблона:

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<xsl:value-of select="document('udata://custom/includeQuickEditJs')/udata" disable-output-escaping="yes"/>
<xsl:value-of select="document('udata://system/includeEditInPlaceJs')/udata" disable-output-escaping="yes"/>