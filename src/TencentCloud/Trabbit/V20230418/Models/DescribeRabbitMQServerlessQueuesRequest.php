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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQServerlessQueues request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getVirtualHost() Obtain Vhost parameter.
 * @method void setVirtualHost(string $VirtualHost) Set Vhost parameter.
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method integer getLimit() Obtain Pagination limit
 * @method void setLimit(integer $Limit) Set Pagination limit
 * @method string getSearchWord() Obtain Search keywords
 * @method void setSearchWord(string $SearchWord) Set Search keywords
 * @method string getQueueType() Obtain Specifies the queue type filter criteria. if it is left blank or set to "all", it indicates classic and quorum queues; if set to "classic", it filters classic queues; if set to "quorum", it filters quorum queues.
 * @method void setQueueType(string $QueueType) Set Specifies the queue type filter criteria. if it is left blank or set to "all", it indicates classic and quorum queues; if set to "classic", it filters classic queues; if set to "quorum", it filters quorum queues.
 * @method string getSortElement() Obtain Sorting field.
ConsumerNumber: specifies the number of online consumers.
MessageHeapCount specifies the number of message backlogs.
MessageRateInOut specifies the total production and consumption rate.
MessageRateIn specifies the production rate.
MessageRateOut specifies the consumption rate.
 * @method void setSortElement(string $SortElement) Set Sorting field.
ConsumerNumber: specifies the number of online consumers.
MessageHeapCount specifies the number of message backlogs.
MessageRateInOut specifies the total production and consumption rate.
MessageRateIn specifies the production rate.
MessageRateOut specifies the consumption rate.
 * @method string getSortOrder() Obtain Sort order. valid values: ascend or descend.
 * @method void setSortOrder(string $SortOrder) Set Sort order. valid values: ascend or descend.
 */
class DescribeRabbitMQServerlessQueuesRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Vhost parameter.
     */
    public $VirtualHost;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var integer Pagination limit
     */
    public $Limit;

    /**
     * @var string Search keywords
     */
    public $SearchWord;

    /**
     * @var string Specifies the queue type filter criteria. if it is left blank or set to "all", it indicates classic and quorum queues; if set to "classic", it filters classic queues; if set to "quorum", it filters quorum queues.
     */
    public $QueueType;

    /**
     * @var string Sorting field.
ConsumerNumber: specifies the number of online consumers.
MessageHeapCount specifies the number of message backlogs.
MessageRateInOut specifies the total production and consumption rate.
MessageRateIn specifies the production rate.
MessageRateOut specifies the consumption rate.
     */
    public $SortElement;

    /**
     * @var string Sort order. valid values: ascend or descend.
     */
    public $SortOrder;

    /**
     * @param string $InstanceId Instance ID
     * @param string $VirtualHost Vhost parameter.
     * @param integer $Offset Pagination offset
     * @param integer $Limit Pagination limit
     * @param string $SearchWord Search keywords
     * @param string $QueueType Specifies the queue type filter criteria. if it is left blank or set to "all", it indicates classic and quorum queues; if set to "classic", it filters classic queues; if set to "quorum", it filters quorum queues.
     * @param string $SortElement Sorting field.
ConsumerNumber: specifies the number of online consumers.
MessageHeapCount specifies the number of message backlogs.
MessageRateInOut specifies the total production and consumption rate.
MessageRateIn specifies the production rate.
MessageRateOut specifies the consumption rate.
     * @param string $SortOrder Sort order. valid values: ascend or descend.
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
