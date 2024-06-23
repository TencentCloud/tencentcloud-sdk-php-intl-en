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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Speed Value Object
 *
 * @method integer getTime() Obtain Timestamp with MillisecondsNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTime(integer $Time) Set Timestamp with MillisecondsNote: This field may return null, indicating that no valid value can be obtained.
 * @method float getSpeed() Obtain NoNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setSpeed(float $Speed) Set NoNote: This field may return null, indicating that no valid value can be obtained.
 */
class SpeedValue extends AbstractModel
{
    /**
     * @var integer Timestamp with MillisecondsNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Time;

    /**
     * @var float NoNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Speed;

    /**
     * @param integer $Time Timestamp with MillisecondsNote: This field may return null, indicating that no valid value can be obtained.
     * @param float $Speed NoNote: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Speed",$param) and $param["Speed"] !== null) {
            $this->Speed = $param["Speed"];
        }
    }
}
