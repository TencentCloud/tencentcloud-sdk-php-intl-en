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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * When adding or resizing an instance, synchronously upgrade the proxy.
 *
 * @method integer getCpu() Obtain cpu
 * @method void setCpu(integer $Cpu) Set cpu
 * @method integer getMem() Obtain memory
 * @method void setMem(integer $Mem) Set memory
 * @method array getProxyZones() Obtain Proxy node information
 * @method void setProxyZones(array $ProxyZones) Set Proxy node information
 * @method string getReloadBalance() Obtain Rebalance
 * @method void setReloadBalance(string $ReloadBalance) Set Rebalance
 */
class UpgradeProxy extends AbstractModel
{
    /**
     * @var integer cpu
     */
    public $Cpu;

    /**
     * @var integer memory
     */
    public $Mem;

    /**
     * @var array Proxy node information
     */
    public $ProxyZones;

    /**
     * @var string Rebalance
     */
    public $ReloadBalance;

    /**
     * @param integer $Cpu cpu
     * @param integer $Mem memory
     * @param array $ProxyZones Proxy node information
     * @param string $ReloadBalance Rebalance
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("ProxyZones",$param) and $param["ProxyZones"] !== null) {
            $this->ProxyZones = [];
            foreach ($param["ProxyZones"] as $key => $value){
                $obj = new ProxyZone();
                $obj->deserialize($value);
                array_push($this->ProxyZones, $obj);
            }
        }

        if (array_key_exists("ReloadBalance",$param) and $param["ReloadBalance"] !== null) {
            $this->ReloadBalance = $param["ReloadBalance"];
        }
    }
}
