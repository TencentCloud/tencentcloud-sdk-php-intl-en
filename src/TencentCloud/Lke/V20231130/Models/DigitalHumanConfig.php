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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Digital Human Configuration
 *
 * @method string getAssetKey() Obtain Digital Human Asset key
 * @method void setAssetKey(string $AssetKey) Set Digital Human Asset key
 * @method string getName() Obtain Digital Human Name
 * @method void setName(string $Name) Set Digital Human Name
 * @method string getAvatar() Obtain Image
 * @method void setAvatar(string $Avatar) Set Image
 */
class DigitalHumanConfig extends AbstractModel
{
    /**
     * @var string Digital Human Asset key
     */
    public $AssetKey;

    /**
     * @var string Digital Human Name
     */
    public $Name;

    /**
     * @var string Image
     */
    public $Avatar;

    /**
     * @param string $AssetKey Digital Human Asset key
     * @param string $Name Digital Human Name
     * @param string $Avatar Image
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
        if (array_key_exists("AssetKey",$param) and $param["AssetKey"] !== null) {
            $this->AssetKey = $param["AssetKey"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }
    }
}
