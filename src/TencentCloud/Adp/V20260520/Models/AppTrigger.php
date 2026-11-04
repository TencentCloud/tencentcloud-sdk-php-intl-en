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
 * AppTrigger
 *
 * @method string getAppId() Obtain <p>Application ID.</p>
 * @method void setAppId(string $AppId) Set <p>Application ID.</p>
 * @method ExecuteConfig getExecuteConfig() Obtain <p>Execution configuration</p>
 * @method void setExecuteConfig(ExecuteConfig $ExecuteConfig) Set <p>Execution configuration</p>
 * @method integer getExecuteType() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_EXECUTE_TYPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_EXECUTE_TYPE_PROMPT</td> <td>1</td> <td>Command execution</td> </tr> <tr> <td>APP_TRIGGER_EXECUTE_TYPE_WORKFLOW</td> <td>2</td> <td>Workflow execution</td> </tr> </tbody> </table>
 * @method void setExecuteType(integer $ExecuteType) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_EXECUTE_TYPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_EXECUTE_TYPE_PROMPT</td> <td>1</td> <td>Command execution</td> </tr> <tr> <td>APP_TRIGGER_EXECUTE_TYPE_WORKFLOW</td> <td>2</td> <td>Workflow execution</td> </tr> </tbody> </table>
 * @method string getFailedCount() Obtain <p>Number of failures</p>
 * @method void setFailedCount(string $FailedCount) Set <p>Number of failures</p>
 * @method TimerPushConfig getPushConfig() Obtain <p>Push channel configuration</p>
 * @method void setPushConfig(TimerPushConfig $PushConfig) Set <p>Push channel configuration</p>
 * @method integer getScope() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
 * @method void setScope(integer $Scope) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
 * @method integer getStatus() Obtain <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TRIGGER_STATUS_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>APP_TRIGGER_STATUS_ENABLED</td><td>1</td><td>Enablement</td></tr><tr><td>APP_TRIGGER_STATUS_PAUSED</td><td>2</td><td>Suspension</td></tr><tr><td>APP_TRIGGER_STATUS_DELETED</td><td>3</td><td>Deleted</td></tr></tbody></table>
 * @method void setStatus(integer $Status) Set <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TRIGGER_STATUS_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>APP_TRIGGER_STATUS_ENABLED</td><td>1</td><td>Enablement</td></tr><tr><td>APP_TRIGGER_STATUS_PAUSED</td><td>2</td><td>Suspension</td></tr><tr><td>APP_TRIGGER_STATUS_DELETED</td><td>3</td><td>Deleted</td></tr></tbody></table>
 * @method string getSuccessCount() Obtain <p>Number of successes</p>
 * @method void setSuccessCount(string $SuccessCount) Set <p>Number of successes</p>
 * @method TriggerConfig getTriggerConfig() Obtain <p>Trigger configuration</p>
 * @method void setTriggerConfig(TriggerConfig $TriggerConfig) Set <p>Trigger configuration</p>
 * @method string getTriggerId() Obtain <p>Trigger ID</p>
 * @method void setTriggerId(string $TriggerId) Set <p>Trigger ID</p>
 * @method string getTriggerName() Obtain <p>Trigger name</p>
 * @method void setTriggerName(string $TriggerName) Set <p>Trigger name</p>
 * @method TriggerStatus getTriggerStatus() Obtain <p>Trigger status</p>
 * @method void setTriggerStatus(TriggerStatus $TriggerStatus) Set <p>Trigger status</p>
 * @method integer getTriggerType() Obtain <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TRIGGER_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>APP_TRIGGER_TYPE_SCHEDULED</td><td>1</td><td>Scheduled trigger</td></tr><tr><td>APP_TRIGGER_TYPE_WEBHOOK</td><td>2</td><td>Webhook trigger</td></tr></tbody></table>
 * @method void setTriggerType(integer $TriggerType) Set <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TRIGGER_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>APP_TRIGGER_TYPE_SCHEDULED</td><td>1</td><td>Scheduled trigger</td></tr><tr><td>APP_TRIGGER_TYPE_WEBHOOK</td><td>2</td><td>Webhook trigger</td></tr></tbody></table>
 * @method string getUserId() Obtain <p>Visitor ID</p>
 * @method void setUserId(string $UserId) Set <p>Visitor ID</p>
 */
class AppTrigger extends AbstractModel
{
    /**
     * @var string <p>Application ID.</p>
     */
    public $AppId;

    /**
     * @var ExecuteConfig <p>Execution configuration</p>
     */
    public $ExecuteConfig;

    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_EXECUTE_TYPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_EXECUTE_TYPE_PROMPT</td> <td>1</td> <td>Command execution</td> </tr> <tr> <td>APP_TRIGGER_EXECUTE_TYPE_WORKFLOW</td> <td>2</td> <td>Workflow execution</td> </tr> </tbody> </table>
     */
    public $ExecuteType;

