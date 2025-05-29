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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Address-Level unsubscribe configuration.
 *
 * @method string getAddress() Obtain Sender address.
 * @method void setAddress(string $Address) Set Sender address.
 * @method string getUnsubscribeConfig() Obtain Unsubscription link option 0: do not include unsubscription link 1: simplified chinese 2: english 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai.
 * @method void setUnsubscribeConfig(string $UnsubscribeConfig) Set Unsubscription link option 0: do not include unsubscription link 1: simplified chinese 2: english 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai.
 * @method integer getStatus() Obtain 0: disabled; 1: enabled.
 * @method void setStatus(integer $Status) Set 0: disabled; 1: enabled.
 */
class AddressUnsubscribeConfigData extends AbstractModel
{
    /**
     * @var string Sender address.
     */
    public $Address;

    /**
     * @var string Unsubscription link option 0: do not include unsubscription link 1: simplified chinese 2: english 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai.
     */
    public $UnsubscribeConfig;

    /**
     * @var integer 0: disabled; 1: enabled.
     */
    public $Status;

    /**
     * @param string $Address Sender address.
     * @param string $UnsubscribeConfig Unsubscription link option 0: do not include unsubscription link 1: simplified chinese 2: english 3: traditional chinese 4: spanish 5: french 6: german 7: japanese 8: korean 9: arabic 10: thai.
     * @param integer $Status 0: disabled; 1: enabled.
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
        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("UnsubscribeConfig",$param) and $param["UnsubscribeConfig"] !== null) {
            $this->UnsubscribeConfig = $param["UnsubscribeConfig"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
