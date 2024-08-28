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
 * Prevention of Ransomware, Bait and Tamper Events
 *
 * @method integer getId() Obtain Event ID
 * @method void setId(integer $Id) Set Event ID
 * @method string getUuid() Obtain Host UUID
 * @method void setUuid(string $Uuid) Set Host UUID
 * @method string getQuuid() Obtain cvm uuid
 * @method void setQuuid(string $Quuid) Set cvm uuid
 * @method string getHostName() Obtain Host name
 * @method void setHostName(string $HostName) Set Host name
 * @method integer getStatus() Obtain Event Status: 0-Pending, 1-Processed, 2-Trusted, 3-In Process, 4-Backup Resumed
 * @method void setStatus(integer $Status) Set Event Status: 0-Pending, 1-Processed, 2-Trusted, 3-In Process, 4-Backup Resumed
 * @method string getBaitFilePath() Obtain Tampered File Path
 * @method void setBaitFilePath(string $BaitFilePath) Set Tampered File Path
 * @method string getFilePath() Obtain Malicious File Path
 * @method void setFilePath(string $FilePath) Set Malicious File Path
 * @method integer getPid() Obtain Malicious Process ID
 * @method void setPid(integer $Pid) Set Malicious Process ID
 * @method string getPidParam() Obtain Malicious Process Parameters
 * @method void setPidParam(string $PidParam) Set Malicious Process Parameters
 * @method integer getFileSize() Obtain Malicious File Size
 * @method void setFileSize(integer $FileSize) Set Malicious File Size
 * @method string getFileMd5() Obtain Malicious File MD5
 * @method void setFileMd5(string $FileMd5) Set Malicious File MD5
 * @method integer getType() Obtain Event Type: 0 Encrypted Ransom, 1 File Tampering
 * @method void setType(integer $Type) Set Event Type: 0 Encrypted Ransom, 1 File Tampering
 * @method string getCreateTime() Obtain Event Sending Time
 * @method void setCreateTime(string $CreateTime) Set Event Sending Time
 * @method string getInstanceId() Obtain CVM Instance ID
 * @method void setInstanceId(string $InstanceId) Set CVM Instance ID
 * @method string getModifyTime() Obtain Event Modification Event
 * @method void setModifyTime(string $ModifyTime) Set Event Modification Event
 * @method integer getStrategyId() Obtain Policy ID
 * @method void setStrategyId(integer $StrategyId) Set Policy ID
 * @method string getStrategyName() Obtain Policy name
 * @method void setStrategyName(string $StrategyName) Set Policy name
 * @method string getHostIp() Obtain Host public IP address
 * @method void setHostIp(string $HostIp) Set Host public IP address
 * @method string getWanIp() Obtain Host Intranet IP
 * @method void setWanIp(string $WanIp) Set Host Intranet IP
 * @method string getPsTree() Obtain Process Tree Base64 Json
 * @method void setPsTree(string $PsTree) Set Process Tree Base64 Json
 * @method string getProcessStartTime() Obtain Process startup time
 * @method void setProcessStartTime(string $ProcessStartTime) Set Process startup time
 * @method integer getSnapshotNum() Obtain Number of Snapshot Backups Owned by the Host
 * @method void setSnapshotNum(integer $SnapshotNum) Set Number of Snapshot Backups Owned by the Host
 */
class RansomDefenseEvent extends AbstractModel
{
    /**
     * @var integer Event ID
     */
    public $Id;

    /**
     * @var string Host UUID
     */
    public $Uuid;

    /**
     * @var string cvm uuid
     */
    public $Quuid;

    /**
     * @var string Host name
     */
    public $HostName;

    /**
     * @var integer Event Status: 0-Pending, 1-Processed, 2-Trusted, 3-In Process, 4-Backup Resumed
     */
    public $Status;

    /**
     * @var string Tampered File Path
     */
    public $BaitFilePath;

    /**
     * @var string Malicious File Path
     */
    public $FilePath;

    /**
     * @var integer Malicious Process ID
     */
    public $Pid;

    /**
     * @var string Malicious Process Parameters
     */
    public $PidParam;

    /**
     * @var integer Malicious File Size
     */
    public $FileSize;

    /**
     * @var string Malicious File MD5
     */
    public $FileMd5;

    /**
     * @var integer Event Type: 0 Encrypted Ransom, 1 File Tampering
     */
    public $Type;

    /**
     * @var string Event Sending Time
     */
    public $CreateTime;

    /**
     * @var string CVM Instance ID
     */
    public $InstanceId;

    /**
     * @var string Event Modification Event
     */
    public $ModifyTime;

    /**
     * @var integer Policy ID
     */
    public $StrategyId;

    /**
     * @var string Policy name
     */
    public $StrategyName;

    /**
     * @var string Host public IP address
     */
    public $HostIp;

    /**
     * @var string Host Intranet IP
     */
    public $WanIp;

    /**
     * @var string Process Tree Base64 Json
     */
    public $PsTree;

    /**
     * @var string Process startup time
     */
    public $ProcessStartTime;

    /**
     * @var integer Number of Snapshot Backups Owned by the Host
     */
    public $SnapshotNum;

    /**
     * @param integer $Id Event ID
     * @param string $Uuid Host UUID
     * @param string $Quuid cvm uuid
     * @param string $HostName Host name
     * @param integer $Status Event Status: 0-Pending, 1-Processed, 2-Trusted, 3-In Process, 4-Backup Resumed
     * @param string $BaitFilePath Tampered File Path
     * @param string $FilePath Malicious File Path
     * @param integer $Pid Malicious Process ID
     * @param string $PidParam Malicious Process Parameters
     * @param integer $FileSize Malicious File Size
     * @param string $FileMd5 Malicious File MD5
     * @param integer $Type Event Type: 0 Encrypted Ransom, 1 File Tampering
     * @param string $CreateTime Event Sending Time
     * @param string $InstanceId CVM Instance ID
     * @param string $ModifyTime Event Modification Event
     * @param integer $StrategyId Policy ID
     * @param string $StrategyName Policy name
     * @param string $HostIp Host public IP address
     * @param string $WanIp Host Intranet IP
     * @param string $PsTree Process Tree Base64 Json
     * @param string $ProcessStartTime Process startup time
     * @param integer $SnapshotNum Number of Snapshot Backups Owned by the Host
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BaitFilePath",$param) and $param["BaitFilePath"] !== null) {
            $this->BaitFilePath = $param["BaitFilePath"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("PidParam",$param) and $param["PidParam"] !== null) {
            $this->PidParam = $param["PidParam"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("WanIp",$param) and $param["WanIp"] !== null) {
            $this->WanIp = $param["WanIp"];
        }

        if (array_key_exists("PsTree",$param) and $param["PsTree"] !== null) {
            $this->PsTree = $param["PsTree"];
        }

        if (array_key_exists("ProcessStartTime",$param) and $param["ProcessStartTime"] !== null) {
            $this->ProcessStartTime = $param["ProcessStartTime"];
        }

        if (array_key_exists("SnapshotNum",$param) and $param["SnapshotNum"] !== null) {
            $this->SnapshotNum = $param["SnapshotNum"];
        }
    }
}
