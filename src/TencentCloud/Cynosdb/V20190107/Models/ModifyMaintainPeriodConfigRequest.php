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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMaintainPeriodConfig request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method integer getMaintainStartTime() Obtain Maintenance start time in seconds. For example, 03:00 AM is represented by 10800
 * @method void setMaintainStartTime(integer $MaintainStartTime) Set Maintenance start time in seconds. For example, 03:00 AM is represented by 10800
 * @method integer getMaintainDuration() Obtain Maintenance duration in seconds. For example, one hour is represented by 3600
 * @method void setMaintainDuration(integer $MaintainDuration) Set Maintenance duration in seconds. For example, one hour is represented by 3600
 * @method array getMaintainWeekDays() Obtain Maintenance days of the week. Valid values: [Mon, Tue, Wed, Thu, Fri, Sat, Sun].
 * @method void setMaintainWeekDays(array $MaintainWeekDays) Set Maintenance days of the week. Valid values: [Mon, Tue, Wed, Thu, Fri, Sat, Sun].
 */
class ModifyMaintainPeriodConfigRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var integer Maintenance start time in seconds. For example, 03:00 AM is represented by 10800
     */
    public $MaintainStartTime;

    /**
     * @var integer Maintenance duration in seconds. For example, one hour is represented by 3600
     */
    public $MaintainDuration;

    /**
     * @var array Maintenance days of the week. Valid values: [Mon, Tue, Wed, Thu, Fri, Sat, Sun].
     */
    public $MaintainWeekDays;

    /**
     * @param string $InstanceId Instance ID
     * @param integer $MaintainStartTime Maintenance start time in seconds. For example, 03:00 AM is represented by 10800
     * @param integer $MaintainDuration Maintenance duration in seconds. For example, one hour is represented by 3600
     * @param array $MaintainWeekDays Maintenance days of the week. Valid values: [Mon, Tue, Wed, Thu, Fri, Sat, Sun].
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

        if (array_key_exists("MaintainStartTime",$param) and $param["MaintainStartTime"] !== null) {
            $this->MaintainStartTime = $param["MaintainStartTime"];
        }

        if (array_key_exists("MaintainDuration",$param) and $param["MaintainDuration"] !== null) {
            $this->MaintainDuration = $param["MaintainDuration"];
        }

        if (array_key_exists("MaintainWeekDays",$param) and $param["MaintainWeekDays"] !== null) {
            $this->MaintainWeekDays = $param["MaintainWeekDays"];
        }
    }
}
