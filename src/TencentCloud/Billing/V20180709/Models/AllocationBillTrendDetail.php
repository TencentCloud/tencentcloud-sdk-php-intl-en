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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detail data of cost allocation trend chart
 *
 * @method string getMonth() Obtain Bill month
 * @method void setMonth(string $Month) Set Bill month
 * @method string getName() Obtain Displayed name of bill month
 * @method void setName(string $Name) Set Displayed name of bill month
 * @method string getRealTotalCost() Obtain Total fees (discounted total): Total fees of the cost allocation unit, Collected Fees (discounted total) + Allocated Fees (discounted total)
 * @method void setRealTotalCost(string $RealTotalCost) Set Total fees (discounted total): Total fees of the cost allocation unit, Collected Fees (discounted total) + Allocated Fees (discounted total)
 */
class AllocationBillTrendDetail extends AbstractModel
{
    /**
     * @var string Bill month
     */
    public $Month;

    /**
     * @var string Displayed name of bill month
     */
    public $Name;

    /**
     * @var string Total fees (discounted total): Total fees of the cost allocation unit, Collected Fees (discounted total) + Allocated Fees (discounted total)
     */
    public $RealTotalCost;

    /**
     * @param string $Month Bill month
     * @param string $Name Displayed name of bill month
     * @param string $RealTotalCost Total fees (discounted total): Total fees of the cost allocation unit, Collected Fees (discounted total) + Allocated Fees (discounted total)
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }
    }
}
