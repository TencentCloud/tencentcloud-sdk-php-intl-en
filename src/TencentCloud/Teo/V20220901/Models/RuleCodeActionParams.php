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
 * Parameters of the action with the `StatusCode` field as the rule engine condition
 *
 * @method integer getStatusCode() Obtain The status code.
 * @method void setStatusCode(integer $StatusCode) Set The status code.
 * @method string getName() Obtain The parameter name. For details, see [DescribeRulesSetting](https://intl.cloud.tencent.com/document/product/1552/80618?from_cn_redirect=1).
 * @method void setName(string $Name) Set The parameter name. For details, see [DescribeRulesSetting](https://intl.cloud.tencent.com/document/product/1552/80618?from_cn_redirect=1).
 * @method array getValues() Obtain The parameter value.
 * @method void setValues(array $Values) Set The parameter value.
 */
class RuleCodeActionParams extends AbstractModel
{
    /**
     * @var integer The status code.
     */
    public $StatusCode;

    /**
     * @var string The parameter name. For details, see [DescribeRulesSetting](https://intl.cloud.tencent.com/document/product/1552/80618?from_cn_redirect=1).
     */
    public $Name;

    /**
     * @var array The parameter value.
     */
    public $Values;

    /**
     * @param integer $StatusCode The status code.
     * @param string $Name The parameter name. For details, see [DescribeRulesSetting](https://intl.cloud.tencent.com/document/product/1552/80618?from_cn_redirect=1).
     * @param array $Values The parameter value.
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
        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
