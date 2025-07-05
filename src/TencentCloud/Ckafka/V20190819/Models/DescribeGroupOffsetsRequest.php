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
 * DescribeGroupOffsets request structure.
 *
 * @method string getInstanceId() Obtain (Filter) filter by instance ID
 * @method void setInstanceId(string $InstanceId) Set (Filter) filter by instance ID
 * @method string getGroup() Obtain Kafka consumer group
 * @method void setGroup(string $Group) Set Kafka consumer group
 * @method array getTopics() Obtain Array of the names of topics subscribed to by a group. If there is no such array, this parameter means the information of all topics in the specified group
 * @method void setTopics(array $Topics) Set Array of the names of topics subscribed to by a group. If there is no such array, this parameter means the information of all topics in the specified group
 * @method string getSearchWord() Obtain Fuzzy match by `topicName`
 * @method void setSearchWord(string $SearchWord) Set Fuzzy match by `topicName`
 * @method integer getOffset() Obtain Offset position of this query. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset position of this query. Default value: 0
 * @method integer getLimit() Obtain Maximum number of results to be returned in this request. Default value: 50. Maximum value: 50
 * @method void setLimit(integer $Limit) Set Maximum number of results to be returned in this request. Default value: 50. Maximum value: 50
 */
class DescribeGroupOffsetsRequest extends AbstractModel
{
    /**
     * @var string (Filter) filter by instance ID
     */
    public $InstanceId;

    /**
     * @var string Kafka consumer group
     */
    public $Group;

    /**
     * @var array Array of the names of topics subscribed to by a group. If there is no such array, this parameter means the information of all topics in the specified group
     */
    public $Topics;

    /**
     * @var string Fuzzy match by `topicName`
     */
    public $SearchWord;

    /**
     * @var integer Offset position of this query. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Maximum number of results to be returned in this request. Default value: 50. Maximum value: 50
     */
    public $Limit;

    /**
     * @param string $InstanceId (Filter) filter by instance ID
     * @param string $Group Kafka consumer group
     * @param array $Topics Array of the names of topics subscribed to by a group. If there is no such array, this parameter means the information of all topics in the specified group
     * @param string $SearchWord Fuzzy match by `topicName`
     * @param integer $Offset Offset position of this query. Default value: 0
     * @param integer $Limit Maximum number of results to be returned in this request. Default value: 50. Maximum value: 50
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

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }

        if (array_key_exists("Topics",$param) and $param["Topics"] !== null) {
            $this->Topics = $param["Topics"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
