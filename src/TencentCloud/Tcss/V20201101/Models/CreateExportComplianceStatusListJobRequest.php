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
 * CreateExportComplianceStatusListJob request structure.
 *
 * @method string getAssetType() Obtain Asset type of the information to be exported
 * @method void setAssetType(string $AssetType) Set Asset type of the information to be exported
 * @method boolean getExportByAsset() Obtain Export by check item or asset. Valid values: `true` (export by asset); `false` (export by check item).
 * @method void setExportByAsset(boolean $ExportByAsset) Set Export by check item or asset. Valid values: `true` (export by asset); `false` (export by check item).
 * @method boolean getExportAll() Obtain Valid values: `true` (export all); `false` (export based on the `IdList`).
 * @method void setExportAll(boolean $ExportAll) Set Valid values: `true` (export all); `false` (export based on the `IdList`).
 * @method array getIdList() Obtain List of IDs of assets or check items to be exported, which is determined by the value of `ExportByAsset`.
 * @method void setIdList(array $IdList) Set List of IDs of assets or check items to be exported, which is determined by the value of `ExportByAsset`.
 */
class CreateExportComplianceStatusListJobRequest extends AbstractModel
{
    /**
     * @var string Asset type of the information to be exported
     */
    public $AssetType;

    /**
     * @var boolean Export by check item or asset. Valid values: `true` (export by asset); `false` (export by check item).
     */
    public $ExportByAsset;

    /**
     * @var boolean Valid values: `true` (export all); `false` (export based on the `IdList`).
     */
    public $ExportAll;

    /**
     * @var array List of IDs of assets or check items to be exported, which is determined by the value of `ExportByAsset`.
     */
    public $IdList;

    /**
     * @param string $AssetType Asset type of the information to be exported
     * @param boolean $ExportByAsset Export by check item or asset. Valid values: `true` (export by asset); `false` (export by check item).
     * @param boolean $ExportAll Valid values: `true` (export all); `false` (export based on the `IdList`).
     * @param array $IdList List of IDs of assets or check items to be exported, which is determined by the value of `ExportByAsset`.
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

        if (array_key_exists("ExportByAsset",$param) and $param["ExportByAsset"] !== null) {
            $this->ExportByAsset = $param["ExportByAsset"];
        }

        if (array_key_exists("ExportAll",$param) and $param["ExportAll"] !== null) {
            $this->ExportAll = $param["ExportAll"];
        }

        if (array_key_exists("IdList",$param) and $param["IdList"] !== null) {
            $this->IdList = $param["IdList"];
        }
    }
}
