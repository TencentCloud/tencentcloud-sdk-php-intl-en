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
 * Live recording information
 *
 * @method string getStreamId() Obtain Live recording stream ID.
 * @method void setStreamId(string $StreamId) Set Live recording stream ID.
 * @method string getRecordStartTime() Obtain Recording start time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method void setRecordStartTime(string $RecordStartTime) Set Recording start time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method string getRecordEndTime() Obtain Recording end time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method void setRecordEndTime(string $RecordEndTime) Set Recording end time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 */
class LiveRecordInfo extends AbstractModel
{
    /**
     * @var string Live recording stream ID.
     */
    public $StreamId;

    /**
     * @var string Recording start time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     */
    public $RecordStartTime;

    /**
     * @var string Recording end time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     */
    public $RecordEndTime;

    /**
     * @param string $StreamId Live recording stream ID.
     * @param string $RecordStartTime Recording start time, use [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     * @param string $RecordEndTime Recording end time, using [ISO date format](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
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
        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("RecordStartTime",$param) and $param["RecordStartTime"] !== null) {
            $this->RecordStartTime = $param["RecordStartTime"];
        }

        if (array_key_exists("RecordEndTime",$param) and $param["RecordEndTime"] !== null) {
            $this->RecordEndTime = $param["RecordEndTime"];
        }
    }
}
