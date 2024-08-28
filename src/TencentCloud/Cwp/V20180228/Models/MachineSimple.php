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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Host List Shuttle Box
 *
 * @method string getMachineName() Obtain Host name.
 * @method void setMachineName(string $MachineName) Set Host name.
 * @method string getMachineOs() Obtain Host System.
 * @method void setMachineOs(string $MachineOs) Set Host System.
 * @method string getUuid() Obtain Yunjing client UUID. If the client is offline for a long time, an empty string is returned.
 * @method void setUuid(string $Uuid) Set Yunjing client UUID. If the client is offline for a long time, an empty string is returned.
 * @method string getQuuid() Obtain CVM or BM Machine Unique UUID.
 * @method void setQuuid(string $Quuid) Set CVM or BM Machine Unique UUID.
 * @method string getMachineIp() Obtain Host IP.
 * @method void setMachineIp(string $MachineIp) Set Host IP.
 * @method boolean getIsProVersion() Obtain Whether the edition is Pro Edition
<li>true: yes</li>
<li>false: no</li>
 * @method void setIsProVersion(boolean $IsProVersion) Set Whether the edition is Pro Edition
<li>true: yes</li>
<li>false: no</li>
 * @method string getMachineWanIp() Obtain Public IP address of the host
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP address of the host
 * @method string getPayMode() Obtain Host status
<li>POSTPAY: postpaid, indicating pay-as-you-go mode </li>
<li>PREPAY: prepaid, indicating monthly subscription mode</li>
 * @method void setPayMode(string $PayMode) Set Host status
<li>POSTPAY: postpaid, indicating pay-as-you-go mode </li>
<li>PREPAY: prepaid, indicating monthly subscription mode</li>
 * @method array getTag() Obtain Tag information
 * @method void setTag(array $Tag) Set Tag information
 * @method RegionInfo getRegionInfo() Obtain Region information
 * @method void setRegionInfo(RegionInfo $RegionInfo) Set Region information
 * @method string getInstanceState() Obtain Instance status. TERMINATED_PRO_VERSION: terminated.
 * @method void setInstanceState(string $InstanceState) Set Instance status. TERMINATED_PRO_VERSION: terminated.
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getMachineType() Obtain Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
 * @method void setMachineType(string $MachineType) Set Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
 * @method string getKernelVersion() Obtain Kernel version
 * @method void setKernelVersion(string $KernelVersion) Set Kernel version
 * @method string getProtectType() Obtain Protection Edition. BASIC_VERSION: Basic Edition; PRO_VERSION: Professional Edition; Flagship: Premium Edition; GENERAL_DISCOUNT: General Discount Edition
 * @method void setProtectType(string $ProtectType) Set Protection Edition. BASIC_VERSION: Basic Edition; PRO_VERSION: Professional Edition; Flagship: Premium Edition; GENERAL_DISCOUNT: General Discount Edition
 * @method LicenseOrder getLicenseOrder() Obtain Authorization order object
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLicenseOrder(LicenseOrder $LicenseOrder) Set Authorization order object
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCloudTags() Obtain Cloud Tag Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloudTags(array $CloudTags) Set Cloud Tag Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MachineSimple extends AbstractModel
{
    /**
     * @var string Host name.
     */
    public $MachineName;

    /**
     * @var string Host System.
     */
    public $MachineOs;

    /**
     * @var string Yunjing client UUID. If the client is offline for a long time, an empty string is returned.
     */
    public $Uuid;

    /**
     * @var string CVM or BM Machine Unique UUID.
     */
    public $Quuid;

    /**
     * @var string Host IP.
     */
    public $MachineIp;

    /**
     * @var boolean Whether the edition is Pro Edition
<li>true: yes</li>
<li>false: no</li>
     */
    public $IsProVersion;

    /**
     * @var string Public IP address of the host
     */
    public $MachineWanIp;

    /**
     * @var string Host status
<li>POSTPAY: postpaid, indicating pay-as-you-go mode </li>
<li>PREPAY: prepaid, indicating monthly subscription mode</li>
     */
    public $PayMode;

    /**
     * @var array Tag information
     */
    public $Tag;

    /**
     * @var RegionInfo Region information
     */
    public $RegionInfo;

    /**
     * @var string Instance status. TERMINATED_PRO_VERSION: terminated.
     */
    public $InstanceState;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
     */
    public $MachineType;

    /**
     * @var string Kernel version
     */
    public $KernelVersion;

    /**
     * @var string Protection Edition. BASIC_VERSION: Basic Edition; PRO_VERSION: Professional Edition; Flagship: Premium Edition; GENERAL_DISCOUNT: General Discount Edition
     */
    public $ProtectType;

    /**
     * @var LicenseOrder Authorization order object
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LicenseOrder;

    /**
     * @var array Cloud Tag Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloudTags;

    /**
     * @var string Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @param string $MachineName Host name.
     * @param string $MachineOs Host System.
     * @param string $Uuid Yunjing client UUID. If the client is offline for a long time, an empty string is returned.
     * @param string $Quuid CVM or BM Machine Unique UUID.
     * @param string $MachineIp Host IP.
     * @param boolean $IsProVersion Whether the edition is Pro Edition
<li>true: yes</li>
<li>false: no</li>
     * @param string $MachineWanIp Public IP address of the host
     * @param string $PayMode Host status
<li>POSTPAY: postpaid, indicating pay-as-you-go mode </li>
<li>PREPAY: prepaid, indicating monthly subscription mode</li>
     * @param array $Tag Tag information
     * @param RegionInfo $RegionInfo Region information
     * @param string $InstanceState Instance status. TERMINATED_PRO_VERSION: terminated.
     * @param integer $ProjectId Project ID
     * @param string $MachineType Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
     * @param string $KernelVersion Kernel version
     * @param string $ProtectType Protection Edition. BASIC_VERSION: Basic Edition; PRO_VERSION: Professional Edition; Flagship: Premium Edition; GENERAL_DISCOUNT: General Discount Edition
     * @param LicenseOrder $LicenseOrder Authorization order object
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CloudTags Cloud Tag Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineOs",$param) and $param["MachineOs"] !== null) {
            $this->MachineOs = $param["MachineOs"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("RegionInfo",$param) and $param["RegionInfo"] !== null) {
            $this->RegionInfo = new RegionInfo();
            $this->RegionInfo->deserialize($param["RegionInfo"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
        }

        if (array_key_exists("LicenseOrder",$param) and $param["LicenseOrder"] !== null) {
            $this->LicenseOrder = new LicenseOrder();
            $this->LicenseOrder->deserialize($param["LicenseOrder"]);
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
