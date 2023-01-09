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
 * Customer voucher quota
 *
 * @method integer getClientUin() Obtain Customer UIN
 * @method void setClientUin(integer $ClientUin) Set Customer UIN
 * @method float getTotalAmount() Obtain Voucher quota
 * @method void setTotalAmount(float $TotalAmount) Set Voucher quota
 * @method float getRemainAmount() Obtain Voucher amount
 * @method void setRemainAmount(float $RemainAmount) Set Voucher amount
 */
class QueryVoucherAmountByUinItem extends AbstractModel
{
    /**
     * @var integer Customer UIN
     */
    public $ClientUin;

    /**
     * @var float Voucher quota
     */
    public $TotalAmount;

    /**
     * @var float Voucher amount
     */
    public $RemainAmount;

    /**
     * @param integer $ClientUin Customer UIN
     * @param float $TotalAmount Voucher quota
     * @param float $RemainAmount Voucher amount
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("RemainAmount",$param) and $param["RemainAmount"] !== null) {
            $this->RemainAmount = $param["RemainAmount"];
        }
    }
}
