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
namespace TencentCloud\Edgezone\V20260401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describe physical machine instance information
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getMachineId() Obtain Bound Physical Machine ID
 * @method void setMachineId(string $MachineId) Set Bound Physical Machine ID
 * @method string getInstanceType() Obtain Model specifications
 * @method void setInstanceType(string $InstanceType) Set Model specifications
 * @method string getZone() Obtain Availability zone code
 * @method void setZone(string $Zone) Set Availability zone code
 * @method string getImageId() Obtain Image ID
 * @method void setImageId(string $ImageId) Set Image ID
 * @method string getVersionNumber() Obtain Image version number
 * @method void setVersionNumber(string $VersionNumber) Set Image version number
 * @method string getInstanceStatus() Obtain Instance status, value range: allocating, running, isolating, isolated, terminating, error.
 * @method void setInstanceStatus(string $InstanceStatus) Set Instance status, value range: allocating, running, isolating, isolated, terminating, error.
 * @method string getOperateStatus() Obtain Operation status: normal, starting, stopping, stopped, rebooting.
 * @method void setOperateStatus(string $OperateStatus) Set Operation status: normal, starting, stopping, stopped, rebooting.
 * @method string getPrivateNetworkId() Obtain VPC ID
 * @method void setPrivateNetworkId(string $PrivateNetworkId) Set VPC ID
 * @method string getPrivateIp() Obtain private IPv4 address
 * @method void setPrivateIp(string $PrivateIp) Set private IPv4 address
 * @method string getPrivateIpV6() Obtain private IPv6 address
 * @method void setPrivateIpV6(string $PrivateIpV6) Set private IPv6 address
 * @method string getPublicNetworkId() Obtain Public network ID
 * @method void setPublicNetworkId(string $PublicNetworkId) Set Public network ID
 * @method string getPublicIp() Obtain Public IPv4 address
 * @method void setPublicIp(string $PublicIp) Set Public IPv4 address
 * @method string getPublicIpV6() Obtain Public IPv6 address
 * @method void setPublicIpV6(string $PublicIpV6) Set Public IPv6 address
 * @method string getCreatedTime() Obtain Creation time, expressed according to the ISO8601 standard and using the UTC time. The format is YYYY-MM-DDThh:mm:ssZ.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time, expressed according to the ISO8601 standard and using the UTC time. The format is YYYY-MM-DDThh:mm:ssZ.
 */
class Instance extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Bound Physical Machine ID
     */
    public $MachineId;

    /**
     * @var string Model specifications
     */
    public $InstanceType;

    /**
     * @var string Availability zone code
     */
    public $Zone;

    /**
     * @var string Image ID
     */
    public $ImageId;

    /**
     * @var string Image version number
     */
    public $VersionNumber;

    /**
     * @var string Instance status, value range: allocating, running, isolating, isolated, terminating, error.
     */
    public $InstanceStatus;

    /**
     * @var string Operation status: normal, starting, stopping, stopped, rebooting.
     */
    public $OperateStatus;

    /**
     * @var string VPC ID
     */
    public $PrivateNetworkId;

    /**
     * @var string private IPv4 address
     */
    public $PrivateIp;

    /**
     * @var string private IPv6 address
     */
    public $PrivateIpV6;

    /**
     * @var string Public network ID
     */
    public $PublicNetworkId;

    /**
     * @var string Public IPv4 address
     */
    public $PublicIp;

    /**
     * @var string Public IPv6 address
     */
    public $PublicIpV6;

    /**
     * @var string Creation time, expressed according to the ISO8601 standard and using the UTC time. The format is YYYY-MM-DDThh:mm:ssZ.
     */
    public $CreatedTime;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $InstanceName Instance name.
     * @param string $MachineId Bound Physical Machine ID
     * @param string $InstanceType Model specifications
     * @param string $Zone Availability zone code
     * @param string $ImageId Image ID
     * @param string $VersionNumber Image version number
     * @param string $InstanceStatus Instance status, value range: allocating, running, isolating, isolated, terminating, error.
     * @param string $OperateStatus Operation status: normal, starting, stopping, stopped, rebooting.
     * @param string $PrivateNetworkId VPC ID
     * @param string $PrivateIp private IPv4 address
     * @param string $PrivateIpV6 private IPv6 address
     * @param string $PublicNetworkId Public network ID
     * @param string $PublicIp Public IPv4 address
     * @param string $PublicIpV6 Public IPv6 address
     * @param string $CreatedTime Creation time, expressed according to the ISO8601 standard and using the UTC time. The format is YYYY-MM-DDThh:mm:ssZ.
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("MachineId",$param) and $param["MachineId"] !== null) {
            $this->MachineId = $param["MachineId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("OperateStatus",$param) and $param["OperateStatus"] !== null) {
            $this->OperateStatus = $param["OperateStatus"];
        }

        if (array_key_exists("PrivateNetworkId",$param) and $param["PrivateNetworkId"] !== null) {
            $this->PrivateNetworkId = $param["PrivateNetworkId"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("PrivateIpV6",$param) and $param["PrivateIpV6"] !== null) {
            $this->PrivateIpV6 = $param["PrivateIpV6"];
        }

        if (array_key_exists("PublicNetworkId",$param) and $param["PublicNetworkId"] !== null) {
            $this->PublicNetworkId = $param["PublicNetworkId"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PublicIpV6",$param) and $param["PublicIpV6"] !== null) {
            $this->PublicIpV6 = $param["PublicIpV6"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }
    }
}
