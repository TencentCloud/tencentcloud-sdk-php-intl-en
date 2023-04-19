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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAclRule request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getRuleName() Obtain ACL rule name
 * @method void setRuleName(string $RuleName) Set ACL rule name
 * @method string getPatternType() Obtain ACL rule matching type
 * @method void setPatternType(string $PatternType) Set ACL rule matching type
 * @method boolean getIsSimplified() Obtain Whether to read simplified ACL rules
 * @method void setIsSimplified(boolean $IsSimplified) Set Whether to read simplified ACL rules
 */
class DescribeAclRuleRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string ACL rule name
     */
    public $RuleName;

    /**
     * @var string ACL rule matching type
     */
    public $PatternType;

    /**
     * @var boolean Whether to read simplified ACL rules
     */
    public $IsSimplified;

    /**
     * @param string $InstanceId Instance ID
     * @param string $RuleName ACL rule name
     * @param string $PatternType ACL rule matching type
     * @param boolean $IsSimplified Whether to read simplified ACL rules
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
