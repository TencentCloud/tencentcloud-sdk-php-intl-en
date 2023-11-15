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
 * Details of asset scan result
 *
 * @method string getAppID() Obtain AppID of the user
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setAppID(string $AppID) Set AppID of the user
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getCVEId() Obtain CVE number
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setCVEId(string $CVEId) Set CVE number
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getIsScan() Obtain Whether the asset is scanned. Values: `0`: (default) Not scanned; `1`: Scanning; `2`: Scan completed; `3`: Error while scanning
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setIsScan(integer $IsScan) Set Whether the asset is scanned. Values: `0`: (default) Not scanned; `1`: Scanning; `2`: Scan completed; `3`: Error while scanning
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getInfluenceAsset() Obtain Number of affected assets
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setInfluenceAsset(integer $InfluenceAsset) Set Number of affected assets
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getNotRepairAsset() Obtain Number of not fixed assets
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNotRepairAsset(integer $NotRepairAsset) Set Number of not fixed assets
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getNotProtectAsset() Obtain Number of not protected assets
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setNotProtectAsset(integer $NotProtectAsset) Set Number of not protected assets
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain Task ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getTaskPercent() Obtain Task progress in terms of percentage
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTaskPercent(integer $TaskPercent) Set Task progress in terms of percentage
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method integer getTaskTime() Obtain Task creation time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setTaskTime(integer $TaskTime) Set Task creation time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method string getScanTime() Obtain Scan start time
Note: This field may return·null, indicating that no valid values can be obtained.
 * @method void setScanTime(string $ScanTime) Set Scan start time
Note: This field may return·null, indicating that no valid values can be obtained.
 */
class AssetInfoDetail extends AbstractModel
{
    /**
     * @var string AppID of the user
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $AppID;

    /**
     * @var string CVE number
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $CVEId;

    /**
     * @var integer Whether the asset is scanned. Values: `0`: (default) Not scanned; `1`: Scanning; `2`: Scan completed; `3`: Error while scanning
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $IsScan;

    /**
     * @var integer Number of affected assets
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $InfluenceAsset;

    /**
     * @var integer Number of not fixed assets
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $NotRepairAsset;

    /**
     * @var integer Number of not protected assets
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $NotProtectAsset;

    /**
     * @var string Task ID
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var integer Task progress in terms of percentage
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $TaskPercent;

    /**
     * @var integer Task creation time
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $TaskTime;

    /**
     * @var string Scan start time
Note: This field may return·null, indicating that no valid values can be obtained.
     */
    public $ScanTime;

    /**
     * @param string $AppID AppID of the user
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $CVEId CVE number
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $IsScan Whether the asset is scanned. Values: `0`: (default) Not scanned; `1`: Scanning; `2`: Scan completed; `3`: Error while scanning
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $InfluenceAsset Number of affected assets
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $NotRepairAsset Number of not fixed assets
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $NotProtectAsset Number of not protected assets
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $TaskId Task ID
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $TaskPercent Task progress in terms of percentage
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param integer $TaskTime Task creation time
Note: This field may return·null, indicating that no valid values can be obtained.
     * @param string $ScanTime Scan start time
Note: This field may return·null, indicating that no valid values can be obtained.
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("CVEId",$param) and $param["CVEId"] !== null) {
            $this->CVEId = $param["CVEId"];
        }

        if (array_key_exists("IsScan",$param) and $param["IsScan"] !== null) {
            $this->IsScan = $param["IsScan"];
        }

        if (array_key_exists("InfluenceAsset",$param) and $param["InfluenceAsset"] !== null) {
            $this->InfluenceAsset = $param["InfluenceAsset"];
        }

        if (array_key_exists("NotRepairAsset",$param) and $param["NotRepairAsset"] !== null) {
            $this->NotRepairAsset = $param["NotRepairAsset"];
        }

        if (array_key_exists("NotProtectAsset",$param) and $param["NotProtectAsset"] !== null) {
            $this->NotProtectAsset = $param["NotProtectAsset"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskPercent",$param) and $param["TaskPercent"] !== null) {
            $this->TaskPercent = $param["TaskPercent"];
        }

        if (array_key_exists("TaskTime",$param) and $param["TaskTime"] !== null) {
            $this->TaskTime = $param["TaskTime"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }
    }
}
