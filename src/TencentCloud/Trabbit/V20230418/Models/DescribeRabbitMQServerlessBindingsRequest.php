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
 * DescribeRabbitMQServerlessBindings request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getVirtualHost() Obtain Vhost parameter.
 * @method void setVirtualHost(string $VirtualHost) Set Vhost parameter.
 * @method integer getOffset() Obtain Pagination Offset
 * @method void setOffset(integer $Offset) Set Pagination Offset
 * @method integer getLimit() Obtain Pagination Limit
 * @method void setLimit(integer $Limit) Set Pagination Limit
 * @method string getSearchWord() Obtain Search keywords. do fuzzy search based on source exchange name, target resource name or binding key.
 * @method void setSearchWord(string $SearchWord) Set Search keywords. do fuzzy search based on source exchange name, target resource name or binding key.
 * @method string getSourceExchange() Obtain Search and filter precisely according to the source Exchange.
 * @method void setSourceExchange(string $SourceExchange) Set Search and filter precisely according to the source Exchange.
 * @method string getQueueName() Obtain Specifies precise search filter based on target QueueName. cannot set simultaneously with DestinationExchange filter.
 * @method void setQueueName(string $QueueName) Set Specifies precise search filter based on target QueueName. cannot set simultaneously with DestinationExchange filter.
 * @method string getDestinationExchange() Obtain Precise search filter based on target Exchange. cannot set it simultaneously with QueueName filter.
 * @method void setDestinationExchange(string $DestinationExchange) Set Precise search filter based on target Exchange. cannot set it simultaneously with QueueName filter.
 */
class DescribeRabbitMQServerlessBindingsRequest extends AbstractModel
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
     * @var integer Pagination Offset
     */
    public $Offset;

    /**
     * @var integer Pagination Limit
     */
    public $Limit;

    /**
     * @var string Search keywords. do fuzzy search based on source exchange name, target resource name or binding key.
     */
    public $SearchWord;

    /**
     * @var string Search and filter precisely according to the source Exchange.
     */
    public $SourceExchange;

    /**
     * @var string Specifies precise search filter based on target QueueName. cannot set simultaneously with DestinationExchange filter.
     */
    public $QueueName;

    /**
     * @var string Precise search filter based on target Exchange. cannot set it simultaneously with QueueName filter.
     */
    public $DestinationExchange;

    /**
     * @param string $InstanceId Instance ID
     * @param string $VirtualHost Vhost parameter.
     * @param integer $Offset Pagination Offset
     * @param integer $Limit Pagination Limit
     * @param string $SearchWord Search keywords. do fuzzy search based on source exchange name, target resource name or binding key.
     * @param string $SourceExchange Search and filter precisely according to the source Exchange.
     * @param string $QueueName Specifies precise search filter based on target QueueName. cannot set simultaneously with DestinationExchange filter.
     * @param string $DestinationExchange Precise search filter based on target Exchange. cannot set it simultaneously with QueueName filter.
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
