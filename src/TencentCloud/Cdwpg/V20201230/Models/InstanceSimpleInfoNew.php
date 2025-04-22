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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Simplified instance information.
 *
 * @method integer getID() Obtain ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setID(integer $ID) Set ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Cluster ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Cluster name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Cluster name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain Kernel version.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set Kernel version.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Region.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Region.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRegionId() Obtain Region ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionId(integer $RegionId) Set Region ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionDesc() Obtain Region details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionDesc(string $RegionDesc) Set Region details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getZoneId() Obtain Region ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneId(integer $ZoneId) Set Region ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneDesc() Obtain Region details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneDesc(string $ZoneDesc) Set Region details.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain Virtual Private Cloud (VPC).

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set Virtual Private Cloud (VPC).

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain Subnet.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateTime() Obtain Start time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Start time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExpireTime() Obtain Expiration time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExpireTime(string $ExpireTime) Set Expiration time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccessInfo() Obtain Access address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessInfo(string $AccessInfo) Set Access address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayMode() Obtain Billing mode.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayMode(string $PayMode) Set Billing mode.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getRenewFlag() Obtain Automatic renewal.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(boolean $RenewFlag) Set Automatic renewal.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceSimpleInfoNew extends AbstractModel
{
    /**
     * @var integer ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ID;

    /**
     * @var string Cluster ID.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Cluster name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Kernel version.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var string Region.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var integer Region ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionId;

    /**
     * @var string Region details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionDesc;

    /**
     * @var string Region.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var integer Region ID.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneId;

    /**
     * @var string Region details.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneDesc;

    /**
     * @var string Virtual Private Cloud (VPC).

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var string Start time.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Expiration time.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ExpireTime;

    /**
     * @var string Access address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessInfo;

    /**
     * @var string Billing mode.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayMode;

    /**
     * @var boolean Automatic renewal.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @param integer $ID ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Cluster ID.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Cluster name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Version Kernel version.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Region.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RegionId Region ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionDesc Region details.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Region.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ZoneId Region ID.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneDesc Region details.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId Virtual Private Cloud (VPC).

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId Subnet.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Start time.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expiration time.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccessInfo Access address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayMode Billing mode.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $RenewFlag Automatic renewal.
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionDesc",$param) and $param["RegionDesc"] !== null) {
            $this->RegionDesc = $param["RegionDesc"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneDesc",$param) and $param["ZoneDesc"] !== null) {
            $this->ZoneDesc = $param["ZoneDesc"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("AccessInfo",$param) and $param["AccessInfo"] !== null) {
            $this->AccessInfo = $param["AccessInfo"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }
    }
}
