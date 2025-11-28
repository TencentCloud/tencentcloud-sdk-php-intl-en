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
 * DescribeRabbitMQBindings request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method string getVirtualHost() Obtain VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
 * @method void setVirtualHost(string $VirtualHost) Set VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
 * @method integer getOffset() Obtain Specifies the page offset. default is 0.
 * @method void setOffset(integer $Offset) Set Specifies the page offset. default is 0.
 * @method integer getLimit() Obtain Page limit. default value: 20.
 * @method void setLimit(integer $Limit) Set Page limit. default value: 20.
 * @method string getSearchWord() Obtain Search keyword. Performs fuzzy search based on source exchange name, target resource name, or binding key.
 * @method void setSearchWord(string $SearchWord) Set Search keyword. Performs fuzzy search based on source exchange name, target resource name, or binding key.
 * @method string getSourceExchange() Obtain Precise search filter based on source exchange.
 * @method void setSourceExchange(string $SourceExchange) Set Precise search filter based on source exchange.
 * @method string getQueueName() Obtain Filters by the target queue name. cannot be set with DestinationExchange filtering.
 * @method void setQueueName(string $QueueName) Set Filters by the target queue name. cannot be set with DestinationExchange filtering.
 * @method string getDestinationExchange() Obtain Precise search filter based on target exchange. Cannot be set simultaneously with queuename filter.
 * @method void setDestinationExchange(string $DestinationExchange) Set Precise search filter based on target exchange. Cannot be set simultaneously with queuename filter.
 */
class DescribeRabbitMQBindingsRequest extends AbstractModel
{
    /**
     * @var string Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     */
    public $InstanceId;

    /**
     * @var string VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
     */
    public $VirtualHost;

    /**
     * @var integer Specifies the page offset. default is 0.
     */
    public $Offset;

    /**
     * @var integer Page limit. default value: 20.
     */
    public $Limit;

    /**
     * @var string Search keyword. Performs fuzzy search based on source exchange name, target resource name, or binding key.
     */
    public $SearchWord;

    /**
     * @var string Precise search filter based on source exchange.
     */
    public $SourceExchange;

    /**
     * @var string Filters by the target queue name. cannot be set with DestinationExchange filtering.
     */
    public $QueueName;

    /**
     * @var string Precise search filter based on target exchange. Cannot be set simultaneously with queuename filter.
     */
    public $DestinationExchange;

    /**
     * @param string $InstanceId Instance ID, such as amqp-xxxxxxxx. effective InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
     * @param string $VirtualHost VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
     * @param integer $Offset Specifies the page offset. default is 0.
     * @param integer $Limit Page limit. default value: 20.
     * @param string $SearchWord Search keyword. Performs fuzzy search based on source exchange name, target resource name, or binding key.
     * @param string $SourceExchange Precise search filter based on source exchange.
     * @param string $QueueName Filters by the target queue name. cannot be set with DestinationExchange filtering.
     * @param string $DestinationExchange Precise search filter based on target exchange. Cannot be set simultaneously with queuename filter.
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

        if (array_key_exists("SourceExchange",$param) and $param["SourceExchange"] !== null) {
            $this->SourceExchange = $param["SourceExchange"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("DestinationExchange",$param) and $param["DestinationExchange"] !== null) {
            $this->DestinationExchange = $param["DestinationExchange"];
        }
    }
}
