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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getCastId() Obtain 
 * @method void setCastId(string $CastId) Set 
 * @method string getStatus() Obtain Retweet status. Valid values:
<li>Working: running.</li>
<li>Scheduled: start up after reaching the scheduled time;</li>
<li>Stopped: relay has been stopped;</li>
<li>Idle: idle.</li>
 * @method void setStatus(string $Status) Set Retweet status. Valid values:
<li>Working: running.</li>
<li>Scheduled: start up after reaching the scheduled time;</li>
<li>Stopped: relay has been stopped;</li>
<li>Idle: idle.</li>
 */
class MediaCastEvent extends AbstractModel
{
    /**
     * @var string 
     */
    public $CastId;

    /**
     * @var string Retweet status. Valid values:
<li>Working: running.</li>
<li>Scheduled: start up after reaching the scheduled time;</li>
<li>Stopped: relay has been stopped;</li>
<li>Idle: idle.</li>
     */
    public $Status;

    /**
     * @param string $CastId 
     * @param string $Status Retweet status. Valid values:
<li>Working: running.</li>
<li>Scheduled: start up after reaching the scheduled time;</li>
<li>Stopped: relay has been stopped;</li>
<li>Idle: idle.</li>
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
        if (array_key_exists("CastId",$param) and $param["CastId"] !== null) {
            $this->CastId = $param["CastId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
