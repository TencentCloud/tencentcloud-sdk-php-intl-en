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
 * Returned consumer group result entity
 *
 * @method integer getTotalCount() Obtain Number of eligible consumer groups
 * @method void setTotalCount(integer $TotalCount) Set Number of eligible consumer groups
 * @method array getTopicList() Obtain Topic list.
 * @method void setTopicList(array $TopicList) Set Topic list.
 * @method array getGroupList() Obtain Specifies the consumption group List.
 * @method void setGroupList(array $GroupList) Set Specifies the consumption group List.
 * @method integer getTotalPartition() Obtain Total number of partitions.
 * @method void setTotalPartition(integer $TotalPartition) Set Total number of partitions.
 * @method array getPartitionListForMonitor() Obtain Monitored partition list.
 * @method void setPartitionListForMonitor(array $PartitionListForMonitor) Set Monitored partition list.
 * @method integer getTotalTopic() Obtain Total number of topics.
 * @method void setTotalTopic(integer $TotalTopic) Set Total number of topics.
 * @method array getTopicListForMonitor() Obtain Monitored topic list.
 * @method void setTopicListForMonitor(array $TopicListForMonitor) Set Monitored topic list.
 * @method array getGroupListForMonitor() Obtain Monitored group list.
 * @method void setGroupListForMonitor(array $GroupListForMonitor) Set Monitored group list.
 */
class ConsumerGroupResponse extends AbstractModel
{
    /**
     * @var integer Number of eligible consumer groups
     */
    public $TotalCount;

    /**
     * @var array Topic list.
     */
    public $TopicList;

    /**
     * @var array Specifies the consumption group List.
     */
    public $GroupList;

    /**
     * @var integer Total number of partitions.
     */
    public $TotalPartition;

    /**
     * @var array Monitored partition list.
     */
    public $PartitionListForMonitor;

    /**
     * @var integer Total number of topics.
     */
    public $TotalTopic;

    /**
     * @var array Monitored topic list.
     */
    public $TopicListForMonitor;

    /**
     * @var array Monitored group list.
     */
    public $GroupListForMonitor;

    /**
     * @param integer $TotalCount Number of eligible consumer groups
     * @param array $TopicList Topic list.
     * @param array $GroupList Specifies the consumption group List.
     * @param integer $TotalPartition Total number of partitions.
     * @param array $PartitionListForMonitor Monitored partition list.
     * @param integer $TotalTopic Total number of topics.
     * @param array $TopicListForMonitor Monitored topic list.
     * @param array $GroupListForMonitor Monitored group list.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TopicList",$param) and $param["TopicList"] !== null) {
            $this->TopicList = [];
            foreach ($param["TopicList"] as $key => $value){
                $obj = new ConsumerGroupTopic();
                $obj->deserialize($value);
                array_push($this->TopicList, $obj);
            }
        }

        if (array_key_exists("GroupList",$param) and $param["GroupList"] !== null) {
            $this->GroupList = [];
            foreach ($param["GroupList"] as $key => $value){
                $obj = new ConsumerGroup();
                $obj->deserialize($value);
                array_push($this->GroupList, $obj);
            }
        }

        if (array_key_exists("TotalPartition",$param) and $param["TotalPartition"] !== null) {
            $this->TotalPartition = $param["TotalPartition"];
        }

        if (array_key_exists("PartitionListForMonitor",$param) and $param["PartitionListForMonitor"] !== null) {
            $this->PartitionListForMonitor = [];
            foreach ($param["PartitionListForMonitor"] as $key => $value){
                $obj = new Partition();
                $obj->deserialize($value);
                array_push($this->PartitionListForMonitor, $obj);
            }
        }

        if (array_key_exists("TotalTopic",$param) and $param["TotalTopic"] !== null) {
            $this->TotalTopic = $param["TotalTopic"];
        }

        if (array_key_exists("TopicListForMonitor",$param) and $param["TopicListForMonitor"] !== null) {
            $this->TopicListForMonitor = [];
            foreach ($param["TopicListForMonitor"] as $key => $value){
                $obj = new ConsumerGroupTopic();
                $obj->deserialize($value);
                array_push($this->TopicListForMonitor, $obj);
            }
        }

        if (array_key_exists("GroupListForMonitor",$param) and $param["GroupListForMonitor"] !== null) {
            $this->GroupListForMonitor = [];
            foreach ($param["GroupListForMonitor"] as $key => $value){
                $obj = new Group();
                $obj->deserialize($value);
                array_push($this->GroupListForMonitor, $obj);
            }
        }
    }
}
