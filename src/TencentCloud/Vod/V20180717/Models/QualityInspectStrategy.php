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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Policy information for audio and video quality inspection.
 *
 * @method string getStrategyType() Obtain <p>Policy type.</p><p>Enumeration values:</p><ul><li>TimeSpotCheck: Time-based spot check policy.</li></ul>
 * @method void setStrategyType(string $StrategyType) Set <p>Policy type.</p><p>Enumeration values:</p><ul><li>TimeSpotCheck: Time-based spot check policy.</li></ul>
 * @method QualityInspectTimeSpotCheck getTimeSpotCheck() Obtain <p>Spot check policy parameter based on time. Valid when StrategyType is TimeSpotCheck.</p>
 * @method void setTimeSpotCheck(QualityInspectTimeSpotCheck $TimeSpotCheck) Set <p>Spot check policy parameter based on time. Valid when StrategyType is TimeSpotCheck.</p>
 */
class QualityInspectStrategy extends AbstractModel
{
    /**
     * @var string <p>Policy type.</p><p>Enumeration values:</p><ul><li>TimeSpotCheck: Time-based spot check policy.</li></ul>
     */
    public $StrategyType;

    /**
     * @var QualityInspectTimeSpotCheck <p>Spot check policy parameter based on time. Valid when StrategyType is TimeSpotCheck.</p>
     */
    public $TimeSpotCheck;

    /**
     * @param string $StrategyType <p>Policy type.</p><p>Enumeration values:</p><ul><li>TimeSpotCheck: Time-based spot check policy.</li></ul>
     * @param QualityInspectTimeSpotCheck $TimeSpotCheck <p>Spot check policy parameter based on time. Valid when StrategyType is TimeSpotCheck.</p>
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
        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("TimeSpotCheck",$param) and $param["TimeSpotCheck"] !== null) {
            $this->TimeSpotCheck = new QualityInspectTimeSpotCheck();
            $this->TimeSpotCheck->deserialize($param["TimeSpotCheck"]);
        }
    }
}
