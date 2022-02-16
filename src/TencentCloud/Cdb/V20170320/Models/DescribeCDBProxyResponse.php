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
 * DescribeCDBProxy response structure.
 *
 * @method BaseGroupInfo getBaseGroup() Obtain Basic information of the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setBaseGroup(BaseGroupInfo $BaseGroup) Set Basic information of the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method Address getAddress() Obtain Address information of the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setAddress(Address $Address) Set Address information of the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method ProxyNodeInfo getProxyNode() Obtain Node information of the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setProxyNode(ProxyNodeInfo $ProxyNode) Set Node information of the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method RWInfo getRWInstInfo() Obtain Read/Write separation information
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setRWInstInfo(RWInfo $RWInstInfo) Set Read/Write separation information
Note: this field may return `null`, indicating that no valid value can be found.
 * @method ConnectionPoolInfo getConnectionPoolInfo() Obtain Connection pool information
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setConnectionPoolInfo(ConnectionPoolInfo $ConnectionPoolInfo) Set Connection pool information
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getCount() Obtain Number of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setCount(integer $Count) Set Number of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
 * @method array getProxyGroup() Obtain Proxy information
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setProxyGroup(array $ProxyGroup) Set Proxy information
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeCDBProxyResponse extends AbstractModel
{
    /**
     * @var BaseGroupInfo Basic information of the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $BaseGroup;

    /**
     * @var Address Address information of the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Address;

    /**
     * @var ProxyNodeInfo Node information of the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ProxyNode;

    /**
     * @var RWInfo Read/Write separation information
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $RWInstInfo;

    /**
     * @var ConnectionPoolInfo Connection pool information
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ConnectionPoolInfo;

    /**
     * @var integer Number of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Count;

    /**
     * @var array Proxy information
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ProxyGroup;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param BaseGroupInfo $BaseGroup Basic information of the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     * @param Address $Address Address information of the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     * @param ProxyNodeInfo $ProxyNode Node information of the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     * @param RWInfo $RWInstInfo Read/Write separation information
Note: this field may return `null`, indicating that no valid value can be found.
     * @param ConnectionPoolInfo $ConnectionPoolInfo Connection pool information
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $Count Number of instances in the proxy group
Note: this field may return `null`, indicating that no valid value can be found.
     * @param array $ProxyGroup Proxy information
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
            $this->Address = new Address();
            $this->Address->deserialize($param["Address"]);
        }

        if (array_key_exists("ProxyNode",$param) and $param["ProxyNode"] !== null) {
            $this->ProxyNode = new ProxyNodeInfo();
            $this->ProxyNode->deserialize($param["ProxyNode"]);
        }

        if (array_key_exists("RWInstInfo",$param) and $param["RWInstInfo"] !== null) {
            $this->RWInstInfo = new RWInfo();
            $this->RWInstInfo->deserialize($param["RWInstInfo"]);
        }

        if (array_key_exists("ConnectionPoolInfo",$param) and $param["ConnectionPoolInfo"] !== null) {
            $this->ConnectionPoolInfo = new ConnectionPoolInfo();
            $this->ConnectionPoolInfo->deserialize($param["ConnectionPoolInfo"]);
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ProxyGroup",$param) and $param["ProxyGroup"] !== null) {
            $this->ProxyGroup = [];
            foreach ($param["ProxyGroup"] as $key => $value){
                $obj = new ProxyGroup();
                $obj->deserialize($value);
                array_push($this->ProxyGroup, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
