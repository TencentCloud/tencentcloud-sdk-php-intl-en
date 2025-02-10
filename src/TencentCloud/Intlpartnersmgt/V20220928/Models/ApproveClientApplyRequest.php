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
 * ApproveClientApply request structure.
 *
 * @method integer getClientUin() Obtain Sub-customer uin.
 * @method void setClientUin(integer $ClientUin) Set Sub-customer uin.
 * @method string getApproveType() Obtain Approval type. only supports pass and reject.
 * @method void setApproveType(string $ApproveType) Set Approval type. only supports pass and reject.
 * @method string getRejectReason() Obtain Reason for rejection. required only when approvetype is reject.
 * @method void setRejectReason(string $RejectReason) Set Reason for rejection. required only when approvetype is reject.
 */
class ApproveClientApplyRequest extends AbstractModel
{
    /**
     * @var integer Sub-customer uin.
     */
    public $ClientUin;

    /**
     * @var string Approval type. only supports pass and reject.
     */
    public $ApproveType;

    /**
     * @var string Reason for rejection. required only when approvetype is reject.
     */
    public $RejectReason;

    /**
     * @param integer $ClientUin Sub-customer uin.
     * @param string $ApproveType Approval type. only supports pass and reject.
     * @param string $RejectReason Reason for rejection. required only when approvetype is reject.
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
        if (array_key_exists("ClientUin",$param) and $param["ClientUin"] !== null) {
            $this->ClientUin = $param["ClientUin"];
        }

        if (array_key_exists("ApproveType",$param) and $param["ApproveType"] !== null) {
            $this->ApproveType = $param["ApproveType"];
        }

        if (array_key_exists("RejectReason",$param) and $param["RejectReason"] !== null) {
            $this->RejectReason = $param["RejectReason"];
        }
    }
}
