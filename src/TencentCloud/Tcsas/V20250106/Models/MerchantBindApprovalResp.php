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
 * Response parameters structure for requesting payment merchant binding.
 *
 * @method boolean getApprovalResult() Obtain <p>Operation response result. A value of true indicates that the operation succeeded.</p>
 * @method void setApprovalResult(boolean $ApprovalResult) Set <p>Operation response result. A value of true indicates that the operation succeeded.</p>
 * @method string getResourceId() Obtain <p>Approval number. Required as an input parameter when calling the API to approve merchant binding.</p>
 * @method void setResourceId(string $ResourceId) Set <p>Approval number. Required as an input parameter when calling the API to approve merchant binding.</p>
 */
class MerchantBindApprovalResp extends AbstractModel
{
    /**
     * @var boolean <p>Operation response result. A value of true indicates that the operation succeeded.</p>
     */
    public $ApprovalResult;

    /**
     * @var string <p>Approval number. Required as an input parameter when calling the API to approve merchant binding.</p>
     */
    public $ResourceId;

    /**
     * @param boolean $ApprovalResult <p>Operation response result. A value of true indicates that the operation succeeded.</p>
     * @param string $ResourceId <p>Approval number. Required as an input parameter when calling the API to approve merchant binding.</p>
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
        if (array_key_exists("ApprovalResult",$param) and $param["ApprovalResult"] !== null) {
            $this->ApprovalResult = $param["ApprovalResult"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
