 
<?php include("header.php");

include 'connection_class.php';
$dbs = new Database();
if(!$dbs->connect()){
    print_r($dbs->getResult()) ;
    exit(0);
}

if(isset($_GET['id'])){
if(!empty($_GET['id'])){

    $dbs->sql("SELECT
    `art`.`id`
    , `art`.`artists_id`
    , `artists`.`artists_name`
	, `artists`.`about`
    , `artists`.`title`
    , `art`.`photo`
    , `art`.`vedio_array`
    , `art`.`audio`
    , `art`.`artwork_title`
    , `art`.`artwork_short_dis`
    , `art`.`images_array` FROM .`art` INNER JOIN `artists`   ON (`art`.`artists_id` = `artists`.`id`) WHERE `art`.`id`='".$dbs->escapeString($_GET['id'])."'");
    $result=$dbs->getResult();
    if($dbs->numRows()==0) {
        echo '<script>window.location="artist.php";</script>';
    }




}else{
    echo '<script>window.location="artist.php";</script>';
}
}else{
    echo '<script>window.location="artist.php";</script>';
}
 ?> 






<style>
/* Carousel */




#quote-carousel {
    padding: 0 10px 30px 10px;
    margin-top: 30px;
    /* Control buttons  */
    /* Previous button  */
    /* Next button  */
    /* Changes the position of the indicators */
    /* Changes the color of the indicators */
}
#quote-carousel .carousel-control {
    background: none;
    color: #CACACA;
    font-size: 2.3em;
    text-shadow: none;
    margin-top: 30px;
}
#quote-carousel .carousel-control.left {
    left: -60px;
}
#quote-carousel .carousel-control.right {
    right: -60px;
}


.carousel-inner {
    min-height: 300px;
}
.item blockquote {
    border-left: none;
    margin: 0;
}
.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
   
}
</style>





