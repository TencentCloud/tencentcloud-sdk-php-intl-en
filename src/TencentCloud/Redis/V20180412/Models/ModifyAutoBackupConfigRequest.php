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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoBackupConfig request structure.
 *
 * @method string getInstanceId() Obtain ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

 * @method void setInstanceId(string $InstanceId) Set ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

 * @method array getWeekDays() Obtain Automatic backup cycle. Valid values: `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`. This parameter currently cannot be modified.
 * @method void setWeekDays(array $WeekDays) Set Automatic backup cycle. Valid values: `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`. This parameter currently cannot be modified.
 * @method string getTimePeriod() Obtain Automatic backup time in the format of 00:00-01:00, 01:00-02:00... 23:00-00:00.
 * @method void setTimePeriod(string $TimePeriod) Set Automatic backup time in the format of 00:00-01:00, 01:00-02:00... 23:00-00:00.
 * @method integer getAutoBackupType() Obtain Automatic backup type.  Valid value:  `1` (scheduled backup).
 * @method void setAutoBackupType(integer $AutoBackupType) Set Automatic backup type.  Valid value:  `1` (scheduled backup).
 */
class ModifyAutoBackupConfigRequest extends AbstractModel
{
    /**
     * @var string ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

     */
    public $InstanceId;

    /**
     * @var array Automatic backup cycle. Valid values: `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`. This parameter currently cannot be modified.
     */
    public $WeekDays;

    /**
     * @var string Automatic backup time in the format of 00:00-01:00, 01:00-02:00... 23:00-00:00.
     */
    public $TimePeriod;

    /**
     * @var integer Automatic backup type.  Valid value:  `1` (scheduled backup).
     */
    public $AutoBackupType;

    /**
     * @param string $InstanceId ID of a specified instance,  such as  "crs-xjhsdj****" Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.

     * @param array $WeekDays Automatic backup cycle. Valid values: `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`, `Sunday`. This parameter currently cannot be modified.
     * @param string $TimePeriod Automatic backup time in the format of 00:00-01:00, 01:00-02:00... 23:00-00:00.
     * @param integer $AutoBackupType Automatic backup type.  Valid value:  `1` (scheduled backup).
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

        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("TimePeriod",$param) and $param["TimePeriod"] !== null) {
            $this->TimePeriod = $param["TimePeriod"];
        }

        if (array_key_exists("AutoBackupType",$param) and $param["AutoBackupType"] !== null) {
            $this->AutoBackupType = $param["AutoBackupType"];
        }
    }
}
