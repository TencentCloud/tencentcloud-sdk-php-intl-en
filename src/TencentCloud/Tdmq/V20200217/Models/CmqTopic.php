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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Display field of the returned CMQ topic information
 *
 * @method string getTopicId() Obtain Topic ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicId(string $TopicId) Set Topic ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTopicName() Obtain Topic name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicName(string $TopicName) Set Topic name.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMsgRetentionSeconds() Obtain Maximum lifecycle of message in topic. After the period specified by this parameter has elapsed since a message is sent to the topic, the message will be deleted no matter whether it has been successfully pushed to the user. This parameter is measured in seconds and defaulted to one day (86,400 seconds), which cannot be modified.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgRetentionSeconds(integer $MsgRetentionSeconds) Set Maximum lifecycle of message in topic. After the period specified by this parameter has elapsed since a message is sent to the topic, the message will be deleted no matter whether it has been successfully pushed to the user. This parameter is measured in seconds and defaulted to one day (86,400 seconds), which cannot be modified.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxMsgSize() Obtain Maximum message size, which ranges from 1,024 to 1,048,576 bytes (i.e., 1–1,024 KB). The default value is 65,536.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxMsgSize(integer $MaxMsgSize) Set Maximum message size, which ranges from 1,024 to 1,048,576 bytes (i.e., 1–1,024 KB). The default value is 65,536.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getQps() Obtain Number of messages published per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setQps(integer $Qps) Set Number of messages published per second.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getFilterType() Obtain Filtering policy selected when a subscription is created:
If `filterType` is 1, `FilterTag` will be used for filtering.
If `filterType` is 2, `BindingKey` will be used for filtering.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFilterType(integer $FilterType) Set Filtering policy selected when a subscription is created:
If `filterType` is 1, `FilterTag` will be used for filtering.
If `filterType` is 2, `BindingKey` will be used for filtering.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Topic creation time. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCreateTime(integer $CreateTime) Set Topic creation time. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getLastModifyTime() Obtain Time when the topic attribute is last modified. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLastModifyTime(integer $LastModifyTime) Set Time when the topic attribute is last modified. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMsgCount() Obtain Number of current messages in the topic (number of retained messages).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMsgCount(integer $MsgCount) Set Number of current messages in the topic (number of retained messages).
Note: this field may return null, indicating that no valid values can be obtained.
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
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTenantId(string $TenantId) Set Tenant ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNamespaceName() Obtain Namespace name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNamespaceName(string $NamespaceName) Set Namespace name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Cluster status. 0: creating; 1: normal; 2: terminating; 3: deleted; 4. isolated; 5. creation failed; 6: deletion failed
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Cluster status. 0: creating; 1: normal; 2: terminating; 3: deleted; 4. isolated; 5. creation failed; 6: deletion failed
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method integer getBrokerType() Obtain Valid values: `0` (Pulsar), `1` (RocketMQ).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBrokerType(integer $BrokerType) Set Valid values: `0` (Pulsar), `1` (RocketMQ).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CmqTopic extends AbstractModel
{
    /**
     * @var string Topic ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicId;

    /**
     * @var string Topic name.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicName;

    /**
     * @var integer Maximum lifecycle of message in topic. After the period specified by this parameter has elapsed since a message is sent to the topic, the message will be deleted no matter whether it has been successfully pushed to the user. This parameter is measured in seconds and defaulted to one day (86,400 seconds), which cannot be modified.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MsgRetentionSeconds;

    /**
     * @var integer Maximum message size, which ranges from 1,024 to 1,048,576 bytes (i.e., 1–1,024 KB). The default value is 65,536.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxMsgSize;

    /**
     * @var integer Number of messages published per second.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Qps;

    /**
     * @var integer Filtering policy selected when a subscription is created:
If `filterType` is 1, `FilterTag` will be used for filtering.
If `filterType` is 2, `BindingKey` will be used for filtering.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FilterType;

    /**
     * @var integer Topic creation time. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CreateTime;

    /**
     * @var integer Time when the topic attribute is last modified. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LastModifyTime;

    /**
     * @var integer Number of current messages in the topic (number of retained messages).
Note: this field may return null, indicating that no valid values can be obtained.
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
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TenantId;

    /**
     * @var string Namespace name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NamespaceName;

    /**
     * @var integer Cluster status. 0: creating; 1: normal; 2: terminating; 3: deleted; 4. isolated; 5. creation failed; 6: deletion failed
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var integer Valid values: `0` (Pulsar), `1` (RocketMQ).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BrokerType;

    /**
     * @param string $TopicId Topic ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TopicName Topic name.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MsgRetentionSeconds Maximum lifecycle of message in topic. After the period specified by this parameter has elapsed since a message is sent to the topic, the message will be deleted no matter whether it has been successfully pushed to the user. This parameter is measured in seconds and defaulted to one day (86,400 seconds), which cannot be modified.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxMsgSize Maximum message size, which ranges from 1,024 to 1,048,576 bytes (i.e., 1–1,024 KB). The default value is 65,536.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Qps Number of messages published per second.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $FilterType Filtering policy selected when a subscription is created:
If `filterType` is 1, `FilterTag` will be used for filtering.
If `filterType` is 2, `BindingKey` will be used for filtering.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Topic creation time. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $LastModifyTime Time when the topic attribute is last modified. A Unix timestamp accurate down to the millisecond will be returned.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MsgCount Number of current messages in the topic (number of retained messages).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateUin Creator `Uin`. The `resource` field for CAM authentication is composed of this field.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Associated tag.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param boolean $Trace Message trace. true: enabled; false: not enabled
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TenantId Tenant ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NamespaceName Namespace name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Cluster status. 0: creating; 1: normal; 2: terminating; 3: deleted; 4. isolated; 5. creation failed; 6: deletion failed
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param integer $BrokerType Valid values: `0` (Pulsar), `1` (RocketMQ).
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
