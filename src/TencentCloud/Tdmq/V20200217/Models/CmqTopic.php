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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Display field of the returned CMQ topic information
 *
 * @method string getTopicId() Obtain Topic ID.
 * @method void setTopicId(string $TopicId) Set Topic ID.
 * @method string getTopicName() Obtain Topic name.
 * @method void setTopicName(string $TopicName) Set Topic name.
 * @method integer getMsgRetentionSeconds() Obtain Maximum lifetime of messages in a topic. After the time specified by this parameter has elapsed since sending to this topic, the message will be deleted whether or not it has been successfully pushed to the user. Measured in seconds and fixed at one day (86,400 seconds). This attribute cannot be modified.
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) Set Maximum lifetime of messages in a topic. After the time specified by this parameter has elapsed since sending to this topic, the message will be deleted whether or not it has been successfully pushed to the user. Measured in seconds and fixed at one day (86,400 seconds). This attribute cannot be modified.
 * @method integer getMaxMsgSize() Obtain Maximum message length. value range: 1024-1048576 bytes (1-1024 kb). default value: 1048576.
 * @method void setMaxMsgSize(integer $MaxMsgSize) Set Maximum message length. value range: 1024-1048576 bytes (1-1024 kb). default value: 1048576.
 * @method integer getQps() Obtain Number of messages published per second.
 * @method void setQps(integer $Qps) Set Number of messages published per second.
 * @method integer getFilterType() Obtain Describes the filtering policy selected by users when creating subscriptions.
FilterType = 1 means when users use Tag filtering with FilterTag.
FilterType = 2 indicates user use BindingKey for filtering.
 * @method void setFilterType(integer $FilterType) Set Describes the filtering policy selected by users when creating subscriptions.
FilterType = 1 means when users use Tag filtering with FilterTag.
FilterType = 2 indicates user use BindingKey for filtering.
 * @method integer getCreateTime() Obtain Topic creation time. Returns a Unix timestamp, accurate to milliseconds.
 * @method void setCreateTime(integer $CreateTime) Set Topic creation time. Returns a Unix timestamp, accurate to milliseconds.
 * @method integer getLastModifyTime() Obtain The last time the topic attribute was modified. Returns a Unix timestamp, accurate to milliseconds.
 * @method void setLastModifyTime(integer $LastModifyTime) Set The last time the topic attribute was modified. Returns a Unix timestamp, accurate to milliseconds.
 * @method integer getMsgCount() Obtain Number of messages in the current topic (message backlog).
 * @method void setMsgCount(integer $MsgCount) Set Number of messages in the current topic (message backlog).
 * @method integer getCreateUin() Obtain Creator `Uin`. The `resource` field for CAM authentication is composed of this field.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateUin(integer $CreateUin) Set Creator `Uin`. The `resource` field for CAM authentication is composed of this field.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Associated tag.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Associated tag.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method boolean getTrace() Obtain Message trace. true: enabled; false: not enabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTrace(boolean $Trace) Set Message trace. true: enabled; false: not enabled
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTenantId() Obtain Tenant ID
 * @method void setTenantId(string $TenantId) Set Tenant ID
 * @method string getNamespaceName() Obtain Specifies the namespace name.
 * @method void setNamespaceName(string $NamespaceName) Set Specifies the namespace name.
 * @method integer getStatus() Obtain Cluster status. 0: Creating, 1: Normal, 2: Deleting, 3: Deleted, 4: Isolating, 5: Creation failed, 6: Deletion failed
 * @method void setStatus(integer $Status) Set Cluster status. 0: Creating, 1: Normal, 2: Deleting, 3: Deleted, 4: Isolating, 5: Creation failed, 6: Deletion failed
 * @method integer getBrokerType() Obtain 0: Pulsar, 1: RocketMQ
 * @method void setBrokerType(integer $BrokerType) Set 0: Pulsar, 1: RocketMQ
 * @method integer getSubscriptionCount() Obtain Number of Subscriptions
 * @method void setSubscriptionCount(integer $SubscriptionCount) Set Number of Subscriptions
 */
