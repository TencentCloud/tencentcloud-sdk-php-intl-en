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
 * DeleteComplianceAssetPolicySetFromWhitelist request structure.
 *
 * @method integer getAssetItemId() Obtain Asset ID
 * @method void setAssetItemId(integer $AssetItemId) Set Asset ID
 * @method array getCustomerPolicyItemIdSet() Obtain List of IDs of check items to be ignored in the specified asset
 * @method void setCustomerPolicyItemIdSet(array $CustomerPolicyItemIdSet) Set List of IDs of check items to be ignored in the specified asset
 * @method string getAssetType() Obtain Type of assets to be scanned. <li>ASSET_CONTAINER: Docker container.</li> <li>ASSET_IMAGE: Docker image.</li> <li>ASSET_HOST: Docker host.</li> <li>ASSET_K8S: Kubernetes.</li> <li>ASSET_CONTAINERD: containerd host.</li> <li>ASSET_CONTAINERD_CONTAINER: containerd container.</li>
 * @method void setAssetType(string $AssetType) Set Type of assets to be scanned. <li>ASSET_CONTAINER: Docker container.</li> <li>ASSET_IMAGE: Docker image.</li> <li>ASSET_HOST: Docker host.</li> <li>ASSET_K8S: Kubernetes.</li> <li>ASSET_CONTAINERD: containerd host.</li> <li>ASSET_CONTAINERD_CONTAINER: containerd container.</li>
 */
class DeleteComplianceAssetPolicySetFromWhitelistRequest extends AbstractModel
{
    /**
     * @var integer Asset ID
     */
    public $AssetItemId;

    /**
     * @var array List of IDs of check items to be ignored in the specified asset
     */
    public $CustomerPolicyItemIdSet;

    /**
     * @var string Type of assets to be scanned. <li>ASSET_CONTAINER: Docker container.</li> <li>ASSET_IMAGE: Docker image.</li> <li>ASSET_HOST: Docker host.</li> <li>ASSET_K8S: Kubernetes.</li> <li>ASSET_CONTAINERD: containerd host.</li> <li>ASSET_CONTAINERD_CONTAINER: containerd container.</li>
     */
    public $AssetType;

    /**
     * @param integer $AssetItemId Asset ID
     * @param array $CustomerPolicyItemIdSet List of IDs of check items to be ignored in the specified asset
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
        if (array_key_exists("AssetItemId",$param) and $param["AssetItemId"] !== null) {
            $this->AssetItemId = $param["AssetItemId"];
        }

        if (array_key_exists("CustomerPolicyItemIdSet",$param) and $param["CustomerPolicyItemIdSet"] !== null) {
            $this->CustomerPolicyItemIdSet = $param["CustomerPolicyItemIdSet"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }
    }
}
