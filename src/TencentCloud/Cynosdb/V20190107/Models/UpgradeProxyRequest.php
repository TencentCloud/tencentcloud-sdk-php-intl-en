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
 * UpgradeProxy request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getCpu() Obtain Number of CPU cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
 * @method integer getMem() Obtain Memory
 * @method void setMem(integer $Mem) Set Memory
 * @method integer getProxyCount() Obtain Number of nodes in the proxy group
 * @method void setProxyCount(integer $ProxyCount) Set Number of nodes in the proxy group
 * @method string getProxyGroupId() Obtain ID of the database proxy group (disused)
 * @method void setProxyGroupId(string $ProxyGroupId) Set ID of the database proxy group (disused)
 * @method string getReloadBalance() Obtain Load rebalance mode. Valid values: `auto`, `manual`
 * @method void setReloadBalance(string $ReloadBalance) Set Load rebalance mode. Valid values: `auto`, `manual`
 * @method string getIsInMaintainPeriod() Obtain Upgrade time. Valid values: `no` (upon upgrade completion), `timeWindow` (upgrade during instance maintenance time)
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) Set Upgrade time. Valid values: `no` (upon upgrade completion), `timeWindow` (upgrade during instance maintenance time)
 * @method array getProxyZones() Obtain Node information of the atabase proxy
 * @method void setProxyZones(array $ProxyZones) Set Node information of the atabase proxy
 */
class UpgradeProxyRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var integer Number of CPU cores
     */
    public $Cpu;

    /**
     * @var integer Memory
     */
    public $Mem;

    /**
     * @var integer Number of nodes in the proxy group
     */
    public $ProxyCount;

    /**
     * @var string ID of the database proxy group (disused)
     */
    public $ProxyGroupId;

    /**
     * @var string Load rebalance mode. Valid values: `auto`, `manual`
     */
    public $ReloadBalance;

    /**
     * @var string Upgrade time. Valid values: `no` (upon upgrade completion), `timeWindow` (upgrade during instance maintenance time)
     */
    public $IsInMaintainPeriod;

    /**
     * @var array Node information of the atabase proxy
     */
    public $ProxyZones;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $Cpu Number of CPU cores
     * @param integer $Mem Memory
     * @param integer $ProxyCount Number of nodes in the proxy group
     * @param string $ProxyGroupId ID of the database proxy group (disused)
     * @param string $ReloadBalance Load rebalance mode. Valid values: `auto`, `manual`
     * @param string $IsInMaintainPeriod Upgrade time. Valid values: `no` (upon upgrade completion), `timeWindow` (upgrade during instance maintenance time)
     * @param array $ProxyZones Node information of the atabase proxy
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("ProxyCount",$param) and $param["ProxyCount"] !== null) {
            $this->ProxyCount = $param["ProxyCount"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("ReloadBalance",$param) and $param["ReloadBalance"] !== null) {
            $this->ReloadBalance = $param["ReloadBalance"];
        }

        if (array_key_exists("IsInMaintainPeriod",$param) and $param["IsInMaintainPeriod"] !== null) {
            $this->IsInMaintainPeriod = $param["IsInMaintainPeriod"];
        }

        if (array_key_exists("ProxyZones",$param) and $param["ProxyZones"] !== null) {
            $this->ProxyZones = [];
            foreach ($param["ProxyZones"] as $key => $value){
                $obj = new ProxyZone();
                $obj->deserialize($value);
                array_push($this->ProxyZones, $obj);
            }
        }
    }
}
