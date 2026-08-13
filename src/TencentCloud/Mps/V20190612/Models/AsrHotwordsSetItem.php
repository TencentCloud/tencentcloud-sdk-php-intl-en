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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on a single hotword.
 *
 * @method integer getId() Obtain Serial number of the hot word
 * @method void setId(integer $Id) Set Serial number of the hot word
 * @method string getText() Obtain Hotword text
 * @method void setText(string $Text) Set Hotword text
 * @method integer getWeight() Obtain Hotword weight. The value can be 11 or 100 or be in the range of 1 to -10.
 * @method void setWeight(integer $Weight) Set Hotword weight. The value can be 11 or 100 or be in the range of 1 to -10.
 */
class AsrHotwordsSetItem extends AbstractModel
{
    /**
     * @var integer Serial number of the hot word
     */
    public $Id;

    /**
     * @var string Hotword text
     */
    public $Text;

    /**
     * @var integer Hotword weight. The value can be 11 or 100 or be in the range of 1 to -10.
     */
    public $Weight;

    /**
     * @param integer $Id Serial number of the hot word
     * @param string $Text Hotword text
     * @param integer $Weight Hotword weight. The value can be 11 or 100 or be in the range of 1 to -10.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
