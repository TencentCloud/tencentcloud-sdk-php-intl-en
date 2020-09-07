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
 * Eyebrow information
 *
 * @method AttributeItem getEyebrowDensity() Obtain Eyebrow thickness.
The `Type` values of the `AttributeItem` include: 0: light; 1: thick.
 * @method void setEyebrowDensity(AttributeItem $EyebrowDensity) Set Eyebrow thickness.
The `Type` values of the `AttributeItem` include: 0: light; 1: thick.
 * @method AttributeItem getEyebrowCurve() Obtain Eyebrow curve.
The `Type` values of the `AttributeItem` include: 0: flat; 1: curved.
 * @method void setEyebrowCurve(AttributeItem $EyebrowCurve) Set Eyebrow curve.
The `Type` values of the `AttributeItem` include: 0: flat; 1: curved.
 * @method AttributeItem getEyebrowLength() Obtain Eyebrow length.
The `Type` values of the `AttributeItem` include: 0: short; 1: long.
 * @method void setEyebrowLength(AttributeItem $EyebrowLength) Set Eyebrow length.
The `Type` values of the `AttributeItem` include: 0: short; 1: long.
 */
class Eyebrow extends AbstractModel
{
    /**
     * @var AttributeItem Eyebrow thickness.
The `Type` values of the `AttributeItem` include: 0: light; 1: thick.
     */
    public $EyebrowDensity;

    /**
     * @var AttributeItem Eyebrow curve.
The `Type` values of the `AttributeItem` include: 0: flat; 1: curved.
     */
    public $EyebrowCurve;

    /**
     * @var AttributeItem Eyebrow length.
The `Type` values of the `AttributeItem` include: 0: short; 1: long.
     */
    public $EyebrowLength;

    /**
     * @param AttributeItem $EyebrowDensity Eyebrow thickness.
The `Type` values of the `AttributeItem` include: 0: light; 1: thick.
     * @param AttributeItem $EyebrowCurve Eyebrow curve.
The `Type` values of the `AttributeItem` include: 0: flat; 1: curved.
     * @param AttributeItem $EyebrowLength Eyebrow length.
The `Type` values of the `AttributeItem` include: 0: short; 1: long.
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
        if (array_key_exists("EyebrowDensity",$param) and $param["EyebrowDensity"] !== null) {
            $this->EyebrowDensity = new AttributeItem();
            $this->EyebrowDensity->deserialize($param["EyebrowDensity"]);
        }

        if (array_key_exists("EyebrowCurve",$param) and $param["EyebrowCurve"] !== null) {
            $this->EyebrowCurve = new AttributeItem();
            $this->EyebrowCurve->deserialize($param["EyebrowCurve"]);
        }

        if (array_key_exists("EyebrowLength",$param) and $param["EyebrowLength"] !== null) {
            $this->EyebrowLength = new AttributeItem();
            $this->EyebrowLength->deserialize($param["EyebrowLength"]);
        }
    }
}
