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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceCreateBlueprint request structure.
 *
 * @method integer getBlueprintCount() Obtain Number of custom images. Default value: 1.
 * @method void setBlueprintCount(integer $BlueprintCount) Set Number of custom images. Default value: 1.
 */
class InquirePriceCreateBlueprintRequest extends AbstractModel
{
    /**
     * @var integer Number of custom images. Default value: 1.
     */
    public $BlueprintCount;

    /**
     * @param integer $BlueprintCount Number of custom images. Default value: 1.
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
        if (array_key_exists("BlueprintCount",$param) and $param["BlueprintCount"] !== null) {
            $this->BlueprintCount = $param["BlueprintCount"];
        }
    }
}
