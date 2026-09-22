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
 * Playback statistical information.
 *
 * @method string getTime() Obtain Start time of the time interval where the data resides, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). For example, when the time granularity is day, 2018-12-01T00:00:00+08:00 means the interval from December 1, 2018 (inclusive) to December 2, 2018 (exclusive).
<li>For hour-level data, 2019-08-22T00:00:00+08:00 refers to the stats from 0:00 to 1:00 on August 22, 2019.</li>
<li>When representing day-level data, 2019-08-22T00:00:00+08:00 refers to the stats for 2019-08-22.</li>
 * @method void setTime(string $Time) Set Start time of the time interval where the data resides, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). For example, when the time granularity is day, 2018-12-01T00:00:00+08:00 means the interval from December 1, 2018 (inclusive) to December 2, 2018 (exclusive).
<li>For hour-level data, 2019-08-22T00:00:00+08:00 refers to the stats from 0:00 to 1:00 on August 22, 2019.</li>
<li>When representing day-level data, 2019-08-22T00:00:00+08:00 refers to the stats for 2019-08-22.</li>
 * @method string getFileId() Obtain Media file ID.
 * @method void setFileId(string $FileId) Set Media file ID.
 * @method integer getPlayTimes() Obtain Number of plays.
 * @method void setPlayTimes(integer $PlayTimes) Set Number of plays.
 * @method integer getTraffic() Obtain Playback traffic volume. Measurement unit: byte.
 * @method void setTraffic(integer $Traffic) Set Playback traffic volume. Measurement unit: byte.
 */
class PlayStatInfo extends AbstractModel
{
    /**
     * @var string Start time of the time interval where the data resides, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). For example, when the time granularity is day, 2018-12-01T00:00:00+08:00 means the interval from December 1, 2018 (inclusive) to December 2, 2018 (exclusive).
<li>For hour-level data, 2019-08-22T00:00:00+08:00 refers to the stats from 0:00 to 1:00 on August 22, 2019.</li>
<li>When representing day-level data, 2019-08-22T00:00:00+08:00 refers to the stats for 2019-08-22.</li>
     */
    public $Time;

    /**
     * @var string Media file ID.
     */
    public $FileId;

    /**
     * @var integer Number of plays.
     */
    public $PlayTimes;

    /**
     * @var integer Playback traffic volume. Measurement unit: byte.
     */
    public $Traffic;

    /**
     * @param string $Time Start time of the time interval where the data resides, in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). For example, when the time granularity is day, 2018-12-01T00:00:00+08:00 means the interval from December 1, 2018 (inclusive) to December 2, 2018 (exclusive).
<li>For hour-level data, 2019-08-22T00:00:00+08:00 refers to the stats from 0:00 to 1:00 on August 22, 2019.</li>
<li>When representing day-level data, 2019-08-22T00:00:00+08:00 refers to the stats for 2019-08-22.</li>
     * @param string $FileId Media file ID.
     * @param integer $PlayTimes Number of plays.
     * @param integer $Traffic Playback traffic volume. Measurement unit: byte.
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

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("PlayTimes",$param) and $param["PlayTimes"] !== null) {
            $this->PlayTimes = $param["PlayTimes"];
        }

        if (array_key_exists("Traffic",$param) and $param["Traffic"] !== null) {
            $this->Traffic = $param["Traffic"];
        }
    }
}
