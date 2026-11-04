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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AppTriggerRunLog
 *
 * @method string getConversationId() Obtain <p>Session id</p>
 * @method void setConversationId(string $ConversationId) Set <p>Session id</p>
 * @method string getDurationMs() Obtain <p>Execution time</p>
 * @method void setDurationMs(string $DurationMs) Set <p>Execution time</p>
 * @method string getEndTime() Obtain <p>End time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setEndTime(string $EndTime) Set <p>End time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method integer getFireType() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_SCHEDULED</td> <td>1</td> <td>Scheduled trigger</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_WEBHOOK</td> <td>2</td> <td>Webhook trigger</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_MANUAL_RUN</td> <td>3</td> <td>Manual immediate execution</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_TEST_RUN</td> <td>4</td> <td>Test execution</td> </tr> </tbody> </table>
 * @method void setFireType(integer $FireType) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_SCHEDULED</td> <td>1</td> <td>Scheduled trigger</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_WEBHOOK</td> <td>2</td> <td>Webhook trigger</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_MANUAL_RUN</td> <td>3</td> <td>Manual immediate execution</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_TEST_RUN</td> <td>4</td> <td>Test execution</td> </tr> </tbody> </table>
 * @method string getInstanceId() Obtain <p>Trigger instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Trigger instance id</p>
 * @method integer getPushStatus() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_NONE</td> <td>1</td> <td>Push notification not configured</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_WAITING</td> <td>2</td> <td>Pending</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_SUCCESS</td> <td>3</td> <td>Push successful</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_FAILED</td> <td>4</td> <td>Push failure</td> </tr> </tbody> </table>
 * @method void setPushStatus(integer $PushStatus) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_NONE</td> <td>1</td> <td>Push notification not configured</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_WAITING</td> <td>2</td> <td>Pending</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_SUCCESS</td> <td>3</td> <td>Push successful</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_FAILED</td> <td>4</td> <td>Push failure</td> </tr> </tbody> </table>
 * @method string getResultCode() Obtain <p>Result code</p>
 * @method void setResultCode(string $ResultCode) Set <p>Result code</p>
 * @method string getResultSummary() Obtain <p>Result Overview</p>
 * @method void setResultSummary(string $ResultSummary) Set <p>Result Overview</p>
 * @method string getRunId() Obtain <p>Single dialogue id</p>
 * @method void setRunId(string $RunId) Set <p>Single dialogue id</p>
 * @method string getScheduledFireTime() Obtain <p>Trigger time</p><p>Parameter format: YYYY:MM:DD hh:mm:ss</p>
 * @method void setScheduledFireTime(string $ScheduledFireTime) Set <p>Trigger time</p><p>Parameter format: YYYY:MM:DD hh:mm:ss</p>
 * @method integer getScope() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
 * @method void setScope(integer $Scope) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
 * @method string getStartTime() Obtain <p>Execution start time</p><p>Parameter format: YYYY:MM:DD hh:mm:ss</p>
 * @method void setStartTime(string $StartTime) Set <p>Execution start time</p><p>Parameter format: YYYY:MM:DD hh:mm:ss</p>
 * @method integer getStatus() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>TIMER_RUN_STATUS_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>TIMER_RUN_STATUS_PENDING</td> <td>1</td> <td>Waiting to execute</td> </tr> <tr> <td>TIMER_RUN_STATUS_RUNNING</td> <td>2</td> <td>Executing</td> </tr> <tr> <td>TIMER_RUN_STATUS_RETRY_WAIT</td> <td>3</td> <td>Wait for retry</td> </tr> <tr> <td>TIMER_RUN_STATUS_SUCCESS</td> <td>4</td> <td>Successful</td> </tr> <tr> <td>TIMER_RUN_STATUS_DEAD</td> <td>5</td> <td>Failed final state (retry exhausted / non-retriable)</td> </tr> <tr> <td>TIMER_RUN_STATUS_CANCELLED</td> <td>6</td> <td>Cancelled due to task pause/deletion/modification</td> </tr> </tbody> </table>
 * @method void setStatus(integer $Status) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>TIMER_RUN_STATUS_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>TIMER_RUN_STATUS_PENDING</td> <td>1</td> <td>Waiting to execute</td> </tr> <tr> <td>TIMER_RUN_STATUS_RUNNING</td> <td>2</td> <td>Executing</td> </tr> <tr> <td>TIMER_RUN_STATUS_RETRY_WAIT</td> <td>3</td> <td>Wait for retry</td> </tr> <tr> <td>TIMER_RUN_STATUS_SUCCESS</td> <td>4</td> <td>Successful</td> </tr> <tr> <td>TIMER_RUN_STATUS_DEAD</td> <td>5</td> <td>Failed final state (retry exhausted / non-retriable)</td> </tr> <tr> <td>TIMER_RUN_STATUS_CANCELLED</td> <td>6</td> <td>Cancelled due to task pause/deletion/modification</td> </tr> </tbody> </table>
 * @method string getTriggerId() Obtain <p>Trigger id</p>
 * @method void setTriggerId(string $TriggerId) Set <p>Trigger id</p>
 * @method boolean getUnread() Obtain <p>Whether it has been read</p>
 * @method void setUnread(boolean $Unread) Set <p>Whether it has been read</p>
 * @method string getUserId() Obtain <p>Visitor Id</p>
 * @method void setUserId(string $UserId) Set <p>Visitor Id</p>
 * @method string getWorkflowRunId() Obtain <p>Workflow run id</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) Set <p>Workflow run id</p>
 */
