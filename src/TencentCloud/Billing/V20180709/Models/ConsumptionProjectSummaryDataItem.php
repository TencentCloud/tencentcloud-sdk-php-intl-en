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
 * Consumption details summarized by project
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getProjectName() Obtain Project name
 * @method void setProjectName(string $ProjectName) Set Project name
 * @method string getRealTotalCost() Obtain Discounted total price
 * @method void setRealTotalCost(string $RealTotalCost) Set Discounted total price
 * @method ConsumptionSummaryTrend getTrend() Obtain Trend
 * @method void setTrend(ConsumptionSummaryTrend $Trend) Set Trend
 * @method array getBusiness() Obtain Product consumption details
 * @method void setBusiness(array $Business) Set Product consumption details
 * @method string getCashPayAmount() Obtain Cash
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIncentivePayAmount() Obtain Bonus
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Bonus
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVoucherPayAmount() Obtain VoucherNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set VoucherNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getTransferPayAmount() Obtain Share revenueNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Share revenueNote: This field may return null, indicating that no valid values can be obtained.
 */
class ConsumptionProjectSummaryDataItem extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Project name
     */
    public $ProjectName;

    /**
     * @var string Discounted total price
     */
    public $RealTotalCost;

    /**
     * @var ConsumptionSummaryTrend Trend
     */
    public $Trend;

    /**
     * @var array Product consumption details
     */
    public $Business;

    /**
     * @var string Cash
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CashPayAmount;

    /**
     * @var string Bonus
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IncentivePayAmount;

    /**
     * @var string VoucherNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoucherPayAmount;

    /**
     * @var string Share revenueNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransferPayAmount;

    /**
     * @param string $ProjectId Project ID
     * @param string $ProjectName Project name
     * @param string $RealTotalCost Discounted total price
     * @param ConsumptionSummaryTrend $Trend Trend
     * @param array $Business Product consumption details
     * @param string $CashPayAmount Cash
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IncentivePayAmount Bonus
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VoucherPayAmount VoucherNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $TransferPayAmount Share revenueNote: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("Trend",$param) and $param["Trend"] !== null) {
            $this->Trend = new ConsumptionSummaryTrend();
            $this->Trend->deserialize($param["Trend"]);
        }

        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = [];
            foreach ($param["Business"] as $key => $value){
                $obj = new ConsumptionBusinessSummaryDataItem();
                $obj->deserialize($value);
                array_push($this->Business, $obj);
            }
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }
    }
}
