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
 * Data of listed hosts on the large screen
 *
 * @method string getMachineName() Obtain Host name.
 * @method void setMachineName(string $MachineName) Set Host name.
 * @method string getMachineOs() Obtain Host System.
 * @method void setMachineOs(string $MachineOs) Set Host System.
 * @method string getUuid() Obtain Yunjing client UUID. If the client is offline for a long time, an empty string is returned.
 * @method void setUuid(string $Uuid) Set Yunjing client UUID. If the client is offline for a long time, an empty string is returned.
 * @method integer getMachineStatus() Obtain Status of a host on the large screen. 0: agent not installed; 1: offline; 2: offline - risky; 3: offline - critical;
4: device installed - normal; 5: device installed - normal and of either Pro Edition or Ultimate Edition; 6: device installed - risky (network attack events > 0);
7: device installed - risky (network attack events > 0) and of either Pro Edition or Ultimate Edition; 8: device installed - critical (intrusion detection events > 0);
9: device installed - critical (intrusion detection events > 0) and of either Pro Edition or Ultimate Edition
 * @method void setMachineStatus(integer $MachineStatus) Set Status of a host on the large screen. 0: agent not installed; 1: offline; 2: offline - risky; 3: offline - critical;
4: device installed - normal; 5: device installed - normal and of either Pro Edition or Ultimate Edition; 6: device installed - risky (network attack events > 0);
7: device installed - risky (network attack events > 0) and of either Pro Edition or Ultimate Edition; 8: device installed - critical (intrusion detection events > 0);
9: device installed - critical (intrusion detection events > 0) and of either Pro Edition or Ultimate Edition
 * @method string getQuuid() Obtain CVM or BM Machine Unique UUID.
 * @method void setQuuid(string $Quuid) Set CVM or BM Machine Unique UUID.
 * @method integer getVulNum() Obtain Number of vulnerabilities
 * @method void setVulNum(integer $VulNum) Set Number of vulnerabilities
 * @method string getMachineIp() Obtain Host IP.
 * @method void setMachineIp(string $MachineIp) Set Host IP.
 * @method string getMachineWanIp() Obtain Public IP address of the host
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP address of the host
 * @method integer getBaselineNum() Obtain Number of baseline risks
 * @method void setBaselineNum(integer $BaselineNum) Set Number of baseline risks
 * @method integer getCyberAttackNum() Obtain Number of network risks
 * @method void setCyberAttackNum(integer $CyberAttackNum) Set Number of network risks
 * @method string getSecurityStatus() Obtain Risk status
<li>SAFE: Safe</li>
<li>RISK: Risk</li>
<li>UNKNOWN: Unknown</li>
 * @method void setSecurityStatus(string $SecurityStatus) Set Risk status
<li>SAFE: Safe</li>
<li>RISK: Risk</li>
<li>UNKNOWN: Unknown</li>
 * @method integer getInvasionNum() Obtain Number of intrusion events
 * @method void setInvasionNum(integer $InvasionNum) Set Number of intrusion events
 * @method string getMachineType() Obtain Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
 * @method void setMachineType(string $MachineType) Set Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
 * @method string getCpuLoad() Obtain CPU load status
 * @method void setCpuLoad(string $CpuLoad) Set CPU load status
 * @method float getCpuSize() Obtain Number of CPU cores
 * @method void setCpuSize(float $CpuSize) Set Number of CPU cores
 * @method string getDiskLoad() Obtain Hard disk utilization (%)
 * @method void setDiskLoad(string $DiskLoad) Set Hard disk utilization (%)
 * @method float getDiskSize() Obtain Hard disk capacity (GB)
 * @method void setDiskSize(float $DiskSize) Set Hard disk capacity (GB)
 * @method string getMemLoad() Obtain Memory utilization (%)
 * @method void setMemLoad(string $MemLoad) Set Memory utilization (%)
 * @method float getMemSize() Obtain Memory capacity (GB)
 * @method void setMemSize(float $MemSize) Set Memory capacity (GB)
 * @method string getCoreVersion() Obtain Kernel version
 * @method void setCoreVersion(string $CoreVersion) Set Kernel version
 * @method MachineExtraInfo getMachineExtraInfo() Obtain Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMachineExtraInfo(MachineExtraInfo $MachineExtraInfo) Set Additional information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ScreenMachine extends AbstractModel
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
     * @var integer Status of a host on the large screen. 0: agent not installed; 1: offline; 2: offline - risky; 3: offline - critical;
