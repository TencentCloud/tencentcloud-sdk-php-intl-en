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
 * Playback statistics file information
 *
 * @method string getDate() Obtain Date of playback statistics in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setDate(string $Date) Set Date of playback statistics in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getUrl() Obtain URL address of the playback statistics file. The content of the playback statistics file is:
<li> date: Playback date.</li>
<li> file_id: Video file ID.</li>
<li> ip_count: Number of client IPs after deduplication.</li>
<li> flux: playback traffic volume, unit: byte.</li>
<li> play_times: total number of plays.</li>
<li> pc_play_times: Playback times on PC.</li>
<li> mobile_play_times: Mobile playback count.</li>
<li> iphone_play_times: Number of plays on iPhone.</li>
<li> android_play_times: Number of plays on Android.</li>
<li> host_name	Domain name.</li>
 * @method void setUrl(string $Url) Set URL address of the playback statistics file. The content of the playback statistics file is:
<li> date: Playback date.</li>
<li> file_id: Video file ID.</li>
<li> ip_count: Number of client IPs after deduplication.</li>
<li> flux: playback traffic volume, unit: byte.</li>
<li> play_times: total number of plays.</li>
<li> pc_play_times: Playback times on PC.</li>
<li> mobile_play_times: Mobile playback count.</li>
<li> iphone_play_times: Number of plays on iPhone.</li>
<li> android_play_times: Number of plays on Android.</li>
<li> host_name	Domain name.</li>
 */
class PlayStatFileInfo extends AbstractModel
{
    /**
     * @var string Date of playback statistics in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $Date;

    /**
     * @var string URL address of the playback statistics file. The content of the playback statistics file is:
<li> date: Playback date.</li>
<li> file_id: Video file ID.</li>
<li> ip_count: Number of client IPs after deduplication.</li>
<li> flux: playback traffic volume, unit: byte.</li>
<li> play_times: total number of plays.</li>
<li> pc_play_times: Playback times on PC.</li>
<li> mobile_play_times: Mobile playback count.</li>
<li> iphone_play_times: Number of plays on iPhone.</li>
<li> android_play_times: Number of plays on Android.</li>
<li> host_name	Domain name.</li>
     */
    public $Url;

    /**
     * @param string $Date Date of playback statistics in ISO date format (https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $Url URL address of the playback statistics file. The content of the playback statistics file is:
<li> date: Playback date.</li>
<li> file_id: Video file ID.</li>
<li> ip_count: Number of client IPs after deduplication.</li>
<li> flux: playback traffic volume, unit: byte.</li>
<li> play_times: total number of plays.</li>
<li> pc_play_times: Playback times on PC.</li>
<li> mobile_play_times: Mobile playback count.</li>
<li> iphone_play_times: Number of plays on iPhone.</li>
<li> android_play_times: Number of plays on Android.</li>
<li> host_name	Domain name.</li>
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
