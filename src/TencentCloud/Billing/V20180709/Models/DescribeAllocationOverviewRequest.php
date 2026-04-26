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
 * DescribeAllocationOverview request structure.
 *
 * @method integer getLimit() Obtain Quantity, with the maximum value of 1,000
 * @method void setLimit(integer $Limit) Set Quantity, with the maximum value of 1,000
 * @method integer getOffset() Obtain Pagination offset. If offset is 0, it indicates the first page. If limit is 100, then offset is 100, it indicates the second page; if offset is 200, it indicates the third page, and so on
 * @method void setOffset(integer $Offset) Set Pagination offset. If offset is 0, it indicates the first page. If limit is 100, then offset is 100, it indicates the second page; if offset is 200, it indicates the third page, and so on
 * @method string getMonth() Obtain Bill month, in the format of 2024-02, which is the current month by default if not provided
 * @method void setMonth(string $Month) Set Bill month, in the format of 2024-02, which is the current month by default if not provided
 * @method string getPeriodType() Obtain Statistical period, with the enumerated values as follows:
month - Month
day - Day
 * @method void setPeriodType(string $PeriodType) Set Statistical period, with the enumerated values as follows:
month - Month
day - Day
 * @method array getTreeNodeUniqKeys() Obtain Unique identifier of a billing unit, used for filtering
 * @method void setTreeNodeUniqKeys(array $TreeNodeUniqKeys) Set Unique identifier of a billing unit, used for filtering
 * @method string getSort() Obtain Sorting field, with the enumerated values as follows: 
GatherCashPayAmount - Collected fees (cash)
GatherVoucherPayAmount - Collected fees (voucher)
GatherIncentivePayAmount - Collected fees (free credit)
GatherTransferPayAmount - Collected fees (royalty amount)
AllocateCashPayAmount - Allocated fees (cash)
AllocateVoucherPayAmount - Allocated fees (voucher)
AllocateIncentivePayAmount - Allocated fees (free credit)
AllocateTransferPayAmount - Allocated fees (royalty amount)
TotalCashPayAmount - Total fees (cash)
TotalVoucherPayAmount - Total fees (voucher)
TotalIncentivePayAmount - Total fees (free credit)
TotalTransferPayAmount - Total fees (royalty amount)
GatherRealCost - Collected fees (discounted total)
AllocateRealCost - Allocated fees (discounted total)
RealTotalCost - Total fees (discounted total)
Ratio - Proportion (discounted total)
 * @method void setSort(string $Sort) Set Sorting field, with the enumerated values as follows: 
GatherCashPayAmount - Collected fees (cash)
GatherVoucherPayAmount - Collected fees (voucher)
GatherIncentivePayAmount - Collected fees (free credit)
GatherTransferPayAmount - Collected fees (royalty amount)
AllocateCashPayAmount - Allocated fees (cash)
AllocateVoucherPayAmount - Allocated fees (voucher)
AllocateIncentivePayAmount - Allocated fees (free credit)
AllocateTransferPayAmount - Allocated fees (royalty amount)
TotalCashPayAmount - Total fees (cash)
TotalVoucherPayAmount - Total fees (voucher)
TotalIncentivePayAmount - Total fees (free credit)
TotalTransferPayAmount - Total fees (royalty amount)
GatherRealCost - Collected fees (discounted total)
AllocateRealCost - Allocated fees (discounted total)
RealTotalCost - Total fees (discounted total)
Ratio - Proportion (discounted total)
 * @method string getSortType() Obtain Sorting type, with the enumerated values as follows:
asc - Ascending
desc - Descending
 * @method void setSortType(string $SortType) Set Sorting type, with the enumerated values as follows:
asc - Ascending
desc - Descending
 * @method array getBillDates() Obtain Date, used for filtering
 * @method void setBillDates(array $BillDates) Set Date, used for filtering
 */
