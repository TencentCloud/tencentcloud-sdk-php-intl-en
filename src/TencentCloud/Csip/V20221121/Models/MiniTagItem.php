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
 * Brief asset tag element for CSIP internal use.
 *
 * @method string getColor() Obtain Tag display color.
 * @method void setColor(string $Color) Set Tag display color.
 * @method string getDescription() Obtain Tag description.
 * @method void setDescription(string $Description) Set Tag description.
 * @method integer getID() Obtain Tag ID.
 * @method void setID(integer $ID) Set Tag ID.
 * @method string getTagKey() Obtain Tag key (Chinese).
 * @method void setTagKey(string $TagKey) Set Tag key (Chinese).
 * @method string getTagValue() Obtain Tag value (Chinese).
 * @method void setTagValue(string $TagValue) Set Tag value (Chinese).
 * @method string getTagKeyEn() Obtain Tag key (English).
 * @method void setTagKeyEn(string $TagKeyEn) Set Tag key (English).
 * @method string getTagValueEn() Obtain Tag value (English).
 * @method void setTagValueEn(string $TagValueEn) Set Tag value (English).
 */
class MiniTagItem extends AbstractModel
{
    /**
     * @var string Tag display color.
     */
    public $Color;

    /**
     * @var string Tag description.
     */
    public $Description;

    /**
     * @var integer Tag ID.
     */
    public $ID;

    /**
     * @var string Tag key (Chinese).
     */
    public $TagKey;

    /**
     * @var string Tag value (Chinese).
     */
    public $TagValue;

    /**
     * @var string Tag key (English).
     */
    public $TagKeyEn;

    /**
     * @var string Tag value (English).
     */
    public $TagValueEn;

    /**
     * @param string $Color Tag display color.
     * @param string $Description Tag description.
     * @param integer $ID Tag ID.
     * @param string $TagKey Tag key (Chinese).
     * @param string $TagValue Tag value (Chinese).
     * @param string $TagKeyEn Tag key (English).
     * @param string $TagValueEn Tag value (English).
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
        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("TagKeyEn",$param) and $param["TagKeyEn"] !== null) {
            $this->TagKeyEn = $param["TagKeyEn"];
        }

        if (array_key_exists("TagValueEn",$param) and $param["TagValueEn"] !== null) {
            $this->TagValueEn = $param["TagValueEn"];
        }
    }
}
