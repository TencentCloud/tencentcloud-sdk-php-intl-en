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
 * CreateAclRule request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getResourceType() Obtain ACL resource type. Currently, the only valid value is `Topic`.
 * @method void setResourceType(string $ResourceType) Set ACL resource type. Currently, the only valid value is `Topic`.
 * @method string getPatternType() Obtain Matching type. Valid values: `PREFIXED`(match by prefix), `PRESET` (match by preset policy).
 * @method void setPatternType(string $PatternType) Set Matching type. Valid values: `PREFIXED`(match by prefix), `PRESET` (match by preset policy).
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method array getRuleList() Obtain ACL rule list
 * @method void setRuleList(array $RuleList) Set ACL rule list
 * @method string getPattern() Obtain Prefix value for prefix match
 * @method void setPattern(string $Pattern) Set Prefix value for prefix match
 * @method integer getIsApplied() Obtain A parameter used to specify whether the preset ACL rule is applied to new topics
 * @method void setIsApplied(integer $IsApplied) Set A parameter used to specify whether the preset ACL rule is applied to new topics
 * @method string getComment() Obtain Remarks for ACL rules
 * @method void setComment(string $Comment) Set Remarks for ACL rules
 */
class CreateAclRuleRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string ACL resource type. Currently, the only valid value is `Topic`.
     */
    public $ResourceType;

    /**
     * @var string Matching type. Valid values: `PREFIXED`(match by prefix), `PRESET` (match by preset policy).
     */
    public $PatternType;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var array ACL rule list
     */
    public $RuleList;

    /**
     * @var string Prefix value for prefix match
     */
    public $Pattern;

    /**
     * @var integer A parameter used to specify whether the preset ACL rule is applied to new topics
     */
    public $IsApplied;

    /**
     * @var string Remarks for ACL rules
     */
    public $Comment;

    /**
     * @param string $InstanceId Instance ID
     * @param string $ResourceType ACL resource type. Currently, the only valid value is `Topic`.
     * @param string $PatternType Matching type. Valid values: `PREFIXED`(match by prefix), `PRESET` (match by preset policy).
     * @param string $RuleName Rule name
     * @param array $RuleList ACL rule list
     * @param string $Pattern Prefix value for prefix match
     * @param integer $IsApplied A parameter used to specify whether the preset ACL rule is applied to new topics
     * @param string $Comment Remarks for ACL rules
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

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("PatternType",$param) and $param["PatternType"] !== null) {
            $this->PatternType = $param["PatternType"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new AclRuleInfo();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("IsApplied",$param) and $param["IsApplied"] !== null) {
            $this->IsApplied = $param["IsApplied"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
