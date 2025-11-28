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
 * DescribeRabbitMQExchanges request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, such as amqp-xxxxxxxx. valid InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method void setInstanceId(string $InstanceId) Set Instance ID, such as amqp-xxxxxxxx. valid InstanceId can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1).
 * @method string getVirtualHost() Obtain VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
 * @method void setVirtualHost(string $VirtualHost) Set VirtualHost name, such as testvhost. effective VirtualHost names can be queried by logging in to the TDMQ RabbitMQ console (https://console.cloud.tencent.com/trabbitmq/cluster?rid=1), clicking Vhost in the left sidebar, and finding the Vhost name in the Vhost list.
 * @method integer getOffset() Obtain Specifies the pagination offset. default is 0.
 * @method void setOffset(integer $Offset) Set Specifies the pagination offset. default is 0.
 * @method integer getLimit() Obtain Pagination limit. default is 20.
 * @method void setLimit(integer $Limit) Set Pagination limit. default is 20.
 * @method string getSearchWord() Obtain Search keyword, supports fuzzy matching.  
 * @method void setSearchWord(string $SearchWord) Set Search keyword, supports fuzzy matching.  
 * @method array getExchangeTypeFilters() Obtain Filters the exchange type. each element in the array is a selected filter type. only direct, fanout, topic, and header are supported.
 * @method void setExchangeTypeFilters(array $ExchangeTypeFilters) Set Filters the exchange type. each element in the array is a selected filter type. only direct, fanout, topic, and header are supported.
 * @method array getExchangeCreatorFilters() Obtain Filter exchange creation source, "system": "system created", "user": "user created".
 * @method void setExchangeCreatorFilters(array $ExchangeCreatorFilters) Set Filter exchange creation source, "system": "system created", "user": "user created".
 * @method string getExchangeName() Obtain Exchange name, used for exact matching.
 * @method void setExchangeName(string $ExchangeName) Set Exchange name, used for exact matching.
 * @method string getSortElement() Obtain Sorting field:
MessageRateInOut - Total production and consumption rate.
MessageRateIn - Production rate.
MessageRateOut - Consumption rate: Specifies the message consumption rate.
 * @method void setSortElement(string $SortElement) Set Sorting field:
MessageRateInOut - Total production and consumption rate.
MessageRateIn - Production rate.
MessageRateOut - Consumption rate: Specifies the message consumption rate.
 * @method string getSortOrder() Obtain Sorting order. Valid values: ascend and descend.
Specifies the ascending order.
Desc - descending.
 * @method void setSortOrder(string $SortOrder) Set Sorting order. Valid values: ascend and descend.
Specifies the ascending order.
Desc - descending.
 */
class DescribeRabbitMQExchangesRequest extends AbstractModel
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
     * @var integer Specifies the pagination offset. default is 0.
     */
    public $Offset;

    /**
     * @var integer Pagination limit. default is 20.
     */
    public $Limit;

    /**
     * @var string Search keyword, supports fuzzy matching.  
     */
    public $SearchWord;

    /**
     * @var array Filters the exchange type. each element in the array is a selected filter type. only direct, fanout, topic, and header are supported.
     */
    public $ExchangeTypeFilters;

    /**
     * @var array Filter exchange creation source, "system": "system created", "user": "user created".
     */
    public $ExchangeCreatorFilters;

    /**
     * @var string Exchange name, used for exact matching.
     */
    public $ExchangeName;

    /**
     * @var string Sorting field:
MessageRateInOut - Total production and consumption rate.
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
     * @param integer $Offset Specifies the pagination offset. default is 0.
     * @param integer $Limit Pagination limit. default is 20.
     * @param string $SearchWord Search keyword, supports fuzzy matching.  
     * @param array $ExchangeTypeFilters Filters the exchange type. each element in the array is a selected filter type. only direct, fanout, topic, and header are supported.
     * @param array $ExchangeCreatorFilters Filter exchange creation source, "system": "system created", "user": "user created".
     * @param string $ExchangeName Exchange name, used for exact matching.
     * @param string $SortElement Sorting field:
MessageRateInOut - Total production and consumption rate.
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

        if (array_key_exists("ExchangeTypeFilters",$param) and $param["ExchangeTypeFilters"] !== null) {
            $this->ExchangeTypeFilters = $param["ExchangeTypeFilters"];
        }

        if (array_key_exists("ExchangeCreatorFilters",$param) and $param["ExchangeCreatorFilters"] !== null) {
            $this->ExchangeCreatorFilters = $param["ExchangeCreatorFilters"];
        }

        if (array_key_exists("ExchangeName",$param) and $param["ExchangeName"] !== null) {
            $this->ExchangeName = $param["ExchangeName"];
        }

        if (array_key_exists("SortElement",$param) and $param["SortElement"] !== null) {
            $this->SortElement = $param["SortElement"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
