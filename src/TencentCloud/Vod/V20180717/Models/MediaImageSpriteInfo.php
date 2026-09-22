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
 * Sprite image information of VOD files
 *
 * @method array getImageSpriteSet() Obtain Collection of sprite image information for a specific spec. Each element represents a set of sprite images with the same spec.
 * @method void setImageSpriteSet(array $ImageSpriteSet) Set Collection of sprite image information for a specific spec. Each element represents a set of sprite images with the same spec.
 */
class MediaImageSpriteInfo extends AbstractModel
{
    /**
     * @var array Collection of sprite image information for a specific spec. Each element represents a set of sprite images with the same spec.
     */
    public $ImageSpriteSet;

    /**
     * @param array $ImageSpriteSet Collection of sprite image information for a specific spec. Each element represents a set of sprite images with the same spec.
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
        if (array_key_exists("ImageSpriteSet",$param) and $param["ImageSpriteSet"] !== null) {
            $this->ImageSpriteSet = [];
            foreach ($param["ImageSpriteSet"] as $key => $value){
                $obj = new MediaImageSpriteItem();
                $obj->deserialize($value);
                array_push($this->ImageSpriteSet, $obj);
            }
        }
    }
}
