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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vulnerability repair task details
 *
 * @method integer getId() Obtain <p>Detailed record ID</p>
 * @method void setId(integer $Id) Set <p>Detailed record ID</p>
 * @method integer getTaskId() Obtain <p>Associated repair task ID</p>
 * @method void setTaskId(integer $TaskId) Set <p>Associated repair task ID</p>
 * @method integer getVulId() Obtain <p>Vulnerability ID to be repaired</p>
 * @method void setVulId(integer $VulId) Set <p>Vulnerability ID to be repaired</p>
 * @method integer getKBId() Obtain <p>Patch ID of the fixed KB</p>
 * @method void setKBId(integer $KBId) Set <p>Patch ID of the fixed KB</p>
 * @method string getInstanceId() Obtain <p>Host instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Host instance ID.</p>
 * @method string getMachineName() Obtain <p>Host name.</p>
 * @method void setMachineName(string $MachineName) Set <p>Host name.</p>
 * @method string getMachineIp() Obtain <p>Host private IP address.</p>
 * @method void setMachineIp(string $MachineIp) Set <p>Host private IP address.</p>
 * @method string getVulName() Obtain <p>Vulnerability name</p>
 * @method void setVulName(string $VulName) Set <p>Vulnerability name</p>
 * @method integer getStatus() Obtain <p>Execution status<br>Enumeration value:<br>0: Initial state<br>1: Task issued<br>11: Client confirmed<br>2: Repair completed<br>3: Client offline<br>4: Timeout<br>5: Failure<br>6: Unsupported<br>9: Waiting for snapshot creation<br>10: Snapshot creation failed</p>
 * @method void setStatus(integer $Status) Set <p>Execution status<br>Enumeration value:<br>0: Initial state<br>1: Task issued<br>11: Client confirmed<br>2: Repair completed<br>3: Client offline<br>4: Timeout<br>5: Failure<br>6: Unsupported<br>9: Waiting for snapshot creation<br>10: Snapshot creation failed</p>
 * @method integer getFixStatus() Obtain <p>Fix result</p><p>Enumeration values:</p><ul><li>0: initial state</li><li>1: repair successful</li><li>2: fix failure</li><li>3: fix</li></ul>
 * @method void setFixStatus(integer $FixStatus) Set <p>Fix result</p><p>Enumeration values:</p><ul><li>0: initial state</li><li>1: repair successful</li><li>2: fix failure</li><li>3: fix</li></ul>
 * @method integer getSnapshotStatus() Obtain <p>Snapshot status<br>Enumeration value:<br>-1: No need to create a snapshot<br>0: Not started<br>1: In progress<br>2: Completed<br>3: Creation failed</p>
 * @method void setSnapshotStatus(integer $SnapshotStatus) Set <p>Snapshot status<br>Enumeration value:<br>-1: No need to create a snapshot<br>0: Not started<br>1: In progress<br>2: Completed<br>3: Creation failed</p>
 * @method string getExceptionMessage() Obtain <p>Exception prompt message</p>
 * @method void setExceptionMessage(string $ExceptionMessage) Set <p>Exception prompt message</p>
 * @method string getStartTime() Obtain <p>Repair startup time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method void setStartTime(string $StartTime) Set <p>Repair startup time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method string getEndTime() Obtain <p>Repair end time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method void setEndTime(string $EndTime) Set <p>Repair end time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method string getSnapshotCreateTime() Obtain <p>Snapshot creation time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method void setSnapshotCreateTime(string $SnapshotCreateTime) Set <p>Snapshot creation time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method string getSnapshotExpireTime() Obtain <p>Snapshot expiration time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method void setSnapshotExpireTime(string $SnapshotExpireTime) Set <p>Snapshot expiration time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
 * @method string getSnapshotFailReason() Obtain <p>Snapshot creation failure reason (available when SnapshotStatus=3)</p>
 * @method void setSnapshotFailReason(string $SnapshotFailReason) Set <p>Snapshot creation failure reason (available when SnapshotStatus=3)</p>
 */
class VulFixTaskDetailItem extends AbstractModel
{
    /**
     * @var integer <p>Detailed record ID</p>
     */
    public $Id;

    /**
     * @var integer <p>Associated repair task ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>Vulnerability ID to be repaired</p>
     */
    public $VulId;

    /**
     * @var integer <p>Patch ID of the fixed KB</p>
     */
    public $KBId;

    /**
     * @var string <p>Host instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Host name.</p>
     */
    public $MachineName;

    /**
     * @var string <p>Host private IP address.</p>
     */
    public $MachineIp;

