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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Customer voucher information
 *
 * @method string getVoucherId() Obtain Voucher ID
 * @method void setVoucherId(string $VoucherId) Set Voucher ID
 * @method string getVoucherStatus() Obtain Voucher status
 * @method void setVoucherStatus(string $VoucherStatus) Set Voucher status
 * @method float getTotalAmount() Obtain Voucher value
 * @method void setTotalAmount(float $TotalAmount) Set Voucher value
 * @method float getRemainAmount() Obtain Balance
 * @method void setRemainAmount(float $RemainAmount) Set Balance
 */
class QueryVoucherListByUinVoucherItem extends AbstractModel
{
    /**
     * @var string Voucher ID
     */
    public $VoucherId;

    /**
     * @var string Voucher status
     */
    public $VoucherStatus;

    /**
     * @var float Voucher value
     */
    public $TotalAmount;

    /**
     * @var float Balance
     */
    public $RemainAmount;

    /**
     * @param string $VoucherId Voucher ID
     * @param string $VoucherStatus Voucher status
     * @param float $TotalAmount Voucher value
     * @param float $RemainAmount Balance
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
        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("VoucherStatus",$param) and $param["VoucherStatus"] !== null) {
            $this->VoucherStatus = $param["VoucherStatus"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("RemainAmount",$param) and $param["RemainAmount"] !== null) {
            $this->RemainAmount = $param["RemainAmount"];
        }
    }
}
