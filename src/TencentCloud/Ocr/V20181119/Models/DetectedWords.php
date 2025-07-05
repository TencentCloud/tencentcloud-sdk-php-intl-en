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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information about a character detected, including the character itself and its confidence
 *
 * @method integer getConfidence() Obtain Confidence. Value range: 0–100
 * @method void setConfidence(integer $Confidence) Set Confidence. Value range: 0–100
 * @method string getCharacter() Obtain A possible character
 * @method void setCharacter(string $Character) Set A possible character
 */
class DetectedWords extends AbstractModel
{
    /**
     * @var integer Confidence. Value range: 0–100
     */
    public $Confidence;

    /**
     * @var string A possible character
     */
    public $Character;

    /**
     * @param integer $Confidence Confidence. Value range: 0–100
     * @param string $Character A possible character
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
        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Character",$param) and $param["Character"] !== null) {
            $this->Character = $param["Character"];
        }
    }
}
