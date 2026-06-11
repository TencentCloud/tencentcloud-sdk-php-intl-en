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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanComplianceAssets request structure.
 *
 * @method array getCustomerAssetIdSet() Obtain List of IDs of customer assets to be scanned again
 * @method void setCustomerAssetIdSet(array $CustomerAssetIdSet) Set List of IDs of customer assets to be scanned again
 * @method string getAssetType() Obtain Type of assets to be scanned. <li>ASSET_CONTAINER: Docker container.</li> <li>ASSET_IMAGE: Docker image.</li> <li>ASSET_HOST: Docker host.</li> <li>ASSET_K8S: Kubernetes.</li> <li>ASSET_CONTAINERD: containerd host.</li> <li>ASSET_CONTAINERD_CONTAINER: containerd container.</li>
 * @method void setAssetType(string $AssetType) Set Type of assets to be scanned. <li>ASSET_CONTAINER: Docker container.</li> <li>ASSET_IMAGE: Docker image.</li> <li>ASSET_HOST: Docker host.</li> <li>ASSET_K8S: Kubernetes.</li> <li>ASSET_CONTAINERD: containerd host.</li> <li>ASSET_CONTAINERD_CONTAINER: containerd container.</li>
 */
class ScanComplianceAssetsRequest extends AbstractModel
{
    /**
     * @var array List of IDs of customer assets to be scanned again
     */
    public $CustomerAssetIdSet;

    /**
     * @var string Type of assets to be scanned. <li>ASSET_CONTAINER: Docker container.</li> <li>ASSET_IMAGE: Docker image.</li> <li>ASSET_HOST: Docker host.</li> <li>ASSET_K8S: Kubernetes.</li> <li>ASSET_CONTAINERD: containerd host.</li> <li>ASSET_CONTAINERD_CONTAINER: containerd container.</li>
     */
    public $AssetType;

    /**
     * @param array $CustomerAssetIdSet List of IDs of customer assets to be scanned again
     * @param string $AssetType Type of assets to be scanned. <li>ASSET_CONTAINER: Docker container.</li> <li>ASSET_IMAGE: Docker image.</li> <li>ASSET_HOST: Docker host.</li> <li>ASSET_K8S: Kubernetes.</li> <li>ASSET_CONTAINERD: containerd host.</li> <li>ASSET_CONTAINERD_CONTAINER: containerd container.</li>
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
        if (array_key_exists("CustomerAssetIdSet",$param) and $param["CustomerAssetIdSet"] !== null) {
            $this->CustomerAssetIdSet = $param["CustomerAssetIdSet"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
