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
 * Average value for the trend graph of a cost allocation bill
 *
 * @method string getBeginMonth() Obtain Start month
 * @method void setBeginMonth(string $BeginMonth) Set Start month
 * @method string getEndMonth() Obtain End month.
 * @method void setEndMonth(string $EndMonth) Set End month.
 * @method string getRealTotalCost() Obtain Average value of total fees (discounted total)
 * @method void setRealTotalCost(string $RealTotalCost) Set Average value of total fees (discounted total)
 */
class AllocationAverageData extends AbstractModel
{
    /**
     * @var string Start month
     */
    public $BeginMonth;

    /**
     * @var string End month.
     */
    public $EndMonth;

    /**
     * @var string Average value of total fees (discounted total)
     */
    public $RealTotalCost;

    /**
     * @param string $BeginMonth Start month
     * @param string $EndMonth End month.
     * @param string $RealTotalCost Average value of total fees (discounted total)
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
        if (array_key_exists("BeginMonth",$param) and $param["BeginMonth"] !== null) {
            $this->BeginMonth = $param["BeginMonth"];
        }

        if (array_key_exists("EndMonth",$param) and $param["EndMonth"] !== null) {
            $this->EndMonth = $param["EndMonth"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }
    }
}