class AppTriggerRunLog extends AbstractModel
{
    /**
     * @var string <p>Session id</p>
     */
    public $ConversationId;

    /**
     * @var string <p>Execution time</p>
     */
    public $DurationMs;

    /**
     * @var string <p>End time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $EndTime;

    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_SCHEDULED</td> <td>1</td> <td>Scheduled trigger</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_WEBHOOK</td> <td>2</td> <td>Webhook trigger</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_MANUAL_RUN</td> <td>3</td> <td>Manual immediate execution</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_TEST_RUN</td> <td>4</td> <td>Test execution</td> </tr> </tbody> </table>
     */
    public $FireType;

    /**
     * @var string <p>Trigger instance id</p>
     */
    public $InstanceId;

    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_NONE</td> <td>1</td> <td>Push notification not configured</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_WAITING</td> <td>2</td> <td>Pending</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_SUCCESS</td> <td>3</td> <td>Push successful</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_FAILED</td> <td>4</td> <td>Push failure</td> </tr> </tbody> </table>
     */
    public $PushStatus;

    /**
     * @var string <p>Result code</p>
     */
    public $ResultCode;

    /**
     * @var string <p>Result Overview</p>
     */
    public $ResultSummary;

    /**
     * @var string <p>Single dialogue id</p>
     */
    public $RunId;

    /**
     * @var string <p>Trigger time</p><p>Parameter format: YYYY:MM:DD hh:mm:ss</p>
     */
    public $ScheduledFireTime;

    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
     */
    public $Scope;

    /**
     * @var string <p>Execution start time</p><p>Parameter format: YYYY:MM:DD hh:mm:ss</p>
     */
    public $StartTime;

    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>TIMER_RUN_STATUS_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>TIMER_RUN_STATUS_PENDING</td> <td>1</td> <td>Waiting to execute</td> </tr> <tr> <td>TIMER_RUN_STATUS_RUNNING</td> <td>2</td> <td>Executing</td> </tr> <tr> <td>TIMER_RUN_STATUS_RETRY_WAIT</td> <td>3</td> <td>Wait for retry</td> </tr> <tr> <td>TIMER_RUN_STATUS_SUCCESS</td> <td>4</td> <td>Successful</td> </tr> <tr> <td>TIMER_RUN_STATUS_DEAD</td> <td>5</td> <td>Failed final state (retry exhausted / non-retriable)</td> </tr> <tr> <td>TIMER_RUN_STATUS_CANCELLED</td> <td>6</td> <td>Cancelled due to task pause/deletion/modification</td> </tr> </tbody> </table>
     */
    public $Status;

    /**
     * @var string <p>Trigger id</p>
     */
    public $TriggerId;

