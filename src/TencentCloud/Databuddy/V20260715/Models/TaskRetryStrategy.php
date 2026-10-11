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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task retry policy
 *
 * @method integer getMaxRetryTimes() Obtain Maximum retry count. Default value: 3.
 * @method void setMaxRetryTimes(integer $MaxRetryTimes) Set Maximum retry count. Default value: 3.
 * @method integer getRetryBetweenWaitTime() Obtain Waiting time between retries. Default value: 5
 * @method void setRetryBetweenWaitTime(integer $RetryBetweenWaitTime) Set Waiting time between retries. Default value: 5
 * @method string getRetryBetweenWaitTimeUnit() Obtain Time unit to wait between retries
ms: MILLISECOND second: SECOND minute (default): MINUTE hour: HOUR
 * @method void setRetryBetweenWaitTimeUnit(string $RetryBetweenWaitTimeUnit) Set Time unit to wait between retries
ms: MILLISECOND second: SECOND minute (default): MINUTE hour: HOUR
 * @method boolean getTaskRunFailureRetrySwitch() Obtain Retry switch when task running fails. true by default.
 * @method void setTaskRunFailureRetrySwitch(boolean $TaskRunFailureRetrySwitch) Set Retry switch when task running fails. true by default.
 * @method boolean getTaskRunTimeoutRetrySwitch() Obtain Retry switch for task timeout, false by default
 * @method void setTaskRunTimeoutRetrySwitch(boolean $TaskRunTimeoutRetrySwitch) Set Retry switch for task timeout, false by default
 */
class TaskRetryStrategy extends AbstractModel
{
    /**
     * @var integer Maximum retry count. Default value: 3.
     */
    public $MaxRetryTimes;

    /**
     * @var integer Waiting time between retries. Default value: 5
     */
    public $RetryBetweenWaitTime;

    /**
     * @var string Time unit to wait between retries
ms: MILLISECOND second: SECOND minute (default): MINUTE hour: HOUR
     */
    public $RetryBetweenWaitTimeUnit;

    /**
     * @var boolean Retry switch when task running fails. true by default.
     */
    public $TaskRunFailureRetrySwitch;

    /**
     * @var boolean Retry switch for task timeout, false by default
     */
    public $TaskRunTimeoutRetrySwitch;

    /**
     * @param integer $MaxRetryTimes Maximum retry count. Default value: 3.
     * @param integer $RetryBetweenWaitTime Waiting time between retries. Default value: 5
     * @param string $RetryBetweenWaitTimeUnit Time unit to wait between retries
ms: MILLISECOND second: SECOND minute (default): MINUTE hour: HOUR
     * @param boolean $TaskRunFailureRetrySwitch Retry switch when task running fails. true by default.
     * @param boolean $TaskRunTimeoutRetrySwitch Retry switch for task timeout, false by default
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
        if (array_key_exists("MaxRetryTimes",$param) and $param["MaxRetryTimes"] !== null) {
            $this->MaxRetryTimes = $param["MaxRetryTimes"];
        }

        if (array_key_exists("RetryBetweenWaitTime",$param) and $param["RetryBetweenWaitTime"] !== null) {
            $this->RetryBetweenWaitTime = $param["RetryBetweenWaitTime"];
        }

        if (array_key_exists("RetryBetweenWaitTimeUnit",$param) and $param["RetryBetweenWaitTimeUnit"] !== null) {
            $this->RetryBetweenWaitTimeUnit = $param["RetryBetweenWaitTimeUnit"];
        }

        if (array_key_exists("TaskRunFailureRetrySwitch",$param) and $param["TaskRunFailureRetrySwitch"] !== null) {
            $this->TaskRunFailureRetrySwitch = $param["TaskRunFailureRetrySwitch"];
        }

        if (array_key_exists("TaskRunTimeoutRetrySwitch",$param) and $param["TaskRunTimeoutRetrySwitch"] !== null) {
            $this->TaskRunTimeoutRetrySwitch = $param["TaskRunTimeoutRetrySwitch"];
        }
    }
}
