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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource instance information
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getProductCode() Obtain Product code
 * @method void setProductCode(string $ProductCode) Set Product code
 * @method string getSubProductCode() Obtain Subproduct code
 * @method void setSubProductCode(string $SubProductCode) Set Subproduct code
 * @method string getRegionCode() Obtain Region encoding
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionCode(string $RegionCode) Set Region encoding
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Instance status:
NORMAL
ISOLATED Isolated
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Instance status:
NORMAL
ISOLATED Isolated
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRenewFlag() Obtain Renewal flag:
NOTIFY_AND_MANUAL_RENEW: manual renewal
NOTIFY_AND_AUTO_RENEW: auto-renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: non-renewal upon expiration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(string $RenewFlag) Set Renewal flag:
NOTIFY_AND_MANUAL_RENEW: manual renewal
NOTIFY_AND_AUTO_RENEW: auto-renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: non-renewal upon expiration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Instance expiration time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Instance expiration time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Instance alias: The name set by the user for the instance in the console, which is empty by default if not set.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance alias: The name set by the user for the instance in the console, which is empty by default if not set.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProductName() Obtain Product name: Cloud products purchased by users, such as Cloud Virtual Machine (CVM)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductName(string $ProductName) Set Product name: Cloud products purchased by users, such as Cloud Virtual Machine (CVM)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectName() Obtain Project name: Instance Ownership of the project. User can autonomously assign project to the instance on the console. Default project if not allocated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project name: Instance Ownership of the project. User can autonomously assign project to the instance on the console. Default project if not allocated.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRenewPeriod() Obtain Automatic renewal cycle length
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewPeriod(integer $RenewPeriod) Set Automatic renewal cycle length
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRenewPeriodUnit() Obtain Automatic renewal cycle unit: y year, m month
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewPeriodUnit(string $RenewPeriodUnit) Set Automatic renewal cycle unit: y year, m month
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RenewInstance extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Product code
     */
    public $ProductCode;

    /**
     * @var string Subproduct code
     */
    public $SubProductCode;

    /**
     * @var string Region encoding
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionCode;

    /**
     * @var string Instance status:
NORMAL
ISOLATED Isolated
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Renewal flag:
NOTIFY_AND_MANUAL_RENEW: manual renewal
NOTIFY_AND_AUTO_RENEW: auto-renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: non-renewal upon expiration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var string Instance expiration time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Instance alias: The name set by the user for the instance in the console, which is empty by default if not set.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Product name: Cloud products purchased by users, such as Cloud Virtual Machine (CVM)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductName;

    /**
     * @var string Project name: Instance Ownership of the project. User can autonomously assign project to the instance on the console. Default project if not allocated.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @var integer Automatic renewal cycle length
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewPeriod;

    /**
     * @var string Automatic renewal cycle unit: y year, m month
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewPeriodUnit;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $ProductCode Product code
     * @param string $SubProductCode Subproduct code
     * @param string $RegionCode Region encoding
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Instance status:
NORMAL
ISOLATED Isolated
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RenewFlag Renewal flag:
NOTIFY_AND_MANUAL_RENEW: manual renewal
NOTIFY_AND_AUTO_RENEW: auto-renewal.
DISABLE_NOTIFY_AND_MANUAL_RENEW: non-renewal upon expiration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Instance expiration time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Instance alias: The name set by the user for the instance in the console, which is empty by default if not set.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProductName Product name: Cloud products purchased by users, such as Cloud Virtual Machine (CVM)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectName Project name: Instance Ownership of the project. User can autonomously assign project to the instance on the console. Default project if not allocated.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RenewPeriod Automatic renewal cycle length
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RenewPeriodUnit Automatic renewal cycle unit: y year, m month
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("RenewPeriod",$param) and $param["RenewPeriod"] !== null) {
            $this->RenewPeriod = $param["RenewPeriod"];
        }

        if (array_key_exists("RenewPeriodUnit",$param) and $param["RenewPeriodUnit"] !== null) {
            $this->RenewPeriodUnit = $param["RenewPeriodUnit"];
        }
    }
}
