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
 * Returned consumer group result entity
 *
 * @method integer getTotalCount() Obtain Number of eligible consumer groups
 * @method void setTotalCount(integer $TotalCount) Set Number of eligible consumer groups
 * @method array getTopicList() Obtain Topic list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicList(array $TopicList) Set Topic list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getGroupList() Obtain Consumer group list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGroupList(array $GroupList) Set Consumer group list
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalPartition() Obtain Total number of partitions
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalPartition(integer $TotalPartition) Set Total number of partitions
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getPartitionListForMonitor() Obtain List of monitored partitions
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPartitionListForMonitor(array $PartitionListForMonitor) Set List of monitored partitions
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalTopic() Obtain Total number of topics
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTotalTopic(integer $TotalTopic) Set Total number of topics
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getTopicListForMonitor() Obtain List of monitored topics
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicListForMonitor(array $TopicListForMonitor) Set List of monitored topics
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getGroupListForMonitor() Obtain List of monitored groups
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setGroupListForMonitor(array $GroupListForMonitor) Set List of monitored groups
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ConsumerGroupResponse extends AbstractModel
{
    /**
     * @var integer Number of eligible consumer groups
     */
    public $TotalCount;

    /**
     * @var array Topic list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicList;

    /**
     * @var array Consumer group list
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GroupList;

    /**
     * @var integer Total number of partitions
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalPartition;

    /**
     * @var array List of monitored partitions
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PartitionListForMonitor;

    /**
     * @var integer Total number of topics
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TotalTopic;

    /**
     * @var array List of monitored topics
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicListForMonitor;

    /**
     * @var array List of monitored groups
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $GroupListForMonitor;

    /**
     * @param integer $TotalCount Number of eligible consumer groups
     * @param array $TopicList Topic list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $GroupList Consumer group list
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalPartition Total number of partitions
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $PartitionListForMonitor List of monitored partitions
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalTopic Total number of topics
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $TopicListForMonitor List of monitored topics
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $GroupListForMonitor List of monitored groups
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
