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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityRuleId request structure.
 *
 * @method array getRuleIdList() Obtain Array of rule IDs.
 * @method void setRuleIdList(array $RuleIdList) Set Array of rule IDs.
 * @method string getRuleType() Obtain Rule type. Values:
<li>`waf`: Web managed rules</li>
<li>`acl`: Custom rules</li>
<li>`rate`: Rate limiting rules</li>
<li>`bot`: Bot managed rules</li>
 * @method void setRuleType(string $RuleType) Set Rule type. Values:
<li>`waf`: Web managed rules</li>
<li>`acl`: Custom rules</li>
<li>`rate`: Rate limiting rules</li>
<li>`bot`: Bot managed rules</li>
 * @method string getEntity() Obtain The subdomain name/layer-4 proxy.
 * @method void setEntity(string $Entity) Set The subdomain name/layer-4 proxy.
 */
class DescribeSecurityRuleIdRequest extends AbstractModel
{
    /**
     * @var array Array of rule IDs.
     */
    public $RuleIdList;

    /**
     * @var string Rule type. Values:
<li>`waf`: Web managed rules</li>
<li>`acl`: Custom rules</li>
<li>`rate`: Rate limiting rules</li>
<li>`bot`: Bot managed rules</li>
     */
    public $RuleType;

    /**
     * @var string The subdomain name/layer-4 proxy.
     */
    public $Entity;

    /**
     * @param array $RuleIdList Array of rule IDs.
     * @param string $RuleType Rule type. Values:
<li>`waf`: Web managed rules</li>
<li>`acl`: Custom rules</li>
<li>`rate`: Rate limiting rules</li>
<li>`bot`: Bot managed rules</li>
     * @param string $Entity The subdomain name/layer-4 proxy.
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
        if (array_key_exists("RuleIdList",$param) and $param["RuleIdList"] !== null) {
            $this->RuleIdList = $param["RuleIdList"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }
    }
}
