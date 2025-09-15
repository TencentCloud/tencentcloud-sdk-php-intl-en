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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddMetricScaleStrategy request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method integer getStrategyType() Obtain 1 indicates scaling by load rules. 2 indicates scaling by time rules. This parameter is required and should match the following rule policy.
 * @method void setStrategyType(integer $StrategyType) Set 1 indicates scaling by load rules. 2 indicates scaling by time rules. This parameter is required and should match the following rule policy.
 * @method LoadAutoScaleStrategy getLoadAutoScaleStrategy() Obtain Load-based scale-out rules.
 * @method void setLoadAutoScaleStrategy(LoadAutoScaleStrategy $LoadAutoScaleStrategy) Set Load-based scale-out rules.
 * @method TimeAutoScaleStrategy getTimeAutoScaleStrategy() Obtain Rule for time-based scaling
 * @method void setTimeAutoScaleStrategy(TimeAutoScaleStrategy $TimeAutoScaleStrategy) Set Rule for time-based scaling
 */
class AddMetricScaleStrategyRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var integer 1 indicates scaling by load rules. 2 indicates scaling by time rules. This parameter is required and should match the following rule policy.
     */
    public $StrategyType;

    /**
     * @var LoadAutoScaleStrategy Load-based scale-out rules.
     */
    public $LoadAutoScaleStrategy;

    /**
     * @var TimeAutoScaleStrategy Rule for time-based scaling
     */
    public $TimeAutoScaleStrategy;

    /**
     * @param string $InstanceId Instance ID.
     * @param integer $StrategyType 1 indicates scaling by load rules. 2 indicates scaling by time rules. This parameter is required and should match the following rule policy.
     * @param LoadAutoScaleStrategy $LoadAutoScaleStrategy Load-based scale-out rules.
     * @param TimeAutoScaleStrategy $TimeAutoScaleStrategy Rule for time-based scaling
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StrategyType",$param) and $param["StrategyType"] !== null) {
            $this->StrategyType = $param["StrategyType"];
        }

        if (array_key_exists("LoadAutoScaleStrategy",$param) and $param["LoadAutoScaleStrategy"] !== null) {
            $this->LoadAutoScaleStrategy = new LoadAutoScaleStrategy();
            $this->LoadAutoScaleStrategy->deserialize($param["LoadAutoScaleStrategy"]);
        }

        if (array_key_exists("TimeAutoScaleStrategy",$param) and $param["TimeAutoScaleStrategy"] !== null) {
            $this->TimeAutoScaleStrategy = new TimeAutoScaleStrategy();
            $this->TimeAutoScaleStrategy->deserialize($param["TimeAutoScaleStrategy"]);
        }
    }
}
