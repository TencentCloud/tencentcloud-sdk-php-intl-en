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
 * DescribeCustomerOwnVoucherList request structure.
 *
 * @method integer getPage() Obtain Page number, starts from 1.
 * @method void setPage(integer $Page) Set Page number, starts from 1.
 * @method integer getPageSize() Obtain Number of items per page. value range: 1-100.
 * @method void setPageSize(integer $PageSize) Set Number of items per page. value range: 1-100.
 * @method string getVoucherStatus() Obtain Voucher status. valid values: Issued, Used, Expired, Invalidated.
 * @method void setVoucherStatus(string $VoucherStatus) Set Voucher status. valid values: Issued, Used, Expired, Invalidated.
 * @method string getPaymentMode() Obtain Payment mode. valid values: AllPayment, Prepaid, Postpaid.
 * @method void setPaymentMode(string $PaymentMode) Set Payment mode. valid values: AllPayment, Prepaid, Postpaid.
 * @method string getProductScope() Obtain Applicable product. valid values: AllProducts, SpecifyProducts, SpecifyProductsBlacklist.
 * @method void setProductScope(string $ProductScope) Set Applicable product. valid values: AllProducts, SpecifyProducts, SpecifyProductsBlacklist.
 * @method integer getVoucherId() Obtain Voucher ID.
 * @method void setVoucherId(integer $VoucherId) Set Voucher ID.
 */
class DescribeCustomerOwnVoucherListRequest extends AbstractModel
{
    /**
     * @var integer Page number, starts from 1.
     */
    public $Page;

    /**
     * @var integer Number of items per page. value range: 1-100.
     */
    public $PageSize;

    /**
     * @var string Voucher status. valid values: Issued, Used, Expired, Invalidated.
     */
    public $VoucherStatus;

    /**
     * @var string Payment mode. valid values: AllPayment, Prepaid, Postpaid.
     */
    public $PaymentMode;

    /**
     * @var string Applicable product. valid values: AllProducts, SpecifyProducts, SpecifyProductsBlacklist.
     */
    public $ProductScope;

    /**
     * @var integer Voucher ID.
     */
    public $VoucherId;

    /**
     * @param integer $Page Page number, starts from 1.
     * @param integer $PageSize Number of items per page. value range: 1-100.
     * @param string $VoucherStatus Voucher status. valid values: Issued, Used, Expired, Invalidated.
     * @param string $PaymentMode Payment mode. valid values: AllPayment, Prepaid, Postpaid.
     * @param string $ProductScope Applicable product. valid values: AllProducts, SpecifyProducts, SpecifyProductsBlacklist.
     * @param integer $VoucherId Voucher ID.
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
        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("VoucherStatus",$param) and $param["VoucherStatus"] !== null) {
            $this->VoucherStatus = $param["VoucherStatus"];
        }

        if (array_key_exists("PaymentMode",$param) and $param["PaymentMode"] !== null) {
            $this->PaymentMode = $param["PaymentMode"];
        }

        if (array_key_exists("ProductScope",$param) and $param["ProductScope"] !== null) {
            $this->ProductScope = $param["ProductScope"];
        }

        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }
    }
}
