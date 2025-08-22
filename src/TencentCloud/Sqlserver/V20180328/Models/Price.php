<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getPrepaidPrice() Obtain 
 * @method void setPrepaidPrice(integer $PrepaidPrice) Set 
 * @method string getPrepaidPriceUnit() Obtain 
 * @method void setPrepaidPriceUnit(string $PrepaidPriceUnit) Set 
 * @method integer getPostpaidPrice() Obtain 
 * @method void setPostpaidPrice(integer $PostpaidPrice) Set 
 * @method string getPostpaidPriceUnit() Obtain 
 * @method void setPostpaidPriceUnit(string $PostpaidPriceUnit) Set 
 */
class Price extends AbstractModel
{
    /**
     * @var integer 
     */
    public $PrepaidPrice;

    /**
     * @var string 
     */
    public $PrepaidPriceUnit;

    /**
     * @var integer 
     */
    public $PostpaidPrice;

    /**
     * @var string 
     */
    public $PostpaidPriceUnit;

    /**
     * @param integer $PrepaidPrice 
     * @param string $PrepaidPriceUnit 
     * @param integer $PostpaidPrice 
     * @param string $PostpaidPriceUnit 
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
        if (array_key_exists("PrepaidPrice",$param) and $param["PrepaidPrice"] !== null) {
            $this->PrepaidPrice = $param["PrepaidPrice"];
        }

        if (array_key_exists("PrepaidPriceUnit",$param) and $param["PrepaidPriceUnit"] !== null) {
            $this->PrepaidPriceUnit = $param["PrepaidPriceUnit"];
        }

        if (array_key_exists("PostpaidPrice",$param) and $param["PostpaidPrice"] !== null) {
            $this->PostpaidPrice = $param["PostpaidPrice"];
        }

        if (array_key_exists("PostpaidPriceUnit",$param) and $param["PostpaidPriceUnit"] !== null) {
            $this->PostpaidPriceUnit = $param["PostpaidPriceUnit"];
        }
    }
}
