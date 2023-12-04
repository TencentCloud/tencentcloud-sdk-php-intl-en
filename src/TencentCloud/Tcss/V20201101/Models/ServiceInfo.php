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
 * Information list of TCSS
 *
 * @method string getServiceID() Obtain Service ID
 * @method void setServiceID(string $ServiceID) Set Service ID
 * @method string getHostID() Obtain Server ID
 * @method void setHostID(string $HostID) Set Server ID
 * @method string getHostIP() Obtain Server IP
 * @method void setHostIP(string $HostIP) Set Server IP
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method string getType() Obtain Service name, such as `nginx` and `redis`
 * @method void setType(string $Type) Set Service name, such as `nginx` and `redis`
 * @method string getVersion() Obtain Version
 * @method void setVersion(string $Version) Set Version
 * @method string getRunAs() Obtain Account
 * @method void setRunAs(string $RunAs) Set Account
 * @method array getListen() Obtain Listened port
 * @method void setListen(array $Listen) Set Listened port
 * @method string getConfig() Obtain Configuration
 * @method void setConfig(string $Config) Set Configuration
 * @method integer getProcessCnt() Obtain Number of associated processes
 * @method void setProcessCnt(integer $ProcessCnt) Set Number of associated processes
 * @method string getAccessLog() Obtain Access log
 * @method void setAccessLog(string $AccessLog) Set Access log
 * @method string getErrorLog() Obtain Error log
 * @method void setErrorLog(string $ErrorLog) Set Error log
 * @method string getDataPath() Obtain Data directory
 * @method void setDataPath(string $DataPath) Set Data directory
 * @method string getWebRoot() Obtain Web directory
 * @method void setWebRoot(string $WebRoot) Set Web directory
 * @method array getPids() Obtain ID of the associated process
 * @method void setPids(array $Pids) Set ID of the associated process
 * @method string getMainType() Obtain Service type. Valid values: `app`, `web`, `db`.
 * @method void setMainType(string $MainType) Set Service type. Valid values: `app`, `web`, `db`.
 * @method string getExe() Obtain Execution file
 * @method void setExe(string $Exe) Set Execution file
 * @method string getParameter() Obtain Service command line parameter
 * @method void setParameter(string $Parameter) Set Service command line parameter
 * @method string getContainerId() Obtain Container ID
 * @method void setContainerId(string $ContainerId) Set Container ID
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
class ServiceInfo extends AbstractModel
{
    /**
     * @var string Service ID
     */
    public $ServiceID;

    /**
     * @var string Server ID
     */
    public $HostID;

    /**
     * @var string Server IP
     */
    public $HostIP;

    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var string Service name, such as `nginx` and `redis`
     */
    public $Type;

    /**
     * @var string Version
     */
    public $Version;

    /**
     * @var string Account
     */
    public $RunAs;

    /**
     * @var array Listened port
     */
    public $Listen;

    /**
     * @var string Configuration
     */
    public $Config;

    /**
     * @var integer Number of associated processes
     */
    public $ProcessCnt;

    /**
     * @var string Access log
     */
    public $AccessLog;

    /**
     * @var string Error log
     */
    public $ErrorLog;

    /**
     * @var string Data directory
     */
    public $DataPath;

    /**
     * @var string Web directory
     */
    public $WebRoot;

    /**
     * @var array ID of the associated process
     */
    public $Pids;

    /**
     * @var string Service type. Valid values: `app`, `web`, `db`.
     */
    public $MainType;

    /**
     * @var string Execution file
     */
    public $Exe;

    /**
     * @var string Service command line parameter
     */
    public $Parameter;

    /**
     * @var string Container ID
     */
    public $ContainerId;

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
     * @param string $ServiceID Service ID
     * @param string $HostID Server ID
     * @param string $HostIP Server IP
     * @param string $ContainerName Container name
     * @param string $Type Service name, such as `nginx` and `redis`
     * @param string $Version Version
     * @param string $RunAs Account
     * @param array $Listen Listened port
     * @param string $Config Configuration
     * @param integer $ProcessCnt Number of associated processes
     * @param string $AccessLog Access log
     * @param string $ErrorLog Error log
     * @param string $DataPath Data directory
     * @param string $WebRoot Web directory
     * @param array $Pids ID of the associated process
     * @param string $MainType Service type. Valid values: `app`, `web`, `db`.
     * @param string $Exe Execution file
     * @param string $Parameter Service command line parameter
     * @param string $ContainerId Container ID
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
        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("HostID",$param) and $param["HostID"] !== null) {
            $this->HostID = $param["HostID"];
        }

        if (array_key_exists("HostIP",$param) and $param["HostIP"] !== null) {
            $this->HostIP = $param["HostIP"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("RunAs",$param) and $param["RunAs"] !== null) {
            $this->RunAs = $param["RunAs"];
        }

        if (array_key_exists("Listen",$param) and $param["Listen"] !== null) {
            $this->Listen = $param["Listen"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("ProcessCnt",$param) and $param["ProcessCnt"] !== null) {
            $this->ProcessCnt = $param["ProcessCnt"];
        }

        if (array_key_exists("AccessLog",$param) and $param["AccessLog"] !== null) {
            $this->AccessLog = $param["AccessLog"];
        }

        if (array_key_exists("ErrorLog",$param) and $param["ErrorLog"] !== null) {
            $this->ErrorLog = $param["ErrorLog"];
        }

        if (array_key_exists("DataPath",$param) and $param["DataPath"] !== null) {
            $this->DataPath = $param["DataPath"];
        }

        if (array_key_exists("WebRoot",$param) and $param["WebRoot"] !== null) {
            $this->WebRoot = $param["WebRoot"];
        }

        if (array_key_exists("Pids",$param) and $param["Pids"] !== null) {
            $this->Pids = $param["Pids"];
        }

        if (array_key_exists("MainType",$param) and $param["MainType"] !== null) {
            $this->MainType = $param["MainType"];
        }

        if (array_key_exists("Exe",$param) and $param["Exe"] !== null) {
            $this->Exe = $param["Exe"];
        }

        if (array_key_exists("Parameter",$param) and $param["Parameter"] !== null) {
            $this->Parameter = $param["Parameter"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
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
