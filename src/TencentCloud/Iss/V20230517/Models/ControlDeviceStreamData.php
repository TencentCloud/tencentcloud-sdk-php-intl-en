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
 * Returned data of the streaming address.
 *
 * @method string getFlv() Obtain flv stream address.
 * @method void setFlv(string $Flv) Set flv stream address.
 * @method string getHls() Obtain hls stream address.
 * @method void setHls(string $Hls) Set hls stream address.
 * @method string getRtmp() Obtain rtmp stream address.
 * @method void setRtmp(string $Rtmp) Set rtmp stream address.
 */
class ControlDeviceStreamData extends AbstractModel
{
    /**
     * @var string flv stream address.
     */
    public $Flv;

    /**
     * @var string hls stream address.
     */
    public $Hls;

    /**
     * @var string rtmp stream address.
     */
    public $Rtmp;

    /**
     * @param string $Flv flv stream address.
     * @param string $Hls hls stream address.
     * @param string $Rtmp rtmp stream address.
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
        if (array_key_exists("Flv",$param) and $param["Flv"] !== null) {
            $this->Flv = $param["Flv"];
        }

        if (array_key_exists("Hls",$param) and $param["Hls"] !== null) {
            $this->Hls = $param["Hls"];
        }

        if (array_key_exists("Rtmp",$param) and $param["Rtmp"] !== null) {
            $this->Rtmp = $param["Rtmp"];
        }
    }
}
