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
 * UpdateBaselineStrategy request structure.
 *
 * @method integer getStrategyId() Obtain Policy ID
 * @method void setStrategyId(integer $StrategyId) Set Policy ID
 * @method string getStrategyName() Obtain Policy name
 * @method void setStrategyName(string $StrategyName) Set Policy name
 * @method integer getScanCycle() Obtain Detection period
 * @method void setScanCycle(integer $ScanCycle) Set Detection period
 * @method string getScanAt() Obtain Time when routine detection scans are triggered.
 * @method void setScanAt(string $ScanAt) Set Time when routine detection scans are triggered.
 * @method array getCategoryIds() Obtain Array of baseline IDs selected under this policy
 * @method void setCategoryIds(array $CategoryIds) Set Array of baseline IDs selected under this policy
 * @method integer getIsGlobal() Obtain Whether all servers are scanned: 1: yes; 0 :no. If the value is 1, all Professional Edition hosts are scanned.
 * @method void setIsGlobal(integer $IsGlobal) Set Whether all servers are scanned: 1: yes; 0 :no. If the value is 1, all Professional Edition hosts are scanned.
 * @method string getMachineType() Obtain CVM type:
cvm: Tencent Cloud Virtual Machine
bm: bare metal
ecm: edge computing host
lh: Tencent Cloud Lighthouse
other: hybrid cloud machine
 * @method void setMachineType(string $MachineType) Set CVM type:
cvm: Tencent Cloud Virtual Machine
bm: bare metal
ecm: edge computing host
lh: Tencent Cloud Lighthouse
other: hybrid cloud machine
 * @method string getRegionCode() Obtain Host region ap-guangzhou
 * @method void setRegionCode(string $RegionCode) Set Host region ap-guangzhou
 * @method array getQuuids() Obtain Host ID array
 * @method void setQuuids(array $Quuids) Set Host ID array
 */
class UpdateBaselineStrategyRequest extends AbstractModel
{
    /**
     * @var integer Policy ID
     */
    public $StrategyId;

    /**
     * @var string Policy name
     */
    public $StrategyName;

    /**
     * @var integer Detection period
     */
    public $ScanCycle;

    /**
     * @var string Time when routine detection scans are triggered.
     */
    public $ScanAt;

    /**
     * @var array Array of baseline IDs selected under this policy
     */
    public $CategoryIds;

    /**
     * @var integer Whether all servers are scanned: 1: yes; 0 :no. If the value is 1, all Professional Edition hosts are scanned.
     */
    public $IsGlobal;

    /**
     * @var string CVM type:
cvm: Tencent Cloud Virtual Machine
bm: bare metal
ecm: edge computing host
lh: Tencent Cloud Lighthouse
other: hybrid cloud machine
     */
    public $MachineType;

    /**
     * @var string Host region ap-guangzhou
     */
    public $RegionCode;

    /**
     * @var array Host ID array
     */
    public $Quuids;

    /**
     * @param integer $StrategyId Policy ID
     * @param string $StrategyName Policy name
     * @param integer $ScanCycle Detection period
     * @param string $ScanAt Time when routine detection scans are triggered.
     * @param array $CategoryIds Array of baseline IDs selected under this policy
     * @param integer $IsGlobal Whether all servers are scanned: 1: yes; 0 :no. If the value is 1, all Professional Edition hosts are scanned.
     * @param string $MachineType CVM type:
cvm: Tencent Cloud Virtual Machine
bm: bare metal
ecm: edge computing host
lh: Tencent Cloud Lighthouse
other: hybrid cloud machine
     * @param string $RegionCode Host region ap-guangzhou
     * @param array $Quuids Host ID array
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("ScanCycle",$param) and $param["ScanCycle"] !== null) {
            $this->ScanCycle = $param["ScanCycle"];
        }

        if (array_key_exists("ScanAt",$param) and $param["ScanAt"] !== null) {
            $this->ScanAt = $param["ScanAt"];
        }

        if (array_key_exists("CategoryIds",$param) and $param["CategoryIds"] !== null) {
            $this->CategoryIds = $param["CategoryIds"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("MachineType",$param) and $param["MachineType"] !== null) {
            $this->MachineType = $param["MachineType"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }
    }
}
