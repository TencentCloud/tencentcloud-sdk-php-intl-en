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
 * AdjustCdbProxy request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
 * @method string getProxyGroupId() Obtain Proxy group ID, which can be obtained through the [DescribeCdbProxyInfo](https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1) API.
 * @method void setProxyGroupId(string $ProxyGroupId) Set Proxy group ID, which can be obtained through the [DescribeCdbProxyInfo](https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1) API.
 * @method array getProxyNodeCustom() Obtain Node specification configuration
Remark: Database proxy supported node specifications are 2C4000MB, 4C8000MB, 8C16000MB.
Parameter description in the example.
NodeCount: Number of nodes
Region: Node region
Zone: Node availability zone
Cpu: Number of node cores for one agent (Unit: core)
Mem: Memory size of each proxy node (unit: MB)
 * @method void setProxyNodeCustom(array $ProxyNodeCustom) Set Node specification configuration
Remark: Database proxy supported node specifications are 2C4000MB, 4C8000MB, 8C16000MB.
Parameter description in the example.
NodeCount: Number of nodes
Region: Node region
Zone: Node availability zone
Cpu: Number of node cores for one agent (Unit: core)
Mem: Memory size of each proxy node (unit: MB)
 * @method string getReloadBalance() Obtain Rebalance. Valid values:  `auto` (automatic), `manual` (manual).
 * @method void setReloadBalance(string $ReloadBalance) Set Rebalance. Valid values:  `auto` (automatic), `manual` (manual).
 * @method string getUpgradeTime() Obtain The upgrade switch time. Valid values:  `nowTime` (upgrade immediately), `timeWindow` (upgrade during instance maintenance time).
 * @method void setUpgradeTime(string $UpgradeTime) Set The upgrade switch time. Valid values:  `nowTime` (upgrade immediately), `timeWindow` (upgrade during instance maintenance time).
 */
class AdjustCdbProxyRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var string Proxy group ID, which can be obtained through the [DescribeCdbProxyInfo](https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1) API.
     */
    public $ProxyGroupId;

    /**
     * @var array Node specification configuration
Remark: Database proxy supported node specifications are 2C4000MB, 4C8000MB, 8C16000MB.
Parameter description in the example.
NodeCount: Number of nodes
Region: Node region
Zone: Node availability zone
Cpu: Number of node cores for one agent (Unit: core)
Mem: Memory size of each proxy node (unit: MB)
     */
    public $ProxyNodeCustom;

    /**
     * @var string Rebalance. Valid values:  `auto` (automatic), `manual` (manual).
     */
    public $ReloadBalance;

    /**
     * @var string The upgrade switch time. Valid values:  `nowTime` (upgrade immediately), `timeWindow` (upgrade during instance maintenance time).
     */
    public $UpgradeTime;

    /**
     * @param string $InstanceId Instance ID, which can be obtained through the [DescribeDBInstances](https://www.tencentcloud.com/document/product/236/15872?from_cn_redirect=1) API.
     * @param string $ProxyGroupId Proxy group ID, which can be obtained through the [DescribeCdbProxyInfo](https://www.tencentcloud.com/document/api/236/90585?from_cn_redirect=1) API.
     * @param array $ProxyNodeCustom Node specification configuration
Remark: Database proxy supported node specifications are 2C4000MB, 4C8000MB, 8C16000MB.
Parameter description in the example.
NodeCount: Number of nodes
Region: Node region
Zone: Node availability zone
Cpu: Number of node cores for one agent (Unit: core)
Mem: Memory size of each proxy node (unit: MB)
     * @param string $ReloadBalance Rebalance. Valid values:  `auto` (automatic), `manual` (manual).
     * @param string $UpgradeTime The upgrade switch time. Valid values:  `nowTime` (upgrade immediately), `timeWindow` (upgrade during instance maintenance time).
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

        if (array_key_exists("ProxyNodeCustom",$param) and $param["ProxyNodeCustom"] !== null) {
            $this->ProxyNodeCustom = [];
            foreach ($param["ProxyNodeCustom"] as $key => $value){
                $obj = new ProxyNodeCustom();
                $obj->deserialize($value);
                array_push($this->ProxyNodeCustom, $obj);
            }
        }

        if (array_key_exists("ReloadBalance",$param) and $param["ReloadBalance"] !== null) {
            $this->ReloadBalance = $param["ReloadBalance"];
        }

        if (array_key_exists("UpgradeTime",$param) and $param["UpgradeTime"] !== null) {
            $this->UpgradeTime = $param["UpgradeTime"];
        }
    }
}
