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
 * Dspm asset instance
 *
 * @method string getAssetId() Obtain Asset instance ID.
 * @method void setAssetId(string $AssetId) Set Asset instance ID.
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method string getRegion() Obtain Region.
 * @method void setRegion(string $Region) Set Region.
 * @method integer getAppId() Obtain app id of the asset owner account
 * @method void setAppId(integer $AppId) Set app id of the asset owner account
 */
class DspmAssetInstance extends AbstractModel
{
    /**
     * @var string Asset instance ID.
     */
    public $AssetId;

    /**
     * @var string Asset type
     */
    public $AssetType;

    /**
     * @var string Region.
     */
    public $Region;

    /**
     * @var integer app id of the asset owner account
     */
    public $AppId;

    /**
     * @param string $AssetId Asset instance ID.
     * @param string $AssetType Asset type
     * @param string $Region Region.
     * @param integer $AppId app id of the asset owner account
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
