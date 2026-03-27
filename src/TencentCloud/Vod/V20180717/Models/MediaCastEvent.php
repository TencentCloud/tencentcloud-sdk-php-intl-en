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
 * Media relay event notification message.
 *
 * @method string getCastId() Obtain Media relay ID.
 * @method void setCastId(string $CastId) Set Media relay ID.
 * @method string getStatus() Obtain Relay status. Valid values:
<li>Working: Running;</li>
<li>Scheduled: To be started after the scheduled time arrives;</li>
<li>Stopped: Relay stopped;</li>
<li>Idle: Idle.</li>
 * @method void setStatus(string $Status) Set Relay status. Valid values:
<li>Working: Running;</li>
<li>Scheduled: To be started after the scheduled time arrives;</li>
<li>Stopped: Relay stopped;</li>
<li>Idle: Idle.</li>
 */
class MediaCastEvent extends AbstractModel
{
    /**
     * @var string Media relay ID.
     */
    public $CastId;

    /**
     * @var string Relay status. Valid values:
<li>Working: Running;</li>
<li>Scheduled: To be started after the scheduled time arrives;</li>
<li>Stopped: Relay stopped;</li>
<li>Idle: Idle.</li>
     */
    public $Status;

    /**
     * @param string $CastId Media relay ID.
     * @param string $Status Relay status. Valid values:
<li>Working: Running;</li>
<li>Scheduled: To be started after the scheduled time arrives;</li>
<li>Stopped: Relay stopped;</li>
<li>Idle: Idle.</li>
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
