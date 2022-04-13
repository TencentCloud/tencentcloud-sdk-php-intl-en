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
 * The playback statistics.
 *
 * @method string getTime() Obtain The start time (in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I)) of the data returned. For example, if the granularity is a day, `2018-12-01T00:00:00+08:00` indicates that the data is for the period between December 1, 2018 (inclusive) and December 2, 2018 (exclusive).
<li>If the granularity is an hour, `2019-08-22T00:00:00+08:00` indicates the data is for the period between 00:00 and 01:00 AM on August 22, 2019.</li>
<li>If the granularity is a day, `2019-08-22T00:00:00+08:00` indicates the data is for August 22, 2019.</li>
 * @method void setTime(string $Time) Set The start time (in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I)) of the data returned. For example, if the granularity is a day, `2018-12-01T00:00:00+08:00` indicates that the data is for the period between December 1, 2018 (inclusive) and December 2, 2018 (exclusive).
<li>If the granularity is an hour, `2019-08-22T00:00:00+08:00` indicates the data is for the period between 00:00 and 01:00 AM on August 22, 2019.</li>
<li>If the granularity is a day, `2019-08-22T00:00:00+08:00` indicates the data is for August 22, 2019.</li>
 * @method string getFileId() Obtain The ID of the media file.
 * @method void setFileId(string $FileId) Set The ID of the media file.
 * @method integer getPlayTimes() Obtain The playback times.
 * @method void setPlayTimes(integer $PlayTimes) Set The playback times.
 * @method integer getTraffic() Obtain The traffic (in bytes) consumed for playback.
 * @method void setTraffic(integer $Traffic) Set The traffic (in bytes) consumed for playback.
 */
class PlayStatInfo extends AbstractModel
{
    /**
     * @var string The start time (in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I)) of the data returned. For example, if the granularity is a day, `2018-12-01T00:00:00+08:00` indicates that the data is for the period between December 1, 2018 (inclusive) and December 2, 2018 (exclusive).
<li>If the granularity is an hour, `2019-08-22T00:00:00+08:00` indicates the data is for the period between 00:00 and 01:00 AM on August 22, 2019.</li>
<li>If the granularity is a day, `2019-08-22T00:00:00+08:00` indicates the data is for August 22, 2019.</li>
     */
    public $Time;

    /**
     * @var string The ID of the media file.
     */
    public $FileId;

    /**
     * @var integer The playback times.
     */
    public $PlayTimes;

    /**
     * @var integer The traffic (in bytes) consumed for playback.
     */
    public $Traffic;

    /**
     * @param string $Time The start time (in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I)) of the data returned. For example, if the granularity is a day, `2018-12-01T00:00:00+08:00` indicates that the data is for the period between December 1, 2018 (inclusive) and December 2, 2018 (exclusive).
<li>If the granularity is an hour, `2019-08-22T00:00:00+08:00` indicates the data is for the period between 00:00 and 01:00 AM on August 22, 2019.</li>
<li>If the granularity is a day, `2019-08-22T00:00:00+08:00` indicates the data is for August 22, 2019.</li>
     * @param string $FileId The ID of the media file.
     * @param integer $PlayTimes The playback times.
     * @param integer $Traffic The traffic (in bytes) consumed for playback.
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
