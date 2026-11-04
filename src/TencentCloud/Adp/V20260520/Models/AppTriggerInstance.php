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
 * AppTriggerInstance
 *
 * @method string getAppId() Obtain <p>Application id</p>
 * @method void setAppId(string $AppId) Set <p>Application id</p>
 * @method string getConversationId() Obtain <p>Session id</p>
 * @method void setConversationId(string $ConversationId) Set <p>Session id</p>
 * @method string getCreatedAt() Obtain <p>Trigger creation time</p>
 * @method void setCreatedAt(string $CreatedAt) Set <p>Trigger creation time</p>
 * @method string getFinishedAt() Obtain <p>End time.</p>
 * @method void setFinishedAt(string $FinishedAt) Set <p>End time.</p>
 * @method string getInstanceId() Obtain <p>Trigger running instance id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Trigger running instance id</p>
 * @method string getRequestId() Obtain <p>Request ID</p>
 * @method void setRequestId(string $RequestId) Set <p>Request ID</p>
 * @method string getResultCode() Obtain <p>Result code</p>
 * @method void setResultCode(string $ResultCode) Set <p>Result code</p>
 * @method string getResultSummary() Obtain <p>Result Summary</p>
 * @method void setResultSummary(string $ResultSummary) Set <p>Result Summary</p>
 * @method string getRunId() Obtain <p>Single dialogue id</p>
 * @method void setRunId(string $RunId) Set <p>Single dialogue id</p>
 * @method integer getScope() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
 * @method void setScope(integer $Scope) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
 * @method integer getSource() Obtain <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_APP_TRIGGER</td><td>1</td><td>Originates from an application trigger</td></tr></tbody></table>
 * @method void setSource(integer $Source) Set <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_APP_TRIGGER</td><td>1</td><td>Originates from an application trigger</td></tr></tbody></table>
 * @method string getStartedAt() Obtain <p>Trigger start execution time</p>
 * @method void setStartedAt(string $StartedAt) Set <p>Trigger start execution time</p>
 * @method integer getStatus() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>TIMER_RUN_STATUS_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>TIMER_RUN_STATUS_PENDING</td> <td>1</td> <td>Waiting to execute</td> </tr> <tr> <td>TIMER_RUN_STATUS_RUNNING</td> <td>2</td> <td>Executing</td> </tr> <tr> <td>TIMER_RUN_STATUS_RETRY_WAIT</td> <td>3</td> <td>Wait for retry</td> </tr> <tr> <td>TIMER_RUN_STATUS_SUCCESS</td> <td>4</td> <td>Successful</td> </tr> <tr> <td>TIMER_RUN_STATUS_DEAD</td> <td>5</td> <td>Failure final state (retry exhausted / non-retriable)</td> </tr> <tr> <td>TIMER_RUN_STATUS_CANCELLED</td> <td>6</td> <td>Cancelled by task pause/deletion/modification</td> </tr> </tbody> </table>
 * @method void setStatus(integer $Status) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>TIMER_RUN_STATUS_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>TIMER_RUN_STATUS_PENDING</td> <td>1</td> <td>Waiting to execute</td> </tr> <tr> <td>TIMER_RUN_STATUS_RUNNING</td> <td>2</td> <td>Executing</td> </tr> <tr> <td>TIMER_RUN_STATUS_RETRY_WAIT</td> <td>3</td> <td>Wait for retry</td> </tr> <tr> <td>TIMER_RUN_STATUS_SUCCESS</td> <td>4</td> <td>Successful</td> </tr> <tr> <td>TIMER_RUN_STATUS_DEAD</td> <td>5</td> <td>Failure final state (retry exhausted / non-retriable)</td> </tr> <tr> <td>TIMER_RUN_STATUS_CANCELLED</td> <td>6</td> <td>Cancelled by task pause/deletion/modification</td> </tr> </tbody> </table>
 * @method string getTraceId() Obtain <p>TraceId, used for logging</p>
 * @method void setTraceId(string $TraceId) Set <p>TraceId, used for logging</p>
 * @method string getTriggerId() Obtain <p>Trigger id</p>
 * @method void setTriggerId(string $TriggerId) Set <p>Trigger id</p>
 * @method string getUserId() Obtain <p>Visitor ID</p>
 * @method void setUserId(string $UserId) Set <p>Visitor ID</p>
 * @method string getWorkflowRunId() Obtain <p>Workflow running ID</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) Set <p>Workflow running ID</p>
 */
class AppTriggerInstance extends AbstractModel
{
    /**
     * @var string <p>Application id</p>
     */
    public $AppId;

