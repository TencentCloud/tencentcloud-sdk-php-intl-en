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
 * Hair information
 *
 * @method AttributeItem getLength() Obtain Hair length information.
The `Type` values of the `AttributeItem` include: 0: bald, 1: short hair, 2: medium hair, 3: long hair, 4: braid.
 * @method void setLength(AttributeItem $Length) Set Hair length information.
The `Type` values of the `AttributeItem` include: 0: bald, 1: short hair, 2: medium hair, 3: long hair, 4: braid.
 * @method AttributeItem getBang() Obtain Bang information.
The `Type` values of the `AttributeItem` include: 0: no bang; 1: bang detected.
 * @method void setBang(AttributeItem $Bang) Set Bang information.
The `Type` values of the `AttributeItem` include: 0: no bang; 1: bang detected.
 * @method AttributeItem getColor() Obtain Hair color information.
The `Type` values of the `AttributeItem` include: 0: black; 1: golden; 2: brown; 3: gray.
 * @method void setColor(AttributeItem $Color) Set Hair color information.
The `Type` values of the `AttributeItem` include: 0: black; 1: golden; 2: brown; 3: gray.
 */
class Hair extends AbstractModel
{
    /**
     * @var AttributeItem Hair length information.
The `Type` values of the `AttributeItem` include: 0: bald, 1: short hair, 2: medium hair, 3: long hair, 4: braid.
     */
    public $Length;

    /**
     * @var AttributeItem Bang information.
The `Type` values of the `AttributeItem` include: 0: no bang; 1: bang detected.
     */
    public $Bang;

    /**
     * @var AttributeItem Hair color information.
The `Type` values of the `AttributeItem` include: 0: black; 1: golden; 2: brown; 3: gray.
     */
    public $Color;

    /**
     * @param AttributeItem $Length Hair length information.
The `Type` values of the `AttributeItem` include: 0: bald, 1: short hair, 2: medium hair, 3: long hair, 4: braid.
     * @param AttributeItem $Bang Bang information.
The `Type` values of the `AttributeItem` include: 0: no bang; 1: bang detected.
     * @param AttributeItem $Color Hair color information.
The `Type` values of the `AttributeItem` include: 0: black; 1: golden; 2: brown; 3: gray.
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
        if (array_key_exists("Length",$param) and $param["Length"] !== null) {
            $this->Length = new AttributeItem();
            $this->Length->deserialize($param["Length"]);
        }

        if (array_key_exists("Bang",$param) and $param["Bang"] !== null) {
            $this->Bang = new AttributeItem();
            $this->Bang->deserialize($param["Bang"]);
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = new AttributeItem();
            $this->Color->deserialize($param["Color"]);
        }
    }
}
