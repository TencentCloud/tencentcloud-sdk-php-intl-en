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
 * DescribeBudget request structure.
 *
 * @method integer getPageNo() Obtain Page number, int
 * @method void setPageNo(integer $PageNo) Set Page number, int
 * @method integer getPageSize() Obtain Number of items per page, integer
 * @method void setPageSize(integer $PageSize) Set Number of items per page, integer
 * @method string getBudgetId() Obtain Budget project id
 * @method void setBudgetId(string $BudgetId) Set Budget project id
 * @method string getBudgetName() Obtain Budget Name
 * @method void setBudgetName(string $BudgetName) Set Budget Name
 * @method string getBudgetStatus() Obtain EXPIRED, ACTIVE, ACTIVATED pending activation
 * @method void setBudgetStatus(string $BudgetStatus) Set EXPIRED, ACTIVE, ACTIVATED pending activation
 * @method array getCycleTypes() Obtain DAY day MONTH monthly QUARTER quarter YEAR annual
 * @method void setCycleTypes(array $CycleTypes) Set DAY day MONTH monthly QUARTER quarter YEAR annual
 */
class DescribeBudgetRequest extends AbstractModel
{
    /**
     * @var integer Page number, int
     */
    public $PageNo;

    /**
     * @var integer Number of items per page, integer
     */
    public $PageSize;

    /**
     * @var string Budget project id
     */
    public $BudgetId;

    /**
     * @var string Budget Name
     */
    public $BudgetName;

    /**
     * @var string EXPIRED, ACTIVE, ACTIVATED pending activation
     */
    public $BudgetStatus;

    /**
     * @var array DAY day MONTH monthly QUARTER quarter YEAR annual
     */
    public $CycleTypes;

    /**
     * @param integer $PageNo Page number, int
     * @param integer $PageSize Number of items per page, integer
     * @param string $BudgetId Budget project id
     * @param string $BudgetName Budget Name
     * @param string $BudgetStatus EXPIRED, ACTIVE, ACTIVATED pending activation
     * @param array $CycleTypes DAY day MONTH monthly QUARTER quarter YEAR annual
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

        if (array_key_exists("BudgetName",$param) and $param["BudgetName"] !== null) {
            $this->BudgetName = $param["BudgetName"];
        }

        if (array_key_exists("BudgetStatus",$param) and $param["BudgetStatus"] !== null) {
            $this->BudgetStatus = $param["BudgetStatus"];
        }

        if (array_key_exists("CycleTypes",$param) and $param["CycleTypes"] !== null) {
            $this->CycleTypes = $param["CycleTypes"];
        }
    }
}
