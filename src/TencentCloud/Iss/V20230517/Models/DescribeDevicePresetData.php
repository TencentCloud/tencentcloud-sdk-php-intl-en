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
 * data for querying device preset positions
 *
 * @method integer getIndex() Obtain Preset position index. Supports only indexes 1-10.
 * @method void setIndex(integer $Index) Set Preset position index. Supports only indexes 1-10.
 * @method string getName() Obtain Preset position name
 * @method void setName(string $Name) Set Preset position name
 */
class DescribeDevicePresetData extends AbstractModel
{
    /**
     * @var integer Preset position index. Supports only indexes 1-10.
     */
    public $Index;

    /**
     * @var string Preset position name
     */
    public $Name;

    /**
     * @param integer $Index Preset position index. Supports only indexes 1-10.
     * @param string $Name Preset position name
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
