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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The watermark text.
Used by actions: GetWatermark.
 *
 * @method string getText() Obtain The watermark text. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setText(string $Text) Set The watermark text. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getColor() Obtain The watermark text color. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColor(string $Color) Set The watermark text color. Note: This field may return null, indicating that no valid values can be obtained.
 */
class TextMarkConfig extends AbstractModel
{
    /**
     * @var string The watermark text. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Text;

    /**
     * @var string The watermark text color. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Color;

    /**
     * @param string $Text The watermark text. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Color The watermark text color. Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }
    }
}
