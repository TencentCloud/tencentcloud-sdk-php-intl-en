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
 * DescribeVoucherInfo request structure.
 *
 * @method integer getLimit() Obtain <p>How many data entries per page, 20 is selected by default, maximum not exceeding 1000</p>
 * @method void setLimit(integer $Limit) Set <p>How many data entries per page, 20 is selected by default, maximum not exceeding 1000</p>
 * @method integer getOffset() Obtain <p>Page number, starts from 1 by default</p>
 * @method void setOffset(integer $Offset) Set <p>Page number, starts from 1 by default</p>
 * @method string getStatus() Obtain <p>Voucher status: pending use: unUsed, Used: used, delivered: delivered, discarded: cancel, expired: overdue</p>
 * @method void setStatus(string $Status) Set <p>Voucher status: pending use: unUsed, Used: used, delivered: delivered, discarded: cancel, expired: overdue</p>
 * @method string getVoucherId() Obtain <p>Voucher id</p>
 * @method void setVoucherId(string $VoucherId) Set <p>Voucher id</p>
 * @method string getCodeId() Obtain <p>Voucher order id</p>
 * @method void setCodeId(string $CodeId) Set <p>Voucher order id</p>
 * @method string getProductCode() Obtain <p>product code</p>
 * @method void setProductCode(string $ProductCode) Set <p>product code</p>
 * @method string getActivityId() Obtain <p>Activity id</p>
 * @method void setActivityId(string $ActivityId) Set <p>Activity id</p>
 * @method string getVoucherName() Obtain <p>Voucher name</p>
 * @method void setVoucherName(string $VoucherName) Set <p>Voucher name</p>
 * @method string getTimeFrom() Obtain <p>Start time of delivery. Example: 2021-01-01</p>
 * @method void setTimeFrom(string $TimeFrom) Set <p>Start time of delivery. Example: 2021-01-01</p>
 * @method string getTimeTo() Obtain <p>Delivery end time. Example: 2021-01-01</p>
 * @method void setTimeTo(string $TimeTo) Set <p>Delivery end time. Example: 2021-01-01</p>
 * @method string getSortField() Obtain <p>Specified sorting field: BeginTime start time, EndTime expiry time, CreateTime creation time</p>
 * @method void setSortField(string $SortField) Set <p>Specified sorting field: BeginTime start time, EndTime expiry time, CreateTime creation time</p>
 * @method string getSortOrder() Obtain <p>Specify ascending/descending order: desc, asc</p>
 * @method void setSortOrder(string $SortOrder) Set <p>Specify ascending/descending order: desc, asc</p>
 * @method string getPayMode() Obtain <p>Payment mode, postPay (postpaid)/prePay (prepaid)/riPay (reserved instance)/"" or "*" means all modes. If payMode is "" or "*", productCode and subProductCode must be empty.</p>
 * @method void setPayMode(string $PayMode) Set <p>Payment mode, postPay (postpaid)/prePay (prepaid)/riPay (reserved instance)/"" or "*" means all modes. If payMode is "" or "*", productCode and subProductCode must be empty.</p>
 * @method string getPayScene() Obtain <p>Payment scenario PayMode=postPay: spotpay - spot instance, "settle account" - standard post-paid. PayMode=prePay: purchase - monthly subscription new purchase, renew - annual and monthly renewal (auto renewal), modify - monthly subscription configuration change. PayMode=riPay: oneOffFee - prepayment of reserved instance, hourlyFee - hourly charge for reserved instance, * - support all payment scenarios.</p>
 * @method void setPayScene(string $PayScene) Set <p>Payment scenario PayMode=postPay: spotpay - spot instance, "settle account" - standard post-paid. PayMode=prePay: purchase - monthly subscription new purchase, renew - annual and monthly renewal (auto renewal), modify - monthly subscription configuration change. PayMode=riPay: oneOffFee - prepayment of reserved instance, hourlyFee - hourly charge for reserved instance, * - support all payment scenarios.</p>
 * @method string getOperator() Obtain <p>Operator is used by default as user uin</p>
 * @method void setOperator(string $Operator) Set <p>Operator is used by default as user uin</p>
 * @method string getVoucherMainType() Obtain <p>The primary types of vouchers are has_price and no_price, which represent the cash voucher with a price and the cash voucher without a price respectively.</p>
 * @method void setVoucherMainType(string $VoucherMainType) Set <p>The primary types of vouchers are has_price and no_price, which represent the cash voucher with a price and the cash voucher without a price respectively.</p>
 * @method string getVoucherSubType() Obtain <p>Voucher subtype: Discount is a discount voucher, and deduct is a deduction voucher.</p>
 * @method void setVoucherSubType(string $VoucherSubType) Set <p>Voucher subtype: Discount is a discount voucher, and deduct is a deduction voucher.</p>
 * @method string getStartTimeFrom() Obtain <p>Voucher validity start time</p>
 * @method void setStartTimeFrom(string $StartTimeFrom) Set <p>Voucher validity start time</p>
 * @method string getStartTimeTo() Obtain <p>Voucher validity time end time</p>
 * @method void setStartTimeTo(string $StartTimeTo) Set <p>Voucher validity time end time</p>
 * @method string getEndTimeFrom() Obtain <p>Voucher expiration time start time</p>
 * @method void setEndTimeFrom(string $EndTimeFrom) Set <p>Voucher expiration time start time</p>
 * @method string getEndTimeTo() Obtain <p>Voucher expiration time end time</p>
 * @method void setEndTimeTo(string $EndTimeTo) Set <p>Voucher expiration time end time</p>
 * @method string getCreateTimeFrom() Obtain <p>Voucher issuance start time</p>
 * @method void setCreateTimeFrom(string $CreateTimeFrom) Set <p>Voucher issuance start time</p>
 * @method string getCreateTimeTo() Obtain <p>Voucher issuance time end time</p>
 * @method void setCreateTimeTo(string $CreateTimeTo) Set <p>Voucher issuance time end time</p>
 * @method string getLang() Obtain <p>Language parameter</p><p>Default value: zh</p><p>Expect the product name to return in Chinese or other languages. Currently only support Chinese and English. Return in Chinese when "zh" is entered or left blank; return in English in other cases.</p>
 * @method void setLang(string $Lang) Set <p>Language parameter</p><p>Default value: zh</p><p>Expect the product name to return in Chinese or other languages. Currently only support Chinese and English. Return in Chinese when "zh" is entered or left blank; return in English in other cases.</p>
 */
