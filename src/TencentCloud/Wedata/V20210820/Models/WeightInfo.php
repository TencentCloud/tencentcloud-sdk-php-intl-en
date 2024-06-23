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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Weight Information
 *
 * @method integer getWeight() Obtain Weight
 * @method void setWeight(integer $Weight) Set Weight
 * @method integer getQualityDim() Obtain Dimension Type 1:Accuracy, 2:Uniqueness, 3:Integrity, 4:Consistency, 5:Timeliness, 6:Validity
 * @method void setQualityDim(integer $QualityDim) Set Dimension Type 1:Accuracy, 2:Uniqueness, 3:Integrity, 4:Consistency, 5:Timeliness, 6:Validity
 */
class WeightInfo extends AbstractModel
{
    /**
     * @var integer Weight
     */
    public $Weight;

    /**
     * @var integer Dimension Type 1:Accuracy, 2:Uniqueness, 3:Integrity, 4:Consistency, 5:Timeliness, 6:Validity
     */
    public $QualityDim;

    /**
     * @param integer $Weight Weight
     * @param integer $QualityDim Dimension Type 1:Accuracy, 2:Uniqueness, 3:Integrity, 4:Consistency, 5:Timeliness, 6:Validity
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
        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("QualityDim",$param) and $param["QualityDim"] !== null) {
            $this->QualityDim = $param["QualityDim"];
        }
    }
}
