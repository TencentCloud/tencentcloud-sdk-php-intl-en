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
 * Basic information on the server list in asset fingerprint
 *
 * @method string getQuuid() Obtain Server QUUID
 * @method void setQuuid(string $Quuid) Set Server QUUID
 * @method string getUuid() Obtain Server UUID
 * @method void setUuid(string $Uuid) Set Server UUID
 * @method string getMachineIp() Obtain Private IP address of server
 * @method void setMachineIp(string $MachineIp) Set Private IP address of server
 * @method string getMachineName() Obtain Server name
 * @method void setMachineName(string $MachineName) Set Server name
 * @method string getOsInfo() Obtain Operating system name
 * @method void setOsInfo(string $OsInfo) Set Operating system name
 * @method string getCpu() Obtain CPU information
 * @method void setCpu(string $Cpu) Set CPU information
 * @method integer getMemSize() Obtain Memory capacity, in GB
 * @method void setMemSize(integer $MemSize) Set Memory capacity, in GB
 * @method string getMemLoad() Obtain Memory utilization, in percentage
 * @method void setMemLoad(string $MemLoad) Set Memory utilization, in percentage
 * @method integer getDiskSize() Obtain Hard disk capacity, in GB
 * @method void setDiskSize(integer $DiskSize) Set Hard disk capacity, in GB
 * @method string getDiskLoad() Obtain Hard disk usage, in percentage
 * @method void setDiskLoad(string $DiskLoad) Set Hard disk usage, in percentage
 * @method integer getPartitionCount() Obtain Number of partitions
 * @method void setPartitionCount(integer $PartitionCount) Set Number of partitions
 * @method string getMachineWanIp() Obtain Host public IP address
 * @method void setMachineWanIp(string $MachineWanIp) Set Host public IP address
 * @method integer getCpuSize() Obtain Number of CPU
 * @method void setCpuSize(integer $CpuSize) Set Number of CPU
 * @method string getCpuLoad() Obtain CPU load
 * @method void setCpuLoad(string $CpuLoad) Set CPU load
 * @method integer getProtectLevel() Obtain Protection Level. 0 Basic Edition; 1 Professional Edition; 2 Premium Edition; 3 General Discount Edition
 * @method void setProtectLevel(integer $ProtectLevel) Set Protection Level. 0 Basic Edition; 1 Professional Edition; 2 Premium Edition; 3 General Discount Edition
 * @method string getRiskStatus() Obtain Risk status: UNKNOW - unknown; RISK - risky; SAFT - Safe
 * @method void setRiskStatus(string $RiskStatus) Set Risk status: UNKNOW - unknown; RISK - risky; SAFT - Safe
 * @method integer getProtectDays() Obtain Days protected
 * @method void setProtectDays(integer $ProtectDays) Set Days protected
 * @method string getBuyTime() Obtain Professional edition activation time
 * @method void setBuyTime(string $BuyTime) Set Professional edition activation time
 * @method string getEndTime() Obtain Professional edition expiration time
 * @method void setEndTime(string $EndTime) Set Professional edition expiration time
 * @method string getCoreVersion() Obtain Kernel version
 * @method void setCoreVersion(string $CoreVersion) Set Kernel version
 * @method string getOsType() Obtain linux/windows
 * @method void setOsType(string $OsType) Set linux/windows
 * @method string getAgentVersion() Obtain Agent version
 * @method void setAgentVersion(string $AgentVersion) Set Agent version
 * @method string getInstallTime() Obtain Installation time
 * @method void setInstallTime(string $InstallTime) Set Installation time
 * @method string getBootTime() Obtain System startup time
 * @method void setBootTime(string $BootTime) Set System startup time
 * @method string getLastLiveTime() Obtain Last online time
 * @method void setLastLiveTime(string $LastLiveTime) Set Last online time
 * @method string getProducer() Obtain Manufacturer
 * @method void setProducer(string $Producer) Set Manufacturer
 * @method string getSerialNumber() Obtain Serial number
 * @method void setSerialNumber(string $SerialNumber) Set Serial number
 * @method array getNetCards() Obtain Network interface

 * @method void setNetCards(array $NetCards) Set Network interface

 * @method array getDisks() Obtain Partition
 * @method void setDisks(array $Disks) Set Partition
 * @method integer getStatus() Obtain 0: online; 1: offline
 * @method void setStatus(integer $Status) Set 0: online; 1: offline
 * @method integer getProjectId() Obtain Business group ID
 * @method void setProjectId(integer $ProjectId) Set Business group ID
 * @method string getDeviceVersion() Obtain Server model
 * @method void setDeviceVersion(string $DeviceVersion) Set Server model
 * @method string getOfflineTime() Obtain Offline time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOfflineTime(string $OfflineTime) Set Offline time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Host ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Host ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCpuLoadVul() Obtain CpuLoadVul
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpuLoadVul(string $CpuLoadVul) Set CpuLoadVul
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFirstTime() Obtain Time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFirstTime(string $FirstTime) Set Time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetMachineDetail extends AbstractModel
{
    /**
     * @var string Server QUUID
     */
    public $Quuid;

    /**
     * @var string Server UUID
     */
    public $Uuid;

    /**
     * @var string Private IP address of server
     */
    public $MachineIp;

    /**
     * @var string Server name
     */
    public $MachineName;

    /**
     * @var string Operating system name
     */
    public $OsInfo;

    /**
     * @var string CPU information
     */
    public $Cpu;

    /**
     * @var integer Memory capacity, in GB
     */
    public $MemSize;

    /**
     * @var string Memory utilization, in percentage
     */
    public $MemLoad;

    /**
     * @var integer Hard disk capacity, in GB
     */
    public $DiskSize;

    /**
     * @var string Hard disk usage, in percentage
     */
    public $DiskLoad;

    /**
     * @var integer Number of partitions
     */
    public $PartitionCount;

    /**
     * @var string Host public IP address
     */
    public $MachineWanIp;

    /**
     * @var integer Number of CPU
     */
    public $CpuSize;

    /**
     * @var string CPU load
     */
    public $CpuLoad;

    /**
     * @var integer Protection Level. 0 Basic Edition; 1 Professional Edition; 2 Premium Edition; 3 General Discount Edition
     */
    public $ProtectLevel;

    /**
     * @var string Risk status: UNKNOW - unknown; RISK - risky; SAFT - Safe
     */
    public $RiskStatus;

    /**
     * @var integer Days protected
     */
    public $ProtectDays;

    /**
     * @var string Professional edition activation time
     */
    public $BuyTime;

    /**
     * @var string Professional edition expiration time
     */
    public $EndTime;

    /**
     * @var string Kernel version
     */
    public $CoreVersion;

    /**
     * @var string linux/windows
     */
    public $OsType;

    /**
     * @var string Agent version
     */
    public $AgentVersion;

    /**
     * @var string Installation time
     */
    public $InstallTime;

    /**
     * @var string System startup time
     */
    public $BootTime;

    /**
     * @var string Last online time
     */
    public $LastLiveTime;

    /**
     * @var string Manufacturer
     */
    public $Producer;

    /**
     * @var string Serial number
     */
    public $SerialNumber;

    /**
     * @var array Network interface

     */
    public $NetCards;

    /**
     * @var array Partition
     */
    public $Disks;

    /**
     * @var integer 0: online; 1: offline
     */
    public $Status;

    /**
     * @var integer Business group ID
     */
    public $ProjectId;

    /**
     * @var string Server model
     */
    public $DeviceVersion;

    /**
     * @var string Offline time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OfflineTime;

    /**
     * @var string Host ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @var string CpuLoadVul
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CpuLoadVul;

    /**
     * @var string Time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FirstTime;

    /**
     * @param string $Quuid Server QUUID
     * @param string $Uuid Server UUID
     * @param string $MachineIp Private IP address of server
     * @param string $MachineName Server name
     * @param string $OsInfo Operating system name
     * @param string $Cpu CPU information
     * @param integer $MemSize Memory capacity, in GB
     * @param string $MemLoad Memory utilization, in percentage
     * @param integer $DiskSize Hard disk capacity, in GB
     * @param string $DiskLoad Hard disk usage, in percentage
     * @param integer $PartitionCount Number of partitions
     * @param string $MachineWanIp Host public IP address
     * @param integer $CpuSize Number of CPU
     * @param string $CpuLoad CPU load
     * @param integer $ProtectLevel Protection Level. 0 Basic Edition; 1 Professional Edition; 2 Premium Edition; 3 General Discount Edition
     * @param string $RiskStatus Risk status: UNKNOW - unknown; RISK - risky; SAFT - Safe
     * @param integer $ProtectDays Days protected
     * @param string $BuyTime Professional edition activation time
     * @param string $EndTime Professional edition expiration time
     * @param string $CoreVersion Kernel version
     * @param string $OsType linux/windows
     * @param string $AgentVersion Agent version
     * @param string $InstallTime Installation time
     * @param string $BootTime System startup time
     * @param string $LastLiveTime Last online time
     * @param string $Producer Manufacturer
     * @param string $SerialNumber Serial number
     * @param array $NetCards Network interface

     * @param array $Disks Partition
     * @param integer $Status 0: online; 1: offline
     * @param integer $ProjectId Business group ID
     * @param string $DeviceVersion Server model
     * @param string $OfflineTime Offline time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Host ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param MachineExtraInfo $MachineExtraInfo Host Additional Information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CpuLoadVul CpuLoadVul
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FirstTime Time
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

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("OsInfo",$param) and $param["OsInfo"] !== null) {
            $this->OsInfo = $param["OsInfo"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("MemLoad",$param) and $param["MemLoad"] !== null) {
            $this->MemLoad = $param["MemLoad"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("DiskLoad",$param) and $param["DiskLoad"] !== null) {
            $this->DiskLoad = $param["DiskLoad"];
        }

        if (array_key_exists("PartitionCount",$param) and $param["PartitionCount"] !== null) {
            $this->PartitionCount = $param["PartitionCount"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("CpuSize",$param) and $param["CpuSize"] !== null) {
            $this->CpuSize = $param["CpuSize"];
        }

        if (array_key_exists("CpuLoad",$param) and $param["CpuLoad"] !== null) {
            $this->CpuLoad = $param["CpuLoad"];
        }

        if (array_key_exists("ProtectLevel",$param) and $param["ProtectLevel"] !== null) {
            $this->ProtectLevel = $param["ProtectLevel"];
        }

        if (array_key_exists("RiskStatus",$param) and $param["RiskStatus"] !== null) {
            $this->RiskStatus = $param["RiskStatus"];
        }

        if (array_key_exists("ProtectDays",$param) and $param["ProtectDays"] !== null) {
            $this->ProtectDays = $param["ProtectDays"];
        }

        if (array_key_exists("BuyTime",$param) and $param["BuyTime"] !== null) {
            $this->BuyTime = $param["BuyTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CoreVersion",$param) and $param["CoreVersion"] !== null) {
            $this->CoreVersion = $param["CoreVersion"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("InstallTime",$param) and $param["InstallTime"] !== null) {
            $this->InstallTime = $param["InstallTime"];
        }

        if (array_key_exists("BootTime",$param) and $param["BootTime"] !== null) {
            $this->BootTime = $param["BootTime"];
        }

        if (array_key_exists("LastLiveTime",$param) and $param["LastLiveTime"] !== null) {
            $this->LastLiveTime = $param["LastLiveTime"];
        }

        if (array_key_exists("Producer",$param) and $param["Producer"] !== null) {
            $this->Producer = $param["Producer"];
        }

        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("NetCards",$param) and $param["NetCards"] !== null) {
            $this->NetCards = [];
            foreach ($param["NetCards"] as $key => $value){
                $obj = new AssetNetworkCardInfo();
                $obj->deserialize($value);
                array_push($this->NetCards, $obj);
            }
        }

        if (array_key_exists("Disks",$param) and $param["Disks"] !== null) {
            $this->Disks = [];
            foreach ($param["Disks"] as $key => $value){
                $obj = new AssetDiskPartitionInfo();
                $obj->deserialize($value);
                array_push($this->Disks, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeviceVersion",$param) and $param["DeviceVersion"] !== null) {
            $this->DeviceVersion = $param["DeviceVersion"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("CpuLoadVul",$param) and $param["CpuLoadVul"] !== null) {
            $this->CpuLoadVul = $param["CpuLoadVul"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }
    }
}
