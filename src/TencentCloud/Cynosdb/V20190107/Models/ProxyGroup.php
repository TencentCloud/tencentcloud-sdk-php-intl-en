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
 * Proxy group
 *
 * @method string getProxyGroupId() Obtain <p>Database Proxy Group ID.</p>
 * @method void setProxyGroupId(string $ProxyGroupId) Set <p>Database Proxy Group ID.</p>
 * @method integer getProxyNodeCount() Obtain <p>Number of database proxy group nodes</p>
 * @method void setProxyNodeCount(integer $ProxyNodeCount) Set <p>Number of database proxy group nodes</p>
 * @method string getStatus() Obtain <p>Database Proxy Group status</p>
 * @method void setStatus(string $Status) Set <p>Database Proxy Group status</p>
 * @method string getRegion() Obtain <p>Region.</p>
 * @method void setRegion(string $Region) Set <p>Region.</p>
 * @method string getZone() Obtain <p>AZ.</p>
 * @method void setZone(string $Zone) Set <p>AZ.</p>
 * @method string getCurrentProxyVersion() Obtain <p>Current proxy version</p>
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) Set <p>Current proxy version</p>
 * @method string getClusterId() Obtain <p>Cluster ID.</p>
 * @method void setClusterId(string $ClusterId) Set <p>Cluster ID.</p>
 * @method integer getAppId() Obtain <p>User AppId</p>
 * @method void setAppId(integer $AppId) Set <p>User AppId</p>
 * @method string getOpenRw() Obtain <p>Activate database proxy for RWNode</p>
 * @method void setOpenRw(string $OpenRw) Set <p>Activate database proxy for RWNode</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 */
class ProxyGroup extends AbstractModel
{
    /**
     * @var string <p>Database Proxy Group ID.</p>
     */
    public $ProxyGroupId;

    /**
     * @var integer <p>Number of database proxy group nodes</p>
     */
    public $ProxyNodeCount;

    /**
     * @var string <p>Database Proxy Group status</p>
     */
    public $Status;

    /**
     * @var string <p>Region.</p>
     */
    public $Region;

    /**
     * @var string <p>AZ.</p>
     */
    public $Zone;

    /**
     * @var string <p>Current proxy version</p>
     */
    public $CurrentProxyVersion;

    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>User AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>Activate database proxy for RWNode</p>
     */
    public $OpenRw;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @param string $ProxyGroupId <p>Database Proxy Group ID.</p>
     * @param integer $ProxyNodeCount <p>Number of database proxy group nodes</p>
     * @param string $Status <p>Database Proxy Group status</p>
     * @param string $Region <p>Region.</p>
     * @param string $Zone <p>AZ.</p>
     * @param string $CurrentProxyVersion <p>Current proxy version</p>
     * @param string $ClusterId <p>Cluster ID.</p>
     * @param integer $AppId <p>User AppId</p>
     * @param string $OpenRw <p>Activate database proxy for RWNode</p>
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("ProxyNodeCount",$param) and $param["ProxyNodeCount"] !== null) {
            $this->ProxyNodeCount = $param["ProxyNodeCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("CurrentProxyVersion",$param) and $param["CurrentProxyVersion"] !== null) {
            $this->CurrentProxyVersion = $param["CurrentProxyVersion"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("OpenRw",$param) and $param["OpenRw"] !== null) {
            $this->OpenRw = $param["OpenRw"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
