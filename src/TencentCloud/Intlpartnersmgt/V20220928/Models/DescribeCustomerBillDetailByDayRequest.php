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
 * DescribeCustomerBillDetailByDay request structure.
 *
 * @method integer getCustomerUin() Obtain Sub-account UIN.
Such as "10000000001"
 * @method void setCustomerUin(integer $CustomerUin) Set Sub-account UIN.
Such as "10000000001"
 * @method string getDate() Obtain Date.
Such as" 2025-06-25".
Please note: Historical daily bill dated before "2025-06-01",cannot be queried.
 * @method void setDate(string $Date) Set Date.
Such as" 2025-06-25".
Please note: Historical daily bill dated before "2025-06-01",cannot be queried.
 */
class DescribeCustomerBillDetailByDayRequest extends AbstractModel
{
    /**
     * @var integer Sub-account UIN.
Such as "10000000001"
     */
    public $CustomerUin;

    /**
     * @var string Date.
Such as" 2025-06-25".
Please note: Historical daily bill dated before "2025-06-01",cannot be queried.
     */
    public $Date;

    /**
     * @param integer $CustomerUin Sub-account UIN.
Such as "10000000001"
     * @param string $Date Date.
Such as" 2025-06-25".
Please note: Historical daily bill dated before "2025-06-01",cannot be queried.
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
        if (array_key_exists("CustomerUin",$param) and $param["CustomerUin"] !== null) {
            $this->CustomerUin = $param["CustomerUin"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }
    }
}
