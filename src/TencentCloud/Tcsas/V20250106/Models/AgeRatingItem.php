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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Age rating information.
 *
 * @method string getStandardId() Obtain <p>Age rating standard.</p><p>Valid values:</p><ul><li>apple: Apple</li><li>iarc: Android.</li></ul>
 * @method void setStandardId(string $StandardId) Set <p>Age rating standard.</p><p>Valid values:</p><ul><li>apple: Apple</li><li>iarc: Android.</li></ul>
 * @method integer getAgeRating() Obtain <p>Applicable age for age rating.</p>
 * @method void setAgeRating(integer $AgeRating) Set <p>Applicable age for age rating.</p>
 * @method string getLabel() Obtain <p>Age rating label.</p>
 * @method void setLabel(string $Label) Set <p>Age rating label.</p>
 */
class AgeRatingItem extends AbstractModel
{
    /**
     * @var string <p>Age rating standard.</p><p>Valid values:</p><ul><li>apple: Apple</li><li>iarc: Android.</li></ul>
     */
    public $StandardId;

    /**
     * @var integer <p>Applicable age for age rating.</p>
     */
    public $AgeRating;

    /**
     * @var string <p>Age rating label.</p>
     */
    public $Label;

    /**
     * @param string $StandardId <p>Age rating standard.</p><p>Valid values:</p><ul><li>apple: Apple</li><li>iarc: Android.</li></ul>
     * @param integer $AgeRating <p>Applicable age for age rating.</p>
     * @param string $Label <p>Age rating label.</p>
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
        if (array_key_exists("StandardId",$param) and $param["StandardId"] !== null) {
            $this->StandardId = $param["StandardId"];
        }

        if (array_key_exists("AgeRating",$param) and $param["AgeRating"] !== null) {
            $this->AgeRating = $param["AgeRating"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
