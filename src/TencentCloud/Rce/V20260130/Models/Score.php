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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Risk score
 *
 * @method integer getRiskScore() Obtain <p>Risk score. Range: 1–1000. The higher the score indicates the higher risk</p>
 * @method void setRiskScore(integer $RiskScore) Set <p>Risk score. Range: 1–1000. The higher the score indicates the higher risk</p>
 * @method array getRiskLabels() Obtain <p>Risk label</p>
 * @method void setRiskLabels(array $RiskLabels) Set <p>Risk label</p>
 */
class Score extends AbstractModel
{
    /**
     * @var integer <p>Risk score. Range: 1–1000. The higher the score indicates the higher risk</p>
     */
    public $RiskScore;

    /**
     * @var array <p>Risk label</p>
     */
    public $RiskLabels;

    /**
     * @param integer $RiskScore <p>Risk score. Range: 1–1000. The higher the score indicates the higher risk</p>
     * @param array $RiskLabels <p>Risk label</p>
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
        if (array_key_exists("RiskScore",$param) and $param["RiskScore"] !== null) {
            $this->RiskScore = $param["RiskScore"];
        }

        if (array_key_exists("RiskLabels",$param) and $param["RiskLabels"] !== null) {
            $this->RiskLabels = [];
            foreach ($param["RiskLabels"] as $key => $value){
                $obj = new RiskLabel();
                $obj->deserialize($value);
                array_push($this->RiskLabels, $obj);
            }
        }
    }
}
