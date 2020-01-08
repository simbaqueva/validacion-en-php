
<from id="from 1" name="from"method="post" action="validarinsertarpaciente2.php">
<table width="42%" border="0" align="center">
<tr bgcolor="#cc0000" class="texto">
<td colspan="2" align="center">INSERTAR PACIENTE </td>
</tr>
<tr>
<td align="right" bgcolor="#fbec88">IDENTIFICACION</td>
<td width="72%"><label for="identificacion"></label>
<input name="identificaion"type="text" id="identificacion" size="40" required /></td>
</tr>
<tr>
<td align="right" bgcolor="#fbec88">NOMBRES</td>
<td> <input name="nombres" type="text" id="nombres" size="40" required /></td>
</tr>
<tr>
<td height="25" align="right" bgcolor="#fbec88">APELLIDOS</td>
<td> <input name="apellidos" type="text" id="apellidos" size="40" required/></td>
</tr>
<tr>
<td align="right" bgcolor="fbec88">FECHA DE NACIMIENTO</td>
<td> <input name="fechadenacimiento" type="date" id="fechadenacimiento"
 style="width:270px" required/></td>
 </tr>
 <tr>
 <td align="right" bgcolor="#fbec88">SEXO</td>
 <td> <label for="sexo"></label>
 <select name="sexo" id="sexo" style="width:270px">
 <option value="no">seleccione</option> 
 <option value="femenino">femenino</option>
 <option value="masculino">masculino</option>
 </select></td>
 </tr>  