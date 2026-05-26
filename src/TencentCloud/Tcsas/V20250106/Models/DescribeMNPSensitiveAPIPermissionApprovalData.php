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
 * Detail data for querying mini program sensitive API permission approval.
 *
 * @method string getAPIId() Obtain API ID.
 * @method void setAPIId(string $APIId) Set API ID.
 * @method string getAPIMethod() Obtain API method.
 * @method void setAPIMethod(string $APIMethod) Set API method.
 * @method string getApplyReason() Obtain Reason for request.
 * @method void setApplyReason(string $ApplyReason) Set Reason for request.
 * @method string getRejectReason() Obtain Reason for rejection.
 * @method void setRejectReason(string $RejectReason) Set Reason for rejection.
 * @method integer getApprovalStatus() Obtain Approval status. Valid values: 20: Rejected; 30: Approved.
 * @method void setApprovalStatus(integer $ApprovalStatus) Set Approval status. Valid values: 20: Rejected; 30: Approved.
 * @method string getAPIDesc() Obtain API feature description.
 * @method void setAPIDesc(string $APIDesc) Set API feature description.
 * @method integer getAPIType() Obtain API type. Valid values: 1: System; 2: Custom.
 * @method void setAPIType(integer $APIType) Set API type. Valid values: 1: System; 2: Custom.
 */
class DescribeMNPSensitiveAPIPermissionApprovalData extends AbstractModel
{
    /**
     * @var string API ID.
     */
    public $APIId;

    /**
     * @var string API method.
     */
    public $APIMethod;

    /**
     * @var string Reason for request.
     */
    public $ApplyReason;

    /**
     * @var string Reason for rejection.
     */
    public $RejectReason;

    /**
     * @var integer Approval status. Valid values: 20: Rejected; 30: Approved.
     */
    public $ApprovalStatus;

    /**
     * @var string API feature description.
     */
    public $APIDesc;

    /**
     * @var integer API type. Valid values: 1: System; 2: Custom.
     */
    public $APIType;

    /**
     * @param string $APIId API ID.
     * @param string $APIMethod API method.
     * @param string $ApplyReason Reason for request.
     * @param string $RejectReason Reason for rejection.
     * @param integer $ApprovalStatus Approval status. Valid values: 20: Rejected; 30: Approved.
     * @param string $APIDesc API feature description.
     * @param integer $APIType API type. Valid values: 1: System; 2: Custom.
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
