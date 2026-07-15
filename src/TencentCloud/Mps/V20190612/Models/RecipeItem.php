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
 * Image set information.
 *
 * @method string getTheme() Obtain <p>Sub-image type.</p><p>Enumeration values:</p><ul><li>hero: product hero image.</li><li>detail: product details image.</li><li>selling: core selling point image.</li><li>atmosphere: scene atmosphere image.</li><li>angles: multiple-angle image.</li><li>scene: usage scenario image.</li></ul>
 * @method void setTheme(string $Theme) Set <p>Sub-image type.</p><p>Enumeration values:</p><ul><li>hero: product hero image.</li><li>detail: product details image.</li><li>selling: core selling point image.</li><li>atmosphere: scene atmosphere image.</li><li>angles: multiple-angle image.</li><li>scene: usage scenario image.</li></ul>
 * @method integer getNum() Obtain <p>Number of corresponding sub-images.</p><p>Value range: 1 to 4.</p><p>Unit: image.</p><p>Each type can have up to 4 sub-images. The total number of sub-images must be within the range of 4 to 12.</p>
 * @method void setNum(integer $Num) Set <p>Number of corresponding sub-images.</p><p>Value range: 1 to 4.</p><p>Unit: image.</p><p>Each type can have up to 4 sub-images. The total number of sub-images must be within the range of 4 to 12.</p>
 */
class RecipeItem extends AbstractModel
{
    /**
     * @var string <p>Sub-image type.</p><p>Enumeration values:</p><ul><li>hero: product hero image.</li><li>detail: product details image.</li><li>selling: core selling point image.</li><li>atmosphere: scene atmosphere image.</li><li>angles: multiple-angle image.</li><li>scene: usage scenario image.</li></ul>
     */
    public $Theme;

    /**
     * @var integer <p>Number of corresponding sub-images.</p><p>Value range: 1 to 4.</p><p>Unit: image.</p><p>Each type can have up to 4 sub-images. The total number of sub-images must be within the range of 4 to 12.</p>
     */
    public $Num;

    /**
     * @param string $Theme <p>Sub-image type.</p><p>Enumeration values:</p><ul><li>hero: product hero image.</li><li>detail: product details image.</li><li>selling: core selling point image.</li><li>atmosphere: scene atmosphere image.</li><li>angles: multiple-angle image.</li><li>scene: usage scenario image.</li></ul>
     * @param integer $Num <p>Number of corresponding sub-images.</p><p>Value range: 1 to 4.</p><p>Unit: image.</p><p>Each type can have up to 4 sub-images. The total number of sub-images must be within the range of 4 to 12.</p>
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
        if (array_key_exists("Theme",$param) and $param["Theme"] !== null) {
            $this->Theme = $param["Theme"];
        }

        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }
    }
}
