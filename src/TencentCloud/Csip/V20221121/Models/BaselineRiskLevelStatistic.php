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
 * Statistics of detection failures aggregated by risk level.
 *
 * @method string getRiskLevel() Obtain <p>Risk level. Parameter value: LOW, MEDIUM, HIGH, CRITICAL.</p>
 * @method void setRiskLevel(string $RiskLevel) Set <p>Risk level. Parameter value: LOW, MEDIUM, HIGH, CRITICAL.</p>
 * @method integer getNotPassCount() Obtain <p>Number of detection items with a NOT_PASS result at this risk level.</p>
 * @method void setNotPassCount(integer $NotPassCount) Set <p>Number of detection items with a NOT_PASS result at this risk level.</p>
 */
class BaselineRiskLevelStatistic extends AbstractModel
{
    /**
     * @var string <p>Risk level. Parameter value: LOW, MEDIUM, HIGH, CRITICAL.</p>
     */
    public $RiskLevel;

    /**
     * @var integer <p>Number of detection items with a NOT_PASS result at this risk level.</p>
     */
    public $NotPassCount;

    /**
     * @param string $RiskLevel <p>Risk level. Parameter value: LOW, MEDIUM, HIGH, CRITICAL.</p>
     * @param integer $NotPassCount <p>Number of detection items with a NOT_PASS result at this risk level.</p>
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

        if (array_key_exists("NotPassCount",$param) and $param["NotPassCount"] !== null) {
            $this->NotPassCount = $param["NotPassCount"];
        }
    }
}
