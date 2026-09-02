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
 * Operating System Information
 *
 * @method integer getMachineOSType() Obtain <p>OS type ID</p>
 * @method void setMachineOSType(integer $MachineOSType) Set <p>OS type ID</p>
 * @method string getName() Obtain <p>OS name</p>
 * @method void setName(string $Name) Set <p>OS name</p>
 */
class OsName extends AbstractModel
{
    /**
     * @var integer <p>OS type ID</p>
     */
    public $MachineOSType;

    /**
     * @var string <p>OS name</p>
     */
    public $Name;

    /**
     * @param integer $MachineOSType <p>OS type ID</p>
     * @param string $Name <p>OS name</p>
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
        if (array_key_exists("MachineOSType",$param) and $param["MachineOSType"] !== null) {
            $this->MachineOSType = $param["MachineOSType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
