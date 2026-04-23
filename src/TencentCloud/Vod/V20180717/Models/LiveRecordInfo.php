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
 * Live recording information
 *
 * @method string getDomain() Obtain <p>Live streaming Recording domain name</p>
 * @method void setDomain(string $Domain) Set <p>Live streaming Recording domain name</p>
 * @method string getPath() Obtain <p>Live streaming Recording Path</p>
 * @method void setPath(string $Path) Set <p>Live streaming Recording Path</p>
 * @method string getStreamId() Obtain <p>Live recording stream ID.</p>
 * @method void setStreamId(string $StreamId) Set <p>Live recording stream ID.</p>
 * @method string getRecordStartTime() Obtain <p>Recording start time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO datetime format</a>.</p>
 * @method void setRecordStartTime(string $RecordStartTime) Set <p>Recording start time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO datetime format</a>.</p>
 * @method string getRecordEndTime() Obtain <p>Recording end time, using <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 * @method void setRecordEndTime(string $RecordEndTime) Set <p>Recording end time, using <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
 */
class LiveRecordInfo extends AbstractModel
{
    /**
     * @var string <p>Live streaming Recording domain name</p>
     */
    public $Domain;

    /**
     * @var string <p>Live streaming Recording Path</p>
     */
    public $Path;

    /**
     * @var string <p>Live recording stream ID.</p>
     */
    public $StreamId;

    /**
     * @var string <p>Recording start time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO datetime format</a>.</p>
     */
    public $RecordStartTime;

    /**
     * @var string <p>Recording end time, using <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
     */
    public $RecordEndTime;

    /**
     * @param string $Domain <p>Live streaming Recording domain name</p>
     * @param string $Path <p>Live streaming Recording Path</p>
     * @param string $StreamId <p>Live recording stream ID.</p>
     * @param string $RecordStartTime <p>Recording start time in <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO datetime format</a>.</p>
     * @param string $RecordEndTime <p>Recording end time, using <a href="https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I">ISO date format</a>.</p>
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
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
