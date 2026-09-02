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
 * DescribeBaselineMainTaskList request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getFilters() Obtain <p>Universal Filter Criteria. Supported Name: JobID (exact search by task ID), TaskStatus (task status: INIT/SCANNING/SUCCESS/FAILED), TaskType (task type: PERIODIC/MANUAL).</p>
 * @method void setFilters(array $Filters) Set <p>Universal Filter Criteria. Supported Name: JobID (exact search by task ID), TaskStatus (task status: INIT/SCANNING/SUCCESS/FAILED), TaskType (task type: PERIODIC/MANUAL).</p>
 * @method integer getLimit() Obtain <p>Number of items per page for paging query. Maximum value: 100. If exceeded, the server will automatically roll back to the default value 10.</p>
 * @method void setLimit(integer $Limit) Set <p>Number of items per page for paging query. Maximum value: 100. If exceeded, the server will automatically roll back to the default value 10.</p>
 * @method integer getOffset() Obtain <p>Starting offset amount for paging query. It starts from 0.</p>
 * @method void setOffset(integer $Offset) Set <p>Starting offset amount for paging query. It starts from 0.</p>
 * @method string getOrder() Obtain <p>Sorting order. Valid values: asc (ascending) and desc (descending). Default value: desc.</p>
 * @method void setOrder(string $Order) Set <p>Sorting order. Valid values: asc (ascending) and desc (descending). Default value: desc.</p>
 * @method string getBy() Obtain <p>Sort field name, an optional field defined by the specific API.</p>
 * @method void setBy(string $By) Set <p>Sort field name, an optional field defined by the specific API.</p>
 */
class DescribeBaselineMainTaskListRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Universal Filter Criteria. Supported Name: JobID (exact search by task ID), TaskStatus (task status: INIT/SCANNING/SUCCESS/FAILED), TaskType (task type: PERIODIC/MANUAL).</p>
     */
    public $Filters;

    /**
     * @var integer <p>Number of items per page for paging query. Maximum value: 100. If exceeded, the server will automatically roll back to the default value 10.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Starting offset amount for paging query. It starts from 0.</p>
     */
    public $Offset;

    /**
     * @var string <p>Sorting order. Valid values: asc (ascending) and desc (descending). Default value: desc.</p>
     */
    public $Order;

    /**
     * @var string <p>Sort field name, an optional field defined by the specific API.</p>
     */
    public $By;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Filters <p>Universal Filter Criteria. Supported Name: JobID (exact search by task ID), TaskStatus (task status: INIT/SCANNING/SUCCESS/FAILED), TaskType (task type: PERIODIC/MANUAL).</p>
     * @param integer $Limit <p>Number of items per page for paging query. Maximum value: 100. If exceeded, the server will automatically roll back to the default value 10.</p>
     * @param integer $Offset <p>Starting offset amount for paging query. It starts from 0.</p>
     * @param string $Order <p>Sorting order. Valid values: asc (ascending) and desc (descending). Default value: desc.</p>
     * @param string $By <p>Sort field name, an optional field defined by the specific API.</p>
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
