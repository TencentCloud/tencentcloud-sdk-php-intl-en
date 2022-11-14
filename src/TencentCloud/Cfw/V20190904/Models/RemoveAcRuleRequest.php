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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveAcRule request structure.
 *
 * @method integer getRuleUuid() Obtain UUID of the rule, which can be obtained by querying the rule list
 * @method void setRuleUuid(integer $RuleUuid) Set UUID of the rule, which can be obtained by querying the rule list
 */
class RemoveAcRuleRequest extends AbstractModel
{
    /**
     * @var integer UUID of the rule, which can be obtained by querying the rule list
     */
    public $RuleUuid;

    /**
     * @param integer $RuleUuid UUID of the rule, which can be obtained by querying the rule list
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
        if (array_key_exists("RuleUuid",$param) and $param["RuleUuid"] !== null) {
            $this->RuleUuid = $param["RuleUuid"];
        }
    }
}
