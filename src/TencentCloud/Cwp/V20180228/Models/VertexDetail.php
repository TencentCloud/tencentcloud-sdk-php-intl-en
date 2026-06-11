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
 * Detailed node information
 *
 * @method integer getType() Obtain Node type. 1: process, 2: network, 3: file, 4: SSH.
 * @method void setType(integer $Type) Set Node type. 1: process, 2: network, 3: file, 4: SSH.
 * @method string getTime() Obtain Time used by each node type, in the format of 2022-11-29 00:00:00.
 * @method void setTime(string $Time) Set Time used by each node type, in the format of 2022-11-29 00:00:00.
 * @method array getAlarmInfo() Obtain Alarm information.
 * @method void setAlarmInfo(array $AlarmInfo) Set Alarm information.
 * @method string getProcName() Obtain Process name. This parameter takes effect when this node is a process.
 * @method void setProcName(string $ProcName) Set Process name. This parameter takes effect when this node is a process.
 * @method string getCmdLine() Obtain Command line. This parameter takes effect when this node is a process.
 * @method void setCmdLine(string $CmdLine) Set Command line. This parameter takes effect when this node is a process.
 * @method string getPid() Obtain Process ID. This parameter takes effect when this node is a process.
 * @method void setPid(string $Pid) Set Process ID. This parameter takes effect when this node is a process.
 * @method string getFileMd5() Obtain File MD5. This parameter takes effect when this node is a file.
 * @method void setFileMd5(string $FileMd5) Set File MD5. This parameter takes effect when this node is a file.
 * @method string getFileContent() Obtain File write content. This parameter takes effect when this node is a file.
 * @method void setFileContent(string $FileContent) Set File write content. This parameter takes effect when this node is a file.
 * @method string getFilePath() Obtain File path. This parameter takes effect when this node is a file.
 * @method void setFilePath(string $FilePath) Set File path. This parameter takes effect when this node is a file.
 * @method string getFileCreateTime() Obtain File creation time. This parameter takes effect when this node is a file.
 * @method void setFileCreateTime(string $FileCreateTime) Set File creation time. This parameter takes effect when this node is a file.
 * @method string getAddress() Obtain Request destination address. This parameter takes effect when this node is a network.
 * @method void setAddress(string $Address) Set Request destination address. This parameter takes effect when this node is a network.
 * @method integer getDstPort() Obtain Target port. This parameter takes effect when this node is a network.
 * @method void setDstPort(integer $DstPort) Set Target port. This parameter takes effect when this node is a network.
 * @method string getSrcIP() Obtain Login source IP address. This parameter takes effect when this node is ssh.
 * @method void setSrcIP(string $SrcIP) Set Login source IP address. This parameter takes effect when this node is ssh.
 * @method string getUser() Obtain Login username and user group. This parameter takes effect when this node is ssh.
 * @method void setUser(string $User) Set Login username and user group. This parameter takes effect when this node is ssh.
 * @method string getVulName() Obtain Vulnerability name. This parameter takes effect when this node is a vulnerability.
 * @method void setVulName(string $VulName) Set Vulnerability name. This parameter takes effect when this node is a vulnerability.
 * @method string getVulTime() Obtain Vulnerability exploitation time. This parameter takes effect when this node is a vulnerability.
 * @method void setVulTime(string $VulTime) Set Vulnerability exploitation time. This parameter takes effect when this node is a vulnerability.
 * @method string getHttpContent() Obtain HTTP request content. This parameter takes effect when this node is a vulnerability.
 * @method void setHttpContent(string $HttpContent) Set HTTP request content. This parameter takes effect when this node is a vulnerability.
 * @method string getVulSrcIP() Obtain Source IP address of the vulnerability exploiter. This parameter takes effect when this node is a vulnerability.
 * @method void setVulSrcIP(string $VulSrcIP) Set Source IP address of the vulnerability exploiter. This parameter takes effect when this node is a vulnerability.
 * @method string getVertexId() Obtain Node ID.
 * @method void setVertexId(string $VertexId) Set Node ID.
 */
class VertexDetail extends AbstractModel
{
    /**
     * @var integer Node type. 1: process, 2: network, 3: file, 4: SSH.
     */
    public $Type;

    /**
     * @var string Time used by each node type, in the format of 2022-11-29 00:00:00.
     */
    public $Time;

    /**
     * @var array Alarm information.
     */
    public $AlarmInfo;

    /**
     * @var string Process name. This parameter takes effect when this node is a process.
     */
    public $ProcName;

