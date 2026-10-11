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
 * Import machine information in batches.
 *
 * @method string getMachineName() Obtain Machine name
 * @method void setMachineName(string $MachineName) Set Machine name
 * @method string getMachinePublicIp() Obtain Public ip address of the machine
 * @method void setMachinePublicIp(string $MachinePublicIp) Set Public ip address of the machine
 * @method string getMachinePrivateIp() Obtain Private ip of the machine
 * @method void setMachinePrivateIp(string $MachinePrivateIp) Set Private ip of the machine
 * @method array getMachineTag() Obtain Machine Tag
 * @method void setMachineTag(array $MachineTag) Set Machine Tag
 * @method string getQuuid() Obtain Machine Quuid
 * @method void setQuuid(string $Quuid) Set Machine Quuid
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getKernelVersion() Obtain Kernel version number
 * @method void setKernelVersion(string $KernelVersion) Set Kernel version number
 * @method string getMachineStatus() Obtain Online status. OFFLINE, ONLINE.
 * @method void setMachineStatus(string $MachineStatus) Set Online status. OFFLINE, ONLINE.
 * @method LicenseOrder getLicenseOrder() Obtain Authorization order object
 * @method void setLicenseOrder(LicenseOrder $LicenseOrder) Set Authorization order object
 * @method integer getVulNum() Obtain Number of vulnerabilities
 * @method void setVulNum(integer $VulNum) Set Number of vulnerabilities
 * @method array getCloudTags() Obtain Cloud Tag Information
 * @method void setCloudTags(array $CloudTags) Set Cloud Tag Information
 * @method string getInstanceID() Obtain Machine Instance ID
 * @method void setInstanceID(string $InstanceID) Set Machine Instance ID
 */
class EffectiveMachineInfo extends AbstractModel
{
    /**
     * @var string Machine name
     */
    public $MachineName;

    /**
     * @var string Public ip address of the machine
     */
    public $MachinePublicIp;

    /**
     * @var string Private ip of the machine
     */
    public $MachinePrivateIp;

    /**
     * @var array Machine Tag
     */
    public $MachineTag;

    /**
     * @var string Machine Quuid
     */
    public $Quuid;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string Kernel version number
     */
    public $KernelVersion;

    /**
     * @var string Online status. OFFLINE, ONLINE.
     */
    public $MachineStatus;

    /**
     * @var LicenseOrder Authorization order object
     */
    public $LicenseOrder;

    /**
     * @var integer Number of vulnerabilities
     */
    public $VulNum;

    /**
     * @var array Cloud Tag Information
     */
    public $CloudTags;

    /**
     * @var string Machine Instance ID
     */
    public $InstanceID;

    /**
     * @param string $MachineName Machine name
     * @param string $MachinePublicIp Public ip address of the machine
     * @param string $MachinePrivateIp Private ip of the machine
     * @param array $MachineTag Machine Tag
     * @param string $Quuid Machine Quuid
     * @param string $Uuid Host UUID
     * @param string $KernelVersion Kernel version number
     * @param string $MachineStatus Online status. OFFLINE, ONLINE.
     * @param LicenseOrder $LicenseOrder Authorization order object
     * @param integer $VulNum Number of vulnerabilities
     * @param array $CloudTags Cloud Tag Information
     * @param string $InstanceID Machine Instance ID
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

        if (array_key_exists("MachinePublicIp",$param) and $param["MachinePublicIp"] !== null) {
            $this->MachinePublicIp = $param["MachinePublicIp"];
        }

        if (array_key_exists("MachinePrivateIp",$param) and $param["MachinePrivateIp"] !== null) {
            $this->MachinePrivateIp = $param["MachinePrivateIp"];
        }

        if (array_key_exists("MachineTag",$param) and $param["MachineTag"] !== null) {
            $this->MachineTag = [];
            foreach ($param["MachineTag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->MachineTag, $obj);
            }
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
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

        if (array_key_exists("LicenseOrder",$param) and $param["LicenseOrder"] !== null) {
            $this->LicenseOrder = new LicenseOrder();
            $this->LicenseOrder->deserialize($param["LicenseOrder"]);
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
