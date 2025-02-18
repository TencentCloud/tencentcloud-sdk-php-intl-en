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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPolicy request structure.
 *
 * @method string getProjectId() Obtain Project id for modifying permission configuration.
 * @method void setProjectId(string $ProjectId) Set Project id for modifying permission configuration.
 * @method string getRemoteDeviceId() Obtain Remote device id for modifying permission configuration.
 * @method void setRemoteDeviceId(string $RemoteDeviceId) Set Remote device id for modifying permission configuration.
 * @method array getFieldDeviceIds() Obtain Array of on-site device ids involved in permission modification.
 * @method void setFieldDeviceIds(array $FieldDeviceIds) Set Array of on-site device ids involved in permission modification.
 * @method string getPolicyMode() Obtain The target permission mode to modify, black for blocklist, white for allowlist.
 * @method void setPolicyMode(string $PolicyMode) Set The target permission mode to modify, black for blocklist, white for allowlist.
 * @method string getModifyMode() Obtain Modification mode, add for adding (associating on-site devices), remove for deletion (dissociating on-site devices), set for setting (updating on-site device association).
 * @method void setModifyMode(string $ModifyMode) Set Modification mode, add for adding (associating on-site devices), remove for deletion (dissociating on-site devices), set for setting (updating on-site device association).
 */
class ModifyPolicyRequest extends AbstractModel
{
    /**
     * @var string Project id for modifying permission configuration.
     */
    public $ProjectId;

    /**
     * @var string Remote device id for modifying permission configuration.
     */
    public $RemoteDeviceId;

    /**
     * @var array Array of on-site device ids involved in permission modification.
     */
    public $FieldDeviceIds;

    /**
     * @var string The target permission mode to modify, black for blocklist, white for allowlist.
     */
    public $PolicyMode;

    /**
     * @var string Modification mode, add for adding (associating on-site devices), remove for deletion (dissociating on-site devices), set for setting (updating on-site device association).
     */
    public $ModifyMode;

    /**
     * @param string $ProjectId Project id for modifying permission configuration.
     * @param string $RemoteDeviceId Remote device id for modifying permission configuration.
     * @param array $FieldDeviceIds Array of on-site device ids involved in permission modification.
     * @param string $PolicyMode The target permission mode to modify, black for blocklist, white for allowlist.
     * @param string $ModifyMode Modification mode, add for adding (associating on-site devices), remove for deletion (dissociating on-site devices), set for setting (updating on-site device association).
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RemoteDeviceId",$param) and $param["RemoteDeviceId"] !== null) {
            $this->RemoteDeviceId = $param["RemoteDeviceId"];
        }

        if (array_key_exists("FieldDeviceIds",$param) and $param["FieldDeviceIds"] !== null) {
            $this->FieldDeviceIds = $param["FieldDeviceIds"];
        }

        if (array_key_exists("PolicyMode",$param) and $param["PolicyMode"] !== null) {
            $this->PolicyMode = $param["PolicyMode"];
        }

        if (array_key_exists("ModifyMode",$param) and $param["ModifyMode"] !== null) {
            $this->ModifyMode = $param["ModifyMode"];
        }
    }
}
