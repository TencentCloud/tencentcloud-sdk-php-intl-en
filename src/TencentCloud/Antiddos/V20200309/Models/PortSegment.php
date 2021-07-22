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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Port range information
 *
 * @method integer getBeginPort() Obtain Start port. Value range: 1–65535.
 * @method void setBeginPort(integer $BeginPort) Set Start port. Value range: 1–65535.
 * @method integer getEndPort() Obtain End port. The value should be in the range 1–65535 and cannot be less than that of the start port.
 * @method void setEndPort(integer $EndPort) Set End port. The value should be in the range 1–65535 and cannot be less than that of the start port.
 */
class PortSegment extends AbstractModel
{
    /**
     * @var integer Start port. Value range: 1–65535.
     */
    public $BeginPort;

    /**
     * @var integer End port. The value should be in the range 1–65535 and cannot be less than that of the start port.
     */
    public $EndPort;

    /**
     * @param integer $BeginPort Start port. Value range: 1–65535.
     * @param integer $EndPort End port. The value should be in the range 1–65535 and cannot be less than that of the start port.
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
        if (array_key_exists("BeginPort",$param) and $param["BeginPort"] !== null) {
            $this->BeginPort = $param["BeginPort"];
        }

        if (array_key_exists("EndPort",$param) and $param["EndPort"] !== null) {
            $this->EndPort = $param["EndPort"];
        }
    }
}
