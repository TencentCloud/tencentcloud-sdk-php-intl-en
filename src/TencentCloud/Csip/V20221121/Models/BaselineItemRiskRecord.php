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
 * Risk result history of a detection item on an asset.
 *
 * @method integer getID() Obtain <p>Risk record primary key ID.</p>
 * @method void setID(integer $ID) Set <p>Risk record primary key ID.</p>
 * @method BaselineHostAsset getHostInfo() Obtain <p>Risk-hit host asset information. If no data is available, this field is null.</p>
 * @method void setHostInfo(BaselineHostAsset $HostInfo) Set <p>Risk-hit host asset information. If no data is available, this field is null.</p>
 * @method BaselineClusterAsset getClusterInfo() Obtain <p>Cluster asset information. The value is null if no data is available.</p>
 * @method void setClusterInfo(BaselineClusterAsset $ClusterInfo) Set <p>Cluster asset information. The value is null if no data is available.</p>
 * @method string getAssetType() Obtain <p>Asset type of the hit asset. Value:</p><ul><li>HOST: host</li><li>CLUSTER: cluster</li><li>POD: Pod</li><li>CONTAINER: container</li><li>IMAGE: mirror</li></ul>
 * @method void setAssetType(string $AssetType) Set <p>Asset type of the hit asset. Value:</p><ul><li>HOST: host</li><li>CLUSTER: cluster</li><li>POD: Pod</li><li>CONTAINER: container</li><li>IMAGE: mirror</li></ul>
 * @method string getResultStatus() Obtain <p>Risk detection result status. Parameter values:</p><ul><li>CHECKING: in-progress detection</li><li>PASS: passed</li><li>NOT_PASS: failed</li><li>CHECK_FAILED: detection failed</li><li>NOT_INVOLVED: not involved</li><li>IGNORED: ignored</li></ul>
 * @method void setResultStatus(string $ResultStatus) Set <p>Risk detection result status. Parameter values:</p><ul><li>CHECKING: in-progress detection</li><li>PASS: passed</li><li>NOT_PASS: failed</li><li>CHECK_FAILED: detection failed</li><li>NOT_INVOLVED: not involved</li><li>IGNORED: ignored</li></ul>
 * @method string getLatestCheckTime() Obtain <p>Latest check time.</p>
 * @method void setLatestCheckTime(string $LatestCheckTime) Set <p>Latest check time.</p>
 * @method integer getItemID() Obtain <p>Baseline detection item ID.</p>
 * @method void setItemID(integer $ItemID) Set <p>Baseline detection item ID.</p>
 * @method string getRiskID() Obtain <p>Risk event ID, used for uniquely identifying this risk record.</p>
 * @method void setRiskID(string $RiskID) Set <p>Risk event ID, used for uniquely identifying this risk record.</p>
 * @method string getJobID() Obtain <p>Global JobID of this scan.</p>
 * @method void setJobID(string $JobID) Set <p>Global JobID of this scan.</p>
 */
class BaselineItemRiskRecord extends AbstractModel
{
    /**
     * @var integer <p>Risk record primary key ID.</p>
     */
    public $ID;

    /**
     * @var BaselineHostAsset <p>Risk-hit host asset information. If no data is available, this field is null.</p>
     */
    public $HostInfo;

    /**
     * @var BaselineClusterAsset <p>Cluster asset information. The value is null if no data is available.</p>
     */
    public $ClusterInfo;

    /**
     * @var string <p>Asset type of the hit asset. Value:</p><ul><li>HOST: host</li><li>CLUSTER: cluster</li><li>POD: Pod</li><li>CONTAINER: container</li><li>IMAGE: mirror</li></ul>
     */
    public $AssetType;

    /**
     * @var string <p>Risk detection result status. Parameter values:</p><ul><li>CHECKING: in-progress detection</li><li>PASS: passed</li><li>NOT_PASS: failed</li><li>CHECK_FAILED: detection failed</li><li>NOT_INVOLVED: not involved</li><li>IGNORED: ignored</li></ul>
     */
    public $ResultStatus;

    /**
     * @var string <p>Latest check time.</p>
     */
    public $LatestCheckTime;

    /**
     * @var integer <p>Baseline detection item ID.</p>
     */
    public $ItemID;

    /**
     * @var string <p>Risk event ID, used for uniquely identifying this risk record.</p>
     */
    public $RiskID;

    /**
     * @var string <p>Global JobID of this scan.</p>
     */
    public $JobID;

    /**
     * @param integer $ID <p>Risk record primary key ID.</p>
     * @param BaselineHostAsset $HostInfo <p>Risk-hit host asset information. If no data is available, this field is null.</p>
     * @param BaselineClusterAsset $ClusterInfo <p>Cluster asset information. The value is null if no data is available.</p>
     * @param string $AssetType <p>Asset type of the hit asset. Value:</p><ul><li>HOST: host</li><li>CLUSTER: cluster</li><li>POD: Pod</li><li>CONTAINER: container</li><li>IMAGE: mirror</li></ul>
     * @param string $ResultStatus <p>Risk detection result status. Parameter values:</p><ul><li>CHECKING: in-progress detection</li><li>PASS: passed</li><li>NOT_PASS: failed</li><li>CHECK_FAILED: detection failed</li><li>NOT_INVOLVED: not involved</li><li>IGNORED: ignored</li></ul>
     * @param string $LatestCheckTime <p>Latest check time.</p>
     * @param integer $ItemID <p>Baseline detection item ID.</p>
     * @param string $RiskID <p>Risk event ID, used for uniquely identifying this risk record.</p>
     * @param string $JobID <p>Global JobID of this scan.</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("HostInfo",$param) and $param["HostInfo"] !== null) {
            $this->HostInfo = new BaselineHostAsset();
            $this->HostInfo->deserialize($param["HostInfo"]);
        }

        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = new BaselineClusterAsset();
            $this->ClusterInfo->deserialize($param["ClusterInfo"]);
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("ResultStatus",$param) and $param["ResultStatus"] !== null) {
            $this->ResultStatus = $param["ResultStatus"];
        }

        if (array_key_exists("LatestCheckTime",$param) and $param["LatestCheckTime"] !== null) {
            $this->LatestCheckTime = $param["LatestCheckTime"];
        }

        if (array_key_exists("ItemID",$param) and $param["ItemID"] !== null) {
            $this->ItemID = $param["ItemID"];
        }

        if (array_key_exists("RiskID",$param) and $param["RiskID"] !== null) {
            $this->RiskID = $param["RiskID"];
        }

        if (array_key_exists("JobID",$param) and $param["JobID"] !== null) {
            $this->JobID = $param["JobID"];
        }
    }
}
