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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pipeline input audio statistics.
 *
 * @method integer getFps() Obtain Audio FPS.
 * @method void setFps(integer $Fps) Set Audio FPS.
 * @method integer getRate() Obtain Audio bitrate in bps.
 * @method void setRate(integer $Rate) Set Audio bitrate in bps.
 * @method integer getPid() Obtain Audio `Pid`, which is available only if the input is `rtp/udp`.
 * @method void setPid(integer $Pid) Set Audio `Pid`, which is available only if the input is `rtp/udp`.
 */
class AudioPipelineInputStatistics extends AbstractModel
{
    /**
     * @var integer Audio FPS.
     */
    public $Fps;

    /**
     * @var integer Audio bitrate in bps.
     */
    public $Rate;

    /**
     * @var integer Audio `Pid`, which is available only if the input is `rtp/udp`.
     */
    public $Pid;

    /**
     * @param integer $Fps Audio FPS.
     * @param integer $Rate Audio bitrate in bps.
     * @param integer $Pid Audio `Pid`, which is available only if the input is `rtp/udp`.
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
        if (array_key_exists("Fps",$param) and $param["Fps"] !== null) {
            $this->Fps = $param["Fps"];
        }

        if (array_key_exists("Rate",$param) and $param["Rate"] !== null) {
            $this->Rate = $param["Rate"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }
    }
}
