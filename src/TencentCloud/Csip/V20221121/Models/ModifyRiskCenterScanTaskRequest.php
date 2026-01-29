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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRiskCenterScanTask request structure.
 *
 * @method string getTaskName() Obtain Task name.
 * @method void setTaskName(string $TaskName) Set Task name.
 * @method integer getScanAssetType() Obtain 0: Full Scan; 1: Specified Asset Scan; 2: Excluded Asset Scan; 3: Manual Entry Scan. 1 and 2 require the Assets field; 3 requires SelfDefiningAssets.
 * @method void setScanAssetType(integer $ScanAssetType) Set 0: Full Scan; 1: Specified Asset Scan; 2: Excluded Asset Scan; 3: Manual Entry Scan. 1 and 2 require the Assets field; 3 requires SelfDefiningAssets.
 * @method array getScanItem() Obtain Scan items. port/poc/weakpass/webcontent/configrisk
 * @method void setScanItem(array $ScanItem) Set Scan items. port/poc/weakpass/webcontent/configrisk
 * @method integer getScanPlanType() Obtain 0: Periodic Task; 1: Scan Now; 2: Scheduled Scan; 3: Custom. If 0, 2, 3, ScanPlanContent is required.
 * @method void setScanPlanType(integer $ScanPlanType) Set 0: Periodic Task; 1: Scan Now; 2: Scheduled Scan; 3: Custom. If 0, 2, 3, ScanPlanContent is required.
 * @method string getTaskId() Obtain Task ID to be Modified
 * @method void setTaskId(string $TaskId) Set Task ID to be Modified
 * @method array getMemberId() Obtain Group Account Member ID
 * @method void setMemberId(array $MemberId) Set Group Account Member ID
 * @method array getAssets() Obtain Scanned Asset Information List
 * @method void setAssets(array $Assets) Set Scanned Asset Information List
 * @method string getScanPlanContent() Obtain Scan Plan Details
 * @method void setScanPlanContent(string $ScanPlanContent) Set Scan Plan Details
 * @method array getSelfDefiningAssets() Obtain IP/Domain/URL Array
 * @method void setSelfDefiningAssets(array $SelfDefiningAssets) Set IP/Domain/URL Array
 * @method TaskAdvanceCFG getTaskAdvanceCFG() Obtain Advanced configuration.
 * @method void setTaskAdvanceCFG(TaskAdvanceCFG $TaskAdvanceCFG) Set Advanced configuration.
 * @method integer getTaskMode() Obtain Checkup Mode. 0: Standard Mode; 1: Quick Mode; 2: Advanced Mode. Standard Mode by default.
 * @method void setTaskMode(integer $TaskMode) Set Checkup Mode. 0: Standard Mode; 1: Quick Mode; 2: Advanced Mode. Standard Mode by default.
 * @method string getFinishWebHook() Obtain Task complete callback webhook url.
 * @method void setFinishWebHook(string $FinishWebHook) Set Task complete callback webhook url.
 */
class ModifyRiskCenterScanTaskRequest extends AbstractModel
{
    /**
     * @var string Task name.
     */
    public $TaskName;

    /**
     * @var integer 0: Full Scan; 1: Specified Asset Scan; 2: Excluded Asset Scan; 3: Manual Entry Scan. 1 and 2 require the Assets field; 3 requires SelfDefiningAssets.
     */
    public $ScanAssetType;

    /**
     * @var array Scan items. port/poc/weakpass/webcontent/configrisk
     */
    public $ScanItem;

    /**
     * @var integer 0: Periodic Task; 1: Scan Now; 2: Scheduled Scan; 3: Custom. If 0, 2, 3, ScanPlanContent is required.
     */
    public $ScanPlanType;

    /**
     * @var string Task ID to be Modified
     */
    public $TaskId;

    /**
     * @var array Group Account Member ID
     */
    public $MemberId;

    /**
     * @var array Scanned Asset Information List
     */
    public $Assets;

    /**
     * @var string Scan Plan Details
     */
    public $ScanPlanContent;

    /**
     * @var array IP/Domain/URL Array
     */
    public $SelfDefiningAssets;

    /**
     * @var TaskAdvanceCFG Advanced configuration.
     */
    public $TaskAdvanceCFG;

    /**
     * @var integer Checkup Mode. 0: Standard Mode; 1: Quick Mode; 2: Advanced Mode. Standard Mode by default.
     */
    public $TaskMode;

    /**
     * @var string Task complete callback webhook url.
     */
    public $FinishWebHook;

    /**
     * @param string $TaskName Task name.
     * @param integer $ScanAssetType 0: Full Scan; 1: Specified Asset Scan; 2: Excluded Asset Scan; 3: Manual Entry Scan. 1 and 2 require the Assets field; 3 requires SelfDefiningAssets.
     * @param array $ScanItem Scan items. port/poc/weakpass/webcontent/configrisk
     * @param integer $ScanPlanType 0: Periodic Task; 1: Scan Now; 2: Scheduled Scan; 3: Custom. If 0, 2, 3, ScanPlanContent is required.
     * @param string $TaskId Task ID to be Modified
     * @param array $MemberId Group Account Member ID
     * @param array $Assets Scanned Asset Information List
     * @param string $ScanPlanContent Scan Plan Details
     * @param array $SelfDefiningAssets IP/Domain/URL Array
     * @param TaskAdvanceCFG $TaskAdvanceCFG Advanced configuration.
     * @param integer $TaskMode Checkup Mode. 0: Standard Mode; 1: Quick Mode; 2: Advanced Mode. Standard Mode by default.
     * @param string $FinishWebHook Task complete callback webhook url.
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ScanAssetType",$param) and $param["ScanAssetType"] !== null) {
            $this->ScanAssetType = $param["ScanAssetType"];
        }

        if (array_key_exists("ScanItem",$param) and $param["ScanItem"] !== null) {
            $this->ScanItem = $param["ScanItem"];
        }

        if (array_key_exists("ScanPlanType",$param) and $param["ScanPlanType"] !== null) {
            $this->ScanPlanType = $param["ScanPlanType"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Assets",$param) and $param["Assets"] !== null) {
            $this->Assets = [];
            foreach ($param["Assets"] as $key => $value){
                $obj = new TaskAssetObject();
                $obj->deserialize($value);
                array_push($this->Assets, $obj);
            }
        }

        if (array_key_exists("ScanPlanContent",$param) and $param["ScanPlanContent"] !== null) {
            $this->ScanPlanContent = $param["ScanPlanContent"];
        }

        if (array_key_exists("SelfDefiningAssets",$param) and $param["SelfDefiningAssets"] !== null) {
            $this->SelfDefiningAssets = $param["SelfDefiningAssets"];
        }

        if (array_key_exists("TaskAdvanceCFG",$param) and $param["TaskAdvanceCFG"] !== null) {
            $this->TaskAdvanceCFG = new TaskAdvanceCFG();
            $this->TaskAdvanceCFG->deserialize($param["TaskAdvanceCFG"]);
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("FinishWebHook",$param) and $param["FinishWebHook"] !== null) {
            $this->FinishWebHook = $param["FinishWebHook"];
        }
    }
}
