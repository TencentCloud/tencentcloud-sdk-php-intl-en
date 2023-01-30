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
 * Information of the allowlist of high-risk syscalls
 *
 * @method array getImageIds() Obtain Array of image IDs. An empty array indicates all.
 * @method void setImageIds(array $ImageIds) Set Array of image IDs. An empty array indicates all.
 * @method array getSyscallNames() Obtain Syscall name. The `DescribeRiskSyscallNames` API can be called to get the list of enumerated values.
 * @method void setSyscallNames(array $SyscallNames) Set Syscall name. The `DescribeRiskSyscallNames` API can be called to get the list of enumerated values.
 * @method string getProcessPath() Obtain Target process
 * @method void setProcessPath(string $ProcessPath) Set Target process
 * @method string getId() Obtain Allowed item ID, which is empty if the item is newly created.
 * @method void setId(string $Id) Set Allowed item ID, which is empty if the item is newly created.
 */
class RiskSyscallWhiteListInfo extends AbstractModel
{
    /**
     * @var array Array of image IDs. An empty array indicates all.
     */
    public $ImageIds;

    /**
     * @var array Syscall name. The `DescribeRiskSyscallNames` API can be called to get the list of enumerated values.
     */
    public $SyscallNames;

    /**
     * @var string Target process
     */
    public $ProcessPath;

    /**
     * @var string Allowed item ID, which is empty if the item is newly created.
     */
    public $Id;

    /**
     * @param array $ImageIds Array of image IDs. An empty array indicates all.
     * @param array $SyscallNames Syscall name. The `DescribeRiskSyscallNames` API can be called to get the list of enumerated values.
     * @param string $ProcessPath Target process
     * @param string $Id Allowed item ID, which is empty if the item is newly created.
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
        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("SyscallNames",$param) and $param["SyscallNames"] !== null) {
            $this->SyscallNames = $param["SyscallNames"];
        }

        if (array_key_exists("ProcessPath",$param) and $param["ProcessPath"] !== null) {
            $this->ProcessPath = $param["ProcessPath"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
