<div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>


                        <?php if (isset($_SESSION['Firstname'])) 
                                { ?>
                                <?php echo $_SESSION['Firstname']. ' ' .$_SESSION['Lastname']; ?>
                                <?php 
                            }
                                 ?>
                    </div>