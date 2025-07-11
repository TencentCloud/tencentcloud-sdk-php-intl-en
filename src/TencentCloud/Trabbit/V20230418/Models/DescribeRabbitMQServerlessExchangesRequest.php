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
 * DescribeRabbitMQServerlessExchanges request structure.
 *
 * @method string getInstanceId() Obtain Instance id.
 * @method void setInstanceId(string $InstanceId) Set Instance id.
 * @method string getVirtualHost() Obtain Specifies the vhost parameter.
 * @method void setVirtualHost(string $VirtualHost) Set Specifies the vhost parameter.
 * @method integer getOffset() Obtain Paging offset.
 * @method void setOffset(integer $Offset) Set Paging offset.
 * @method integer getLimit() Obtain Paginate limit.
 * @method void setLimit(integer $Limit) Set Paginate limit.
 * @method string getSearchWord() Obtain Search keywords support fuzzy matching.
 * @method void setSearchWord(string $SearchWord) Set Search keywords support fuzzy matching.
 * @method array getExchangeTypeFilters() Obtain Specifies the filter type for each selected element in the array of exchange types.
 * @method void setExchangeTypeFilters(array $ExchangeTypeFilters) Set Specifies the filter type for each selected element in the array of exchange types.
 * @method array getExchangeCreatorFilters() Obtain Specifies the exchange creation source. valid values: "system" (generated by the system), "user" (user-created).
 * @method void setExchangeCreatorFilters(array $ExchangeCreatorFilters) Set Specifies the exchange creation source. valid values: "system" (generated by the system), "user" (user-created).
 * @method string getExchangeName() Obtain exchange name. specifies that it is used for exact matching.
 * @method void setExchangeName(string $ExchangeName) Set exchange name. specifies that it is used for exact matching.
 * @method string getSortElement() Obtain Sorting field.
MessageRateInOut specifies the total production and consumption rate.
MessageRateIn specifies the production rate.
MessageRateOut specifies the consumption rate.
 * @method void setSortElement(string $SortElement) Set Sorting field.
MessageRateInOut specifies the total production and consumption rate.
MessageRateIn specifies the production rate.
MessageRateOut specifies the consumption rate.
 * @method string getSortOrder() Obtain Sort order. valid values: ascend or descend.
 * @method void setSortOrder(string $SortOrder) Set Sort order. valid values: ascend or descend.
 */
class DescribeRabbitMQServerlessExchangesRequest extends AbstractModel
{
    /**
     * @var string Instance id.
     */
    public $InstanceId;

    /**
     * @var string Specifies the vhost parameter.
     */
    public $VirtualHost;

    /**
     * @var integer Paging offset.
     */
    public $Offset;

    /**
     * @var integer Paginate limit.
     */
    public $Limit;

    /**
     * @var string Search keywords support fuzzy matching.
     */
    public $SearchWord;

    /**
     * @var array Specifies the filter type for each selected element in the array of exchange types.
     */
    public $ExchangeTypeFilters;

    /**
     * @var array Specifies the exchange creation source. valid values: "system" (generated by the system), "user" (user-created).
     */
    public $ExchangeCreatorFilters;

    /**
     * @var string exchange name. specifies that it is used for exact matching.
     */
    public $ExchangeName;

    /**
     * @var string Sorting field.
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
     * @param string $InstanceId Instance id.
     * @param string $VirtualHost Specifies the vhost parameter.
     * @param integer $Offset Paging offset.
     * @param integer $Limit Paginate limit.
     * @param string $SearchWord Search keywords support fuzzy matching.
     * @param array $ExchangeTypeFilters Specifies the filter type for each selected element in the array of exchange types.
     * @param array $ExchangeCreatorFilters Specifies the exchange creation source. valid values: "system" (generated by the system), "user" (user-created).
     * @param string $ExchangeName exchange name. specifies that it is used for exact matching.
     * @param string $SortElement Sorting field.
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
