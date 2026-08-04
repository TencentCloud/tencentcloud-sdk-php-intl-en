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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Edge reasoning scheduled scaling action configuration for description of a specific scheduled scaling action.
 *
 * @method string getCronExpression() Obtain Cron expression for description of scheduled scaling trigger time. Use 5-field standard cron format: minute hour date month week. No support for second and year fields.
 * @method void setCronExpression(string $CronExpression) Set Cron expression for description of scheduled scaling trigger time. Use 5-field standard cron format: minute hour date month week. No support for second and year fields.
 * @method integer getMinInstanceCount() Obtain After hitting the scheduled scaling action, the minimum number of instances to which the inference service can be adjusted. If multiple scheduled scaling actions hit at the same time within the identical evaluation window, use the maximum MinInstanceCount.
 * @method void setMinInstanceCount(integer $MinInstanceCount) Set After hitting the scheduled scaling action, the minimum number of instances to which the inference service can be adjusted. If multiple scheduled scaling actions hit at the same time within the identical evaluation window, use the maximum MinInstanceCount.
 */
class InferenceScheduledScalingAction extends AbstractModel
{
    /**
     * @var string Cron expression for description of scheduled scaling trigger time. Use 5-field standard cron format: minute hour date month week. No support for second and year fields.
     */
    public $CronExpression;

    /**
     * @var integer After hitting the scheduled scaling action, the minimum number of instances to which the inference service can be adjusted. If multiple scheduled scaling actions hit at the same time within the identical evaluation window, use the maximum MinInstanceCount.
     */
    public $MinInstanceCount;

    /**
     * @param string $CronExpression Cron expression for description of scheduled scaling trigger time. Use 5-field standard cron format: minute hour date month week. No support for second and year fields.
     * @param integer $MinInstanceCount After hitting the scheduled scaling action, the minimum number of instances to which the inference service can be adjusted. If multiple scheduled scaling actions hit at the same time within the identical evaluation window, use the maximum MinInstanceCount.
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
        if (array_key_exists("CronExpression",$param) and $param["CronExpression"] !== null) {
            $this->CronExpression = $param["CronExpression"];
        }

        if (array_key_exists("MinInstanceCount",$param) and $param["MinInstanceCount"] !== null) {
            $this->MinInstanceCount = $param["MinInstanceCount"];
        }
    }
}
