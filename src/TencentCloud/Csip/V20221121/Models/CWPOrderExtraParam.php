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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Additional parameters for orders.
 *
 * @method string getMode() Obtain PrePay: monthly subscription.
PostPay indicates pay-as-you-go mode.
One-time delivery
 * @method void setMode(string $Mode) Set PrePay: monthly subscription.
PostPay indicates pay-as-you-go mode.
One-time delivery
 * @method boolean getDisposableStatus() Obtain One-time service delivery status. This value is available for one-time resource orders only.
false: Not accepted
true accepted
 * @method void setDisposableStatus(boolean $DisposableStatus) Set One-time service delivery status. This value is available for one-time resource orders only.
false: Not accepted
true accepted
 */
class CWPOrderExtraParam extends AbstractModel
{
    /**
     * @var string PrePay: monthly subscription.
PostPay indicates pay-as-you-go mode.
One-time delivery
     */
    public $Mode;

    /**
     * @var boolean One-time service delivery status. This value is available for one-time resource orders only.
false: Not accepted
true accepted
     */
    public $DisposableStatus;

    /**
     * @param string $Mode PrePay: monthly subscription.
PostPay indicates pay-as-you-go mode.
One-time delivery
     * @param boolean $DisposableStatus One-time service delivery status. This value is available for one-time resource orders only.
false: Not accepted
true accepted
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("DisposableStatus",$param) and $param["DisposableStatus"] !== null) {
            $this->DisposableStatus = $param["DisposableStatus"];
        }
    }
}
