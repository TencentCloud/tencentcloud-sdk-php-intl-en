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
 * UpgradeProxyVersion request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getSrcProxyVersion() Obtain Current version of database proxy
 * @method void setSrcProxyVersion(string $SrcProxyVersion) Set Current version of database proxy
 * @method string getDstProxyVersion() Obtain Target version of database proxy
 * @method void setDstProxyVersion(string $DstProxyVersion) Set Target version of database proxy
 * @method string getProxyGroupId() Obtain Database proxy group ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Database proxy group ID
 * @method string getIsInMaintainPeriod() Obtain Upgrade time. Valid values: `no` (upon upgrade completion), `yes` (upgrade during instance maintenance time)
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) Set Upgrade time. Valid values: `no` (upon upgrade completion), `yes` (upgrade during instance maintenance time)
 */
class UpgradeProxyVersionRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Current version of database proxy
     */
    public $SrcProxyVersion;

    /**
     * @var string Target version of database proxy
     */
    public $DstProxyVersion;

    /**
     * @var string Database proxy group ID
     */
    public $ProxyGroupId;

    /**
     * @var string Upgrade time. Valid values: `no` (upon upgrade completion), `yes` (upgrade during instance maintenance time)
     */
    public $IsInMaintainPeriod;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $SrcProxyVersion Current version of database proxy
     * @param string $DstProxyVersion Target version of database proxy
     * @param string $ProxyGroupId Database proxy group ID
     * @param string $IsInMaintainPeriod Upgrade time. Valid values: `no` (upon upgrade completion), `yes` (upgrade during instance maintenance time)
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

        if (array_key_exists("SrcProxyVersion",$param) and $param["SrcProxyVersion"] !== null) {
            $this->SrcProxyVersion = $param["SrcProxyVersion"];
        }

        if (array_key_exists("DstProxyVersion",$param) and $param["DstProxyVersion"] !== null) {
            $this->DstProxyVersion = $param["DstProxyVersion"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("IsInMaintainPeriod",$param) and $param["IsInMaintainPeriod"] !== null) {
            $this->IsInMaintainPeriod = $param["IsInMaintainPeriod"];
        }
    }
}
