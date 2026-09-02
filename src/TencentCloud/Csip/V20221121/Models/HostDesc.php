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
 * Host information entity of the log-in audit allowlist
 *
 * @method string getQuuid() Obtain <p>Machine uuid</p>
 * @method void setQuuid(string $Quuid) Set <p>Machine uuid</p>
 * @method string getUuid() Obtain <p>Host security UID</p>
 * @method void setUuid(string $Uuid) Set <p>Host security UID</p>
 * @method string getMachineName() Obtain <p>Machine name</p>
 * @method void setMachineName(string $MachineName) Set <p>Machine name</p>
 * @method string getMachineIp() Obtain <p>Machine IP address. This parameter is left blank for terminated servers.</p>
 * @method void setMachineIp(string $MachineIp) Set <p>Machine IP address. This parameter is left blank for terminated servers.</p>
 * @method string getMachineWanIp() Obtain <p>Public IP address. This parameter is left blank for terminated servers.</p>
 * @method void setMachineWanIp(string $MachineWanIp) Set <p>Public IP address. This parameter is left blank for terminated servers.</p>
 * @method array getTags() Obtain <p>Tag information array</p>
 * @method void setTags(array $Tags) Set <p>Tag information array</p>
 */
class HostDesc extends AbstractModel
{
    /**
     * @var string <p>Machine uuid</p>
     */
    public $Quuid;

    /**
     * @var string <p>Host security UID</p>
     */
    public $Uuid;

    /**
     * @var string <p>Machine name</p>
     */
    public $MachineName;

    /**
     * @var string <p>Machine IP address. This parameter is left blank for terminated servers.</p>
     */
    public $MachineIp;

    /**
     * @var string <p>Public IP address. This parameter is left blank for terminated servers.</p>
     */
    public $MachineWanIp;

    /**
     * @var array <p>Tag information array</p>
     */
    public $Tags;

    /**
     * @param string $Quuid <p>Machine uuid</p>
     * @param string $Uuid <p>Host security UID</p>
     * @param string $MachineName <p>Machine name</p>
     * @param string $MachineIp <p>Machine IP address. This parameter is left blank for terminated servers.</p>
     * @param string $MachineWanIp <p>Public IP address. This parameter is left blank for terminated servers.</p>
     * @param array $Tags <p>Tag information array</p>
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
