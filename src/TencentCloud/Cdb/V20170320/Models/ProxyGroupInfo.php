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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of proxy group
 *
 * @method string getProxyGroupId() Obtain Proxy group ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Proxy group ID
 * @method string getProxyVersion() Obtain proxy version
 * @method void setProxyVersion(string $ProxyVersion) Set proxy version
 * @method string getSupportUpgradeProxyVersion() Obtain Proxy supports edition upgrade
 * @method void setSupportUpgradeProxyVersion(string $SupportUpgradeProxyVersion) Set Proxy supports edition upgrade
 * @method string getStatus() Obtain Agent status. 0 - Initializing, 1 - Online, 2 - Online - Read-write separation, 3 - Offline, 4 - Terminated.
 * @method void setStatus(string $Status) Set Agent status. 0 - Initializing, 1 - Online, 2 - Online - Read-write separation, 3 - Offline, 4 - Terminated.
 * @method string getTaskStatus() Obtain Agent task status, Upgrading - upgrading, UpgradeTo - upgrade pending switch, UpgradeSwitching - upgrade and switch in progress, ProxyCreateAddress - configuring address, ProxyModifyAddress - changing address, ProxyCloseAddress - closing address.
 * @method void setTaskStatus(string $TaskStatus) Set Agent task status, Upgrading - upgrading, UpgradeTo - upgrade pending switch, UpgradeSwitching - upgrade and switch in progress, ProxyCreateAddress - configuring address, ProxyModifyAddress - changing address, ProxyCloseAddress - closing address.
 * @method array getProxyNode() Obtain Proxy group node information
 * @method void setProxyNode(array $ProxyNode) Set Proxy group node information
 * @method array getProxyAddress() Obtain Proxy group address information
 * @method void setProxyAddress(array $ProxyAddress) Set Proxy group address information
 * @method integer getConnectionPoolLimit() Obtain Connection pool threshold
 * @method void setConnectionPoolLimit(integer $ConnectionPoolLimit) Set Connection pool threshold
 * @method boolean getSupportCreateProxyAddress() Obtain Support creating an address
 * @method void setSupportCreateProxyAddress(boolean $SupportCreateProxyAddress) Set Support creating an address
 * @method string getSupportUpgradeProxyMysqlVersion() Obtain cdb version required for proxy version upgrade
 * @method void setSupportUpgradeProxyMysqlVersion(string $SupportUpgradeProxyMysqlVersion) Set cdb version required for proxy version upgrade
 */
class ProxyGroupInfo extends AbstractModel
{
    /**
     * @var string Proxy group ID
     */
    public $ProxyGroupId;

    /**
     * @var string proxy version
     */
    public $ProxyVersion;

    /**
     * @var string Proxy supports edition upgrade
     */
    public $SupportUpgradeProxyVersion;

    /**
     * @var string Agent status. 0 - Initializing, 1 - Online, 2 - Online - Read-write separation, 3 - Offline, 4 - Terminated.
     */
    public $Status;

    /**
     * @var string Agent task status, Upgrading - upgrading, UpgradeTo - upgrade pending switch, UpgradeSwitching - upgrade and switch in progress, ProxyCreateAddress - configuring address, ProxyModifyAddress - changing address, ProxyCloseAddress - closing address.
     */
    public $TaskStatus;

    /**
     * @var array Proxy group node information
     */
    public $ProxyNode;

    /**
     * @var array Proxy group address information
     */
    public $ProxyAddress;

    /**
     * @var integer Connection pool threshold
     */
    public $ConnectionPoolLimit;

    /**
     * @var boolean Support creating an address
     */
    public $SupportCreateProxyAddress;

    /**
     * @var string cdb version required for proxy version upgrade
     */
    public $SupportUpgradeProxyMysqlVersion;

    /**
     * @param string $ProxyGroupId Proxy group ID
     * @param string $ProxyVersion proxy version
     * @param string $SupportUpgradeProxyVersion Proxy supports edition upgrade
     * @param string $Status Agent status. 0 - Initializing, 1 - Online, 2 - Online - Read-write separation, 3 - Offline, 4 - Terminated.
     * @param string $TaskStatus Agent task status, Upgrading - upgrading, UpgradeTo - upgrade pending switch, UpgradeSwitching - upgrade and switch in progress, ProxyCreateAddress - configuring address, ProxyModifyAddress - changing address, ProxyCloseAddress - closing address.
     * @param array $ProxyNode Proxy group node information
     * @param array $ProxyAddress Proxy group address information
     * @param integer $ConnectionPoolLimit Connection pool threshold
     * @param boolean $SupportCreateProxyAddress Support creating an address
     * @param string $SupportUpgradeProxyMysqlVersion cdb version required for proxy version upgrade
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

        if (array_key_exists("ProxyVersion",$param) and $param["ProxyVersion"] !== null) {
            $this->ProxyVersion = $param["ProxyVersion"];
        }

        if (array_key_exists("SupportUpgradeProxyVersion",$param) and $param["SupportUpgradeProxyVersion"] !== null) {
            $this->SupportUpgradeProxyVersion = $param["SupportUpgradeProxyVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("ProxyNode",$param) and $param["ProxyNode"] !== null) {
            $this->ProxyNode = [];
            foreach ($param["ProxyNode"] as $key => $value){
                $obj = new ProxyNode();
                $obj->deserialize($value);
                array_push($this->ProxyNode, $obj);
            }
        }

        if (array_key_exists("ProxyAddress",$param) and $param["ProxyAddress"] !== null) {
            $this->ProxyAddress = [];
            foreach ($param["ProxyAddress"] as $key => $value){
                $obj = new ProxyAddress();
                $obj->deserialize($value);
                array_push($this->ProxyAddress, $obj);
            }
        }

        if (array_key_exists("ConnectionPoolLimit",$param) and $param["ConnectionPoolLimit"] !== null) {
            $this->ConnectionPoolLimit = $param["ConnectionPoolLimit"];
        }

        if (array_key_exists("SupportCreateProxyAddress",$param) and $param["SupportCreateProxyAddress"] !== null) {
            $this->SupportCreateProxyAddress = $param["SupportCreateProxyAddress"];
        }

        if (array_key_exists("SupportUpgradeProxyMysqlVersion",$param) and $param["SupportUpgradeProxyMysqlVersion"] !== null) {
            $this->SupportUpgradeProxyMysqlVersion = $param["SupportUpgradeProxyMysqlVersion"];
        }
    }
}
