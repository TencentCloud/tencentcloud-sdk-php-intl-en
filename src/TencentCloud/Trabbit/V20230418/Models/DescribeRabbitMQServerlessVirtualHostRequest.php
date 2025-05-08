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
 * DescribeRabbitMQServerlessVirtualHost request structure.
 *
 * @method string getInstanceId() Obtain instance ID
 * @method void setInstanceId(string $InstanceId) Set instance ID
 * @method string getVirtualHost() Obtain Specifies the vhost name. if it is not provided, query all.
 * @method void setVirtualHost(string $VirtualHost) Set Specifies the vhost name. if it is not provided, query all.
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method integer getLimit() Obtain Pagination limit
 * @method void setLimit(integer $Limit) Set Pagination limit
 * @method Filter getFilters() Obtain search-virtual-host: specifies fuzzy name search of vhost names. earlier, it supported both prefix and suffix matching.
 * @method void setFilters(Filter $Filters) Set search-virtual-host: specifies fuzzy name search of vhost names. earlier, it supported both prefix and suffix matching.
 * @method string getSortElement() Obtain Sorting field.
MessageHeapCount specifies the number of message backlogs.
MessageRateInOut specifies the total production and consumption rate.
MessageRateIn specifies the production rate.
MessageRateOut specifies the consumption rate.
 * @method void setSortElement(string $SortElement) Set Sorting field.
MessageHeapCount specifies the number of message backlogs.
MessageRateInOut specifies the total production and consumption rate.
MessageRateIn specifies the production rate.
MessageRateOut specifies the consumption rate.
 * @method string getSortOrder() Obtain Sort order. valid values: ascend or descend.
 * @method void setSortOrder(string $SortOrder) Set Sort order. valid values: ascend or descend.
 */
class DescribeRabbitMQServerlessVirtualHostRequest extends AbstractModel
{
    /**
     * @var string instance ID
     */
    public $InstanceId;

    /**
     * @var string Specifies the vhost name. if it is not provided, query all.
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
     * @var Filter search-virtual-host: specifies fuzzy name search of vhost names. earlier, it supported both prefix and suffix matching.
     */
    public $Filters;

    /**
     * @var string Sorting field.
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
     * @param string $InstanceId instance ID
     * @param string $VirtualHost Specifies the vhost name. if it is not provided, query all.
     * @param integer $Offset Pagination offset
     * @param integer $Limit Pagination limit
     * @param Filter $Filters search-virtual-host: specifies fuzzy name search of vhost names. earlier, it supported both prefix and suffix matching.
     * @param string $SortElement Sorting field.
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