class CmqTopic extends AbstractModel
{
    /**
     * @var string Topic ID.
     */
    public $TopicId;

    /**
     * @var string Topic name.
     */
    public $TopicName;

    /**
     * @var integer Maximum lifetime of messages in a topic. After the time specified by this parameter has elapsed since sending to this topic, the message will be deleted whether or not it has been successfully pushed to the user. Measured in seconds and fixed at one day (86,400 seconds). This attribute cannot be modified.
     */
    public $MsgRetentionSeconds;

    /**
     * @var integer Maximum message length. value range: 1024-1048576 bytes (1-1024 kb). default value: 1048576.
     */
    public $MaxMsgSize;

    /**
     * @var integer Number of messages published per second.
     */
    public $Qps;

    /**
     * @var integer Describes the filtering policy selected by users when creating subscriptions.
FilterType = 1 means when users use Tag filtering with FilterTag.
FilterType = 2 indicates user use BindingKey for filtering.
     */
    public $FilterType;

    /**
     * @var integer Topic creation time. Returns a Unix timestamp, accurate to milliseconds.
     */
    public $CreateTime;

    /**
     * @var integer The last time the topic attribute was modified. Returns a Unix timestamp, accurate to milliseconds.
     */
    public $LastModifyTime;

    /**
     * @var integer Number of messages in the current topic (message backlog).
     */
    public $MsgCount;

    /**
     * @var integer Creator `Uin`. The `resource` field for CAM authentication is composed of this field.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateUin;

    /**
     * @var array Associated tag.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var boolean Message trace. true: enabled; false: not enabled
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Trace;

    /**
     * @var string Tenant ID
     */
    public $TenantId;

    /**
     * @var string Specifies the namespace name.
     */
    public $NamespaceName;

    /**
     * @var integer Cluster status. 0: Creating, 1: Normal, 2: Deleting, 3: Deleted, 4: Isolating, 5: Creation failed, 6: Deletion failed
     */
    public $Status;

    /**
     * @var integer 0: Pulsar, 1: RocketMQ
     */
    public $BrokerType;

    /**
     * @var integer Number of Subscriptions
     */
    public $SubscriptionCount;

    /**
     * @param string $TopicId Topic ID.
     * @param string $TopicName Topic name.
     * @param integer $MsgRetentionSeconds Maximum lifetime of messages in a topic. After the time specified by this parameter has elapsed since sending to this topic, the message will be deleted whether or not it has been successfully pushed to the user. Measured in seconds and fixed at one day (86,400 seconds). This attribute cannot be modified.
     * @param integer $MaxMsgSize Maximum message length. value range: 1024-1048576 bytes (1-1024 kb). default value: 1048576.
     * @param integer $Qps Number of messages published per second.
     * @param integer $FilterType Describes the filtering policy selected by users when creating subscriptions.
FilterType = 1 means when users use Tag filtering with FilterTag.
FilterType = 2 indicates user use BindingKey for filtering.
     * @param integer $CreateTime Topic creation time. Returns a Unix timestamp, accurate to milliseconds.
     * @param integer $LastModifyTime The last time the topic attribute was modified. Returns a Unix timestamp, accurate to milliseconds.
     * @param integer $MsgCount Number of messages in the current topic (message backlog).
     * @param integer $CreateUin Creator `Uin`. The `resource` field for CAM authentication is composed of this field.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Associated tag.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $Trace Message trace. true: enabled; false: not enabled
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TenantId Tenant ID
     * @param string $NamespaceName Specifies the namespace name.
     * @param integer $Status Cluster status. 0: Creating, 1: Normal, 2: Deleting, 3: Deleted, 4: Isolating, 5: Creation failed, 6: Deletion failed
     * @param integer $BrokerType 0: Pulsar, 1: RocketMQ
     * @param integer $SubscriptionCount Number of Subscriptions
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

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BrokerType",$param) and $param["BrokerType"] !== null) {
            $this->BrokerType = $param["BrokerType"];
        }

        if (array_key_exists("SubscriptionCount",$param) and $param["SubscriptionCount"] !== null) {
            $this->SubscriptionCount = $param["SubscriptionCount"];
        }
    }
}