class DescribeAllocationOverviewRequest extends AbstractModel
{
    /**
     * @var integer Quantity, with the maximum value of 1,000
     */
    public $Limit;

    /**
     * @var integer Pagination offset. If offset is 0, it indicates the first page. If limit is 100, then offset is 100, it indicates the second page; if offset is 200, it indicates the third page, and so on
     */
    public $Offset;

    /**
     * @var string Bill month, in the format of 2024-02, which is the current month by default if not provided
     */
    public $Month;

    /**
     * @var string Statistical period, with the enumerated values as follows:
month - Month
day - Day
     */
    public $PeriodType;

    /**
     * @var array Unique identifier of a billing unit, used for filtering
     */
    public $TreeNodeUniqKeys;

    /**
     * @var string Sorting field, with the enumerated values as follows: 
GatherCashPayAmount - Collected fees (cash)
GatherVoucherPayAmount - Collected fees (voucher)
GatherIncentivePayAmount - Collected fees (free credit)
GatherTransferPayAmount - Collected fees (royalty amount)
AllocateCashPayAmount - Allocated fees (cash)
AllocateVoucherPayAmount - Allocated fees (voucher)
AllocateIncentivePayAmount - Allocated fees (free credit)
AllocateTransferPayAmount - Allocated fees (royalty amount)
TotalCashPayAmount - Total fees (cash)
TotalVoucherPayAmount - Total fees (voucher)
TotalIncentivePayAmount - Total fees (free credit)
TotalTransferPayAmount - Total fees (royalty amount)
GatherRealCost - Collected fees (discounted total)
AllocateRealCost - Allocated fees (discounted total)
RealTotalCost - Total fees (discounted total)
Ratio - Proportion (discounted total)
     */
    public $Sort;

    /**
     * @var string Sorting type, with the enumerated values as follows:
asc - Ascending
desc - Descending
     */
    public $SortType;

    /**
     * @var array Date, used for filtering
     */
    public $BillDates;

    /**
     * @param integer $Limit Quantity, with the maximum value of 1,000
     * @param integer $Offset Pagination offset. If offset is 0, it indicates the first page. If limit is 100, then offset is 100, it indicates the second page; if offset is 200, it indicates the third page, and so on
     * @param string $Month Bill month, in the format of 2024-02, which is the current month by default if not provided
     * @param string $PeriodType Statistical period, with the enumerated values as follows:
month - Month
day - Day
     * @param array $TreeNodeUniqKeys Unique identifier of a billing unit, used for filtering
     * @param string $Sort Sorting field, with the enumerated values as follows: 
GatherCashPayAmount - Collected fees (cash)
GatherVoucherPayAmount - Collected fees (voucher)
GatherIncentivePayAmount - Collected fees (free credit)
GatherTransferPayAmount - Collected fees (royalty amount)
AllocateCashPayAmount - Allocated fees (cash)
AllocateVoucherPayAmount - Allocated fees (voucher)
AllocateIncentivePayAmount - Allocated fees (free credit)
AllocateTransferPayAmount - Allocated fees (royalty amount)
TotalCashPayAmount - Total fees (cash)
TotalVoucherPayAmount - Total fees (voucher)
TotalIncentivePayAmount - Total fees (free credit)
TotalTransferPayAmount - Total fees (royalty amount)
GatherRealCost - Collected fees (discounted total)
AllocateRealCost - Allocated fees (discounted total)
RealTotalCost - Total fees (discounted total)
Ratio - Proportion (discounted total)
     * @param string $SortType Sorting type, with the enumerated values as follows:
asc - Ascending
desc - Descending
     * @param array $BillDates Date, used for filtering
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

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("TreeNodeUniqKeys",$param) and $param["TreeNodeUniqKeys"] !== null) {
            $this->TreeNodeUniqKeys = $param["TreeNodeUniqKeys"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("BillDates",$param) and $param["BillDates"] !== null) {
            $this->BillDates = $param["BillDates"];
        }
    }
}
