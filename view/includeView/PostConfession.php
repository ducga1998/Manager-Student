<h1>Name post:<?php 
                       echo $rows["Name"];
                        
                        ?></h1>
                        <form action="" id="formPostConfession">
                            <div class="row">
                                
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                <div class="form-group">
                            <label for="comment">Title:</label>
                            <input name="tilte" type="text" class="form-control" id="TitleConfession">
                        </div>
                        <input name="IdUser" type="hidden" class="form-control" value=<?php echo $rows["id"] ?> >
                        <input name="UserName" type="hidden" class="form-control" value=<?php echo $rows["UserName"] ?> >
                       
                       
                                </div>
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                <div class="form-group">
                            <label for="comment">Category:</label>
                            <input name="Category" type="text" class="form-control" id="Category">
                        </div>
                                </div>
                                
                        
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea name="Content" class="form-control" rows="5" id="Content"></textarea>
                        </div>
                        <input 
                        type="submit" class="btn btn-primary btn-post" value="Post">
                        </form>
                        
                        <div class="alert alert-success success">
                           
                        </div>
                        


                    </div>