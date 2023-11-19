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
 * Rule engine action with a status code
 *
 * @method string getAction() Obtain Feature name. For details, see [DescribeRulesSetting](https://intl.cloud.tencent.com/document/product/1552/80618?from_cn_redirect=1) API
 * @method void setAction(string $Action) Set Feature name. For details, see [DescribeRulesSetting](https://intl.cloud.tencent.com/document/product/1552/80618?from_cn_redirect=1) API
 * @method array getParameters() Obtain Operation parameter.
 * @method void setParameters(array $Parameters) Set Operation parameter.
 */
class CodeAction extends AbstractModel
{
    /**
     * @var string Feature name. For details, see [DescribeRulesSetting](https://intl.cloud.tencent.com/document/product/1552/80618?from_cn_redirect=1) API
     */
    public $Action;

    /**
     * @var array Operation parameter.
     */
    public $Parameters;

    /**
     * @param string $Action Feature name. For details, see [DescribeRulesSetting](https://intl.cloud.tencent.com/document/product/1552/80618?from_cn_redirect=1) API
     * @param array $Parameters Operation parameter.
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

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new RuleCodeActionParams();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }
    }
}
