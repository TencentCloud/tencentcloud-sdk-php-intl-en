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
 * DescribeRabbitMQQueues request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, such as amqp-xxxxxxxx. valid InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as amqp-xxxxxxxx. valid InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method string getVirtualHost() Obtain VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
 * @method void setVirtualHost(string $VirtualHost) Set VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
 * @method integer getOffset() Obtain Specifies the pagination Offset. default is 0.
 * @method void setOffset(integer $Offset) Set Specifies the pagination Offset. default is 0.
 * @method integer getLimit() Obtain Pagination Limit. default is 20.
 * @method void setLimit(integer $Limit) Set Pagination Limit. default is 20.
 * @method string getSearchWord() Obtain Search keywords
 * @method void setSearchWord(string $SearchWord) Set Search keywords
 * @method string getQueueType() Obtain Filter criteria for queue type. valid values: "all" (default): filter regular and quorum queues; "classic": filter classic (ordinary) queues; "quorum": filter quorum queues.
 * @method void setQueueType(string $QueueType) Set Filter criteria for queue type. valid values: "all" (default): filter regular and quorum queues; "classic": filter classic (ordinary) queues; "quorum": filter quorum queues.
 * @method string getSortElement() Obtain Sorting field.
ConsumerNumber - Indicates the number of online consumers.
MessageHeapCount - Indicates the number of retained messages.
MessageRateInOut - Indicates the total production and consumption rate.
MessageRateIn - Production rate.
MessageRateOut - Consumption rate: Specifies the message consumption rate.
 * @method void setSortElement(string $SortElement) Set Sorting field.
ConsumerNumber - Indicates the number of online consumers.
MessageHeapCount - Indicates the number of retained messages.
MessageRateInOut - Indicates the total production and consumption rate.
MessageRateIn - Production rate.
MessageRateOut - Consumption rate: Specifies the message consumption rate.
 * @method string getSortOrder() Obtain Sorting order. Valid values: ascend and descend.
Specifies the ascending order.
Desc - descending.
 * @method void setSortOrder(string $SortOrder) Set Sorting order. Valid values: ascend and descend.
Specifies the ascending order.
Desc - descending.
 */
class DescribeRabbitMQQueuesRequest extends AbstractModel
{
    /**
     * @var string Instance ID, such as amqp-xxxxxxxx. valid InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     */
    public $InstanceId;

    /**
     * @var string VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
     */
    public $VirtualHost;

    /**
     * @var integer Specifies the pagination Offset. default is 0.
     */
    public $Offset;

    /**
     * @var integer Pagination Limit. default is 20.
     */
    public $Limit;

    /**
     * @var string Search keywords
     */
    public $SearchWord;

    /**
     * @var string Filter criteria for queue type. valid values: "all" (default): filter regular and quorum queues; "classic": filter classic (ordinary) queues; "quorum": filter quorum queues.
     */
    public $QueueType;

    /**
     * @var string Sorting field.
ConsumerNumber - Indicates the number of online consumers.
MessageHeapCount - Indicates the number of retained messages.
MessageRateInOut - Indicates the total production and consumption rate.
MessageRateIn - Production rate.
MessageRateOut - Consumption rate: Specifies the message consumption rate.
     */
    public $SortElement;

    /**
     * @var string Sorting order. Valid values: ascend and descend.
Specifies the ascending order.
Desc - descending.
     */
    public $SortOrder;

    /**
     * @param string $InstanceId Instance ID, such as amqp-xxxxxxxx. valid InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     * @param string $VirtualHost VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
     * @param integer $Offset Specifies the pagination Offset. default is 0.
     * @param integer $Limit Pagination Limit. default is 20.
     * @param string $SearchWord Search keywords
     * @param string $QueueType Filter criteria for queue type. valid values: "all" (default): filter regular and quorum queues; "classic": filter classic (ordinary) queues; "quorum": filter quorum queues.
     * @param string $SortElement Sorting field.
ConsumerNumber - Indicates the number of online consumers.
MessageHeapCount - Indicates the number of retained messages.
MessageRateInOut - Indicates the total production and consumption rate.
MessageRateIn - Production rate.
MessageRateOut - Consumption rate: Specifies the message consumption rate.
     * @param string $SortOrder Sorting order. Valid values: ascend and descend.
Specifies the ascending order.
Desc - descending.
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("QueueType",$param) and $param["QueueType"] !== null) {
            $this->QueueType = $param["QueueType"];
        }

        if (array_key_exists("SortElement",$param) and $param["SortElement"] !== null) {
            $this->SortElement = $param["SortElement"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
