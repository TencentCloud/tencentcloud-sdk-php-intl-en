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
 * CreateScanStatisticExportJob request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method Filter getFilter() Obtain Filtered Content
 * @method void setFilter(Filter $Filter) Set Filtered Content
 * @method integer getLimit() Obtain Pagination size.
 * @method void setLimit(integer $Limit) Set Pagination size.
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method string getOrder() Obtain Sorting type
 * @method void setOrder(string $Order) Set Sorting type
 * @method string getBy() Obtain Sorting field.
 * @method void setBy(string $By) Set Sorting field.
 * @method string getTaskLogId() Obtain Health check task id
 * @method void setTaskLogId(string $TaskLogId) Set Health check task id
 */
class CreateScanStatisticExportJobRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var Filter Filtered Content
     */
    public $Filter;

    /**
     * @var integer Pagination size.
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var string Sorting type
     */
    public $Order;

    /**
     * @var string Sorting field.
     */
    public $By;

    /**
     * @var string Health check task id
     */
    public $TaskLogId;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param Filter $Filter Filtered Content
     * @param integer $Limit Pagination size.
     * @param integer $Offset Offset.
     * @param string $Order Sorting type
     * @param string $By Sorting field.
     * @param string $TaskLogId Health check task id
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

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
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

        if (array_key_exists("TaskLogId",$param) and $param["TaskLogId"] !== null) {
            $this->TaskLogId = $param["TaskLogId"];
        }
    }
}
