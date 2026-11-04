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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Digital human configuration
 *
 * @method string getAssetKey() Obtain Digital human avatar asset id
 * @method void setAssetKey(string $AssetKey) Set Digital human avatar asset id
 * @method string getAvatar() Obtain Digital human image
 * @method void setAvatar(string $Avatar) Set Digital human image
 * @method string getName() Obtain Digital human avatar name
 * @method void setName(string $Name) Set Digital human avatar name
 * @method string getPreviewUrl() Obtain Preview address of the digital human
 * @method void setPreviewUrl(string $PreviewUrl) Set Preview address of the digital human
 */
class DigitalHumanConfig extends AbstractModel
{
    /**
     * @var string Digital human avatar asset id
     */
    public $AssetKey;

    /**
     * @var string Digital human image
     */
    public $Avatar;

    /**
     * @var string Digital human avatar name
     */
    public $Name;

    /**
     * @var string Preview address of the digital human
     */
    public $PreviewUrl;

    /**
     * @param string $AssetKey Digital human avatar asset id
     * @param string $Avatar Digital human image
     * @param string $Name Digital human avatar name
     * @param string $PreviewUrl Preview address of the digital human
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

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PreviewUrl",$param) and $param["PreviewUrl"] !== null) {
            $this->PreviewUrl = $param["PreviewUrl"];
        }
    }
}
