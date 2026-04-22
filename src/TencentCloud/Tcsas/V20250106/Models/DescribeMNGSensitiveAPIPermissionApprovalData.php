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
 * Queries the details of a sensitive API permission request for a mini game
 *
 * @method string getAPIId() Obtain <p>API ID</p>
 * @method void setAPIId(string $APIId) Set <p>API ID</p>
 * @method string getAPIMethod() Obtain <p>API method</p>
 * @method void setAPIMethod(string $APIMethod) Set <p>API method</p>
 * @method string getApplyReason() Obtain <p>Reason for request</p>
 * @method void setApplyReason(string $ApplyReason) Set <p>Reason for request</p>
 * @method string getRejectReason() Obtain <p>Reason for rejection</p>
 * @method void setRejectReason(string $RejectReason) Set <p>Reason for rejection</p>
 * @method integer getApprovalStatus() Obtain <p>Approval status. 20: Rejected; 30: Approved</p>
 * @method void setApprovalStatus(integer $ApprovalStatus) Set <p>Approval status. 20: Rejected; 30: Approved</p>
 * @method string getAPIDesc() Obtain <p>API feature description</p>
 * @method void setAPIDesc(string $APIDesc) Set <p>API feature description</p>
 * @method integer getAPIType() Obtain <p>API type. Valid values: 1: System; 2: Custom</p>
 * @method void setAPIType(integer $APIType) Set <p>API type. Valid values: 1: System; 2: Custom</p>
 */
class DescribeMNGSensitiveAPIPermissionApprovalData extends AbstractModel
{
    /**
     * @var string <p>API ID</p>
     */
    public $APIId;

    /**
     * @var string <p>API method</p>
     */
    public $APIMethod;

    /**
     * @var string <p>Reason for request</p>
     */
    public $ApplyReason;

    /**
     * @var string <p>Reason for rejection</p>
     */
    public $RejectReason;

    /**
     * @var integer <p>Approval status. 20: Rejected; 30: Approved</p>
     */
    public $ApprovalStatus;

    /**
     * @var string <p>API feature description</p>
     */
    public $APIDesc;

    /**
     * @var integer <p>API type. Valid values: 1: System; 2: Custom</p>
     */
    public $APIType;

    /**
     * @param string $APIId <p>API ID</p>
     * @param string $APIMethod <p>API method</p>
     * @param string $ApplyReason <p>Reason for request</p>
     * @param string $RejectReason <p>Reason for rejection</p>
     * @param integer $ApprovalStatus <p>Approval status. 20: Rejected; 30: Approved</p>
     * @param string $APIDesc <p>API feature description</p>
     * @param integer $APIType <p>API type. Valid values: 1: System; 2: Custom</p>
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
        if (array_key_exists("APIId",$param) and $param["APIId"] !== null) {
            $this->APIId = $param["APIId"];
        }

        if (array_key_exists("APIMethod",$param) and $param["APIMethod"] !== null) {
            $this->APIMethod = $param["APIMethod"];
        }

        if (array_key_exists("ApplyReason",$param) and $param["ApplyReason"] !== null) {
            $this->ApplyReason = $param["ApplyReason"];
        }

        if (array_key_exists("RejectReason",$param) and $param["RejectReason"] !== null) {
            $this->RejectReason = $param["RejectReason"];
        }

        if (array_key_exists("ApprovalStatus",$param) and $param["ApprovalStatus"] !== null) {
            $this->ApprovalStatus = $param["ApprovalStatus"];
        }

        if (array_key_exists("APIDesc",$param) and $param["APIDesc"] !== null) {
            $this->APIDesc = $param["APIDesc"];
        }

        if (array_key_exists("APIType",$param) and $param["APIType"] !== null) {
            $this->APIType = $param["APIType"];
        }
    }
}
