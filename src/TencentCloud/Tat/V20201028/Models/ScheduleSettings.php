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
namespace TencentCloud\Tat\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Settings of a scheduled invoker
 *
 * @method string getPolicy() Obtain Execution policy.

-ONCE: one-time execution.
-RECURRENCE: execute periodically.
 * @method void setPolicy(string $Policy) Set Execution policy.

-ONCE: one-time execution.
-RECURRENCE: execute periodically.
 * @method string getRecurrence() Obtain Trigger the crontab expression. This field is required if `Policy` is `RECURRENCE`. The crontab expression is parsed in UTC+8.
 * @method void setRecurrence(string $Recurrence) Set Trigger the crontab expression. This field is required if `Policy` is `RECURRENCE`. The crontab expression is parsed in UTC+8.
 * @method string getInvokeTime() Obtain Next execution time of the executor. this field requires specifying when Policy is ONCE.

The time format is YYYY-MM-DDThh:MM:ssZ.
 * @method void setInvokeTime(string $InvokeTime) Set Next execution time of the executor. this field requires specifying when Policy is ONCE.

The time format is YYYY-MM-DDThh:MM:ssZ.
 */
class ScheduleSettings extends AbstractModel
{
    /**
     * @var string Execution policy.

-ONCE: one-time execution.
-RECURRENCE: execute periodically.
     */
    public $Policy;

    /**
     * @var string Trigger the crontab expression. This field is required if `Policy` is `RECURRENCE`. The crontab expression is parsed in UTC+8.
     */
    public $Recurrence;

    /**
     * @var string Next execution time of the executor. this field requires specifying when Policy is ONCE.

The time format is YYYY-MM-DDThh:MM:ssZ.
     */
    public $InvokeTime;

    /**
     * @param string $Policy Execution policy.

-ONCE: one-time execution.
-RECURRENCE: execute periodically.
     * @param string $Recurrence Trigger the crontab expression. This field is required if `Policy` is `RECURRENCE`. The crontab expression is parsed in UTC+8.
     * @param string $InvokeTime Next execution time of the executor. this field requires specifying when Policy is ONCE.

The time format is YYYY-MM-DDThh:MM:ssZ.
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
        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Recurrence",$param) and $param["Recurrence"] !== null) {
            $this->Recurrence = $param["Recurrence"];
        }

        if (array_key_exists("InvokeTime",$param) and $param["InvokeTime"] !== null) {
            $this->InvokeTime = $param["InvokeTime"];
        }
    }
}
