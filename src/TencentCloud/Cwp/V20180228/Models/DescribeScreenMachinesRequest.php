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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScreenMachines request structure.
 *
 * @method string getMachineRegion() Obtain Host region
 * @method void setMachineRegion(string $MachineRegion) Set Host region
 * @method string getMachineIpOrAlias() Obtain Private IP address or host alias
 * @method void setMachineIpOrAlias(string $MachineIpOrAlias) Set Private IP address or host alias
 * @method integer getSecurityStatus() Obtain Risky host type. 0: all types; 1: risky host; 2: host with potential risks; 3: host that is shut down or offline; 4: host with no risk.
 * @method void setSecurityStatus(integer $SecurityStatus) Set Risky host type. 0: all types; 1: risky host; 2: host with potential risks; 3: host that is shut down or offline; 4: host with no risk.
 */
class DescribeScreenMachinesRequest extends AbstractModel
{
    /**
     * @var string Host region
     */
    public $MachineRegion;

    /**
     * @var string Private IP address or host alias
     */
    public $MachineIpOrAlias;

    /**
     * @var integer Risky host type. 0: all types; 1: risky host; 2: host with potential risks; 3: host that is shut down or offline; 4: host with no risk.
     */
    public $SecurityStatus;

    /**
     * @param string $MachineRegion Host region
     * @param string $MachineIpOrAlias Private IP address or host alias
     * @param integer $SecurityStatus Risky host type. 0: all types; 1: risky host; 2: host with potential risks; 3: host that is shut down or offline; 4: host with no risk.
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
        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
        }

        if (array_key_exists("MachineIpOrAlias",$param) and $param["MachineIpOrAlias"] !== null) {
            $this->MachineIpOrAlias = $param["MachineIpOrAlias"];
        }

        if (array_key_exists("SecurityStatus",$param) and $param["SecurityStatus"] !== null) {
            $this->SecurityStatus = $param["SecurityStatus"];
        }
    }
}
