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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySubscribeAutoRenewFlag request structure.
 *
 * @method string getSubscribeId() Obtain Subscription instance ID
 * @method void setSubscribeId(string $SubscribeId) Set Subscription instance ID
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. Valid values: 1 (auto-renewal enabled); 0 (auto-renewal disabled).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. Valid values: 1 (auto-renewal enabled); 0 (auto-renewal disabled).
 */
class ModifySubscribeAutoRenewFlagRequest extends AbstractModel
{
    /**
     * @var string Subscription instance ID
     */
    public $SubscribeId;

    /**
     * @var integer Auto-renewal flag. Valid values: 1 (auto-renewal enabled); 0 (auto-renewal disabled).
     */
    public $AutoRenewFlag;

    /**
     * @param string $SubscribeId Subscription instance ID
     * @param integer $AutoRenewFlag Auto-renewal flag. Valid values: 1 (auto-renewal enabled); 0 (auto-renewal disabled).
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }
    }
}
