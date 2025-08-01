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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cycle of a scheduled task
 *
 * @method integer getFrequency() Obtain Execution frequency (days). Valid values: `1`, `3`, `7`.
 * @method void setFrequency(integer $Frequency) Set Execution frequency (days). Valid values: `1`, `3`, `7`.
 * @method string getExecutionTime() Obtain Execution time in the format of "HH:mm:SS"
 * @method void setExecutionTime(string $ExecutionTime) Set Execution time in the format of "HH:mm:SS"
 * @method boolean getEnable() Obtain Whether to enable
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEnable(boolean $Enable) Set Whether to enable
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CompliancePeriodTaskRule extends AbstractModel
{
    /**
     * @var integer Execution frequency (days). Valid values: `1`, `3`, `7`.
     */
    public $Frequency;

    /**
     * @var string Execution time in the format of "HH:mm:SS"
     */
    public $ExecutionTime;

    /**
     * @var boolean Whether to enable
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Enable;

    /**
     * @param integer $Frequency Execution frequency (days). Valid values: `1`, `3`, `7`.
     * @param string $ExecutionTime Execution time in the format of "HH:mm:SS"
     * @param boolean $Enable Whether to enable
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("ExecutionTime",$param) and $param["ExecutionTime"] !== null) {
            $this->ExecutionTime = $param["ExecutionTime"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
