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
 * Detailed node information
 *
 * @method integer getType() Obtain Node type. process - 1; network - 2; file - 3; SSH - 4
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setType(integer $Type) Set Node type. process - 1; network - 2; file - 3; SSH - 4
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTime() Obtain Time used for each node type, which is in the format of 2022-11-29 00:00:00.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTime(string $Time) Set Time used for each node type, which is in the format of 2022-11-29 00:00:00.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAlarmInfo() Obtain Alarm information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlarmInfo(array $AlarmInfo) Set Alarm information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProcName() Obtain Process name, which is effective when the node type is process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProcName(string $ProcName) Set Process name, which is effective when the node type is process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCmdLine() Obtain Command line, which is effective when the node type is process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCmdLine(string $CmdLine) Set Command line, which is effective when the node type is process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPid() Obtain Process ID, which is effective when the node type is process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPid(string $Pid) Set Process ID, which is effective when the node type is process.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileMd5() Obtain File MD5, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileMd5(string $FileMd5) Set File MD5, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileContent() Obtain Content written to the file, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileContent(string $FileContent) Set Content written to the file, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFilePath() Obtain File path, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFilePath(string $FilePath) Set File path, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFileCreateTime() Obtain File creation time, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFileCreateTime(string $FileCreateTime) Set File creation time, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAddress() Obtain Request destination address, which is effective when the node type is network.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddress(string $Address) Set Request destination address, which is effective when the node type is network.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDstPort() Obtain Target port, which is effective when the node type is network.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDstPort(integer $DstPort) Set Target port, which is effective when the node type is network.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSrcIP() Obtain Log-in source IP, which is effective when the node type is SSH.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSrcIP(string $SrcIP) Set Log-in source IP, which is effective when the node type is SSH.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUser() Obtain Log-in username and user group, which is effective when the node type is SSH.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUser(string $User) Set Log-in username and user group, which is effective when the node type is SSH.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVulName() Obtain Vulnerability name, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulName(string $VulName) Set Vulnerability name, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVulTime() Obtain Vulnerability exploitation time, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulTime(string $VulTime) Set Vulnerability exploitation time, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getHttpContent() Obtain HTTP request content, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttpContent(string $HttpContent) Set HTTP request content, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVulSrcIP() Obtain Vulnerability exploiter source IP, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVulSrcIP(string $VulSrcIP) Set Vulnerability exploiter source IP, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVertexId() Obtain Node ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVertexId(string $VertexId) Set Node ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class VertexDetail extends AbstractModel
{
    /**
     * @var integer Node type. process - 1; network - 2; file - 3; SSH - 4
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Type;

    /**
     * @var string Time used for each node type, which is in the format of 2022-11-29 00:00:00.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Time;

    /**
     * @var array Alarm information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlarmInfo;

    /**
     * @var string Process name, which is effective when the node type is process.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProcName;

    /**
     * @var string Command line, which is effective when the node type is process.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CmdLine;

    /**
     * @var string Process ID, which is effective when the node type is process.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Pid;

    /**
     * @var string File MD5, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileMd5;

    /**
     * @var string Content written to the file, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileContent;

    /**
     * @var string File path, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FilePath;

    /**
     * @var string File creation time, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FileCreateTime;

    /**
     * @var string Request destination address, which is effective when the node type is network.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Address;

    /**
     * @var integer Target port, which is effective when the node type is network.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DstPort;

    /**
     * @var string Log-in source IP, which is effective when the node type is SSH.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SrcIP;

    /**
     * @var string Log-in username and user group, which is effective when the node type is SSH.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $User;

    /**
     * @var string Vulnerability name, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulName;

    /**
     * @var string Vulnerability exploitation time, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulTime;

    /**
     * @var string HTTP request content, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HttpContent;

    /**
     * @var string Vulnerability exploiter source IP, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VulSrcIP;

    /**
     * @var string Node ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VertexId;

    /**
     * @param integer $Type Node type. process - 1; network - 2; file - 3; SSH - 4
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Time Time used for each node type, which is in the format of 2022-11-29 00:00:00.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AlarmInfo Alarm information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProcName Process name, which is effective when the node type is process.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CmdLine Command line, which is effective when the node type is process.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Pid Process ID, which is effective when the node type is process.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileMd5 File MD5, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileContent Content written to the file, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FilePath File path, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FileCreateTime File creation time, which is effective when the node type is file.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Address Request destination address, which is effective when the node type is network.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DstPort Target port, which is effective when the node type is network.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SrcIP Log-in source IP, which is effective when the node type is SSH.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $User Log-in username and user group, which is effective when the node type is SSH.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VulName Vulnerability name, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VulTime Vulnerability exploitation time, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $HttpContent HTTP request content, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VulSrcIP Vulnerability exploiter source IP, which is effective when the node type is vulnerability.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VertexId Node ID
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
