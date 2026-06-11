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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Host and host tag information
 *
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method array getTagList() Obtain Host tag name array
 * @method void setTagList(array $TagList) Set Host tag name array
 * @method string getHostIp() Obtain Host intranet IP
 * @method void setHostIp(string $HostIp) Set Host intranet IP
 * @method string getAliasName() Obtain host name
 * @method void setAliasName(string $AliasName) Set host name
 * @method string getMachineWanIp() Obtain Host public IP address.
 * @method void setMachineWanIp(string $MachineWanIp) Set Host public IP address.
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getKernelVersion() Obtain Kernel version number
 * @method void setKernelVersion(string $KernelVersion) Set Kernel version number
 * @method string getMachineStatus() Obtain Host online status: ONLINE, OFFLINE
 * @method void setMachineStatus(string $MachineStatus) Set Host online status: ONLINE, OFFLINE
 * @method string getProtectType() Obtain Protection version: BASIC_VERSION - Basic Edition, PRO_VERSION - Professional Edition; Flagship: Ultimate Edition
 * @method void setProtectType(string $ProtectType) Set Protection version: BASIC_VERSION - Basic Edition, PRO_VERSION - Professional Edition; Flagship: Ultimate Edition
 * @method integer getVulNum() Obtain Number of vulnerabilities
 * @method void setVulNum(integer $VulNum) Set Number of vulnerabilities
 * @method array getCloudTags() Obtain Cloud Tag Information
 * @method void setCloudTags(array $CloudTags) Set Cloud Tag Information
 * @method string getInstanceID() Obtain Host Instance ID
 * @method void setInstanceID(string $InstanceID) Set Host Instance ID
 * @method string getMachineType() Obtain Specific host types
 * @method void setMachineType(string $MachineType) Set Specific host types
 * @method string getRegionName() Obtain Availability zone name
 * @method void setRegionName(string $RegionName) Set Availability zone name
 * @method integer getRegionId() Obtain Availability zone ID.
 * @method void setRegionId(integer $RegionId) Set Availability zone ID.
 */
class HostTagInfo extends AbstractModel
{
    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var array Host tag name array
     */
    public $TagList;

    /**
     * @var string Host intranet IP
     */
    public $HostIp;

    /**
     * @var string host name
     */
    public $AliasName;

    /**
     * @var string Host public IP address.
     */
    public $MachineWanIp;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Kernel version number
     */
    public $KernelVersion;

    /**
     * @var string Host online status: ONLINE, OFFLINE
     */
    public $MachineStatus;

    /**
     * @var string Protection version: BASIC_VERSION - Basic Edition, PRO_VERSION - Professional Edition; Flagship: Ultimate Edition
     */
    public $ProtectType;

    /**
     * @var integer Number of vulnerabilities
     */
    public $VulNum;

    /**
     * @var array Cloud Tag Information
     */
    public $CloudTags;

    /**
     * @var string Host Instance ID
     */
    public $InstanceID;

    /**
     * @var string Specific host types
     */
    public $MachineType;

    /**
     * @var string Availability zone name
     */
    public $RegionName;

    /**
     * @var integer Availability zone ID.
     */
    public $RegionId;

    /**
     * @param string $Quuid Host QUUID
     * @param array $TagList Host tag name array
     * @param string $HostIp Host intranet IP
     * @param string $AliasName host name
     * @param string $MachineWanIp Host public IP address.
     * @param string $Uuid Host UUID
     * @param string $KernelVersion Kernel version number
     * @param string $MachineStatus Host online status: ONLINE, OFFLINE
     * @param string $ProtectType Protection version: BASIC_VERSION - Basic Edition, PRO_VERSION - Professional Edition; Flagship: Ultimate Edition
     * @param integer $VulNum Number of vulnerabilities
     * @param array $CloudTags Cloud Tag Information
     * @param string $InstanceID Host Instance ID
     * @param string $MachineType Specific host types
     * @param string $RegionName Availability zone name
     * @param integer $RegionId Availability zone ID.
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = $param["TagList"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("KernelVersion",$param) and $param["KernelVersion"] !== null) {
            $this->KernelVersion = $param["KernelVersion"];
        }

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
        }

        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("CloudTags",$param) and $param["CloudTags"] !== null) {
            $this->CloudTags = [];
            foreach ($param["CloudTags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->CloudTags, $obj);
            }
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }
    }
}