    /**
     * @var string <p>Vulnerability name</p>
     */
    public $VulName;

    /**
     * @var integer <p>Execution status<br>Enumeration value:<br>0: Initial state<br>1: Task issued<br>11: Client confirmed<br>2: Repair completed<br>3: Client offline<br>4: Timeout<br>5: Failure<br>6: Unsupported<br>9: Waiting for snapshot creation<br>10: Snapshot creation failed</p>
     */
    public $Status;

    /**
     * @var integer <p>Fix result</p><p>Enumeration values:</p><ul><li>0: initial state</li><li>1: repair successful</li><li>2: fix failure</li><li>3: fix</li></ul>
     */
    public $FixStatus;

    /**
     * @var integer <p>Snapshot status<br>Enumeration value:<br>-1: No need to create a snapshot<br>0: Not started<br>1: In progress<br>2: Completed<br>3: Creation failed</p>
     */
    public $SnapshotStatus;

    /**
     * @var string <p>Exception prompt message</p>
     */
    public $ExceptionMessage;

    /**
     * @var string <p>Repair startup time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     */
    public $StartTime;

    /**
     * @var string <p>Repair end time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     */
    public $EndTime;

    /**
     * @var string <p>Snapshot creation time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     */
    public $SnapshotCreateTime;

    /**
     * @var string <p>Snapshot expiration time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     */
    public $SnapshotExpireTime;

    /**
     * @var string <p>Snapshot creation failure reason (available when SnapshotStatus=3)</p>
     */
    public $SnapshotFailReason;

    /**
     * @param integer $Id <p>Detailed record ID</p>
     * @param integer $TaskId <p>Associated repair task ID</p>
     * @param integer $VulId <p>Vulnerability ID to be repaired</p>
     * @param integer $KBId <p>Patch ID of the fixed KB</p>
     * @param string $InstanceId <p>Host instance ID.</p>
     * @param string $MachineName <p>Host name.</p>
     * @param string $MachineIp <p>Host private IP address.</p>
     * @param string $VulName <p>Vulnerability name</p>
     * @param integer $Status <p>Execution status<br>Enumeration value:<br>0: Initial state<br>1: Task issued<br>11: Client confirmed<br>2: Repair completed<br>3: Client offline<br>4: Timeout<br>5: Failure<br>6: Unsupported<br>9: Waiting for snapshot creation<br>10: Snapshot creation failed</p>
     * @param integer $FixStatus <p>Fix result</p><p>Enumeration values:</p><ul><li>0: initial state</li><li>1: repair successful</li><li>2: fix failure</li><li>3: fix</li></ul>
     * @param integer $SnapshotStatus <p>Snapshot status<br>Enumeration value:<br>-1: No need to create a snapshot<br>0: Not started<br>1: In progress<br>2: Completed<br>3: Creation failed</p>
     * @param string $ExceptionMessage <p>Exception prompt message</p>
     * @param string $StartTime <p>Repair startup time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     * @param string $EndTime <p>Repair end time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     * @param string $SnapshotCreateTime <p>Snapshot creation time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     * @param string $SnapshotExpireTime <p>Snapshot expiration time<br>Parameter format: YYYY-MM-DDTHH:mm:ssZ (ISO8601 format)</p>
     * @param string $SnapshotFailReason <p>Snapshot creation failure reason (available when SnapshotStatus=3)</p>
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("KBId",$param) and $param["KBId"] !== null) {
            $this->KBId = $param["KBId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FixStatus",$param) and $param["FixStatus"] !== null) {
            $this->FixStatus = $param["FixStatus"];
        }

        if (array_key_exists("SnapshotStatus",$param) and $param["SnapshotStatus"] !== null) {
            $this->SnapshotStatus = $param["SnapshotStatus"];
        }

        if (array_key_exists("ExceptionMessage",$param) and $param["ExceptionMessage"] !== null) {
            $this->ExceptionMessage = $param["ExceptionMessage"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SnapshotCreateTime",$param) and $param["SnapshotCreateTime"] !== null) {
            $this->SnapshotCreateTime = $param["SnapshotCreateTime"];
        }

        if (array_key_exists("SnapshotExpireTime",$param) and $param["SnapshotExpireTime"] !== null) {
            $this->SnapshotExpireTime = $param["SnapshotExpireTime"];
        }

        if (array_key_exists("SnapshotFailReason",$param) and $param["SnapshotFailReason"] !== null) {
            $this->SnapshotFailReason = $param["SnapshotFailReason"];
        }
    }
}