    /**
     * @var string <p>Number of failures</p>
     */
    public $FailedCount;

    /**
     * @var TimerPushConfig <p>Push channel configuration</p>
     */
    public $PushConfig;

    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
     */
    public $Scope;

    /**
     * @var integer <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TRIGGER_STATUS_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>APP_TRIGGER_STATUS_ENABLED</td><td>1</td><td>Enablement</td></tr><tr><td>APP_TRIGGER_STATUS_PAUSED</td><td>2</td><td>Suspension</td></tr><tr><td>APP_TRIGGER_STATUS_DELETED</td><td>3</td><td>Deleted</td></tr></tbody></table>
     */
    public $Status;

    /**
     * @var string <p>Number of successes</p>
     */
    public $SuccessCount;

    /**
     * @var TriggerConfig <p>Trigger configuration</p>
     */
    public $TriggerConfig;

    /**
     * @var string <p>Trigger ID</p>
     */
    public $TriggerId;

    /**
     * @var string <p>Trigger name</p>
     */
    public $TriggerName;

    /**
     * @var TriggerStatus <p>Trigger status</p>
     */
    public $TriggerStatus;

    /**
     * @var integer <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TRIGGER_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>APP_TRIGGER_TYPE_SCHEDULED</td><td>1</td><td>Scheduled trigger</td></tr><tr><td>APP_TRIGGER_TYPE_WEBHOOK</td><td>2</td><td>Webhook trigger</td></tr></tbody></table>
     */
    public $TriggerType;

    /**
     * @var string <p>Visitor ID</p>
     */
    public $UserId;

    /**
     * @param string $AppId <p>Application ID.</p>
     * @param ExecuteConfig $ExecuteConfig <p>Execution configuration</p>
     * @param integer $ExecuteType <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_EXECUTE_TYPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_EXECUTE_TYPE_PROMPT</td> <td>1</td> <td>Command execution</td> </tr> <tr> <td>APP_TRIGGER_EXECUTE_TYPE_WORKFLOW</td> <td>2</td> <td>Workflow execution</td> </tr> </tbody> </table>
     * @param string $FailedCount <p>Number of failures</p>
     * @param TimerPushConfig $PushConfig <p>Push channel configuration</p>
     * @param integer $Scope <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
     * @param integer $Status <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TRIGGER_STATUS_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>APP_TRIGGER_STATUS_ENABLED</td><td>1</td><td>Enablement</td></tr><tr><td>APP_TRIGGER_STATUS_PAUSED</td><td>2</td><td>Suspension</td></tr><tr><td>APP_TRIGGER_STATUS_DELETED</td><td>3</td><td>Deleted</td></tr></tbody></table>
     * @param string $SuccessCount <p>Number of successes</p>
     * @param TriggerConfig $TriggerConfig <p>Trigger configuration</p>
     * @param string $TriggerId <p>Trigger ID</p>
     * @param string $TriggerName <p>Trigger name</p>
     * @param TriggerStatus $TriggerStatus <p>Trigger status</p>
     * @param integer $TriggerType <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_TRIGGER_TYPE_UNSPECIFIED</td><td>0</td><td>Unspecified</td></tr><tr><td>APP_TRIGGER_TYPE_SCHEDULED</td><td>1</td><td>Scheduled trigger</td></tr><tr><td>APP_TRIGGER_TYPE_WEBHOOK</td><td>2</td><td>Webhook trigger</td></tr></tbody></table>
     * @param string $UserId <p>Visitor ID</p>
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

        if (array_key_exists("ExecuteConfig",$param) and $param["ExecuteConfig"] !== null) {
            $this->ExecuteConfig = new ExecuteConfig();
            $this->ExecuteConfig->deserialize($param["ExecuteConfig"]);
        }

        if (array_key_exists("ExecuteType",$param) and $param["ExecuteType"] !== null) {
            $this->ExecuteType = $param["ExecuteType"];
        }

        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("PushConfig",$param) and $param["PushConfig"] !== null) {
            $this->PushConfig = new TimerPushConfig();
            $this->PushConfig->deserialize($param["PushConfig"]);
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("TriggerConfig",$param) and $param["TriggerConfig"] !== null) {
            $this->TriggerConfig = new TriggerConfig();
            $this->TriggerConfig->deserialize($param["TriggerConfig"]);
        }

        if (array_key_exists("TriggerId",$param) and $param["TriggerId"] !== null) {
            $this->TriggerId = $param["TriggerId"];
        }

        if (array_key_exists("TriggerName",$param) and $param["TriggerName"] !== null) {
            $this->TriggerName = $param["TriggerName"];
        }

        if (array_key_exists("TriggerStatus",$param) and $param["TriggerStatus"] !== null) {
            $this->TriggerStatus = new TriggerStatus();
            $this->TriggerStatus->deserialize($param["TriggerStatus"]);
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
