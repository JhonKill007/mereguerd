

                
                <?php
                while($art = $resultado->fetch_array()){
                    ?>
                    <!-- posicion 1 -->
                    <div class="col-md-4"> 
                        <div class="full product_blog margin_top_30">
                            <img src=<?php echo $art['foto']; ?> />
                        </div>
                    </div>
                            
                        
                    <?php
                }
                ?>
                



    

                 
