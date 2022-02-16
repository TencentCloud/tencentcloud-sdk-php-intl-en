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
 * Proxy group information
 *
 * @method string getProxyGroupId() Obtain Proxy group ID
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setProxyGroupId(string $ProxyGroupId) Set Proxy group ID
Note: this field may return `null`, indicating that no valid value can be found.
 * @method integer getNodeCount() Obtain Number of proxy nodes
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setNodeCount(integer $NodeCount) Set Number of proxy nodes
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getStatus() Obtain Proxy group status. Valid values: `init` (delivering), `online` (active), `offline` (inactive), `destroy` (destoryed)
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setStatus(string $Status) Set Proxy group status. Valid values: `init` (delivering), `online` (active), `offline` (inactive), `destroy` (destoryed)
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getRegion() Obtain Region
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setRegion(string $Region) Set Region
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getZone() Obtain Availability zone
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setZone(string $Zone) Set Availability zone
Note: this field may return `null`, indicating that no valid value can be found.
 * @method boolean getOpenRW() Obtain Whether read/write separation is enabled
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setOpenRW(boolean $OpenRW) Set Whether read/write separation is enabled
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getCurrentProxyVersion() Obtain Current proxy version
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setCurrentProxyVersion(string $CurrentProxyVersion) Set Current proxy version
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getSupportUpgradeProxyVersion() Obtain Target version to which the proxy can be upgraded
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setSupportUpgradeProxyVersion(string $SupportUpgradeProxyVersion) Set Target version to which the proxy can be upgraded
Note: this field may return `null`, indicating that no valid value can be found.
 */
class BaseGroupInfo extends AbstractModel
{
    /**
     * @var string Proxy group ID
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $ProxyGroupId;

    /**
     * @var integer Number of proxy nodes
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $NodeCount;

    /**
     * @var string Proxy group status. Valid values: `init` (delivering), `online` (active), `offline` (inactive), `destroy` (destoryed)
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Status;

    /**
     * @var string Region
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Region;

    /**
     * @var string Availability zone
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Zone;

    /**
     * @var boolean Whether read/write separation is enabled
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $OpenRW;

    /**
     * @var string Current proxy version
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $CurrentProxyVersion;

    /**
     * @var string Target version to which the proxy can be upgraded
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $SupportUpgradeProxyVersion;

    /**
     * @param string $ProxyGroupId Proxy group ID
Note: this field may return `null`, indicating that no valid value can be found.
     * @param integer $NodeCount Number of proxy nodes
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $Status Proxy group status. Valid values: `init` (delivering), `online` (active), `offline` (inactive), `destroy` (destoryed)
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $Region Region
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $Zone Availability zone
Note: this field may return `null`, indicating that no valid value can be found.
     * @param boolean $OpenRW Whether read/write separation is enabled
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $CurrentProxyVersion Current proxy version
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $SupportUpgradeProxyVersion Target version to which the proxy can be upgraded
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
        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
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

        if (array_key_exists("OpenRW",$param) and $param["OpenRW"] !== null) {
            $this->OpenRW = $param["OpenRW"];
        }

        if (array_key_exists("CurrentProxyVersion",$param) and $param["CurrentProxyVersion"] !== null) {
            $this->CurrentProxyVersion = $param["CurrentProxyVersion"];
        }

        if (array_key_exists("SupportUpgradeProxyVersion",$param) and $param["SupportUpgradeProxyVersion"] !== null) {
            $this->SupportUpgradeProxyVersion = $param["SupportUpgradeProxyVersion"];
        }
    }
}