4: device installed - normal; 5: device installed - normal and of either Pro Edition or Ultimate Edition; 6: device installed - risky (network attack events > 0);
7: device installed - risky (network attack events > 0) and of either Pro Edition or Ultimate Edition; 8: device installed - critical (intrusion detection events > 0);
9: device installed - critical (intrusion detection events > 0) and of either Pro Edition or Ultimate Edition
     */
    public $MachineStatus;

    /**
     * @var string CVM or BM Machine Unique UUID.
     */
    public $Quuid;

    /**
     * @var integer Number of vulnerabilities
     */
    public $VulNum;

    /**
     * @var string Host IP.
     */
    public $MachineIp;

    /**
     * @var string Public IP address of the host
     */
    public $MachineWanIp;

    /**
     * @var integer Number of baseline risks
     */
    public $BaselineNum;

    /**
     * @var integer Number of network risks
     */
    public $CyberAttackNum;

    /**
     * @var string Risk status
<li>SAFE: Safe</li>
<li>RISK: Risk</li>
<li>UNKNOWN: Unknown</li>
     */
    public $SecurityStatus;

    /**
     * @var integer Number of intrusion events
     */
    public $InvasionNum;

    /**
     * @var string Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
     */
    public $MachineType;

    /**
     * @var string CPU load status
     */
    public $CpuLoad;

    /**
     * @var float Number of CPU cores
     */
    public $CpuSize;

    /**
     * @var string Hard disk utilization (%)
     */
    public $DiskLoad;

    /**
     * @var float Hard disk capacity (GB)
     */
    public $DiskSize;

    /**
     * @var string Memory utilization (%)
     */
    public $MemLoad;

    /**
     * @var float Memory capacity (GB)
     */
    public $MemSize;

    /**
     * @var string Kernel version
     */
    public $CoreVersion;

    /**
     * @var MachineExtraInfo Additional information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MachineExtraInfo;

    /**
     * @param string $MachineName Host name.
     * @param string $MachineOs Host System.
     * @param string $Uuid Yunjing client UUID. If the client is offline for a long time, an empty string is returned.
     * @param integer $MachineStatus Status of a host on the large screen. 0: agent not installed; 1: offline; 2: offline - risky; 3: offline - critical;
4: device installed - normal; 5: device installed - normal and of either Pro Edition or Ultimate Edition; 6: device installed - risky (network attack events > 0);
7: device installed - risky (network attack events > 0) and of either Pro Edition or Ultimate Edition; 8: device installed - critical (intrusion detection events > 0);
9: device installed - critical (intrusion detection events > 0) and of either Pro Edition or Ultimate Edition
     * @param string $Quuid CVM or BM Machine Unique UUID.
     * @param integer $VulNum Number of vulnerabilities
     * @param string $MachineIp Host IP.
     * @param string $MachineWanIp Public IP address of the host
     * @param integer $BaselineNum Number of baseline risks
     * @param integer $CyberAttackNum Number of network risks
     * @param string $SecurityStatus Risk status
<li>SAFE: Safe</li>
<li>RISK: Risk</li>
<li>UNKNOWN: Unknown</li>
     * @param integer $InvasionNum Number of intrusion events
     * @param string $MachineType Machine Zone Type. CVM - Cloud Virtual Machine; BM: Bare Metal; ECM: Edge Computing Machine; LH: Lightweight Application Server; Other: Hybrid Cloud Zone
     * @param string $CpuLoad CPU load status
     * @param float $CpuSize Number of CPU cores
     * @param string $DiskLoad Hard disk utilization (%)
     * @param float $DiskSize Hard disk capacity (GB)
     * @param string $MemLoad Memory utilization (%)
     * @param float $MemSize Memory capacity (GB)
     * @param string $CoreVersion Kernel version
     * @param MachineExtraInfo $MachineExtraInfo Additional information
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

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("VulNum",$param) and $param["VulNum"] !== null) {
            $this->VulNum = $param["VulNum"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("BaselineNum",$param) and $param["BaselineNum"] !== null) {
            $this->BaselineNum = $param["BaselineNum"];
        }

        if (array_key_exists("CyberAttackNum",$param) and $param["CyberAttackNum"] !== null) {
            $this->CyberAttackNum = $param["CyberAttackNum"];
        }

        if (array_key_exists("SecurityStatus",$param) and $param["SecurityStatus"] !== null) {
            $this->SecurityStatus = $param["SecurityStatus"];
        }

        if (array_key_exists("InvasionNum",$param) and $param["InvasionNum"] !== null) {
            $this->InvasionNum = $param["InvasionNum"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("CpuLoad",$param) and $param["CpuLoad"] !== null) {
            $this->CpuLoad = $param["CpuLoad"];
        }

        if (array_key_exists("CpuSize",$param) and $param["CpuSize"] !== null) {
            $this->CpuSize = $param["CpuSize"];
        }

        if (array_key_exists("DiskLoad",$param) and $param["DiskLoad"] !== null) {
            $this->DiskLoad = $param["DiskLoad"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("MemLoad",$param) and $param["MemLoad"] !== null) {
            $this->MemLoad = $param["MemLoad"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("CoreVersion",$param) and $param["CoreVersion"] !== null) {
            $this->CoreVersion = $param["CoreVersion"];
        }

        if (array_key_exists("MachineExtraInfo",$param) and $param["MachineExtraInfo"] !== null) {
            $this->MachineExtraInfo = new MachineExtraInfo();
            $this->MachineExtraInfo->deserialize($param["MachineExtraInfo"]);
        }
    }
}
