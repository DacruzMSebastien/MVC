
<div>
  <section class="stock">
  <form action="" method="GET">
    <p><i><b>Rechercher dans notre stock</b></i></p>
    <input type="text" name="antiquite" placeholder ="Table, Bureau, Comptoir,..">
    <input type="submit" name="recherche" value="Rechercher">
  </form>
  </section>
</div>

<div class="mrgn">
  <article>
  <div>
    <a href="index.php?action=stock-item"><img src="<?=VIEW . 'assets/img/comptoir.jpg'?>" alt="comptoir" class="bg-img"></a>
    <a href=""><img src="<?=VIEW . 'assets/img/coffre_fort.jpg'?>" alt="coffre fort" class="bg-img"></a>
    <a href=""><img src="<?=VIEW . 'assets/img/bureau_americain.jpg'?>"alt="bureau americain" class="bg-img"></a>
    <a href=""><img src="<?=VIEW . 'assets/img/comptoir-caisse.jpg'?>" alt="comptoir caisse" class="bg-img"></a>
    <a href=""><img src="<?=VIEW . 'assets/img/grands-miroirs.jpg'?>" alt="grands mirroirs" class="bg-img"></a>
    <a href=""><img src="<?=VIEW . 'assets/img/console.jpg'?>"alt="console" class="bg-img"></a>
  </div>
  <div>
    <a href=""><img src="<?=VIEW . 'assets/img/comptoir-pharma.jpg'?>" alt="comptoir pharma" class="bg-img"></a>
    <a href=""><img src="<?=VIEW . 'assets/img/meuble-coiffure.jpg'?>" alt="meuble coiffure" class="bg-img"></a>
    <a href=""><img src="<?=VIEW . 'assets/img/meuble-vitrine.jpg'?>"alt="meuble vitrine" class="bg-img"></a>
    <a href=""><img src="<?=VIEW . 'assets/img/pigeonnier.jpg'?>" alt="pigeonnier" class="bg-img"></a>
    <a href=""><img src="<?=VIEW . 'assets/img/placards-couvent.jpg'?>" alt="placards-couvent" class="bg-img"></a>
    <a href=""><img src="<?=VIEW . 'assets/img/vitrine-chromee.jpg'?>"alt="vitrine chromee" class="bg-img"></a>
  </div>
  <div>
    <ul id="pagination-flickr">
      <li class="previous-off">« Précédent</li>
      <li class="active">1</li>
      <li><a href="index.php?action=stock">2</a></li>
      <li class="next"><a href="index.php?action=stock">Suivant »</a></li>
    </ul>
  </div>

  </article>
</div>
