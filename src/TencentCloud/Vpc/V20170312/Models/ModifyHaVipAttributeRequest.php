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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyHaVipAttribute request structure.
 *
 * @method string getHaVipId() Obtain The unique `ID` of the `HAVIP`, such as `havip-9o233uri`.
 * @method void setHaVipId(string $HaVipId) Set The unique `ID` of the `HAVIP`, such as `havip-9o233uri`.
 * @method string getHaVipName() Obtain `HAVIP` can be named freely, but the maximum length is 60 characters.
 * @method void setHaVipName(string $HaVipName) Set `HAVIP` can be named freely, but the maximum length is 60 characters.
 */
class ModifyHaVipAttributeRequest extends AbstractModel
{
    /**
     * @var string The unique `ID` of the `HAVIP`, such as `havip-9o233uri`.
     */
    public $HaVipId;

    /**
     * @var string `HAVIP` can be named freely, but the maximum length is 60 characters.
     */
    public $HaVipName;

    /**
     * @param string $HaVipId The unique `ID` of the `HAVIP`, such as `havip-9o233uri`.
     * @param string $HaVipName `HAVIP` can be named freely, but the maximum length is 60 characters.
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
        if (array_key_exists("HaVipId",$param) and $param["HaVipId"] !== null) {
            $this->HaVipId = $param["HaVipId"];
        }

        if (array_key_exists("HaVipName",$param) and $param["HaVipName"] !== null) {
            $this->HaVipName = $param["HaVipName"];
        }
    }
}
