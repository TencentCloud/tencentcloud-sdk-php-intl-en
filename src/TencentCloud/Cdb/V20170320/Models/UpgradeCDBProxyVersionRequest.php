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
 * UpgradeCDBProxyVersion request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getProxyGroupId() Obtain Database proxy ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Database proxy ID
 * @method string getSrcProxyVersion() Obtain Current version of database proxy
 * @method void setSrcProxyVersion(string $SrcProxyVersion) Set Current version of database proxy
 * @method string getDstProxyVersion() Obtain Target version of database proxy
 * @method void setDstProxyVersion(string $DstProxyVersion) Set Target version of database proxy
 * @method string getUpgradeTime() Obtain Upgrade time. Valid values: `nowTime` (upgrade immediately), `timeWindow` (upgrade during instance maintenance time)
 * @method void setUpgradeTime(string $UpgradeTime) Set Upgrade time. Valid values: `nowTime` (upgrade immediately), `timeWindow` (upgrade during instance maintenance time)
 */
class UpgradeCDBProxyVersionRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Database proxy ID
     */
    public $ProxyGroupId;

    /**
     * @var string Current version of database proxy
     */
    public $SrcProxyVersion;

    /**
     * @var string Target version of database proxy
     */
    public $DstProxyVersion;

    /**
     * @var string Upgrade time. Valid values: `nowTime` (upgrade immediately), `timeWindow` (upgrade during instance maintenance time)
     */
    public $UpgradeTime;

    /**
     * @param string $InstanceId Instance ID
     * @param string $ProxyGroupId Database proxy ID
     * @param string $SrcProxyVersion Current version of database proxy
     * @param string $DstProxyVersion Target version of database proxy
     * @param string $UpgradeTime Upgrade time. Valid values: `nowTime` (upgrade immediately), `timeWindow` (upgrade during instance maintenance time)
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("SrcProxyVersion",$param) and $param["SrcProxyVersion"] !== null) {
            $this->SrcProxyVersion = $param["SrcProxyVersion"];
        }

        if (array_key_exists("DstProxyVersion",$param) and $param["DstProxyVersion"] !== null) {
            $this->DstProxyVersion = $param["DstProxyVersion"];
        }

        if (array_key_exists("UpgradeTime",$param) and $param["UpgradeTime"] !== null) {
            $this->UpgradeTime = $param["UpgradeTime"];
        }
    }
}