    /**
     * @var string Command line. This parameter takes effect when this node is a process.
     */
    public $CmdLine;

    /**
     * @var string Process ID. This parameter takes effect when this node is a process.
     */
    public $Pid;

    /**
     * @var string File MD5. This parameter takes effect when this node is a file.
     */
    public $FileMd5;

    /**
     * @var string File write content. This parameter takes effect when this node is a file.
     */
    public $FileContent;

    /**
     * @var string File path. This parameter takes effect when this node is a file.
     */
    public $FilePath;

    /**
     * @var string File creation time. This parameter takes effect when this node is a file.
     */
    public $FileCreateTime;

    /**
     * @var string Request destination address. This parameter takes effect when this node is a network.
     */
    public $Address;

    /**
     * @var integer Target port. This parameter takes effect when this node is a network.
     */
    public $DstPort;

    /**
     * @var string Login source IP address. This parameter takes effect when this node is ssh.
     */
    public $SrcIP;

    /**
     * @var string Login username and user group. This parameter takes effect when this node is ssh.
     */
    public $User;

    /**
     * @var string Vulnerability name. This parameter takes effect when this node is a vulnerability.
     */
    public $VulName;

    /**
     * @var string Vulnerability exploitation time. This parameter takes effect when this node is a vulnerability.
     */
    public $VulTime;

    /**
     * @var string HTTP request content. This parameter takes effect when this node is a vulnerability.
     */
    public $HttpContent;

    /**
     * @var string Source IP address of the vulnerability exploiter. This parameter takes effect when this node is a vulnerability.
     */
    public $VulSrcIP;

    /**
     * @var string Node ID.
     */
    public $VertexId;

    /**
     * @param integer $Type Node type. 1: process, 2: network, 3: file, 4: SSH.
     * @param string $Time Time used by each node type, in the format of 2022-11-29 00:00:00.
     * @param array $AlarmInfo Alarm information.
     * @param string $ProcName Process name. This parameter takes effect when this node is a process.
     * @param string $CmdLine Command line. This parameter takes effect when this node is a process.
     * @param string $Pid Process ID. This parameter takes effect when this node is a process.
     * @param string $FileMd5 File MD5. This parameter takes effect when this node is a file.
     * @param string $FileContent File write content. This parameter takes effect when this node is a file.
     * @param string $FilePath File path. This parameter takes effect when this node is a file.
     * @param string $FileCreateTime File creation time. This parameter takes effect when this node is a file.
     * @param string $Address Request destination address. This parameter takes effect when this node is a network.
     * @param integer $DstPort Target port. This parameter takes effect when this node is a network.
     * @param string $SrcIP Login source IP address. This parameter takes effect when this node is ssh.
     * @param string $User Login username and user group. This parameter takes effect when this node is ssh.
     * @param string $VulName Vulnerability name. This parameter takes effect when this node is a vulnerability.
     * @param string $VulTime Vulnerability exploitation time. This parameter takes effect when this node is a vulnerability.
     * @param string $HttpContent HTTP request content. This parameter takes effect when this node is a vulnerability.
     * @param string $VulSrcIP Source IP address of the vulnerability exploiter. This parameter takes effect when this node is a vulnerability.
     * @param string $VertexId Node ID.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("AlarmInfo",$param) and $param["AlarmInfo"] !== null) {
            $this->AlarmInfo = [];
            foreach ($param["AlarmInfo"] as $key => $value){
                $obj = new AlarmInfo();
                $obj->deserialize($value);
                array_push($this->AlarmInfo, $obj);
            }
        }

        if (array_key_exists("ProcName",$param) and $param["ProcName"] !== null) {
            $this->ProcName = $param["ProcName"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileCreateTime",$param) and $param["FileCreateTime"] !== null) {
            $this->FileCreateTime = $param["FileCreateTime"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("SrcIP",$param) and $param["SrcIP"] !== null) {
            $this->SrcIP = $param["SrcIP"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulTime",$param) and $param["VulTime"] !== null) {
            $this->VulTime = $param["VulTime"];
        }

        if (array_key_exists("HttpContent",$param) and $param["HttpContent"] !== null) {
            $this->HttpContent = $param["HttpContent"];
        }

        if (array_key_exists("VulSrcIP",$param) and $param["VulSrcIP"] !== null) {
            $this->VulSrcIP = $param["VulSrcIP"];
        }

        if (array_key_exists("VertexId",$param) and $param["VertexId"] !== null) {
            $this->VertexId = $param["VertexId"];
        }
    }
}