    /**
     * @var boolean <p>Whether it has been read</p>
     */
    public $Unread;

    /**
     * @var string <p>Visitor Id</p>
     */
    public $UserId;

    /**
     * @var string <p>Workflow run id</p>
     */
    public $WorkflowRunId;

    /**
     * @param string $ConversationId <p>Session id</p>
     * @param string $DurationMs <p>Execution time</p>
     * @param string $EndTime <p>End time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     * @param integer $FireType <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_SCHEDULED</td> <td>1</td> <td>Scheduled trigger</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_WEBHOOK</td> <td>2</td> <td>Webhook trigger</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_MANUAL_RUN</td> <td>3</td> <td>Manual immediate execution</td> </tr> <tr> <td>APP_TRIGGER_FIRE_TYPE_TEST_RUN</td> <td>4</td> <td>Test execution</td> </tr> </tbody> </table>
     * @param string $InstanceId <p>Trigger instance id</p>
     * @param integer $PushStatus <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_NONE</td> <td>1</td> <td>Push notification not configured</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_WAITING</td> <td>2</td> <td>Pending</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_SUCCESS</td> <td>3</td> <td>Push successful</td> </tr> <tr> <td>TIMER_RUN_PUSH_STATUS_FAILED</td> <td>4</td> <td>Push failure</td> </tr> </tbody> </table>
     * @param string $ResultCode <p>Result code</p>
     * @param string $ResultSummary <p>Result Overview</p>
     * @param string $RunId <p>Single dialogue id</p>
     * @param string $ScheduledFireTime <p>Trigger time</p><p>Parameter format: YYYY:MM:DD hh:mm:ss</p>
     * @param integer $Scope <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
     * @param string $StartTime <p>Execution start time</p><p>Parameter format: YYYY:MM:DD hh:mm:ss</p>
     * @param integer $Status <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>TIMER_RUN_STATUS_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>TIMER_RUN_STATUS_PENDING</td> <td>1</td> <td>Waiting to execute</td> </tr> <tr> <td>TIMER_RUN_STATUS_RUNNING</td> <td>2</td> <td>Executing</td> </tr> <tr> <td>TIMER_RUN_STATUS_RETRY_WAIT</td> <td>3</td> <td>Wait for retry</td> </tr> <tr> <td>TIMER_RUN_STATUS_SUCCESS</td> <td>4</td> <td>Successful</td> </tr> <tr> <td>TIMER_RUN_STATUS_DEAD</td> <td>5</td> <td>Failed final state (retry exhausted / non-retriable)</td> </tr> <tr> <td>TIMER_RUN_STATUS_CANCELLED</td> <td>6</td> <td>Cancelled due to task pause/deletion/modification</td> </tr> </tbody> </table>
     * @param string $TriggerId <p>Trigger id</p>
     * @param boolean $Unread <p>Whether it has been read</p>
     * @param string $UserId <p>Visitor Id</p>
     * @param string $WorkflowRunId <p>Workflow run id</p>
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
        if (array_key_exists("ConversationId",$param) and $param["ConversationId"] !== null) {
            $this->ConversationId = $param["ConversationId"];
        }

        if (array_key_exists("DurationMs",$param) and $param["DurationMs"] !== null) {
            $this->DurationMs = $param["DurationMs"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FireType",$param) and $param["FireType"] !== null) {
            $this->FireType = $param["FireType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PushStatus",$param) and $param["PushStatus"] !== null) {
            $this->PushStatus = $param["PushStatus"];
        }

        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("ResultSummary",$param) and $param["ResultSummary"] !== null) {
            $this->ResultSummary = $param["ResultSummary"];
        }

        if (array_key_exists("RunId",$param) and $param["RunId"] !== null) {
            $this->RunId = $param["RunId"];
        }

        if (array_key_exists("ScheduledFireTime",$param) and $param["ScheduledFireTime"] !== null) {
            $this->ScheduledFireTime = $param["ScheduledFireTime"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("Unread",$param) and $param["Unread"] !== null) {
            $this->Unread = $param["Unread"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }
    }
}
