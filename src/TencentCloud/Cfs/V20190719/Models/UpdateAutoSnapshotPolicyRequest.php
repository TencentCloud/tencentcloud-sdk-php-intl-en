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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateAutoSnapshotPolicy request structure.
 *
 * @method string getAutoSnapshotPolicyId() Obtain Unbound snapshot policy ID, which can be obtained by querying through the [DescribeAutoSnapshotPolicies](https://www.tencentcloud.com/document/api/582/80208?from_cn_redirect=1) api.
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) Set Unbound snapshot policy ID, which can be obtained by querying through the [DescribeAutoSnapshotPolicies](https://www.tencentcloud.com/document/api/582/80208?from_cn_redirect=1) api.
 * @method string getPolicyName() Obtain Snapshot policy name, no more than 64 characters.
 * @method void setPolicyName(string $PolicyName) Set Snapshot policy name, no more than 64 characters.
 * @method string getDayOfWeek() Obtain Snapshot periodic backup, monday to sunday. 1 represents monday, 7 represents sunday. choose one from three: DayOfMonth, IntervalDays.
 * @method void setDayOfWeek(string $DayOfWeek) Set Snapshot periodic backup, monday to sunday. 1 represents monday, 7 represents sunday. choose one from three: DayOfMonth, IntervalDays.
 * @method string getHour() Obtain The hour of a day at which to regularly back up the snapshot
 * @method void setHour(string $Hour) Set The hour of a day at which to regularly back up the snapshot
 * @method integer getAliveDays() Obtain Snapshot retention days.
 * @method void setAliveDays(integer $AliveDays) Set Snapshot retention days.
 * @method integer getIsActivated() Obtain Whether the periodic snapshot function is activated; 1 indicates activate, 0 indicates inactive.
 * @method void setIsActivated(integer $IsActivated) Set Whether the periodic snapshot function is activated; 1 indicates activate, 0 indicates inactive.
 * @method string getDayOfMonth() Obtain Scheduled snapshot creates a snapshot on the day of the month. this parameter is used in combination with DayOfWeek and IntervalDays. choose one of the three.
 * @method void setDayOfMonth(string $DayOfMonth) Set Scheduled snapshot creates a snapshot on the day of the month. this parameter is used in combination with DayOfWeek and IntervalDays. choose one of the three.
 * @method integer getIntervalDays() Obtain Periodically execute snapshots at interval days. this parameter is used in combination with DayOfWeek and DayOfMonth. choose one of the three.
 * @method void setIntervalDays(integer $IntervalDays) Set Periodically execute snapshots at interval days. this parameter is used in combination with DayOfWeek and DayOfMonth. choose one of the three.
 */
class UpdateAutoSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string Unbound snapshot policy ID, which can be obtained by querying through the [DescribeAutoSnapshotPolicies](https://www.tencentcloud.com/document/api/582/80208?from_cn_redirect=1) api.
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var string Snapshot policy name, no more than 64 characters.
     */
    public $PolicyName;

    /**
     * @var string Snapshot periodic backup, monday to sunday. 1 represents monday, 7 represents sunday. choose one from three: DayOfMonth, IntervalDays.
     */
    public $DayOfWeek;

    /**
     * @var string The hour of a day at which to regularly back up the snapshot
     */
    public $Hour;

    /**
     * @var integer Snapshot retention days.
     */
    public $AliveDays;

    /**
     * @var integer Whether the periodic snapshot function is activated; 1 indicates activate, 0 indicates inactive.
     */
    public $IsActivated;

    /**
     * @var string Scheduled snapshot creates a snapshot on the day of the month. this parameter is used in combination with DayOfWeek and IntervalDays. choose one of the three.
     */
    public $DayOfMonth;

    /**
     * @var integer Periodically execute snapshots at interval days. this parameter is used in combination with DayOfWeek and DayOfMonth. choose one of the three.
     */
    public $IntervalDays;

    /**
     * @param string $AutoSnapshotPolicyId Unbound snapshot policy ID, which can be obtained by querying through the [DescribeAutoSnapshotPolicies](https://www.tencentcloud.com/document/api/582/80208?from_cn_redirect=1) api.
     * @param string $PolicyName Snapshot policy name, no more than 64 characters.
     * @param string $DayOfWeek Snapshot periodic backup, monday to sunday. 1 represents monday, 7 represents sunday. choose one from three: DayOfMonth, IntervalDays.
     * @param string $Hour The hour of a day at which to regularly back up the snapshot
     * @param integer $AliveDays Snapshot retention days.
     * @param integer $IsActivated Whether the periodic snapshot function is activated; 1 indicates activate, 0 indicates inactive.
     * @param string $DayOfMonth Scheduled snapshot creates a snapshot on the day of the month. this parameter is used in combination with DayOfWeek and IntervalDays. choose one of the three.
     * @param integer $IntervalDays Periodically execute snapshots at interval days. this parameter is used in combination with DayOfWeek and DayOfMonth. choose one of the three.
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
