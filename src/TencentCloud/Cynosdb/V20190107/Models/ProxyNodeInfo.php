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
 * Node in the database proxy group.
 *
 * @method string getProxyNodeId() Obtain <p>Database Proxy Node ID</p>
 * @method void setProxyNodeId(string $ProxyNodeId) Set <p>Database Proxy Node ID</p>
 * @method integer getProxyNodeConnections() Obtain <p>Current connection number of nodes. This field value does not return in the DescribeProxyNodes API.</p>
 * @method void setProxyNodeConnections(integer $ProxyNodeConnections) Set <p>Current connection number of nodes. This field value does not return in the DescribeProxyNodes API.</p>
 * @method integer getCpu() Obtain <p>Database proxy node cpu</p>
 * @method void setCpu(integer $Cpu) Set <p>Database proxy node cpu</p>
 * @method integer getMem() Obtain <p>Database proxy node memory</p>
 * @method void setMem(integer $Mem) Set <p>Database proxy node memory</p>
 * @method string getStatus() Obtain <p>Database Proxy Node Status</p>
 * @method void setStatus(string $Status) Set <p>Database Proxy Node Status</p>
 * @method string getProxyGroupId() Obtain <p>Database Proxy Group ID</p>
 * @method void setProxyGroupId(string $ProxyGroupId) Set <p>Database Proxy Group ID</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method integer getAppId() Obtain <p>User AppID</p>
 * @method void setAppId(integer $AppId) Set <p>User AppID</p>
 * @method string getRegion() Obtain <p>Region.</p>
 * @method void setRegion(string $Region) Set <p>Region.</p>
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method string getOssProxyNodeName() Obtain <p>Database Proxy Node Name</p>
 * @method void setOssProxyNodeName(string $OssProxyNodeName) Set <p>Database Proxy Node Name</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 */
class ProxyNodeInfo extends AbstractModel
{
    /**
     * @var string <p>Database Proxy Node ID</p>
     */
    public $ProxyNodeId;

    /**
     * @var integer <p>Current connection number of nodes. This field value does not return in the DescribeProxyNodes API.</p>
     */
    public $ProxyNodeConnections;

    /**
     * @var integer <p>Database proxy node cpu</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Database proxy node memory</p>
     */
    public $Mem;

    /**
     * @var string <p>Database Proxy Node Status</p>
     */
    public $Status;

    /**
     * @var string <p>Database Proxy Group ID</p>
     */
    public $ProxyGroupId;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>User AppID</p>
     */
    public $AppId;

    /**
     * @var string <p>Region.</p>
     */
    public $Region;

    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var string <p>Database Proxy Node Name</p>
     */
    public $OssProxyNodeName;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @param string $ProxyNodeId <p>Database Proxy Node ID</p>
     * @param integer $ProxyNodeConnections <p>Current connection number of nodes. This field value does not return in the DescribeProxyNodes API.</p>
     * @param integer $Cpu <p>Database proxy node cpu</p>
     * @param integer $Mem <p>Database proxy node memory</p>
     * @param string $Status <p>Database Proxy Node Status</p>
     * @param string $ProxyGroupId <p>Database Proxy Group ID</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param integer $AppId <p>User AppID</p>
     * @param string $Region <p>Region.</p>
     * @param string $Zone <p>AZ.</p>
     * @param string $OssProxyNodeName <p>Database Proxy Node Name</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Update time.</p>
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
