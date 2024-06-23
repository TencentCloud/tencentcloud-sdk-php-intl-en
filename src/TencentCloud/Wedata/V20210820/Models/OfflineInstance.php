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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Offline Instance
 *
 * @method string getCreateUin() Obtain Create Account Sub UIN
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateUin(string $CreateUin) Set Create Account Sub UIN
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOperatorUin() Obtain Operate Account Sub UIN
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOperatorUin(string $OperatorUin) Set Operate Account Sub UIN
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerUin() Obtain Primary AccountNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerUin(string $OwnerUin) Set Primary AccountNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getAppId() Obtain AccountsNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setAppId(string $AppId) Set AccountsNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkspaceId() Obtain Project ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkspaceId(string $WorkspaceId) Set Project ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getCurRunDate() Obtain Data Timestamp
 * @method void setCurRunDate(string $CurRunDate) Set Data Timestamp
 * @method string getIssueId() Obtain Issuance time
 * @method void setIssueId(string $IssueId) Set Issuance time
 * @method string getInlongTaskId() Obtain Resource Group ID Issuance, not an input item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInlongTaskId(string $InlongTaskId) Set Resource Group ID Issuance, not an input item
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getResourceGroup() Obtain Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setResourceGroup(string $ResourceGroup) Set Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTaskRunType() Obtain Task Type (1 Debugging, 2 Scheduled Execution)
 * @method void setTaskRunType(integer $TaskRunType) Set Task Type (1 Debugging, 2 Scheduled Execution)
 * @method string getState() Obtain Instance status EVENT_LISTENING|DEPENDENCE|BEFORE_ASPECT|ALLOCATED|LAUNCHED|KILL|SNAP_STATE_SAVING|ISSUED|RUNNING|AFTER_ASPECT|PENDING|KILLING|FINAL_STATE_SAVING|FAILED|KILL_FAILED|COMPLETED|EXPIRED|KILL_EXPIRED|DELETED
 * @method void setState(string $State) Set Instance status EVENT_LISTENING|DEPENDENCE|BEFORE_ASPECT|ALLOCATED|LAUNCHED|KILL|SNAP_STATE_SAVING|ISSUED|RUNNING|AFTER_ASPECT|PENDING|KILLING|FINAL_STATE_SAVING|FAILED|KILL_FAILED|COMPLETED|EXPIRED|KILL_EXPIRED|DELETED
 * @method string getStartTime() Obtain Start TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Start TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndTime() Obtain End timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set End timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Last Updated Time
 * @method void setUpdateTime(string $UpdateTime) Set Last Updated Time
 * @method string getInstanceKey() Obtain Unique Key
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceKey(string $InstanceKey) Set Unique Key
Note: This field may return null, indicating that no valid value can be obtained.
 */
class OfflineInstance extends AbstractModel
{
    /**
     * @var string Create Account Sub UIN
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateUin;

    /**
     * @var string Operate Account Sub UIN
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OperatorUin;

    /**
     * @var string Primary AccountNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerUin;

    /**
     * @var string AccountsNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $AppId;

    /**
     * @var string Project ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkspaceId;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Data Timestamp
     */
    public $CurRunDate;

    /**
     * @var string Issuance time
     */
    public $IssueId;

    /**
     * @var string Resource Group ID Issuance, not an input item
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InlongTaskId;

    /**
     * @var string Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ResourceGroup;

    /**
     * @var integer Task Type (1 Debugging, 2 Scheduled Execution)
     */
    public $TaskRunType;

    /**
     * @var string Instance status EVENT_LISTENING|DEPENDENCE|BEFORE_ASPECT|ALLOCATED|LAUNCHED|KILL|SNAP_STATE_SAVING|ISSUED|RUNNING|AFTER_ASPECT|PENDING|KILLING|FINAL_STATE_SAVING|FAILED|KILL_FAILED|COMPLETED|EXPIRED|KILL_EXPIRED|DELETED
     */
    public $State;

    /**
     * @var string Start TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string End timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Last Updated Time
     */
    public $UpdateTime;

    /**
     * @var string Unique Key
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceKey;

    /**
     * @param string $CreateUin Create Account Sub UIN
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OperatorUin Operate Account Sub UIN
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerUin Primary AccountNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $AppId AccountsNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkspaceId Project ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskId Task ID
     * @param string $CurRunDate Data Timestamp
     * @param string $IssueId Issuance time
     * @param string $InlongTaskId Resource Group ID Issuance, not an input item
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ResourceGroup Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TaskRunType Task Type (1 Debugging, 2 Scheduled Execution)
     * @param string $State Instance status EVENT_LISTENING|DEPENDENCE|BEFORE_ASPECT|ALLOCATED|LAUNCHED|KILL|SNAP_STATE_SAVING|ISSUED|RUNNING|AFTER_ASPECT|PENDING|KILLING|FINAL_STATE_SAVING|FAILED|KILL_FAILED|COMPLETED|EXPIRED|KILL_EXPIRED|DELETED
     * @param string $StartTime Start TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndTime End timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Last Updated Time
     * @param string $InstanceKey Unique Key
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("OperatorUin",$param) and $param["OperatorUin"] !== null) {
            $this->OperatorUin = $param["OperatorUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("IssueId",$param) and $param["IssueId"] !== null) {
            $this->IssueId = $param["IssueId"];
        }

        if (array_key_exists("InlongTaskId",$param) and $param["InlongTaskId"] !== null) {
            $this->InlongTaskId = $param["InlongTaskId"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("TaskRunType",$param) and $param["TaskRunType"] !== null) {
            $this->TaskRunType = $param["TaskRunType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }
    }
}
