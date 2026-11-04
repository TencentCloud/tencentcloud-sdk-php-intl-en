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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application sub-status information.
 *
 * @method string getApprovalId() Obtain Approval record ID (valid when `sub_status_list` contains `PUBLISH_APPROVING`)
 * @method void setApprovalId(string $ApprovalId) Set Approval record ID (valid when `sub_status_list` contains `PUBLISH_APPROVING`)
 * @method array getSubStatusList() Obtain Application sub-status list (possibly in multiple sub-statuses at the same time)
 * @method void setSubStatusList(array $SubStatusList) Set Application sub-status list (possibly in multiple sub-statuses at the same time)
 */
class AppSubStatusInfo extends AbstractModel
{
    /**
     * @var string Approval record ID (valid when `sub_status_list` contains `PUBLISH_APPROVING`)
     */
    public $ApprovalId;

    /**
     * @var array Application sub-status list (possibly in multiple sub-statuses at the same time)
     */
    public $SubStatusList;

    /**
     * @param string $ApprovalId Approval record ID (valid when `sub_status_list` contains `PUBLISH_APPROVING`)
     * @param array $SubStatusList Application sub-status list (possibly in multiple sub-statuses at the same time)
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
        if (array_key_exists("ApprovalId",$param) and $param["ApprovalId"] !== null) {
            $this->ApprovalId = $param["ApprovalId"];
        }

        if (array_key_exists("SubStatusList",$param) and $param["SubStatusList"] !== null) {
            $this->SubStatusList = $param["SubStatusList"];
        }
    }
}