<div class="container">
    <div class="custom_container">
   


                   
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
							<?php
								$dbs->sql("SELECT * FROM `art` WHERE `artists_id`='".$dbs->escapeString($result[0]['artists_id'])."' ORDER BY `id` DESC");
								$artistPhoto=$dbs->getResult();
							?>
                            <ol class="carousel-indicators">
														<?php 
															if(@$artistPhoto):
															foreach($artistPhoto as $photoss):
														?>
							
										<li data-target="#quote-carousel" data-slide-to="<?php echo $photoss['id'];?>" class="<?php if($photoss['id']==$_GET['id']){echo "active";}?>"><img class="img-responsive" src="uploads/art_artist/artwork/<?php echo $photoss['photo'];?>" alt="">
										</li>
													<?php 
														endforeach;
														endif;?>
								
                                
                                <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="images/demo154.jpg" alt="">
                                
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="images/demo152.jpg" alt="">
                                </li>
                                 <li data-target="#quote-carousel" data-slide-to="3"><img class="img-responsive" src="images/demo154.jpg" alt="">
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="4"><img class="img-responsive" src="images/demo152.jpg" alt="">
                                </li>
                                
                            </ol>

                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner text-center">
								<?php 
							
							if(@$artistPhoto):
							foreach($artistPhoto as $photo):
							
							?>
                                <!-- Quote 1 -->
                                <div class="item active">
                                    
                                         <div class="row">
											<div class="col-md-4">
												<img src="uploads/art_artist/artwork/<?php echo $photo['photo'];?>" class="img-responsive">
												
												<p class="align_justiphy" style="margin-top:70px;"><?php echo $photo['artwork_short_dis'];?></p>
											 
											</div>
												<div class="details col-md-8 align_justiphy art">
											
													<?php echo $photo['artwork_short_dis'];?>
												</div>
										</div>
                                    
                                </div>
								<?php 
									endforeach;
									endif;?>
								
                                <!-- Quote 2 -->
                                <div class="item">
                                    
                                        <div class="row">
                        <div class="col-md-4">
                            <img src="images/demo154.jpg" class="img-responsive">
                           <p class="align_justiphy" style="margin-top:70px;">Indian. Arghan Div Brings the Chest of Armor to Hamza, 1562-1577. Opaque watercolor and gold on cotton, sheet: 31 1/8 x 24 15/16 in. (79.1 x 63.3 cm). Brooklyn Museum, Museum Collection Fund, 24.47 (Photo: Brooklyn Museum</p>
                        </div>
                            <div class="details col-md-8 align_justiphy art">
						<h3 class="product-title">Arghan Div Brings the Chest of Armor</h3>
						
						<p class="product-description">
                                                    The Hamzanama recounts the picturesque exploits of Hamza, the uncle of the Prophet Muhammad. 
                                                    The Mughal emperor Akbar (ruled 1556–1605) ordered his artists to prepare an illustrated copy of the Hamzanama on a scale never seen before: 1,400 paintings on sheets of paper backed with cloth. 
                                                    Literary sources record that though more than fifty painters busied themselves with the colossal undertaking, it took fifteen years to complete. Four of the folios are held by the Brooklyn Museum.
                                                    
                                                </p>
						
						<p class="product-description">
                                                   This painting depicts the demon Arghan bringing a casket of arms to Hamza. Emerging from the water,
                                                   here rendered by frothy, curling waves, he presents a seemingly ferocious aspect with his spotted skin, flaming eyes,
                                                   and sharp fangs projecting from a mouth with a rather frozen grimace. On the shore is Hamza,
                                                   seated on a throne beneath a bright canopy held up by two poles and ropes.
                                                   His sovereign status is indicated by a row of attendants on his left, 
                                                   carrying such insignia as the yak-tail whisk that is waved over Hamza's head.
                                                </p>
                                                <p class="vote"><strong>MEDIUM</strong> Earthenware with traces of pigment</p>
                                                <p class="vote"><strong>Place Made:</strong> Japan</p>
                                                 <p class="vote"><strong>DATES</strong> 5th-6th century</p>
                                                  <p class="vote"><strong>PERIOD</strong> Kofun Period</p>
                                                   <p class="vote"><strong>DIMENSIONS</strong> 18 x 8 3/4 x 7 1/2 in. (45.7 x 22.2 x 19.1 cm)  (show scale)</p>
                                                    <p class="vote"><strong>COLLECTIONS</strong> Asian Art</p>
                                                     <p class="vote"><strong>MUSEUM LOCATION</strong> This item is not on view</p>
                                                      <p class="vote"><strong>EXHIBITIONS</strong></p>
                                                       <p class="vote"><strong>Curator's Choice:</strong> Ancient Sculptures in Clay</p>
                                                        <p class="vote"><strong>ACCESSION NUMBER</strong> 79.278.1</p>
                                                         <p class="vote"><strong>CREDIT LINE </strong> Gift of Mr. and Mrs. Stanley Marcus</p>
                                                          <p class="vote"><strong>RIGHTS STATEMENT</strong> Creative Commons-BY</p>
                                                           <p class="vote"><strong>CAPTION</strong> Haniwa Figure of a Shamaness, 5th-6th century. 
                                                               Earthenware with traces of pigment, 18 x 8 3/4 x 7 1/2 in. (45.7 x 22.2 x 19.1 cm). Brooklyn Museum, Gift of Mr. and Mrs. 
                                                               Stanley Marcus, 79.278.1. Creative Commons-BY (Photo: Brooklyn Museum, 79.278.1_PS9.jpg)</p>
                                                            <p class="vote"><strong>IMAGE</strong> overall, 79.278.1_PS9.jpg. Brooklyn Museum photograph, 2014</p>
                                                             <p class="vote"><strong>CATALOGUE DESCRIPTION </strong> Three-quarter length standing figure of a priestess, who would have presided over the funeral ceremonies of a Yamato chieftain.
                                                                 She wears a coat-like robe closed diagonally across the chest and having a flaring lower edge. She has a string of beads around her neck and a flat, crescent-shaped headdress.
                                                                 Material: Buff earthenware with traces of red iron-oxide pigment on the lower robe, neck, cheeks, eyebrows, and forehead.
                                                             </p>



					</div>
                    </div>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                   
                                                            <div class="row">
                        <div class="col-md-4">
                            <img src="images/demo152.jpg" class="img-responsive">
                        <p class="align_justiphy" style="margin-top:70px;">Indian. Arghan Div Brings the Chest of Armor to Hamza, 1562-1577. Opaque watercolor and gold on cotton, sheet: 31 1/8 x 24 15/16 in. (79.1 x 63.3 cm). Brooklyn Museum, Museum Collection Fund, 24.47 (Photo: Brooklyn Museum</p>
                        </div>
                            <div class="details col-md-8 align_justiphy art">
						<h3 class="product-title">Arghan Div Brings the Chest of Armor</h3>
						
						<p class="product-description">
                                                    The Hamzanama recounts the picturesque exploits of Hamza, the uncle of the Prophet Muhammad. 
                                                    The Mughal emperor Akbar (ruled 1556–1605) ordered his artists to prepare an illustrated copy of the Hamzanama on a scale never seen before: 1,400 paintings on sheets of paper backed with cloth. 
                                                    Literary sources record that though more than fifty painters busied themselves with the colossal undertaking, it took fifteen years to complete. Four of the folios are held by the Brooklyn Museum.
                                                    
                                                </p>
						
						<p class="product-description">
                                                   This painting depicts the demon Arghan bringing a casket of arms to Hamza. Emerging from the water,
                                                   here rendered by frothy, curling waves, he presents a seemingly ferocious aspect with his spotted skin, flaming eyes,
                                                   and sharp fangs projecting from a mouth with a rather frozen grimace. On the shore is Hamza,
                                                   seated on a throne beneath a bright canopy held up by two poles and ropes.
                                                   His sovereign status is indicated by a row of attendants on his left, 
                                                   carrying such insignia as the yak-tail whisk that is waved over Hamza's head.
                                                </p>
                                                <p class="vote"><strong>MEDIUM</strong> Earthenware with traces of pigment</p>
                                                <p class="vote"><strong>Place Made:</strong> Japan</p>
                                                 <p class="vote"><strong>DATES</strong> 5th-6th century</p>
                                                  <p class="vote"><strong>PERIOD</strong> Kofun Period</p>
                                                   <p class="vote"><strong>DIMENSIONS</strong> 18 x 8 3/4 x 7 1/2 in. (45.7 x 22.2 x 19.1 cm)  (show scale)</p>
                                                    <p class="vote"><strong>COLLECTIONS</strong> Asian Art</p>
                                                     <p class="vote"><strong>MUSEUM LOCATION</strong> This item is not on view</p>
                                                      <p class="vote"><strong>EXHIBITIONS</strong></p>
                                                       <p class="vote"><strong>Curator's Choice:</strong> Ancient Sculptures in Clay</p>
                                                        <p class="vote"><strong>ACCESSION NUMBER</strong> 79.278.1</p>
                                                         <p class="vote"><strong>CREDIT LINE </strong> Gift of Mr. and Mrs. Stanley Marcus</p>
                                                          <p class="vote"><strong>RIGHTS STATEMENT</strong> Creative Commons-BY</p>
                                                           <p class="vote"><strong>CAPTION</strong> Haniwa Figure of a Shamaness, 5th-6th century. 
                                                               Earthenware with traces of pigment, 18 x 8 3/4 x 7 1/2 in. (45.7 x 22.2 x 19.1 cm). Brooklyn Museum, Gift of Mr. and Mrs. 
                                                               Stanley Marcus, 79.278.1. Creative Commons-BY (Photo: Brooklyn Museum, 79.278.1_PS9.jpg)</p>
                                                            <p class="vote"><strong>IMAGE</strong> overall, 79.278.1_PS9.jpg. Brooklyn Museum photograph, 2014</p>
                                                             <p class="vote"><strong>CATALOGUE DESCRIPTION </strong> Three-quarter length standing figure of a priestess, who would have presided over the funeral ceremonies of a Yamato chieftain.
                                                                 She wears a coat-like robe closed diagonally across the chest and having a flaring lower edge. She has a string of beads around her neck and a flat, crescent-shaped headdress.
                                                                 Material: Buff earthenware with traces of red iron-oxide pigment on the lower robe, neck, cheeks, eyebrows, and forehead.
                                                             </p>



					</div>
                    </div>
                                   
                                </div>
                                 <div class="item">
                                   
                                                           <div class="row">
                        <div class="col-md-4">
                            <img src="images/demo154.jpg" class="img-responsive">
                           <p class="align_justiphy" style="margin-top:70px;">Indian. Arghan Div Brings the Chest of Armor to Hamza, 1562-1577. Opaque watercolor and gold on cotton, sheet: 31 1/8 x 24 15/16 in. (79.1 x 63.3 cm). Brooklyn Museum, Museum Collection Fund, 24.47 (Photo: Brooklyn Museum</p>
                        </div>
                            <div class="details col-md-8 align_justiphy art">
						<h3 class="product-title">Arghan Div Brings the Chest of Armor</h3>
						
						<p class="product-description">
                                                    The Hamzanama recounts the picturesque exploits of Hamza, the uncle of the Prophet Muhammad. 
                                                    The Mughal emperor Akbar (ruled 1556–1605) ordered his artists to prepare an illustrated copy of the Hamzanama on a scale never seen before: 1,400 paintings on sheets of paper backed with cloth. 
                                                    Literary sources record that though more than fifty painters busied themselves with the colossal undertaking, it took fifteen years to complete. Four of the folios are held by the Brooklyn Museum.
                                                    
                                                </p>
						
						<p class="product-description">
                                                   This painting depicts the demon Arghan bringing a casket of arms to Hamza. Emerging from the water,
                                                   here rendered by frothy, curling waves, he presents a seemingly ferocious aspect with his spotted skin, flaming eyes,
                                                   and sharp fangs projecting from a mouth with a rather frozen grimace. On the shore is Hamza,
                                                   seated on a throne beneath a bright canopy held up by two poles and ropes.
                                                   His sovereign status is indicated by a row of attendants on his left, 
                                                   carrying such insignia as the yak-tail whisk that is waved over Hamza's head.
                                                </p>
                                                <p class="vote"><strong>MEDIUM</strong> Earthenware with traces of pigment</p>
                                                <p class="vote"><strong>Place Made:</strong> Japan</p>
                                                 <p class="vote"><strong>DATES</strong> 5th-6th century</p>
                                                  <p class="vote"><strong>PERIOD</strong> Kofun Period</p>
                                                   <p class="vote"><strong>DIMENSIONS</strong> 18 x 8 3/4 x 7 1/2 in. (45.7 x 22.2 x 19.1 cm)  (show scale)</p>
                                                    <p class="vote"><strong>COLLECTIONS</strong> Asian Art</p>
                                                     <p class="vote"><strong>MUSEUM LOCATION</strong> This item is not on view</p>
                                                      <p class="vote"><strong>EXHIBITIONS</strong></p>
                                                       <p class="vote"><strong>Curator's Choice:</strong> Ancient Sculptures in Clay</p>
                                                        <p class="vote"><strong>ACCESSION NUMBER</strong> 79.278.1</p>
                                                         <p class="vote"><strong>CREDIT LINE </strong> Gift of Mr. and Mrs. Stanley Marcus</p>
                                                          <p class="vote"><strong>RIGHTS STATEMENT</strong> Creative Commons-BY</p>
                                                           <p class="vote"><strong>CAPTION</strong> Haniwa Figure of a Shamaness, 5th-6th century. 
                                                               Earthenware with traces of pigment, 18 x 8 3/4 x 7 1/2 in. (45.7 x 22.2 x 19.1 cm). Brooklyn Museum, Gift of Mr. and Mrs. 
                                                               Stanley Marcus, 79.278.1. Creative Commons-BY (Photo: Brooklyn Museum, 79.278.1_PS9.jpg)</p>
                                                            <p class="vote"><strong>IMAGE</strong> overall, 79.278.1_PS9.jpg. Brooklyn Museum photograph, 2014</p>
                                                             <p class="vote"><strong>CATALOGUE DESCRIPTION </strong> Three-quarter length standing figure of a priestess, who would have presided over the funeral ceremonies of a Yamato chieftain.
                                                                 She wears a coat-like robe closed diagonally across the chest and having a flaring lower edge. She has a string of beads around her neck and a flat, crescent-shaped headdress.
                                                                 Material: Buff earthenware with traces of red iron-oxide pigment on the lower robe, neck, cheeks, eyebrows, and forehead.
                                                             </p>



					</div>
                    </div>
                                   
                                </div>
                                 <div class="item">
                                   
                                                          <div class="row">
                        <div class="col-md-4">
                            <img src="images/demo152.jpg" class="img-responsive">
                            <p class="align_justiphy" style="margin-top:70px;">Indian. Arghan Div Brings the Chest of Armor to Hamza, 1562-1577. Opaque watercolor and gold on cotton, sheet: 31 1/8 x 24 15/16 in. (79.1 x 63.3 cm). Brooklyn Museum, Museum Collection Fund, 24.47 (Photo: Brooklyn Museum</p>
                        </div>
                            <div class="details col-md-8 align_justiphy art">
						<h3 class="product-title">Arghan Div Brings the Chest of Armor</h3>
						
						<p class="product-description">
                                                    The Hamzanama recounts the picturesque exploits of Hamza, the uncle of the Prophet Muhammad. 
                                                    The Mughal emperor Akbar (ruled 1556–1605) ordered his artists to prepare an illustrated copy of the Hamzanama on a scale never seen before: 1,400 paintings on sheets of paper backed with cloth. 
                                                    Literary sources record that though more than fifty painters busied themselves with the colossal undertaking, it took fifteen years to complete. Four of the folios are held by the Brooklyn Museum.
                                                    
                                                </p>
						
						<p class="product-description">
                                                   This painting depicts the demon Arghan bringing a casket of arms to Hamza. Emerging from the water,
                                                   here rendered by frothy, curling waves, he presents a seemingly ferocious aspect with his spotted skin, flaming eyes,
                                                   and sharp fangs projecting from a mouth with a rather frozen grimace. On the shore is Hamza,
                                                   seated on a throne beneath a bright canopy held up by two poles and ropes.
                                                   His sovereign status is indicated by a row of attendants on his left, 
                                                   carrying such insignia as the yak-tail whisk that is waved over Hamza's head.
                                                </p>
                                                <p class="vote"><strong>MEDIUM</strong> Earthenware with traces of pigment</p>
                                                <p class="vote"><strong>Place Made:</strong> Japan</p>
                                                 <p class="vote"><strong>DATES</strong> 5th-6th century</p>
                                                  <p class="vote"><strong>PERIOD</strong> Kofun Period</p>
                                                   <p class="vote"><strong>DIMENSIONS</strong> 18 x 8 3/4 x 7 1/2 in. (45.7 x 22.2 x 19.1 cm)  (show scale)</p>
                                                    <p class="vote"><strong>COLLECTIONS</strong> Asian Art</p>
                                                     <p class="vote"><strong>MUSEUM LOCATION</strong> This item is not on view</p>
                                                      <p class="vote"><strong>EXHIBITIONS</strong></p>
                                                       <p class="vote"><strong>Curator's Choice:</strong> Ancient Sculptures in Clay</p>
                                                        <p class="vote"><strong>ACCESSION NUMBER</strong> 79.278.1</p>
                                                         <p class="vote"><strong>CREDIT LINE </strong> Gift of Mr. and Mrs. Stanley Marcus</p>
                                                          <p class="vote"><strong>RIGHTS STATEMENT</strong> Creative Commons-BY</p>
                                                           <p class="vote"><strong>CAPTION</strong> Haniwa Figure of a Shamaness, 5th-6th century. 
                                                               Earthenware with traces of pigment, 18 x 8 3/4 x 7 1/2 in. (45.7 x 22.2 x 19.1 cm). Brooklyn Museum, Gift of Mr. and Mrs. 
                                                               Stanley Marcus, 79.278.1. Creative Commons-BY (Photo: Brooklyn Museum, 79.278.1_PS9.jpg)</p>
                                                            <p class="vote"><strong>IMAGE</strong> overall, 79.278.1_PS9.jpg. Brooklyn Museum photograph, 2014</p>
                                                             <p class="vote"><strong>CATALOGUE DESCRIPTION </strong> Three-quarter length standing figure of a priestess, who would have presided over the funeral ceremonies of a Yamato chieftain.
                                                                 She wears a coat-like robe closed diagonally across the chest and having a flaring lower edge. She has a string of beads around her neck and a flat, crescent-shaped headdress.
                                                                 Material: Buff earthenware with traces of red iron-oxide pigment on the lower robe, neck, cheeks, eyebrows, and forehead.
                                                             </p>



					</div>
                    </div>
                                   
                                </div>
                            </div>
							
							

                            
                        </div>
                    
              


</div>
</div>
<?php include("footer.php");?>