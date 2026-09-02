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
 * Baseline risk repair history
 *
 * @method integer getID() Obtain <p>Primary key ID of the correction record.</p>
 * @method void setID(integer $ID) Set <p>Primary key ID of the correction record.</p>
 * @method integer getAppID() Obtain <p>Tenant AppID.</p>
 * @method void setAppID(integer $AppID) Set <p>Tenant AppID.</p>
 * @method BaselineItem getItemInfo() Obtain <p>Basic information of the repaired detection item.</p>
 * @method void setItemInfo(BaselineItem $ItemInfo) Set <p>Basic information of the repaired detection item.</p>
 * @method BaselineHostAsset getHostInfo() Obtain <p>Host asset information involved in this fix. null when no data is available.</p>
 * @method void setHostInfo(BaselineHostAsset $HostInfo) Set <p>Host asset information involved in this fix. null when no data is available.</p>
 * @method BaselineClusterAsset getClusterInfo() Obtain <p>Cluster asset information. The value is null if no data is available.</p>
 * @method void setClusterInfo(BaselineClusterAsset $ClusterInfo) Set <p>Cluster asset information. The value is null if no data is available.</p>
 * @method string getAssetType() Obtain <p>Asset type: HOST (host), CLUSTER (container cluster).</p>
 * @method void setAssetType(string $AssetType) Set <p>Asset type: HOST (host), CLUSTER (container cluster).</p>
 * @method string getFixTime() Obtain <p>Repair completion time.</p>
 * @method void setFixTime(string $FixTime) Set <p>Repair completion time.</p>
 * @method string getDiscoveryTime() Obtain <p>The time when the risk was first detected.</p>
 * @method void setDiscoveryTime(string $DiscoveryTime) Set <p>The time when the risk was first detected.</p>
 */
class BaselineFixRecord extends AbstractModel
{
    /**
     * @var integer <p>Primary key ID of the correction record.</p>
     */
    public $ID;

    /**
     * @var integer <p>Tenant AppID.</p>
     */
    public $AppID;

    /**
     * @var BaselineItem <p>Basic information of the repaired detection item.</p>
     */
    public $ItemInfo;

    /**
     * @var BaselineHostAsset <p>Host asset information involved in this fix. null when no data is available.</p>
     */
    public $HostInfo;

    /**
     * @var BaselineClusterAsset <p>Cluster asset information. The value is null if no data is available.</p>
     */
    public $ClusterInfo;

    /**
     * @var string <p>Asset type: HOST (host), CLUSTER (container cluster).</p>
     */
    public $AssetType;

    /**
     * @var string <p>Repair completion time.</p>
     */
    public $FixTime;

    /**
     * @var string <p>The time when the risk was first detected.</p>
     */
    public $DiscoveryTime;

    /**
     * @param integer $ID <p>Primary key ID of the correction record.</p>
     * @param integer $AppID <p>Tenant AppID.</p>
     * @param BaselineItem $ItemInfo <p>Basic information of the repaired detection item.</p>
     * @param BaselineHostAsset $HostInfo <p>Host asset information involved in this fix. null when no data is available.</p>
     * @param BaselineClusterAsset $ClusterInfo <p>Cluster asset information. The value is null if no data is available.</p>
     * @param string $AssetType <p>Asset type: HOST (host), CLUSTER (container cluster).</p>
     * @param string $FixTime <p>Repair completion time.</p>
     * @param string $DiscoveryTime <p>The time when the risk was first detected.</p>
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

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ItemInfo",$param) and $param["ItemInfo"] !== null) {
            $this->ItemInfo = new BaselineItem();
            $this->ItemInfo->deserialize($param["ItemInfo"]);
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

        if (array_key_exists("FixTime",$param) and $param["FixTime"] !== null) {
            $this->FixTime = $param["FixTime"];
        }

        if (array_key_exists("DiscoveryTime",$param) and $param["DiscoveryTime"] !== null) {
            $this->DiscoveryTime = $param["DiscoveryTime"];
        }
    }
}
