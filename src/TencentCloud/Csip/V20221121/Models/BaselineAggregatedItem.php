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
 * Aggregation results of the detection item dimension, carrying the pass/fail statistics of this detection item on assets.
 *
 * @method BaselineItem getItem() Obtain <p>Basic detection item information (including ID, name, risk level, category, etc.).</p>
 * @method void setItem(BaselineItem $Item) Set <p>Basic detection item information (including ID, name, risk level, category, etc.).</p>
 * @method integer getPassAssetCount() Obtain <p>Number of assets with a PASS result in the last scan for this detection item.</p>
 * @method void setPassAssetCount(integer $PassAssetCount) Set <p>Number of assets with a PASS result in the last scan for this detection item.</p>
 * @method integer getNotPassAssetCount() Obtain <p>Number of assets with result NOT_PASS in the last scan of this detection item.</p>
 * @method void setNotPassAssetCount(integer $NotPassAssetCount) Set <p>Number of assets with result NOT_PASS in the last scan of this detection item.</p>
 * @method integer getTotalAssetCount() Obtain <p>Number of assets with the last scan result of PASS, NOT_PASS, and CHECKING for this detection item.</p>
 * @method void setTotalAssetCount(integer $TotalAssetCount) Set <p>Number of assets with the last scan result of PASS, NOT_PASS, and CHECKING for this detection item.</p>
 * @method float getPassRate() Obtain <p>Pass rate of assets in the last scan of this detection item, unit: percentage (0–100).</p>
 * @method void setPassRate(float $PassRate) Set <p>Pass rate of assets in the last scan of this detection item, unit: percentage (0–100).</p>
 * @method string getLatestCheckTime() Obtain <p>The last time the scan for this detection item was completed.</p>
 * @method void setLatestCheckTime(string $LatestCheckTime) Set <p>The last time the scan for this detection item was completed.</p>
 * @method string getResultStatus() Obtain <p>Status of the last scan result. Parameter Value:</p><ul><li>CHECKING: in-progress detection</li><li>PASS: passed</li><li>NOT_PASS: failed</li><li>CHECK_FAILED: detection failed</li><li>NOT_INVOLVED: not involved</li></ul>
 * @method void setResultStatus(string $ResultStatus) Set <p>Status of the last scan result. Parameter Value:</p><ul><li>CHECKING: in-progress detection</li><li>PASS: passed</li><li>NOT_PASS: failed</li><li>CHECK_FAILED: detection failed</li><li>NOT_INVOLVED: not involved</li></ul>
 * @method array getAppid() Obtain <p>Tenant Appid list involved in the aggregation result.</p>
 * @method void setAppid(array $Appid) Set <p>Tenant Appid list involved in the aggregation result.</p>
 * @method array getJobID() Obtain <p>List of scan JobIDs involved in this aggregation result.</p>
 * @method void setJobID(array $JobID) Set <p>List of scan JobIDs involved in this aggregation result.</p>
 */
class BaselineAggregatedItem extends AbstractModel
{
    /**
     * @var BaselineItem <p>Basic detection item information (including ID, name, risk level, category, etc.).</p>
     */
    public $Item;

    /**
     * @var integer <p>Number of assets with a PASS result in the last scan for this detection item.</p>
     */
    public $PassAssetCount;

    /**
     * @var integer <p>Number of assets with result NOT_PASS in the last scan of this detection item.</p>
     */
    public $NotPassAssetCount;

    /**
     * @var integer <p>Number of assets with the last scan result of PASS, NOT_PASS, and CHECKING for this detection item.</p>
     */
    public $TotalAssetCount;

    /**
     * @var float <p>Pass rate of assets in the last scan of this detection item, unit: percentage (0–100).</p>
     */
    public $PassRate;

    /**
     * @var string <p>The last time the scan for this detection item was completed.</p>
     */
    public $LatestCheckTime;

    /**
     * @var string <p>Status of the last scan result. Parameter Value:</p><ul><li>CHECKING: in-progress detection</li><li>PASS: passed</li><li>NOT_PASS: failed</li><li>CHECK_FAILED: detection failed</li><li>NOT_INVOLVED: not involved</li></ul>
     */
    public $ResultStatus;

    /**
     * @var array <p>Tenant Appid list involved in the aggregation result.</p>
     */
    public $Appid;

    /**
     * @var array <p>List of scan JobIDs involved in this aggregation result.</p>
     */
    public $JobID;

    /**
     * @param BaselineItem $Item <p>Basic detection item information (including ID, name, risk level, category, etc.).</p>
     * @param integer $PassAssetCount <p>Number of assets with a PASS result in the last scan for this detection item.</p>
     * @param integer $NotPassAssetCount <p>Number of assets with result NOT_PASS in the last scan of this detection item.</p>
     * @param integer $TotalAssetCount <p>Number of assets with the last scan result of PASS, NOT_PASS, and CHECKING for this detection item.</p>
     * @param float $PassRate <p>Pass rate of assets in the last scan of this detection item, unit: percentage (0–100).</p>
     * @param string $LatestCheckTime <p>The last time the scan for this detection item was completed.</p>
     * @param string $ResultStatus <p>Status of the last scan result. Parameter Value:</p><ul><li>CHECKING: in-progress detection</li><li>PASS: passed</li><li>NOT_PASS: failed</li><li>CHECK_FAILED: detection failed</li><li>NOT_INVOLVED: not involved</li></ul>
     * @param array $Appid <p>Tenant Appid list involved in the aggregation result.</p>
     * @param array $JobID <p>List of scan JobIDs involved in this aggregation result.</p>
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
        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = new BaselineItem();
            $this->Item->deserialize($param["Item"]);
        }

        if (array_key_exists("PassAssetCount",$param) and $param["PassAssetCount"] !== null) {
            $this->PassAssetCount = $param["PassAssetCount"];
        }

        if (array_key_exists("NotPassAssetCount",$param) and $param["NotPassAssetCount"] !== null) {
            $this->NotPassAssetCount = $param["NotPassAssetCount"];
        }

        if (array_key_exists("TotalAssetCount",$param) and $param["TotalAssetCount"] !== null) {
            $this->TotalAssetCount = $param["TotalAssetCount"];
        }

        if (array_key_exists("PassRate",$param) and $param["PassRate"] !== null) {
            $this->PassRate = $param["PassRate"];
        }

        if (array_key_exists("LatestCheckTime",$param) and $param["LatestCheckTime"] !== null) {
            $this->LatestCheckTime = $param["LatestCheckTime"];
        }

        if (array_key_exists("ResultStatus",$param) and $param["ResultStatus"] !== null) {
            $this->ResultStatus = $param["ResultStatus"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("JobID",$param) and $param["JobID"] !== null) {
            $this->JobID = $param["JobID"];
        }
    }
}
