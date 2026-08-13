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
 * Risk score information
 *
 * @method integer getRiskLevel() Obtain <p>Risk level</p>
 * @method void setRiskLevel(integer $RiskLevel) Set <p>Risk level</p>
 * @method array getRiskLabels() Obtain <p>Risk label</p>
 * @method void setRiskLabels(array $RiskLabels) Set <p>Risk label</p>
 * @method integer getRiskScore() Obtain <p>Comprehensive risk score.</p><p>Value ranges from 1 to 1000.</p><p>The larger the value, the larger the risk.</p>
 * @method void setRiskScore(integer $RiskScore) Set <p>Comprehensive risk score.</p><p>Value ranges from 1 to 1000.</p><p>The larger the value, the larger the risk.</p>
 */
class DataScore extends AbstractModel
{
    /**
     * @var integer <p>Risk level</p>
     */
    public $RiskLevel;

    /**
     * @var array <p>Risk label</p>
     */
    public $RiskLabels;

    /**
     * @var integer <p>Comprehensive risk score.</p><p>Value ranges from 1 to 1000.</p><p>The larger the value, the larger the risk.</p>
     */
    public $RiskScore;

    /**
     * @param integer $RiskLevel <p>Risk level</p>
     * @param array $RiskLabels <p>Risk label</p>
     * @param integer $RiskScore <p>Comprehensive risk score.</p><p>Value ranges from 1 to 1000.</p><p>The larger the value, the larger the risk.</p>
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
        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskLabels",$param) and $param["RiskLabels"] !== null) {
            $this->RiskLabels = [];
            foreach ($param["RiskLabels"] as $key => $value){
                $obj = new RiskLabel();
                $obj->deserialize($value);
                array_push($this->RiskLabels, $obj);
            }
        }

        if (array_key_exists("RiskScore",$param) and $param["RiskScore"] !== null) {
            $this->RiskScore = $param["RiskScore"];
        }
    }
}
