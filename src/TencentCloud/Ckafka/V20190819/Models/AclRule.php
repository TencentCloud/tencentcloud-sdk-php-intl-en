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
 * Output parameters of ACL rule list APIs
 *
 * @method string getRuleName() Obtain ACL rule name.
 * @method void setRuleName(string $RuleName) Set ACL rule name.
 * @method string getInstanceId() Obtain The ckafka cluster instance Id.
 * @method void setInstanceId(string $InstanceId) Set The ckafka cluster instance Id.
 * @method string getPatternType() Obtain ACL rule-based matching type. currently only supports prefix match. valid values: PREFIXED.
 * @method void setPatternType(string $PatternType) Set ACL rule-based matching type. currently only supports prefix match. valid values: PREFIXED.
 * @method string getPattern() Obtain Indicates the prefix value for prefix match.
 * @method void setPattern(string $Pattern) Set Indicates the prefix value for prefix match.
 * @method string getResourceType() Obtain Acl resource type, currently only support Topic. valid values: Topic.
 * @method void setResourceType(string $ResourceType) Set Acl resource type, currently only support Topic. valid values: Topic.
 * @method string getAclList() Obtain Specifies the ACL information contained in the rule.
 * @method void setAclList(string $AclList) Set Specifies the ACL information contained in the rule.
 * @method string getCreateTimeStamp() Obtain Specifies the time when the rule was created.
 * @method void setCreateTimeStamp(string $CreateTimeStamp) Set Specifies the time when the rule was created.
 * @method integer getIsApplied() Obtain Specifies whether to apply the preset ACL rule to newly-added topics.
 * @method void setIsApplied(integer $IsApplied) Set Specifies whether to apply the preset ACL rule to newly-added topics.
 * @method string getUpdateTimeStamp() Obtain Rule update time.
 * @method void setUpdateTimeStamp(string $UpdateTimeStamp) Set Rule update time.
 * @method string getComment() Obtain Specifies the remark of the rule.
 * @method void setComment(string $Comment) Set Specifies the remark of the rule.
 * @method string getTopicName() Obtain One of the displayed corresponding TopicName.
 * @method void setTopicName(string $TopicName) Set One of the displayed corresponding TopicName.
 * @method integer getTopicCount() Obtain Number of topics to which the ACL rule is applied.
 * @method void setTopicCount(integer $TopicCount) Set Number of topics to which the ACL rule is applied.
 * @method string getPatternTypeTitle() Obtain Specifies the pattern type.
 * @method void setPatternTypeTitle(string $PatternTypeTitle) Set Specifies the pattern type.
 */
class AclRule extends AbstractModel
{
    /**
     * @var string ACL rule name.
     */
    public $RuleName;

    /**
     * @var string The ckafka cluster instance Id.
     */
    public $InstanceId;

    /**
     * @var string ACL rule-based matching type. currently only supports prefix match. valid values: PREFIXED.
     */
    public $PatternType;

    /**
     * @var string Indicates the prefix value for prefix match.
     */
    public $Pattern;

    /**
     * @var string Acl resource type, currently only support Topic. valid values: Topic.
     */
    public $ResourceType;

    /**
     * @var string Specifies the ACL information contained in the rule.
     */
    public $AclList;

    /**
     * @var string Specifies the time when the rule was created.
     */
    public $CreateTimeStamp;

    /**
     * @var integer Specifies whether to apply the preset ACL rule to newly-added topics.
     */
    public $IsApplied;

    /**
     * @var string Rule update time.
     */
    public $UpdateTimeStamp;

    /**
     * @var string Specifies the remark of the rule.
     */
    public $Comment;

    /**
     * @var string One of the displayed corresponding TopicName.
     */
    public $TopicName;

    /**
     * @var integer Number of topics to which the ACL rule is applied.
     */
    public $TopicCount;

    /**
     * @var string Specifies the pattern type.
     */
    public $PatternTypeTitle;

    /**
     * @param string $RuleName ACL rule name.
     * @param string $InstanceId The ckafka cluster instance Id.
     * @param string $PatternType ACL rule-based matching type. currently only supports prefix match. valid values: PREFIXED.
     * @param string $Pattern Indicates the prefix value for prefix match.
     * @param string $ResourceType Acl resource type, currently only support Topic. valid values: Topic.
     * @param string $AclList Specifies the ACL information contained in the rule.
     * @param string $CreateTimeStamp Specifies the time when the rule was created.
     * @param integer $IsApplied Specifies whether to apply the preset ACL rule to newly-added topics.
     * @param string $UpdateTimeStamp Rule update time.
     * @param string $Comment Specifies the remark of the rule.
     * @param string $TopicName One of the displayed corresponding TopicName.
     * @param integer $TopicCount Number of topics to which the ACL rule is applied.
     * @param string $PatternTypeTitle Specifies the pattern type.
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PatternType",$param) and $param["PatternType"] !== null) {
            $this->PatternType = $param["PatternType"];
        }

        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("AclList",$param) and $param["AclList"] !== null) {
            $this->AclList = $param["AclList"];
        }

        if (array_key_exists("CreateTimeStamp",$param) and $param["CreateTimeStamp"] !== null) {
            $this->CreateTimeStamp = $param["CreateTimeStamp"];
        }

        if (array_key_exists("IsApplied",$param) and $param["IsApplied"] !== null) {
            $this->IsApplied = $param["IsApplied"];
        }

        if (array_key_exists("UpdateTimeStamp",$param) and $param["UpdateTimeStamp"] !== null) {
            $this->UpdateTimeStamp = $param["UpdateTimeStamp"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("TopicCount",$param) and $param["TopicCount"] !== null) {
            $this->TopicCount = $param["TopicCount"];
        }

        if (array_key_exists("PatternTypeTitle",$param) and $param["PatternTypeTitle"] !== null) {
            $this->PatternTypeTitle = $param["PatternTypeTitle"];
        }
    }
}
