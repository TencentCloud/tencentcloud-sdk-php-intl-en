<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Metric configuration
 *
 * @method array getOperator() Obtain Allowed operator
 * @method void setOperator(array $Operator) Set Allowed operator
 * @method array getPeriod() Obtain Allowed data cycle in seconds
 * @method void setPeriod(array $Period) Set Allowed data cycle in seconds
 * @method array getContinuePeriod() Obtain Allowed number of continuous cycles
 * @method void setContinuePeriod(array $ContinuePeriod) Set Allowed number of continuous cycles
 */
class MetricConfig extends AbstractModel
{
    /**
     * @var array Allowed operator
     */
    public $Operator;

    /**
     * @var array Allowed data cycle in seconds
     */
    public $Period;

    /**
     * @var array Allowed number of continuous cycles
     */
    public $ContinuePeriod;

    /**
     * @param array $Operator Allowed operator
     * @param array $Period Allowed data cycle in seconds
     * @param array $ContinuePeriod Allowed number of continuous cycles
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ContinuePeriod",$param) and $param["ContinuePeriod"] !== null) {
            $this->ContinuePeriod = $param["ContinuePeriod"];
        }
    }
}
