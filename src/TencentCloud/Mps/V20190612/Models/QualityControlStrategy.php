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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Detection policy for media quality inspection.
 *
 * @method string getStrategyType() Obtain Policy type. Valid values:
- TimeSpotCheck
 * @method void setStrategyType(string $StrategyType) Set Policy type. Valid values:
- TimeSpotCheck
 * @method TimeSpotCheck getTimeSpotCheck() Obtain Spot check policy based on time.
 * @method void setTimeSpotCheck(TimeSpotCheck $TimeSpotCheck) Set Spot check policy based on time.
 */
class QualityControlStrategy extends AbstractModel
{
    /**
     * @var string Policy type. Valid values:
- TimeSpotCheck
     */
    public $StrategyType;

    /**
     * @var TimeSpotCheck Spot check policy based on time.
     */
    public $TimeSpotCheck;

    /**
     * @param string $StrategyType Policy type. Valid values:
- TimeSpotCheck
     * @param TimeSpotCheck $TimeSpotCheck Spot check policy based on time.
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
            $this->TimeSpotCheck = new TimeSpotCheck();
            $this->TimeSpotCheck->deserialize($param["TimeSpotCheck"]);
        }
    }
}
