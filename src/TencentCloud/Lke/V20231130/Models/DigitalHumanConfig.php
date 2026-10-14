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
 * Digital human configuration
 *
 * @method string getAssetKey() Obtain Digital human asset key
 * @method void setAssetKey(string $AssetKey) Set Digital human asset key
 * @method string getName() Obtain Digital human name
 * @method void setName(string $Name) Set Digital human name
 * @method string getAvatar() Obtain image
 * @method void setAvatar(string $Avatar) Set image
 * @method string getPreviewUrl() Obtain Preview image
 * @method void setPreviewUrl(string $PreviewUrl) Set Preview image
 */
class DigitalHumanConfig extends AbstractModel
{
    /**
     * @var string Digital human asset key
     */
    public $AssetKey;

    /**
     * @var string Digital human name
     */
    public $Name;

    /**
     * @var string image
     */
    public $Avatar;

    /**
     * @var string Preview image
     */
    public $PreviewUrl;

    /**
     * @param string $AssetKey Digital human asset key
     * @param string $Name Digital human name
     * @param string $Avatar image
     * @param string $PreviewUrl Preview image
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

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }
    }
}
