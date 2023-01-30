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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateComplianceTask request structure.
 *
 * @method array getAssetTypeSet() Obtain List of asset types to be scanned
`ASSET_CONTAINER`: Container.
`ASSET_IMAGE`: Image.
`ASSET_HOST`: Server.
`ASSET_K8S`: K8s asset.
A valid value must be entered for the `AssetTypeSet`, `PolicySetId`, or `PeriodTaskId` parameter.
 * @method void setAssetTypeSet(array $AssetTypeSet) Set List of asset types to be scanned
`ASSET_CONTAINER`: Container.
`ASSET_IMAGE`: Image.
`ASSET_HOST`: Server.
`ASSET_K8S`: K8s asset.
A valid value must be entered for the `AssetTypeSet`, `PolicySetId`, or `PeriodTaskId` parameter.
 * @method integer getPolicySetId() Obtain Policy set ID
 * @method void setPolicySetId(integer $PolicySetId) Set Policy set ID
 * @method integer getPeriodTaskId() Obtain Scheduled task ID
 * @method void setPeriodTaskId(integer $PeriodTaskId) Set Scheduled task ID
 */
class CreateComplianceTaskRequest extends AbstractModel
{
    /**
     * @var array List of asset types to be scanned
`ASSET_CONTAINER`: Container.
`ASSET_IMAGE`: Image.
`ASSET_HOST`: Server.
`ASSET_K8S`: K8s asset.
A valid value must be entered for the `AssetTypeSet`, `PolicySetId`, or `PeriodTaskId` parameter.
     */
    public $AssetTypeSet;

    /**
     * @var integer Policy set ID
     */
    public $PolicySetId;

    /**
     * @var integer Scheduled task ID
     */
    public $PeriodTaskId;

    /**
     * @param array $AssetTypeSet List of asset types to be scanned
`ASSET_CONTAINER`: Container.
`ASSET_IMAGE`: Image.
`ASSET_HOST`: Server.
`ASSET_K8S`: K8s asset.
A valid value must be entered for the `AssetTypeSet`, `PolicySetId`, or `PeriodTaskId` parameter.
     * @param integer $PolicySetId Policy set ID
     * @param integer $PeriodTaskId Scheduled task ID
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
        if (array_key_exists("AssetTypeSet",$param) and $param["AssetTypeSet"] !== null) {
            $this->AssetTypeSet = $param["AssetTypeSet"];
        }

        if (array_key_exists("PolicySetId",$param) and $param["PolicySetId"] !== null) {
            $this->PolicySetId = $param["PolicySetId"];
        }

        if (array_key_exists("PeriodTaskId",$param) and $param["PeriodTaskId"] !== null) {
            $this->PeriodTaskId = $param["PeriodTaskId"];
        }
    }
}
