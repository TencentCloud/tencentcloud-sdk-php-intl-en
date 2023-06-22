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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Proxy node
 *
 * @method string getProxyId() Obtain Proxy node ID Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyId(string $ProxyId) Set Proxy node ID Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCpu() Obtain Number of CPU cores Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMem() Obtain Memory size Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMem(integer $Mem) Set Memory size Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Node status Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Node status Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getZone() Obtain Proxy node AZ Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZone(string $Zone) Set Proxy node AZ Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Proxy node region Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Proxy node region Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getConnection() Obtain Connections Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConnection(integer $Connection) Set Connections Note: This field may return null, indicating that no valid values can be obtained.
 */
class ProxyNode extends AbstractModel
{
    /**
     * @var string Proxy node ID Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyId;

    /**
     * @var integer Number of CPU cores Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cpu;

    /**
     * @var integer Memory size Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mem;

    /**
     * @var string Node status Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Proxy node AZ Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Zone;

    /**
     * @var string Proxy node region Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var integer Connections Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Connection;

    /**
     * @param string $ProxyId Proxy node ID Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Cpu Number of CPU cores Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Mem Memory size Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Node status Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Zone Proxy node AZ Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Proxy node region Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Connection Connections Note: This field may return null, indicating that no valid values can be obtained.
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
