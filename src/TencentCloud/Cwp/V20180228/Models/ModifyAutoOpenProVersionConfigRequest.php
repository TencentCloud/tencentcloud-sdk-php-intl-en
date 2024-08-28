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
 * ModifyAutoOpenProVersionConfig request structure.
 *
 * @method string getStatus() Obtain Set the auto-activation status.
<li>CLOSE: off</li>
<li>OPEN: on</li>
 * @method void setStatus(string $Status) Set Set the auto-activation status.
<li>CLOSE: off</li>
<li>OPEN: on</li>
 * @method integer getAutoRepurchaseSwitch() Obtain Automatic purchase/expansion authorization switch, 1 by default, 0 for OFF, 1 for ON.
 * @method void setAutoRepurchaseSwitch(integer $AutoRepurchaseSwitch) Set Automatic purchase/expansion authorization switch, 1 by default, 0 for OFF, 1 for ON.
 * @method integer getAutoRepurchaseRenewSwitch() Obtain Auto-renewal or not for auto-purchased orders, 0 by default, 0 for OFF, 1 for ON
 * @method void setAutoRepurchaseRenewSwitch(integer $AutoRepurchaseRenewSwitch) Set Auto-renewal or not for auto-purchased orders, 0 by default, 0 for OFF, 1 for ON
 * @method integer getRepurchaseRenewSwitch() Obtain Whether the manually purchased order is automatically renewed (defaults to 0): 0 - off; 1 - on
 * @method void setRepurchaseRenewSwitch(integer $RepurchaseRenewSwitch) Set Whether the manually purchased order is automatically renewed (defaults to 0): 0 - off; 1 - on
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
     * @param string $Status Set the auto-activation status.
<li>CLOSE: off</li>
<li>OPEN: on</li>
     * @param integer $AutoRepurchaseSwitch Automatic purchase/expansion authorization switch, 1 by default, 0 for OFF, 1 for ON.
     * @param integer $AutoRepurchaseRenewSwitch Auto-renewal or not for auto-purchased orders, 0 by default, 0 for OFF, 1 for ON
     * @param integer $RepurchaseRenewSwitch Whether the manually purchased order is automatically renewed (defaults to 0): 0 - off; 1 - on
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

        if (array_key_exists("AutoRepurchaseSwitch",$param) and $param["AutoRepurchaseSwitch"] !== null) {
            $this->AutoRepurchaseSwitch = $param["AutoRepurchaseSwitch"];
        }

        if (array_key_exists("AutoRepurchaseRenewSwitch",$param) and $param["AutoRepurchaseRenewSwitch"] !== null) {
            $this->AutoRepurchaseRenewSwitch = $param["AutoRepurchaseRenewSwitch"];
        }

        if (array_key_exists("RepurchaseRenewSwitch",$param) and $param["RepurchaseRenewSwitch"] !== null) {
            $this->RepurchaseRenewSwitch = $param["RepurchaseRenewSwitch"];
        }
    }
}
