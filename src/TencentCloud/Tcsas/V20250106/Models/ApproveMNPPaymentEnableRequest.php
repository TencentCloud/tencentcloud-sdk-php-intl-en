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
 * ApproveMNPPaymentEnable request structure.
 *
 * @method string getPlatformId() Obtain <p>Platform ID.</p>
 * @method void setPlatformId(string $PlatformId) Set <p>Platform ID.</p>
 * @method string getApplicationId() Obtain <p>Superapp ID.</p>
 * @method void setApplicationId(string $ApplicationId) Set <p>Superapp ID.</p>
 * @method string getApprovalNo() Obtain <p>Approval number.</p>
 * @method void setApprovalNo(string $ApprovalNo) Set <p>Approval number.</p>
 * @method integer getApprovalType() Obtain <p>Approval status. Valid values: 10: Approved; 20: Rejected.</p>
 * @method void setApprovalType(integer $ApprovalType) Set <p>Approval status. Valid values: 10: Approved; 20: Rejected.</p>
 * @method string getApprovalNote() Obtain <p>Approval note.</p>
 * @method void setApprovalNote(string $ApprovalNote) Set <p>Approval note.</p>
 */
class ApproveMNPPaymentEnableRequest extends AbstractModel
{
    /**
     * @var string <p>Platform ID.</p>
     */
    public $PlatformId;

    /**
     * @var string <p>Superapp ID.</p>
     */
    public $ApplicationId;

    /**
     * @var string <p>Approval number.</p>
     */
    public $ApprovalNo;

    /**
     * @var integer <p>Approval status. Valid values: 10: Approved; 20: Rejected.</p>
     */
    public $ApprovalType;

    /**
     * @var string <p>Approval note.</p>
     */
    public $ApprovalNote;

    /**
     * @param string $PlatformId <p>Platform ID.</p>
     * @param string $ApplicationId <p>Superapp ID.</p>
     * @param string $ApprovalNo <p>Approval number.</p>
     * @param integer $ApprovalType <p>Approval status. Valid values: 10: Approved; 20: Rejected.</p>
     * @param string $ApprovalNote <p>Approval note.</p>
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
        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApprovalNo",$param) and $param["ApprovalNo"] !== null) {
            $this->ApprovalNo = $param["ApprovalNo"];
        }

        if (array_key_exists("ApprovalType",$param) and $param["ApprovalType"] !== null) {
            $this->ApprovalType = $param["ApprovalType"];
        }

        if (array_key_exists("ApprovalNote",$param) and $param["ApprovalNote"] !== null) {
            $this->ApprovalNote = $param["ApprovalNote"];
        }
    }
}