    /**
     * @var string <p>Session id</p>
     */
    public $ConversationId;

    /**
     * @var string <p>Trigger creation time</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>End time.</p>
     */
    public $FinishedAt;

    /**
     * @var string <p>Trigger running instance id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Request ID</p>
     */
    public $RequestId;

    /**
     * @var string <p>Result code</p>
     */
    public $ResultCode;

    /**
     * @var string <p>Result Summary</p>
     */
    public $ResultSummary;

    /**
     * @var string <p>Single dialogue id</p>
     */
    public $RunId;

    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
     */
    public $Scope;

    /**
     * @var integer <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_APP_TRIGGER</td><td>1</td><td>Originates from an application trigger</td></tr></tbody></table>
     */
    public $Source;

    /**
     * @var string <p>Trigger start execution time</p>
     */
    public $StartedAt;

    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>TIMER_RUN_STATUS_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>TIMER_RUN_STATUS_PENDING</td> <td>1</td> <td>Waiting to execute</td> </tr> <tr> <td>TIMER_RUN_STATUS_RUNNING</td> <td>2</td> <td>Executing</td> </tr> <tr> <td>TIMER_RUN_STATUS_RETRY_WAIT</td> <td>3</td> <td>Wait for retry</td> </tr> <tr> <td>TIMER_RUN_STATUS_SUCCESS</td> <td>4</td> <td>Successful</td> </tr> <tr> <td>TIMER_RUN_STATUS_DEAD</td> <td>5</td> <td>Failure final state (retry exhausted / non-retriable)</td> </tr> <tr> <td>TIMER_RUN_STATUS_CANCELLED</td> <td>6</td> <td>Cancelled by task pause/deletion/modification</td> </tr> </tbody> </table>
     */
    public $Status;

    /**
     * @var string <p>TraceId, used for logging</p>
     */
    public $TraceId;

    /**
     * @var string <p>Trigger id</p>
     */
    public $TriggerId;

    /**
     * @var string <p>Visitor ID</p>
     */
    public $UserId;

    /**
     * @var string <p>Workflow running ID</p>
     */
    public $WorkflowRunId;

    /**
     * @param string $AppId <p>Application id</p>
     * @param string $ConversationId <p>Session id</p>
     * @param string $CreatedAt <p>Trigger creation time</p>
     * @param string $FinishedAt <p>End time.</p>
     * @param string $InstanceId <p>Trigger running instance id</p>
     * @param string $RequestId <p>Request ID</p>
     * @param string $ResultCode <p>Result code</p>
     * @param string $ResultSummary <p>Result Summary</p>
     * @param string $RunId <p>Single dialogue id</p>
     * @param integer $Scope <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
     * @param integer $Source <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>APP_TRIGGER_INSTANCE_SOURCE_APP_TRIGGER</td><td>1</td><td>Originates from an application trigger</td></tr></tbody></table>
     * @param string $StartedAt <p>Trigger start execution time</p>
     * @param integer $Status <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>TIMER_RUN_STATUS_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>TIMER_RUN_STATUS_PENDING</td> <td>1</td> <td>Waiting to execute</td> </tr> <tr> <td>TIMER_RUN_STATUS_RUNNING</td> <td>2</td> <td>Executing</td> </tr> <tr> <td>TIMER_RUN_STATUS_RETRY_WAIT</td> <td>3</td> <td>Wait for retry</td> </tr> <tr> <td>TIMER_RUN_STATUS_SUCCESS</td> <td>4</td> <td>Successful</td> </tr> <tr> <td>TIMER_RUN_STATUS_DEAD</td> <td>5</td> <td>Failure final state (retry exhausted / non-retriable)</td> </tr> <tr> <td>TIMER_RUN_STATUS_CANCELLED</td> <td>6</td> <td>Cancelled by task pause/deletion/modification</td> </tr> </tbody> </table>
     * @param string $TraceId <p>TraceId, used for logging</p>
     * @param string $TriggerId <p>Trigger id</p>
     * @param string $UserId <p>Visitor ID</p>
     * @param string $WorkflowRunId <p>Workflow running ID</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ConversationId",$param) and $param["ConversationId"] !== null) {
            $this->ConversationId = $param["ConversationId"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("FinishedAt",$param) and $param["FinishedAt"] !== null) {
            $this->FinishedAt = $param["FinishedAt"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
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

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("StartedAt",$param) and $param["StartedAt"] !== null) {
            $this->StartedAt = $param["StartedAt"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TraceId",$param) and $param["TraceId"] !== null) {
            $this->TraceId = $param["TraceId"];
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }
    }
}
