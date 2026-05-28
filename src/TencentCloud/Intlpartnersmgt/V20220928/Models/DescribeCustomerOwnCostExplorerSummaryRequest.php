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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomerOwnCostExplorerSummary request structure.
 *
 * @method string getDimension() Obtain <p>Classification dimension</p><p>Enumeration value:</p><ul><li>Default: Default dimension</li><li>Business: Product</li><li>Product: Subproduct</li><li>Region: Region</li><li>Zone: Availability zone</li><li>ActionType: Transaction type</li><li>PayMode: Payment mode</li><li>Project: Project</li><li>PayerUin: Payer uin</li><li>OwnerUin: Owner uin</li><li>Tag: Tag</li></ul>
 * @method void setDimension(string $Dimension) Set <p>Classification dimension</p><p>Enumeration value:</p><ul><li>Default: Default dimension</li><li>Business: Product</li><li>Product: Subproduct</li><li>Region: Region</li><li>Zone: Availability zone</li><li>ActionType: Transaction type</li><li>PayMode: Payment mode</li><li>Project: Project</li><li>PayerUin: Payer uin</li><li>OwnerUin: Owner uin</li><li>Tag: Tag</li></ul>
 * @method string getFeeType() Obtain <p>Fee type</p><p>Enumeration value:</p><ul><li>originalCost: Original Cost</li><li>totalCost: Total Cost</li></ul>
 * @method void setFeeType(string $FeeType) Set <p>Fee type</p><p>Enumeration value:</p><ul><li>originalCost: Original Cost</li><li>totalCost: Total Cost</li></ul>
 * @method integer getBillType() Obtain <p>Billing mode</p><p>Enumeration value:</p><ul><li>1: Billing statement</li></ul>
 * @method void setBillType(integer $BillType) Set <p>Billing mode</p><p>Enumeration value:</p><ul><li>1: Billing statement</li></ul>
 * @method string getStartTime() Obtain <p>Start time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss, for example 2006-01-02 00:00:00</p><p>Input limit: When PeriodType is month, the time range is 6 calendar months; when PeriodType is day, the time range is 2 calendar months;</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss, for example 2006-01-02 00:00:00</p><p>Input limit: When PeriodType is month, the time range is 6 calendar months; when PeriodType is day, the time range is 2 calendar months;</p>
 * @method string getEndTime() Obtain <p>End time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss, for example 2006-01-02 00:00:00</p><p>Input limit: When PeriodType is month, the time range is 6 calendar months. When PeriodType is day, the time range is 2 calendar months.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss, for example 2006-01-02 00:00:00</p><p>Input limit: When PeriodType is month, the time range is 6 calendar months. When PeriodType is day, the time range is 2 calendar months.</p>
 * @method string getPeriodType() Obtain <p>Time type</p><p>Enumeration value:</p><ul><li>day: By day</li><li>month: By month</li></ul>
 * @method void setPeriodType(string $PeriodType) Set <p>Time type</p><p>Enumeration value:</p><ul><li>day: By day</li><li>month: By month</li></ul>
 * @method integer getPage() Obtain <p>Page number</p><p>Value range: [1, 10000]</p>
 * @method void setPage(integer $Page) Set <p>Page number</p><p>Value range: [1, 10000]</p>
 * @method integer getPageSize() Obtain <p>Page size</p><p>Value range: [1, 200]</p>
 * @method void setPageSize(integer $PageSize) Set <p>Page size</p><p>Value range: [1, 200]</p>
 * @method string getTagKey() Obtain <p>Tag key of the statistical dimension. When Dimension is Tag, TagKey is required.</p>
 * @method void setTagKey(string $TagKey) Set <p>Tag key of the statistical dimension. When Dimension is Tag, TagKey is required.</p>
 * @method CostAnalyzeFilter getFilter() Obtain Filter

