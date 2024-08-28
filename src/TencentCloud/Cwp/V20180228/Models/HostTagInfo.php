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
 * Host and host tag information
 *
 * @method string getQuuid() Obtain Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setQuuid(string $Quuid) Set Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTagList() Obtain Host tag name array
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTagList(array $TagList) Set Host tag name array
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHostIp() Obtain Host intranet IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHostIp(string $HostIp) Set Host intranet IP
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAliasName() Obtain Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAliasName(string $AliasName) Set Host name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMachineWanIp() Obtain Host public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineWanIp(string $MachineWanIp) Set Host public IP address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUuid() Obtain Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUuid(string $Uuid) Set Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getKernelVersion() Obtain Kernel version number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKernelVersion(string $KernelVersion) Set Kernel version number
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMachineStatus() Obtain Host online status: ONLINE; OFFLINE
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineStatus(string $MachineStatus) Set Host online status: ONLINE; OFFLINE
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProtectType() Obtain Protection version: BASIC_VERSION - Basic Edition PRO_VERSION - Professional Edition; Flagship: Ultimate Edition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtectType(string $ProtectType) Set Protection version: BASIC_VERSION - Basic Edition PRO_VERSION - Professional Edition; Flagship: Ultimate Edition
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVulNum() Obtain Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulNum(integer $VulNum) Set Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCloudTags() Obtain Cloud Tag Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCloudTags(array $CloudTags) Set Cloud Tag Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceID() Obtain Host Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceID(string $InstanceID) Set Host Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class HostTagInfo extends AbstractModel
{
    /**
     * @var string Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Quuid;

    /**
     * @var array Host tag name array
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TagList;

    /**
     * @var string Host intranet IP
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HostIp;

    /**
     * @var string Host name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AliasName;

    /**
     * @var string Host public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineWanIp;

    /**
     * @var string Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uuid;

    /**
     * @var string Kernel version number
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KernelVersion;

    /**
     * @var string Host online status: ONLINE; OFFLINE
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineStatus;

    /**
     * @var string Protection version: BASIC_VERSION - Basic Edition PRO_VERSION - Professional Edition; Flagship: Ultimate Edition
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProtectType;

    /**
     * @var integer Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulNum;

    /**
     * @var array Cloud Tag Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CloudTags;

    /**
     * @var string Host Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceID;

    /**
     * @param string $Quuid Host QUUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TagList Host tag name array
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HostIp Host intranet IP
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AliasName Host name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MachineWanIp Host public IP address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uuid Host UUID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $KernelVersion Kernel version number
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MachineStatus Host online status: ONLINE; OFFLINE
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProtectType Protection version: BASIC_VERSION - Basic Edition PRO_VERSION - Professional Edition; Flagship: Ultimate Edition
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VulNum Number of vulnerabilities
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CloudTags Cloud Tag Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceID Host Instance ID
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
    }
}
