<?php
require 'Validation.php';
require 'Calculations.php';
require 'HTML_Gen.php';
/**
*
**/
class EGA_Calc extends HTML_Gen
{
    private $validator;
    private $calculations;
    
    private $html;
    
    /**
    * Create widget on object creation 
    **/
    public function __construct($context)
    {
        parent::__construct($context);
        //**********************************START OF VAR INIT**********************************************
        $validator = new Validation();
        $calculations = new Calculations();
        //current, increase and new order values
        $CorderVal = $validator->calcInputCheck('CorderVal'); 
        $IorderVal = $validator->calcInputCheck('IorderVal');
        $NorderVal = $calculations->increasebyPercentage($CorderVal, $IorderVal);
        //current, increase and new visitors per month
        $CvisitorsPerMonth = $validator->calcInputCheck('CvisitorsPerMonth'); 
        $IvisitorsPerMonth = $validator->calcInputCheck('IvisitorsPerMonth'); 
        $NvisitorsPerMonth = $calculations->increasebyPercentage($CvisitorsPerMonth, $IvisitorsPerMonth);
        //current, increase and new conversion rate
        $CconversionRate = $validator->calcInputCheck('CconversionRate'); 
        $IconversionRate = $validator->calcInputCheck('IconversionRate');
        $NconversionRate = $calculations->increasebyPercentage($CconversionRate, $IconversionRate);
        //current, Increase and new Av Margins
        $CavMargin = $validator->calcInputCheck('CavMargin');
        $IavMargin = $validator->calcInputCheck('IavMargin');
        $NavMargin = $calculations->increaseByPercentage($CavMargin, $IavMargin);
        //current, increase and new revenue values
        $Crevenue = $calculations->computeRevenue($CorderVal, $CvisitorsPerMonth, $CconversionRate);
        $Nrevenue = $calculations->computeRevenue($NorderVal, $NvisitorsPerMonth, $NconversionRate);
        $Irevenue = $calculations->computePercentageIncrease($Crevenue, $Nrevenue);
        //current, increase and new Gross Profit Margin
        $Cgpm = $calculations -> computeGrossProfitMargin($Crevenue, $CavMargin);
        $Ngpm = $calculations -> computeGrossProfitMargin($Nrevenue, $NavMargin);
        $Igpm = $calculations -> computePercentageIncrease($Cgpm, $Ngpm);
        //Investement capital and ROI
        $investement = $validator -> calcInputCheck('investement');
        
        $roi = $calculations-> computeROI($investement,$Ngpm, $Cgpm);
        //*********************************ENDOF VAR INIT**************************************************
        
        
        //*********************************START OF HTML***************************************************
        //initialise rows for calculator table
        $row1 = $this->headerRow("Current Value" , "Percentage Increase" , "New Value");
        $row2 = $this->calculationRow
        ("Av Order Value" ,$CorderVal ,$IorderVal ,"CorderVal" ,"IorderVal" ,$NorderVal);
        $row3 = $this->calculationRow
        ("Visitors Per Month" ,$CvisitorsPerMonth ,$IvisitorsPerMonth ,"CvisitorsPerMonth" ,"IvisitorsPerMonth" ,$NvisitorsPerMonth);
        $row4 = $this->calculationRow
        ("Conversion Rate" ,$CconversionRate ,$IconversionRate ,"CconversionRate" ,"IconversionRate" ,$NconversionRate );
        $row5 = $this->calculationRow
        ("Av Margin" ,$CavMargin, $IavMargin, "CavMargin", "IavMargin", $NavMargin);
        $row6 = $this->resultsRow("Revenue" ,$Crevenue, $Irevenue, $Nrevenue);
        $row7 = $this->resultsRow("Gross Profit Margin",$Cgpm , $Igpm , $Ngpm);
        $row8 = $this->investROIrow("Investement", "ROI", $investement, "investement", $roi);
        //create table from above rows,         
        $calcTable = HTML_Gen::element("TABLE", "class='table table-bordered'" , $row1.$row2.$row3.$row4.$row5.$row6.$row7.$row8);
        $submitBtn = HTML_Gen::element("INPUT" , "type='submit' value='submit'" , "");


        $calcForm = HTML_Gen::element("FORM" , "action='$context' method='POST'" , $calcTable.$submitBtn);        
        echo $calcContainer = HTML_Gen::element("DIV" ,"class='form-group'" , $calcForm);
         //*******************************ENDOF HTML*******************************************************
    }
  
    //***********************************START OF HELPER METHODS*******************************************
    /**
    * create a header row
    **/   
    private function headerRow($header1, $header2, $header3)
    {   
        $cell1 = HTML_Gen::element("TH" , "" , "");   
        $cell2 = HTML_Gen::element("TH" , "" , $header1);
        $cell3 = HTML_Gen::element("TH" , "" , $header2);
        $cell4 = HTML_Gen::element("TH" , "" , $header3);
        $row = HTML_Gen::element( "TR","class='active'", $cell1.$cell2.$cell3.$cell4);
        return HTML_Gen::element( "THEAD","", $row);
    }
    
    /**
    * create a calculation row 
    **/
    private function calculationRow($name, $input1, $input2, $postVar1 ,$postVar2 ,$result)
    {
        $inputBox1 = HTML_Gen::element("INPUT" , "type='text' name='$postVar1' class='form-control' value=$input1" , "");
        $inputBox2 = HTML_Gen::element("INPUT" , "type='text' name='$postVar2' class='form-control' value=$input2" , "");
        $cell1 = HTML_Gen::element("TH" , "class='active'" , $name);
        $cell2 = HTML_Gen::element("TD" , "" , $inputBox1);
        $cell3 = HTML_Gen::element("TD" , "" , $inputBox2);
        $cell4 = HTML_Gen::element("TD" , "class='success'" , $result);
        return HTML_Gen::element( "TR","", $cell1.$cell2.$cell3.$cell4);
    }
    
    /**
    * create a row to display some results only
    **/
    private function resultsRow($name, $result1, $result2, $result3)
    {
        $cell1 = HTML_Gen::element("TH" , "class='active'" , $name);
        $cell2 = HTML_Gen::element("TD" , "class='success'" , $result1);
        $cell3 = HTML_Gen::element("TD" , "class='success'" , $result2);
        $cell4 = HTML_Gen::element("TD" , "class='success'" , $result3);
        return HTML_Gen::element( "TR","", $cell1.$cell2.$cell3.$cell4);
    }
    
    /**
    *
    **/
    private function investROIrow($name1, $name2 ,$investement, $invPostVar, $roi)
    {
        $input = HTML_Gen::element("INPUT" , "type='text' name='$invPostVar' class='form-control' value='$investement'" , "");
        $cell1 = HTML_Gen::element("TH" , "class='active'" , $name1);
        $cell2 = HTML_Gen::element("TD" , "" , $input);
        $cell3 = HTML_Gen::element("TH" , "class='active'" , $name2);
        $cell4 = HTML_Gen::element("TD" , "class='success'" , $roi);
        return HTML_Gen::element( "TR","", $cell1.$cell2.$cell3.$cell4);
    }
    //**********************************ENDOF HELPER METHODS**************************************************
}
?>