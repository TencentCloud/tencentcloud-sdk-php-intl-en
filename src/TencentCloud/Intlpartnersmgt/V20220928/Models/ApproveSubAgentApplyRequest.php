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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApproveSubAgentApply request structure.
 *
 * @method integer getSubAgentUin() Obtain Second-level reseller UIN.
 * @method void setSubAgentUin(integer $SubAgentUin) Set Second-level reseller UIN.
 * @method string getApproveType() Obtain Approval type. Only pass and reject are supported.
 * @method void setApproveType(string $ApproveType) Set Approval type. Only pass and reject are supported.
 * @method string getRejectReason() Obtain Reason for rejection. Fill in only when ApproveType is reject.
 * @method void setRejectReason(string $RejectReason) Set Reason for rejection. Fill in only when ApproveType is reject.
 */
class ApproveSubAgentApplyRequest extends AbstractModel
{
    /**
     * @var integer Second-level reseller UIN.
     */
    public $SubAgentUin;

    /**
     * @var string Approval type. Only pass and reject are supported.
     */
    public $ApproveType;

    /**
     * @var string Reason for rejection. Fill in only when ApproveType is reject.
     */
    public $RejectReason;

    /**
     * @param integer $SubAgentUin Second-level reseller UIN.
     * @param string $ApproveType Approval type. Only pass and reject are supported.
     * @param string $RejectReason Reason for rejection. Fill in only when ApproveType is reject.
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
        if (array_key_exists("SubAgentUin",$param) and $param["SubAgentUin"] !== null) {
            $this->SubAgentUin = $param["SubAgentUin"];
        }

        if (array_key_exists("ApproveType",$param) and $param["ApproveType"] !== null) {
            $this->ApproveType = $param["ApproveType"];
        }

        if (array_key_exists("RejectReason",$param) and $param["RejectReason"] !== null) {
            $this->RejectReason = $param["RejectReason"];
        }
    }
}
