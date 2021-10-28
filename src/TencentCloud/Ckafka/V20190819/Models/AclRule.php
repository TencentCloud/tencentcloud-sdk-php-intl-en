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
 * Output parameters of ACL rule list APIs
 *
 * @method string getRuleName() Obtain ACL rule name.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setRuleName(string $RuleName) Set ACL rule name.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getPatternType() Obtain Matching type. Currently, only prefix match is supported. Enumerated value list: PREFIXED
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setPatternType(string $PatternType) Set Matching type. Currently, only prefix match is supported. Enumerated value list: PREFIXED
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getPattern() Obtain Prefix value for prefix match.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setPattern(string $Pattern) Set Prefix value for prefix match.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getResourceType() Obtain ACL resource type. Only “Topic” is supported. Enumerated value list: Topic.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setResourceType(string $ResourceType) Set ACL resource type. Only “Topic” is supported. Enumerated value list: Topic.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getAclList() Obtain ACL information contained in the rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setAclList(string $AclList) Set ACL information contained in the rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getCreateTimeStamp() Obtain Creation time of the rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setCreateTimeStamp(string $CreateTimeStamp) Set Creation time of the rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getIsApplied() Obtain A parameter used to specify whether the preset ACL rule is applied to new topics.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setIsApplied(integer $IsApplied) Set A parameter used to specify whether the preset ACL rule is applied to new topics.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getUpdateTimeStamp() Obtain Rule update time.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setUpdateTimeStamp(string $UpdateTimeStamp) Set Rule update time.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getComment() Obtain Remarks of the rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setComment(string $Comment) Set Remarks of the rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getTopicName() Obtain One of the corresponding topic names that is displayed.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setTopicName(string $TopicName) Set One of the corresponding topic names that is displayed.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method integer getTopicCount() Obtain The number of topics that apply this ACL rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setTopicCount(integer $TopicCount) Set The number of topics that apply this ACL rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getPatternTypeTitle() Obtain Name of rule type.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPatternTypeTitle(string $PatternTypeTitle) Set Name of rule type.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class AclRule extends AbstractModel
{
    /**
     * @var string ACL rule name.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $RuleName;

    /**
     * @var string Instance ID.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Matching type. Currently, only prefix match is supported. Enumerated value list: PREFIXED
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $PatternType;

    /**
     * @var string Prefix value for prefix match.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Pattern;

    /**
     * @var string ACL resource type. Only “Topic” is supported. Enumerated value list: Topic.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $ResourceType;

    /**
     * @var string ACL information contained in the rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $AclList;

    /**
     * @var string Creation time of the rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $CreateTimeStamp;

    /**
     * @var integer A parameter used to specify whether the preset ACL rule is applied to new topics.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $IsApplied;

    /**
     * @var string Rule update time.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $UpdateTimeStamp;

    /**
     * @var string Remarks of the rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Comment;

    /**
     * @var string One of the corresponding topic names that is displayed.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $TopicName;

    /**
     * @var integer The number of topics that apply this ACL rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $TopicCount;

    /**
     * @var string Name of rule type.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PatternTypeTitle;

    /**
     * @param string $RuleName ACL rule name.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $PatternType Matching type. Currently, only prefix match is supported. Enumerated value list: PREFIXED
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $Pattern Prefix value for prefix match.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $ResourceType ACL resource type. Only “Topic” is supported. Enumerated value list: Topic.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $AclList ACL information contained in the rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $CreateTimeStamp Creation time of the rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $IsApplied A parameter used to specify whether the preset ACL rule is applied to new topics.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $UpdateTimeStamp Rule update time.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $Comment Remarks of the rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $TopicName One of the corresponding topic names that is displayed.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param integer $TopicCount The number of topics that apply this ACL rule.
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $PatternTypeTitle Name of rule type.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