class DescribeVoucherInfoRequest extends AbstractModel
{
    /**
     * @var integer <p>How many data entries per page, 20 is selected by default, maximum not exceeding 1000</p>
     */
    public $Limit;

    /**
     * @var integer <p>Page number, starts from 1 by default</p>
     */
    public $Offset;

    /**
     * @var string <p>Voucher status: pending use: unUsed, Used: used, delivered: delivered, discarded: cancel, expired: overdue</p>
     */
    public $Status;

    /**
     * @var string <p>Voucher id</p>
     */
    public $VoucherId;

    /**
     * @var string <p>Voucher order id</p>
     */
    public $CodeId;

    /**
     * @var string <p>product code</p>
     */
    public $ProductCode;

    /**
     * @var string <p>Activity id</p>
     */
    public $ActivityId;

    /**
     * @var string <p>Voucher name</p>
     */
    public $VoucherName;

    /**
     * @var string <p>Start time of delivery. Example: 2021-01-01</p>
     */
    public $TimeFrom;

    /**
     * @var string <p>Delivery end time. Example: 2021-01-01</p>
     */
    public $TimeTo;

    /**
     * @var string <p>Specified sorting field: BeginTime start time, EndTime expiry time, CreateTime creation time</p>
     */
    public $SortField;

    /**
     * @var string <p>Specify ascending/descending order: desc, asc</p>
     */
    public $SortOrder;

    /**
     * @var string <p>Payment mode, postPay (postpaid)/prePay (prepaid)/riPay (reserved instance)/"" or "*" means all modes. If payMode is "" or "*", productCode and subProductCode must be empty.</p>
     */
    public $PayMode;

    /**
     * @var string <p>Payment scenario PayMode=postPay: spotpay - spot instance, "settle account" - standard post-paid. PayMode=prePay: purchase - monthly subscription new purchase, renew - annual and monthly renewal (auto renewal), modify - monthly subscription configuration change. PayMode=riPay: oneOffFee - prepayment of reserved instance, hourlyFee - hourly charge for reserved instance, * - support all payment scenarios.</p>
     */
    public $PayScene;

    /**
     * @var string <p>Operator is used by default as user uin</p>
     */
    public $Operator;

    /**
     * @var string <p>The primary types of vouchers are has_price and no_price, which represent the cash voucher with a price and the cash voucher without a price respectively.</p>
     */
    public $VoucherMainType;

    /**
     * @var string <p>Voucher subtype: Discount is a discount voucher, and deduct is a deduction voucher.</p>
     */
    public $VoucherSubType;

    /**
     * @var string <p>Voucher validity start time</p>
     */
    public $StartTimeFrom;

