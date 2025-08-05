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
 * DeleteSecurityJSInjectionRule request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method array getJSInjectionRuleIds() Obtain JavaScript injection rule ID list.
 * @method void setJSInjectionRuleIds(array $JSInjectionRuleIds) Set JavaScript injection rule ID list.
 */
class DeleteSecurityJSInjectionRuleRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var array JavaScript injection rule ID list.
     */
    public $JSInjectionRuleIds;

    /**
     * @param string $ZoneId Zone ID.
     * @param array $JSInjectionRuleIds JavaScript injection rule ID list.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("JSInjectionRuleIds",$param) and $param["JSInjectionRuleIds"] !== null) {
            $this->JSInjectionRuleIds = $param["JSInjectionRuleIds"];
        }
    }
}
