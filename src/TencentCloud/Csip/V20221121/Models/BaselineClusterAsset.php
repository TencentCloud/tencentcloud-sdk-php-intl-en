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
 * Baseline cluster asset.
 *
 * @method string getClusterID() Obtain <p>Cluster ID.</p>
 * @method void setClusterID(string $ClusterID) Set <p>Cluster ID.</p>
 * @method string getClusterName() Obtain <p>Cluster name.</p>
 * @method void setClusterName(string $ClusterName) Set <p>Cluster name.</p>
 * @method string getClusterType() Obtain <p>Cluster type.</p>
 * @method void setClusterType(string $ClusterType) Set <p>Cluster type.</p>
 * @method integer getNodeCount() Obtain <p>Total nodes in the cluster.</p>
 * @method void setNodeCount(integer $NodeCount) Set <p>Total nodes in the cluster.</p>
 * @method integer getOnlineNodeCount() Obtain <p>Number of online nodes in the cluster.</p>
 * @method void setOnlineNodeCount(integer $OnlineNodeCount) Set <p>Number of online nodes in the cluster.</p>
 * @method integer getAppid() Obtain <p>Appid of the tenant associated with the cluster.</p>
 * @method void setAppid(integer $Appid) Set <p>Appid of the tenant associated with the cluster.</p>
 * @method string getAssetName() Obtain <p>Cluster sub-asset name (Pod name/Node name/Container name/Namespace name; cluster name for CLUSTER type).</p>
 * @method void setAssetName(string $AssetName) Set <p>Cluster sub-asset name (Pod name/Node name/Container name/Namespace name; cluster name for CLUSTER type).</p>
 */
class BaselineClusterAsset extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $ClusterID;

    /**
     * @var string <p>Cluster name.</p>
     */
    public $ClusterName;

    /**
     * @var string <p>Cluster type.</p>
     */
    public $ClusterType;

    /**
     * @var integer <p>Total nodes in the cluster.</p>
     */
    public $NodeCount;

    /**
     * @var integer <p>Number of online nodes in the cluster.</p>
     */
    public $OnlineNodeCount;

    /**
     * @var integer <p>Appid of the tenant associated with the cluster.</p>
     */
    public $Appid;

    /**
     * @var string <p>Cluster sub-asset name (Pod name/Node name/Container name/Namespace name; cluster name for CLUSTER type).</p>
     */
    public $AssetName;

    /**
     * @param string $ClusterID <p>Cluster ID.</p>
     * @param string $ClusterName <p>Cluster name.</p>
     * @param string $ClusterType <p>Cluster type.</p>
     * @param integer $NodeCount <p>Total nodes in the cluster.</p>
     * @param integer $OnlineNodeCount <p>Number of online nodes in the cluster.</p>
     * @param integer $Appid <p>Appid of the tenant associated with the cluster.</p>
     * @param string $AssetName <p>Cluster sub-asset name (Pod name/Node name/Container name/Namespace name; cluster name for CLUSTER type).</p>
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("OnlineNodeCount",$param) and $param["OnlineNodeCount"] !== null) {
            $this->OnlineNodeCount = $param["OnlineNodeCount"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }
    }
}
