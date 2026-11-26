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
 * Effective scope of the exception rule.
 *
 * @method string getType() Obtain Exception rule type. Among them, complete mode represents exceptions for full data, while partial mode represents selecting specified modules and specified fields for exceptions. The field values include:
<li>complete: skip entirely mode;</li>
<li>partial: Partially skip mode.</li>
 * @method void setType(string $Type) Set Exception rule type. Among them, complete mode represents exceptions for full data, while partial mode represents selecting specified modules and specified fields for exceptions. The field values include:
<li>complete: skip entirely mode;</li>
<li>partial: Partially skip mode.</li>
 * @method array getModules() Obtain Effective module. Valid values:
<li>waf: managed rules;</li>
<li>rate: rate limit;</li>
<li>acl: custom rule;</li>
<li>cc: CC attack defense;</li>
<li>bot: bot protection.</li>
 * @method void setModules(array $Modules) Set Effective module. Valid values:
<li>waf: managed rules;</li>
<li>rate: rate limit;</li>
<li>acl: custom rule;</li>
<li>cc: CC attack defense;</li>
<li>bot: bot protection.</li>
 * @method array getPartialModules() Obtain Skip the exception rule details of some rule IDs. If it is null, use the last set configuration by default.
 * @method void setPartialModules(array $PartialModules) Set Skip the exception rule details of some rule IDs. If it is null, use the last set configuration by default.
 * @method array getSkipConditions() Obtain Exception rule details for skipping specific fields during scan. If null, use the last set configuration by default.
 * @method void setSkipConditions(array $SkipConditions) Set Exception rule details for skipping specific fields during scan. If null, use the last set configuration by default.
 */
class ExceptUserRuleScope extends AbstractModel
{
    /**
     * @var string Exception rule type. Among them, complete mode represents exceptions for full data, while partial mode represents selecting specified modules and specified fields for exceptions. The field values include:
<li>complete: skip entirely mode;</li>
<li>partial: Partially skip mode.</li>
     */
    public $Type;

    /**
     * @var array Effective module. Valid values:
<li>waf: managed rules;</li>
<li>rate: rate limit;</li>
<li>acl: custom rule;</li>
<li>cc: CC attack defense;</li>
<li>bot: bot protection.</li>
     */
    public $Modules;

    /**
     * @var array Skip the exception rule details of some rule IDs. If it is null, use the last set configuration by default.
     */
    public $PartialModules;

    /**
     * @var array Exception rule details for skipping specific fields during scan. If null, use the last set configuration by default.
     */
    public $SkipConditions;

    /**
     * @param string $Type Exception rule type. Among them, complete mode represents exceptions for full data, while partial mode represents selecting specified modules and specified fields for exceptions. The field values include:
<li>complete: skip entirely mode;</li>
<li>partial: Partially skip mode.</li>
     * @param array $Modules Effective module. Valid values:
<li>waf: managed rules;</li>
<li>rate: rate limit;</li>
<li>acl: custom rule;</li>
<li>cc: CC attack defense;</li>
<li>bot: bot protection.</li>
     * @param array $PartialModules Skip the exception rule details of some rule IDs. If it is null, use the last set configuration by default.
     * @param array $SkipConditions Exception rule details for skipping specific fields during scan. If null, use the last set configuration by default.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Modules",$param) and $param["Modules"] !== null) {
            $this->Modules = $param["Modules"];
        }

        if (array_key_exists("PartialModules",$param) and $param["PartialModules"] !== null) {
            $this->PartialModules = [];
            foreach ($param["PartialModules"] as $key => $value){
                $obj = new PartialModule();
                $obj->deserialize($value);
                array_push($this->PartialModules, $obj);
            }
        }

        if (array_key_exists("SkipConditions",$param) and $param["SkipConditions"] !== null) {
            $this->SkipConditions = [];
            foreach ($param["SkipConditions"] as $key => $value){
                $obj = new SkipCondition();
                $obj->deserialize($value);
                array_push($this->SkipConditions, $obj);
            }
        }
    }
}
