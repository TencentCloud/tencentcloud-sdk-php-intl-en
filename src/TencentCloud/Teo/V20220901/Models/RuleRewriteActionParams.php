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
 * Parameter of the action for the HTTP request/response header of a rule engine condition.
 *
 * @method string getAction() Obtain Feature parameter name. For details, see [DescribeRulesSetting](https://intl.cloud.tencent.com/document/product/1552/80618?from_cn_redirect=1).
<li>`add`: Add the HTTP header.</li>
<li>`set`: Rewrite the HTTP header.</li>
<li>`del`: Delete the HTTP header.</li>
 * @method void setAction(string $Action) Set Feature parameter name. For details, see [DescribeRulesSetting](https://intl.cloud.tencent.com/document/product/1552/80618?from_cn_redirect=1).
<li>`add`: Add the HTTP header.</li>
<li>`set`: Rewrite the HTTP header.</li>
<li>`del`: Delete the HTTP header.</li>
 * @method string getName() Obtain Parameter name
 * @method void setName(string $Name) Set Parameter name
 * @method array getValues() Obtain Parameter value
 * @method void setValues(array $Values) Set Parameter value
 */
class RuleRewriteActionParams extends AbstractModel
{
    /**
     * @var string Feature parameter name. For details, see [DescribeRulesSetting](https://intl.cloud.tencent.com/document/product/1552/80618?from_cn_redirect=1).
<li>`add`: Add the HTTP header.</li>
<li>`set`: Rewrite the HTTP header.</li>
<li>`del`: Delete the HTTP header.</li>
     */
    public $Action;

    /**
     * @var string Parameter name
     */
    public $Name;

    /**
     * @var array Parameter value
     */
    public $Values;

    /**
     * @param string $Action Feature parameter name. For details, see [DescribeRulesSetting](https://intl.cloud.tencent.com/document/product/1552/80618?from_cn_redirect=1).
<li>`add`: Add the HTTP header.</li>
<li>`set`: Rewrite the HTTP header.</li>
<li>`del`: Delete the HTTP header.</li>
     * @param string $Name Parameter name
     * @param array $Values Parameter value
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
