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
 * DescribeConsumerGroupList request structure.
 *
 * @method string getInstanceId() Obtain TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method void setInstanceId(string $InstanceId) Set TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method array getTagFilters() Obtain Tag filter
 * @method void setTagFilters(array $TagFilters) Set Tag filter
 * @method array getFilters() Obtain Filtering condition list. See the description of the API using this parameter for the usage method.
 * @method void setFilters(array $Filters) Set Filtering condition list. See the description of the API using this parameter for the usage method.
 * @method integer getOffset() Obtain Starting position of the query. Default value: 0.
 * @method void setOffset(integer $Offset) Set Starting position of the query. Default value: 0.
 * @method integer getLimit() Obtain Maximum number of queried results. Default value: 20.
 * @method void setLimit(integer $Limit) Set Maximum number of queried results. Default value: 20.
 * @method string getFromTopic() Obtain Queries consumer groups under a specified topic.
 * @method void setFromTopic(string $FromTopic) Set Queries consumer groups under a specified topic.
 * @method string getSortedBy() Obtain Sort by specified field, with the enumerated values as follows:
-subscribeNum: Number of topics subscribed
 * @method void setSortedBy(string $SortedBy) Set Sort by specified field, with the enumerated values as follows:
-subscribeNum: Number of topics subscribed
 * @method string getSortOrder() Obtain Sort in ascending or descending order, with the enumerated values as follows:

-asc: Ascending
- DESC: descending order.
 * @method void setSortOrder(string $SortOrder) Set Sort in ascending or descending order, with the enumerated values as follows:

-asc: Ascending
- DESC: descending order.
 */
class DescribeConsumerGroupListRequest extends AbstractModel
{
    /**
     * @var string TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) or the console.
     */
    public $InstanceId;

    /**
     * @var array Tag filter
     */
    public $TagFilters;

    /**
     * @var array Filtering condition list. See the description of the API using this parameter for the usage method.
     */
    public $Filters;

    /**
     * @var integer Starting position of the query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Maximum number of queried results. Default value: 20.
     */
    public $Limit;

    /**
     * @var string Queries consumer groups under a specified topic.
     */
    public $FromTopic;

    /**
     * @var string Sort by specified field, with the enumerated values as follows:
-subscribeNum: Number of topics subscribed
     */
    public $SortedBy;

    /**
     * @var string Sort in ascending or descending order, with the enumerated values as follows:

-asc: Ascending
- DESC: descending order.
     */
    public $SortOrder;

    /**
     * @param string $InstanceId TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) or the console.
     * @param array $TagFilters Tag filter
     * @param array $Filters Filtering condition list. See the description of the API using this parameter for the usage method.
     * @param integer $Offset Starting position of the query. Default value: 0.
     * @param integer $Limit Maximum number of queried results. Default value: 20.
     * @param string $FromTopic Queries consumer groups under a specified topic.
     * @param string $SortedBy Sort by specified field, with the enumerated values as follows:
-subscribeNum: Number of topics subscribed
     * @param string $SortOrder Sort in ascending or descending order, with the enumerated values as follows:

-asc: Ascending
- DESC: descending order.
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

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FromTopic",$param) and $param["FromTopic"] !== null) {
            $this->FromTopic = $param["FromTopic"];
        }

        if (array_key_exists("SortedBy",$param) and $param["SortedBy"] !== null) {
            $this->SortedBy = $param["SortedBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
