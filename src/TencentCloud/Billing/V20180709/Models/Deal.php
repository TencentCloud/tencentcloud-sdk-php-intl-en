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
 * Order data object
 *
 * @method string getOrderId() Obtain Order ID.
 * @method void setOrderId(string $OrderId) Set Order ID.
 * @method integer getStatus() Obtain The status of the order. 1: unpaid; 2: paid; 3: shipping; 4: shipped; 5: shipment failed; 6: refunded; 7: closed case; 8: order expired; 9: order invalidated; 10: product invalidated; 11: third-party payment refused; 12: payment in process
 * @method void setStatus(integer $Status) Set The status of the order. 1: unpaid; 2: paid; 3: shipping; 4: shipped; 5: shipment failed; 6: refunded; 7: closed case; 8: order expired; 9: order invalidated; 10: product invalidated; 11: third-party payment refused; 12: payment in process
 * @method string getPayer() Obtain Payer
 * @method void setPayer(string $Payer) Set Payer
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getCreator() Obtain Creator
 * @method void setCreator(string $Creator) Set Creator
 * @method integer getRealTotalCost() Obtain Actual payment amount (pent)
 * @method void setRealTotalCost(integer $RealTotalCost) Set Actual payment amount (pent)
 * @method integer getVoucherDecline() Obtain Voucher offset amount (pent)
 * @method void setVoucherDecline(integer $VoucherDecline) Set Voucher offset amount (pent)
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method integer getGoodsCategoryId() Obtain Product category ID
 * @method void setGoodsCategoryId(integer $GoodsCategoryId) Set Product category ID
 * @method array getProductInfo() Obtain Product details
 * @method void setProductInfo(array $ProductInfo) Set Product details
 * @method float getTimeSpan() Obtain Duration
 * @method void setTimeSpan(float $TimeSpan) Set Duration
 * @method string getTimeUnit() Obtain Time unit
 * @method void setTimeUnit(string $TimeUnit) Set Time unit
 * @method string getCurrency() Obtain Currency unit
 * @method void setCurrency(string $Currency) Set Currency unit
 * @method float getPolicy() Obtain Discount rate
 * @method void setPolicy(float $Policy) Set Discount rate
 * @method float getPrice() Obtain Unit price (cents)
 * @method void setPrice(float $Price) Set Unit price (cents)
 * @method float getTotalCost() Obtain Original price (cents)
 * @method void setTotalCost(float $TotalCost) Set Original price (cents)
 * @method string getProductCode() Obtain Product code
 * @method void setProductCode(string $ProductCode) Set Product code
 * @method string getSubProductCode() Obtain Subproduct code
 * @method void setSubProductCode(string $SubProductCode) Set Subproduct code
 * @method string getBigDealId() Obtain Large order number.
 * @method void setBigDealId(string $BigDealId) Set Large order number.
 * @method string getFormula() Obtain Refund formula.
 * @method void setFormula(string $Formula) Set Refund formula.
 * @method string getRefReturnDeals() Obtain Refund involves order information.
 * @method void setRefReturnDeals(string $RefReturnDeals) Set Refund involves order information.
 * @method string getPayMode() Obtain Billing mode: `prePay` (prepaid), `postPay` (pay-as-you-go), `riPay` (reserved instance)
 * @method void setPayMode(string $PayMode) Set Billing mode: `prePay` (prepaid), `postPay` (pay-as-you-go), `riPay` (reserved instance)
 * @method string getAction() Obtain Transaction type

Modify network mode adjust bandwidth mode.
Adjust bandwidth size.
`Refund`: refund.
downgrade.
upgrade configuration.
renew.
purchase.
preMoveOut monthly subscription resource migration out.
preMoveIn specifies the monthly subscription resources to migrate.
preToPost specifies the prepaid to postpaid conversion.
postMoveOut specifies the pay-as-you-go resources to be migrated out.
postMoveIn specifies the pay-as-you-go resources for inbound migration.
 * @method void setAction(string $Action) Set Transaction type

