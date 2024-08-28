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
 * Statistics data of top network attacks
 *
 * @method string getValue() Obtain Top statistical data, such as IP, and vulnerability name
 * @method void setValue(string $Value) Set Top statistical data, such as IP, and vulnerability name
 * @method integer getCount() Obtain Top statistical count
 * @method void setCount(integer $Count) Set Top statistical count
 */
class TopInfo extends AbstractModel
{
    /**
     * @var string Top statistical data, such as IP, and vulnerability name
     */
    public $Value;

    /**
     * @var integer Top statistical count
     */
    public $Count;

    /**
     * @param string $Value Top statistical data, such as IP, and vulnerability name
     * @param integer $Count Top statistical count
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
