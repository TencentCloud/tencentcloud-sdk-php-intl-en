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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CHC host information
 *
 * @method string getChcId() Obtain CHC host ID
 * @method void setChcId(string $ChcId) Set CHC host ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getSerialNumber() Obtain Server serial number
 * @method void setSerialNumber(string $SerialNumber) Set Server serial number
 * @method string getInstanceState() Obtain CHC host status<br/>
<ul>
<li>REGISTERED: The CHC host is registered, but the out-of-band network and deployment network are not configured.</li>
<li>VPC_READY: The out-of-band network and deployment network are configured.</li>
<li>PREPARED: It’s ready and can be associated with a CVM.</li>
<li>ONLINE: It’s already associated with a CVM.</li>
</ul>
 * @method void setInstanceState(string $InstanceState) Set CHC host status<br/>
<ul>
<li>REGISTERED: The CHC host is registered, but the out-of-band network and deployment network are not configured.</li>
<li>VPC_READY: The out-of-band network and deployment network are configured.</li>
<li>PREPARED: It’s ready and can be associated with a CVM.</li>
<li>ONLINE: It’s already associated with a CVM.</li>
</ul>
 * @method string getDeviceType() Obtain Device type
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeviceType(string $DeviceType) Set Device type
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method Placement getPlacement() Obtain Availability zone
 * @method void setPlacement(Placement $Placement) Set Availability zone
 * @method VirtualPrivateCloud getBmcVirtualPrivateCloud() Obtain Out-of-band network
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setBmcVirtualPrivateCloud(VirtualPrivateCloud $BmcVirtualPrivateCloud) Set Out-of-band network
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getBmcIp() Obtain Out-of-band network IP
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setBmcIp(string $BmcIp) Set Out-of-band network IP
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getBmcSecurityGroupIds() Obtain Out-of-band network security group ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setBmcSecurityGroupIds(array $BmcSecurityGroupIds) Set Out-of-band network security group ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method VirtualPrivateCloud getDeployVirtualPrivateCloud() Obtain Deployment network
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeployVirtualPrivateCloud(VirtualPrivateCloud $DeployVirtualPrivateCloud) Set Deployment network
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getDeployIp() Obtain Deployment network IP
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeployIp(string $DeployIp) Set Deployment network IP
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method array getDeploySecurityGroupIds() Obtain Deployment network security group ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeploySecurityGroupIds(array $DeploySecurityGroupIds) Set Deployment network security group ID
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCvmInstanceId() Obtain ID of the associated CVM
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCvmInstanceId(string $CvmInstanceId) Set ID of the associated CVM
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getCreatedTime() Obtain Server creation time
 * @method void setCreatedTime(string $CreatedTime) Set Server creation time
 * @method string getHardwareDescription() Obtain Instance hardware description, including CPU cores, memory capacity and disk capacity.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setHardwareDescription(string $HardwareDescription) Set Instance hardware description, including CPU cores, memory capacity and disk capacity.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getCPU() Obtain CPU cores of the CHC host
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCPU(integer $CPU) Set CPU cores of the CHC host
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getMemory() Obtain Memory capacity of the CHC host (unit: GB)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setMemory(integer $Memory) Set Memory capacity of the CHC host (unit: GB)
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getDisk() Obtain Disk capacity of the CHC host
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDisk(string $Disk) Set Disk capacity of the CHC host
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getBmcMAC() Obtain MAC address assigned under the out-of-band network
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setBmcMAC(string $BmcMAC) Set MAC address assigned under the out-of-band network
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getDeployMAC() Obtain MAC address assigned under the deployment network
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeployMAC(string $DeployMAC) Set MAC address assigned under the deployment network
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getTenantType() Obtain Management type
HOSTING: Hosting
TENANT: Leasing
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setTenantType(string $TenantType) Set Management type
HOSTING: Hosting
TENANT: Leasing
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method ChcDeployExtraConfig getDeployExtraConfig() Obtain CHC DHCP option, which is used for MiniOS debugging.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setDeployExtraConfig(ChcDeployExtraConfig $DeployExtraConfig) Set CHC DHCP option, which is used for MiniOS debugging.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class ChcHost extends AbstractModel
{
    /**
     * @var string CHC host ID
     */
    public $ChcId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Server serial number
     */
    public $SerialNumber;

    /**
     * @var string CHC host status<br/>
<ul>
<li>REGISTERED: The CHC host is registered, but the out-of-band network and deployment network are not configured.</li>
<li>VPC_READY: The out-of-band network and deployment network are configured.</li>
<li>PREPARED: It’s ready and can be associated with a CVM.</li>
<li>ONLINE: It’s already associated with a CVM.</li>
</ul>
     */
    public $InstanceState;

    /**
     * @var string Device type
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeviceType;

    /**
     * @var Placement Availability zone
     */
    public $Placement;

    /**
     * @var VirtualPrivateCloud Out-of-band network
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $BmcVirtualPrivateCloud;

    /**
     * @var string Out-of-band network IP
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $BmcIp;

    /**
     * @var array Out-of-band network security group ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $BmcSecurityGroupIds;

    /**
     * @var VirtualPrivateCloud Deployment network
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeployVirtualPrivateCloud;

    /**
     * @var string Deployment network IP
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeployIp;

    /**
     * @var array Deployment network security group ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeploySecurityGroupIds;

    /**
     * @var string ID of the associated CVM
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CvmInstanceId;

    /**
     * @var string Server creation time
     */
    public $CreatedTime;

    /**
     * @var string Instance hardware description, including CPU cores, memory capacity and disk capacity.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $HardwareDescription;

    /**
     * @var integer CPU cores of the CHC host
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CPU;

    /**
     * @var integer Memory capacity of the CHC host (unit: GB)
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Memory;

    /**
     * @var string Disk capacity of the CHC host
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Disk;

    /**
     * @var string MAC address assigned under the out-of-band network
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $BmcMAC;

    /**
     * @var string MAC address assigned under the deployment network
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeployMAC;

    /**
     * @var string Management type
HOSTING: Hosting
TENANT: Leasing
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $TenantType;

    /**
     * @var ChcDeployExtraConfig CHC DHCP option, which is used for MiniOS debugging.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $DeployExtraConfig;

    /**
     * @param string $ChcId CHC host ID
     * @param string $InstanceName Instance name
     * @param string $SerialNumber Server serial number
     * @param string $InstanceState CHC host status<br/>
<ul>
<li>REGISTERED: The CHC host is registered, but the out-of-band network and deployment network are not configured.</li>
<li>VPC_READY: The out-of-band network and deployment network are configured.</li>
<li>PREPARED: It’s ready and can be associated with a CVM.</li>
<li>ONLINE: It’s already associated with a CVM.</li>
</ul>
     * @param string $DeviceType Device type
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param Placement $Placement Availability zone
     * @param VirtualPrivateCloud $BmcVirtualPrivateCloud Out-of-band network
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $BmcIp Out-of-band network IP
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $BmcSecurityGroupIds Out-of-band network security group ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param VirtualPrivateCloud $DeployVirtualPrivateCloud Deployment network
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $DeployIp Deployment network IP
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param array $DeploySecurityGroupIds Deployment network security group ID
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CvmInstanceId ID of the associated CVM
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $CreatedTime Server creation time
     * @param string $HardwareDescription Instance hardware description, including CPU cores, memory capacity and disk capacity.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $CPU CPU cores of the CHC host
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $Memory Memory capacity of the CHC host (unit: GB)
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Disk Disk capacity of the CHC host
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $BmcMAC MAC address assigned under the out-of-band network
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $DeployMAC MAC address assigned under the deployment network
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $TenantType Management type
HOSTING: Hosting
TENANT: Leasing
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param ChcDeployExtraConfig $DeployExtraConfig CHC DHCP option, which is used for MiniOS debugging.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("ChcId",$param) and $param["ChcId"] !== null) {
            $this->ChcId = $param["ChcId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("BmcVirtualPrivateCloud",$param) and $param["BmcVirtualPrivateCloud"] !== null) {
            $this->BmcVirtualPrivateCloud = new VirtualPrivateCloud();
            $this->BmcVirtualPrivateCloud->deserialize($param["BmcVirtualPrivateCloud"]);
        }

        if (array_key_exists("BmcIp",$param) and $param["BmcIp"] !== null) {
            $this->BmcIp = $param["BmcIp"];
        }

        if (array_key_exists("BmcSecurityGroupIds",$param) and $param["BmcSecurityGroupIds"] !== null) {
            $this->BmcSecurityGroupIds = $param["BmcSecurityGroupIds"];
        }

        if (array_key_exists("DeployVirtualPrivateCloud",$param) and $param["DeployVirtualPrivateCloud"] !== null) {
            $this->DeployVirtualPrivateCloud = new VirtualPrivateCloud();
            $this->DeployVirtualPrivateCloud->deserialize($param["DeployVirtualPrivateCloud"]);
        }

        if (array_key_exists("DeployIp",$param) and $param["DeployIp"] !== null) {
            $this->DeployIp = $param["DeployIp"];
        }

        if (array_key_exists("DeploySecurityGroupIds",$param) and $param["DeploySecurityGroupIds"] !== null) {
            $this->DeploySecurityGroupIds = $param["DeploySecurityGroupIds"];
        }

        if (array_key_exists("CvmInstanceId",$param) and $param["CvmInstanceId"] !== null) {
            $this->CvmInstanceId = $param["CvmInstanceId"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("HardwareDescription",$param) and $param["HardwareDescription"] !== null) {
            $this->HardwareDescription = $param["HardwareDescription"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("BmcMAC",$param) and $param["BmcMAC"] !== null) {
            $this->BmcMAC = $param["BmcMAC"];
        }

        if (array_key_exists("DeployMAC",$param) and $param["DeployMAC"] !== null) {
            $this->DeployMAC = $param["DeployMAC"];
        }

        if (array_key_exists("TenantType",$param) and $param["TenantType"] !== null) {
            $this->TenantType = $param["TenantType"];
        }

        if (array_key_exists("DeployExtraConfig",$param) and $param["DeployExtraConfig"] !== null) {
            $this->DeployExtraConfig = new ChcDeployExtraConfig();
            $this->DeployExtraConfig->deserialize($param["DeployExtraConfig"]);
        }
    }
}
