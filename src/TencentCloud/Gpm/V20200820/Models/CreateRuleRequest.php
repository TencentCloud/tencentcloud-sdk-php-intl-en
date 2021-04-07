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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRule request structure.
 *
 * @method string getRuleName() Obtain Rule name. It can contain up to 128 bytes, supporting [a-zA-Z0-9-\.]*.
 * @method void setRuleName(string $RuleName) Set Rule name. It can contain up to 128 bytes, supporting [a-zA-Z0-9-\.]*.
 * @method string getRuleScript() Obtain Rule script. Up to 65535 bytes are allowed.
 * @method void setRuleScript(string $RuleScript) Set Rule script. Up to 65535 bytes are allowed.
 * @method string getRuleDesc() Obtain Rule description. Up to 1024 bytes are allowed.
 * @method void setRuleDesc(string $RuleDesc) Set Rule description. Up to 1024 bytes are allowed.
 * @method array getTags() Obtain Tag. It is an array of key-value structure. Up to 50 tags can be associated.
 * @method void setTags(array $Tags) Set Tag. It is an array of key-value structure. Up to 50 tags can be associated.
 */
class CreateRuleRequest extends AbstractModel
{
    /**
     * @var string Rule name. It can contain up to 128 bytes, supporting [a-zA-Z0-9-\.]*.
     */
    public $RuleName;

    /**
     * @var string Rule script. Up to 65535 bytes are allowed.
     */
    public $RuleScript;

    /**
     * @var string Rule description. Up to 1024 bytes are allowed.
     */
    public $RuleDesc;

    /**
     * @var array Tag. It is an array of key-value structure. Up to 50 tags can be associated.
     */
    public $Tags;

    /**
     * @param string $RuleName Rule name. It can contain up to 128 bytes, supporting [a-zA-Z0-9-\.]*.
     * @param string $RuleScript Rule script. Up to 65535 bytes are allowed.
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleScript",$param) and $param["RuleScript"] !== null) {
            $this->RuleScript = $param["RuleScript"];
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