Modify network mode adjust bandwidth mode.
Adjust bandwidth size.
`Refund`: refund.
downgrade.
upgrade configuration.
renew.
purchase.
preMoveOut monthly subscription resource migration out.
preMoveIn specifies the monthly subscription resources to migrate.
preToPost specifies the prepaid to postpaid conversion.
postMoveOut specifies the pay-as-you-go resources to be migrated out.
postMoveIn specifies the pay-as-you-go resources for inbound migration.
 * @method string getProductName() Obtain Product code chinese name.
 * @method void setProductName(string $ProductName) Set Product code chinese name.
 * @method string getSubProductName() Obtain Sub-Product code chinese name.
 * @method void setSubProductName(string $SubProductName) Set Sub-Product code chinese name.
 * @method array getResourceId() Obtain The resource ID corresponding to the order. If the query parameter `Limit` exceeds 200, null will be returned.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceId(array $ResourceId) Set The resource ID corresponding to the order. If the query parameter `Limit` exceeds 200, null will be returned.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Deal extends AbstractModel
{
    /**
     * @var string Order ID.
     */
    public $OrderId;

    /**
     * @var integer The status of the order. 1: unpaid; 2: paid; 3: shipping; 4: shipped; 5: shipment failed; 6: refunded; 7: closed case; 8: order expired; 9: order invalidated; 10: product invalidated; 11: third-party payment refused; 12: payment in process
     */
    public $Status;

    /**
     * @var string Payer
     */
    public $Payer;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Creator
     */
    public $Creator;

    /**
     * @var integer Actual payment amount (pent)
     */
    public $RealTotalCost;

    /**
     * @var integer Voucher offset amount (pent)
     */
    public $VoucherDecline;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var integer Product category ID
     */
    public $GoodsCategoryId;

    /**
     * @var array Product details
     */
    public $ProductInfo;

    /**
     * @var float Duration
     */
    public $TimeSpan;

    /**
     * @var string Time unit
     */
    public $TimeUnit;

    /**
     * @var string Currency unit
     */
    public $Currency;

    /**
     * @var float Discount rate
     */
    public $Policy;

    /**
     * @var float Unit price (cents)
     */
    public $Price;

    /**
     * @var float Original price (cents)
     */
    public $TotalCost;

    /**
     * @var string Product code
     */
    public $ProductCode;

    /**
     * @var string Subproduct code
     */
    public $SubProductCode;

    /**
     * @var string Large order number.
     */
    public $BigDealId;

    /**
     * @var string Refund formula.
     */
    public $Formula;

    /**
     * @var string Refund involves order information.
     */
    public $RefReturnDeals;

    /**
     * @var string Billing mode: `prePay` (prepaid), `postPay` (pay-as-you-go), `riPay` (reserved instance)
     */
    public $PayMode;

    /**
     * @var string Transaction type

Modify network mode adjust bandwidth mode.
Adjust bandwidth size.
`Refund`: refund.
downgrade.
upgrade configuration.
renew.
purchase.
preMoveOut monthly subscription resource migration out.
preMoveIn specifies the monthly subscription resources to migrate.
preToPost specifies the prepaid to postpaid conversion.
postMoveOut specifies the pay-as-you-go resources to be migrated out.
postMoveIn specifies the pay-as-you-go resources for inbound migration.
     */
    public $Action;

    /**
     * @var string Product code chinese name.
     */
    public $ProductName;

    /**
     * @var string Sub-Product code chinese name.
     */
    public $SubProductName;

    /**
     * @var array The resource ID corresponding to the order. If the query parameter `Limit` exceeds 200, null will be returned.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceId;

    /**
     * @param string $OrderId Order ID.
     * @param integer $Status The status of the order. 1: unpaid; 2: paid; 3: shipping; 4: shipped; 5: shipment failed; 6: refunded; 7: closed case; 8: order expired; 9: order invalidated; 10: product invalidated; 11: third-party payment refused; 12: payment in process
     * @param string $Payer Payer
     * @param string $CreateTime Creation time
     * @param string $Creator Creator
     * @param integer $RealTotalCost Actual payment amount (pent)
     * @param integer $VoucherDecline Voucher offset amount (pent)
     * @param integer $ProjectId Project ID
     * @param integer $GoodsCategoryId Product category ID
     * @param array $ProductInfo Product details
     * @param float $TimeSpan Duration
     * @param string $TimeUnit Time unit
     * @param string $Currency Currency unit
     * @param float $Policy Discount rate
     * @param float $Price Unit price (cents)
     * @param float $TotalCost Original price (cents)
     * @param string $ProductCode Product code
     * @param string $SubProductCode Subproduct code
     * @param string $BigDealId Large order number.
     * @param string $Formula Refund formula.
     * @param string $RefReturnDeals Refund involves order information.
     * @param string $PayMode Billing mode: `prePay` (prepaid), `postPay` (pay-as-you-go), `riPay` (reserved instance)
     * @param string $Action Transaction type

Modify network mode adjust bandwidth mode.
Adjust bandwidth size.
`Refund`: refund.
downgrade.
upgrade configuration.
renew.
purchase.
preMoveOut monthly subscription resource migration out.
preMoveIn specifies the monthly subscription resources to migrate.
preToPost specifies the prepaid to postpaid conversion.
postMoveOut specifies the pay-as-you-go resources to be migrated out.
postMoveIn specifies the pay-as-you-go resources for inbound migration.
     * @param string $ProductName Product code chinese name.
     * @param string $SubProductName Sub-Product code chinese name.
     * @param array $ResourceId The resource ID corresponding to the order. If the query parameter `Limit` exceeds 200, null will be returned.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Payer",$param) and $param["Payer"] !== null) {
            $this->Payer = $param["Payer"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("VoucherDecline",$param) and $param["VoucherDecline"] !== null) {
            $this->VoucherDecline = $param["VoucherDecline"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("GoodsCategoryId",$param) and $param["GoodsCategoryId"] !== null) {
            $this->GoodsCategoryId = $param["GoodsCategoryId"];
        }

        if (array_key_exists("ProductInfo",$param) and $param["ProductInfo"] !== null) {
            $this->ProductInfo = [];
            foreach ($param["ProductInfo"] as $key => $value){
                $obj = new ProductInfo();
                $obj->deserialize($value);
                array_push($this->ProductInfo, $obj);
            }
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = $param["Policy"];
        }

        if (array_key_exists("Price",$param) and $param["Price"] !== null) {
            $this->Price = $param["Price"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("SubProductCode",$param) and $param["SubProductCode"] !== null) {
            $this->SubProductCode = $param["SubProductCode"];
        }

        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }

        if (array_key_exists("Formula",$param) and $param["Formula"] !== null) {
            $this->Formula = $param["Formula"];
        }

        if (array_key_exists("RefReturnDeals",$param) and $param["RefReturnDeals"] !== null) {
            $this->RefReturnDeals = $param["RefReturnDeals"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SubProductName",$param) and $param["SubProductName"] !== null) {
            $this->SubProductName = $param["SubProductName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
