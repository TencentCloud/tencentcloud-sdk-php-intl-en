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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBudgetOperationLog request structure.
 *
 * @method integer getPageNo() Obtain Page number
 * @method void setPageNo(integer $PageNo) Set Page number
 * @method integer getPageSize() Obtain Number of Items per Page
 * @method void setPageSize(integer $PageSize) Set Number of Items per Page
 * @method string getBudgetId() Obtain Budget project id
 * @method void setBudgetId(string $BudgetId) Set Budget project id
 */
class DescribeBudgetOperationLogRequest extends AbstractModel
{
    /**
     * @var integer Page number
     */
    public $PageNo;

    /**
     * @var integer Number of Items per Page
     */
    public $PageSize;

    /**
     * @var string Budget project id
     */
    public $BudgetId;

    /**
     * @param integer $PageNo Page number
     * @param integer $PageSize Number of Items per Page
     * @param string $BudgetId Budget project id
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
        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }
    }
}
