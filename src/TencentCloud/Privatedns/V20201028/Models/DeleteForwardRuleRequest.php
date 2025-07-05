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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteForwardRule request structure.
 *
 * @method array getRuleIdSet() Obtain Array of forwarding rule IDs.
 * @method void setRuleIdSet(array $RuleIdSet) Set Array of forwarding rule IDs.
 */
class DeleteForwardRuleRequest extends AbstractModel
{
    /**
     * @var array Array of forwarding rule IDs.
     */
    public $RuleIdSet;

    /**
     * @param array $RuleIdSet Array of forwarding rule IDs.
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
        if (array_key_exists("RuleIdSet",$param) and $param["RuleIdSet"] !== null) {
            $this->RuleIdSet = $param["RuleIdSet"];
        }
    }
}
