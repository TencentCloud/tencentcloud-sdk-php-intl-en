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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstanceKernelVersion request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID
 * @method string getTargetDBKernelVersion() Obtain Target kernel version, which can be obtained in the `AvailableUpgradeTarget` field in the returned value of the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.

 * @method void setTargetDBKernelVersion(string $TargetDBKernelVersion) Set Target kernel version, which can be obtained in the `AvailableUpgradeTarget` field in the returned value of the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.

 * @method integer getSwitchTag() Obtain Switch time after the kernel version upgrade for the specified instance. Valid values:
<li>`0`: Switch now.
<li>`1`: Switch at the specified time.
<li>`2`: Switch in the maintenance time.
Default value: `0`. 
 * @method void setSwitchTag(integer $SwitchTag) Set Switch time after the kernel version upgrade for the specified instance. Valid values:
<li>`0`: Switch now.
<li>`1`: Switch at the specified time.
<li>`2`: Switch in the maintenance time.
Default value: `0`. 
 * @method string getSwitchStartTime() Obtain Switch start time in the format of `HH:MM:SS`, such as 01:00:00. When `SwitchTag` is `0` or `2`, this parameter is invalid.
 * @method void setSwitchStartTime(string $SwitchStartTime) Set Switch start time in the format of `HH:MM:SS`, such as 01:00:00. When `SwitchTag` is `0` or `2`, this parameter is invalid.
 * @method string getSwitchEndTime() Obtain Switch end time in the format of `HH:MM:SS`, such as 01:30:00. When `SwitchTag` is `0` or `2`, this parameter is invalid. The difference between `SwitchStartTime` and `SwitchEndTime` cannot be less than 30 minutes.
 * @method void setSwitchEndTime(string $SwitchEndTime) Set Switch end time in the format of `HH:MM:SS`, such as 01:30:00. When `SwitchTag` is `0` or `2`, this parameter is invalid. The difference between `SwitchStartTime` and `SwitchEndTime` cannot be less than 30 minutes.
 * @method boolean getDryRun() Obtain Whether to perform a pre-check on the current operation of upgrading the instance kernel version. Valid values:
u200c<li>u200c`true`: Performs a pre-check without upgrading the kernel version. Check items include request parameters, kernel version compatibility, and instance parameters.
u200cu200c<li>`false`: Sends a normal request and upgrades the kernel version directly after the check is passed.
Default value: `false`.
 * @method void setDryRun(boolean $DryRun) Set Whether to perform a pre-check on the current operation of upgrading the instance kernel version. Valid values:
u200c<li>u200c`true`: Performs a pre-check without upgrading the kernel version. Check items include request parameters, kernel version compatibility, and instance parameters.
u200cu200c<li>`false`: Sends a normal request and upgrades the kernel version directly after the check is passed.
Default value: `false`.
 */
class UpgradeDBInstanceKernelVersionRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $DBInstanceId;

    /**
     * @var string Target kernel version, which can be obtained in the `AvailableUpgradeTarget` field in the returned value of the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.

     */
    public $TargetDBKernelVersion;

    /**
     * @var integer Switch time after the kernel version upgrade for the specified instance. Valid values:
<li>`0`: Switch now.
<li>`1`: Switch at the specified time.
<li>`2`: Switch in the maintenance time.
Default value: `0`. 
     */
    public $SwitchTag;

    /**
     * @var string Switch start time in the format of `HH:MM:SS`, such as 01:00:00. When `SwitchTag` is `0` or `2`, this parameter is invalid.
     */
    public $SwitchStartTime;

    /**
     * @var string Switch end time in the format of `HH:MM:SS`, such as 01:30:00. When `SwitchTag` is `0` or `2`, this parameter is invalid. The difference between `SwitchStartTime` and `SwitchEndTime` cannot be less than 30 minutes.
     */
    public $SwitchEndTime;

    /**
     * @var boolean Whether to perform a pre-check on the current operation of upgrading the instance kernel version. Valid values:
u200c<li>u200c`true`: Performs a pre-check without upgrading the kernel version. Check items include request parameters, kernel version compatibility, and instance parameters.
u200cu200c<li>`false`: Sends a normal request and upgrades the kernel version directly after the check is passed.
Default value: `false`.
     */
    public $DryRun;

    /**
     * @param string $DBInstanceId Instance ID
     * @param string $TargetDBKernelVersion Target kernel version, which can be obtained in the `AvailableUpgradeTarget` field in the returned value of the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.

     * @param integer $SwitchTag Switch time after the kernel version upgrade for the specified instance. Valid values:
<li>`0`: Switch now.
<li>`1`: Switch at the specified time.
<li>`2`: Switch in the maintenance time.
Default value: `0`. 
     * @param string $SwitchStartTime Switch start time in the format of `HH:MM:SS`, such as 01:00:00. When `SwitchTag` is `0` or `2`, this parameter is invalid.
     * @param string $SwitchEndTime Switch end time in the format of `HH:MM:SS`, such as 01:30:00. When `SwitchTag` is `0` or `2`, this parameter is invalid. The difference between `SwitchStartTime` and `SwitchEndTime` cannot be less than 30 minutes.
     * @param boolean $DryRun Whether to perform a pre-check on the current operation of upgrading the instance kernel version. Valid values:
u200c<li>u200c`true`: Performs a pre-check without upgrading the kernel version. Check items include request parameters, kernel version compatibility, and instance parameters.
u200cu200c<li>`false`: Sends a normal request and upgrades the kernel version directly after the check is passed.
Default value: `false`.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("TargetDBKernelVersion",$param) and $param["TargetDBKernelVersion"] !== null) {
            $this->TargetDBKernelVersion = $param["TargetDBKernelVersion"];
        }

        if (array_key_exists("SwitchTag",$param) and $param["SwitchTag"] !== null) {
            $this->SwitchTag = $param["SwitchTag"];
        }

        if (array_key_exists("SwitchStartTime",$param) and $param["SwitchStartTime"] !== null) {
            $this->SwitchStartTime = $param["SwitchStartTime"];
        }

        if (array_key_exists("SwitchEndTime",$param) and $param["SwitchEndTime"] !== null) {
            $this->SwitchEndTime = $param["SwitchEndTime"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
