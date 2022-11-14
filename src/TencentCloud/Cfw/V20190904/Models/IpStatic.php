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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statistical line graph general structure
 *
 * @method integer getNum() Obtain Value
 * @method void setNum(integer $Num) Set Value
 * @method string getStatTime() Obtain Time shown on the x-axis of the line graph
 * @method void setStatTime(string $StatTime) Set Time shown on the x-axis of the line graph
 */
class IpStatic extends AbstractModel
{
    /**
     * @var integer Value
     */
    public $Num;

    /**
     * @var string Time shown on the x-axis of the line graph
     */
    public $StatTime;

    /**
     * @param integer $Num Value
     * @param string $StatTime Time shown on the x-axis of the line graph
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
        if (array_key_exists("Num",$param) and $param["Num"] !== null) {
            $this->Num = $param["Num"];
        }

        if (array_key_exists("StatTime",$param) and $param["StatTime"] !== null) {
            $this->StatTime = $param["StatTime"];
        }
    }
}
