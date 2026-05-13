<?php
$pageTitle  = 'premios agente preferente';
$activePage = 'eventos';
$subir = '../';
require_once $subir . 'includes/head.php';
?>
<style>
.modal-container {
  margin: 60px auto;
  padding-top: 0px;
  position: relative;
  width: 160px;    
  .modal-btn {
    display: block;
    margin: 0 auto;      
    color: #fff;  
    width: 160px;
    height: 50px;    
    line-height: 50px;    
    background: #446CB3;
    font-size: 22px;       
    border: 0;
    border-radius: 3px;  
    cursor: pointer;
    text-align: center;
    box-shadow: 0 5px 5px -5px #333;  
    transition: background 0.3s ease-in;
    &:hover { background: #365690; }
  }
  .modal-content, 
  .modal-backdrop {
    height: 0; 
    width: 0; 
    opacity: 0;    
    visibility: hidden;
    overflow: hidden; 
    cursor: pointer;
    transition: opacity 0.2s ease-in; 
  }
  .modal-close {
    color: #aaa;
    position: absolute;
    right: 5px;
    top: 5px;
    padding-top: 3px;
    background: #fff;
    font-size: 16px;
    width: 25px;
    height: 25px;
    font-weight: bold;
    text-align: center;
    cursor: pointer;
    &:hover { color: #333; }        
  }      
  .modal-content-btn {
    position: absolute;
    text-align: center;
    cursor: pointer;
    bottom: 20px;
    right: 30px;
    background: #446CB3;
    color: #fff;
    width: 50px;
    border-radius: 2px;
    font-size: 14px;
    height: 32px;
    padding-top: 9px;
    font-weight: normal;
    &:hover { color: #fff; background: #365690; }
  }
  #modal-toggle {
    display: none;  
    &.active ~ .modal-backdrop,
    &:checked ~ .modal-backdrop {
      background-color: rgba(0, 0, 0, 0.6);
      width: 100vw;
      height: 100vh;
      position: fixed;
      left: 0;
      top: 0;
      z-index: 9;
      visibility: visible;
      opacity: 1;      
      transition: opacity 0.2s ease-in; 
    }
    &.active ~ .modal-content,
    &:checked ~ .modal-content {
      opacity: 1;
      background-color: #fff;
      max-width: 400px;
      width: 400px;
      height: 280px;
      padding: 10px 30px;
      position: fixed;
      left: calc(50% - 200px);
      top: 12%;
      border-radius: 4px;
      z-index: 999;
      pointer-events: auto;
      cursor: auto;
      visibility: visible;      
      box-shadow: 0 3px 7px rgba(0, 0, 0, 0.6);  
      @media (max-width: 400px) { left: 0; }                   
    }  
  }
}
        .sticky-top.navbar-light .navbar-nav .nav-link { color: var(--bs-white) !important; }
        body { background: #f5f5f5; }
    #subheader { background: #1a7a4a; color: #fff; padding: 20px 0; text-align: center; font-size: 1.2rem; font-weight: 700; margin-top: 70px; }
    .hr { height: 1px; background: #ddd; margin: 20px 0; }
    .row { max-width: 1200px; margin: 0 auto; padding: 0 20px; }
    .twelve.columns { width: 100%; }
    .sectiontitle { text-align: center; padding: 30px 0 10px; }
    .sectiontitle h4 { font-size: 1.5rem; font-weight: 800; color: #1a7a4a; margin: 0; }
    #portofolio { padding: 20px 0; }
.ev-back-btn { display:inline-block; margin: 20px 0 0 20px; padding:8px 20px; background:#1a7a4a; color:#fff; border-radius:6px; text-decoration:none; font-weight:700; font-size:.85rem; transition:background .2s; }
.ev-back-btn:hover { background:#145c37; color:#fff; text-decoration:none; }</style>
</head>
<body>

<?php require_once $subir . "includes/header-green.php"; ?>

<a href="../eventos.php" class="ev-back-btn">&larr; Volver a Eventos</a>

<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="text-center">
				 Eventos
			</p>
		</div>
	</div>
</div>
<div class="hr">
</div>

<div class="row">
        <div class="modal-container">
          <input id="modal-toggle" type="checkbox">
          <label class="modal-btn" for="modal-toggle">Click me</label> 
          <label class="modal-backdrop" for="modal-toggle"></label>
          <div class="modal-content">
            <label class="modal-close" for="modal-toggle">&#x2715;</label>
            <h2>Modal title</h2><hr />
            <p>Hello from inside the modal!</p> 
            <label class="modal-content-btn" for="modal-toggle">OK</label>   
          </div>          
        </div>  
</div>
<div class="hr">
</div>



<?php require_once $subir . "includes/footer.php"; ?>
<?php require_once $subir . "includes/scripts.php"; ?>
</body>
</html>


