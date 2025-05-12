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
 * Node in the database proxy group
 *
 * @method string getProxyNodeId() Obtain Database proxy node ID
 * @method void setProxyNodeId(string $ProxyNodeId) Set Database proxy node ID
 * @method integer getProxyNodeConnections() Obtain Current node connections, which is not returned by the `DescribeProxyNodes` API.
 * @method void setProxyNodeConnections(integer $ProxyNodeConnections) Set Current node connections, which is not returned by the `DescribeProxyNodes` API.
 * @method integer getCpu() Obtain CPU of the database proxy node
 * @method void setCpu(integer $Cpu) Set CPU of the database proxy node
 * @method integer getMem() Obtain Memory of the database proxy node
 * @method void setMem(integer $Mem) Set Memory of the database proxy node
 * @method string getStatus() Obtain Status of the database proxy node
 * @method void setStatus(string $Status) Set Status of the database proxy node
 * @method string getProxyGroupId() Obtain Database proxy group ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Database proxy group ID
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getAppId() Obtain User AppID
 * @method void setAppId(integer $AppId) Set User AppID
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method string getOssProxyNodeName() Obtain 
 * @method void setOssProxyNodeName(string $OssProxyNodeName) Set 
 */
class ProxyNodeInfo extends AbstractModel
{
    /**
     * @var string Database proxy node ID
     */
    public $ProxyNodeId;

    /**
     * @var integer Current node connections, which is not returned by the `DescribeProxyNodes` API.
     */
    public $ProxyNodeConnections;

    /**
     * @var integer CPU of the database proxy node
     */
    public $Cpu;

    /**
     * @var integer Memory of the database proxy node
     */
    public $Mem;

    /**
     * @var string Status of the database proxy node
     */
    public $Status;

    /**
     * @var string Database proxy group ID
     */
    public $ProxyGroupId;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer User AppID
     */
    public $AppId;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var string 
     */
    public $OssProxyNodeName;

    /**
     * @param string $ProxyNodeId Database proxy node ID
     * @param integer $ProxyNodeConnections Current node connections, which is not returned by the `DescribeProxyNodes` API.
     * @param integer $Cpu CPU of the database proxy node
     * @param integer $Mem Memory of the database proxy node
     * @param string $Status Status of the database proxy node
     * @param string $ProxyGroupId Database proxy group ID
     * @param string $ClusterId Cluster ID
     * @param integer $AppId User AppID
     * @param string $Region Region
     * @param string $Zone AZ
     * @param string $OssProxyNodeName 
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
        if (array_key_exists("ProxyNodeId",$param) and $param["ProxyNodeId"] !== null) {
            $this->ProxyNodeId = $param["ProxyNodeId"];
        }

        if (array_key_exists("ProxyNodeConnections",$param) and $param["ProxyNodeConnections"] !== null) {
            $this->ProxyNodeConnections = $param["ProxyNodeConnections"];
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

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("OssProxyNodeName",$param) and $param["OssProxyNodeName"] !== null) {
            $this->OssProxyNodeName = $param["OssProxyNodeName"];
        }
    }
}
