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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Object Storage risk trend chart
 *
 * @method string getCurrentDateStr() Obtain Current date.
 * @method void setCurrentDateStr(string $CurrentDateStr) Set Current date.
 * @method array getRiskDataSet() Obtain Risk data information
 * @method void setRiskDataSet(array $RiskDataSet) Set Risk data information
 */
class CosRiskTrendInfo extends AbstractModel
{
    /**
     * @var string Current date.
     */
    public $CurrentDateStr;

    /**
     * @var array Risk data information
     */
    public $RiskDataSet;

    /**
     * @param string $CurrentDateStr Current date.
     * @param array $RiskDataSet Risk data information
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
        if (array_key_exists("CurrentDateStr",$param) and $param["CurrentDateStr"] !== null) {
            $this->CurrentDateStr = $param["CurrentDateStr"];
        }

        if (array_key_exists("RiskDataSet",$param) and $param["RiskDataSet"] !== null) {
            $this->RiskDataSet = [];
            foreach ($param["RiskDataSet"] as $key => $value){
                $obj = new CosRiskInfo();
                $obj->deserialize($value);
                array_push($this->RiskDataSet, $obj);
            }
        }
    }
}
