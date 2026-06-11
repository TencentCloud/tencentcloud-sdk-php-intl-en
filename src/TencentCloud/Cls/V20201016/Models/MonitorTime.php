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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Monitoring task execution time point in alarm policy
 *
 * @method string getType() Obtain <p>Execution cycle. Value range: <code>Period</code>, <code>Fixed</code>, <code>Cron</code>.</p><ul><li>Period: at a fixed frequency</li><li>Fixed: fixed time</li><li>Cron: cron expression</li></ul>
 * @method void setType(string $Type) Set <p>Execution cycle. Value range: <code>Period</code>, <code>Fixed</code>, <code>Cron</code>.</p><ul><li>Period: at a fixed frequency</li><li>Fixed: fixed time</li><li>Cron: cron expression</li></ul>
 * @method integer getTime() Obtain <p>Execution period or custom execution time point. Unit: minutes, value range: 1-1440.<br>When type is <code>Period</code> or <code>Fixed</code>, the time field takes effect.</p>
 * @method void setTime(integer $Time) Set <p>Execution period or custom execution time point. Unit: minutes, value range: 1-1440.<br>When type is <code>Period</code> or <code>Fixed</code>, the time field takes effect.</p>
 * @method string getCronExpression() Obtain <p>The cron expression for the execution period. Example: <code>0/1 * * * *</code>. From left to right, each field represents Minutes field, Hours field, Day of month field, Month field, Day of week field. No support for second level. When the type is <code>Cron</code>, the CronExpression field takes effect.</p>
 * @method void setCronExpression(string $CronExpression) Set <p>The cron expression for the execution period. Example: <code>0/1 * * * *</code>. From left to right, each field represents Minutes field, Hours field, Day of month field, Month field, Day of week field. No support for second level. When the type is <code>Cron</code>, the CronExpression field takes effect.</p>
 */
class MonitorTime extends AbstractModel
{
    /**
     * @var string <p>Execution cycle. Value range: <code>Period</code>, <code>Fixed</code>, <code>Cron</code>.</p><ul><li>Period: at a fixed frequency</li><li>Fixed: fixed time</li><li>Cron: cron expression</li></ul>
     */
    public $Type;

    /**
     * @var integer <p>Execution period or custom execution time point. Unit: minutes, value range: 1-1440.<br>When type is <code>Period</code> or <code>Fixed</code>, the time field takes effect.</p>
     */
    public $Time;

    /**
     * @var string <p>The cron expression for the execution period. Example: <code>0/1 * * * *</code>. From left to right, each field represents Minutes field, Hours field, Day of month field, Month field, Day of week field. No support for second level. When the type is <code>Cron</code>, the CronExpression field takes effect.</p>
     */
    public $CronExpression;

    /**
     * @param string $Type <p>Execution cycle. Value range: <code>Period</code>, <code>Fixed</code>, <code>Cron</code>.</p><ul><li>Period: at a fixed frequency</li><li>Fixed: fixed time</li><li>Cron: cron expression</li></ul>
     * @param integer $Time <p>Execution period or custom execution time point. Unit: minutes, value range: 1-1440.<br>When type is <code>Period</code> or <code>Fixed</code>, the time field takes effect.</p>
     * @param string $CronExpression <p>The cron expression for the execution period. Example: <code>0/1 * * * *</code>. From left to right, each field represents Minutes field, Hours field, Day of month field, Month field, Day of week field. No support for second level. When the type is <code>Cron</code>, the CronExpression field takes effect.</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("CronExpression",$param) and $param["CronExpression"] !== null) {
            $this->CronExpression = $param["CronExpression"];
        }
    }
}
