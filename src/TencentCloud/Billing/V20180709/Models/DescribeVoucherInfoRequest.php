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
 * DescribeVoucherInfo request structure.
 *
 * @method integer getLimit() Obtain The number of records per page. The default is 20, and the maximum is 1,000.
 * @method void setLimit(integer $Limit) Set The number of records per page. The default is 20, and the maximum is 1,000.
 * @method integer getOffset() Obtain The page number the records start from. The default is 1.
 * @method void setOffset(integer $Offset) Set The page number the records start from. The default is 1.
 * @method string getStatus() Obtain The voucher status. Valid values: `unUsed`, `used`, `delivered`, `cancel`, `overdue`.
 * @method void setStatus(string $Status) Set The voucher status. Valid values: `unUsed`, `used`, `delivered`, `cancel`, `overdue`.
 * @method string getVoucherId() Obtain The voucher ID.
 * @method void setVoucherId(string $VoucherId) Set The voucher ID.
 * @method string getCodeId() Obtain The voucher order ID.
 * @method void setCodeId(string $CodeId) Set The voucher order ID.
 * @method string getProductCode() Obtain The product code.
 * @method void setProductCode(string $ProductCode) Set The product code.
 * @method string getActivityId() Obtain The campaign ID.
 * @method void setActivityId(string $ActivityId) Set The campaign ID.
 * @method string getVoucherName() Obtain The voucher name.
 * @method void setVoucherName(string $VoucherName) Set The voucher name.
 * @method string getTimeFrom() Obtain The start date of the voucher issuance, such as `2021-01-01`.
 * @method void setTimeFrom(string $TimeFrom) Set The start date of the voucher issuance, such as `2021-01-01`.
 * @method string getTimeTo() Obtain The end date of the voucher issuance, such as `2021-01-01`.
 * @method void setTimeTo(string $TimeTo) Set The end date of the voucher issuance, such as `2021-01-01`.
 * @method string getSortField() Obtain The field used to sort the records. Valid values: BeginTime, EndTime, CreateTime.
 * @method void setSortField(string $SortField) Set The field used to sort the records. Valid values: BeginTime, EndTime, CreateTime.
 * @method string getSortOrder() Obtain Whether to sort the records in ascending or descending order. Valid values: desc, asc.
 * @method void setSortOrder(string $SortOrder) Set Whether to sort the records in ascending or descending order. Valid values: desc, asc.
 * @method string getPayMode() Obtain The payment mode. Valid values: `postPay`: pay-as-you-go; `prePay`: prepaid; `riPay`: reserved instance; empty or `*`: all. If this parameter is empty or `*`, `productCode` and `subProductCode` must also be empty.
 * @method void setPayMode(string $PayMode) Set The payment mode. Valid values: `postPay`: pay-as-you-go; `prePay`: prepaid; `riPay`: reserved instance; empty or `*`: all. If this parameter is empty or `*`, `productCode` and `subProductCode` must also be empty.
 * @method string getPayScene() Obtain If `PayMode` is `postPay`, this parameter may be `spotpay` (spot instance) or `settle account` (regular pay-as-you-go). If `PayMode` is `prePay`, this parameter may be `purchase`, `renew`, or `modify` (downgrade/upgrade). If `PayMode` is `riPay`, this parameter may be `oneOffFee` (prepayment of reserved instance) or `hourlyFee` (hourly billing of reserved instance). `*` means to query vouchers that support all billing scenarios.
 * @method void setPayScene(string $PayScene) Set If `PayMode` is `postPay`, this parameter may be `spotpay` (spot instance) or `settle account` (regular pay-as-you-go). If `PayMode` is `prePay`, this parameter may be `purchase`, `renew`, or `modify` (downgrade/upgrade). If `PayMode` is `riPay`, this parameter may be `oneOffFee` (prepayment of reserved instance) or `hourlyFee` (hourly billing of reserved instance). `*` means to query vouchers that support all billing scenarios.
 * @method string getOperator() Obtain The operator. The default is the UIN of the current user.
 * @method void setOperator(string $Operator) Set The operator. The default is the UIN of the current user.
 * @method string getVoucherMainType() Obtain The primary types of vouchers are has_price and no_price, which represent the cash voucher with a price and the cash voucher without a price respectively.
 * @method void setVoucherMainType(string $VoucherMainType) Set The primary types of vouchers are has_price and no_price, which represent the cash voucher with a price and the cash voucher without a price respectively.
 * @method string getVoucherSubType() Obtain Voucher subtype: Discount is a discount voucher, and deduct is a deduction voucher.
 * @method void setVoucherSubType(string $VoucherSubType) Set Voucher subtype: Discount is a discount voucher, and deduct is a deduction voucher.
 */
class DescribeVoucherInfoRequest extends AbstractModel
{
    /**
     * @var integer The number of records per page. The default is 20, and the maximum is 1,000.
     */
    public $Limit;

    /**
     * @var integer The page number the records start from. The default is 1.
     */
    public $Offset;

    /**
     * @var string The voucher status. Valid values: `unUsed`, `used`, `delivered`, `cancel`, `overdue`.
     */
    public $Status;

