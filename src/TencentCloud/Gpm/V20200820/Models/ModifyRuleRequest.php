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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRule request structure.
 *
 * @method string getRuleCode() Obtain RuleCode
 * @method void setRuleCode(string $RuleCode) Set RuleCode
 * @method string getRuleName() Obtain Rule name. It can only contain numbers, letters, ".", and "-".
 * @method void setRuleName(string $RuleName) Set Rule name. It can only contain numbers, letters, ".", and "-".
 * @method string getRuleDesc() Obtain Rule description. Up to 1024 bytes are allowed.
 * @method void setRuleDesc(string $RuleDesc) Set Rule description. Up to 1024 bytes are allowed.
 * @method array getTags() Obtain Tag. It is an array of key-value structure. Up to 50 tags can be associated.
 * @method void setTags(array $Tags) Set Tag. It is an array of key-value structure. Up to 50 tags can be associated.
 */
class ModifyRuleRequest extends AbstractModel
{
    /**
     * @var string RuleCode
     */
    public $RuleCode;

    /**
     * @var string Rule name. It can only contain numbers, letters, ".", and "-".
     */
    public $RuleName;

    /**
     * @var string Rule description. Up to 1024 bytes are allowed.
     */
    public $RuleDesc;

    /**
     * @var array Tag. It is an array of key-value structure. Up to 50 tags can be associated.
     */
    public $Tags;

    /**
     * @param string $RuleCode RuleCode
     * @param string $RuleName Rule name. It can only contain numbers, letters, ".", and "-".
     * @param string $RuleDesc Rule description. Up to 1024 bytes are allowed.
     * @param array $Tags Tag. It is an array of key-value structure. Up to 50 tags can be associated.
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
        if (array_key_exists("RuleCode",$param) and $param["RuleCode"] !== null) {
            $this->RuleCode = $param["RuleCode"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleDesc",$param) and $param["RuleDesc"] !== null) {
            $this->RuleDesc = $param["RuleDesc"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
