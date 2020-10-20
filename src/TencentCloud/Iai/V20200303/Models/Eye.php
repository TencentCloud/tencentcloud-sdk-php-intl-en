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
 * Eye information
 *
 * @method AttributeItem getGlass() Obtain Whether glasses are worn.
The `Type` values of the `AttributeItem` include: 0: no glasses; 1: general glasses; 2: sunglasses.
 * @method void setGlass(AttributeItem $Glass) Set Whether glasses are worn.
The `Type` values of the `AttributeItem` include: 0: no glasses; 1: general glasses; 2: sunglasses.
 * @method AttributeItem getEyeOpen() Obtain Whether the eyes are open.
The `Type` values of the `AttributeItem` include: 0: open; 1: closed.
 * @method void setEyeOpen(AttributeItem $EyeOpen) Set Whether the eyes are open.
The `Type` values of the `AttributeItem` include: 0: open; 1: closed.
 * @method AttributeItem getEyelidType() Obtain Whether the person has double eyelids.
The `Type` values of the `AttributeItem` include: 0: no; 1: yes.
 * @method void setEyelidType(AttributeItem $EyelidType) Set Whether the person has double eyelids.
The `Type` values of the `AttributeItem` include: 0: no; 1: yes.
 * @method AttributeItem getEyeSize() Obtain Eye size.
The `Type` values of the `AttributeItem` include: 0: small eyes; 1: general eyes; 2: big eyes.
 * @method void setEyeSize(AttributeItem $EyeSize) Set Eye size.
The `Type` values of the `AttributeItem` include: 0: small eyes; 1: general eyes; 2: big eyes.
 */
class Eye extends AbstractModel
{
    /**
     * @var AttributeItem Whether glasses are worn.
The `Type` values of the `AttributeItem` include: 0: no glasses; 1: general glasses; 2: sunglasses.
     */
    public $Glass;

    /**
     * @var AttributeItem Whether the eyes are open.
The `Type` values of the `AttributeItem` include: 0: open; 1: closed.
     */
    public $EyeOpen;

    /**
     * @var AttributeItem Whether the person has double eyelids.
The `Type` values of the `AttributeItem` include: 0: no; 1: yes.
     */
    public $EyelidType;

    /**
     * @var AttributeItem Eye size.
The `Type` values of the `AttributeItem` include: 0: small eyes; 1: general eyes; 2: big eyes.
     */
    public $EyeSize;

    /**
     * @param AttributeItem $Glass Whether glasses are worn.
The `Type` values of the `AttributeItem` include: 0: no glasses; 1: general glasses; 2: sunglasses.
     * @param AttributeItem $EyeOpen Whether the eyes are open.
The `Type` values of the `AttributeItem` include: 0: open; 1: closed.
     * @param AttributeItem $EyelidType Whether the person has double eyelids.
The `Type` values of the `AttributeItem` include: 0: no; 1: yes.
     * @param AttributeItem $EyeSize Eye size.
The `Type` values of the `AttributeItem` include: 0: small eyes; 1: general eyes; 2: big eyes.
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
        if (array_key_exists("Glass",$param) and $param["Glass"] !== null) {
            $this->Glass = new AttributeItem();
            $this->Glass->deserialize($param["Glass"]);
        }

        if (array_key_exists("EyeOpen",$param) and $param["EyeOpen"] !== null) {
            $this->EyeOpen = new AttributeItem();
            $this->EyeOpen->deserialize($param["EyeOpen"]);
        }

        if (array_key_exists("EyelidType",$param) and $param["EyelidType"] !== null) {
            $this->EyelidType = new AttributeItem();
            $this->EyelidType->deserialize($param["EyelidType"]);
        }

        if (array_key_exists("EyeSize",$param) and $param["EyeSize"] !== null) {
            $this->EyeSize = new AttributeItem();
            $this->EyeSize->deserialize($param["EyeSize"]);
        }
    }
}
