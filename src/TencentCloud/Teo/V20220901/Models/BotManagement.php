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
 * Web security BOT managed rules architecture.
 *
 * @method ClientAttestationRules getClientAttestationRules() Obtain Definition list of client authentication rules. feature in beta test. submit a ticket or contact smart customer service if needed.
 * @method void setClientAttestationRules(ClientAttestationRules $ClientAttestationRules) Set Definition list of client authentication rules. feature in beta test. submit a ticket or contact smart customer service if needed.
 */
class BotManagement extends AbstractModel
{
    /**
     * @var ClientAttestationRules Definition list of client authentication rules. feature in beta test. submit a ticket or contact smart customer service if needed.
     */
    public $ClientAttestationRules;

    /**
     * @param ClientAttestationRules $ClientAttestationRules Definition list of client authentication rules. feature in beta test. submit a ticket or contact smart customer service if needed.
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
        if (array_key_exists("ClientAttestationRules",$param) and $param["ClientAttestationRules"] !== null) {
            $this->ClientAttestationRules = new ClientAttestationRules();
            $this->ClientAttestationRules->deserialize($param["ClientAttestationRules"]);
        }
    }
}
