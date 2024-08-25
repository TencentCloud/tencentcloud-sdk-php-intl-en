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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ProcessMNPSensitiveAPIPermissionApproval request structure.
 *
 * @method string getApprovalNo() Obtain Approval ID
 * @method void setApprovalNo(string $ApprovalNo) Set Approval ID
 * @method integer getApprovalStatus() Obtain Approval status. 20: Rejected; 30: Approved
 * @method void setApprovalStatus(integer $ApprovalStatus) Set Approval status. 20: Rejected; 30: Approved
 * @method string getPlatformId() Obtain Platform ID
 * @method void setPlatformId(string $PlatformId) Set Platform ID
 * @method string getApprovalNote() Obtain Approval notes
 * @method void setApprovalNote(string $ApprovalNote) Set Approval notes
 */
class ProcessMNPSensitiveAPIPermissionApprovalRequest extends AbstractModel
{
    /**
     * @var string Approval ID
     */
    public $ApprovalNo;

    /**
     * @var integer Approval status. 20: Rejected; 30: Approved
     */
    public $ApprovalStatus;

    /**
     * @var string Platform ID
     */
    public $PlatformId;

    /**
     * @var string Approval notes
     */
    public $ApprovalNote;

    /**
     * @param string $ApprovalNo Approval ID
     * @param integer $ApprovalStatus Approval status. 20: Rejected; 30: Approved
     * @param string $PlatformId Platform ID
     * @param string $ApprovalNote Approval notes
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
        if (array_key_exists("ApprovalNo",$param) and $param["ApprovalNo"] !== null) {
            $this->ApprovalNo = $param["ApprovalNo"];
        }

        if (array_key_exists("ApprovalStatus",$param) and $param["ApprovalStatus"] !== null) {
            $this->ApprovalStatus = $param["ApprovalStatus"];
        }

        if (array_key_exists("PlatformId",$param) and $param["PlatformId"] !== null) {
            $this->PlatformId = $param["PlatformId"];
        }

        if (array_key_exists("ApprovalNote",$param) and $param["ApprovalNote"] !== null) {
            $this->ApprovalNote = $param["ApprovalNote"];
        }
    }
}
