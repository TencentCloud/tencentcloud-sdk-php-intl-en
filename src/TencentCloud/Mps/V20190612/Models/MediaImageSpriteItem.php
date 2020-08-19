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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image sprite information
 *
 * @method integer getDefinition() Obtain Image sprite specification. For more information, please see [Image Sprite Parameter Template](https://intl.cloud.tencent.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method void setDefinition(integer $Definition) Set Image sprite specification. For more information, please see [Image Sprite Parameter Template](https://intl.cloud.tencent.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF).
 * @method integer getHeight() Obtain Subimage height of an image sprite.
 * @method void setHeight(integer $Height) Set Subimage height of an image sprite.
 * @method integer getWidth() Obtain Subimage width of an image sprite.
 * @method void setWidth(integer $Width) Set Subimage width of an image sprite.
 * @method integer getTotalCount() Obtain Total number of subimages in each image sprite.
 * @method void setTotalCount(integer $TotalCount) Set Total number of subimages in each image sprite.
 * @method array getImagePathSet() Obtain Path to each image sprite.
 * @method void setImagePathSet(array $ImagePathSet) Set Path to each image sprite.
 * @method string getWebVttPath() Obtain Path to a WebVtt file for the position-time relationship among subimages in an image sprite. The WebVtt file indicates the corresponding time points of each subimage and their coordinates in the image sprite, which is typically used by the player for implementing preview.
 * @method void setWebVttPath(string $WebVttPath) Set Path to a WebVtt file for the position-time relationship among subimages in an image sprite. The WebVtt file indicates the corresponding time points of each subimage and their coordinates in the image sprite, which is typically used by the player for implementing preview.
 * @method TaskOutputStorage getStorage() Obtain Storage location of an image sprite file.
 * @method void setStorage(TaskOutputStorage $Storage) Set Storage location of an image sprite file.
 */
class MediaImageSpriteItem extends AbstractModel
{
    /**
     * @var integer Image sprite specification. For more information, please see [Image Sprite Parameter Template](https://intl.cloud.tencent.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     */
    public $Definition;

    /**
     * @var integer Subimage height of an image sprite.
     */
    public $Height;

    /**
     * @var integer Subimage width of an image sprite.
     */
    public $Width;

    /**
     * @var integer Total number of subimages in each image sprite.
     */
    public $TotalCount;

    /**
     * @var array Path to each image sprite.
     */
    public $ImagePathSet;

    /**
     * @var string Path to a WebVtt file for the position-time relationship among subimages in an image sprite. The WebVtt file indicates the corresponding time points of each subimage and their coordinates in the image sprite, which is typically used by the player for implementing preview.
     */
    public $WebVttPath;

    /**
     * @var TaskOutputStorage Storage location of an image sprite file.
     */
    public $Storage;

    /**
     * @param integer $Definition Image sprite specification. For more information, please see [Image Sprite Parameter Template](https://intl.cloud.tencent.com/document/product/266/33480?from_cn_redirect=1#.E9.9B.AA.E7.A2.A7.E5.9B.BE.E6.A8.A1.E6.9D.BF).
     * @param integer $Height Subimage height of an image sprite.
     * @param integer $Width Subimage width of an image sprite.
     * @param integer $TotalCount Total number of subimages in each image sprite.
     * @param array $ImagePathSet Path to each image sprite.
     * @param string $WebVttPath Path to a WebVtt file for the position-time relationship among subimages in an image sprite. The WebVtt file indicates the corresponding time points of each subimage and their coordinates in the image sprite, which is typically used by the player for implementing preview.
     * @param TaskOutputStorage $Storage Storage location of an image sprite file.
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
