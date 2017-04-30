<template>
  <div class="container-fluid" align='center'>
    <div class="content">
      <table class="centered" align="center" id='grid'>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
        </tr>
        <tr>
          <td>4</td>
          <td>5</td>
          <td>6</td>
        </tr>
        <tr>
          <td>7</td>
          <td>8</td>
          <td>9</td>
        </tr>
      </table>
      <!-- <img class="centered" src="ปีใหม่2.jpg" name="Ace" alt="ace" /> -->
    </div>
    <div>
      <form class="form-group">
        <button class="btn btn-success" type="button" name="button">รูปก่อนหน้า</button>
        <button class="btn btn-success" type="button" name="button">รูปต่อไป</button>
      </form>
    </div>
  </div>
</template>


<script>
  $(document).ready(function () {
    $('td').click(function () {
      $(this).css('visibility', 'hidden');
    })
  })
</script>
