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
 * DescribeVoucherUsageDetails request structure.
 *
 * @method integer getLimit() Obtain The number of records per page. The default is 20, and the maximum is 1,000.
 * @method void setLimit(integer $Limit) Set The number of records per page. The default is 20, and the maximum is 1,000.
 * @method integer getOffset() Obtain The page number the records start from. The default is 1.
 * @method void setOffset(integer $Offset) Set The page number the records start from. The default is 1.
 * @method string getVoucherId() Obtain The voucher ID.
 * @method void setVoucherId(string $VoucherId) Set The voucher ID.
 * @method string getOperator() Obtain The operator. The default is the UIN of the current.
 * @method void setOperator(string $Operator) Set The operator. The default is the UIN of the current.
 */
class DescribeVoucherUsageDetailsRequest extends AbstractModel
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
     * @var string The voucher ID.
     */
    public $VoucherId;

    /**
     * @var string The operator. The default is the UIN of the current.
     */
    public $Operator;

    /**
     * @param integer $Limit The number of records per page. The default is 20, and the maximum is 1,000.
     * @param integer $Offset The page number the records start from. The default is 1.
     * @param string $VoucherId The voucher ID.
     * @param string $Operator The operator. The default is the UIN of the current.
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

        if (array_key_exists("VoucherId",$param) and $param["VoucherId"] !== null) {
            $this->VoucherId = $param["VoucherId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
