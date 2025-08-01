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
 * DescribeComplianceTaskPolicyItemSummaryList request structure.
 *
 * @method string getAssetType() Obtain Asset type, which indicates to only query check items related to the specified asset type.

`ASSET_CONTAINER`: Container.

`ASSET_IMAGE`: Image.

`ASSET_HOST`: Server.

`ASSET_K8S`: K8s asset.
 * @method void setAssetType(string $AssetType) Set Asset type, which indicates to only query check items related to the specified asset type.

`ASSET_CONTAINER`: Container.

`ASSET_IMAGE`: Image.

`ASSET_HOST`: Server.

`ASSET_K8S`: K8s asset.
 * @method integer getOffset() Obtain Initial offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Initial offset. Default value: `0`.
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method array getFilters() Obtain Filter
Name - String
Name. Valid values: `ItemType`, `StandardId`, `RiskLevel`.
`ClusterName` is also available for K8s assets.
 * @method void setFilters(array $Filters) Set Filter
Name - String
Name. Valid values: `ItemType`, `StandardId`, `RiskLevel`.
`ClusterName` is also available for K8s assets.
 */
class DescribeComplianceTaskPolicyItemSummaryListRequest extends AbstractModel
{
    /**
     * @var string Asset type, which indicates to only query check items related to the specified asset type.

`ASSET_CONTAINER`: Container.

`ASSET_IMAGE`: Image.

`ASSET_HOST`: Server.

`ASSET_K8S`: K8s asset.
     */
    public $AssetType;

    /**
     * @var integer Initial offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Number of results to be returned. Default value: `10`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var array Filter
Name - String
Name. Valid values: `ItemType`, `StandardId`, `RiskLevel`.
`ClusterName` is also available for K8s assets.
     */
    public $Filters;

    /**
     * @param string $AssetType Asset type, which indicates to only query check items related to the specified asset type.

`ASSET_CONTAINER`: Container.

`ASSET_IMAGE`: Image.

`ASSET_HOST`: Server.

`ASSET_K8S`: K8s asset.
     * @param integer $Offset Initial offset. Default value: `0`.
     * @param integer $Limit Number of results to be returned. Default value: `10`. Maximum value: `100`.
     * @param array $Filters Filter
Name - String
Name. Valid values: `ItemType`, `StandardId`, `RiskLevel`.
`ClusterName` is also available for K8s assets.
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
        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ComplianceFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
