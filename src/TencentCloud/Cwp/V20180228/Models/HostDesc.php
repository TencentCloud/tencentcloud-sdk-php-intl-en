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
 * Host information entity of the log-in audit allowlist
 *
 * @method string getQuuid() Obtain Yunjing client ID
 * @method void setQuuid(string $Quuid) Set Yunjing client ID
 * @method string getUuid() Obtain Host ID
 * @method void setUuid(string $Uuid) Set Host ID
 * @method string getMachineName() Obtain Machine name
 * @method void setMachineName(string $MachineName) Set Machine name
 * @method string getMachineIp() Obtain Machine IP address. This parameter is left blank for terminated servers.
 * @method void setMachineIp(string $MachineIp) Set Machine IP address. This parameter is left blank for terminated servers.
 * @method string getMachineWanIp() Obtain Public IP address. This parameter is left blank for terminated servers.
 * @method void setMachineWanIp(string $MachineWanIp) Set Public IP address. This parameter is left blank for terminated servers.
 * @method array getTags() Obtain Tag information array
 * @method void setTags(array $Tags) Set Tag information array
 */
class HostDesc extends AbstractModel
{
    /**
     * @var string Yunjing client ID
     */
    public $Quuid;

    /**
     * @var string Host ID
     */
    public $Uuid;

    /**
     * @var string Machine name
     */
    public $MachineName;

    /**
     * @var string Machine IP address. This parameter is left blank for terminated servers.
     */
    public $MachineIp;

    /**
     * @var string Public IP address. This parameter is left blank for terminated servers.
     */
    public $MachineWanIp;

    /**
     * @var array Tag information array
     */
    public $Tags;

    /**
     * @param string $Quuid Yunjing client ID
     * @param string $Uuid Host ID
     * @param string $MachineName Machine name
     * @param string $MachineIp Machine IP address. This parameter is left blank for terminated servers.
     * @param string $MachineWanIp Public IP address. This parameter is left blank for terminated servers.
     * @param array $Tags Tag information array
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new MachineTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
