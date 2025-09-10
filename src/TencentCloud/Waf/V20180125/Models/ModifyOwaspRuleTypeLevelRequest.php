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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyOwaspRuleTypeLevel request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method array getTypeIDs() Obtain Rule type ID list.
 * @method void setTypeIDs(array $TypeIDs) Set Rule type ID list.
 * @method integer getRuleTypeLevel() Obtain Protection level of the rule. valid values: 100 (loose), 200 (normal), 300 (strict), 400 (ultra-strict).
 * @method void setRuleTypeLevel(integer $RuleTypeLevel) Set Protection level of the rule. valid values: 100 (loose), 200 (normal), 300 (strict), 400 (ultra-strict).
 */
class ModifyOwaspRuleTypeLevelRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var array Rule type ID list.
     */
    public $TypeIDs;

    /**
     * @var integer Protection level of the rule. valid values: 100 (loose), 200 (normal), 300 (strict), 400 (ultra-strict).
     */
    public $RuleTypeLevel;

    /**
     * @param string $Domain Domain name
     * @param array $TypeIDs Rule type ID list.
     * @param integer $RuleTypeLevel Protection level of the rule. valid values: 100 (loose), 200 (normal), 300 (strict), 400 (ultra-strict).
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("TypeIDs",$param) and $param["TypeIDs"] !== null) {
            $this->TypeIDs = $param["TypeIDs"];
        }

        if (array_key_exists("RuleTypeLevel",$param) and $param["RuleTypeLevel"] !== null) {
            $this->RuleTypeLevel = $param["RuleTypeLevel"];
        }
    }
}
