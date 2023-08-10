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
 * DescribeRabbitMQVirtualHost request structure.
 *
 * @method string getInstanceId() Obtain Cluster instance ID
 * @method void setInstanceId(string $InstanceId) Set Cluster instance ID
 * @method string getVirtualHost() Obtain Vhost name. If this parameter is not specified, all will be queried by default.
 * @method void setVirtualHost(string $VirtualHost) Set Vhost name. If this parameter is not specified, all will be queried by default.
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method integer getLimit() Obtain Pagination limit
 * @method void setLimit(integer $Limit) Set Pagination limit
 * @method Filter getFilters() Obtain Fuzzy query by vhost name
 * @method void setFilters(Filter $Filters) Set Fuzzy query by vhost name
 * @method string getSortElement() Obtain 
 * @method void setSortElement(string $SortElement) Set 
 * @method string getSortOrder() Obtain 
 * @method void setSortOrder(string $SortOrder) Set 
 */
class DescribeRabbitMQVirtualHostRequest extends AbstractModel
{
    /**
     * @var string Cluster instance ID
     */
    public $InstanceId;

    /**
     * @var string Vhost name. If this parameter is not specified, all will be queried by default.
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
     * @var Filter Fuzzy query by vhost name
     */
    public $Filters;

    /**
     * @var string 
     */
    public $SortElement;

    /**
     * @var string 
     */
    public $SortOrder;

    /**
     * @param string $InstanceId Cluster instance ID
     * @param string $VirtualHost Vhost name. If this parameter is not specified, all will be queried by default.
     * @param integer $Offset Pagination offset
     * @param integer $Limit Pagination limit
     * @param Filter $Filters Fuzzy query by vhost name
     * @param string $SortElement 
     * @param string $SortOrder 
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = new Filter();
            $this->Filters->deserialize($param["Filters"]);
        }

        if (array_key_exists("SortElement",$param) and $param["SortElement"] !== null) {
            $this->SortElement = $param["SortElement"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
