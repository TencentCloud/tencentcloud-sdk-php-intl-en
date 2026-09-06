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
 * @method integer getID() Obtain 
 * @method void setID(integer $ID) Set 
 * @method string getInstanceId() Obtain 
 * @method void setInstanceId(string $InstanceId) Set 
 * @method string getNodeId() Obtain Node Id
 * @method void setNodeId(string $NodeId) Set Node Id
 * @method string getIp() Obtain 
 * @method void setIp(string $Ip) Set 
 * @method string getEniIp() Obtain 
 * @method void setEniIp(string $EniIp) Set 
 * @method integer getPort() Obtain 
 * @method void setPort(integer $Port) Set 
 * @method string getSpecCode() Obtain 
 * @method void setSpecCode(string $SpecCode) Set 
 * @method string getNodeName() Obtain 
 * @method void setNodeName(string $NodeName) Set 
 * @method integer getCpu() Obtain 
 * @method void setCpu(integer $Cpu) Set 
 * @method integer getMem() Obtain 
 * @method void setMem(integer $Mem) Set 
 * @method integer getDisk() Obtain 
 * @method void setDisk(integer $Disk) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method string getVersion() Obtain 
 * @method void setVersion(string $Version) Set 
 * @method string getZone() Obtain 
 * @method void setZone(string $Zone) Set 
 * @method string getLocalDNS() Obtain 
 * @method void setLocalDNS(string $LocalDNS) Set 
 * @method string getRegion() Obtain 
 * @method void setRegion(string $Region) Set 
 * @method integer getLogDisk() Obtain 
 * @method void setLogDisk(integer $LogDisk) Set 
 * @method integer getDataDisk() Obtain 
 * @method void setDataDisk(integer $DataDisk) Set 
 * @method string getZoneID() Obtain 
 * @method void setZoneID(string $ZoneID) Set 
 * @method string getSpecName() Obtain 
 * @method void setSpecName(string $SpecName) Set 
 * @method integer getReplicas() Obtain 
 * @method void setReplicas(integer $Replicas) Set 
 * @method integer getShards() Obtain 
 * @method void setShards(integer $Shards) Set 
 * @method integer getDataReplicas() Obtain 
 * @method void setDataReplicas(integer $DataReplicas) Set 
 * @method string getParams() Obtain 
 * @method void setParams(string $Params) Set 
 * @method string getStorageType() Obtain 
 * @method void setStorageType(string $StorageType) Set 
 */
class InstanceNode extends AbstractModel
{
    /**
     * @var integer 
     */
    public $ID;

    /**
     * @var string 
     */
    public $InstanceId;

    /**
     * @var string Node Id
     */
    public $NodeId;

    /**
     * @var string 
     */
    public $Ip;

    /**
     * @var string 
     */
    public $EniIp;

    /**
     * @var integer 
     */
    public $Port;

    /**
     * @var string 
     */
    public $SpecCode;

    /**
     * @var string 
     */
    public $NodeName;

    /**
     * @var integer 
     */
    public $Cpu;

    /**
     * @var integer 
     */
    public $Mem;

    /**
     * @var integer 
     */
    public $Disk;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string 
     */
    public $Version;

    /**
     * @var string 
     */
    public $Zone;

    /**
     * @var string 
     */
    public $LocalDNS;

    /**
     * @var string 
     */
    public $Region;

    /**
     * @var integer 
     */
    public $LogDisk;

    /**
     * @var integer 
     */
    public $DataDisk;

    /**
     * @var string 
     */
    public $ZoneID;

    /**
     * @var string 
     */
    public $SpecName;

    /**
     * @var integer 
     */
    public $Replicas;

    /**
     * @var integer 
     */
    public $Shards;

    /**
     * @var integer 
     */
    public $DataReplicas;

    /**
     * @var string 
     */
    public $Params;

    /**
     * @var string 
     */
    public $StorageType;

    /**
     * @param integer $ID 
     * @param string $InstanceId 
     * @param string $NodeId Node Id
     * @param string $Ip 
     * @param string $EniIp 
     * @param integer $Port 
     * @param string $SpecCode 
     * @param string $NodeName 
     * @param integer $Cpu 
     * @param integer $Mem 
     * @param integer $Disk 
     * @param string $Type 
     * @param string $Status 
     * @param string $Version 
     * @param string $Zone 
     * @param string $LocalDNS 
     * @param string $Region 
     * @param integer $LogDisk 
     * @param integer $DataDisk 
     * @param string $ZoneID 
     * @param string $SpecName 
     * @param integer $Replicas 
     * @param integer $Shards 
     * @param integer $DataReplicas 
     * @param string $Params 
     * @param string $StorageType 
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
