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
 * @method integer getProxyCount() Obtain <p>Number of database proxy group nodes. This parameter is no longer recommended. Recommend using ProxyZones.</p>
 * @method void setProxyCount(integer $ProxyCount) Set <p>Number of database proxy group nodes. This parameter is no longer recommended. Recommend using ProxyZones.</p>
 * @method integer getCpu() Obtain <p>cpu cores</p>
 * @method void setCpu(integer $Cpu) Set <p>cpu cores</p>
 * @method integer getMem() Obtain <p>Memory</p>
 * @method void setMem(integer $Mem) Set <p>Memory</p>
 * @method string getConnectionPoolType() Obtain <p>Connection pool type: SessionConnectionPool (session-level connection pool)</p>
 * @method void setConnectionPoolType(string $ConnectionPoolType) Set <p>Connection pool type: SessionConnectionPool (session-level connection pool)</p>
 * @method string getOpenConnectionPool() Obtain <p>Whether the connection pool is enabled, yes-enable, no-disable</p>
 * @method void setOpenConnectionPool(string $OpenConnectionPool) Set <p>Whether the connection pool is enabled, yes-enable, no-disable</p>
 * @method integer getConnectionPoolTimeOut() Obtain <p>Connection pool threshold: Measurement unit (seconds)</p>
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) Set <p>Connection pool threshold: Measurement unit (seconds)</p>
 * @method string getDescription() Obtain <p>description</p>
 * @method void setDescription(string $Description) Set <p>description</p>
 * @method array getProxyZones() Obtain <p>Database node information (this parameter is used in combination with ProxyCount and either one must be input)</p>
 * @method void setProxyZones(array $ProxyZones) Set <p>Database node information (this parameter is used in combination with ProxyCount and either one must be input)</p>
 */
class ProxyConfig extends AbstractModel
{
    /**
     * @var integer <p>Number of database proxy group nodes. This parameter is no longer recommended. Recommend using ProxyZones.</p>
     * @deprecated
     */
    public $ProxyCount;

    /**
     * @var integer <p>cpu cores</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Memory</p>
     */
    public $Mem;

    /**
     * @var string <p>Connection pool type: SessionConnectionPool (session-level connection pool)</p>
     */
    public $ConnectionPoolType;

    /**
     * @var string <p>Whether the connection pool is enabled, yes-enable, no-disable</p>
     */
    public $OpenConnectionPool;

    /**
     * @var integer <p>Connection pool threshold: Measurement unit (seconds)</p>
     */
    public $ConnectionPoolTimeOut;

    /**
     * @var string <p>description</p>
     */
    public $Description;

    /**
     * @var array <p>Database node information (this parameter is used in combination with ProxyCount and either one must be input)</p>
     */
    public $ProxyZones;

    /**
     * @param integer $ProxyCount <p>Number of database proxy group nodes. This parameter is no longer recommended. Recommend using ProxyZones.</p>
     * @param integer $Cpu <p>cpu cores</p>
     * @param integer $Mem <p>Memory</p>
     * @param string $ConnectionPoolType <p>Connection pool type: SessionConnectionPool (session-level connection pool)</p>
     * @param string $OpenConnectionPool <p>Whether the connection pool is enabled, yes-enable, no-disable</p>
     * @param integer $ConnectionPoolTimeOut <p>Connection pool threshold: Measurement unit (seconds)</p>
     * @param string $Description <p>description</p>
     * @param array $ProxyZones <p>Database node information (this parameter is used in combination with ProxyCount and either one must be input)</p>
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

        if (array_key_exists("ConnectionPoolType",$param) and $param["ConnectionPoolType"] !== null) {
            $this->ConnectionPoolType = $param["ConnectionPoolType"];
        }

        if (array_key_exists("OpenConnectionPool",$param) and $param["OpenConnectionPool"] !== null) {
            $this->OpenConnectionPool = $param["OpenConnectionPool"];
        }

        if (array_key_exists("ConnectionPoolTimeOut",$param) and $param["ConnectionPoolTimeOut"] !== null) {
            $this->ConnectionPoolTimeOut = $param["ConnectionPoolTimeOut"];
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
