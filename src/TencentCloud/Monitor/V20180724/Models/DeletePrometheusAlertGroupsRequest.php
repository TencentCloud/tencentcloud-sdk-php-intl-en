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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeletePrometheusAlertGroups request structure.
 *
 * @method string getInstanceId() Obtain prometheus instance id.
 * @method void setInstanceId(string $InstanceId) Set prometheus instance id.
 * @method array getGroupIds() Obtain Alert group IDs that needs to be deleted, such as alert-xxxxx.
 * @method void setGroupIds(array $GroupIds) Set Alert group IDs that needs to be deleted, such as alert-xxxxx.
 */
class DeletePrometheusAlertGroupsRequest extends AbstractModel
{
    /**
     * @var string prometheus instance id.
     */
    public $InstanceId;

    /**
     * @var array Alert group IDs that needs to be deleted, such as alert-xxxxx.
     */
    public $GroupIds;

    /**
     * @param string $InstanceId prometheus instance id.
     * @param array $GroupIds Alert group IDs that needs to be deleted, such as alert-xxxxx.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
