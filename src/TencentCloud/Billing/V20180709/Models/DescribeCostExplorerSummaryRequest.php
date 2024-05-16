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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCostExplorerSummary request structure.
 *
 * @method string getBeginTime() Obtain The start time of the period in the format of yyyy-mm-dd hh:ii:ss.
 * @method void setBeginTime(string $BeginTime) Set The start time of the period in the format of yyyy-mm-dd hh:ii:ss.
 * @method string getEndTime() Obtain The end time of the period in the format of yyyy-mm-dd hh:ii:ss.
 * @method void setEndTime(string $EndTime) Set The end time of the period in the format of yyyy-mm-dd hh:ii:ss.
 * @method string getBillType() Obtain Bill type: 1-cost bill, 2-consumption bill
 * @method void setBillType(string $BillType) Set Bill type: 1-cost bill, 2-consumption bill
 * @method string getPeriodType() Obtain Statistical period: day-day, month-month;
 * @method void setPeriodType(string $PeriodType) Set Statistical period: day-day, month-month;
 * @method string getDimensions() Obtain Classification dimension (data aggregation dimension). Query classification dimension. (Use classification dimension code input parameter.) Input parameter enumeration value:default = Total only
feeType = Fee typebillType = Bill typebusiness = Product
product = Sub-productregion=Region
zone = Availability zoneactionType = Transaction typepayMode = Billing modetags = Tagproject = ProjectpayerUin = Payer accountownerUin = User account
 * @method void setDimensions(string $Dimensions) Set Classification dimension (data aggregation dimension). Query classification dimension. (Use classification dimension code input parameter.) Input parameter enumeration value:default = Total only
feeType = Fee typebillType = Bill typebusiness = Product
product = Sub-productregion=Region
zone = Availability zoneactionType = Transaction typepayMode = Billing modetags = Tagproject = ProjectpayerUin = Payer accountownerUin = User account
 * @method string getFeeType() Obtain Fee type: cost-total cost, totalCost-original price cost
 * @method void setFeeType(string $FeeType) Set Fee type: cost-total cost, totalCost-original price cost
 * @method integer getPageSize() Obtain Quantity. The maximum value per page is 100.
 * @method void setPageSize(integer $PageSize) Set Quantity. The maximum value per page is 100.
 * @method integer getPageNo() Obtain Starting page, where PageNo=1 indicates the first page, PageNo=2 indicates the second page, and so on.
 * @method void setPageNo(integer $PageNo) Set Starting page, where PageNo=1 indicates the first page, PageNo=2 indicates the second page, and so on.
 * @method string getTagKeyStr() Obtain Cost allocation tag value
 * @method void setTagKeyStr(string $TagKeyStr) Set Cost allocation tag value
 * @method string getNeedConditionValue() Obtain Whether the filter box is needed: 1- indicates it is needed, 0- indicates it is not needed. If it is not specified, it is not required by default.
 * @method void setNeedConditionValue(string $NeedConditionValue) Set Whether the filter box is needed: 1- indicates it is needed, 0- indicates it is not needed. If it is not specified, it is not required by default.
 * @method AnalyseConditions getConditions() Obtain Filter parameters
 * @method void setConditions(AnalyseConditions $Conditions) Set Filter parameters
 */
class DescribeCostExplorerSummaryRequest extends AbstractModel
{
    /**
     * @var string The start time of the period in the format of yyyy-mm-dd hh:ii:ss.
     */
    public $BeginTime;

    /**
     * @var string The end time of the period in the format of yyyy-mm-dd hh:ii:ss.
     */
    public $EndTime;

    /**
     * @var string Bill type: 1-cost bill, 2-consumption bill
     */
    public $BillType;

    /**
     * @var string Statistical period: day-day, month-month;
     */
    public $PeriodType;

    /**
     * @var string Classification dimension (data aggregation dimension). Query classification dimension. (Use classification dimension code input parameter.) Input parameter enumeration value:default = Total only
feeType = Fee typebillType = Bill typebusiness = Product
product = Sub-productregion=Region
zone = Availability zoneactionType = Transaction typepayMode = Billing modetags = Tagproject = ProjectpayerUin = Payer accountownerUin = User account
     */
    public $Dimensions;

    /**
     * @var string Fee type: cost-total cost, totalCost-original price cost
     */
    public $FeeType;

    /**
     * @var integer Quantity. The maximum value per page is 100.
     */
    public $PageSize;

    /**
     * @var integer Starting page, where PageNo=1 indicates the first page, PageNo=2 indicates the second page, and so on.
     */
    public $PageNo;

    /**
     * @var string Cost allocation tag value
     */
    public $TagKeyStr;

    /**
     * @var string Whether the filter box is needed: 1- indicates it is needed, 0- indicates it is not needed. If it is not specified, it is not required by default.
     */
    public $NeedConditionValue;

    /**
     * @var AnalyseConditions Filter parameters
     */
    public $Conditions;

    /**
     * @param string $BeginTime The start time of the period in the format of yyyy-mm-dd hh:ii:ss.
     * @param string $EndTime The end time of the period in the format of yyyy-mm-dd hh:ii:ss.
     * @param string $BillType Bill type: 1-cost bill, 2-consumption bill
     * @param string $PeriodType Statistical period: day-day, month-month;
     * @param string $Dimensions Classification dimension (data aggregation dimension). Query classification dimension. (Use classification dimension code input parameter.) Input parameter enumeration value:default = Total only
feeType = Fee typebillType = Bill typebusiness = Product
product = Sub-productregion=Region
zone = Availability zoneactionType = Transaction typepayMode = Billing modetags = Tagproject = ProjectpayerUin = Payer accountownerUin = User account
     * @param string $FeeType Fee type: cost-total cost, totalCost-original price cost
     * @param integer $PageSize Quantity. The maximum value per page is 100.
     * @param integer $PageNo Starting page, where PageNo=1 indicates the first page, PageNo=2 indicates the second page, and so on.
     * @param string $TagKeyStr Cost allocation tag value
     * @param string $NeedConditionValue Whether the filter box is needed: 1- indicates it is needed, 0- indicates it is not needed. If it is not specified, it is not required by default.
     * @param AnalyseConditions $Conditions Filter parameters
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            $this->BillType = $param["BillType"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = $param["Dimensions"];
        }

        if (array_key_exists("FeeType",$param) and $param["FeeType"] !== null) {
            $this->FeeType = $param["FeeType"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("TagKeyStr",$param) and $param["TagKeyStr"] !== null) {
            $this->TagKeyStr = $param["TagKeyStr"];
        }

        if (array_key_exists("NeedConditionValue",$param) and $param["NeedConditionValue"] !== null) {
            $this->NeedConditionValue = $param["NeedConditionValue"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = new AnalyseConditions();
            $this->Conditions->deserialize($param["Conditions"]);
        }
    }
}
