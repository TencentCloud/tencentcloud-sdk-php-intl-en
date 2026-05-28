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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost analysis dimension data
 *
 * @method integer getTotalCount() Obtain <p>Total number of entries by dimension statistics</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>Total number of entries by dimension statistics</p>
 * @method string getSumCost() Obtain <p>Sum value</p>
 * @method void setSumCost(string $SumCost) Set <p>Sum value</p>
 * @method array getPeriodItemDetail() Obtain <p>Total amount by date dimension</p>
 * @method void setPeriodItemDetail(array $PeriodItemDetail) Set <p>Total amount by date dimension</p>
 */
class CostAnalyzeDimensionData extends AbstractModel
{
    /**
     * @var integer <p>Total number of entries by dimension statistics</p>
     */
    public $TotalCount;

    /**
     * @var string <p>Sum value</p>
     */
    public $SumCost;

    /**
     * @var array <p>Total amount by date dimension</p>
     */
    public $PeriodItemDetail;

    /**
     * @param integer $TotalCount <p>Total number of entries by dimension statistics</p>
     * @param string $SumCost <p>Sum value</p>
     * @param array $PeriodItemDetail <p>Total amount by date dimension</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SumCost",$param) and $param["SumCost"] !== null) {
            $this->SumCost = $param["SumCost"];
        }

        if (array_key_exists("PeriodItemDetail",$param) and $param["PeriodItemDetail"] !== null) {
            $this->PeriodItemDetail = [];
            foreach ($param["PeriodItemDetail"] as $key => $value){
                $obj = new PeriodItemDetail();
                $obj->deserialize($value);
                array_push($this->PeriodItemDetail, $obj);
            }
        }
    }
}
