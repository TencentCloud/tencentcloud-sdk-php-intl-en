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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterMachine request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getServerList() Obtain Information of the machines at the storage layer (tcapsvr)
 * @method void setServerList(array $ServerList) Set Information of the machines at the storage layer (tcapsvr)
 * @method array getProxyList() Obtain Information of the machines at the access layer (tcaproxy)
 * @method void setProxyList(array $ProxyList) Set Information of the machines at the access layer (tcaproxy)
 * @method integer getClusterType() Obtain Cluster type. Valid values: `1` (standard), `2` (dedicated)
 * @method void setClusterType(integer $ClusterType) Set Cluster type. Valid values: `1` (standard), `2` (dedicated)
 */
class ModifyClusterMachineRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Information of the machines at the storage layer (tcapsvr)
     */
    public $ServerList;

    /**
     * @var array Information of the machines at the access layer (tcaproxy)
     */
    public $ProxyList;

    /**
     * @var integer Cluster type. Valid values: `1` (standard), `2` (dedicated)
     */
    public $ClusterType;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $ServerList Information of the machines at the storage layer (tcapsvr)
     * @param array $ProxyList Information of the machines at the access layer (tcaproxy)
     * @param integer $ClusterType Cluster type. Valid values: `1` (standard), `2` (dedicated)
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

        if (array_key_exists("ServerList",$param) and $param["ServerList"] !== null) {
            $this->ServerList = [];
            foreach ($param["ServerList"] as $key => $value){
                $obj = new MachineInfo();
                $obj->deserialize($value);
                array_push($this->ServerList, $obj);
            }
        }

        if (array_key_exists("ProxyList",$param) and $param["ProxyList"] !== null) {
            $this->ProxyList = [];
            foreach ($param["ProxyList"] as $key => $value){
                $obj = new MachineInfo();
                $obj->deserialize($value);
                array_push($this->ProxyList, $obj);
            }
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
