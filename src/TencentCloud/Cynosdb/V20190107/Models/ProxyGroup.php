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
 * Proxy group
 *
 * @method string getProxyGroupId() Obtain Database proxy group ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Database proxy group ID
 * @method integer getProxyNodeCount() Obtain Number of nodes in the proxy group
 * @method void setProxyNodeCount(integer $ProxyNodeCount) Set Number of nodes in the proxy group
 * @method string getStatus() Obtain Database proxy group status
 * @method void setStatus(string $Status) Set Database proxy group status
 * @method string getRegion() Obtain Region
 * @method void setRegion(string $Region) Set Region
 * @method string getZone() Obtain AZ
 * @method void setZone(string $Zone) Set AZ
 * @method string getCurrentProxyVersion() Obtain Current proxy version
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) Set Current proxy version
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getAppId() Obtain User AppId
 * @method void setAppId(integer $AppId) Set User AppId
 * @method string getOpenRw() Obtain Specifies that a read-write node activates the database proxy.
 * @method void setOpenRw(string $OpenRw) Set Specifies that a read-write node activates the database proxy.
 */
class ProxyGroup extends AbstractModel
{
    /**
     * @var string Database proxy group ID
     */
    public $ProxyGroupId;

    /**
     * @var integer Number of nodes in the proxy group
     */
    public $ProxyNodeCount;

    /**
     * @var string Database proxy group status
     */
    public $Status;

    /**
     * @var string Region
     */
    public $Region;

    /**
     * @var string AZ
     */
    public $Zone;

    /**
     * @var string Current proxy version
     */
    public $CurrentProxyVersion;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer User AppId
     */
    public $AppId;

    /**
     * @var string Specifies that a read-write node activates the database proxy.
     */
    public $OpenRw;

    /**
     * @param string $ProxyGroupId Database proxy group ID
     * @param integer $ProxyNodeCount Number of nodes in the proxy group
     * @param string $Status Database proxy group status
     * @param string $Region Region
     * @param string $Zone AZ
     * @param string $CurrentProxyVersion Current proxy version
     * @param string $ClusterId Cluster ID
     * @param integer $AppId User AppId
     * @param string $OpenRw Specifies that a read-write node activates the database proxy.
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
    }
}
