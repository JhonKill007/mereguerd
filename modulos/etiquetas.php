

                
                <?php
                while($art = $resultado->fetch_array()){
                    $id_articulo = $art['id_exponentes'];
                    ?>
                    <!-- posicion 1 -->
                    <div class="col-md-4"> 
                        <div class="full product_blog margin_top_30">
                            <img src=<?php echo $art['foto']; ?> />
                            <h3><span style="color: #72dd78 !important;"></span><?php echo $art['nombre']; ?></h3>
                        </div>
                    </div>
                            
                        
                    <?php
                }
                ?>
                



    

                 
