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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstanceKernelVersion request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
 * @method string getTargetDBKernelVersion() Obtain Target kernel version, which can be obtained in the `AvailableUpgradeTarget` field in the returned value of the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.

 * @method void setTargetDBKernelVersion(string $TargetDBKernelVersion) Set Target kernel version, which can be obtained in the `AvailableUpgradeTarget` field in the returned value of the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.

 * @method integer getSwitchTag() Obtain Specifies the switch time after upgrading the kernel for the specified instance. valid values:.
<Li>0: switch immediately.</li>.
<Li>1: switch at specified time</li>.
<Li>2: switch during maintenance time window.</li>.
Default value: 0  
 * @method void setSwitchTag(integer $SwitchTag) Set Specifies the switch time after upgrading the kernel for the specified instance. valid values:.
<Li>0: switch immediately.</li>.
<Li>1: switch at specified time</li>.
<Li>2: switch during maintenance time window.</li>.
Default value: 0  
 * @method string getSwitchStartTime() Obtain Switch start time in the format of `HH:MM:SS`, such as 01:00:00. When `SwitchTag` is `0` or `2`, this parameter is invalid.
 * @method void setSwitchStartTime(string $SwitchStartTime) Set Switch start time in the format of `HH:MM:SS`, such as 01:00:00. When `SwitchTag` is `0` or `2`, this parameter is invalid.
 * @method string getSwitchEndTime() Obtain Switch end time in the format of `HH:MM:SS`, such as 01:30:00. When `SwitchTag` is `0` or `2`, this parameter is invalid. The difference between `SwitchStartTime` and `SwitchEndTime` cannot be less than 30 minutes.
 * @method void setSwitchEndTime(string $SwitchEndTime) Set Switch end time in the format of `HH:MM:SS`, such as 01:30:00. When `SwitchTag` is `0` or `2`, this parameter is invalid. The difference between `SwitchStartTime` and `SwitchEndTime` cannot be less than 30 minutes.
 * @method boolean getDryRun() Obtain Specifies whether to perform a pre-check for the instance kernel version upgrade operation this time.
<li>true: performs a pre-check without upgrading the kernel. check items include request parameters, kernel version compatibility, and instance parameters.</li>.
<li>false: send a normal request (default value). after passing the check, directly upgrade the kernel.</li>.
Default value: `false`.
 * @method void setDryRun(boolean $DryRun) Set Specifies whether to perform a pre-check for the instance kernel version upgrade operation this time.
<li>true: performs a pre-check without upgrading the kernel. check items include request parameters, kernel version compatibility, and instance parameters.</li>.
<li>false: send a normal request (default value). after passing the check, directly upgrade the kernel.</li>.
Default value: `false`.
 */
class UpgradeDBInstanceKernelVersionRequest extends AbstractModel
{
    /**
     * @var string Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     */
    public $DBInstanceId;

    /**
     * @var string Target kernel version, which can be obtained in the `AvailableUpgradeTarget` field in the returned value of the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.

     */
    public $TargetDBKernelVersion;

    /**
     * @var integer Specifies the switch time after upgrading the kernel for the specified instance. valid values:.
<Li>0: switch immediately.</li>.
<Li>1: switch at specified time</li>.
<Li>2: switch during maintenance time window.</li>.
Default value: 0  
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
     * @var boolean Specifies whether to perform a pre-check for the instance kernel version upgrade operation this time.
<li>true: performs a pre-check without upgrading the kernel. check items include request parameters, kernel version compatibility, and instance parameters.</li>.
<li>false: send a normal request (default value). after passing the check, directly upgrade the kernel.</li>.
Default value: `false`.
     */
    public $DryRun;

    /**
     * @param string $DBInstanceId Instance ID. obtain through the api [DescribeDBInstances](https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1).
     * @param string $TargetDBKernelVersion Target kernel version, which can be obtained in the `AvailableUpgradeTarget` field in the returned value of the [DescribeDBVersions](https://intl.cloud.tencent.com/document/api/409/89018?from_cn_redirect=1) API.

     * @param integer $SwitchTag Specifies the switch time after upgrading the kernel for the specified instance. valid values:.
<Li>0: switch immediately.</li>.
<Li>1: switch at specified time</li>.
<Li>2: switch during maintenance time window.</li>.
Default value: 0  
     * @param string $SwitchStartTime Switch start time in the format of `HH:MM:SS`, such as 01:00:00. When `SwitchTag` is `0` or `2`, this parameter is invalid.
     * @param string $SwitchEndTime Switch end time in the format of `HH:MM:SS`, such as 01:30:00. When `SwitchTag` is `0` or `2`, this parameter is invalid. The difference between `SwitchStartTime` and `SwitchEndTime` cannot be less than 30 minutes.
     * @param boolean $DryRun Specifies whether to perform a pre-check for the instance kernel version upgrade operation this time.
<li>true: performs a pre-check without upgrading the kernel. check items include request parameters, kernel version compatibility, and instance parameters.</li>.
<li>false: send a normal request (default value). after passing the check, directly upgrade the kernel.</li>.
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
