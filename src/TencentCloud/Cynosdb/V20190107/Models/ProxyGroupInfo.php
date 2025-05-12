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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database proxy group details
 *
 * @method ProxyGroup getProxyGroup() Obtain Database proxy group.
 * @method void setProxyGroup(ProxyGroup $ProxyGroup) Set Database proxy group.
 * @method ProxyGroupRwInfo getProxyGroupRwInfo() Obtain Database proxy group read-write separation information.
 * @method void setProxyGroupRwInfo(ProxyGroupRwInfo $ProxyGroupRwInfo) Set Database proxy group read-write separation information.
 * @method array getProxyNodes() Obtain Node information of the database proxy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyNodes(array $ProxyNodes) Set Node information of the database proxy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ProxyConnectionPoolInfo getConnectionPool() Obtain Database proxy connection pool information.
 * @method void setConnectionPool(ProxyConnectionPoolInfo $ConnectionPool) Set Database proxy connection pool information.
 * @method array getNetAddrInfos() Obtain Network information for database proxy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNetAddrInfos(array $NetAddrInfos) Set Network information for database proxy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTasks() Obtain Database proxy task set.
 * @method void setTasks(array $Tasks) Set Database proxy task set.
 */
class ProxyGroupInfo extends AbstractModel
{
    /**
     * @var ProxyGroup Database proxy group.
     */
    public $ProxyGroup;

    /**
     * @var ProxyGroupRwInfo Database proxy group read-write separation information.
     */
    public $ProxyGroupRwInfo;

    /**
     * @var array Node information of the database proxy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyNodes;

    /**
     * @var ProxyConnectionPoolInfo Database proxy connection pool information.
     */
    public $ConnectionPool;

    /**
     * @var array Network information for database proxy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NetAddrInfos;

    /**
     * @var array Database proxy task set.
     */
    public $Tasks;

    /**
     * @param ProxyGroup $ProxyGroup Database proxy group.
     * @param ProxyGroupRwInfo $ProxyGroupRwInfo Database proxy group read-write separation information.
     * @param array $ProxyNodes Node information of the database proxy
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ProxyConnectionPoolInfo $ConnectionPool Database proxy connection pool information.
     * @param array $NetAddrInfos Network information for database proxy
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tasks Database proxy task set.
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
        if (array_key_exists("ProxyGroup",$param) and $param["ProxyGroup"] !== null) {
            $this->ProxyGroup = new ProxyGroup();
            $this->ProxyGroup->deserialize($param["ProxyGroup"]);
        }

        if (array_key_exists("ProxyGroupRwInfo",$param) and $param["ProxyGroupRwInfo"] !== null) {
            $this->ProxyGroupRwInfo = new ProxyGroupRwInfo();
            $this->ProxyGroupRwInfo->deserialize($param["ProxyGroupRwInfo"]);
        }

        if (array_key_exists("ProxyNodes",$param) and $param["ProxyNodes"] !== null) {
            $this->ProxyNodes = [];
            foreach ($param["ProxyNodes"] as $key => $value){
                $obj = new ProxyNodeInfo();
                $obj->deserialize($value);
                array_push($this->ProxyNodes, $obj);
            }
        }

        if (array_key_exists("ConnectionPool",$param) and $param["ConnectionPool"] !== null) {
            $this->ConnectionPool = new ProxyConnectionPoolInfo();
            $this->ConnectionPool->deserialize($param["ConnectionPool"]);
        }

        if (array_key_exists("NetAddrInfos",$param) and $param["NetAddrInfos"] !== null) {
            $this->NetAddrInfos = [];
            foreach ($param["NetAddrInfos"] as $key => $value){
                $obj = new NetAddr();
                $obj->deserialize($value);
                array_push($this->NetAddrInfos, $obj);
            }
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new ObjectTask();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }
    }
}
