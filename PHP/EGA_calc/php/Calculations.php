<?php

    /**
    * this is the class that the calulator form interacts with.
    * TODO either do everything in this class, or split out into  different
    * classes if functionality to diverse.
    **/
    class Calculations
    {
        /**
        * returns the  current value plus the percentage increase specified
        *@Param currentValue the current value
        *@Param percentageIncrease the percentage value you wish to increase 
        *       currentValue by.
        **/
        public function increaseByPercentage($currentValue, $percentageIncrease)
        {
            $percentageIncrease = ($percentageIncrease/100);
            
            return (($currentValue * $percentageIncrease)+$currentValue);
        }
        
        /**
        * compute the new revenue value
        **/        
        public function computeRevenue($orderVal, $visitors, $convRate)
        {
            return ($orderVal*$visitors*$convRate)/100;
        }
        
        /**
         * compute the increase in value as  percentage
        **/
        public function computePercentageIncrease ($current, $new)
        {
            if($current && $new != 0)
                {
                    return (($new-$current)/$new)*100;
                }
            else
                {
                    return 0;
                }
        }
        
        /**
        * calculate the gross profit margin
        **/
        public function computeGrossProfitMargin($revenue, $avMargin)
        {
            return ($revenue * $avMargin)/100;
        }
        
        /**
        * Calculate the return on investement, from the and investement value and
        * the difference between the current and new gross profit margins.
        **/
        public function computeROI($investement, $newGPM, $currentGPM)
        {
            if ($newGPM-$currentGPM == 0)
                {
                    return ($investement/(1));
                }
            else
                {
                    return ($investement/($newGPM-$currentGPM)); ;
                }
        }
    }

?>