<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Dusan Kuburic 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="template/bootstrap/jquery-3.3.1.slim.min.js"></script>
  <script src="template/bootstrap/popper.min.js" ></script>
  <script src="template/bootstrap/js/bootstrap.bundle.min.js"></script>
 
 
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Korpa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table">
            <thead>
              <tr>
                <th>Slika</th>
                <th>Naziv</th>
                <th>Cena</th>
                <th>Kolicina</th>
              </tr>
            </thead>
            <tbody id="korpa">

            </tbody>

        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Obustavi</button>
        <button type="button" class="btn btn-primary">Naruci</button>
      </div>
    </div>
  </div>
</div>


</body>

</html>