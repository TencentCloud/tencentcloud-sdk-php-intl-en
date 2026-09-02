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
 * Dspm asset statistics by type
 *
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method integer getOpenCount() Obtain Number of activations enabled for asset security analysis
 * @method void setOpenCount(integer $OpenCount) Set Number of activations enabled for asset security analysis
 * @method integer getOpeningCount() Obtain Number of activations being enabled for asset security analysis
 * @method void setOpeningCount(integer $OpeningCount) Set Number of activations being enabled for asset security analysis
 * @method integer getClosingCount() Obtain Number of assets whose security analysis is being disabled
 * @method void setClosingCount(integer $ClosingCount) Set Number of assets whose security analysis is being disabled
 * @method integer getCloseCount() Obtain Number of activations not enabled for asset security analysis
 * @method void setCloseCount(integer $CloseCount) Set Number of activations not enabled for asset security analysis
 */
class DspmAssetTypeCount extends AbstractModel
{
    /**
     * @var string Asset type
     */
    public $AssetType;

    /**
     * @var integer Number of activations enabled for asset security analysis
     */
    public $OpenCount;

    /**
     * @var integer Number of activations being enabled for asset security analysis
     */
    public $OpeningCount;

    /**
     * @var integer Number of assets whose security analysis is being disabled
     */
    public $ClosingCount;

    /**
     * @var integer Number of activations not enabled for asset security analysis
     */
    public $CloseCount;

    /**
     * @param string $AssetType Asset type
     * @param integer $OpenCount Number of activations enabled for asset security analysis
     * @param integer $OpeningCount Number of activations being enabled for asset security analysis
     * @param integer $ClosingCount Number of assets whose security analysis is being disabled
     * @param integer $CloseCount Number of activations not enabled for asset security analysis
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

        if (array_key_exists("OpenCount",$param) and $param["OpenCount"] !== null) {
            $this->OpenCount = $param["OpenCount"];
        }

        if (array_key_exists("OpeningCount",$param) and $param["OpeningCount"] !== null) {
            $this->OpeningCount = $param["OpeningCount"];
        }

        if (array_key_exists("ClosingCount",$param) and $param["ClosingCount"] !== null) {
            $this->ClosingCount = $param["ClosingCount"];
        }

        if (array_key_exists("CloseCount",$param) and $param["CloseCount"] !== null) {
            $this->CloseCount = $param["CloseCount"];
        }
    }
}
