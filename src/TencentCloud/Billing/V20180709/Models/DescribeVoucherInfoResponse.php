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
 * DescribeVoucherInfo response structure.
 *
 * @method integer getTotalCount() Obtain The total number of vouchers.
 * @method void setTotalCount(integer $TotalCount) Set The total number of vouchers.
 * @method integer getTotalBalance() Obtain The total voucher balance. The value of this parameter is the total balance (USD, rounded to 8 decimal places) multiplied by 100,000,000.
 * @method void setTotalBalance(integer $TotalBalance) Set The total voucher balance. The value of this parameter is the total balance (USD, rounded to 8 decimal places) multiplied by 100,000,000.
 * @method array getVoucherInfos() Obtain The voucher information.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setVoucherInfos(array $VoucherInfos) Set The voucher information.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeVoucherInfoResponse extends AbstractModel
{
    /**
     * @var integer The total number of vouchers.
     */
    public $TotalCount;

    /**
     * @var integer The total voucher balance. The value of this parameter is the total balance (USD, rounded to 8 decimal places) multiplied by 100,000,000.
     */
    public $TotalBalance;

    /**
     * @var array The voucher information.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $VoucherInfos;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $TotalCount The total number of vouchers.
     * @param integer $TotalBalance The total voucher balance. The value of this parameter is the total balance (USD, rounded to 8 decimal places) multiplied by 100,000,000.
     * @param array $VoucherInfos The voucher information.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("TotalBalance",$param) and $param["TotalBalance"] !== null) {
            $this->TotalBalance = $param["TotalBalance"];
        }

        if (array_key_exists("VoucherInfos",$param) and $param["VoucherInfos"] !== null) {
            $this->VoucherInfos = [];
            foreach ($param["VoucherInfos"] as $key => $value){
                $obj = new VoucherInfos();
                $obj->deserialize($value);
                array_push($this->VoucherInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}