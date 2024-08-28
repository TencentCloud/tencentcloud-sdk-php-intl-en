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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 3D image of the host on the large screen
 *
 * @method string getRegion() Obtain All regions
 * @method void setRegion(string $Region) Set All regions
 * @method string getRegionName() Obtain Region description in Chinese
 * @method void setRegionName(string $RegionName) Set Region description in Chinese
 * @method array getMachines() Obtain Host list
 * @method void setMachines(array $Machines) Set Host list
 * @method integer getTotalCount() Obtain Total number of hosts in this region
 * @method void setTotalCount(integer $TotalCount) Set Total number of hosts in this region
 * @method integer getRiskCnt() Obtain Number of risky hosts
 * @method void setRiskCnt(integer $RiskCnt) Set Number of risky hosts
 * @method integer getAttackCnt() Obtain Number of potentially risky hosts
 * @method void setAttackCnt(integer $AttackCnt) Set Number of potentially risky hosts
 * @method integer getSafetyCnt() Obtain Number of risk-free hosts
 * @method void setSafetyCnt(integer $SafetyCnt) Set Number of risk-free hosts
 * @method integer getUnAgentOfflineCnt() Obtain Number of hosts in offline/uninstalled status
 * @method void setUnAgentOfflineCnt(integer $UnAgentOfflineCnt) Set Number of hosts in offline/uninstalled status
 * @method integer getIgnoreCnt() Obtain Number of hosts that are omitted from displaying. When it is equal to 0, no hosts are omitted.
 * @method void setIgnoreCnt(integer $IgnoreCnt) Set Number of hosts that are omitted from displaying. When it is equal to 0, no hosts are omitted.
 */
class ScreenRegionMachines extends AbstractModel
{
    /**
     * @var string All regions
     */
    public $Region;

    /**
     * @var string Region description in Chinese
     */
    public $RegionName;

    /**
     * @var array Host list
     */
    public $Machines;

    /**
     * @var integer Total number of hosts in this region
     */
    public $TotalCount;

    /**
     * @var integer Number of risky hosts
     */
    public $RiskCnt;

    /**
     * @var integer Number of potentially risky hosts
     */
    public $AttackCnt;

    /**
     * @var integer Number of risk-free hosts
     */
    public $SafetyCnt;

    /**
     * @var integer Number of hosts in offline/uninstalled status
     */
    public $UnAgentOfflineCnt;

    /**
     * @var integer Number of hosts that are omitted from displaying. When it is equal to 0, no hosts are omitted.
     */
    public $IgnoreCnt;

    /**
     * @param string $Region All regions
     * @param string $RegionName Region description in Chinese
     * @param array $Machines Host list
     * @param integer $TotalCount Total number of hosts in this region
     * @param integer $RiskCnt Number of risky hosts
     * @param integer $AttackCnt Number of potentially risky hosts
     * @param integer $SafetyCnt Number of risk-free hosts
     * @param integer $UnAgentOfflineCnt Number of hosts in offline/uninstalled status
     * @param integer $IgnoreCnt Number of hosts that are omitted from displaying. When it is equal to 0, no hosts are omitted.
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Machines",$param) and $param["Machines"] !== null) {
            $this->Machines = [];
            foreach ($param["Machines"] as $key => $value){
                $obj = new ScreenMachine();
                $obj->deserialize($value);
                array_push($this->Machines, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RiskCnt",$param) and $param["RiskCnt"] !== null) {
            $this->RiskCnt = $param["RiskCnt"];
        }

        if (array_key_exists("AttackCnt",$param) and $param["AttackCnt"] !== null) {
            $this->AttackCnt = $param["AttackCnt"];
        }

        if (array_key_exists("SafetyCnt",$param) and $param["SafetyCnt"] !== null) {
            $this->SafetyCnt = $param["SafetyCnt"];
        }

        if (array_key_exists("UnAgentOfflineCnt",$param) and $param["UnAgentOfflineCnt"] !== null) {
            $this->UnAgentOfflineCnt = $param["UnAgentOfflineCnt"];
        }

        if (array_key_exists("IgnoreCnt",$param) and $param["IgnoreCnt"] !== null) {
            $this->IgnoreCnt = $param["IgnoreCnt"];
        }
    }
}
