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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Delayed broadcast smooth stream delivery configuration.
 *
 * @method boolean getEnable() Obtain Whether to enable delayed broadcast smooth stream delivery: true to enable, false to disable. It is disabled by default.
 * @method void setEnable(boolean $Enable) Set Whether to enable delayed broadcast smooth stream delivery: true to enable, false to disable. It is disabled by default.
 * @method integer getBufferTime() Obtain Delayed broadcast duration, in seconds. Supported range: 10 to 300 seconds.
 * @method void setBufferTime(integer $BufferTime) Set Delayed broadcast duration, in seconds. Supported range: 10 to 300 seconds.
 */
class ResilientStreamConf extends AbstractModel
{
    /**
     * @var boolean Whether to enable delayed broadcast smooth stream delivery: true to enable, false to disable. It is disabled by default.
     */
    public $Enable;

    /**
     * @var integer Delayed broadcast duration, in seconds. Supported range: 10 to 300 seconds.
     */
    public $BufferTime;

    /**
     * @param boolean $Enable Whether to enable delayed broadcast smooth stream delivery: true to enable, false to disable. It is disabled by default.
     * @param integer $BufferTime Delayed broadcast duration, in seconds. Supported range: 10 to 300 seconds.
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("BufferTime",$param) and $param["BufferTime"] !== null) {
            $this->BufferTime = $param["BufferTime"];
        }
    }
}
