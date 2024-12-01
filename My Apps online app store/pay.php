<!DOCTYPE html>
<html>
    <head>
        <Title></Title>
        <link rel="stylesheet" href="paystyle.css">
        <script src="js/pay.js"></script>
    </head>
    <body>
        
            <div class="cont" >
            
                <h1>Payment</h1>
                <img src="images/card2.jpg" alt="card method" class="logo2"><br><br><br><br><br>
                
                <form action="crud_OP.php" method="post">
                    
                    CARD HOLDER'S NAME<br>
                    <input type="text" name="cardHolder" class="box" placeholder="S G D KAVINDA"><br>
                    CARD NUMBER<br>
                    <input type="number" name="cardNumber" maxlength="16" class="box" placeholder="2001XXXXXXXX6733"><br>
                       
                        <div class="expire">
                            EXPIRY MONTH<br>
                            <select name="month" id="month" class="ex">
                                <option value="jan">January</option>
                                <option value="feb">February</option>
                                <option value="mar">March</option>
                                <option value="apr">April</option>
                                <option value="may">May</option>
                                <option value="june">June</option>
                                <option value="july">July</option>
                                <option value="aug">August</option>
                                <option value="sep">September</option>
                                <option value="oct">Octomber</option>
                                <option value="nov">November</option>
                                <option value="dec">December</option>
                            </select>
                        
                       
                            EXPIRY YEAR <br>
                            <select name="year" id="year" class="ex">
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                                <option value="2031">2031</option>
                                <option value="2032">2032</option>
                                <option value="2033">2033</option>
                                <option value="2034">2034</option>
                            </select>
                        
                        
                            <lable for="CVV" class="cv">CVV</lable><br>
                            <input type="text" name="cvv" class="cvv" maxlength="4" placeholder="4XX"><br>
                        
                    </div>
                        <div class="amount">
                        PAYMENT AMOUNT<br>
                        <input type="number" name="amount" class="box" placeholder="Rs.XXXX"><br>
                        </div>

                        <input type="checkbox" id="checkbox" name="checkbox" name="checkbox" onclick="enableButton()">
                        <label for="checkbox">I accept the Privacy Policy and Terms</label>

                        <div class="PAY">
                            <input type="submit" name="submit" value="Pay" class="pay" id="pay" onclick="message()">
                        </div>

                       
                    
                    
                       
                
                    

                </form>
                
           
            </div>
    </body>
</html>