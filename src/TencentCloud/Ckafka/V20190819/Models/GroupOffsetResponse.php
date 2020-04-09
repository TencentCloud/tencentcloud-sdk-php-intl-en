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
 * Returned result of consumer group offset
 *
 * @method integer getTotalCount() Obtain Total number of eligible results
 * @method void setTotalCount(integer $TotalCount) Set Total number of eligible results
 * @method array getTopicList() Obtain Array of partitions in the topic, where each element is a JSON object
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTopicList(array $TopicList) Set Array of partitions in the topic, where each element is a JSON object
Note: this field may return null, indicating that no valid values can be obtained.
 */
class GroupOffsetResponse extends AbstractModel
{
    /**
     * @var integer Total number of eligible results
     */
    public $TotalCount;

    /**
     * @var array Array of partitions in the topic, where each element is a JSON object
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TopicList;

    /**
     * @param integer $TotalCount Total number of eligible results
     * @param array $TopicList Array of partitions in the topic, where each element is a JSON object
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
                $obj = new GroupOffsetTopic();
                $obj->deserialize($value);
                array_push($this->TopicList, $obj);
            }
        }
    }
}
