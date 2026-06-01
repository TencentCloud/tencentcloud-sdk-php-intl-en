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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Proxy node
 *
 * @method string getProxyId() Obtain Proxy node ID
 * @method void setProxyId(string $ProxyId) Set Proxy node ID
 * @method integer getCpu() Obtain Number of CPU cores.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores.
 * @method integer getMem() Obtain Memory size, measured in MB.
 * @method void setMem(integer $Mem) Set Memory size, measured in MB.
 * @method string getStatus() Obtain Node status: 0 - Initializing, 1 - Online, 2 - Offline, 3 - Being destroyed, 4 - Recovering, 5 - Node fault, 6 - Switching.
 * @method void setStatus(string $Status) Set Node status: 0 - Initializing, 1 - Online, 2 - Offline, 3 - Being destroyed, 4 - Recovering, 5 - Node fault, 6 - Switching.
 * @method string getZone() Obtain Proxy node availability zone
 * @method void setZone(string $Zone) Set Proxy node availability zone
 * @method string getRegion() Obtain Proxy Node Region
 * @method void setRegion(string $Region) Set Proxy Node Region
 * @method integer getConnection() Obtain Number of connections
 * @method void setConnection(integer $Connection) Set Number of connections
 */
class ProxyNode extends AbstractModel
{
    /**
     * @var string Proxy node ID
     */
    public $ProxyId;

    /**
     * @var integer Number of CPU cores.
     */
    public $Cpu;

    /**
     * @var integer Memory size, measured in MB.
     */
    public $Mem;

    /**
     * @var string Node status: 0 - Initializing, 1 - Online, 2 - Offline, 3 - Being destroyed, 4 - Recovering, 5 - Node fault, 6 - Switching.
     */
    public $Status;

    /**
     * @var string Proxy node availability zone
     */
    public $Zone;

    /**
     * @var string Proxy Node Region
     */
    public $Region;

    /**
     * @var integer Number of connections
     */
    public $Connection;

    /**
     * @param string $ProxyId Proxy node ID
     * @param integer $Cpu Number of CPU cores.
     * @param integer $Mem Memory size, measured in MB.
     * @param string $Status Node status: 0 - Initializing, 1 - Online, 2 - Offline, 3 - Being destroyed, 4 - Recovering, 5 - Node fault, 6 - Switching.
     * @param string $Zone Proxy node availability zone
     * @param string $Region Proxy Node Region
     * @param integer $Connection Number of connections
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
        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Connection",$param) and $param["Connection"] !== null) {
            $this->Connection = $param["Connection"];
        }
    }
}
