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
 * @method string getDiskLoad() Obtain Hard disk utilization, in percentage
 * @method void setDiskLoad(string $DiskLoad) Set Hard disk utilization, in percentage
 * @method integer getPartitionCount() Obtain Number of partitions
 * @method void setPartitionCount(integer $PartitionCount) Set Number of partitions
 * @method string getMachineWanIp() Obtain Host public IP address
 * @method void setMachineWanIp(string $MachineWanIp) Set Host public IP address
 * @method integer getProjectId() Obtain Business group ID
 * @method void setProjectId(integer $ProjectId) Set Business group ID
 * @method integer getCpuSize() Obtain CPU count
 * @method void setCpuSize(integer $CpuSize) Set CPU count
 * @method string getCpuLoad() Obtain CPU utilization, in percentage
 * @method void setCpuLoad(string $CpuLoad) Set CPU utilization, in percentage
 * @method array getTag() Obtain Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTag(array $Tag) Set Tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Data update time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsNew() Obtain Whether it is newly added [0 - no;1 - yes]
 * @method void setIsNew(integer $IsNew) Set Whether it is newly added [0 - no;1 - yes]
 * @method string getFirstTime() Obtain First collection time
 * @method void setFirstTime(string $FirstTime) Set First collection time
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCpuLoadNum() Obtain CPU load readings (only valid for Linux systems)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpuLoadNum(string $CpuLoadNum) Set CPU load readings (only valid for Linux systems)
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AssetMachineBaseInfo extends AbstractModel
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
     * @var string Hard disk utilization, in percentage
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
     * @var integer Business group ID
     */
    public $ProjectId;

    /**
     * @var integer CPU count
     */
    public $CpuSize;

    /**
     * @var string CPU utilization, in percentage
     */
    public $CpuLoad;

    /**
     * @var array Tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tag;

    /**
     * @var string Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var integer Whether it is newly added [0 - no;1 - yes]
     */
    public $IsNew;

    /**
     * @var string First collection time
     */
    public $FirstTime;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @var string CPU load readings (only valid for Linux systems)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CpuLoadNum;

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
     * @param string $DiskLoad Hard disk utilization, in percentage
     * @param integer $PartitionCount Number of partitions
     * @param string $MachineWanIp Host public IP address
     * @param integer $ProjectId Business group ID
     * @param integer $CpuSize CPU count
     * @param string $CpuLoad CPU utilization, in percentage
     * @param array $Tag Tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Data update time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsNew Whether it is newly added [0 - no;1 - yes]
     * @param string $FirstTime First collection time
     * @param MachineExtraInfo $MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CpuLoadNum CPU load readings (only valid for Linux systems)
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CpuSize",$param) and $param["CpuSize"] !== null) {
            $this->CpuSize = $param["CpuSize"];
        }

        if (array_key_exists("CpuLoad",$param) and $param["CpuLoad"] !== null) {
            $this->CpuLoad = $param["CpuLoad"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }

        if (array_key_exists("CpuLoadNum",$param) and $param["CpuLoadNum"] !== null) {
            $this->CpuLoadNum = $param["CpuLoadNum"];
        }
    }
}
