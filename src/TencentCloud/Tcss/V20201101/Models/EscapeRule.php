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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Enablement/Disablement of the container escape scan policy
 *
 * @method string getType() Obtain Rule type   
`ESCAPE_HOST_ACESS_FILE`: Host file access escape.
   `ESCAPE_MOUNT_NAMESPACE`: Mount namespace escape.
   `ESCAPE_PRIVILEDGE`: Program privilege escalation escape.
   `ESCAPE_PRIVILEDGE_CONTAINER_START`: Privileged container startup escape.
   `ESCAPE_MOUNT_SENSITIVE_PTAH`: Sensitive path mount.
`ESCAPE_SYSCALL`: Syscall escape.
 * @method void setType(string $Type) Set Rule type   
`ESCAPE_HOST_ACESS_FILE`: Host file access escape.
   `ESCAPE_MOUNT_NAMESPACE`: Mount namespace escape.
   `ESCAPE_PRIVILEDGE`: Program privilege escalation escape.
   `ESCAPE_PRIVILEDGE_CONTAINER_START`: Privileged container startup escape.
   `ESCAPE_MOUNT_SENSITIVE_PTAH`: Sensitive path mount.
`ESCAPE_SYSCALL`: Syscall escape.
 * @method string getName() Obtain Rule name
Host file access escape
Syscall escape
Mount namespace escape
Program privilege escalation escape
Privileged container startup escape
Sensitive path mount
 * @method void setName(string $Name) Set Rule name
Host file access escape
Syscall escape
Mount namespace escape
Program privilege escalation escape
Privileged container startup escape
Sensitive path mount
 * @method boolean getIsEnable() Obtain Whether to enable. Valid values: `false` (no); `true` (yes).
 * @method void setIsEnable(boolean $IsEnable) Set Whether to enable. Valid values: `false` (no); `true` (yes).
 * @method string getGroup() Obtain Rule group. Valid values: `RISK_CONTAINER` (container in risk); `PROCESS_PRIVILEGE` (program privilege escalation); `CONTAINER_ESCAPE` (container escape).
 * @method void setGroup(string $Group) Set Rule group. Valid values: `RISK_CONTAINER` (container in risk); `PROCESS_PRIVILEGE` (program privilege escalation); `CONTAINER_ESCAPE` (container escape).
 */
class EscapeRule extends AbstractModel
{
    /**
     * @var string Rule type   
`ESCAPE_HOST_ACESS_FILE`: Host file access escape.
   `ESCAPE_MOUNT_NAMESPACE`: Mount namespace escape.
   `ESCAPE_PRIVILEDGE`: Program privilege escalation escape.
   `ESCAPE_PRIVILEDGE_CONTAINER_START`: Privileged container startup escape.
   `ESCAPE_MOUNT_SENSITIVE_PTAH`: Sensitive path mount.
`ESCAPE_SYSCALL`: Syscall escape.
     */
    public $Type;

    /**
     * @var string Rule name
Host file access escape
Syscall escape
Mount namespace escape
Program privilege escalation escape
Privileged container startup escape
Sensitive path mount
     */
    public $Name;

    /**
     * @var boolean Whether to enable. Valid values: `false` (no); `true` (yes).
     */
    public $IsEnable;

    /**
     * @var string Rule group. Valid values: `RISK_CONTAINER` (container in risk); `PROCESS_PRIVILEGE` (program privilege escalation); `CONTAINER_ESCAPE` (container escape).
     */
    public $Group;

    /**
     * @param string $Type Rule type   
`ESCAPE_HOST_ACESS_FILE`: Host file access escape.
   `ESCAPE_MOUNT_NAMESPACE`: Mount namespace escape.
   `ESCAPE_PRIVILEDGE`: Program privilege escalation escape.
   `ESCAPE_PRIVILEDGE_CONTAINER_START`: Privileged container startup escape.
   `ESCAPE_MOUNT_SENSITIVE_PTAH`: Sensitive path mount.
`ESCAPE_SYSCALL`: Syscall escape.
     * @param string $Name Rule name
Host file access escape
Syscall escape
Mount namespace escape
Program privilege escalation escape
Privileged container startup escape
Sensitive path mount
     * @param boolean $IsEnable Whether to enable. Valid values: `false` (no); `true` (yes).
     * @param string $Group Rule group. Valid values: `RISK_CONTAINER` (container in risk); `PROCESS_PRIVILEGE` (program privilege escalation); `CONTAINER_ESCAPE` (container escape).
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IsEnable",$param) and $param["IsEnable"] !== null) {
            $this->IsEnable = $param["IsEnable"];
        }

        if (array_key_exists("Group",$param) and $param["Group"] !== null) {
            $this->Group = $param["Group"];
        }
    }
}
