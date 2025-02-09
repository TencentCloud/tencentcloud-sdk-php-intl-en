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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result of the mini program approval requests
 *
 * @method string getAppId() Obtain Application ID
 * @method void setAppId(string $AppId) Set Application ID
 * @method integer getApprovalResult() Obtain Approval result. 2: Rejected;
3: Approved
 * @method void setApprovalResult(integer $ApprovalResult) Set Approval result. 2: Rejected;
3: Approved
 * @method string getApprovalNote() Obtain Approval notes. It’s required when the request is rejected.
 * @method void setApprovalNote(string $ApprovalNote) Set Approval notes. It’s required when the request is rejected.
 */
class ApprovalItem extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $AppId;

    /**
     * @var integer Approval result. 2: Rejected;
3: Approved
     */
    public $ApprovalResult;

    /**
     * @var string Approval notes. It’s required when the request is rejected.
     */
    public $ApprovalNote;

    /**
     * @param string $AppId Application ID
     * @param integer $ApprovalResult Approval result. 2: Rejected;
3: Approved
     * @param string $ApprovalNote Approval notes. It’s required when the request is rejected.
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ApprovalResult",$param) and $param["ApprovalResult"] !== null) {
            $this->ApprovalResult = $param["ApprovalResult"];
        }

        if (array_key_exists("ApprovalNote",$param) and $param["ApprovalNote"] !== null) {
            $this->ApprovalNote = $param["ApprovalNote"];
        }
    }
}
