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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Topic information on the list
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getTopic() Obtain Topic name
 * @method void setTopic(string $Topic) Set Topic name
 * @method string getTopicType() Obtain Topic type.
NORMAL: regular message.
FIFO: sequential messaging.
DELAY: delayed message.
TRANSACTION message.
 * @method void setTopicType(string $TopicType) Set Topic type.
NORMAL: regular message.
FIFO: sequential messaging.
DELAY: delayed message.
TRANSACTION message.
 * @method integer getQueueNum() Obtain Number of queues
 * @method void setQueueNum(integer $QueueNum) Set Number of queues
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getClusterIdV4() Obtain Cluster id of version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClusterIdV4(string $ClusterIdV4) Set Cluster id of version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNamespaceV4() Obtain Namespace of 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespaceV4(string $NamespaceV4) Set Namespace of 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTopicV4() Obtain Topic name for version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicV4(string $TopicV4) Set Topic name for version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFullNamespaceV4() Obtain Complete namespace for 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullNamespaceV4(string $FullNamespaceV4) Set Complete namespace for 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMsgTTL() Obtain Message retention time.
 * @method void setMsgTTL(integer $MsgTTL) Set Message retention time.
 * @method array getTagList() Obtain List of bound tags
 * @method void setTagList(array $TagList) Set List of bound tags
 */
class TopicItem extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Topic name
     */
    public $Topic;

    /**
     * @var string Topic type.
NORMAL: regular message.
FIFO: sequential messaging.
DELAY: delayed message.
TRANSACTION message.
     */
    public $TopicType;

    /**
     * @var integer Number of queues
     */
    public $QueueNum;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Cluster id of version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClusterIdV4;

    /**
     * @var string Namespace of 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NamespaceV4;

    /**
     * @var string Topic name for version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicV4;

    /**
     * @var string Complete namespace for 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullNamespaceV4;

    /**
     * @var integer Message retention time.
     */
    public $MsgTTL;

    /**
     * @var array List of bound tags
     */
    public $TagList;

    /**
     * @param string $InstanceId Instance ID
     * @param string $Topic Topic name
     * @param string $TopicType Topic type.
NORMAL: regular message.
FIFO: sequential messaging.
DELAY: delayed message.
TRANSACTION message.
     * @param integer $QueueNum Number of queues
     * @param string $Remark Remarks
     * @param string $ClusterIdV4 Cluster id of version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NamespaceV4 Namespace of 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TopicV4 Topic name for version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FullNamespaceV4 Complete namespace for 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MsgTTL Message retention time.
     * @param array $TagList List of bound tags
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

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("QueueNum",$param) and $param["QueueNum"] !== null) {
            $this->QueueNum = $param["QueueNum"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ClusterIdV4",$param) and $param["ClusterIdV4"] !== null) {
            $this->ClusterIdV4 = $param["ClusterIdV4"];
        }

        if (array_key_exists("NamespaceV4",$param) and $param["NamespaceV4"] !== null) {
            $this->NamespaceV4 = $param["NamespaceV4"];
        }

        if (array_key_exists("TopicV4",$param) and $param["TopicV4"] !== null) {
            $this->TopicV4 = $param["TopicV4"];
        }

        if (array_key_exists("FullNamespaceV4",$param) and $param["FullNamespaceV4"] !== null) {
            $this->FullNamespaceV4 = $param["FullNamespaceV4"];
        }

        if (array_key_exists("MsgTTL",$param) and $param["MsgTTL"] !== null) {
            $this->MsgTTL = $param["MsgTTL"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }
    }
}
