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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Content filtering configuration (image name regular/minimum width and height). By default, filtering is not enabled.
 *
 * @method integer getImageMinHeight() Obtain <p>Minimum image height (pixel). Images with a height less than this value will be filtered; &lt;=0 means not enabled</p>
 * @method void setImageMinHeight(integer $ImageMinHeight) Set <p>Minimum image height (pixel). Images with a height less than this value will be filtered; &lt;=0 means not enabled</p>
 * @method integer getImageMinWidth() Obtain <p>Minimum image width (pixel). Images with a smaller width will be filtered; &lt;=0 means not enabled</p>
 * @method void setImageMinWidth(integer $ImageMinWidth) Set <p>Minimum image width (pixel). Images with a smaller width will be filtered; &lt;=0 means not enabled</p>
 * @method string getImageNamePatterns() Obtain <p>Image name filter rule (multiple regular expressions separated by semicolons &#39;;&#39;, for example &#39;icon;notice;warning;info.*&#39;)</p>
 * @method void setImageNamePatterns(string $ImageNamePatterns) Set <p>Image name filter rule (multiple regular expressions separated by semicolons &#39;;&#39;, for example &#39;icon;notice;warning;info.*&#39;)</p>
 */
class ContentFilter extends AbstractModel
{
    /**
     * @var integer <p>Minimum image height (pixel). Images with a height less than this value will be filtered; &lt;=0 means not enabled</p>
     */
    public $ImageMinHeight;

    /**
     * @var integer <p>Minimum image width (pixel). Images with a smaller width will be filtered; &lt;=0 means not enabled</p>
     */
    public $ImageMinWidth;

    /**
     * @var string <p>Image name filter rule (multiple regular expressions separated by semicolons &#39;;&#39;, for example &#39;icon;notice;warning;info.*&#39;)</p>
     */
    public $ImageNamePatterns;

    /**
     * @param integer $ImageMinHeight <p>Minimum image height (pixel). Images with a height less than this value will be filtered; &lt;=0 means not enabled</p>
     * @param integer $ImageMinWidth <p>Minimum image width (pixel). Images with a smaller width will be filtered; &lt;=0 means not enabled</p>
     * @param string $ImageNamePatterns <p>Image name filter rule (multiple regular expressions separated by semicolons &#39;;&#39;, for example &#39;icon;notice;warning;info.*&#39;)</p>
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
        if (array_key_exists("ImageMinHeight",$param) and $param["ImageMinHeight"] !== null) {
            $this->ImageMinHeight = $param["ImageMinHeight"];
        }

        if (array_key_exists("ImageMinWidth",$param) and $param["ImageMinWidth"] !== null) {
            $this->ImageMinWidth = $param["ImageMinWidth"];
        }

        if (array_key_exists("ImageNamePatterns",$param) and $param["ImageNamePatterns"] !== null) {
            $this->ImageNamePatterns = $param["ImageNamePatterns"];
        }
    }
}
