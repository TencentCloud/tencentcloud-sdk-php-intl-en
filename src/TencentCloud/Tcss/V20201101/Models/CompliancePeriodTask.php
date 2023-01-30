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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a scheduled task of the compliance baseline check
 *
 * @method integer getPeriodTaskId() Obtain Scheduled task ID
 * @method void setPeriodTaskId(integer $PeriodTaskId) Set Scheduled task ID
 * @method string getAssetType() Obtain Asset type
`ASSET_CONTAINER`: Container.
`ASSET_IMAGE`: Image.
`ASSET_HOST`: Server.
`ASSET_K8S`: K8s asset.
 * @method void setAssetType(string $AssetType) Set Asset type
`ASSET_CONTAINER`: Container.
`ASSET_IMAGE`: Image.
`ASSET_HOST`: Server.
`ASSET_K8S`: K8s asset.
 * @method string getLastTriggerTime() Obtain Last trigger time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastTriggerTime(string $LastTriggerTime) Set Last trigger time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTotalPolicyItemCount() Obtain Total number of check items
 * @method void setTotalPolicyItemCount(integer $TotalPolicyItemCount) Set Total number of check items
 * @method CompliancePeriodTaskRule getPeriodRule() Obtain Cycle settings
 * @method void setPeriodRule(CompliancePeriodTaskRule $PeriodRule) Set Cycle settings
 * @method array getBenchmarkStandardSet() Obtain List of compliance standards
 * @method void setBenchmarkStandardSet(array $BenchmarkStandardSet) Set List of compliance standards
 */
class CompliancePeriodTask extends AbstractModel
{
    /**
     * @var integer Scheduled task ID
     */
    public $PeriodTaskId;

    /**
     * @var string Asset type
`ASSET_CONTAINER`: Container.
`ASSET_IMAGE`: Image.
`ASSET_HOST`: Server.
`ASSET_K8S`: K8s asset.
     */
    public $AssetType;

    /**
     * @var string Last trigger time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastTriggerTime;

    /**
     * @var integer Total number of check items
     */
    public $TotalPolicyItemCount;

    /**
     * @var CompliancePeriodTaskRule Cycle settings
     */
    public $PeriodRule;

    /**
     * @var array List of compliance standards
     */
    public $BenchmarkStandardSet;

    /**
     * @param integer $PeriodTaskId Scheduled task ID
     * @param string $AssetType Asset type
`ASSET_CONTAINER`: Container.
`ASSET_IMAGE`: Image.
`ASSET_HOST`: Server.
`ASSET_K8S`: K8s asset.
     * @param string $LastTriggerTime Last trigger time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TotalPolicyItemCount Total number of check items
     * @param CompliancePeriodTaskRule $PeriodRule Cycle settings
     * @param array $BenchmarkStandardSet List of compliance standards
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
        if (array_key_exists("PeriodTaskId",$param) and $param["PeriodTaskId"] !== null) {
            $this->PeriodTaskId = $param["PeriodTaskId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("LastTriggerTime",$param) and $param["LastTriggerTime"] !== null) {
            $this->LastTriggerTime = $param["LastTriggerTime"];
        }

        if (array_key_exists("TotalPolicyItemCount",$param) and $param["TotalPolicyItemCount"] !== null) {
            $this->TotalPolicyItemCount = $param["TotalPolicyItemCount"];
        }

        if (array_key_exists("PeriodRule",$param) and $param["PeriodRule"] !== null) {
            $this->PeriodRule = new CompliancePeriodTaskRule();
            $this->PeriodRule->deserialize($param["PeriodRule"]);
        }

        if (array_key_exists("BenchmarkStandardSet",$param) and $param["BenchmarkStandardSet"] !== null) {
            $this->BenchmarkStandardSet = [];
            foreach ($param["BenchmarkStandardSet"] as $key => $value){
                $obj = new ComplianceBenchmarkStandard();
                $obj->deserialize($value);
                array_push($this->BenchmarkStandardSet, $obj);
            }
        }
    }
}
