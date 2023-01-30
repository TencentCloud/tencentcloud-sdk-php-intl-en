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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProcessEventsExportJob request structure.
 *
 * @method integer getLimit() Obtain Number of results to be returned. Maximum value: `10000`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Maximum value: `10000`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method array getFilters() Obtain Filter parameter - status. Valid values: `EVENT_UNDEAL` (pending); `EVENT_DEALED` (processed); `EVENT_INGNORE` (ignored).
 * @method void setFilters(array $Filters) Set Filter parameter - status. Valid values: `EVENT_UNDEAL` (pending); `EVENT_DEALED` (processed); `EVENT_INGNORE` (ignored).
 * @method string getOrder() Obtain Valid values: `asc`, `desc`.
 * @method void setOrder(string $Order) Set Valid values: `asc`, `desc`.
 * @method string getBy() Obtain Sorting field: `latest_found_time`.
 * @method void setBy(string $By) Set Sorting field: `latest_found_time`.
 * @method array getExportField() Obtain Export field
 * @method void setExportField(array $ExportField) Set Export field
 */
class CreateProcessEventsExportJobRequest extends AbstractModel
{
    /**
     * @var integer Number of results to be returned. Maximum value: `10000`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var array Filter parameter - status. Valid values: `EVENT_UNDEAL` (pending); `EVENT_DEALED` (processed); `EVENT_INGNORE` (ignored).
     */
    public $Filters;

    /**
     * @var string Valid values: `asc`, `desc`.
     */
    public $Order;

    /**
     * @var string Sorting field: `latest_found_time`.
     */
    public $By;

    /**
     * @var array Export field
     */
    public $ExportField;

    /**
     * @param integer $Limit Number of results to be returned. Maximum value: `10000`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param array $Filters Filter parameter - status. Valid values: `EVENT_UNDEAL` (pending); `EVENT_DEALED` (processed); `EVENT_INGNORE` (ignored).
     * @param string $Order Valid values: `asc`, `desc`.
     * @param string $By Sorting field: `latest_found_time`.
     * @param array $ExportField Export field
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("ExportField",$param) and $param["ExportField"] !== null) {
            $this->ExportField = $param["ExportField"];
        }
    }
}
