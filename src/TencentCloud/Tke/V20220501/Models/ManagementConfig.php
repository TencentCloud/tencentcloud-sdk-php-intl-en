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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Management configuration of managed node pools
 *
 * @method array getNameservers() Obtain dns configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setNameservers(array $Nameservers) Set dns configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getHosts() Obtain hosts configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setHosts(array $Hosts) Set hosts configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getKernelArgs() Obtain Kernel parameter configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setKernelArgs(array $KernelArgs) Set Kernel parameter configuration
Note: This field may return "null", indicating that no valid value can be obtained.
 */
class ManagementConfig extends AbstractModel
{
    /**
     * @var array dns configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Nameservers;

    /**
     * @var array hosts configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $Hosts;

    /**
     * @var array Kernel parameter configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $KernelArgs;

    /**
     * @param array $Nameservers dns configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $Hosts hosts configuration
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $KernelArgs Kernel parameter configuration
Note: This field may return "null", indicating that no valid value can be obtained.
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
        if (array_key_exists("Nameservers",$param) and $param["Nameservers"] !== null) {
            $this->Nameservers = $param["Nameservers"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("KernelArgs",$param) and $param["KernelArgs"] !== null) {
            $this->KernelArgs = $param["KernelArgs"];
        }
    }
}
