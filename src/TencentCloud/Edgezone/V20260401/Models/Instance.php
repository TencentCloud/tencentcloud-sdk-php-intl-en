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
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getMachineId() Obtain <p>Bound Physical Machine ID</p>
 * @method void setMachineId(string $MachineId) Set <p>Bound Physical Machine ID</p>
 * @method string getInstanceType() Obtain <p>Model specifications</p>
 * @method void setInstanceType(string $InstanceType) Set <p>Model specifications</p>
 * @method string getZone() Obtain <p>Availability zone code</p>
 * @method void setZone(string $Zone) Set <p>Availability zone code</p>
 * @method string getImageId() Obtain <p>Image ID.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID.</p>
 * @method string getVersionNumber() Obtain <p>Image version number</p>
 * @method void setVersionNumber(string $VersionNumber) Set <p>Image version number</p>
 * @method string getInstanceStatus() Obtain <p>Instance status, value range: allocating, running, isolating, isolated, terminating, error.</p>
 * @method void setInstanceStatus(string $InstanceStatus) Set <p>Instance status, value range: allocating, running, isolating, isolated, terminating, error.</p>
 * @method string getOperateStatus() Obtain <p>Operation status: normal, starting, stopping, stopped, rebooting.</p>
 * @method void setOperateStatus(string $OperateStatus) Set <p>Operation status: normal, starting, stopping, stopped, rebooting.</p>
 * @method string getPrivateNetworkId() Obtain <p>VPC ID.</p>
 * @method void setPrivateNetworkId(string $PrivateNetworkId) Set <p>VPC ID.</p>
 * @method string getPrivateIp() Obtain <p>Private IPv4 address</p>
 * @method void setPrivateIp(string $PrivateIp) Set <p>Private IPv4 address</p>
 * @method string getPrivateIpV6() Obtain <p>Private IPv6 address</p>
 * @method void setPrivateIpV6(string $PrivateIpV6) Set <p>Private IPv6 address</p>
 * @method string getPublicNetworkId() Obtain <p>Public network ID.</p>
 * @method void setPublicNetworkId(string $PublicNetworkId) Set <p>Public network ID.</p>
 * @method string getPublicIp() Obtain <p>Public IPv4 address</p>
 * @method void setPublicIp(string $PublicIp) Set <p>Public IPv4 address</p>
 * @method string getPublicIpV6() Obtain <p>Public IPv6 address</p>
 * @method void setPublicIpV6(string $PublicIpV6) Set <p>Public IPv6 address</p>
 * @method string getFileSystemType() Obtain <p>File System Type</p>
 * @method void setFileSystemType(string $FileSystemType) Set <p>File System Type</p>
 * @method string getCreatedTime() Obtain <p>Creation time, in the ISO 8601 standard format, using UTC time. Format: YYYY-MM-DDThh:mm:ssZ.</p>
 * @method void setCreatedTime(string $CreatedTime) Set <p>Creation time, in the ISO 8601 standard format, using UTC time. Format: YYYY-MM-DDThh:mm:ssZ.</p>
 * @method string getInstanceFamily() Obtain <p>Instance family flag</p>
 * @method void setInstanceFamily(string $InstanceFamily) Set <p>Instance family flag</p>
 * @method string getInstanceFamilyName() Obtain <p>Model Family Name</p>
 * @method void setInstanceFamilyName(string $InstanceFamilyName) Set <p>Model Family Name</p>
 * @method string getCpuType() Obtain <p>CPU Model</p>
 * @method void setCpuType(string $CpuType) Set <p>CPU Model</p>
 * @method integer getCpu() Obtain <p>CPU cores.</p>
 * @method void setCpu(integer $Cpu) Set <p>CPU cores.</p>
 * @method integer getMemory() Obtain <p>Memory size.</p>
 * @method void setMemory(integer $Memory) Set <p>Memory size.</p>
 */
class Instance extends AbstractModel
{
    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Bound Physical Machine ID</p>
     */
    public $MachineId;

    /**
     * @var string <p>Model specifications</p>
     */
    public $InstanceType;

    /**
     * @var string <p>Availability zone code</p>
     */
    public $Zone;

    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageId;

    /**
     * @var string <p>Image version number</p>
     * @deprecated
     */
    public $VersionNumber;

    /**
     * @var string <p>Instance status, value range: allocating, running, isolating, isolated, terminating, error.</p>
     */
    public $InstanceStatus;

    /**
     * @var string <p>Operation status: normal, starting, stopping, stopped, rebooting.</p>
     */
    public $OperateStatus;

    /**
     * @var string <p>VPC ID.</p>
     */
    public $PrivateNetworkId;

    /**
     * @var string <p>Private IPv4 address</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>Private IPv6 address</p>
     */
    public $PrivateIpV6;

    /**
     * @var string <p>Public network ID.</p>
     */
    public $PublicNetworkId;

    /**
     * @var string <p>Public IPv4 address</p>
     */
    public $PublicIp;

    /**
     * @var string <p>Public IPv6 address</p>
     */
    public $PublicIpV6;

    /**
     * @var string <p>File System Type</p>
     */
    public $FileSystemType;

    /**
     * @var string <p>Creation time, in the ISO 8601 standard format, using UTC time. Format: YYYY-MM-DDThh:mm:ssZ.</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>Instance family flag</p>
     */
    public $InstanceFamily;

    /**
     * @var string <p>Model Family Name</p>
     */
    public $InstanceFamilyName;

    /**
     * @var string <p>CPU Model</p>
     */
    public $CpuType;

    /**
     * @var integer <p>CPU cores.</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Memory size.</p>
     */
    public $Memory;

    /**
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $MachineId <p>Bound Physical Machine ID</p>
     * @param string $InstanceType <p>Model specifications</p>
     * @param string $Zone <p>Availability zone code</p>
     * @param string $ImageId <p>Image ID.</p>
     * @param string $VersionNumber <p>Image version number</p>
     * @param string $InstanceStatus <p>Instance status, value range: allocating, running, isolating, isolated, terminating, error.</p>
     * @param string $OperateStatus <p>Operation status: normal, starting, stopping, stopped, rebooting.</p>
     * @param string $PrivateNetworkId <p>VPC ID.</p>
     * @param string $PrivateIp <p>Private IPv4 address</p>
     * @param string $PrivateIpV6 <p>Private IPv6 address</p>
     * @param string $PublicNetworkId <p>Public network ID.</p>
     * @param string $PublicIp <p>Public IPv4 address</p>
     * @param string $PublicIpV6 <p>Public IPv6 address</p>
     * @param string $FileSystemType <p>File System Type</p>
     * @param string $CreatedTime <p>Creation time, in the ISO 8601 standard format, using UTC time. Format: YYYY-MM-DDThh:mm:ssZ.</p>
     * @param string $InstanceFamily <p>Instance family flag</p>
     * @param string $InstanceFamilyName <p>Model Family Name</p>
     * @param string $CpuType <p>CPU Model</p>
     * @param integer $Cpu <p>CPU cores.</p>
     * @param integer $Memory <p>Memory size.</p>
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

        if (array_key_exists("FileSystemType",$param) and $param["FileSystemType"] !== null) {
            $this->FileSystemType = $param["FileSystemType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("InstanceFamilyName",$param) and $param["InstanceFamilyName"] !== null) {
            $this->InstanceFamilyName = $param["InstanceFamilyName"];
        }

        if (array_key_exists("CpuType",$param) and $param["CpuType"] !== null) {
            $this->CpuType = $param["CpuType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }
    }
}
