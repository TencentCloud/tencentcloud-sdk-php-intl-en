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
 * Queries mini program payment approval status.
 *
 * @method integer getApprovalStatus() Obtain <p>Approval status. Valid values: 0: In progress; 10: Approved; 20: Rejected.</p>
 * @method void setApprovalStatus(integer $ApprovalStatus) Set <p>Approval status. Valid values: 0: In progress; 10: Approved; 20: Rejected.</p>
 * @method integer getApplyTime() Obtain <p>Application time.</p><p>Unit: Milliseconds.</p>
 * @method void setApplyTime(integer $ApplyTime) Set <p>Application time.</p><p>Unit: Milliseconds.</p>
 * @method integer getApprovalTime() Obtain <p>Approval time.</p><p>Unit: milliseconds.</p>
 * @method void setApprovalTime(integer $ApprovalTime) Set <p>Approval time.</p><p>Unit: milliseconds.</p>
 * @method string getApprovalNote() Obtain <p>Approval note.</p>
 * @method void setApprovalNote(string $ApprovalNote) Set <p>Approval note.</p>
 * @method integer getApprovalShow() Obtain <p>Specifies whether to display the approval records. Valid values: 0: No; 1: Yes.</p>
 * @method void setApprovalShow(integer $ApprovalShow) Set <p>Specifies whether to display the approval records. Valid values: 0: No; 1: Yes.</p>
 * @method integer getApplyShow() Obtain <p>Specifies whether the activation of mini program payment can be requested again. Valid values: 0: No; 1: Yes.</p>
 * @method void setApplyShow(integer $ApplyShow) Set <p>Specifies whether the activation of mini program payment can be requested again. Valid values: 0: No; 1: Yes.</p>
 */
class ApplyPaymentOpenDetailRes extends AbstractModel
{
    /**
     * @var integer <p>Approval status. Valid values: 0: In progress; 10: Approved; 20: Rejected.</p>
     */
    public $ApprovalStatus;

    /**
     * @var integer <p>Application time.</p><p>Unit: Milliseconds.</p>
     */
    public $ApplyTime;

    /**
     * @var integer <p>Approval time.</p><p>Unit: milliseconds.</p>
     */
    public $ApprovalTime;

    /**
     * @var string <p>Approval note.</p>
     */
    public $ApprovalNote;

    /**
     * @var integer <p>Specifies whether to display the approval records. Valid values: 0: No; 1: Yes.</p>
     */
    public $ApprovalShow;

    /**
     * @var integer <p>Specifies whether the activation of mini program payment can be requested again. Valid values: 0: No; 1: Yes.</p>
     */
    public $ApplyShow;

    /**
     * @param integer $ApprovalStatus <p>Approval status. Valid values: 0: In progress; 10: Approved; 20: Rejected.</p>
     * @param integer $ApplyTime <p>Application time.</p><p>Unit: Milliseconds.</p>
     * @param integer $ApprovalTime <p>Approval time.</p><p>Unit: milliseconds.</p>
     * @param string $ApprovalNote <p>Approval note.</p>
     * @param integer $ApprovalShow <p>Specifies whether to display the approval records. Valid values: 0: No; 1: Yes.</p>
     * @param integer $ApplyShow <p>Specifies whether the activation of mini program payment can be requested again. Valid values: 0: No; 1: Yes.</p>
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
        if (array_key_exists("ApprovalStatus",$param) and $param["ApprovalStatus"] !== null) {
            $this->ApprovalStatus = $param["ApprovalStatus"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("ApprovalTime",$param) and $param["ApprovalTime"] !== null) {
            $this->ApprovalTime = $param["ApprovalTime"];
        }

        if (array_key_exists("ApprovalNote",$param) and $param["ApprovalNote"] !== null) {
            $this->ApprovalNote = $param["ApprovalNote"];
        }

        if (array_key_exists("ApprovalShow",$param) and $param["ApprovalShow"] !== null) {
            $this->ApprovalShow = $param["ApprovalShow"];
        }

        if (array_key_exists("ApplyShow",$param) and $param["ApplyShow"] !== null) {
            $this->ApplyShow = $param["ApplyShow"];
        }
    }
}
