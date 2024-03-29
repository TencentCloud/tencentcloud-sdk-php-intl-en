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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBInstancesAttribute response structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getRegularBackupEnable() Obtain Archive backup status. Valid values: `enable` (enabled), `disable` (disabled)
 * @method void setRegularBackupEnable(string $RegularBackupEnable) Set Archive backup status. Valid values: `enable` (enabled), `disable` (disabled)
 * @method integer getRegularBackupSaveDays() Obtain Archive backup retention period: [90-3650] days
 * @method void setRegularBackupSaveDays(integer $RegularBackupSaveDays) Set Archive backup retention period: [90-3650] days
 * @method string getRegularBackupStrategy() Obtain Archive backup policy. Valid values: `years` (yearly); `quarters (quarterly); `months` (monthly).
 * @method void setRegularBackupStrategy(string $RegularBackupStrategy) Set Archive backup policy. Valid values: `years` (yearly); `quarters (quarterly); `months` (monthly).
 * @method integer getRegularBackupCounts() Obtain The number of retained archive backups
 * @method void setRegularBackupCounts(integer $RegularBackupCounts) Set The number of retained archive backups
 * @method string getRegularBackupStartTime() Obtain Archive backup start date in YYYY-MM-DD format, which is the current time by default.
 * @method void setRegularBackupStartTime(string $RegularBackupStartTime) Set Archive backup start date in YYYY-MM-DD format, which is the current time by default.
 * @method integer getBlockedThreshold() Obtain Block process threshold in milliseconds
 * @method void setBlockedThreshold(integer $BlockedThreshold) Set Block process threshold in milliseconds
 * @method integer getEventSaveDays() Obtain Retention period for the files of slow SQL, blocking, deadlock, and extended events.
 * @method void setEventSaveDays(integer $EventSaveDays) Set Retention period for the files of slow SQL, blocking, deadlock, and extended events.
 * @method TDEConfigAttribute getTDEConfig() Obtain TDE u200dconfiguration
 * @method void setTDEConfig(TDEConfigAttribute $TDEConfig) Set TDE u200dconfiguration
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeDBInstancesAttributeResponse extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Archive backup status. Valid values: `enable` (enabled), `disable` (disabled)
     */
    public $RegularBackupEnable;

    /**
     * @var integer Archive backup retention period: [90-3650] days
     */
    public $RegularBackupSaveDays;

    /**
     * @var string Archive backup policy. Valid values: `years` (yearly); `quarters (quarterly); `months` (monthly).
     */
    public $RegularBackupStrategy;

    /**
     * @var integer The number of retained archive backups
     */
    public $RegularBackupCounts;

    /**
     * @var string Archive backup start date in YYYY-MM-DD format, which is the current time by default.
     */
    public $RegularBackupStartTime;

    /**
     * @var integer Block process threshold in milliseconds
     */
    public $BlockedThreshold;

    /**
     * @var integer Retention period for the files of slow SQL, blocking, deadlock, and extended events.
     */
    public $EventSaveDays;

    /**
     * @var TDEConfigAttribute TDE u200dconfiguration
     */
    public $TDEConfig;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $InstanceId Instance ID
     * @param string $RegularBackupEnable Archive backup status. Valid values: `enable` (enabled), `disable` (disabled)
     * @param integer $RegularBackupSaveDays Archive backup retention period: [90-3650] days
     * @param string $RegularBackupStrategy Archive backup policy. Valid values: `years` (yearly); `quarters (quarterly); `months` (monthly).
     * @param integer $RegularBackupCounts The number of retained archive backups
     * @param string $RegularBackupStartTime Archive backup start date in YYYY-MM-DD format, which is the current time by default.
     * @param integer $BlockedThreshold Block process threshold in milliseconds
     * @param integer $EventSaveDays Retention period for the files of slow SQL, blocking, deadlock, and extended events.
     * @param TDEConfigAttribute $TDEConfig TDE u200dconfiguration
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("RegularBackupEnable",$param) and $param["RegularBackupEnable"] !== null) {
            $this->RegularBackupEnable = $param["RegularBackupEnable"];
        }

        if (array_key_exists("RegularBackupSaveDays",$param) and $param["RegularBackupSaveDays"] !== null) {
            $this->RegularBackupSaveDays = $param["RegularBackupSaveDays"];
        }

        if (array_key_exists("RegularBackupStrategy",$param) and $param["RegularBackupStrategy"] !== null) {
            $this->RegularBackupStrategy = $param["RegularBackupStrategy"];
        }

        if (array_key_exists("RegularBackupCounts",$param) and $param["RegularBackupCounts"] !== null) {
            $this->RegularBackupCounts = $param["RegularBackupCounts"];
        }

        if (array_key_exists("RegularBackupStartTime",$param) and $param["RegularBackupStartTime"] !== null) {
            $this->RegularBackupStartTime = $param["RegularBackupStartTime"];
        }

        if (array_key_exists("BlockedThreshold",$param) and $param["BlockedThreshold"] !== null) {
            $this->BlockedThreshold = $param["BlockedThreshold"];
        }

        if (array_key_exists("EventSaveDays",$param) and $param["EventSaveDays"] !== null) {
            $this->EventSaveDays = $param["EventSaveDays"];
        }

        if (array_key_exists("TDEConfig",$param) and $param["TDEConfig"] !== null) {
            $this->TDEConfig = new TDEConfigAttribute();
            $this->TDEConfig->deserialize($param["TDEConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
