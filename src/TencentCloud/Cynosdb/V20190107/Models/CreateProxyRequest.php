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
 * CreateProxy request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getCpu() Obtain Number of CPU cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
 * @method integer getMem() Obtain memory
 * @method void setMem(integer $Mem) Set memory
 * @method string getUniqueVpcId() Obtain VPC ID. Default value: the VPC ID of the cluster.
 * @method void setUniqueVpcId(string $UniqueVpcId) Set VPC ID. Default value: the VPC ID of the cluster.
 * @method string getUniqueSubnetId() Obtain VPC subnet ID. Default value: the cluster subnet ID.
 * @method void setUniqueSubnetId(string $UniqueSubnetId) Set VPC subnet ID. Default value: the cluster subnet ID.
 * @method integer getProxyCount() Obtain Number of database proxy group nodes (this parameter is no longer recommended. Use ProxyZones instead)
 * @method void setProxyCount(integer $ProxyCount) Set Number of database proxy group nodes (this parameter is no longer recommended. Use ProxyZones instead)
 * @method string getConnectionPoolType() Obtain Connection pool type: SessionConnectionPool (session-level connection pool)
 * @method void setConnectionPoolType(string $ConnectionPoolType) Set Connection pool type: SessionConnectionPool (session-level connection pool)
 * @method string getOpenConnectionPool() Obtain Whether connection pool is enabled. yes: enabled; no: not enabled
 * @method void setOpenConnectionPool(string $OpenConnectionPool) Set Whether connection pool is enabled. yes: enabled; no: not enabled
 * @method integer getConnectionPoolTimeOut() Obtain Connection pool threshold. Unit: second
 * @method void setConnectionPoolTimeOut(integer $ConnectionPoolTimeOut) Set Connection pool threshold. Unit: second
 * @method array getSecurityGroupIds() Obtain Security group ID array
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID array
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method array getProxyZones() Obtain Database node information (either this parameter or ProxyCount is required)
 * @method void setProxyZones(array $ProxyZones) Set Database node information (either this parameter or ProxyCount is required)
 */
class CreateProxyRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Number of CPU cores
     */
    public $Cpu;

    /**
     * @var integer memory
     */
    public $Mem;

    /**
     * @var string VPC ID. Default value: the VPC ID of the cluster.
     */
    public $UniqueVpcId;

    /**
     * @var string VPC subnet ID. Default value: the cluster subnet ID.
     */
    public $UniqueSubnetId;

    /**
     * @var integer Number of database proxy group nodes (this parameter is no longer recommended. Use ProxyZones instead)
     */
    public $ProxyCount;

    /**
     * @var string Connection pool type: SessionConnectionPool (session-level connection pool)
     */
    public $ConnectionPoolType;

    /**
     * @var string Whether connection pool is enabled. yes: enabled; no: not enabled
     */
    public $OpenConnectionPool;

    /**
     * @var integer Connection pool threshold. Unit: second
     */
    public $ConnectionPoolTimeOut;

    /**
     * @var array Security group ID array
     */
    public $SecurityGroupIds;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var array Database node information (either this parameter or ProxyCount is required)
     */
    public $ProxyZones;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $Cpu Number of CPU cores
     * @param integer $Mem memory
     * @param string $UniqueVpcId VPC ID. Default value: the VPC ID of the cluster.
     * @param string $UniqueSubnetId VPC subnet ID. Default value: the cluster subnet ID.
     * @param integer $ProxyCount Number of database proxy group nodes (this parameter is no longer recommended. Use ProxyZones instead)
     * @param string $ConnectionPoolType Connection pool type: SessionConnectionPool (session-level connection pool)
     * @param string $OpenConnectionPool Whether connection pool is enabled. yes: enabled; no: not enabled
     * @param integer $ConnectionPoolTimeOut Connection pool threshold. Unit: second
     * @param array $SecurityGroupIds Security group ID array
     * @param string $Description Description.
     * @param array $ProxyZones Database node information (either this parameter or ProxyCount is required)
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("UniqueVpcId",$param) and $param["UniqueVpcId"] !== null) {
            $this->UniqueVpcId = $param["UniqueVpcId"];
        }

        if (array_key_exists("UniqueSubnetId",$param) and $param["UniqueSubnetId"] !== null) {
            $this->UniqueSubnetId = $param["UniqueSubnetId"];
        }

        if (array_key_exists("ProxyCount",$param) and $param["ProxyCount"] !== null) {
            $this->ProxyCount = $param["ProxyCount"];
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

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
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
