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
 * Information of the machines in the resource pool
 *
 * @method integer getPoolUid() Obtain Unique ID
 * @method void setPoolUid(integer $PoolUid) Set Unique ID
 * @method integer getIpv6Enable() Obtain Whether IPv6 is supported
 * @method void setIpv6Enable(integer $Ipv6Enable) Set Whether IPv6 is supported
 * @method integer getAvailableAppCount() Obtain Remaining available cluster resources
 * @method void setAvailableAppCount(integer $AvailableAppCount) Set Remaining available cluster resources
 * @method array getServerList() Obtain The list of machines at the storage layer (tcapsvr)
 * @method void setServerList(array $ServerList) Set The list of machines at the storage layer (tcapsvr)
 * @method array getProxyList() Obtain The list of machines at the access layer (tcaproxy)
 * @method void setProxyList(array $ProxyList) Set The list of machines at the access layer (tcaproxy)
 */
class PoolInfo extends AbstractModel
{
    /**
     * @var integer Unique ID
     */
    public $PoolUid;

    /**
     * @var integer Whether IPv6 is supported
     */
    public $Ipv6Enable;

    /**
     * @var integer Remaining available cluster resources
     */
    public $AvailableAppCount;

    /**
     * @var array The list of machines at the storage layer (tcapsvr)
     */
    public $ServerList;

    /**
     * @var array The list of machines at the access layer (tcaproxy)
     */
    public $ProxyList;

    /**
     * @param integer $PoolUid Unique ID
     * @param integer $Ipv6Enable Whether IPv6 is supported
     * @param integer $AvailableAppCount Remaining available cluster resources
     * @param array $ServerList The list of machines at the storage layer (tcapsvr)
     * @param array $ProxyList The list of machines at the access layer (tcaproxy)
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
        if (array_key_exists("PoolUid",$param) and $param["PoolUid"] !== null) {
            $this->PoolUid = $param["PoolUid"];
        }

        if (array_key_exists("Ipv6Enable",$param) and $param["Ipv6Enable"] !== null) {
            $this->Ipv6Enable = $param["Ipv6Enable"];
        }

        if (array_key_exists("AvailableAppCount",$param) and $param["AvailableAppCount"] !== null) {
            $this->AvailableAppCount = $param["AvailableAppCount"];
        }

        if (array_key_exists("ServerList",$param) and $param["ServerList"] !== null) {
            $this->ServerList = [];
            foreach ($param["ServerList"] as $key => $value){
                $obj = new ServerMachineInfo();
                $obj->deserialize($value);
                array_push($this->ServerList, $obj);
            }
        }

        if (array_key_exists("ProxyList",$param) and $param["ProxyList"] !== null) {
            $this->ProxyList = [];
            foreach ($param["ProxyList"] as $key => $value){
                $obj = new ProxyMachineInfo();
                $obj->deserialize($value);
                array_push($this->ProxyList, $obj);
            }
        }
    }
}
