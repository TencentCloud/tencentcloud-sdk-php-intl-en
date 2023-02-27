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
 * DescribeRabbitMQNodeList request structure.
 *
 * @method string getInstanceId() Obtain TDMQ for RabbitMQ cluster ID
 * @method void setInstanceId(string $InstanceId) Set TDMQ for RabbitMQ cluster ID
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain The maximum entries per page
 * @method void setLimit(integer $Limit) Set The maximum entries per page
 * @method string getNodeName() Obtain Node name for fuzzy search
 * @method void setNodeName(string $NodeName) Set Node name for fuzzy search
 * @method array getFilters() Obtain Name and value of a filter.
Currently, only the `nodeStatus` filter is supported.
Valid values: `running`, `down`.
It is an array type and can contain multiple filters.

 * @method void setFilters(array $Filters) Set Name and value of a filter.
Currently, only the `nodeStatus` filter is supported.
Valid values: `running`, `down`.
It is an array type and can contain multiple filters.

 * @method string getSortElement() Obtain Sorting by a specified element.
Valid values: `cpuUsage`, `diskUsage`.
 * @method void setSortElement(string $SortElement) Set Sorting by a specified element.
Valid values: `cpuUsage`, `diskUsage`.
 * @method string getSortOrder() Obtain Sorting order.
Valid values: `ascend`, `descend`.
 * @method void setSortOrder(string $SortOrder) Set Sorting order.
Valid values: `ascend`, `descend`.
 */
class DescribeRabbitMQNodeListRequest extends AbstractModel
{
    /**
     * @var string TDMQ for RabbitMQ cluster ID
     */
    public $InstanceId;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer The maximum entries per page
     */
    public $Limit;

    /**
     * @var string Node name for fuzzy search
     */
    public $NodeName;

    /**
     * @var array Name and value of a filter.
Currently, only the `nodeStatus` filter is supported.
Valid values: `running`, `down`.
It is an array type and can contain multiple filters.

     */
    public $Filters;

    /**
     * @var string Sorting by a specified element.
Valid values: `cpuUsage`, `diskUsage`.
     */
    public $SortElement;

    /**
     * @var string Sorting order.
Valid values: `ascend`, `descend`.
     */
    public $SortOrder;

    /**
     * @param string $InstanceId TDMQ for RabbitMQ cluster ID
     * @param integer $Offset Offset
     * @param integer $Limit The maximum entries per page
     * @param string $NodeName Node name for fuzzy search
     * @param array $Filters Name and value of a filter.
Currently, only the `nodeStatus` filter is supported.
Valid values: `running`, `down`.
It is an array type and can contain multiple filters.

     * @param string $SortElement Sorting by a specified element.
Valid values: `cpuUsage`, `diskUsage`.
     * @param string $SortOrder Sorting order.
Valid values: `ascend`, `descend`.
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortElement",$param) and $param["SortElement"] !== null) {
            $this->SortElement = $param["SortElement"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
