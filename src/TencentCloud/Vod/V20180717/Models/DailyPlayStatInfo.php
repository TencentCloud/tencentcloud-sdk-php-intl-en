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
 * Playback statistics.
 *
 * @method string getDate() Obtain <p>Date of playing the media file, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setDate(string $Date) Set <p>Date of playing the media file, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method string getFileId() Obtain <p>Media file ID.</p>
 * @method void setFileId(string $FileId) Set <p>Media file ID.</p>
 * @method integer getPlayTimes() Obtain <p>Number of plays.</p>
 * @method void setPlayTimes(integer $PlayTimes) Set <p>Number of plays.</p>
 * @method integer getTraffic() Obtain <p>Playback traffic volume, unit: byte.</p>
 * @method void setTraffic(integer $Traffic) Set <p>Playback traffic volume, unit: byte.</p>
 */
class DailyPlayStatInfo extends AbstractModel
{
    /**
     * @var string <p>Date of playing the media file, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $Date;

    /**
     * @var string <p>Media file ID.</p>
     */
    public $FileId;

    /**
     * @var integer <p>Number of plays.</p>
     */
    public $PlayTimes;

    /**
     * @var integer <p>Playback traffic volume, unit: byte.</p>
     */
    public $Traffic;

    /**
     * @param string $Date <p>Date of playing the media file, in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     * @param string $FileId <p>Media file ID.</p>
     * @param integer $PlayTimes <p>Number of plays.</p>
     * @param integer $Traffic <p>Playback traffic volume, unit: byte.</p>
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
