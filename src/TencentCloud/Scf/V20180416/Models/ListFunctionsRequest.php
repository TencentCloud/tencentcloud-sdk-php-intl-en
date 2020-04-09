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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListFunctions request structure.
 *
 * @method string getOrder() Obtain It specifies whether to return the results in ascending or descending order. The value is `ASC` or `DESC`.
 * @method void setOrder(string $Order) Set It specifies whether to return the results in ascending or descending order. The value is `ASC` or `DESC`.
 * @method string getOrderby() Obtain It specifies the sorting order of the results according to a specified field, such as `AddTime`, `ModTime`, and `FunctionName`.
 * @method void setOrderby(string $Orderby) Set It specifies the sorting order of the results according to a specified field, such as `AddTime`, `ModTime`, and `FunctionName`.
 * @method integer getOffset() Obtain Data offset. The default value is `0`.
 * @method void setOffset(integer $Offset) Set Data offset. The default value is `0`.
 * @method integer getLimit() Obtain Return data length. The default value is `20`.
 * @method void setLimit(integer $Limit) Set Return data length. The default value is `20`.
 * @method string getSearchKey() Obtain It specifies whether to support fuzzy matching for the function name.
 * @method void setSearchKey(string $SearchKey) Set It specifies whether to support fuzzy matching for the function name.
 * @method string getNamespace() Obtain Namespace
 * @method void setNamespace(string $Namespace) Set Namespace
 * @method string getDescription() Obtain Function description. Fuzzy search is supported.
 * @method void setDescription(string $Description) Set Function description. Fuzzy search is supported.
 * @method array getFilters() Obtain Filters
- tag:tag-key - String - Required: No - Filtering criteria based on tag-key - value pairs. Replace `tag-key` with a specific tag-key.

The maximum number of `Filters` for each request is 10, and that of `Filter.Values` is 5.
 * @method void setFilters(array $Filters) Set Filters
- tag:tag-key - String - Required: No - Filtering criteria based on tag-key - value pairs. Replace `tag-key` with a specific tag-key.

The maximum number of `Filters` for each request is 10, and that of `Filter.Values` is 5.
 */
class ListFunctionsRequest extends AbstractModel
{
    /**
     * @var string It specifies whether to return the results in ascending or descending order. The value is `ASC` or `DESC`.
     */
    public $Order;

    /**
     * @var string It specifies the sorting order of the results according to a specified field, such as `AddTime`, `ModTime`, and `FunctionName`.
     */
    public $Orderby;

    /**
     * @var integer Data offset. The default value is `0`.
     */
    public $Offset;

    /**
     * @var integer Return data length. The default value is `20`.
     */
    public $Limit;

    /**
     * @var string It specifies whether to support fuzzy matching for the function name.
     */
    public $SearchKey;

    /**
     * @var string Namespace
     */
    public $Namespace;

    /**
     * @var string Function description. Fuzzy search is supported.
     */
    public $Description;

    /**
     * @var array Filters
- tag:tag-key - String - Required: No - Filtering criteria based on tag-key - value pairs. Replace `tag-key` with a specific tag-key.

The maximum number of `Filters` for each request is 10, and that of `Filter.Values` is 5.
     */
    public $Filters;

    /**
     * @param string $Order It specifies whether to return the results in ascending or descending order. The value is `ASC` or `DESC`.
     * @param string $Orderby It specifies the sorting order of the results according to a specified field, such as `AddTime`, `ModTime`, and `FunctionName`.
     * @param integer $Offset Data offset. The default value is `0`.
     * @param integer $Limit Return data length. The default value is `20`.
     * @param string $SearchKey It specifies whether to support fuzzy matching for the function name.
     * @param string $Namespace Namespace
     * @param string $Description Function description. Fuzzy search is supported.
     * @param array $Filters Filters
- tag:tag-key - String - Required: No - Filtering criteria based on tag-key - value pairs. Replace `tag-key` with a specific tag-key.

The maximum number of `Filters` for each request is 10, and that of `Filter.Values` is 5.
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
        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Orderby",$param) and $param["Orderby"] !== null) {
            $this->Orderby = $param["Orderby"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