    /**
     * @var string The voucher ID.
     */
    public $VoucherId;

    /**
     * @var string The voucher order ID.
     */
    public $CodeId;

    /**
     * @var string The product code.
     */
    public $ProductCode;

    /**
     * @var string The campaign ID.
     */
    public $ActivityId;

    /**
     * @var string The voucher name.
     */
    public $VoucherName;

    /**
     * @var string The start date of the voucher issuance, such as `2021-01-01`.
     */
    public $TimeFrom;

    /**
     * @var string The end date of the voucher issuance, such as `2021-01-01`.
     */
    public $TimeTo;

    /**
     * @var string The field used to sort the records. Valid values: BeginTime, EndTime, CreateTime.
     */
    public $SortField;

    /**
     * @var string Whether to sort the records in ascending or descending order. Valid values: desc, asc.
     */
    public $SortOrder;

    /**
     * @var string The payment mode. Valid values: `postPay`: pay-as-you-go; `prePay`: prepaid; `riPay`: reserved instance; empty or `*`: all. If this parameter is empty or `*`, `productCode` and `subProductCode` must also be empty.
     */
    public $PayMode;

    /**
     * @var string If `PayMode` is `postPay`, this parameter may be `spotpay` (spot instance) or `settle account` (regular pay-as-you-go). If `PayMode` is `prePay`, this parameter may be `purchase`, `renew`, or `modify` (downgrade/upgrade). If `PayMode` is `riPay`, this parameter may be `oneOffFee` (prepayment of reserved instance) or `hourlyFee` (hourly billing of reserved instance). `*` means to query vouchers that support all billing scenarios.
     */
    public $PayScene;

    /**
     * @var string The operator. The default is the UIN of the current user.
     */
    public $Operator;

    /**
     * @var string The primary types of vouchers are has_price and no_price, which represent the cash voucher with a price and the cash voucher without a price respectively.
     */
    public $VoucherMainType;

    /**
     * @var string Voucher subtype: Discount is a discount voucher, and deduct is a deduction voucher.
     */
    public $VoucherSubType;

    /**
     * @param integer $Limit The number of records per page. The default is 20, and the maximum is 1,000.
     * @param integer $Offset The page number the records start from. The default is 1.
     * @param string $Status The voucher status. Valid values: `unUsed`, `used`, `delivered`, `cancel`, `overdue`.
     * @param string $VoucherId The voucher ID.
     * @param string $CodeId The voucher order ID.
     * @param string $ProductCode The product code.
     * @param string $ActivityId The campaign ID.
     * @param string $VoucherName The voucher name.
     * @param string $TimeFrom The start date of the voucher issuance, such as `2021-01-01`.
     * @param string $TimeTo The end date of the voucher issuance, such as `2021-01-01`.
     * @param string $SortField The field used to sort the records. Valid values: BeginTime, EndTime, CreateTime.
     * @param string $SortOrder Whether to sort the records in ascending or descending order. Valid values: desc, asc.
     * @param string $PayMode The payment mode. Valid values: `postPay`: pay-as-you-go; `prePay`: prepaid; `riPay`: reserved instance; empty or `*`: all. If this parameter is empty or `*`, `productCode` and `subProductCode` must also be empty.
     * @param string $PayScene If `PayMode` is `postPay`, this parameter may be `spotpay` (spot instance) or `settle account` (regular pay-as-you-go). If `PayMode` is `prePay`, this parameter may be `purchase`, `renew`, or `modify` (downgrade/upgrade). If `PayMode` is `riPay`, this parameter may be `oneOffFee` (prepayment of reserved instance) or `hourlyFee` (hourly billing of reserved instance). `*` means to query vouchers that support all billing scenarios.
     * @param string $Operator The operator. The default is the UIN of the current user.
     * @param string $VoucherMainType The primary types of vouchers are has_price and no_price, which represent the cash voucher with a price and the cash voucher without a price respectively.
     * @param string $VoucherSubType Voucher subtype: Discount is a discount voucher, and deduct is a deduction voucher.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("CodeId",$param) and $param["CodeId"] !== null) {
            $this->CodeId = $param["CodeId"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("VoucherName",$param) and $param["VoucherName"] !== null) {
            $this->VoucherName = $param["VoucherName"];
        }

        if (array_key_exists("TimeFrom",$param) and $param["TimeFrom"] !== null) {
            $this->TimeFrom = $param["TimeFrom"];
        }

        if (array_key_exists("TimeTo",$param) and $param["TimeTo"] !== null) {
            $this->TimeTo = $param["TimeTo"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayScene",$param) and $param["PayScene"] !== null) {
            $this->PayScene = $param["PayScene"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("VoucherMainType",$param) and $param["VoucherMainType"] !== null) {
            $this->VoucherMainType = $param["VoucherMainType"];
        }

        if (array_key_exists("VoucherSubType",$param) and $param["VoucherSubType"] !== null) {
            $this->VoucherSubType = $param["VoucherSubType"];
        }
    }
}
