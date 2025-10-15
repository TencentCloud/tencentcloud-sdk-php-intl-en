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
 * Access proxy configuration.
 *
 * @method integer getProxyCount() Obtain Number of database proxy group nodes. this parameter is no longer recommended. recommend using ProxyZones.
 * @method void setProxyCount(integer $ProxyCount) Set Number of database proxy group nodes. this parameter is no longer recommended. recommend using ProxyZones.
 * @method integer getCpu() Obtain Number of CPU cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
 * @method integer getMem() Obtain Specifies the memory.
 * @method void setMem(integer $Mem) Set Specifies the memory.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method array getProxyZones() Obtain Database node information (this parameter is used in combination with ProxyCount, either one must be manually input).
 * @method void setProxyZones(array $ProxyZones) Set Database node information (this parameter is used in combination with ProxyCount, either one must be manually input).
 */
class ProxyConfigInfo extends AbstractModel
{
    /**
     * @var integer Number of database proxy group nodes. this parameter is no longer recommended. recommend using ProxyZones.
     */
    public $ProxyCount;

    /**
     * @var integer Number of CPU cores
     */
    public $Cpu;

    /**
     * @var integer Specifies the memory.
     */
    public $Mem;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var array Database node information (this parameter is used in combination with ProxyCount, either one must be manually input).
     */
    public $ProxyZones;

    /**
     * @param integer $ProxyCount Number of database proxy group nodes. this parameter is no longer recommended. recommend using ProxyZones.
     * @param integer $Cpu Number of CPU cores
     * @param integer $Mem Specifies the memory.
     * @param string $Description Description.
     * @param array $ProxyZones Database node information (this parameter is used in combination with ProxyCount, either one must be manually input).
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
        if (array_key_exists("ProxyCount",$param) and $param["ProxyCount"] !== null) {
            $this->ProxyCount = $param["ProxyCount"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProxyZones",$param) and $param["ProxyZones"] !== null) {
            $this->ProxyZones = [];
            foreach ($param["ProxyZones"] as $key => $value){
                $obj = new ProxyZone();
                $obj->deserialize($value);
                array_push($this->ProxyZones, $obj);
            }
        }
    }
}
