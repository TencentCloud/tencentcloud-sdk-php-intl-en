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
 * Cluster information.
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
 * @method string getZone() Obtain Region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Region.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserVPCID() Obtain Virtual Private Cloud (VPC).

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserVPCID(string $UserVPCID) Set Virtual Private Cloud (VPC).

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserSubnetID() Obtain Subnet.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserSubnetID(string $UserSubnetID) Set Subnet.
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
 * @method integer getRenewFlag() Obtain Automatic renewal switch. 0 indicates automatic renewal is not enabled, and 1 indicates automatic renewal is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRenewFlag(integer $RenewFlag) Set Automatic renewal switch. 0 indicates automatic renewal is not enabled, and 1 indicates automatic renewal is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ChargeProperties getChargeProperties() Obtain Billing mode.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setChargeProperties(ChargeProperties $ChargeProperties) Set Billing mode.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getResources() Obtain Resource collection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResources(array $Resources) Set Resource collection.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag list.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag list.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Cluster status.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Cluster status.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SimpleInstanceInfo extends AbstractModel
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
     * @var string Region.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var string Virtual Private Cloud (VPC).

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserVPCID;

    /**
     * @var string Subnet.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserSubnetID;

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
     * @var integer Automatic renewal switch. 0 indicates automatic renewal is not enabled, and 1 indicates automatic renewal is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RenewFlag;

    /**
     * @var ChargeProperties Billing mode.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ChargeProperties;

    /**
     * @var array Resource collection.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Resources;

    /**
     * @var array Tag list.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer Cluster status.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

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
     * @param string $Zone Region.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserVPCID Virtual Private Cloud (VPC).

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserSubnetID Subnet.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateTime Start time.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExpireTime Expiration time.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccessInfo Access address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RenewFlag Automatic renewal switch. 0 indicates automatic renewal is not enabled, and 1 indicates automatic renewal is enabled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ChargeProperties $ChargeProperties Billing mode.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Resources Resource collection.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag list.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Cluster status.
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("UserVPCID",$param) and $param["UserVPCID"] !== null) {
            $this->UserVPCID = $param["UserVPCID"];
        }

        if (array_key_exists("UserSubnetID",$param) and $param["UserSubnetID"] !== null) {
            $this->UserSubnetID = $param["UserSubnetID"];
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

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ChargeProperties",$param) and $param["ChargeProperties"] !== null) {
            $this->ChargeProperties = new ChargeProperties();
            $this->ChargeProperties->deserialize($param["ChargeProperties"]);
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new ResourceInfo();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
