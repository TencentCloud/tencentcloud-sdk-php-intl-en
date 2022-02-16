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
 * Database proxy group information
 *
 * @method BaseGroupInfo getBaseGroup() Obtain Basic information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setBaseGroup(BaseGroupInfo $BaseGroup) Set Basic information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
 * @method array getAddress() Obtain Address information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setAddress(array $Address) Set Address information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
 * @method ConnectionPoolInfo getConnectionPoolInfo() Obtain Connection pool information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setConnectionPoolInfo(ConnectionPoolInfo $ConnectionPoolInfo) Set Connection pool information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
 * @method array getProxyNode() Obtain Node information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setProxyNode(array $ProxyNode) Set Node information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
 * @method RWInfos getRWInstInfo() Obtain Routing information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setRWInstInfo(RWInfos $RWInstInfo) Set Routing information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
 */
class ProxyGroups extends AbstractModel
{
    /**
     * @var BaseGroupInfo Basic information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $BaseGroup;

    /**
     * @var array Address information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Address;

    /**
     * @var ConnectionPoolInfo Connection pool information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ConnectionPoolInfo;

    /**
     * @var array Node information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ProxyNode;

    /**
     * @var RWInfos Routing information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $RWInstInfo;

    /**
     * @param BaseGroupInfo $BaseGroup Basic information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
     * @param array $Address Address information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
     * @param ConnectionPoolInfo $ConnectionPoolInfo Connection pool information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
     * @param array $ProxyNode Node information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
     * @param RWInfos $RWInstInfo Routing information of the proxy
Note: this field may return `null`, indicating that no valid value can be found.
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
        if (array_key_exists("BaseGroup",$param) and $param["BaseGroup"] !== null) {
            $this->BaseGroup = new BaseGroupInfo();
            $this->BaseGroup->deserialize($param["BaseGroup"]);
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = [];
            foreach ($param["Address"] as $key => $value){
                $obj = new Address();
                $obj->deserialize($value);
                array_push($this->Address, $obj);
            }
        }

        if (array_key_exists("ConnectionPoolInfo",$param) and $param["ConnectionPoolInfo"] !== null) {
            $this->ConnectionPoolInfo = new ConnectionPoolInfo();
            $this->ConnectionPoolInfo->deserialize($param["ConnectionPoolInfo"]);
        }

        if (array_key_exists("ProxyNode",$param) and $param["ProxyNode"] !== null) {
            $this->ProxyNode = [];
            foreach ($param["ProxyNode"] as $key => $value){
                $obj = new ProxyNodeInfo();
                $obj->deserialize($value);
                array_push($this->ProxyNode, $obj);
            }
        }

        if (array_key_exists("RWInstInfo",$param) and $param["RWInstInfo"] !== null) {
            $this->RWInstInfo = new RWInfos();
            $this->RWInstInfo->deserialize($param["RWInstInfo"]);
        }
    }
}
