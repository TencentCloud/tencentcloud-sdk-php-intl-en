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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetImageRegistryList request structure.
 *
 * @method integer getLimit() Obtain <p>Number of items to return. The default number is 10, and the maximum number is 100.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items to return. The default number is 10, and the maximum number is 100.</p>
 * @method integer getOffset() Obtain <p>Offset. Default value: 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset. Default value: 0.</p>
 * @method array getFilters() Obtain <p>Filter field.<br>IsAuthorized can be set to all, 0 (unauthorized), and 1 (authorized).</p>
 * @method void setFilters(array $Filters) Set <p>Filter field.<br>IsAuthorized can be set to all, 0 (unauthorized), and 1 (authorized).</p>
 * @method string getBy() Obtain <p>Sorting field.</p>
 * @method void setBy(string $By) Set <p>Sorting field.</p>
 * @method string getOrder() Obtain <p>Sorting method. Valid values: asc and desc.</p>
 * @method void setOrder(string $Order) Set <p>Sorting method. Valid values: asc and desc.</p>
 * @method boolean getOnlyShowLatest() Obtain <p>Whether to display only the latest image of each repository. Default value: false.</p>
 * @method void setOnlyShowLatest(boolean $OnlyShowLatest) Set <p>Whether to display only the latest image of each repository. Default value: false.</p>
 * @method boolean getIsRunning() Obtain <p>Whether to display only running container images.</p>
 * @method void setIsRunning(boolean $IsRunning) Set <p>Whether to display only running container images.</p>
 */
class DescribeAssetImageRegistryListRequest extends AbstractModel
{
    /**
     * @var integer <p>Number of items to return. The default number is 10, and the maximum number is 100.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset. Default value: 0.</p>
     */
    public $Offset;

    /**
     * @var array <p>Filter field.<br>IsAuthorized can be set to all, 0 (unauthorized), and 1 (authorized).</p>
     */
    public $Filters;

    /**
     * @var string <p>Sorting field.</p>
     */
    public $By;

    /**
     * @var string <p>Sorting method. Valid values: asc and desc.</p>
     */
    public $Order;

    /**
     * @var boolean <p>Whether to display only the latest image of each repository. Default value: false.</p>
     */
    public $OnlyShowLatest;

    /**
     * @var boolean <p>Whether to display only running container images.</p>
     */
    public $IsRunning;

    /**
     * @param integer $Limit <p>Number of items to return. The default number is 10, and the maximum number is 100.</p>
     * @param integer $Offset <p>Offset. Default value: 0.</p>
     * @param array $Filters <p>Filter field.<br>IsAuthorized can be set to all, 0 (unauthorized), and 1 (authorized).</p>
     * @param string $By <p>Sorting field.</p>
     * @param string $Order <p>Sorting method. Valid values: asc and desc.</p>
     * @param boolean $OnlyShowLatest <p>Whether to display only the latest image of each repository. Default value: false.</p>
     * @param boolean $IsRunning <p>Whether to display only running container images.</p>
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

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OnlyShowLatest",$param) and $param["OnlyShowLatest"] !== null) {
            $this->OnlyShowLatest = $param["OnlyShowLatest"];
        }

        if (array_key_exists("IsRunning",$param) and $param["IsRunning"] !== null) {
            $this->IsRunning = $param["IsRunning"];
        }
    }
}
