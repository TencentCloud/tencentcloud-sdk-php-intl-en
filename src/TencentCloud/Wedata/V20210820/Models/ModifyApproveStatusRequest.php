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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyApproveStatus request structure.
 *
 * @method array getApproveIds() Obtain Approval Form IDs
 * @method void setApproveIds(array $ApproveIds) Set Approval Form IDs
 * @method string getRemark() Obtain Approval Remarks
 * @method void setRemark(string $Remark) Set Approval Remarks
 * @method string getStatus() Obtain Status
 * @method void setStatus(string $Status) Set Status
 */
class ModifyApproveStatusRequest extends AbstractModel
{
    /**
     * @var array Approval Form IDs
     */
    public $ApproveIds;

    /**
     * @var string Approval Remarks
     */
    public $Remark;

    /**
     * @var string Status
     */
    public $Status;

    /**
     * @param array $ApproveIds Approval Form IDs
     * @param string $Remark Approval Remarks
     * @param string $Status Status
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
        if (array_key_exists("ApproveIds",$param) and $param["ApproveIds"] !== null) {
            $this->ApproveIds = $param["ApproveIds"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
