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
 * Subscribed message entity
 *
 * @method string getTopicName() Obtain Subscribed topic name
 * @method void setTopicName(string $TopicName) Set Subscribed topic name
 * @method array getPartition() Obtain Subscribed partition
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPartition(array $Partition) Set Subscribed partition
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getPartitionOffset() Obtain Partition offset information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setPartitionOffset(array $PartitionOffset) Set Partition offset information
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTopicId() Obtain ID of the subscribed topic. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicId(string $TopicId) Set ID of the subscribed topic. 
Note: this field may return null, indicating that no valid values can be obtained.
 */
class SubscribedInfo extends AbstractModel
{
    /**
     * @var string Subscribed topic name
     */
    public $TopicName;

    /**
     * @var array Subscribed partition
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Partition;

    /**
     * @var array Partition offset information
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $PartitionOffset;

    /**
     * @var string ID of the subscribed topic. 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicId;

    /**
     * @param string $TopicName Subscribed topic name
     * @param array $Partition Subscribed partition
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $PartitionOffset Partition offset information
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TopicId ID of the subscribed topic. 
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("PartitionOffset",$param) and $param["PartitionOffset"] !== null) {
            $this->PartitionOffset = [];
            foreach ($param["PartitionOffset"] as $key => $value){
                $obj = new PartitionOffset();
                $obj->deserialize($value);
                array_push($this->PartitionOffset, $obj);
            }
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }
    }
}
