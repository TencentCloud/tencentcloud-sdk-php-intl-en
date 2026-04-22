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
 * Response for submitting a mini game version for approval
 *
 * @method boolean getResult() Obtain <p>Boolean response object</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResult(boolean $Result) Set <p>Boolean response object</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApprovalNo() Obtain <p>Approval number</p>
 * @method void setApprovalNo(string $ApprovalNo) Set <p>Approval number</p>
 */
class CreateMNGApprovalResp extends AbstractModel
{
    /**
     * @var boolean <p>Boolean response object</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Result;

    /**
     * @var string <p>Approval number</p>
     */
    public $ApprovalNo;

    /**
     * @param boolean $Result <p>Boolean response object</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApprovalNo <p>Approval number</p>
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
