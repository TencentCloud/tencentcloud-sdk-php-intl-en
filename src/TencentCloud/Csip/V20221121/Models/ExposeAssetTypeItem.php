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
 * Exposed asset category.
 *
 * @method string getProvider() Obtain Cloud service provider.
 * @method void setProvider(string $Provider) Set Cloud service provider.
 * @method string getProviderName() Obtain Vendor name.
 * @method void setProviderName(string $ProviderName) Set Vendor name.
 * @method string getAssetType() Obtain Asset type.
 * @method void setAssetType(string $AssetType) Set Asset type.
 * @method string getAssetTypeName() Obtain Asset type name.
 * @method void setAssetTypeName(string $AssetTypeName) Set Asset type name.
 */
class ExposeAssetTypeItem extends AbstractModel
{
    /**
     * @var string Cloud service provider.
     */
    public $Provider;

    /**
     * @var string Vendor name.
     */
    public $ProviderName;

    /**
     * @var string Asset type.
     */
    public $AssetType;

    /**
     * @var string Asset type name.
     */
    public $AssetTypeName;

    /**
     * @param string $Provider Cloud service provider.
     * @param string $ProviderName Vendor name.
     * @param string $AssetType Asset type.
     * @param string $AssetTypeName Asset type name.
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
        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("ProviderName",$param) and $param["ProviderName"] !== null) {
            $this->ProviderName = $param["ProviderName"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetTypeName",$param) and $param["AssetTypeName"] !== null) {
            $this->AssetTypeName = $param["AssetTypeName"];
        }
    }
}
