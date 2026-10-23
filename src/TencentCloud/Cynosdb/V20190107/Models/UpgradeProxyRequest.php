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
 * UpgradeProxy request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method integer getCpu() Obtain Number of CPU cores
 * @method void setCpu(integer $Cpu) Set Number of CPU cores
 * @method integer getMem() Obtain memory
 * @method void setMem(integer $Mem) Set memory
 * @method integer getProxyCount() Obtain Number of database proxy group nodes
 * @method void setProxyCount(integer $ProxyCount) Set Number of database proxy group nodes
 * @method string getProxyGroupId() Obtain Database Proxy Group ID (abandoned)
 * @method void setProxyGroupId(string $ProxyGroupId) Set Database Proxy Group ID (abandoned)
 * @method string getReloadBalance() Obtain Load rebalance: auto (automatic), manual
 * @method void setReloadBalance(string $ReloadBalance) Set Load rebalance: auto (automatic), manual
 * @method string getIsInMaintainPeriod() Obtain Upgrade time: no (upon upgrade completion); yes (instance maintenance time)
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) Set Upgrade time: no (upon upgrade completion); yes (instance maintenance time)
 * @method array getProxyZones() Obtain Database proxy node information
 * @method void setProxyZones(array $ProxyZones) Set Database proxy node information
 * @method string getIsRollUpgrade() Obtain Whether to perform a rolling upgrade
 * @method void setIsRollUpgrade(string $IsRollUpgrade) Set Whether to perform a rolling upgrade
 * @method integer getRollUpgradeWaitingTime() Obtain In-place rolling upgrade waiting time. Unit: seconds
 * @method void setRollUpgradeWaitingTime(integer $RollUpgradeWaitingTime) Set In-place rolling upgrade waiting time. Unit: seconds
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
     * @var integer memory
     */
    public $Mem;

    /**
     * @var integer Number of database proxy group nodes
     */
    public $ProxyCount;

    /**
     * @var string Database Proxy Group ID (abandoned)
     */
    public $ProxyGroupId;

    /**
     * @var string Load rebalance: auto (automatic), manual
     */
    public $ReloadBalance;

    /**
     * @var string Upgrade time: no (upon upgrade completion); yes (instance maintenance time)
     */
    public $IsInMaintainPeriod;

    /**
     * @var array Database proxy node information
     */
    public $ProxyZones;

    /**
     * @var string Whether to perform a rolling upgrade
     */
    public $IsRollUpgrade;

    /**
     * @var integer In-place rolling upgrade waiting time. Unit: seconds
     */
    public $RollUpgradeWaitingTime;

    /**
     * @param string $ClusterId Cluster ID
     * @param integer $Cpu Number of CPU cores
     * @param integer $Mem memory
     * @param integer $ProxyCount Number of database proxy group nodes
     * @param string $ProxyGroupId Database Proxy Group ID (abandoned)
     * @param string $ReloadBalance Load rebalance: auto (automatic), manual
     * @param string $IsInMaintainPeriod Upgrade time: no (upon upgrade completion); yes (instance maintenance time)
     * @param array $ProxyZones Database proxy node information
     * @param string $IsRollUpgrade Whether to perform a rolling upgrade
     * @param integer $RollUpgradeWaitingTime In-place rolling upgrade waiting time. Unit: seconds
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

        if (array_key_exists("IsRollUpgrade",$param) and $param["IsRollUpgrade"] !== null) {
            $this->IsRollUpgrade = $param["IsRollUpgrade"];
        }

        if (array_key_exists("RollUpgradeWaitingTime",$param) and $param["RollUpgradeWaitingTime"] !== null) {
            $this->RollUpgradeWaitingTime = $param["RollUpgradeWaitingTime"];
        }
    }
}
