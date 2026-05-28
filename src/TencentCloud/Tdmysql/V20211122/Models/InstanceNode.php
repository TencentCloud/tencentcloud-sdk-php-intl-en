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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node information
 *
 * @method integer getID() Obtain Primary key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setID(integer $ID) Set Primary key
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeId() Obtain Node Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeId(string $NodeId) Set Node Id
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIp() Obtain Instance Ip
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIp(string $Ip) Set Instance Ip
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEniIp() Obtain Eni IP of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEniIp(string $EniIp) Set Eni IP of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPort() Obtain Instance Port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPort(integer $Port) Set Instance Port
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSpecCode() Obtain Instance SpecCode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpecCode(string $SpecCode) Set Instance SpecCode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNodeName() Obtain Instance NodeName
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNodeName(string $NodeName) Set Instance NodeName
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCpu() Obtain Instance Cpu
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpu(integer $Cpu) Set Instance Cpu
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMem() Obtain Instance memory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMem(integer $Mem) Set Instance memory
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDisk() Obtain Instance Disk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDisk(integer $Disk) Set Instance Disk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getType() Obtain Instance type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(string $Type) Set Instance type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Instance status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Instance status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVersion() Obtain instance version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVersion(string $Version) Set instance version
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLocalDNS() Obtain Instance LocalDNS
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLocalDNS(string $LocalDNS) Set Instance LocalDNS
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Instance Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Instance Region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getLogDisk() Obtain Instance log disk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogDisk(integer $LogDisk) Set Instance log disk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDataDisk() Obtain Instance data disk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataDisk(integer $DataDisk) Set Instance data disk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneID() Obtain Zone ID of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneID(string $ZoneID) Set Zone ID of the instance
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSpecName() Obtain Instance SpecName
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSpecName(string $SpecName) Set Instance SpecName
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReplicas() Obtain Instance Replicas
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplicas(integer $Replicas) Set Instance Replicas
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getShards() Obtain Instance Shards
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setShards(integer $Shards) Set Instance Shards
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDataReplicas() Obtain Instance data replica
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataReplicas(integer $DataReplicas) Set Instance data replica
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getParams() Obtain Initialize parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setParams(string $Params) Set Initialize parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStorageType() Obtain Storage medium, CLOUD_PREMIUM: Premium Cloud Disk, CLOUD_SSD: SSD cloud disk, CLOUD_HSSD: HSSD cloud disk
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageType(string $StorageType) Set Storage medium, CLOUD_PREMIUM: Premium Cloud Disk, CLOUD_SSD: SSD cloud disk, CLOUD_HSSD: HSSD cloud disk
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceNode extends AbstractModel
{
    /**
     * @var integer Primary key
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ID;

    /**
     * @var string Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Node Id
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeId;

    /**
     * @var string Instance Ip
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ip;

    /**
     * @var string Eni IP of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EniIp;

    /**
     * @var integer Instance Port
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Port;

    /**
     * @var string Instance SpecCode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpecCode;

    /**
     * @var string Instance NodeName
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NodeName;

    /**
     * @var integer Instance Cpu
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cpu;

    /**
     * @var integer Instance memory
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mem;

    /**
     * @var integer Instance Disk
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Disk;

    /**
     * @var string Instance type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Instance status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string instance version
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Version;

    /**
     * @var string Region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var string Instance LocalDNS
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LocalDNS;

    /**
     * @var string Instance Region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var integer Instance log disk
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LogDisk;

    /**
     * @var integer Instance data disk
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataDisk;

    /**
     * @var string Zone ID of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneID;

    /**
     * @var string Instance SpecName
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SpecName;

    /**
     * @var integer Instance Replicas
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Replicas;

    /**
     * @var integer Instance Shards
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Shards;

    /**
     * @var integer Instance data replica
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataReplicas;

    /**
     * @var string Initialize parameter
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Params;

    /**
     * @var string Storage medium, CLOUD_PREMIUM: Premium Cloud Disk, CLOUD_SSD: SSD cloud disk, CLOUD_HSSD: HSSD cloud disk
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageType;

    /**
     * @param integer $ID Primary key
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeId Node Id
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Ip Instance Ip
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EniIp Eni IP of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Port Instance Port
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SpecCode Instance SpecCode
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NodeName Instance NodeName
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Cpu Instance Cpu
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Mem Instance memory
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Disk Instance Disk
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Type Instance type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Instance status
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Version instance version
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LocalDNS Instance LocalDNS
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Instance Region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $LogDisk Instance log disk
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DataDisk Instance data disk
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneID Zone ID of the instance
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SpecName Instance SpecName
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Replicas Instance Replicas
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Shards Instance Shards
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DataReplicas Instance data replica
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Params Initialize parameter
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StorageType Storage medium, CLOUD_PREMIUM: Premium Cloud Disk, CLOUD_SSD: SSD cloud disk, CLOUD_HSSD: HSSD cloud disk
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

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("EniIp",$param) and $param["EniIp"] !== null) {
            $this->EniIp = $param["EniIp"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("LocalDNS",$param) and $param["LocalDNS"] !== null) {
            $this->LocalDNS = $param["LocalDNS"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("LogDisk",$param) and $param["LogDisk"] !== null) {
            $this->LogDisk = $param["LogDisk"];
        }

        if (array_key_exists("DataDisk",$param) and $param["DataDisk"] !== null) {
            $this->DataDisk = $param["DataDisk"];
        }

        if (array_key_exists("ZoneID",$param) and $param["ZoneID"] !== null) {
            $this->ZoneID = $param["ZoneID"];
        }

        if (array_key_exists("SpecName",$param) and $param["SpecName"] !== null) {
            $this->SpecName = $param["SpecName"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("Shards",$param) and $param["Shards"] !== null) {
            $this->Shards = $param["Shards"];
        }

        if (array_key_exists("DataReplicas",$param) and $param["DataReplicas"] !== null) {
            $this->DataReplicas = $param["DataReplicas"];
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
