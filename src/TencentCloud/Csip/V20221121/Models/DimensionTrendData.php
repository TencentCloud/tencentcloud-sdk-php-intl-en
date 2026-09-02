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
 * Dimensional trend data
 *
 * @method string getDimensionId() Obtain Dimension ID
Enumeration values:
risk_governance: Risk Governance
threat_detection: threat detection
 * @method void setDimensionId(string $DimensionId) Set Dimension ID
Enumeration values:
risk_governance: Risk Governance
threat_detection: threat detection
 * @method array getDataPoints() Obtain Daily data point
 * @method void setDataPoints(array $DataPoints) Set Daily data point
 */
class DimensionTrendData extends AbstractModel
{
    /**
     * @var string Dimension ID
Enumeration values:
risk_governance: Risk Governance
threat_detection: threat detection
     */
    public $DimensionId;

    /**
     * @var array Daily data point
     */
    public $DataPoints;

    /**
     * @param string $DimensionId Dimension ID
Enumeration values:
risk_governance: Risk Governance
threat_detection: threat detection
     * @param array $DataPoints Daily data point
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
        if (array_key_exists("DimensionId",$param) and $param["DimensionId"] !== null) {
            $this->DimensionId = $param["DimensionId"];
        }

        if (array_key_exists("DataPoints",$param) and $param["DataPoints"] !== null) {
            $this->DataPoints = [];
            foreach ($param["DataPoints"] as $key => $value){
                $obj = new TrendDataPoint();
                $obj->deserialize($value);
                array_push($this->DataPoints, $obj);
            }
        }
    }
}
