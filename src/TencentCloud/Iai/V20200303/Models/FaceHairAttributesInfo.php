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
 * Hair information in face attributes.
 *
 * @method integer getLength() Obtain 0: shaved head, 1: short hair, 2: medium hair, 3: long hair, 4: braid
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLength(integer $Length) Set 0: shaved head, 1: short hair, 2: medium hair, 3: long hair, 4: braid
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getBang() Obtain 0: with bangs, 1: no bangs
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setBang(integer $Bang) Set 0: with bangs, 1: no bangs
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getColor() Obtain 0: black, 1: golden, 2: brown, 3: gray
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setColor(integer $Color) Set 0: black, 1: golden, 2: brown, 3: gray
Note: this field may return null, indicating that no valid values can be obtained.
 */
class FaceHairAttributesInfo extends AbstractModel
{
    /**
     * @var integer 0: shaved head, 1: short hair, 2: medium hair, 3: long hair, 4: braid
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Length;

    /**
     * @var integer 0: with bangs, 1: no bangs
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Bang;

    /**
     * @var integer 0: black, 1: golden, 2: brown, 3: gray
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Color;

    /**
     * @param integer $Length 0: shaved head, 1: short hair, 2: medium hair, 3: long hair, 4: braid
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Bang 0: with bangs, 1: no bangs
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Color 0: black, 1: golden, 2: brown, 3: gray
Note: this field may return null, indicating that no valid values can be obtained.
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
            $this->Length = $param["Length"];
        }

        if (array_key_exists("Bang",$param) and $param["Bang"] !== null) {
            $this->Bang = $param["Bang"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }
    }
}
