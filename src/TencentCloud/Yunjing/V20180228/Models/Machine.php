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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Server list
 *
 * @method string getMachineName() Obtain Server name.
 * @method void setMachineName(string $MachineName) Set Server name.
 * @method string getMachineOs() Obtain Server OS.
 * @method void setMachineOs(string $MachineOs) Set Server OS.
 * @method string getMachineStatus() Obtain Server status.
<li>OFFLINE: offline</li>
<li>ONLINE: online</li>
<li>MACHINE_STOPPED: shut down</li>
 * @method void setMachineStatus(string $MachineStatus) Set Server status.
<li>OFFLINE: offline</li>
<li>ONLINE: online</li>
<li>MACHINE_STOPPED: shut down</li>
 * @method string getUuid() Obtain CWP agent `Uuid`. If the agent is offline for a long time, a null character will be returned.
 * @method void setUuid(string $Uuid) Set CWP agent `Uuid`. If the agent is offline for a long time, a null character will be returned.
 * @method string getQuuid() Obtain CVM or BM instance `Uuid`.
 * @method void setQuuid(string $Quuid) Set CVM or BM instance `Uuid`.
 * @method integer getVulNum() Obtain Number of vulnerabilities.
 * @method void setVulNum(integer $VulNum) Set Number of vulnerabilities.
 * @method string getMachineIp() Obtain Server IP.
 * @method void setMachineIp(string $MachineIp) Set Server IP.
 * @method boolean getIsProVersion() Obtain Whether the server has enabled CWP Pro.
<li>true: yes</li>
<li>false: no</li>
 * @method void setIsProVersion(boolean $IsProVersion) Set Whether the server has enabled CWP Pro.
<li>true: yes</li>
<li>false: no</li>
 * @method string getMachineWanIp() Obtain Public IP of server.
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP of server.
 * @method string getPayMode() Obtain Server status.
<li>POSTPAY: post-paid, i.e., pay-as-you-go </li>
 * @method void setPayMode(string $PayMode) Set Server status.
<li>POSTPAY: post-paid, i.e., pay-as-you-go </li>
 * @method integer getMalwareNum() Obtain Number of trojans.
 * @method void setMalwareNum(integer $MalwareNum) Set Number of trojans.
 * @method array getTag() Obtain Tag information
 * @method void setTag(array $Tag) Set Tag information
 */
class Machine extends AbstractModel
{
    /**
     * @var string Server name.
     */
    public $MachineName;

    /**
     * @var string Server OS.
     */
    public $MachineOs;

    /**
     * @var string Server status.
<li>OFFLINE: offline</li>
<li>ONLINE: online</li>
<li>MACHINE_STOPPED: shut down</li>
     */
    public $MachineStatus;

    /**
     * @var string CWP agent `Uuid`. If the agent is offline for a long time, a null character will be returned.
     */
    public $Uuid;

    /**
     * @var string CVM or BM instance `Uuid`.
     */
    public $Quuid;

    /**
     * @var integer Number of vulnerabilities.
     */
    public $VulNum;

    /**
     * @var string Server IP.
     */
    public $MachineIp;

    /**
     * @var boolean Whether the server has enabled CWP Pro.
<li>true: yes</li>
<li>false: no</li>
     */
    public $IsProVersion;

    /**
     * @var string Public IP of server.
     */
    public $MachineWanIp;

    /**
     * @var string Server status.
<li>POSTPAY: post-paid, i.e., pay-as-you-go </li>
     */
    public $PayMode;

    /**
     * @var integer Number of trojans.
     */
    public $MalwareNum;

    /**
     * @var array Tag information
     */
    public $Tag;

    /**
     * @param string $MachineName Server name.
     * @param string $MachineOs Server OS.
     * @param string $MachineStatus Server status.
<li>OFFLINE: offline</li>
<li>ONLINE: online</li>
<li>MACHINE_STOPPED: shut down</li>
     * @param string $Uuid CWP agent `Uuid`. If the agent is offline for a long time, a null character will be returned.
     * @param string $Quuid CVM or BM instance `Uuid`.
     * @param integer $VulNum Number of vulnerabilities.
     * @param string $MachineIp Server IP.
     * @param boolean $IsProVersion Whether the server has enabled CWP Pro.
<li>true: yes</li>
<li>false: no</li>
     * @param string $MachineWanIp Public IP of server.
     * @param string $PayMode Server status.
<li>POSTPAY: post-paid, i.e., pay-as-you-go </li>
     * @param integer $MalwareNum Number of trojans.
     * @param array $Tag Tag information
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

        if (array_key_exists("MachineStatus",$param) and $param["MachineStatus"] !== null) {
            $this->MachineStatus = $param["MachineStatus"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
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

        if (array_key_exists("IsProVersion",$param) and $param["IsProVersion"] !== null) {
            $this->IsProVersion = $param["IsProVersion"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("MalwareNum",$param) and $param["MalwareNum"] !== null) {
            $this->MalwareNum = $param["MalwareNum"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }
    }
}
