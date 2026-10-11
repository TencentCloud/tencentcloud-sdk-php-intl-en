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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScanAsset request structure.
 *
 * @method array getAssetTypeIds() Obtain Asset fingerprint type id list
 * @method void setAssetTypeIds(array $AssetTypeIds) Set Asset fingerprint type id list
 * @method array getQuuids() Obtain Quuid list
 * @method void setQuuids(array $Quuids) Set Quuid list
 */
class ScanAssetRequest extends AbstractModel
{
    /**
     * @var array Asset fingerprint type id list
     */
    public $AssetTypeIds;

    /**
     * @var array Quuid list
     */
    public $Quuids;

    /**
     * @param array $AssetTypeIds Asset fingerprint type id list
     * @param array $Quuids Quuid list
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
        if (array_key_exists("AssetTypeIds",$param) and $param["AssetTypeIds"] !== null) {
            $this->AssetTypeIds = $param["AssetTypeIds"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }
    }
}
