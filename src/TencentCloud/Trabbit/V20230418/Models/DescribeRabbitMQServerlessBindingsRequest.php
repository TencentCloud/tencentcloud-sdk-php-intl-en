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
namespace TencentCloud\Trabbit\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQServerlessBindings request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance Id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance Id</p>
 * @method string getVirtualHost() Obtain <p>Vhost parameter</p>
 * @method void setVirtualHost(string $VirtualHost) Set <p>Vhost parameter</p>
 * @method integer getOffset() Obtain <p>Pagination offset</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset</p>
 * @method integer getLimit() Obtain <p>Pagination limit</p>
 * @method void setLimit(integer $Limit) Set <p>Pagination limit</p>
 * @method string getSearchWord() Obtain <p>Search keywords, do fuzzy search based on source exchange name/target resource name</p>
 * @method void setSearchWord(string $SearchWord) Set <p>Search keywords, do fuzzy search based on source exchange name/target resource name</p>
 * @method string getSourceExchange() Obtain <p>Precise search and filter based on source Exchange</p>
 * @method void setSourceExchange(string $SourceExchange) Set <p>Precise search and filter based on source Exchange</p>
 * @method string getQueueName() Obtain <p>Precise search filter based on target QueueName and DestinationExchange cannot be set both at the same time</p>
 * @method void setQueueName(string $QueueName) Set <p>Precise search filter based on target QueueName and DestinationExchange cannot be set both at the same time</p>
 * @method string getDestinationExchange() Obtain <p>Precise search filter based on target Exchange and QueueName filter cannot be set both at the same time</p>
 * @method void setDestinationExchange(string $DestinationExchange) Set <p>Precise search filter based on target Exchange and QueueName filter cannot be set both at the same time</p>
 */
class DescribeRabbitMQServerlessBindingsRequest extends AbstractModel
{
    /**
     * @var string <p>Instance Id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Vhost parameter</p>
     */
    public $VirtualHost;

    /**
     * @var integer <p>Pagination offset</p>
     */
    public $Offset;

    /**
     * @var integer <p>Pagination limit</p>
     */
    public $Limit;

    /**
     * @var string <p>Search keywords, do fuzzy search based on source exchange name/target resource name</p>
     */
    public $SearchWord;

    /**
     * @var string <p>Precise search and filter based on source Exchange</p>
     */
    public $SourceExchange;

    /**
     * @var string <p>Precise search filter based on target QueueName and DestinationExchange cannot be set both at the same time</p>
     */
    public $QueueName;

    /**
     * @var string <p>Precise search filter based on target Exchange and QueueName filter cannot be set both at the same time</p>
     */
    public $DestinationExchange;

    /**
     * @param string $InstanceId <p>Instance Id</p>
     * @param string $VirtualHost <p>Vhost parameter</p>
     * @param integer $Offset <p>Pagination offset</p>
     * @param integer $Limit <p>Pagination limit</p>
     * @param string $SearchWord <p>Search keywords, do fuzzy search based on source exchange name/target resource name</p>
     * @param string $SourceExchange <p>Precise search and filter based on source Exchange</p>
     * @param string $QueueName <p>Precise search filter based on target QueueName and DestinationExchange cannot be set both at the same time</p>
     * @param string $DestinationExchange <p>Precise search filter based on target Exchange and QueueName filter cannot be set both at the same time</p>
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
