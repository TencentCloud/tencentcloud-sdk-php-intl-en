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
 * Operating System Name
 *
 * @method string getName() Obtain System name
 * @method void setName(string $Name) Set System name
 * @method integer getMachineOSType() Obtain Operating system type enumeration value
 * @method void setMachineOSType(integer $MachineOSType) Set Operating system type enumeration value
 */
class OsName extends AbstractModel
{
    /**
     * @var string System name
     */
    public $Name;

    /**
     * @var integer Operating system type enumeration value
     */
    public $MachineOSType;

    /**
     * @param string $Name System name
     * @param integer $MachineOSType Operating system type enumeration value
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MachineOSType",$param) and $param["MachineOSType"] !== null) {
            $this->MachineOSType = $param["MachineOSType"];
        }
    }
}