    /**
     * @var string <p>Voucher validity time end time</p>
     */
    public $StartTimeTo;

    /**
     * @var string <p>Voucher expiration time start time</p>
     */
    public $EndTimeFrom;

    /**
     * @var string <p>Voucher expiration time end time</p>
     */
    public $EndTimeTo;

    /**
     * @var string <p>Voucher issuance start time</p>
     */
    public $CreateTimeFrom;

    /**
     * @var string <p>Voucher issuance time end time</p>
     */
    public $CreateTimeTo;

    /**
     * @var string <p>Language parameter</p><p>Default value: zh</p><p>Expect the product name to return in Chinese or other languages. Currently only support Chinese and English. Return in Chinese when "zh" is entered or left blank; return in English in other cases.</p>
     */
    public $Lang;

    /**
     * @param integer $Limit <p>How many data entries per page, 20 is selected by default, maximum not exceeding 1000</p>
     * @param integer $Offset <p>Page number, starts from 1 by default</p>
     * @param string $Status <p>Voucher status: pending use: unUsed, Used: used, delivered: delivered, discarded: cancel, expired: overdue</p>
     * @param string $VoucherId <p>Voucher id</p>
     * @param string $CodeId <p>Voucher order id</p>
     * @param string $ProductCode <p>product code</p>
     * @param string $ActivityId <p>Activity id</p>
     * @param string $VoucherName <p>Voucher name</p>
     * @param string $TimeFrom <p>Start time of delivery. Example: 2021-01-01</p>
     * @param string $TimeTo <p>Delivery end time. Example: 2021-01-01</p>
     * @param string $SortField <p>Specified sorting field: BeginTime start time, EndTime expiry time, CreateTime creation time</p>
     * @param string $SortOrder <p>Specify ascending/descending order: desc, asc</p>
     * @param string $PayMode <p>Payment mode, postPay (postpaid)/prePay (prepaid)/riPay (reserved instance)/"" or "*" means all modes. If payMode is "" or "*", productCode and subProductCode must be empty.</p>
     * @param string $PayScene <p>Payment scenario PayMode=postPay: spotpay - spot instance, "settle account" - standard post-paid. PayMode=prePay: purchase - monthly subscription new purchase, renew - annual and monthly renewal (auto renewal), modify - monthly subscription configuration change. PayMode=riPay: oneOffFee - prepayment of reserved instance, hourlyFee - hourly charge for reserved instance, * - support all payment scenarios.</p>
     * @param string $Operator <p>Operator is used by default as user uin</p>
     * @param string $VoucherMainType <p>The primary types of vouchers are has_price and no_price, which represent the cash voucher with a price and the cash voucher without a price respectively.</p>
     * @param string $VoucherSubType <p>Voucher subtype: Discount is a discount voucher, and deduct is a deduction voucher.</p>
     * @param string $StartTimeFrom <p>Voucher validity start time</p>
     * @param string $StartTimeTo <p>Voucher validity time end time</p>
     * @param string $EndTimeFrom <p>Voucher expiration time start time</p>
     * @param string $EndTimeTo <p>Voucher expiration time end time</p>
     * @param string $CreateTimeFrom <p>Voucher issuance start time</p>
     * @param string $CreateTimeTo <p>Voucher issuance time end time</p>
     * @param string $Lang <p>Language parameter</p><p>Default value: zh</p><p>Expect the product name to return in Chinese or other languages. Currently only support Chinese and English. Return in Chinese when "zh" is entered or left blank; return in English in other cases.</p>
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

        if (array_key_exists("StartTimeFrom",$param) and $param["StartTimeFrom"] !== null) {
            $this->StartTimeFrom = $param["StartTimeFrom"];
        }

        if (array_key_exists("StartTimeTo",$param) and $param["StartTimeTo"] !== null) {
            $this->StartTimeTo = $param["StartTimeTo"];
        }

        if (array_key_exists("EndTimeFrom",$param) and $param["EndTimeFrom"] !== null) {
            $this->EndTimeFrom = $param["EndTimeFrom"];
        }

        if (array_key_exists("EndTimeTo",$param) and $param["EndTimeTo"] !== null) {
            $this->EndTimeTo = $param["EndTimeTo"];
        }

        if (array_key_exists("CreateTimeFrom",$param) and $param["CreateTimeFrom"] !== null) {
            $this->CreateTimeFrom = $param["CreateTimeFrom"];
        }

        if (array_key_exists("CreateTimeTo",$param) and $param["CreateTimeTo"] !== null) {
            $this->CreateTimeTo = $param["CreateTimeTo"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }
    }
}
