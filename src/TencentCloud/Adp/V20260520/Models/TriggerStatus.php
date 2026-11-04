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
 * TriggerStatus
 *
 * @method AppTriggerScheduleStatus getScheduledStatus() Obtain <p>Timer status.</p>
 * @method void setScheduledStatus(AppTriggerScheduleStatus $ScheduledStatus) Set <p>Timer status.</p>
 * @method integer getScope() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
 * @method void setScope(integer $Scope) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
 * @method string getUserId() Obtain <p>Visitor id</p>
 * @method void setUserId(string $UserId) Set <p>Visitor id</p>
 * @method AppTriggerWebhookStatus getWebhookStatus() Obtain <p>Webhook status</p>
 * @method void setWebhookStatus(AppTriggerWebhookStatus $WebhookStatus) Set <p>Webhook status</p>
 */
class TriggerStatus extends AbstractModel
{
    /**
     * @var AppTriggerScheduleStatus <p>Timer status.</p>
     */
    public $ScheduledStatus;

    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
     */
    public $Scope;

    /**
     * @var string <p>Visitor id</p>
     */
    public $UserId;

    /**
     * @var AppTriggerWebhookStatus <p>Webhook status</p>
     */
    public $WebhookStatus;

    /**
     * @param AppTriggerScheduleStatus $ScheduledStatus <p>Timer status.</p>
     * @param integer $Scope <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_UNSPECIFIED</td> <td>0</td> <td>Unspecified</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_APP</td> <td>1</td> <td>B-end admin</td> </tr> <tr> <td>APP_TRIGGER_SCOPE_USER</td> <td>2</td> <td>C-end visitor</td> </tr> </tbody> </table>
     * @param string $UserId <p>Visitor id</p>
     * @param AppTriggerWebhookStatus $WebhookStatus <p>Webhook status</p>
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
        if (array_key_exists("ScheduledStatus",$param) and $param["ScheduledStatus"] !== null) {
            $this->ScheduledStatus = new AppTriggerScheduleStatus();
            $this->ScheduledStatus->deserialize($param["ScheduledStatus"]);
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("WebhookStatus",$param) and $param["WebhookStatus"] !== null) {
            $this->WebhookStatus = new AppTriggerWebhookStatus();
            $this->WebhookStatus->deserialize($param["WebhookStatus"]);
        }
    }
}
