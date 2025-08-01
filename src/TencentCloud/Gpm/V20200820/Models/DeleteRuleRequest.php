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
 * DeleteRule request structure.
 *
 * @method string getRuleCode() Obtain RuleCode
 * @method void setRuleCode(string $RuleCode) Set RuleCode
 */
class DeleteRuleRequest extends AbstractModel
{
    /**
     * @var string RuleCode
     */
    public $RuleCode;

    /**
     * @param string $RuleCode RuleCode
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
    }
}
