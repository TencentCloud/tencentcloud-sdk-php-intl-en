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
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method array getWeekDays() Obtain Date. Value range: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday
 * @method void setWeekDays(array $WeekDays) Set Date. Value range: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday
 * @method string getTimePeriod() Obtain Time period. Value range: 00:00-01:00, 01:00-02:00...... 23:00-00:00
 * @method void setTimePeriod(string $TimePeriod) Set Time period. Value range: 00:00-01:00, 01:00-02:00...... 23:00-00:00
 * @method integer getAutoBackupType() Obtain Auto backup type: 1 "scheduled rollback"
 * @method void setAutoBackupType(integer $AutoBackupType) Set Auto backup type: 1 "scheduled rollback"
 */

/**
 *ModifyAutoBackupConfig request structure.
 */
class ModifyAutoBackupConfigRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var array Date. Value range: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday
     */
    public $WeekDays;

    /**
     * @var string Time period. Value range: 00:00-01:00, 01:00-02:00...... 23:00-00:00
     */
    public $TimePeriod;

    /**
     * @var integer Auto backup type: 1 "scheduled rollback"
     */
    public $AutoBackupType;
    /**
     * @param string $InstanceId Instance ID
     * @param array $WeekDays Date. Value range: Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, Sunday
     * @param string $TimePeriod Time period. Value range: 00:00-01:00, 01:00-02:00...... 23:00-00:00
     * @param integer $AutoBackupType Auto backup type: 1 "scheduled rollback"
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
