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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response parameters structure for changing the bound payment merchant.
 *
 * @method boolean getResult() Obtain <p>API response result. Valid values: true: Operation succeeded; false: Operation failed.</p>
 * @method void setResult(boolean $Result) Set <p>API response result. Valid values: true: Operation succeeded; false: Operation failed.</p>
 * @method string getApprovalNo() Obtain <p>Approval number. Used for the API where the superapp approves the merchant binding of a mini program team.</p>
 * @method void setApprovalNo(string $ApprovalNo) Set <p>Approval number. Used for the API where the superapp approves the merchant binding of a mini program team.</p>
 */
class ChangePaymentV2BindMerchantRes extends AbstractModel
{
    /**
     * @var boolean <p>API response result. Valid values: true: Operation succeeded; false: Operation failed.</p>
     */
    public $Result;

    /**
     * @var string <p>Approval number. Used for the API where the superapp approves the merchant binding of a mini program team.</p>
     */
    public $ApprovalNo;

    /**
     * @param boolean $Result <p>API response result. Valid values: true: Operation succeeded; false: Operation failed.</p>
     * @param string $ApprovalNo <p>Approval number. Used for the API where the superapp approves the merchant binding of a mini program team.</p>
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ApprovalNo",$param) and $param["ApprovalNo"] !== null) {
            $this->ApprovalNo = $param["ApprovalNo"];
        }
    }
}
