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
 * Session rate and periodic feature verification configuration.
 *
 * @method string getEnabled() Obtain Specifies whether session rate and periodic feature verification are enabled. valid values: <li>on: enable</li><li>off: disable</li>.
 * @method void setEnabled(string $Enabled) Set Specifies whether session rate and periodic feature verification are enabled. valid values: <li>on: enable</li><li>off: disable</li>.
 * @method SecurityAction getHighRateSessionAction() Obtain Session rate and periodic feature verification high-risk execution actions. SecurityAction Name valid values: <li>Deny: block, where Stall configuration is supported in DenyActionParameters;</li> <li>Monitor: observation;</li> <li>Allow: respond after wait, where MinDelayTime and MaxDelayTime configuration is required in AllowActionParameters.</li>.
 * @method void setHighRateSessionAction(SecurityAction $HighRateSessionAction) Set Session rate and periodic feature verification high-risk execution actions. SecurityAction Name valid values: <li>Deny: block, where Stall configuration is supported in DenyActionParameters;</li> <li>Monitor: observation;</li> <li>Allow: respond after wait, where MinDelayTime and MaxDelayTime configuration is required in AllowActionParameters.</li>.
 * @method SecurityAction getMidRateSessionAction() Obtain Session rate and periodic feature verification medium-risk execution action. SecurityAction Name parameter supports: <li>Deny: block, where DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>.
 * @method void setMidRateSessionAction(SecurityAction $MidRateSessionAction) Set Session rate and periodic feature verification medium-risk execution action. SecurityAction Name parameter supports: <li>Deny: block, where DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>.
 * @method SecurityAction getLowRateSessionAction() Obtain Session rate and periodic feature verification low risk execution action. SecurityAction Name parameter supports: <li>Deny: block, where DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>.
 * @method void setLowRateSessionAction(SecurityAction $LowRateSessionAction) Set Session rate and periodic feature verification low risk execution action. SecurityAction Name parameter supports: <li>Deny: block, where DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>.
 */
class SessionRateControl extends AbstractModel
{
    /**
     * @var string Specifies whether session rate and periodic feature verification are enabled. valid values: <li>on: enable</li><li>off: disable</li>.
     */
    public $Enabled;

    /**
     * @var SecurityAction Session rate and periodic feature verification high-risk execution actions. SecurityAction Name valid values: <li>Deny: block, where Stall configuration is supported in DenyActionParameters;</li> <li>Monitor: observation;</li> <li>Allow: respond after wait, where MinDelayTime and MaxDelayTime configuration is required in AllowActionParameters.</li>.
     */
    public $HighRateSessionAction;

    /**
     * @var SecurityAction Session rate and periodic feature verification medium-risk execution action. SecurityAction Name parameter supports: <li>Deny: block, where DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>.
     */
    public $MidRateSessionAction;

    /**
     * @var SecurityAction Session rate and periodic feature verification low risk execution action. SecurityAction Name parameter supports: <li>Deny: block, where DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>.
     */
    public $LowRateSessionAction;

    /**
     * @param string $Enabled Specifies whether session rate and periodic feature verification are enabled. valid values: <li>on: enable</li><li>off: disable</li>.
     * @param SecurityAction $HighRateSessionAction Session rate and periodic feature verification high-risk execution actions. SecurityAction Name valid values: <li>Deny: block, where Stall configuration is supported in DenyActionParameters;</li> <li>Monitor: observation;</li> <li>Allow: respond after wait, where MinDelayTime and MaxDelayTime configuration is required in AllowActionParameters.</li>.
     * @param SecurityAction $MidRateSessionAction Session rate and periodic feature verification medium-risk execution action. SecurityAction Name parameter supports: <li>Deny: block, where DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>.
     * @param SecurityAction $LowRateSessionAction Session rate and periodic feature verification low risk execution action. SecurityAction Name parameter supports: <li>Deny: block, where DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after wait, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>.
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("HighRateSessionAction",$param) and $param["HighRateSessionAction"] !== null) {
            $this->HighRateSessionAction = new SecurityAction();
            $this->HighRateSessionAction->deserialize($param["HighRateSessionAction"]);
        }

        if (array_key_exists("MidRateSessionAction",$param) and $param["MidRateSessionAction"] !== null) {
            $this->MidRateSessionAction = new SecurityAction();
            $this->MidRateSessionAction->deserialize($param["MidRateSessionAction"]);
        }

        if (array_key_exists("LowRateSessionAction",$param) and $param["LowRateSessionAction"] !== null) {
            $this->LowRateSessionAction = new SecurityAction();
            $this->LowRateSessionAction->deserialize($param["LowRateSessionAction"]);
        }
    }
}
