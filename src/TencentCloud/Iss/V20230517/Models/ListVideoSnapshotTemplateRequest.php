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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListVideoSnapshotTemplate request structure.
 *
 * @method string getName() Obtain <p>Template name</p>
 * @method void setName(string $Name) Set <p>Template name</p>
 * @method integer getType() Obtain <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
 * @method void setType(integer $Type) Set <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
 * @method string getSort() Obtain <p>Sorting parameter</p><p>Default value: update_time</p>
 * @method void setSort(string $Sort) Set <p>Sorting parameter</p><p>Default value: update_time</p>
 * @method string getOrder() Obtain <p>Sort order</p><p>Enumeration values:</p><ul><li>desc: in descending order</li><li>asc: in ascending order</li></ul><p>Default value: desc</p>
 * @method void setOrder(string $Order) Set <p>Sort order</p><p>Enumeration values:</p><ul><li>desc: in descending order</li><li>asc: in ascending order</li></ul><p>Default value: desc</p>
 * @method integer getPageNumber() Obtain <p>Page number</p><p>Default value: 1</p>
 * @method void setPageNumber(integer $PageNumber) Set <p>Page number</p><p>Default value: 1</p>
 * @method integer getPageSize() Obtain <p>Number of items per page</p><p>Default value: 20</p>
 * @method void setPageSize(integer $PageSize) Set <p>Number of items per page</p><p>Default value: 20</p>
 */
class ListVideoSnapshotTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>Template name</p>
     */
    public $Name;

    /**
     * @var integer <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
     */
    public $Type;

    /**
     * @var string <p>Sorting parameter</p><p>Default value: update_time</p>
     */
    public $Sort;

    /**
     * @var string <p>Sort order</p><p>Enumeration values:</p><ul><li>desc: in descending order</li><li>asc: in ascending order</li></ul><p>Default value: desc</p>
     */
    public $Order;

    /**
     * @var integer <p>Page number</p><p>Default value: 1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>Number of items per page</p><p>Default value: 20</p>
     */
    public $PageSize;

    /**
     * @param string $Name <p>Template name</p>
     * @param integer $Type <p>Screenshot type</p><p>Enumeration values:</p><ul><li>1: Real-time frame capture</li><li>2: Low frequency frame capture</li></ul>
     * @param string $Sort <p>Sorting parameter</p><p>Default value: update_time</p>
     * @param string $Order <p>Sort order</p><p>Enumeration values:</p><ul><li>desc: in descending order</li><li>asc: in ascending order</li></ul><p>Default value: desc</p>
     * @param integer $PageNumber <p>Page number</p><p>Default value: 1</p>
     * @param integer $PageSize <p>Number of items per page</p><p>Default value: 20</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
