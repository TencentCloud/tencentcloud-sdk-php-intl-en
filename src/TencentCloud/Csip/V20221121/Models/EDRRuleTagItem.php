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
 * Security center tag
 *
 * @method integer getID() Obtain <p>Security center tag ID</p>
 * @method void setID(integer $ID) Set <p>Security center tag ID</p>
 * @method string getTagKey() Obtain <p>Tag Key in Chinese</p>
 * @method void setTagKey(string $TagKey) Set <p>Tag Key in Chinese</p>
 * @method string getTagKeyEn() Obtain <p>Tag English key</p>
 * @method void setTagKeyEn(string $TagKeyEn) Set <p>Tag English key</p>
 * @method string getTagValue() Obtain <p>Tag Chinese value</p>
 * @method void setTagValue(string $TagValue) Set <p>Tag Chinese value</p>
 * @method string getTagValueEn() Obtain <p>Tag value in English.</p>
 * @method void setTagValueEn(string $TagValueEn) Set <p>Tag value in English.</p>
 * @method string getDescription() Obtain <p>Tag description</p>
 * @method void setDescription(string $Description) Set <p>Tag description</p>
 * @method string getColor() Obtain <p>Tag color</p>
 * @method void setColor(string $Color) Set <p>Tag color</p>
 */
class EDRRuleTagItem extends AbstractModel
{
    /**
     * @var integer <p>Security center tag ID</p>
     */
    public $ID;

    /**
     * @var string <p>Tag Key in Chinese</p>
     */
    public $TagKey;

    /**
     * @var string <p>Tag English key</p>
     */
    public $TagKeyEn;

    /**
     * @var string <p>Tag Chinese value</p>
     */
    public $TagValue;

    /**
     * @var string <p>Tag value in English.</p>
     */
    public $TagValueEn;

    /**
     * @var string <p>Tag description</p>
     */
    public $Description;

    /**
     * @var string <p>Tag color</p>
     */
    public $Color;

    /**
     * @param integer $ID <p>Security center tag ID</p>
     * @param string $TagKey <p>Tag Key in Chinese</p>
     * @param string $TagKeyEn <p>Tag English key</p>
     * @param string $TagValue <p>Tag Chinese value</p>
     * @param string $TagValueEn <p>Tag value in English.</p>
     * @param string $Description <p>Tag description</p>
     * @param string $Color <p>Tag color</p>
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

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagKeyEn",$param) and $param["TagKeyEn"] !== null) {
            $this->TagKeyEn = $param["TagKeyEn"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }

        if (array_key_exists("TagValueEn",$param) and $param["TagValueEn"] !== null) {
            $this->TagValueEn = $param["TagValueEn"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }
    }
}
