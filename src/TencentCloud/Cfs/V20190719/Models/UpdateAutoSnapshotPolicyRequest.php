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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAutoSnapshotPolicy request structure.
 *
 * @method string getAutoSnapshotPolicyId() Obtain Snapshot policy ID
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set Snapshot policy ID
 * @method string getPolicyName() Obtain Snapshot policy name
 * @method void setPolicyName(string $PolicyName) Set Snapshot policy name
 * @method string getDayOfWeek() Obtain The day of the week on which to regularly back up the snapshot
 * @method void setDayOfWeek(string $DayOfWeek) Set The day of the week on which to regularly back up the snapshot
 * @method string getHour() Obtain The hour of a day at which to regularly back up the snapshot
 * @method void setHour(string $Hour) Set The hour of a day at which to regularly back up the snapshot
 * @method integer getAliveDays() Obtain Snapshot retention period
 * @method void setAliveDays(integer $AliveDays) Set Snapshot retention period
 * @method integer getIsActivated() Obtain Whether to activate the scheduled snapshot feature
 * @method void setIsActivated(integer $IsActivated) Set Whether to activate the scheduled snapshot feature
 * @method string getDayOfMonth() Obtain The specific day of the month on which to create a snapshot. This parameter is mutually exclusive with `DayOfWeek`.
 * @method void setDayOfMonth(string $DayOfMonth) Set The specific day of the month on which to create a snapshot. This parameter is mutually exclusive with `DayOfWeek`.
 * @method integer getIntervalDays() Obtain The snapshot interval. This parameter is mutually exclusive with `DayOfWeek` and `DayOfMonth`.
 * @method void setIntervalDays(integer $IntervalDays) Set The snapshot interval. This parameter is mutually exclusive with `DayOfWeek` and `DayOfMonth`.
 */
class UpdateAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string Snapshot policy ID
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var string Snapshot policy name
     */
    public $PolicyName;

    /**
     * @var string The day of the week on which to regularly back up the snapshot
     */
    public $DayOfWeek;

    /**
     * @var string The hour of a day at which to regularly back up the snapshot
     */
    public $Hour;

    /**
     * @var integer Snapshot retention period
     */
    public $AliveDays;

    /**
     * @var integer Whether to activate the scheduled snapshot feature
     */
    public $IsActivated;

    /**
     * @var string The specific day of the month on which to create a snapshot. This parameter is mutually exclusive with `DayOfWeek`.
     */
    public $DayOfMonth;

    /**
     * @var integer The snapshot interval. This parameter is mutually exclusive with `DayOfWeek` and `DayOfMonth`.
     */
    public $IntervalDays;

    /**
     * @param string $AutoSnapshotPolicyId Snapshot policy ID
     * @param string $PolicyName Snapshot policy name
     * @param string $DayOfWeek The day of the week on which to regularly back up the snapshot
     * @param string $Hour The hour of a day at which to regularly back up the snapshot
     * @param integer $AliveDays Snapshot retention period
     * @param integer $IsActivated Whether to activate the scheduled snapshot feature
     * @param string $DayOfMonth The specific day of the month on which to create a snapshot. This parameter is mutually exclusive with `DayOfWeek`.
     * @param integer $IntervalDays The snapshot interval. This parameter is mutually exclusive with `DayOfWeek` and `DayOfMonth`.
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
        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("DayOfWeek",$param) and $param["DayOfWeek"] !== null) {
            $this->DayOfWeek = $param["DayOfWeek"];
        }

        if (array_key_exists("Hour",$param) and $param["Hour"] !== null) {
            $this->Hour = $param["Hour"];
        }

        if (array_key_exists("AliveDays",$param) and $param["AliveDays"] !== null) {
            $this->AliveDays = $param["AliveDays"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("DayOfMonth",$param) and $param["DayOfMonth"] !== null) {
            $this->DayOfMonth = $param["DayOfMonth"];
        }

        if (array_key_exists("IntervalDays",$param) and $param["IntervalDays"] !== null) {
            $this->IntervalDays = $param["IntervalDays"];
        }
    }
}
