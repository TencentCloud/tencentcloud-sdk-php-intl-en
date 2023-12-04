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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * List of processes
 *
 * @method string getStartTime() Obtain Process start time
 * @method void setStartTime(string $StartTime) Set Process start time
 * @method string getRunAs() Obtain Operator
 * @method void setRunAs(string $RunAs) Set Operator
 * @method string getCmdLine() Obtain Command line parameter
 * @method void setCmdLine(string $CmdLine) Set Command line parameter
 * @method string getExe() Obtain Exe path
 * @method void setExe(string $Exe) Set Exe path
 * @method integer getPID() Obtain Server PID
 * @method void setPID(integer $PID) Set Server PID
 * @method integer getContainerPID() Obtain Container PID
 * @method void setContainerPID(integer $ContainerPID) Set Container PID
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getHostID() Obtain Server ID
 * @method void setHostID(string $HostID) Set Server ID
 * @method string getHostIP() Obtain Server IP
 * @method void setHostIP(string $HostIP) Set Server IP
 * @method string getProcessName() Obtain Process name
 * @method void setProcessName(string $ProcessName) Set Process name
 * @method string getHostName() Obtain Server name
 * @method void setHostName(string $HostName) Set Server name
 * @method string getPublicIp() Obtain Public IP
 * @method void setPublicIp(string $PublicIp) Set Public IP
 * @method string getNodeID() Obtain Node ID
 * @method void setNodeID(string $NodeID) Set Node ID
 * @method string getPodIP() Obtain Pod IP
 * @method void setPodIP(string $PodIP) Set Pod IP
 * @method string getPodName() Obtain Pod name
 * @method void setPodName(string $PodName) Set Pod name
 * @method string getNodeType() Obtain Node type.
 * @method void setNodeType(string $NodeType) Set Node type.
 * @method string getNodeUniqueID() Obtain UID of the super node
 * @method void setNodeUniqueID(string $NodeUniqueID) Set UID of the super node
 */
class ProcessInfo extends AbstractModel
{
    /**
     * @var string Process start time
     */
    public $StartTime;

    /**
     * @var string Operator
     */
    public $RunAs;

    /**
     * @var string Command line parameter
     */
    public $CmdLine;

    /**
     * @var string Exe path
     */
    public $Exe;

    /**
     * @var integer Server PID
     */
    public $PID;

    /**
     * @var integer Container PID
     */
    public $ContainerPID;

    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var string Server ID
     */
    public $HostID;

    /**
     * @var string Server IP
     */
    public $HostIP;

    /**
     * @var string Process name
     */
    public $ProcessName;

    /**
     * @var string Server name
     */
    public $HostName;

    /**
     * @var string Public IP
     */
    public $PublicIp;

    /**
     * @var string Node ID
     */
    public $NodeID;

    /**
     * @var string Pod IP
     */
    public $PodIP;

    /**
     * @var string Pod name
     */
    public $PodName;

    /**
     * @var string Node type.
     */
    public $NodeType;

    /**
     * @var string UID of the super node
     */
    public $NodeUniqueID;

    /**
     * @param string $StartTime Process start time
     * @param string $RunAs Operator
     * @param string $CmdLine Command line parameter
     * @param string $Exe Exe path
     * @param integer $PID Server PID
     * @param integer $ContainerPID Container PID
     * @param string $ContainerName Container name
     * @param string $HostID Server ID
     * @param string $HostIP Server IP
     * @param string $ProcessName Process name
     * @param string $HostName Server name
     * @param string $PublicIp Public IP
     * @param string $NodeID Node ID
     * @param string $PodIP Pod IP
     * @param string $PodName Pod name
     * @param string $NodeType Node type.
     * @param string $NodeUniqueID UID of the super node
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("PID",$param) and $param["PID"] !== null) {
            $this->PID = $param["PID"];
        }

        if (array_key_exists("ContainerPID",$param) and $param["ContainerPID"] !== null) {
            $this->ContainerPID = $param["ContainerPID"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("NodeID",$param) and $param["NodeID"] !== null) {
            $this->NodeID = $param["NodeID"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("PodName",$param) and $param["PodName"] !== null) {
            $this->PodName = $param["PodName"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }
    }
}
