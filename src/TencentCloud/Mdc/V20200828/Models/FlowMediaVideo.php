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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The video data of a flow.
 *
 * @method integer getFps() Obtain The frame rate.
 * @method void setFps(integer $Fps) Set The frame rate.
 * @method integer getRate() Obtain The bitrate (bps).
 * @method void setRate(integer $Rate) Set The bitrate (bps).
 * @method integer getPid() Obtain The video PID.
 * @method void setPid(integer $Pid) Set The video PID.
 * @method string getSessionId() Obtain The ID of a push session.
 * @method void setSessionId(string $SessionId) Set The ID of a push session.
 */
class FlowMediaVideo extends AbstractModel
{
    /**
     * @var integer The frame rate.
     */
    public $Fps;

    /**
     * @var integer The bitrate (bps).
     */
    public $Rate;

    /**
     * @var integer The video PID.
     */
    public $Pid;

    /**
     * @var string The ID of a push session.
     */
    public $SessionId;

    /**
     * @param integer $Fps The frame rate.
     * @param integer $Rate The bitrate (bps).
     * @param integer $Pid The video PID.
     * @param string $SessionId The ID of a push session.
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
