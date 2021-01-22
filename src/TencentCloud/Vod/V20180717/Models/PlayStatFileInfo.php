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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a playback statistics file
 *
 * @method string getDate() Obtain Date of playback statistics in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method void setDate(string $Date) Set Date of playback statistics in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
 * @method string getUrl() Obtain URL of a playback statistics file, including the following contents:
<li> date: playback date</li>
<li> file_id: video file ID</li>
<li> ip_count: number of client IPs after deduplication</li>
<li> flux: playback traffic in bytes</li>
<li> play_times: total playback times</li>
<li> pc_play_times: playback times on PC clients</li>
<li> mobile_play_times: playback times on mobile clients</li>
<li> iphone_play_times: playback times on iPhone</li>
<li> android_play_times: playback times on Android</li>
<li> host_name: domain name</li>
 * @method void setUrl(string $Url) Set URL of a playback statistics file, including the following contents:
<li> date: playback date</li>
<li> file_id: video file ID</li>
<li> ip_count: number of client IPs after deduplication</li>
<li> flux: playback traffic in bytes</li>
<li> play_times: total playback times</li>
<li> pc_play_times: playback times on PC clients</li>
<li> mobile_play_times: playback times on mobile clients</li>
<li> iphone_play_times: playback times on iPhone</li>
<li> android_play_times: playback times on Android</li>
<li> host_name: domain name</li>
 */
class PlayStatFileInfo extends AbstractModel
{
    /**
     * @var string Date of playback statistics in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     */
    public $Date;

    /**
     * @var string URL of a playback statistics file, including the following contents:
<li> date: playback date</li>
<li> file_id: video file ID</li>
<li> ip_count: number of client IPs after deduplication</li>
<li> flux: playback traffic in bytes</li>
<li> play_times: total playback times</li>
<li> pc_play_times: playback times on PC clients</li>
<li> mobile_play_times: playback times on mobile clients</li>
<li> iphone_play_times: playback times on iPhone</li>
<li> android_play_times: playback times on Android</li>
<li> host_name: domain name</li>
     */
    public $Url;

    /**
     * @param string $Date Date of playback statistics in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?lang=en&pg=).
     * @param string $Url URL of a playback statistics file, including the following contents:
<li> date: playback date</li>
<li> file_id: video file ID</li>
<li> ip_count: number of client IPs after deduplication</li>
<li> flux: playback traffic in bytes</li>
<li> play_times: total playback times</li>
<li> pc_play_times: playback times on PC clients</li>
<li> mobile_play_times: playback times on mobile clients</li>
<li> iphone_play_times: playback times on iPhone</li>
<li> android_play_times: playback times on Android</li>
<li> host_name: domain name</li>
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
