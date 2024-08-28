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
 * CreateBaselineStrategy request structure.
 *
 * @method string getStrategyName() Obtain Policy name
 * @method void setStrategyName(string $StrategyName) Set Policy name
 * @method integer getScanCycle() Obtain Check cycle, indicating the number of days between checks. Example: 2, indicating that the check is carried out every 2 days.
 * @method void setScanCycle(integer $ScanCycle) Set Check cycle, indicating the number of days between checks. Example: 2, indicating that the check is carried out every 2 days.
 * @method string getScanAt() Obtain Time for a periodic check. The scan task is issued at this time. Example: "22:00", indicating that the task is issued at 22:00.
 * @method void setScanAt(string $ScanAt) Set Time for a periodic check. The scan task is issued at this time. Example: "22:00", indicating that the task is issued at 22:00.
 * @method array getCategoryIds() Obtain Array of selected baseline IDs under this policy. Example: [1,3,5,7]
 * @method void setCategoryIds(array $CategoryIds) Set Array of selected baseline IDs under this policy. Example: [1,3,5,7]
 * @method integer getIsGlobal() Obtain Whether all servers are scanned. 1: yes; 0: no. If the value is 1, all Professional Edition hosts are scanned.
 * @method void setIsGlobal(integer $IsGlobal) Set Whether all servers are scanned. 1: yes; 0: no. If the value is 1, all Professional Edition hosts are scanned.
 * @method string getMachineType() Obtain Cloud host type:
CVM: virtual machine
BM: bare metal server
ECM: edge computing machine
LH: Lighthouse 
Other: hybrid cloud machine
 * @method void setMachineType(string $MachineType) Set Cloud host type:
CVM: virtual machine
BM: bare metal server
ECM: edge computing machine
LH: Lighthouse 
Other: hybrid cloud machine
 * @method string getRegionCode() Obtain Host region. Example: "ap-guangzhou"
 * @method void setRegionCode(string $RegionCode) Set Host region. Example: "ap-guangzhou"
 * @method array getQuuids() Obtain Host ID array. Example: ["quuid1","quuid2"]
 * @method void setQuuids(array $Quuids) Set Host ID array. Example: ["quuid1","quuid2"]
 */
class CreateBaselineStrategyRequest extends AbstractModel
{
    /**
     * @var string Policy name
     */
    public $StrategyName;

    /**
     * @var integer Check cycle, indicating the number of days between checks. Example: 2, indicating that the check is carried out every 2 days.
     */
    public $ScanCycle;

    /**
     * @var string Time for a periodic check. The scan task is issued at this time. Example: "22:00", indicating that the task is issued at 22:00.
     */
    public $ScanAt;

    /**
     * @var array Array of selected baseline IDs under this policy. Example: [1,3,5,7]
     */
    public $CategoryIds;

    /**
     * @var integer Whether all servers are scanned. 1: yes; 0: no. If the value is 1, all Professional Edition hosts are scanned.
     */
    public $IsGlobal;

    /**
     * @var string Cloud host type:
CVM: virtual machine
BM: bare metal server
ECM: edge computing machine
LH: Lighthouse 
Other: hybrid cloud machine
     */
    public $MachineType;

    /**
     * @var string Host region. Example: "ap-guangzhou"
     */
    public $RegionCode;

    /**
     * @var array Host ID array. Example: ["quuid1","quuid2"]
     */
    public $Quuids;

    /**
     * @param string $StrategyName Policy name
     * @param integer $ScanCycle Check cycle, indicating the number of days between checks. Example: 2, indicating that the check is carried out every 2 days.
     * @param string $ScanAt Time for a periodic check. The scan task is issued at this time. Example: "22:00", indicating that the task is issued at 22:00.
     * @param array $CategoryIds Array of selected baseline IDs under this policy. Example: [1,3,5,7]
     * @param integer $IsGlobal Whether all servers are scanned. 1: yes; 0: no. If the value is 1, all Professional Edition hosts are scanned.
     * @param string $MachineType Cloud host type:
CVM: virtual machine
BM: bare metal server
ECM: edge computing machine
LH: Lighthouse 
Other: hybrid cloud machine
     * @param string $RegionCode Host region. Example: "ap-guangzhou"
     * @param array $Quuids Host ID array. Example: ["quuid1","quuid2"]
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
