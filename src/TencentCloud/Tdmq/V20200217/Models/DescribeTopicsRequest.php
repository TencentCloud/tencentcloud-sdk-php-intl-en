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
 * DescribeTopics request structure.
 *
 * @method string getEnvironmentId() Obtain Environment (namespace) name.
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment (namespace) name.
 * @method string getTopicName() Obtain Fuzzy match by topic name.
 * @method void setTopicName(string $TopicName) Set Fuzzy match by topic name.
 * @method integer getOffset() Obtain Offset, which defaults to 0 if left empty.
 * @method void setOffset(integer $Offset) Set Offset, which defaults to 0 if left empty.
 * @method integer getLimit() Obtain The number of results to be returned, which defaults to 10 if left empty. The maximum value is 20.
 * @method void setLimit(integer $Limit) Set The number of results to be returned, which defaults to 10 if left empty. The maximum value is 20.
 * @method integer getTopicType() Obtain Topic type description:
0: Non-persistent and non-partitioned topic;
1: Non-persistent and partitioned topic;
2: Persistent and non-partitioned topic;
3: Persistent and partitioned topic.
 * @method void setTopicType(integer $TopicType) Set Topic type description:
0: Non-persistent and non-partitioned topic;
1: Non-persistent and partitioned topic;
2: Persistent and non-partitioned topic;
3: Persistent and partitioned topic.
 * @method string getClusterId() Obtain Pulsar cluster ID.
 * @method void setClusterId(string $ClusterId) Set Pulsar cluster ID.
 * @method array getFilters() Obtain * TopicName
Query by topic name for exact search.
Type: String
Required: No
 * @method void setFilters(array $Filters) Set * TopicName
Query by topic name for exact search.
Type: String
Required: No
 * @method integer getTopicCreator() Obtain Topic creator:
1: User
2: System
 * @method void setTopicCreator(integer $TopicCreator) Set Topic creator:
1: User
2: System
 */
class DescribeTopicsRequest extends AbstractModel
{
    /**
     * @var string Environment (namespace) name.
     */
    public $EnvironmentId;

    /**
     * @var string Fuzzy match by topic name.
     */
    public $TopicName;

    /**
     * @var integer Offset, which defaults to 0 if left empty.
     */
    public $Offset;

    /**
     * @var integer The number of results to be returned, which defaults to 10 if left empty. The maximum value is 20.
     */
    public $Limit;

    /**
     * @var integer Topic type description:
0: Non-persistent and non-partitioned topic;
1: Non-persistent and partitioned topic;
2: Persistent and non-partitioned topic;
3: Persistent and partitioned topic.
     */
    public $TopicType;

    /**
     * @var string Pulsar cluster ID.
     */
    public $ClusterId;

    /**
     * @var array * TopicName
Query by topic name for exact search.
Type: String
Required: No
     */
    public $Filters;

    /**
     * @var integer Topic creator:
1: User
2: System
     */
    public $TopicCreator;

    /**
     * @param string $EnvironmentId Environment (namespace) name.
     * @param string $TopicName Fuzzy match by topic name.
     * @param integer $Offset Offset, which defaults to 0 if left empty.
     * @param integer $Limit The number of results to be returned, which defaults to 10 if left empty. The maximum value is 20.
     * @param integer $TopicType Topic type description:
0: Non-persistent and non-partitioned topic;
1: Non-persistent and partitioned topic;
2: Persistent and non-partitioned topic;
3: Persistent and partitioned topic.
     * @param string $ClusterId Pulsar cluster ID.
     * @param array $Filters * TopicName
Query by topic name for exact search.
Type: String
Required: No
     * @param integer $TopicCreator Topic creator:
1: User
2: System
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TopicType",$param) and $param["TopicType"] !== null) {
            $this->TopicType = $param["TopicType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TopicCreator",$param) and $param["TopicCreator"] !== null) {
            $this->TopicCreator = $param["TopicCreator"];
        }
    }
}
