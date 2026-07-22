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
 * Image beauty effect configuration.
 *
 * @method array getBeautyEffectItems() Obtain <p>Beauty effect item.</p>
 * @method void setBeautyEffectItems(array $BeautyEffectItems) Set <p>Beauty effect item.</p>
 * @method array getBeautyFilterItems() Obtain <p>Beauty filter item.</p>
 * @method void setBeautyFilterItems(array $BeautyFilterItems) Set <p>Beauty filter item.</p>
 */
class ImageBeautyConfig extends AbstractModel
{
    /**
     * @var array <p>Beauty effect item.</p>
     */
    public $BeautyEffectItems;

    /**
     * @var array <p>Beauty filter item.</p>
     */
    public $BeautyFilterItems;

    /**
     * @param array $BeautyEffectItems <p>Beauty effect item.</p>
     * @param array $BeautyFilterItems <p>Beauty filter item.</p>
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
