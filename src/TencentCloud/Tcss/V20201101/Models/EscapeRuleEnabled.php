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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Enablement/Disablement of the container escape scan policy
 *
 * @method string getType() Obtain Rule type
ESCAPE_CGROUPS: Escape by using the cgroup mechanism
ESCAPE_TAMPER_SENSITIVE_FILE: Escape by tampering with sensitive files
ESCAPE_DOCKER_API: Escape by accessing the Docker API
ESCAPE_VUL_OCCURRED: Escape vulnerability exploitation.
MOUNT_SENSITIVE_PATH: MOUNT SENSITIVE path
PRIVILEGE_CONTAINER_START: Privilege container
PRIVILEGE: Escape by program privilege escalation
 * @method void setType(string $Type) Set Rule type
ESCAPE_CGROUPS: Escape by using the cgroup mechanism
ESCAPE_TAMPER_SENSITIVE_FILE: Escape by tampering with sensitive files
ESCAPE_DOCKER_API: Escape by accessing the Docker API
ESCAPE_VUL_OCCURRED: Escape vulnerability exploitation.
MOUNT_SENSITIVE_PATH: MOUNT SENSITIVE path
PRIVILEGE_CONTAINER_START: Privilege container
PRIVILEGE: Escape by program privilege escalation
 * @method boolean getIsEnable() Obtain Whether to enable. Valid values: `false` (no); `true` (yes).
 * @method void setIsEnable(boolean $IsEnable) Set Whether to enable. Valid values: `false` (no); `true` (yes).
 */
class EscapeRuleEnabled extends AbstractModel
{
    /**
     * @var string Rule type
ESCAPE_CGROUPS: Escape by using the cgroup mechanism
ESCAPE_TAMPER_SENSITIVE_FILE: Escape by tampering with sensitive files
ESCAPE_DOCKER_API: Escape by accessing the Docker API
ESCAPE_VUL_OCCURRED: Escape vulnerability exploitation.
MOUNT_SENSITIVE_PATH: MOUNT SENSITIVE path
PRIVILEGE_CONTAINER_START: Privilege container
PRIVILEGE: Escape by program privilege escalation
     */
    public $Type;

    /**
     * @var boolean Whether to enable. Valid values: `false` (no); `true` (yes).
     */
    public $IsEnable;

    /**
     * @param string $Type Rule type
ESCAPE_CGROUPS: Escape by using the cgroup mechanism
ESCAPE_TAMPER_SENSITIVE_FILE: Escape by tampering with sensitive files
ESCAPE_DOCKER_API: Escape by accessing the Docker API
ESCAPE_VUL_OCCURRED: Escape vulnerability exploitation.
MOUNT_SENSITIVE_PATH: MOUNT SENSITIVE path
PRIVILEGE_CONTAINER_START: Privilege container
PRIVILEGE: Escape by program privilege escalation
     * @param boolean $IsEnable Whether to enable. Valid values: `false` (no); `true` (yes).
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }
    }
}
