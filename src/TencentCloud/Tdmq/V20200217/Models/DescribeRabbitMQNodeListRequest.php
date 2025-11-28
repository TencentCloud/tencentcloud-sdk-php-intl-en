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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQNodeList request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, such as amqp-xxxxxxxx. specifies the effective InstanceId that can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as amqp-xxxxxxxx. specifies the effective InstanceId that can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method integer getOffset() Obtain Offset, default value 0.
 * @method void setOffset(integer $Offset) Set Offset, default value 0.
 * @method integer getLimit() Obtain Page limit. default value: 20.
 * @method void setLimit(integer $Limit) Set Page limit. default value: 20.
 * @method string getNodeName() Obtain Node name for fuzzy search
 * @method void setNodeName(string $NodeName) Set Node name for fuzzy search
 * @method array getFilters() Obtain Filter parameter name and value. currently only support filtering based on node status.
"Name": "nodeStatus"
"Value": running or down

 * @method void setFilters(array $Filters) Set Filter parameter name and value. currently only support filtering based on node status.
"Name": "nodeStatus"
"Value": running or down

 * @method string getSortElement() Obtain Sorts by the specified element. only 2 are present.
CPU usage: specifies the CPU utilization of the node.
diskUsage: specifies the node disk utilization.
 * @method void setSortElement(string $SortElement) Set Sorts by the specified element. only 2 are present.
CPU usage: specifies the CPU utilization of the node.
diskUsage: specifies the node disk utilization.
 * @method string getSortOrder() Obtain Sorting order.
Valid values: `ascend`, `descend`.
 * @method void setSortOrder(string $SortOrder) Set Sorting order.
Valid values: `ascend`, `descend`.
 */
class DescribeRabbitMQNodeListRequest extends AbstractModel
{
    /**
     * @var string Instance ID, such as amqp-xxxxxxxx. specifies the effective InstanceId that can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     */
    public $InstanceId;

    /**
     * @var integer Offset, default value 0.
     */
    public $Offset;

    /**
     * @var integer Page limit. default value: 20.
     */
    public $Limit;

    /**
     * @var string Node name for fuzzy search
     */
    public $NodeName;

    /**
     * @var array Filter parameter name and value. currently only support filtering based on node status.
"Name": "nodeStatus"
"Value": running or down

     */
    public $Filters;

    /**
     * @var string Sorts by the specified element. only 2 are present.
CPU usage: specifies the CPU utilization of the node.
diskUsage: specifies the node disk utilization.
     */
    public $SortElement;

    /**
     * @var string Sorting order.
Valid values: `ascend`, `descend`.
     */
    public $SortOrder;

    /**
     * @param string $InstanceId Instance ID, such as amqp-xxxxxxxx. specifies the effective InstanceId that can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     * @param integer $Offset Offset, default value 0.
     * @param integer $Limit Page limit. default value: 20.
     * @param string $NodeName Node name for fuzzy search
     * @param array $Filters Filter parameter name and value. currently only support filtering based on node status.
"Name": "nodeStatus"
"Value": running or down

     * @param string $SortElement Sorts by the specified element. only 2 are present.
CPU usage: specifies the CPU utilization of the node.
diskUsage: specifies the node disk utilization.
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
