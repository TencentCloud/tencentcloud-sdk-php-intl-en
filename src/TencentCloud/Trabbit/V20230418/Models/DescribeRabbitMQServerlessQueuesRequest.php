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
 * DescribeRabbitMQServerlessQueues request structure.
 *
 * @method string getInstanceId() Obtain <p>Instance Id</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance Id</p>
 * @method string getVirtualHost() Obtain <p>Vhost parameter</p>
 * @method void setVirtualHost(string $VirtualHost) Set <p>Vhost parameter</p>
 * @method integer getOffset() Obtain <p>Pagination offset.</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset.</p>
 * @method integer getLimit() Obtain <p>Pagination limit.</p>
 * @method void setLimit(integer $Limit) Set <p>Pagination limit.</p>
 * @method string getSearchWord() Obtain <p>Search keyword</p>
 * @method void setSearchWord(string $SearchWord) Set <p>Search keyword</p>
 * @method string getQueueType() Obtain <p>Queue type filter criteria. Leave blank or use "all" for classic and quorum queues; "classic" for classic queues; "quorum" for quorum queues.</p>
 * @method void setQueueType(string $QueueType) Set <p>Queue type filter criteria. Leave blank or use "all" for classic and quorum queues; "classic" for classic queues; "quorum" for quorum queues.</p>
 * @method string getSortElement() Obtain <p>Sorting field:<br>messages_ready - message backlog;<br>publish - production rate;<br>deliver - consumption rate;<br>consumers - number of online consumers;</p>
 * @method void setSortElement(string $SortElement) Set <p>Sorting field:<br>messages_ready - message backlog;<br>publish - production rate;<br>deliver - consumption rate;<br>consumers - number of online consumers;</p>
 * @method string getSortOrder() Obtain <p>Sort order, asc or desc</p>
 * @method void setSortOrder(string $SortOrder) Set <p>Sort order, asc or desc</p>
 */
class DescribeRabbitMQServerlessQueuesRequest extends AbstractModel
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
     * @var integer <p>Pagination offset.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Pagination limit.</p>
     */
    public $Limit;

    /**
     * @var string <p>Search keyword</p>
     */
    public $SearchWord;

    /**
     * @var string <p>Queue type filter criteria. Leave blank or use "all" for classic and quorum queues; "classic" for classic queues; "quorum" for quorum queues.</p>
     */
    public $QueueType;

    /**
     * @var string <p>Sorting field:<br>messages_ready - message backlog;<br>publish - production rate;<br>deliver - consumption rate;<br>consumers - number of online consumers;</p>
     */
    public $SortElement;

    /**
     * @var string <p>Sort order, asc or desc</p>
     */
    public $SortOrder;

    /**
     * @param string $InstanceId <p>Instance Id</p>
     * @param string $VirtualHost <p>Vhost parameter</p>
     * @param integer $Offset <p>Pagination offset.</p>
     * @param integer $Limit <p>Pagination limit.</p>
     * @param string $SearchWord <p>Search keyword</p>
     * @param string $QueueType <p>Queue type filter criteria. Leave blank or use "all" for classic and quorum queues; "classic" for classic queues; "quorum" for quorum queues.</p>
     * @param string $SortElement <p>Sorting field:<br>messages_ready - message backlog;<br>publish - production rate;<br>deliver - consumption rate;<br>consumers - number of online consumers;</p>
     * @param string $SortOrder <p>Sort order, asc or desc</p>
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
