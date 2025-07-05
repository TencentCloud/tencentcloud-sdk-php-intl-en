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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Modify Approval Form Status
 *
 * @method string getApproveId() Obtain Approval Form ID
 * @method void setApproveId(string $ApproveId) Set Approval Form ID
 * @method boolean getSuccess() Obtain Modification successful?
 * @method void setSuccess(boolean $Success) Set Modification successful?
 */
class ApproveModify extends AbstractModel
{
    /**
     * @var string Approval Form ID
     */
    public $ApproveId;

    /**
     * @var boolean Modification successful?
     */
    public $Success;

    /**
     * @param string $ApproveId Approval Form ID
     * @param boolean $Success Modification successful?
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
        if (array_key_exists("ApproveId",$param) and $param["ApproveId"] !== null) {
            $this->ApproveId = $param["ApproveId"];
        }

        if (array_key_exists("Success",$param) and $param["Success"] !== null) {
            $this->Success = $param["Success"];
        }
    }
}
