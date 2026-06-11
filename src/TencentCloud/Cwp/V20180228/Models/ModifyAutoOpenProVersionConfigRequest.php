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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAutoOpenProVersionConfig request structure.
 *
 * @method string getStatus() Obtain Set the auto-activation status.
<li>CLOSE: off</li>
<li>OPEN: on</li>
 * @method void setStatus(string $Status) Set Set the auto-activation status.
<li>CLOSE: off</li>
<li>OPEN: on</li>
 * @method string getProtectType() Obtain Strengthen protection mode
PROVERSION_POSTPAY indicates the Pro Edition pay-as-you-go mode.
PROVERSION_PREPAY Professional Edition - Subscription
FLAGSHIP_PREPAY Flagship Edition - Subscription
 * @method void setProtectType(string $ProtectType) Set Strengthen protection mode
PROVERSION_POSTPAY indicates the Pro Edition pay-as-you-go mode.
PROVERSION_PREPAY Professional Edition - Subscription
FLAGSHIP_PREPAY Flagship Edition - Subscription
 * @method integer getAutoRepurchaseSwitch() Obtain Automatic purchase/expansion authorization switch, 1 by default, 0 for OFF, 1 for ON.
 * @method void setAutoRepurchaseSwitch(integer $AutoRepurchaseSwitch) Set Automatic purchase/expansion authorization switch, 1 by default, 0 for OFF, 1 for ON.
 * @method integer getAutoRepurchaseRenewSwitch() Obtain Auto-renewal or not for auto-purchased orders, 0 by default, 0 for OFF, 1 for ON
 * @method void setAutoRepurchaseRenewSwitch(integer $AutoRepurchaseRenewSwitch) Set Auto-renewal or not for auto-purchased orders, 0 by default, 0 for OFF, 1 for ON
 * @method integer getRepurchaseRenewSwitch() Obtain Whether the manually purchased order is automatically renewed (defaults to 0): 0 - off; 1 - on
 * @method void setRepurchaseRenewSwitch(integer $RepurchaseRenewSwitch) Set Whether the manually purchased order is automatically renewed (defaults to 0): 0 - off; 1 - on
 * @method integer getAutoBindRaspSwitch() Obtain Automatically add machines and bind rasp. 0: Turn off. 1: Turn on.
 * @method void setAutoBindRaspSwitch(integer $AutoBindRaspSwitch) Set Automatically add machines and bind rasp. 0: Turn off. 1: Turn on.
 * @method integer getAutoOpenRaspSwitch() Obtain Automatically add machines with rasp protection enabled, off by default. 0: Off, 1: On
 * @method void setAutoOpenRaspSwitch(integer $AutoOpenRaspSwitch) Set Automatically add machines with rasp protection enabled, off by default. 0: Off, 1: On
 * @method integer getAutoDowngradeSwitch() Obtain Automatic scaling down switch, 0 for off and 1 for on
 * @method void setAutoDowngradeSwitch(integer $AutoDowngradeSwitch) Set Automatic scaling down switch, 0 for off and 1 for on
 */
class ModifyAutoOpenProVersionConfigRequest extends AbstractModel
{
    /**
     * @var string Set the auto-activation status.
<li>CLOSE: off</li>
<li>OPEN: on</li>
     */
    public $Status;

    /**
     * @var string Strengthen protection mode
PROVERSION_POSTPAY indicates the Pro Edition pay-as-you-go mode.
PROVERSION_PREPAY Professional Edition - Subscription
FLAGSHIP_PREPAY Flagship Edition - Subscription
     */
    public $ProtectType;

    /**
     * @var integer Automatic purchase/expansion authorization switch, 1 by default, 0 for OFF, 1 for ON.
     */
    public $AutoRepurchaseSwitch;

    /**
     * @var integer Auto-renewal or not for auto-purchased orders, 0 by default, 0 for OFF, 1 for ON
     */
    public $AutoRepurchaseRenewSwitch;

    /**
     * @var integer Whether the manually purchased order is automatically renewed (defaults to 0): 0 - off; 1 - on
     */
    public $RepurchaseRenewSwitch;

    /**
     * @var integer Automatically add machines and bind rasp. 0: Turn off. 1: Turn on.
     */
    public $AutoBindRaspSwitch;

    /**
     * @var integer Automatically add machines with rasp protection enabled, off by default. 0: Off, 1: On
     */
    public $AutoOpenRaspSwitch;

    /**
     * @var integer Automatic scaling down switch, 0 for off and 1 for on
     */
    public $AutoDowngradeSwitch;

    /**
     * @param string $Status Set the auto-activation status.
<li>CLOSE: off</li>
<li>OPEN: on</li>
     * @param string $ProtectType Strengthen protection mode
PROVERSION_POSTPAY indicates the Pro Edition pay-as-you-go mode.
PROVERSION_PREPAY Professional Edition - Subscription
FLAGSHIP_PREPAY Flagship Edition - Subscription
     * @param integer $AutoRepurchaseSwitch Automatic purchase/expansion authorization switch, 1 by default, 0 for OFF, 1 for ON.
     * @param integer $AutoRepurchaseRenewSwitch Auto-renewal or not for auto-purchased orders, 0 by default, 0 for OFF, 1 for ON
     * @param integer $RepurchaseRenewSwitch Whether the manually purchased order is automatically renewed (defaults to 0): 0 - off; 1 - on
     * @param integer $AutoBindRaspSwitch Automatically add machines and bind rasp. 0: Turn off. 1: Turn on.
     * @param integer $AutoOpenRaspSwitch Automatically add machines with rasp protection enabled, off by default. 0: Off, 1: On
     * @param integer $AutoDowngradeSwitch Automatic scaling down switch, 0 for off and 1 for on
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProtectType",$param) and $param["ProtectType"] !== null) {
            $this->ProtectType = $param["ProtectType"];
        }

        if (array_key_exists("AutoRepurchaseSwitch",$param) and $param["AutoRepurchaseSwitch"] !== null) {
            $this->AutoRepurchaseSwitch = $param["AutoRepurchaseSwitch"];
        }

        if (array_key_exists("AutoRepurchaseRenewSwitch",$param) and $param["AutoRepurchaseRenewSwitch"] !== null) {
            $this->AutoRepurchaseRenewSwitch = $param["AutoRepurchaseRenewSwitch"];
        }

        if (array_key_exists("RepurchaseRenewSwitch",$param) and $param["RepurchaseRenewSwitch"] !== null) {
            $this->RepurchaseRenewSwitch = $param["RepurchaseRenewSwitch"];
        }

        if (array_key_exists("AutoBindRaspSwitch",$param) and $param["AutoBindRaspSwitch"] !== null) {
            $this->AutoBindRaspSwitch = $param["AutoBindRaspSwitch"];
        }

        if (array_key_exists("AutoOpenRaspSwitch",$param) and $param["AutoOpenRaspSwitch"] !== null) {
            $this->AutoOpenRaspSwitch = $param["AutoOpenRaspSwitch"];
        }

        if (array_key_exists("AutoDowngradeSwitch",$param) and $param["AutoDowngradeSwitch"] !== null) {
            $this->AutoDowngradeSwitch = $param["AutoDowngradeSwitch"];
        }
    }
}
