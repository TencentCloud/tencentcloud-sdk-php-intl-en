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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifies the configuration for Cookie verification and session tracking behavior.
 *
 * @method string getIssueNewBotSessionCookie() Obtain Whether to update Cookie and validate. valid values: <li>on: update Cookie and validate;</li> <li>off: verify only.</li>.
 * @method void setIssueNewBotSessionCookie(string $IssueNewBotSessionCookie) Set Whether to update Cookie and validate. valid values: <li>on: update Cookie and validate;</li> <li>off: verify only.</li>.
 * @method MaxNewSessionTriggerConfig getMaxNewSessionTriggerConfig() Obtain Specifies the trigger threshold for updating and validating cookies. valid only when IssueNewBotSessionCookie is set to on.
 * @method void setMaxNewSessionTriggerConfig(MaxNewSessionTriggerConfig $MaxNewSessionTriggerConfig) Set Specifies the trigger threshold for updating and validating cookies. valid only when IssueNewBotSessionCookie is set to on.
 * @method SecurityAction getSessionExpiredAction() Obtain Execution action when no Cookie is carried or the Cookie expired. valid values for the Name parameter in SecurityAction: <li>Deny: block, where Stall can be configured in DenyActionParameters;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where MinDelayTime and MaxDelayTime must be configured in AllowActionParameters.</li>.
 * @method void setSessionExpiredAction(SecurityAction $SessionExpiredAction) Set Execution action when no Cookie is carried or the Cookie expired. valid values for the Name parameter in SecurityAction: <li>Deny: block, where Stall can be configured in DenyActionParameters;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where MinDelayTime and MaxDelayTime must be configured in AllowActionParameters.</li>.
 * @method SecurityAction getSessionInvalidAction() Obtain Execution action for invalid Cookie. valid values for the Name parameter in SecurityAction: <li>Deny: block, where the DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>.
 * @method void setSessionInvalidAction(SecurityAction $SessionInvalidAction) Set Execution action for invalid Cookie. valid values for the Name parameter in SecurityAction: <li>Deny: block, where the DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>.
 * @method SessionRateControl getSessionRateControl() Obtain Specifies the session rate and periodic feature verification configuration.
 * @method void setSessionRateControl(SessionRateControl $SessionRateControl) Set Specifies the session rate and periodic feature verification configuration.
 */
class BotSessionValidation extends AbstractModel
{
    /**
     * @var string Whether to update Cookie and validate. valid values: <li>on: update Cookie and validate;</li> <li>off: verify only.</li>.
     */
    public $IssueNewBotSessionCookie;

    /**
     * @var MaxNewSessionTriggerConfig Specifies the trigger threshold for updating and validating cookies. valid only when IssueNewBotSessionCookie is set to on.
     */
    public $MaxNewSessionTriggerConfig;

    /**
     * @var SecurityAction Execution action when no Cookie is carried or the Cookie expired. valid values for the Name parameter in SecurityAction: <li>Deny: block, where Stall can be configured in DenyActionParameters;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where MinDelayTime and MaxDelayTime must be configured in AllowActionParameters.</li>.
     */
    public $SessionExpiredAction;

    /**
     * @var SecurityAction Execution action for invalid Cookie. valid values for the Name parameter in SecurityAction: <li>Deny: block, where the DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>.
     */
    public $SessionInvalidAction;

    /**
     * @var SessionRateControl Specifies the session rate and periodic feature verification configuration.
     */
    public $SessionRateControl;

    /**
     * @param string $IssueNewBotSessionCookie Whether to update Cookie and validate. valid values: <li>on: update Cookie and validate;</li> <li>off: verify only.</li>.
     * @param MaxNewSessionTriggerConfig $MaxNewSessionTriggerConfig Specifies the trigger threshold for updating and validating cookies. valid only when IssueNewBotSessionCookie is set to on.
     * @param SecurityAction $SessionExpiredAction Execution action when no Cookie is carried or the Cookie expired. valid values for the Name parameter in SecurityAction: <li>Deny: block, where Stall can be configured in DenyActionParameters;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where MinDelayTime and MaxDelayTime must be configured in AllowActionParameters.</li>.
     * @param SecurityAction $SessionInvalidAction Execution action for invalid Cookie. valid values for the Name parameter in SecurityAction: <li>Deny: block, where the DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>.
     * @param SessionRateControl $SessionRateControl Specifies the session rate and periodic feature verification configuration.
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
        if (array_key_exists("IssueNewBotSessionCookie",$param) and $param["IssueNewBotSessionCookie"] !== null) {
            $this->IssueNewBotSessionCookie = $param["IssueNewBotSessionCookie"];
        }

        if (array_key_exists("MaxNewSessionTriggerConfig",$param) and $param["MaxNewSessionTriggerConfig"] !== null) {
            $this->MaxNewSessionTriggerConfig = new MaxNewSessionTriggerConfig();
            $this->MaxNewSessionTriggerConfig->deserialize($param["MaxNewSessionTriggerConfig"]);
        }

        if (array_key_exists("SessionExpiredAction",$param) and $param["SessionExpiredAction"] !== null) {
            $this->SessionExpiredAction = new SecurityAction();
            $this->SessionExpiredAction->deserialize($param["SessionExpiredAction"]);
        }

        if (array_key_exists("SessionInvalidAction",$param) and $param["SessionInvalidAction"] !== null) {
            $this->SessionInvalidAction = new SecurityAction();
            $this->SessionInvalidAction->deserialize($param["SessionInvalidAction"]);
        }

        if (array_key_exists("SessionRateControl",$param) and $param["SessionRateControl"] !== null) {
            $this->SessionRateControl = new SessionRateControl();
            $this->SessionRateControl->deserialize($param["SessionRateControl"]);
        }
    }
}
