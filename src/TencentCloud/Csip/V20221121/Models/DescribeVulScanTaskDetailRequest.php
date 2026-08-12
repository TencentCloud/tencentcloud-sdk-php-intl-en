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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulScanTaskDetail request structure.
 *
 * @method integer getId() Obtain <p>Task ID.</p>
 * @method void setId(integer $Id) Set <p>Task ID.</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Filter criteria, support the following Name:</p><li>InstanceId - Asset Instance ID, exact match</li><li>InstanceName - Asset instance name, fuzzy matching (exact matching when ExactMatch=1)</li><li>Ip - Asset IP, exact match</li><li>Status - Scan status, exact match</li>
 * @method void setFilters(array $Filters) Set <p>Filter criteria, support the following Name:</p><li>InstanceId - Asset Instance ID, exact match</li><li>InstanceName - Asset instance name, fuzzy matching (exact matching when ExactMatch=1)</li><li>Ip - Asset IP, exact match</li><li>Status - Scan status, exact match</li>
 * @method integer getLimit() Obtain <p>Page size. Default: 10. Maximum: 100</p>
 * @method void setLimit(integer $Limit) Set <p>Page size. Default: 10. Maximum: 100</p>
 * @method integer getOffset() Obtain <p>Pagination offset, starting from 0</p>
 * @method void setOffset(integer $Offset) Set <p>Pagination offset, starting from 0</p>
 * @method string getOrder() Obtain <p>Sorting order: asc (ascending)/ desc (descending). Default is desc.</p>
 * @method void setOrder(string $Order) Set <p>Sorting order: asc (ascending)/ desc (descending). Default is desc.</p>
 * @method string getBy() Obtain <p>Sorting field, default sorting order is creation time (CreateTime)</p>
 * @method void setBy(string $By) Set <p>Sorting field, default sorting order is creation time (CreateTime)</p>
 */
class DescribeVulScanTaskDetailRequest extends AbstractModel
{
    /**
     * @var integer <p>Task ID.</p>
     */
    public $Id;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Filter criteria, support the following Name:</p><li>InstanceId - Asset Instance ID, exact match</li><li>InstanceName - Asset instance name, fuzzy matching (exact matching when ExactMatch=1)</li><li>Ip - Asset IP, exact match</li><li>Status - Scan status, exact match</li>
     */
    public $Filters;

    /**
     * @var integer <p>Page size. Default: 10. Maximum: 100</p>
     */
    public $Limit;

    /**
     * @var integer <p>Pagination offset, starting from 0</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting order: asc (ascending)/ desc (descending). Default is desc.</p>
     */
    public $Order;

    /**
     * @var string <p>Sorting field, default sorting order is creation time (CreateTime)</p>
     */
    public $By;

    /**
     * @param integer $Id <p>Task ID.</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Filter criteria, support the following Name:</p><li>InstanceId - Asset Instance ID, exact match</li><li>InstanceName - Asset instance name, fuzzy matching (exact matching when ExactMatch=1)</li><li>Ip - Asset IP, exact match</li><li>Status - Scan status, exact match</li>
     * @param integer $Limit <p>Page size. Default: 10. Maximum: 100</p>
     * @param integer $Offset <p>Pagination offset, starting from 0</p>
     * @param string $Order <p>Sorting order: asc (ascending)/ desc (descending). Default is desc.</p>
     * @param string $By <p>Sorting field, default sorting order is creation time (CreateTime)</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
