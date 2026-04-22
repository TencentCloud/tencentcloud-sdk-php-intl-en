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
 * Response for platform review of mini program version submission.
 *
 * @method boolean getResult() Obtain Bool type response object
 * @method void setResult(boolean $Result) Set Bool type response object
 * @method string getApprovalNo() Obtain Approval No.
 * @method void setApprovalNo(string $ApprovalNo) Set Approval No.
 */
class CreateMNPApprovalResp extends AbstractModel
{
    /**
     * @var boolean Bool type response object
     */
    public $Result;

    /**
     * @var string Approval No.
     */
    public $ApprovalNo;

    /**
     * @param boolean $Result Bool type response object
     * @param string $ApprovalNo Approval No.
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
