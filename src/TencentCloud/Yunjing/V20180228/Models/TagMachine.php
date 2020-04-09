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
namespace TencentCloud\Yunjing\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tagged server information
 *
 * @method string getId() Obtain ID
 * @method void setId(string $Id) Set ID
 * @method string getQuuid() Obtain Server ID
 * @method void setQuuid(string $Quuid) Set Server ID
 * @method string getMachineName() Obtain Server name
 * @method void setMachineName(string $MachineName) Set Server name
 * @method string getMachineIp() Obtain Private IP of server
 * @method void setMachineIp(string $MachineIp) Set Private IP of server
 * @method string getMachineWanIp() Obtain Public IP of server
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP of server
 * @method string getMachineRegion() Obtain Server region
 * @method void setMachineRegion(string $MachineRegion) Set Server region
 * @method string getMachineType() Obtain Server region type
 * @method void setMachineType(string $MachineType) Set Server region type
 */
class TagMachine extends AbstractModel
{
    /**
     * @var string ID
     */
    public $Id;

    /**
     * @var string Server ID
     */
    public $Quuid;

    /**
     * @var string Server name
     */
    public $MachineName;

    /**
     * @var string Private IP of server
     */
    public $MachineIp;

    /**
     * @var string Public IP of server
     */
    public $MachineWanIp;

    /**
     * @var string Server region
     */
    public $MachineRegion;

    /**
     * @var string Server region type
     */
    public $MachineType;

    /**
     * @param string $Id ID
     * @param string $Quuid Server ID
     * @param string $MachineName Server name
     * @param string $MachineIp Private IP of server
     * @param string $MachineWanIp Public IP of server
     * @param string $MachineRegion Server region
     * @param string $MachineType Server region type
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
