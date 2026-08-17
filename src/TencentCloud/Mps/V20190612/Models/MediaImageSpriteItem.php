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
 * Sprite image information
 *
 * @method integer getDefinition() Obtain Sprite sheet specification, please refer to the [Sprite Sheet Parameter Template](https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method void setDefinition(integer $Definition) Set Sprite sheet specification, please refer to the [Sprite Sheet Parameter Template](https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method integer getHeight() Obtain Height of small images in sprite sheet.
 * @method void setHeight(integer $Height) Set Height of small images in sprite sheet.
 * @method integer getWidth() Obtain Width of small images in sprite sheet.
 * @method void setWidth(integer $Width) Set Width of small images in sprite sheet.
 * @method integer getTotalCount() Obtain Number of small images in each sprite sheet.
 * @method void setTotalCount(integer $TotalCount) Set Number of small images in each sprite sheet.
 * @method array getImagePathSet() Obtain Path of each sprite sheet.
 * @method void setImagePathSet(array $ImagePathSet) Set Path of each sprite sheet.
 * @method string getWebVttPath() Obtain 
 * @method void setWebVttPath(string $WebVttPath) Set 
 * @method TaskOutputStorage getStorage() Obtain Storage location of the sprite sheet file.
 * @method void setStorage(TaskOutputStorage $Storage) Set Storage location of the sprite sheet file.
 */
class MediaImageSpriteItem extends AbstractModel
{
    /**
     * @var integer Sprite sheet specification, please refer to the [Sprite Sheet Parameter Template](https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     */
    public $Definition;

    /**
     * @var integer Height of small images in sprite sheet.
     */
    public $Height;

    /**
     * @var integer Width of small images in sprite sheet.
     */
    public $Width;

    /**
     * @var integer Number of small images in each sprite sheet.
     */
    public $TotalCount;

    /**
     * @var array Path of each sprite sheet.
     */
    public $ImagePathSet;

    /**
     * @var string 
     */
    public $WebVttPath;

    /**
     * @var TaskOutputStorage Storage location of the sprite sheet file.
     */
    public $Storage;

    /**
     * @param integer $Definition Sprite sheet specification, please refer to the [Sprite Sheet Parameter Template](https://www.tencentcloud.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     * @param integer $Height Height of small images in sprite sheet.
     * @param integer $Width Width of small images in sprite sheet.
     * @param integer $TotalCount Number of small images in each sprite sheet.
     * @param array $ImagePathSet Path of each sprite sheet.
     * @param string $WebVttPath 
     * @param TaskOutputStorage $Storage Storage location of the sprite sheet file.
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

        if (array_key_exists("ImagePathSet",$param) and $param["ImagePathSet"] !== null) {
            $this->ImagePathSet = $param["ImagePathSet"];
        }

        if (array_key_exists("WebVttPath",$param) and $param["WebVttPath"] !== null) {
            $this->WebVttPath = $param["WebVttPath"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new TaskOutputStorage();
            $this->Storage->deserialize($param["Storage"]);
        }
    }
}
