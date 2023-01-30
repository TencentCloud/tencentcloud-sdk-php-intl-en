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
 * DescribeImageComponentList request structure.
 *
 * @method string getImageID() Obtain Image ID
 * @method void setImageID(string $ImageID) Set Image ID
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method array getFilters() Obtain Filter
<li>ComponentName- String - Required: No - Image component name</li><li>ComponentVersion- String - Required: No - Image component version</li><li>ComponentType- String - Required: No - Image component type</li><li>VulLevel- String - Required: No - Vulnerability severity</li><li>HasVul- String - Required: No - Whether there is a vulnerability. Valid values: `true` (yes); `false` (no). If `ComponentName` is not passed in or is `ALL`, it indicates all.</li>
 * @method void setFilters(array $Filters) Set Filter
<li>ComponentName- String - Required: No - Image component name</li><li>ComponentVersion- String - Required: No - Image component version</li><li>ComponentType- String - Required: No - Image component type</li><li>VulLevel- String - Required: No - Vulnerability severity</li><li>HasVul- String - Required: No - Whether there is a vulnerability. Valid values: `true` (yes); `false` (no). If `ComponentName` is not passed in or is `ALL`, it indicates all.</li>
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 * @method string getOrder() Obtain Sorting order. Valid values: `desc`, `asc`.
 * @method void setOrder(string $Order) Set Sorting order. Valid values: `desc`, `asc`.
 */
class DescribeImageComponentListRequest extends AbstractModel
{
    /**
     * @var string Image ID
     */
    public $ImageID;

    /**
     * @var integer Number of results to be returned. Default value: `10`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var array Filter
<li>ComponentName- String - Required: No - Image component name</li><li>ComponentVersion- String - Required: No - Image component version</li><li>ComponentType- String - Required: No - Image component type</li><li>VulLevel- String - Required: No - Vulnerability severity</li><li>HasVul- String - Required: No - Whether there is a vulnerability. Valid values: `true` (yes); `false` (no). If `ComponentName` is not passed in or is `ALL`, it indicates all.</li>
     */
    public $Filters;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @var string Sorting order. Valid values: `desc`, `asc`.
     */
    public $Order;

    /**
     * @param string $ImageID Image ID
     * @param integer $Limit Number of results to be returned. Default value: `10`. Maximum value: `100`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param array $Filters Filter
<li>ComponentName- String - Required: No - Image component name</li><li>ComponentVersion- String - Required: No - Image component version</li><li>ComponentType- String - Required: No - Image component type</li><li>VulLevel- String - Required: No - Vulnerability severity</li><li>HasVul- String - Required: No - Whether there is a vulnerability. Valid values: `true` (yes); `false` (no). If `ComponentName` is not passed in or is `ALL`, it indicates all.</li>
     * @param string $By Sorting field
     * @param string $Order Sorting order. Valid values: `desc`, `asc`.
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
        if (array_key_exists("ImageID",$param) and $param["ImageID"] !== null) {
            $this->ImageID = $param["ImageID"];
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

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
