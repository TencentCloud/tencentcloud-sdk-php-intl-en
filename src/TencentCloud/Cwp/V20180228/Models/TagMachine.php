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
 * Information on tag-related servers
 *
 * @method string getId() Obtain ID
 * @method void setId(string $Id) Set ID
 * @method string getQuuid() Obtain Host ID
 * @method void setQuuid(string $Quuid) Set Host ID
 * @method string getMachineName() Obtain Host name
 * @method void setMachineName(string $MachineName) Set Host name
 * @method string getMachineIp() Obtain Host private IP address
 * @method void setMachineIp(string $MachineIp) Set Host private IP address
 * @method string getMachineWanIp() Obtain Host public IP address
 * @method void setMachineWanIp(string $MachineWanIp) Set Host public IP address
 * @method string getMachineRegion() Obtain Host region
 * @method void setMachineRegion(string $MachineRegion) Set Host region
 * @method string getMachineType() Obtain Host region type
 * @method void setMachineType(string $MachineType) Set Host region type
 */
class TagMachine extends AbstractModel
{
    /**
     * @var string ID
     */
    public $Id;

    /**
     * @var string Host ID
     */
    public $Quuid;

    /**
     * @var string Host name
     */
    public $MachineName;

    /**
     * @var string Host private IP address
     */
    public $MachineIp;

    /**
     * @var string Host public IP address
     */
    public $MachineWanIp;

    /**
     * @var string Host region
     */
    public $MachineRegion;

    /**
     * @var string Host region type
     */
    public $MachineType;

    /**
     * @param string $Id ID
     * @param string $Quuid Host ID
     * @param string $MachineName Host name
     * @param string $MachineIp Host private IP address
     * @param string $MachineWanIp Host public IP address
     * @param string $MachineRegion Host region
     * @param string $MachineType Host region type
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineIp",$param) and $param["MachineIp"] !== null) {
            $this->MachineIp = $param["MachineIp"];
        }

        if (array_key_exists("MachineWanIp",$param) and $param["MachineWanIp"] !== null) {
            $this->MachineWanIp = $param["MachineWanIp"];
        }

        if (array_key_exists("MachineRegion",$param) and $param["MachineRegion"] !== null) {
            $this->MachineRegion = $param["MachineRegion"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }
    }
}
