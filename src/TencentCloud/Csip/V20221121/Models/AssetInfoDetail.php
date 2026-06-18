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
 * Details of asset scan result
 *
 * @method string getAppID() Obtain User appid.
 * @method void setAppID(string $AppID) Set User appid.
 * @method string getCVEId() Obtain CVE id
 * @method void setCVEId(string $CVEId) Set CVE id
 * @method integer getIsScan() Obtain Scan Status. 0-Not Scanned by Default; 1-Scanning; 2-Scan Completed; 3-Scan Error.
 * @method void setIsScan(integer $IsScan) Set Scan Status. 0-Not Scanned by Default; 1-Scanning; 2-Scan Completed; 3-Scan Error.
 * @method integer getInfluenceAsset() Obtain Number of Affected Assets
 * @method void setInfluenceAsset(integer $InfluenceAsset) Set Number of Affected Assets
 * @method integer getNotRepairAsset() Obtain Number of Unfixed Assets
 * @method void setNotRepairAsset(integer $NotRepairAsset) Set Number of Unfixed Assets
 * @method integer getNotProtectAsset() Obtain Unprotected Asset Count
 * @method void setNotProtectAsset(integer $NotProtectAsset) Set Unprotected Asset Count
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method integer getTaskPercent() Obtain Task Percentage
 * @method void setTaskPercent(integer $TaskPercent) Set Task Percentage
 * @method integer getTaskTime() Obtain Task Time
 * @method void setTaskTime(integer $TaskTime) Set Task Time
 * @method string getScanTime() Obtain Scan time
 * @method void setScanTime(string $ScanTime) Set Scan time
 */
class AssetInfoDetail extends AbstractModel
{
    /**
     * @var string User appid.
     */
    public $AppID;

    /**
     * @var string CVE id
     */
    public $CVEId;

    /**
     * @var integer Scan Status. 0-Not Scanned by Default; 1-Scanning; 2-Scan Completed; 3-Scan Error.
     */
    public $IsScan;

    /**
     * @var integer Number of Affected Assets
     */
    public $InfluenceAsset;

    /**
     * @var integer Number of Unfixed Assets
     */
    public $NotRepairAsset;

    /**
     * @var integer Unprotected Asset Count
     */
    public $NotProtectAsset;

    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var integer Task Percentage
     */
    public $TaskPercent;

    /**
     * @var integer Task Time
     */
    public $TaskTime;

    /**
     * @var string Scan time
     */
    public $ScanTime;

    /**
     * @param string $AppID User appid.
     * @param string $CVEId CVE id
     * @param integer $IsScan Scan Status. 0-Not Scanned by Default; 1-Scanning; 2-Scan Completed; 3-Scan Error.
     * @param integer $InfluenceAsset Number of Affected Assets
     * @param integer $NotRepairAsset Number of Unfixed Assets
     * @param integer $NotProtectAsset Unprotected Asset Count
     * @param string $TaskId Task ID.
     * @param integer $TaskPercent Task Percentage
     * @param integer $TaskTime Task Time
     * @param string $ScanTime Scan time
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
