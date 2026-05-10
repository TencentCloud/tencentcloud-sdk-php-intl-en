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
 * DescribeCustomerOwnVoucherUsageDetails request structure.
 *
 * @method integer getPage() Obtain Page number, starting from 1
 * @method void setPage(integer $Page) Set Page number, starting from 1
 * @method integer getPageSize() Obtain Number of items per page, range 1-100
 * @method void setPageSize(integer $PageSize) Set Number of items per page, range 1-100
 * @method integer getVoucherId() Obtain Voucher ID
 * @method void setVoucherId(integer $VoucherId) Set Voucher ID
 * @method string getMonth() Obtain Voucher usage month
 * @method void setMonth(string $Month) Set Voucher usage month
 */
class DescribeCustomerOwnVoucherUsageDetailsRequest extends AbstractModel
{
    /**
     * @var integer Page number, starting from 1
     */
    public $Page;

    /**
     * @var integer Number of items per page, range 1-100
     */
    public $PageSize;

    /**
     * @var integer Voucher ID
     */
    public $VoucherId;

    /**
     * @var string Voucher usage month
     */
    public $Month;

    /**
     * @param integer $Page Page number, starting from 1
     * @param integer $PageSize Number of items per page, range 1-100
     * @param integer $VoucherId Voucher ID
     * @param string $Month Voucher usage month
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

        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }
    }
}
