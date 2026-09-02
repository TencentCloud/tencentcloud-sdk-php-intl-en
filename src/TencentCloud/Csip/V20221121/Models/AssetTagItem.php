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
 * Asset tag element
 *
 * @method integer getID() Obtain <p>Tag ID</p>
 * @method void setID(integer $ID) Set <p>Tag ID</p>
 * @method integer getAppID() Obtain <p>appid</p>
 * @method void setAppID(integer $AppID) Set <p>appid</p>
 * @method string getTagKey() Obtain <p>Tag key</p>
 * @method void setTagKey(string $TagKey) Set <p>Tag key</p>
 * @method string getTagValue() Obtain <p>Tag value</p>
 * @method void setTagValue(string $TagValue) Set <p>Tag value</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method string getTaggingRule() Obtain <p>Automatic tagging policy</p>
 * @method void setTaggingRule(string $TaggingRule) Set <p>Automatic tagging policy</p>
 * @method string getColor() Obtain <p>Tag color</p>
 * @method void setColor(string $Color) Set <p>Tag color</p>
 * @method integer getAssetCount() Obtain <p>Number of assets bound to a tag</p>
 * @method void setAssetCount(integer $AssetCount) Set <p>Number of assets bound to a tag</p>
 * @method string getCreateTime() Obtain <p>Creation time.</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time.</p>
 * @method string getUpdateTime() Obtain <p>Update time.</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time.</p>
 */
class AssetTagItem extends AbstractModel
{
    /**
     * @var integer <p>Tag ID</p>
     */
    public $ID;

    /**
     * @var integer <p>appid</p>
     */
    public $AppID;

    /**
     * @var string <p>Tag key</p>
     */
    public $TagKey;

    /**
     * @var string <p>Tag value</p>
     */
    public $TagValue;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var string <p>Automatic tagging policy</p>
     */
    public $TaggingRule;

    /**
     * @var string <p>Tag color</p>
     */
    public $Color;

    /**
     * @var integer <p>Number of assets bound to a tag</p>
     */
    public $AssetCount;

    /**
     * @var string <p>Creation time.</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Update time.</p>
     */
    public $UpdateTime;

    /**
     * @param integer $ID <p>Tag ID</p>
     * @param integer $AppID <p>appid</p>
     * @param string $TagKey <p>Tag key</p>
     * @param string $TagValue <p>Tag value</p>
     * @param string $Description <p>Description.</p>
     * @param string $TaggingRule <p>Automatic tagging policy</p>
     * @param string $Color <p>Tag color</p>
     * @param integer $AssetCount <p>Number of assets bound to a tag</p>
     * @param string $CreateTime <p>Creation time.</p>
     * @param string $UpdateTime <p>Update time.</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TaggingRule",$param) and $param["TaggingRule"] !== null) {
            $this->TaggingRule = $param["TaggingRule"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
