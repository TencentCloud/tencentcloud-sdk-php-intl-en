<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Face attribute information
 *
 * @method integer getType() Obtain Attribute value
 * @method void setType(integer $Type) Set Attribute value
 * @method float getProbability() Obtain Probability of recognizing `Type`, which indicates the probability of correct recognition. Value range: [0,1].
 * @method void setProbability(float $Probability) Set Probability of recognizing `Type`, which indicates the probability of correct recognition. Value range: [0,1].
 */
class AttributeItem extends AbstractModel
{
    /**
     * @var integer Attribute value
     */
    public $Type;

    /**
     * @var float Probability of recognizing `Type`, which indicates the probability of correct recognition. Value range: [0,1].
     */
    public $Probability;

    /**
     * @param integer $Type Attribute value
     * @param float $Probability Probability of recognizing `Type`, which indicates the probability of correct recognition. Value range: [0,1].
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Probability",$param) and $param["Probability"] !== null) {
            $this->Probability = $param["Probability"];
        }
    }
}
