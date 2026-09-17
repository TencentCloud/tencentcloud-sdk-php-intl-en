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
 * 
 *
 * @method integer getDefinition() Obtain 
 * @method void setDefinition(integer $Definition) Set 
 * @method integer getHeight() Obtain 
 * @method void setHeight(integer $Height) Set 
 * @method integer getWidth() Obtain 
 * @method void setWidth(integer $Width) Set 
 * @method integer getTotalCount() Obtain 
 * @method void setTotalCount(integer $TotalCount) Set 
 * @method array getImageUrlSet() Obtain 
 * @method void setImageUrlSet(array $ImageUrlSet) Set 
 * @method string getWebVttUrl() Obtain 
 * @method void setWebVttUrl(string $WebVttUrl) Set 
 */
class MediaImageSpriteItem extends AbstractModel
{
    /**
     * @var integer 
     */
    public $Definition;

    /**
     * @var integer 
     */
    public $Height;

    /**
     * @var integer 
     */
    public $Width;

    /**
     * @var integer 
     */
    public $TotalCount;

    /**
     * @var array 
     */
    public $ImageUrlSet;

    /**
     * @var string 
     */
    public $WebVttUrl;

    /**
     * @param integer $Definition 
     * @param integer $Height 
     * @param integer $Width 
     * @param integer $TotalCount 
     * @param array $ImageUrlSet 
     * @param string $WebVttUrl 
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
