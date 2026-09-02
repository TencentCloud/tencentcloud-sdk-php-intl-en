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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Traffic sandbox effective asset elements
 *
 * @method string getInstanceId() Obtain Instance ID. Only for host assets.
 * @method void setInstanceId(string $InstanceId) Set Instance ID. Only for host assets.
 * @method string getContainerId() Obtain Container ID. This parameter is required only when the asset type is container.
 * @method void setContainerId(string $ContainerId) Set Container ID. This parameter is required only when the asset type is container.
 */
class TrafficSandboxAssetScope extends AbstractModel
{
    /**
     * @var string Instance ID. Only for host assets.
     */
    public $InstanceId;

    /**
     * @var string Container ID. This parameter is required only when the asset type is container.
     */
    public $ContainerId;

    /**
     * @param string $InstanceId Instance ID. Only for host assets.
     * @param string $ContainerId Container ID. This parameter is required only when the asset type is container.
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

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }
    }
}
