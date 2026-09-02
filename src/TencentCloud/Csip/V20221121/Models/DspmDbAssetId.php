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
 * Database asset Id information
 *
 * @method string getAssetId() Obtain Asset instance ID.
 * @method void setAssetId(string $AssetId) Set Asset instance ID.
 * @method string getAssetType() Obtain Asset type
 * @method void setAssetType(string $AssetType) Set Asset type
 * @method string getName() Obtain Asset name
 * @method void setName(string $Name) Set Asset name
 * @method integer getId() Obtain Asset record id
 * @method void setId(integer $Id) Set Asset record id
 * @method integer getAppId() Obtain app id of the account that owns the asset
 * @method void setAppId(integer $AppId) Set app id of the account that owns the asset
 * @method string getNickName() Obtain Account nickname
 * @method void setNickName(string $NickName) Set Account nickname
 * @method string getUin() Obtain Account uin of the asset owner
 * @method void setUin(string $Uin) Set Account uin of the asset owner
 */
class DspmDbAssetId extends AbstractModel
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
     * @var string Asset name
     */
    public $Name;

    /**
     * @var integer Asset record id
     */
    public $Id;

    /**
     * @var integer app id of the account that owns the asset
     */
    public $AppId;

    /**
     * @var string Account nickname
     */
    public $NickName;

    /**
     * @var string Account uin of the asset owner
     */
    public $Uin;

    /**
     * @param string $AssetId Asset instance ID.
     * @param string $AssetType Asset type
     * @param string $Name Asset name
     * @param integer $Id Asset record id
     * @param integer $AppId app id of the account that owns the asset
     * @param string $NickName Account nickname
     * @param string $Uin Account uin of the asset owner
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
