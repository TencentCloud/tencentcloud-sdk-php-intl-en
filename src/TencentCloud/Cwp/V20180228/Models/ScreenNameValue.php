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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * [Cloud security alarm] Visualized data Name Value Data on the large screen
 *
 * @method string getName() Obtain Statistics type: Different APIs correspond to different content
 * @method void setName(string $Name) Set Statistics type: Different APIs correspond to different content
 * @method integer getValue() Obtain Statistics quantity
 * @method void setValue(integer $Value) Set Statistics quantity
 */
class ScreenNameValue extends AbstractModel
{
    /**
     * @var string Statistics type: Different APIs correspond to different content
     */
    public $Name;

    /**
     * @var integer Statistics quantity
     */
    public $Value;

    /**
     * @param string $Name Statistics type: Different APIs correspond to different content
     * @param integer $Value Statistics quantity
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
