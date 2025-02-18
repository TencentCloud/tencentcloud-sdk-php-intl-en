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
 * BatchDeletePolicy request structure.
 *
 * @method string getProjectId() Obtain Project id of the deleted permission configuration.
 * @method void setProjectId(string $ProjectId) Set Project id of the deleted permission configuration.
 * @method array getRemoteDeviceIds() Obtain Remote device id list of the deleted permission configuration.
 * @method void setRemoteDeviceIds(array $RemoteDeviceIds) Set Remote device id list of the deleted permission configuration.
 * @method string getPolicyMode() Obtain Permission mode of the deleted permission configuration, black for blocklist, white for allowlist.
 * @method void setPolicyMode(string $PolicyMode) Set Permission mode of the deleted permission configuration, black for blocklist, white for allowlist.
 */
class BatchDeletePolicyRequest extends AbstractModel
{
    /**
     * @var string Project id of the deleted permission configuration.
     */
    public $ProjectId;

    /**
     * @var array Remote device id list of the deleted permission configuration.
     */
    public $RemoteDeviceIds;

    /**
     * @var string Permission mode of the deleted permission configuration, black for blocklist, white for allowlist.
     */
    public $PolicyMode;

    /**
     * @param string $ProjectId Project id of the deleted permission configuration.
     * @param array $RemoteDeviceIds Remote device id list of the deleted permission configuration.
     * @param string $PolicyMode Permission mode of the deleted permission configuration, black for blocklist, white for allowlist.
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

        if (array_key_exists("RemoteDeviceIds",$param) and $param["RemoteDeviceIds"] !== null) {
            $this->RemoteDeviceIds = $param["RemoteDeviceIds"];
        }

        if (array_key_exists("PolicyMode",$param) and $param["PolicyMode"] !== null) {
            $this->PolicyMode = $param["PolicyMode"];
        }
    }
}
