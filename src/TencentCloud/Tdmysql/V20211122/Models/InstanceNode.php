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
 * @method void setID(integer $ID) Set Primary key
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getNodeId() Obtain Node Id
 * @method void setNodeId(string $NodeId) Set Node Id
 * @method string getIp() Obtain Instance Ip
 * @method void setIp(string $Ip) Set Instance Ip
 * @method string getEniIp() Obtain Instance EniIp
 * @method void setEniIp(string $EniIp) Set Instance EniIp
 * @method integer getPort() Obtain Instance Port
 * @method void setPort(integer $Port) Set Instance Port
 * @method string getSpecCode() Obtain Instance SpecCode
 * @method void setSpecCode(string $SpecCode) Set Instance SpecCode
 * @method string getNodeName() Obtain Instance NodeName
 * @method void setNodeName(string $NodeName) Set Instance NodeName
 * @method integer getCpu() Obtain Instance Cpu
 * @method void setCpu(integer $Cpu) Set Instance Cpu
 * @method integer getMem() Obtain Instance memory
 * @method void setMem(integer $Mem) Set Instance memory
 * @method integer getDisk() Obtain Instance Disk
 * @method void setDisk(integer $Disk) Set Instance Disk
 * @method string getType() Obtain Instance type
 * @method void setType(string $Type) Set Instance type
 * @method string getStatus() Obtain Instance status
 * @method void setStatus(string $Status) Set Instance status
 * @method string getVersion() Obtain Instance version
 * @method void setVersion(string $Version) Set Instance version
 * @method string getZone() Obtain Instance region
 * @method void setZone(string $Zone) Set Instance region
 * @method string getLocalDNS() Obtain Instance LocalDNS
 * @method void setLocalDNS(string $LocalDNS) Set Instance LocalDNS
 * @method string getRegion() Obtain Instance Region
 * @method void setRegion(string $Region) Set Instance Region
 * @method integer getLogDisk() Obtain Instance log disk
 * @method void setLogDisk(integer $LogDisk) Set Instance log disk
 * @method integer getDataDisk() Obtain Instance data disk
 * @method void setDataDisk(integer $DataDisk) Set Instance data disk
 * @method string getZoneID() Obtain Instance Zone ID
 * @method void setZoneID(string $ZoneID) Set Instance Zone ID
 * @method string getSpecName() Obtain Instance SpecName
 * @method void setSpecName(string $SpecName) Set Instance SpecName
 * @method integer getReplicas() Obtain Instance Replicas
 * @method void setReplicas(integer $Replicas) Set Instance Replicas
 * @method integer getShards() Obtain Instance Shards
 * @method void setShards(integer $Shards) Set Instance Shards
 * @method integer getDataReplicas() Obtain Instance data replica
 * @method void setDataReplicas(integer $DataReplicas) Set Instance data replica
 * @method string getParams() Obtain Instance initialization parameter
 * @method void setParams(string $Params) Set Instance initialization parameter
 * @method string getStorageType() Obtain Storage medium, CLOUD_PREMIUM: Premium Cloud Disk, CLOUD_SSD: SSD cloud disk, CLOUD_HSSD: HSSD cloud disk
 * @method void setStorageType(string $StorageType) Set Storage medium, CLOUD_PREMIUM: Premium Cloud Disk, CLOUD_SSD: SSD cloud disk, CLOUD_HSSD: HSSD cloud disk
 */
class InstanceNode extends AbstractModel
{
    /**
     * @var integer Primary key
     */
    public $ID;

    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Node Id
     */
    public $NodeId;

    /**
     * @var string Instance Ip
     */
    public $Ip;

    /**
     * @var string Instance EniIp
     */
    public $EniIp;

    /**
     * @var integer Instance Port
     */
    public $Port;

    /**
     * @var string Instance SpecCode
     */
    public $SpecCode;

    /**
     * @var string Instance NodeName
     */
    public $NodeName;

    /**
     * @var integer Instance Cpu
     */
    public $Cpu;

    /**
     * @var integer Instance memory
     */
    public $Mem;

    /**
     * @var integer Instance Disk
     */
    public $Disk;

    /**
     * @var string Instance type
     */
    public $Type;

    /**
     * @var string Instance status
     */
    public $Status;

    /**
     * @var string Instance version
     */
    public $Version;

    /**
     * @var string Instance region
     */
    public $Zone;

    /**
     * @var string Instance LocalDNS
     */
    public $LocalDNS;

    /**
     * @var string Instance Region
     */
    public $Region;

    /**
     * @var integer Instance log disk
     */
    public $LogDisk;

    /**
     * @var integer Instance data disk
     */
    public $DataDisk;

    /**
     * @var string Instance Zone ID
     */
    public $ZoneID;

    /**
     * @var string Instance SpecName
     */
    public $SpecName;

    /**
     * @var integer Instance Replicas
     */
    public $Replicas;

    /**
     * @var integer Instance Shards
     */
    public $Shards;

    /**
     * @var integer Instance data replica
     */
    public $DataReplicas;

    /**
     * @var string Instance initialization parameter
     */
    public $Params;

    /**
     * @var string Storage medium, CLOUD_PREMIUM: Premium Cloud Disk, CLOUD_SSD: SSD cloud disk, CLOUD_HSSD: HSSD cloud disk
     */
    public $StorageType;

    /**
     * @param integer $ID Primary key
     * @param string $InstanceId Instance ID.
     * @param string $NodeId Node Id
     * @param string $Ip Instance Ip
     * @param string $EniIp Instance EniIp
     * @param integer $Port Instance Port
     * @param string $SpecCode Instance SpecCode
     * @param string $NodeName Instance NodeName
     * @param integer $Cpu Instance Cpu
     * @param integer $Mem Instance memory
     * @param integer $Disk Instance Disk
     * @param string $Type Instance type
     * @param string $Status Instance status
     * @param string $Version Instance version
     * @param string $Zone Instance region
     * @param string $LocalDNS Instance LocalDNS
     * @param string $Region Instance Region
     * @param integer $LogDisk Instance log disk
     * @param integer $DataDisk Instance data disk
     * @param string $ZoneID Instance Zone ID
     * @param string $SpecName Instance SpecName
     * @param integer $Replicas Instance Replicas
     * @param integer $Shards Instance Shards
     * @param integer $DataReplicas Instance data replica
     * @param string $Params Instance initialization parameter
     * @param string $StorageType Storage medium, CLOUD_PREMIUM: Premium Cloud Disk, CLOUD_SSD: SSD cloud disk, CLOUD_HSSD: HSSD cloud disk
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
