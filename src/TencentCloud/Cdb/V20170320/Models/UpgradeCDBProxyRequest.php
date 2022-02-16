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
 * UpgradeCDBProxy request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getProxyGroupId() Obtain Database proxy ID
 * @method void setProxyGroupId(string $ProxyGroupId) Set Database proxy ID
 * @method integer getProxyCount() Obtain Number of proxy nodes
 * @method void setProxyCount(integer $ProxyCount) Set Number of proxy nodes
 * @method integer getCpu() Obtain Number of CPU cores per proxy node
 * @method void setCpu(integer $Cpu) Set Number of CPU cores per proxy node
 * @method integer getMem() Obtain Memory per proxy node
 * @method void setMem(integer $Mem) Set Memory per proxy node
 * @method string getReloadBalance() Obtain Load rebalance mode. Valid values: `auto`, `manual`
 * @method void setReloadBalance(string $ReloadBalance) Set Load rebalance mode. Valid values: `auto`, `manual`
 * @method string getUpgradeTime() Obtain Upgrade time. Valid values: `nowTime` (upgrade immediately), `timeWindow` (upgrade during instance maintenance time)
 * @method void setUpgradeTime(string $UpgradeTime) Set Upgrade time. Valid values: `nowTime` (upgrade immediately), `timeWindow` (upgrade during instance maintenance time)
 */
class UpgradeCDBProxyRequest extends AbstractModel
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
     * @var integer Number of proxy nodes
     */
    public $ProxyCount;

    /**
     * @var integer Number of CPU cores per proxy node
     */
    public $Cpu;

    /**
     * @var integer Memory per proxy node
     */
    public $Mem;

    /**
     * @var string Load rebalance mode. Valid values: `auto`, `manual`
     */
    public $ReloadBalance;

    /**
     * @var string Upgrade time. Valid values: `nowTime` (upgrade immediately), `timeWindow` (upgrade during instance maintenance time)
     */
    public $UpgradeTime;

    /**
     * @param string $InstanceId Instance ID
     * @param string $ProxyGroupId Database proxy ID
     * @param integer $ProxyCount Number of proxy nodes
     * @param integer $Cpu Number of CPU cores per proxy node
     * @param integer $Mem Memory per proxy node
     * @param string $ReloadBalance Load rebalance mode. Valid values: `auto`, `manual`
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

        if (array_key_exists("ProxyCount",$param) and $param["ProxyCount"] !== null) {
            $this->ProxyCount = $param["ProxyCount"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("ReloadBalance",$param) and $param["ReloadBalance"] !== null) {
            $this->ReloadBalance = $param["ReloadBalance"];
        }

        if (array_key_exists("UpgradeTime",$param) and $param["UpgradeTime"] !== null) {
            $this->UpgradeTime = $param["UpgradeTime"];
        }
    }
}
