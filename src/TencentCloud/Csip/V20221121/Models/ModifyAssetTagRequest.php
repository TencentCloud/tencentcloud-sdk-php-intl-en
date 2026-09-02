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
 * ModifyAssetTag request structure.
 *
 * @method string getKey() Obtain <p>Tag key</p>
 * @method void setKey(string $Key) Set <p>Tag key</p>
 * @method string getValue() Obtain <p>Tag value.</p>
 * @method void setValue(string $Value) Set <p>Tag value.</p>
 * @method integer getTagID() Obtain <p>Tag ID</p>
 * @method void setTagID(integer $TagID) Set <p>Tag ID</p>
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 * @method string getColor() Obtain <p>Color</p>
 * @method void setColor(string $Color) Set <p>Color</p>
 * @method string getDescription() Obtain <p>Description.</p>
 * @method void setDescription(string $Description) Set <p>Description.</p>
 * @method string getTaggingRule() Obtain <p>Tagging policy.</p>
 * @method void setTaggingRule(string $TaggingRule) Set <p>Tagging policy.</p>
 * @method boolean getApplyNow() Obtain <p>Whether to execute asset tagging immediately</p>
 * @method void setApplyNow(boolean $ApplyNow) Set <p>Whether to execute asset tagging immediately</p>
 */
class ModifyAssetTagRequest extends AbstractModel
{
    /**
     * @var string <p>Tag key</p>
     */
    public $Key;

    /**
     * @var string <p>Tag value.</p>
     */
    public $Value;

    /**
     * @var integer <p>Tag ID</p>
     */
    public $TagID;

    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @var string <p>Color</p>
     */
    public $Color;

    /**
     * @var string <p>Description.</p>
     */
    public $Description;

    /**
     * @var string <p>Tagging policy.</p>
     */
    public $TaggingRule;

    /**
     * @var boolean <p>Whether to execute asset tagging immediately</p>
     */
    public $ApplyNow;

    /**
     * @param string $Key <p>Tag key</p>
     * @param string $Value <p>Tag value.</p>
     * @param integer $TagID <p>Tag ID</p>
     * @param array $MemberId <p>Group account member id.</p>
     * @param string $Color <p>Color</p>
     * @param string $Description <p>Description.</p>
     * @param string $TaggingRule <p>Tagging policy.</p>
     * @param boolean $ApplyNow <p>Whether to execute asset tagging immediately</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("TagID",$param) and $param["TagID"] !== null) {
            $this->TagID = $param["TagID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("TaggingRule",$param) and $param["TaggingRule"] !== null) {
            $this->TaggingRule = $param["TaggingRule"];
        }

        if (array_key_exists("ApplyNow",$param) and $param["ApplyNow"] !== null) {
            $this->ApplyNow = $param["ApplyNow"];
        }
    }
}
