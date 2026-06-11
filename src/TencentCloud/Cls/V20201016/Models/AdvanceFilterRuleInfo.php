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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Advanced filtering rule.
 *
 * @method string getKey() Obtain Filter fields
 * @method void setKey(string $Key) Set Filter fields
 * @method integer getRule() Obtain Filtering rule. 0: equal to; 1: the field exists; 2 the field does not exist.
 * @method void setRule(integer $Rule) Set Filtering rule. 0: equal to; 1: the field exists; 2 the field does not exist.
 * @method string getValue() Obtain Values after filtering
 * @method void setValue(string $Value) Set Values after filtering
 */
class AdvanceFilterRuleInfo extends AbstractModel
{
    /**
     * @var string Filter fields
     */
    public $Key;

    /**
     * @var integer Filtering rule. 0: equal to; 1: the field exists; 2 the field does not exist.
     */
    public $Rule;

    /**
     * @var string Values after filtering
     */
    public $Value;

    /**
     * @param string $Key Filter fields
     * @param integer $Rule Filtering rule. 0: equal to; 1: the field exists; 2 the field does not exist.
     * @param string $Value Values after filtering
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
