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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchGetVideoSnapshotImageUrl request structure.
 *
 * @method array getImageIds() Obtain <p>Image Id</p>
 * @method void setImageIds(array $ImageIds) Set <p>Image Id</p>
 * @method integer getImageUrlExpires() Obtain <p>Valid period of the image URL, unit: seconds</p><p>Value range: [60, 86400]</p><p>Default value: 600</p>
 * @method void setImageUrlExpires(integer $ImageUrlExpires) Set <p>Valid period of the image URL, unit: seconds</p><p>Value range: [60, 86400]</p><p>Default value: 600</p>
 */
class BatchGetVideoSnapshotImageUrlRequest extends AbstractModel
{
    /**
     * @var array <p>Image Id</p>
     */
    public $ImageIds;

    /**
     * @var integer <p>Valid period of the image URL, unit: seconds</p><p>Value range: [60, 86400]</p><p>Default value: 600</p>
     */
    public $ImageUrlExpires;

    /**
     * @param array $ImageIds <p>Image Id</p>
     * @param integer $ImageUrlExpires <p>Valid period of the image URL, unit: seconds</p><p>Value range: [60, 86400]</p><p>Default value: 600</p>
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
        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("ImageUrlExpires",$param) and $param["ImageUrlExpires"] !== null) {
            $this->ImageUrlExpires = $param["ImageUrlExpires"];
        }
    }
}
