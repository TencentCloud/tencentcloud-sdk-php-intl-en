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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Caption selector.
 *
 * @method string getName() Obtain Caption selector name, which can contain 1-32 letters, digits, and underscores.
 * @method void setName(string $Name) Set Caption selector name, which can contain 1-32 letters, digits, and underscores.
 * @method string getCaptionSourceType() Obtain Caption source type, only support `SCTE-128`.
 * @method void setCaptionSourceType(string $CaptionSourceType) Set Caption source type, only support `SCTE-128`.
 */
class CaptionSelector extends AbstractModel
{
    /**
     * @var string Caption selector name, which can contain 1-32 letters, digits, and underscores.
     */
    public $Name;

    /**
     * @var string Caption source type, only support `SCTE-128`.
     */
    public $CaptionSourceType;

    /**
     * @param string $Name Caption selector name, which can contain 1-32 letters, digits, and underscores.
     * @param string $CaptionSourceType Caption source type, only support `SCTE-128`.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CaptionSourceType",$param) and $param["CaptionSourceType"] !== null) {
            $this->CaptionSourceType = $param["CaptionSourceType"];
        }
    }
}
