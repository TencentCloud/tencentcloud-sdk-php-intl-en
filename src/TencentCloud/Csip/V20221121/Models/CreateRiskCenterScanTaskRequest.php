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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRiskCenterScanTask request structure.
 *
 * @method string getTaskName() Obtain Task name
 * @method void setTaskName(string $TaskName) Set Task name
 * @method integer getScanAssetType() Obtain Values: `0` (Scan all); `1` (Scan specific assets); `2` (Scan all expect the specified assets); `3` (Custom assets). When `ScanAssetType=1/2`, `Assets` is required. When `ScanAssetType=3`, `SelfDefiningAssets` is required. 
 * @method void setScanAssetType(integer $ScanAssetType) Set Values: `0` (Scan all); `1` (Scan specific assets); `2` (Scan all expect the specified assets); `3` (Custom assets). When `ScanAssetType=1/2`, `Assets` is required. When `ScanAssetType=3`, `SelfDefiningAssets` is required. 
 * @method array getScanItem() Obtain Project to scan: port/poc/weakpass/webcontent/configrisk/exposedserver
 * @method void setScanItem(array $ScanItem) Set Project to scan: port/poc/weakpass/webcontent/configrisk/exposedserver
 * @method integer getScanPlanType() Obtain Task type. `0`: Scheduled task, `1`: Scan immediately; `2`: Scanned at the specified time; `3`: Custom. When ScanPlanType=0,2,3, `ScanPlanContent` is required.
 * @method void setScanPlanType(integer $ScanPlanType) Set Task type. `0`: Scheduled task, `1`: Scan immediately; `2`: Scanned at the specified time; `3`: Custom. When ScanPlanType=0,2,3, `ScanPlanContent` is required.
 * @method array getAssets() Obtain List of assets to scan
 * @method void setAssets(array $Assets) Set List of assets to scan
 * @method string getScanPlanContent() Obtain Details of a scheduled scan task
 * @method void setScanPlanContent(string $ScanPlanContent) Set Details of a scheduled scan task
 * @method array getSelfDefiningAssets() Obtain IP/Domain name/URL
 * @method void setSelfDefiningAssets(array $SelfDefiningAssets) Set IP/Domain name/URL
 * @method string getScanFrom() Obtain Request source. Values: `vss` (Vulnerability Scan Service), `csip` (Cloud Security Center). It defaults to `vss`.
 * @method void setScanFrom(string $ScanFrom) Set Request source. Values: `vss` (Vulnerability Scan Service), `csip` (Cloud Security Center). It defaults to `vss`.
 * @method TaskAdvanceCFG getTaskAdvanceCFG() Obtain Advanced settings
 * @method void setTaskAdvanceCFG(TaskAdvanceCFG $TaskAdvanceCFG) Set Advanced settings
 * @method integer getTaskMode() Obtain Scan task mode: `0` (Standard), `1` (Quick), `2` (Advanced). Default: `0`
 * @method void setTaskMode(integer $TaskMode) Set Scan task mode: `0` (Standard), `1` (Quick), `2` (Advanced). Default: `0`
 * @method AssetTag getTags() Obtain Asset tags
 * @method void setTags(AssetTag $Tags) Set Asset tags
 */
class CreateRiskCenterScanTaskRequest extends AbstractModel
{
    /**
     * @var string Task name
     */
    public $TaskName;

    /**
     * @var integer Values: `0` (Scan all); `1` (Scan specific assets); `2` (Scan all expect the specified assets); `3` (Custom assets). When `ScanAssetType=1/2`, `Assets` is required. When `ScanAssetType=3`, `SelfDefiningAssets` is required. 
     */
    public $ScanAssetType;

    /**
     * @var array Project to scan: port/poc/weakpass/webcontent/configrisk/exposedserver
     */
    public $ScanItem;

    /**
     * @var integer Task type. `0`: Scheduled task, `1`: Scan immediately; `2`: Scanned at the specified time; `3`: Custom. When ScanPlanType=0,2,3, `ScanPlanContent` is required.
     */
    public $ScanPlanType;

    /**
     * @var array List of assets to scan
     */
    public $Assets;

    /**
     * @var string Details of a scheduled scan task
     */
    public $ScanPlanContent;

    /**
     * @var array IP/Domain name/URL
     */
    public $SelfDefiningAssets;

    /**
     * @var string Request source. Values: `vss` (Vulnerability Scan Service), `csip` (Cloud Security Center). It defaults to `vss`.
     */
    public $ScanFrom;

    /**
     * @var TaskAdvanceCFG Advanced settings
     */
    public $TaskAdvanceCFG;

    /**
     * @var integer Scan task mode: `0` (Standard), `1` (Quick), `2` (Advanced). Default: `0`
     */
    public $TaskMode;

    /**
     * @var AssetTag Asset tags
     */
    public $Tags;

    /**
     * @param string $TaskName Task name
     * @param integer $ScanAssetType Values: `0` (Scan all); `1` (Scan specific assets); `2` (Scan all expect the specified assets); `3` (Custom assets). When `ScanAssetType=1/2`, `Assets` is required. When `ScanAssetType=3`, `SelfDefiningAssets` is required. 
     * @param array $ScanItem Project to scan: port/poc/weakpass/webcontent/configrisk/exposedserver
     * @param integer $ScanPlanType Task type. `0`: Scheduled task, `1`: Scan immediately; `2`: Scanned at the specified time; `3`: Custom. When ScanPlanType=0,2,3, `ScanPlanContent` is required.
     * @param array $Assets List of assets to scan
     * @param string $ScanPlanContent Details of a scheduled scan task
     * @param array $SelfDefiningAssets IP/Domain name/URL
     * @param string $ScanFrom Request source. Values: `vss` (Vulnerability Scan Service), `csip` (Cloud Security Center). It defaults to `vss`.
     * @param TaskAdvanceCFG $TaskAdvanceCFG Advanced settings
     * @param integer $TaskMode Scan task mode: `0` (Standard), `1` (Quick), `2` (Advanced). Default: `0`
     * @param AssetTag $Tags Asset tags
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

        if (array_key_exists("ScanFrom",$param) and $param["ScanFrom"] !== null) {
            $this->ScanFrom = $param["ScanFrom"];
        }

        if (array_key_exists("TaskAdvanceCFG",$param) and $param["TaskAdvanceCFG"] !== null) {
            $this->TaskAdvanceCFG = new TaskAdvanceCFG();
            $this->TaskAdvanceCFG->deserialize($param["TaskAdvanceCFG"]);
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = new AssetTag();
            $this->Tags->deserialize($param["Tags"]);
        }
    }
}
