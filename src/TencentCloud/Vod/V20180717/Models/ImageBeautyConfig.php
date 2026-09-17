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
 * @method array getBeautyEffectItems() Obtain 
 * @method void setBeautyEffectItems(array $BeautyEffectItems) Set 
 * @method array getBeautyFilterItems() Obtain 
 * @method void setBeautyFilterItems(array $BeautyFilterItems) Set 
 */
class ImageBeautyConfig extends AbstractModel
{
    /**
     * @var array 
     */
    public $BeautyEffectItems;

    /**
     * @var array 
     */
    public $BeautyFilterItems;

    /**
     * @param array $BeautyEffectItems 
     * @param array $BeautyFilterItems 
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
        if (array_key_exists("BeautyEffectItems",$param) and $param["BeautyEffectItems"] !== null) {
            $this->BeautyEffectItems = [];
            foreach ($param["BeautyEffectItems"] as $key => $value){
                $obj = new BeautyEffectItem();
                $obj->deserialize($value);
                array_push($this->BeautyEffectItems, $obj);
            }
        }

        if (array_key_exists("BeautyFilterItems",$param) and $param["BeautyFilterItems"] !== null) {
            $this->BeautyFilterItems = [];
            foreach ($param["BeautyFilterItems"] as $key => $value){
                $obj = new BeautyFilterItem();
                $obj->deserialize($value);
                array_push($this->BeautyFilterItems, $obj);
            }
        }
    }
}
