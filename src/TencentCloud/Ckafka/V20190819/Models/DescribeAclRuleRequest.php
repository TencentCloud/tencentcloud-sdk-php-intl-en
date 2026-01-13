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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAclRule request structure.
 *
 * @method string getInstanceId() Obtain The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
 * @method void setInstanceId(string $InstanceId) Set The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
 * @method string getRuleName() Obtain ACL rule name
 * @method void setRuleName(string $RuleName) Set ACL rule name
 * @method string getPatternType() Obtain ACL rule-based matching type (PREFIXED: prefix match, PRESET: PRESET policy).
 * @method void setPatternType(string $PatternType) Set ACL rule-based matching type (PREFIXED: prefix match, PRESET: PRESET policy).
 * @method boolean getIsSimplified() Obtain Specifies whether to read the simplified ACL rule. default value is false, which means not to read the simplified ACL rule.
 * @method void setIsSimplified(boolean $IsSimplified) Set Specifies whether to read the simplified ACL rule. default value is false, which means not to read the simplified ACL rule.
 */
class DescribeAclRuleRequest extends AbstractModel
{
    /**
     * @var string The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
     */
    public $InstanceId;

    /**
     * @var string ACL rule name
     */
    public $RuleName;

    /**
     * @var string ACL rule-based matching type (PREFIXED: prefix match, PRESET: PRESET policy).
     */
    public $PatternType;

    /**
     * @var boolean Specifies whether to read the simplified ACL rule. default value is false, which means not to read the simplified ACL rule.
     */
    public $IsSimplified;

    /**
     * @param string $InstanceId The ckafka cluster instance Id, which can be obtained through the [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1) api.
     * @param string $RuleName ACL rule name
     * @param string $PatternType ACL rule-based matching type (PREFIXED: prefix match, PRESET: PRESET policy).
     * @param boolean $IsSimplified Specifies whether to read the simplified ACL rule. default value is false, which means not to read the simplified ACL rule.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("PatternType",$param) and $param["PatternType"] !== null) {
            $this->PatternType = $param["PatternType"];
        }

        if (array_key_exists("IsSimplified",$param) and $param["IsSimplified"] !== null) {
            $this->IsSimplified = $param["IsSimplified"];
        }
    }
}
