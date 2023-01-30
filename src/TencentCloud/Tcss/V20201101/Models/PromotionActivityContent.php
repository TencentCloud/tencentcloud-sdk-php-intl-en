<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Promotion content
 *
 * @method integer getMonthNum() Obtain Number of months
 * @method void setMonthNum(integer $MonthNum) Set Number of months
 * @method integer getCoresCountLimit() Obtain Minimum number of cores
 * @method void setCoresCountLimit(integer $CoresCountLimit) Set Minimum number of cores
 * @method integer getProfessionalDiscount() Obtain Discount on the Pro Edition
 * @method void setProfessionalDiscount(integer $ProfessionalDiscount) Set Discount on the Pro Edition
 * @method integer getImageAuthorizationNum() Obtain Number of free images
 * @method void setImageAuthorizationNum(integer $ImageAuthorizationNum) Set Number of free images
 */
class PromotionActivityContent extends AbstractModel
{
    /**
     * @var integer Number of months
     */
    public $MonthNum;

    /**
     * @var integer Minimum number of cores
     */
    public $CoresCountLimit;

    /**
     * @var integer Discount on the Pro Edition
     */
    public $ProfessionalDiscount;

    /**
     * @var integer Number of free images
     */
    public $ImageAuthorizationNum;

    /**
     * @param integer $MonthNum Number of months
     * @param integer $CoresCountLimit Minimum number of cores
     * @param integer $ProfessionalDiscount Discount on the Pro Edition
     * @param integer $ImageAuthorizationNum Number of free images
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("MonthNum",$param) and $param["MonthNum"] !== null) {
            $this->MonthNum = $param["MonthNum"];
        }

        if (array_key_exists("CoresCountLimit",$param) and $param["CoresCountLimit"] !== null) {
            $this->CoresCountLimit = $param["CoresCountLimit"];
        }

        if (array_key_exists("ProfessionalDiscount",$param) and $param["ProfessionalDiscount"] !== null) {
            $this->ProfessionalDiscount = $param["ProfessionalDiscount"];
        }

        if (array_key_exists("ImageAuthorizationNum",$param) and $param["ImageAuthorizationNum"] !== null) {
            $this->ImageAuthorizationNum = $param["ImageAuthorizationNum"];
        }
    }
}
