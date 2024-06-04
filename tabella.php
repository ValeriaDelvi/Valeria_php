<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 10px;
}
</style>



<table style="width:80%; border: 1px; ">
    <tr>
     <td colspan="2">OFFERTA</td>
     <td colspan="2">DOMANDA</td>
    </tr>
    <tr>
      <td rowspan="2">Quantità</td>
      <td>prezzo</td>
      <td rowspan="2">Quantità</td>
      <td>prezzo</td>
    </tr>
</table>

<h1>FORM DOMANDA</h1>

<form action="/action_page.php">
  <label for="dom">Prezzo Domanda:</label>
  <input type="text" id="dom" name="dom"><br><br>
  <input type="submit" value="Submit">
</form>

<h1>FORM OFFERTA</h1>

<form action="/action_page.php">
  <label for="off">Prezzo Offerta:</label>
  <input type="text" id="off" name="off"><br><br>
  <input type="submit" value="Submit">
</form>