You can pass the data returned by [DescribeCustomerOwnCostExplorerFilter](https://www.tencentcloud.com/document/product/1085/80125) as a parameter to filter the data.
 * @method void setFilter(CostAnalyzeFilter $Filter) Set Filter

You can pass the data returned by [DescribeCustomerOwnCostExplorerFilter](https://www.tencentcloud.com/document/product/1085/80125) as a parameter to filter the data.
 */
class DescribeCustomerOwnCostExplorerSummaryRequest extends AbstractModel
{
    /**
     * @var string <p>Classification dimension</p><p>Enumeration value:</p><ul><li>Default: Default dimension</li><li>Business: Product</li><li>Product: Subproduct</li><li>Region: Region</li><li>Zone: Availability zone</li><li>ActionType: Transaction type</li><li>PayMode: Payment mode</li><li>Project: Project</li><li>PayerUin: Payer uin</li><li>OwnerUin: Owner uin</li><li>Tag: Tag</li></ul>
     */
    public $Dimension;

    /**
     * @var string <p>Fee type</p><p>Enumeration value:</p><ul><li>originalCost: Original Cost</li><li>totalCost: Total Cost</li></ul>
     */
    public $FeeType;

    /**
     * @var integer <p>Billing mode</p><p>Enumeration value:</p><ul><li>1: Billing statement</li></ul>
     */
    public $BillType;

    /**
     * @var string <p>Start time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss, for example 2006-01-02 00:00:00</p><p>Input limit: When PeriodType is month, the time range is 6 calendar months; when PeriodType is day, the time range is 2 calendar months;</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss, for example 2006-01-02 00:00:00</p><p>Input limit: When PeriodType is month, the time range is 6 calendar months. When PeriodType is day, the time range is 2 calendar months.</p>
     */
    public $EndTime;

    /**
     * @var string <p>Time type</p><p>Enumeration value:</p><ul><li>day: By day</li><li>month: By month</li></ul>
     */
    public $PeriodType;

    /**
     * @var integer <p>Page number</p><p>Value range: [1, 10000]</p>
     */
    public $Page;

    /**
     * @var integer <p>Page size</p><p>Value range: [1, 200]</p>
     */
    public $PageSize;

    /**
     * @var string <p>Tag key of the statistical dimension. When Dimension is Tag, TagKey is required.</p>
     */
    public $TagKey;

    /**
     * @var CostAnalyzeFilter Filter

You can pass the data returned by [DescribeCustomerOwnCostExplorerFilter](https://www.tencentcloud.com/document/product/1085/80125) as a parameter to filter the data.
     */
    public $Filter;

    /**
     * @param string $Dimension <p>Classification dimension</p><p>Enumeration value:</p><ul><li>Default: Default dimension</li><li>Business: Product</li><li>Product: Subproduct</li><li>Region: Region</li><li>Zone: Availability zone</li><li>ActionType: Transaction type</li><li>PayMode: Payment mode</li><li>Project: Project</li><li>PayerUin: Payer uin</li><li>OwnerUin: Owner uin</li><li>Tag: Tag</li></ul>
     * @param string $FeeType <p>Fee type</p><p>Enumeration value:</p><ul><li>originalCost: Original Cost</li><li>totalCost: Total Cost</li></ul>
     * @param integer $BillType <p>Billing mode</p><p>Enumeration value:</p><ul><li>1: Billing statement</li></ul>
     * @param string $StartTime <p>Start time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss, for example 2006-01-02 00:00:00</p><p>Input limit: When PeriodType is month, the time range is 6 calendar months; when PeriodType is day, the time range is 2 calendar months;</p>
     * @param string $EndTime <p>End time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss, for example 2006-01-02 00:00:00</p><p>Input limit: When PeriodType is month, the time range is 6 calendar months. When PeriodType is day, the time range is 2 calendar months.</p>
     * @param string $PeriodType <p>Time type</p><p>Enumeration value:</p><ul><li>day: By day</li><li>month: By month</li></ul>
     * @param integer $Page <p>Page number</p><p>Value range: [1, 10000]</p>
     * @param integer $PageSize <p>Page size</p><p>Value range: [1, 200]</p>
     * @param string $TagKey <p>Tag key of the statistical dimension. When Dimension is Tag, TagKey is required.</p>
     * @param CostAnalyzeFilter $Filter Filter

You can pass the data returned by [DescribeCustomerOwnCostExplorerFilter](https://www.tencentcloud.com/document/product/1085/80125) as a parameter to filter the data.
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
        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("FeeType",$param) and $param["FeeType"] !== null) {
            $this->FeeType = $param["FeeType"];
        }

        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            $this->BillType = $param["BillType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new CostAnalyzeFilter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
