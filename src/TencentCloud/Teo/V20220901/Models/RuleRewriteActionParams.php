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
 * Action parameter for HTTP request/response header operations in rule engine conditions.
 *
 * @method string getAction() Obtain For feature parameter names and completion specifications, call the API to query the rule engine's parameter settings (https://www.tencentcloud.com/document/product/1552/80618?from_cn_redirect=1). Currently, only three values are supported:
<li> add: Add an HTTP header;</li>
<li> set: rewrite HTTP header;</li>
<li> del: delete an HTTP header.</li>
 * @method void setAction(string $Action) Set For feature parameter names and completion specifications, call the API to query the rule engine's parameter settings (https://www.tencentcloud.com/document/product/1552/80618?from_cn_redirect=1). Currently, only three values are supported:
<li> add: Add an HTTP header;</li>
<li> set: rewrite HTTP header;</li>
<li> del: delete an HTTP header.</li>
 * @method string getName() Obtain Parameter name.
 * @method void setName(string $Name) Set Parameter name.
 * @method array getValues() Obtain Parameter value.
 * @method void setValues(array $Values) Set Parameter value.
 */
class RuleRewriteActionParams extends AbstractModel
{
    /**
     * @var string For feature parameter names and completion specifications, call the API to query the rule engine's parameter settings (https://www.tencentcloud.com/document/product/1552/80618?from_cn_redirect=1). Currently, only three values are supported:
<li> add: Add an HTTP header;</li>
<li> set: rewrite HTTP header;</li>
<li> del: delete an HTTP header.</li>
     */
    public $Action;

    /**
     * @var string Parameter name.
     */
    public $Name;

    /**
     * @var array Parameter value.
     */
    public $Values;

    /**
     * @param string $Action For feature parameter names and completion specifications, call the API to query the rule engine's parameter settings (https://www.tencentcloud.com/document/product/1552/80618?from_cn_redirect=1). Currently, only three values are supported:
<li> add: Add an HTTP header;</li>
<li> set: rewrite HTTP header;</li>
<li> del: delete an HTTP header.</li>
     * @param string $Name Parameter name.
     * @param array $Values Parameter value.
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
