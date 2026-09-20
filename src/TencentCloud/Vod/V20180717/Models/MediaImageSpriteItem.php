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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sprite image information
 *
 * @method integer getDefinition() Obtain <p>Sprite sheet specification. See <a href="https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF">sprite sheet parameter template</a>.</p>
 * @method void setDefinition(integer $Definition) Set <p>Sprite sheet specification. See <a href="https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF">sprite sheet parameter template</a>.</p>
 * @method integer getHeight() Obtain <p>Height of the small image in the sprite sheet.</p>
 * @method void setHeight(integer $Height) Set <p>Height of the small image in the sprite sheet.</p>
 * @method integer getWidth() Obtain <p>Width of the small image in the sprite sheet.</p>
 * @method void setWidth(integer $Width) Set <p>Width of the small image in the sprite sheet.</p>
 * @method integer getTotalCount() Obtain <p>The number of small images in each large sprite sheet.</p>
 * @method void setTotalCount(integer $TotalCount) Set <p>The number of small images in each large sprite sheet.</p>
 * @method array getImageUrlSet() Obtain <p>Domain names or IP addresses of each sprite sheet.</p>
 * @method void setImageUrlSet(array $ImageUrlSet) Set <p>Domain names or IP addresses of each sprite sheet.</p>
 * @method string getWebVttUrl() Obtain <p>Address of the WebVtt file that describes the temporal relationship between sprite subimages and time. The WebVtt file indicates the time point corresponding to each sprite subimage and its coordinates in the sprite sheet. It is used by the player to implement preview.</p>
 * @method void setWebVttUrl(string $WebVttUrl) Set <p>Address of the WebVtt file that describes the temporal relationship between sprite subimages and time. The WebVtt file indicates the time point corresponding to each sprite subimage and its coordinates in the sprite sheet. It is used by the player to implement preview.</p>
 */
class MediaImageSpriteItem extends AbstractModel
{
    /**
     * @var integer <p>Sprite sheet specification. See <a href="https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF">sprite sheet parameter template</a>.</p>
     */
    public $Definition;

    /**
     * @var integer <p>Height of the small image in the sprite sheet.</p>
     */
    public $Height;

    /**
     * @var integer <p>Width of the small image in the sprite sheet.</p>
     */
    public $Width;

    /**
     * @var integer <p>The number of small images in each large sprite sheet.</p>
     */
    public $TotalCount;

    /**
     * @var array <p>Domain names or IP addresses of each sprite sheet.</p>
     */
    public $ImageUrlSet;

    /**
     * @var string <p>Address of the WebVtt file that describes the temporal relationship between sprite subimages and time. The WebVtt file indicates the time point corresponding to each sprite subimage and its coordinates in the sprite sheet. It is used by the player to implement preview.</p>
     */
    public $WebVttUrl;

    /**
     * @param integer $Definition <p>Sprite sheet specification. See <a href="https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF">sprite sheet parameter template</a>.</p>
     * @param integer $Height <p>Height of the small image in the sprite sheet.</p>
     * @param integer $Width <p>Width of the small image in the sprite sheet.</p>
     * @param integer $TotalCount <p>The number of small images in each large sprite sheet.</p>
     * @param array $ImageUrlSet <p>Domain names or IP addresses of each sprite sheet.</p>
     * @param string $WebVttUrl <p>Address of the WebVtt file that describes the temporal relationship between sprite subimages and time. The WebVtt file indicates the time point corresponding to each sprite subimage and its coordinates in the sprite sheet. It is used by the player to implement preview.</p>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ImageUrlSet",$param) and $param["ImageUrlSet"] !== null) {
            $this->ImageUrlSet = $param["ImageUrlSet"];
        }

        if (array_key_exists("WebVttUrl",$param) and $param["WebVttUrl"] !== null) {
            $this->WebVttUrl = $param["WebVttUrl"];
        }
    }
}
