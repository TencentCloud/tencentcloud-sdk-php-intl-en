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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scheduled scaling task.
 *
 * @method string getSchedule() Obtain Cron expression, which identifies the task execution time, and is accurate to minutes.
 * @method void setSchedule(string $Schedule) Set Cron expression, which identifies the task execution time, and is accurate to minutes.
 * @method string getName() Obtain Scheduled task name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Scheduled task name.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTargetReplicas() Obtain Number of target instances.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetReplicas(integer $TargetReplicas) Set Number of target instances.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMinReplicas() Obtain Minimum target.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMinReplicas(integer $MinReplicas) Set Minimum target.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxReplicas() Obtain Maximum target.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMaxReplicas(integer $MaxReplicas) Set Maximum target.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getExcludeDates() Obtain Exception periods, defined by Cron expressions, during which tasks are not executed. Up to 3 Cron expressions are supported.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExcludeDates(array $ExcludeDates) Set Exception periods, defined by Cron expressions, during which tasks are not executed. Up to 3 Cron expressions are supported.Note: This field may return null, indicating that no valid values can be obtained.
 */
class CronScaleJob extends AbstractModel
{
    /**
     * @var string Cron expression, which identifies the task execution time, and is accurate to minutes.
     */
    public $Schedule;

    /**
     * @var string Scheduled task name.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var integer Number of target instances.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetReplicas;

    /**
     * @var integer Minimum target.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MinReplicas;

    /**
     * @var integer Maximum target.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MaxReplicas;

    /**
     * @var array Exception periods, defined by Cron expressions, during which tasks are not executed. Up to 3 Cron expressions are supported.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExcludeDates;

    /**
     * @param string $Schedule Cron expression, which identifies the task execution time, and is accurate to minutes.
     * @param string $Name Scheduled task name.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TargetReplicas Number of target instances.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MinReplicas Minimum target.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxReplicas Maximum target.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ExcludeDates Exception periods, defined by Cron expressions, during which tasks are not executed. Up to 3 Cron expressions are supported.Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Schedule",$param) and $param["Schedule"] !== null) {
            $this->Schedule = $param["Schedule"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TargetReplicas",$param) and $param["TargetReplicas"] !== null) {
            $this->TargetReplicas = $param["TargetReplicas"];
        }

        if (array_key_exists("MinReplicas",$param) and $param["MinReplicas"] !== null) {
            $this->MinReplicas = $param["MinReplicas"];
        }

        if (array_key_exists("MaxReplicas",$param) and $param["MaxReplicas"] !== null) {
            $this->MaxReplicas = $param["MaxReplicas"];
        }

        if (array_key_exists("ExcludeDates",$param) and $param["ExcludeDates"] !== null) {
            $this->ExcludeDates = $param["ExcludeDates"];
        }
    }
}
