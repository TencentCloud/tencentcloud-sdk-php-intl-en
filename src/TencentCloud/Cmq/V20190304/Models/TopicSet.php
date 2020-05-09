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
namespace TencentCloud\Cmq\V20190304\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Field for displaying returned topic information
 *
 * @method string getTopicId() Obtain TopicId
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicId(string $TopicId) Set TopicId
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTopicName() Obtain TopicName
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicName(string $TopicName) Set TopicName
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMsgRetentionSeconds() Obtain MsgRetentionSeconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) Set MsgRetentionSeconds
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxMsgSize() Obtain MaxMsgSize
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxMsgSize(integer $MaxMsgSize) Set MaxMsgSize
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getQps() Obtain Qps
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setQps(integer $Qps) Set Qps
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getFilterType() Obtain FilterType
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFilterType(integer $FilterType) Set FilterType
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain CreateTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set CreateTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getLastModifyTime() Obtain LastModifyTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastModifyTime(integer $LastModifyTime) Set LastModifyTime
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMsgCount() Obtain MsgCount
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgCount(integer $MsgCount) Set MsgCount
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateUin() Obtain CreateUin
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUin(integer $CreateUin) Set CreateUin
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tags
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tags
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getTrace() Obtain Whether to enable message trace for a topic. true: yes, false: no
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTrace(boolean $Trace) Set Whether to enable message trace for a topic. true: yes, false: no
Note: this field may return null, indicating that no valid values can be obtained.
 */
class TopicSet extends AbstractModel
{
    /**
     * @var string TopicId
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicId;

    /**
     * @var string TopicName
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicName;

    /**
     * @var integer MsgRetentionSeconds
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MsgRetentionSeconds;

    /**
     * @var integer MaxMsgSize
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxMsgSize;

    /**
     * @var integer Qps
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Qps;

    /**
     * @var integer FilterType
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FilterType;

    /**
     * @var integer CreateTime
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer LastModifyTime
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastModifyTime;

    /**
     * @var integer MsgCount
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MsgCount;

    /**
     * @var integer CreateUin
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUin;

    /**
     * @var array Tags
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var boolean Whether to enable message trace for a topic. true: yes, false: no
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Trace;

    /**
     * @param string $TopicId TopicId
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TopicName TopicName
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MsgRetentionSeconds MsgRetentionSeconds
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxMsgSize MaxMsgSize
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Qps Qps
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $FilterType FilterType
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime CreateTime
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $LastModifyTime LastModifyTime
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MsgCount MsgCount
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateUin CreateUin
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tags
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $Trace Whether to enable message trace for a topic. true: yes, false: no
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MsgRetentionSeconds",$param) and $param["MsgRetentionSeconds"] !== null) {
            $this->MsgRetentionSeconds = $param["MsgRetentionSeconds"];
        }

        if (array_key_exists("MaxMsgSize",$param) and $param["MaxMsgSize"] !== null) {
            $this->MaxMsgSize = $param["MaxMsgSize"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastModifyTime",$param) and $param["LastModifyTime"] !== null) {
            $this->LastModifyTime = $param["LastModifyTime"];
        }

        if (array_key_exists("MsgCount",$param) and $param["MsgCount"] !== null) {
            $this->MsgCount = $param["MsgCount"];
        }

        if (array_key_exists("CreateUin",$param) and $param["CreateUin"] !== null) {
            $this->CreateUin = $param["CreateUin"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Trace",$param) and $param["Trace"] !== null) {
            $this->Trace = $param["Trace"];
        }
    }
}
