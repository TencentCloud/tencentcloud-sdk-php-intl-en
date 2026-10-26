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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Returned data for obtaining the cloud recording download URL
 *
 * @method string getUrl() Obtain Video recording file download URL
Note:
The URL is valid for 10 minutes. Access will be denied after expiry. Obtain a new one if needed. 
Video file download uses chunked transfer encoding, and the response header is Transfer-Encoding: chunked. 
The naming format of the downloaded file is {ChannelId}-{BeginTime}-{EndTime}.{FileType}
 * @method void setUrl(string $Url) Set Video recording file download URL
Note:
The URL is valid for 10 minutes. Access will be denied after expiry. Obtain a new one if needed. 
Video file download uses chunked transfer encoding, and the response header is Transfer-Encoding: chunked. 
The naming format of the downloaded file is {ChannelId}-{BeginTime}-{EndTime}.{FileType}
 * @method string getActualBeginTime() Obtain Actual download start time of the video recording
Note: This field is returned only when the IsRespActualTime parameter is set to true in the request.
 * @method void setActualBeginTime(string $ActualBeginTime) Set Actual download start time of the video recording
Note: This field is returned only when the IsRespActualTime parameter is set to true in the request.
 * @method string getActualEndTime() Obtain Actual download end time of the video recording
Note: This field is returned only when the IsRespActualTime parameter is set to true in the request.
 * @method void setActualEndTime(string $ActualEndTime) Set Actual download end time of the video recording
Note: This field is returned only when the IsRespActualTime parameter is set to true in the request.
 */
class DescribeVideoDownloadUrlData extends AbstractModel
{
    /**
     * @var string Video recording file download URL
Note:
The URL is valid for 10 minutes. Access will be denied after expiry. Obtain a new one if needed. 
Video file download uses chunked transfer encoding, and the response header is Transfer-Encoding: chunked. 
The naming format of the downloaded file is {ChannelId}-{BeginTime}-{EndTime}.{FileType}
     */
    public $Url;

    /**
     * @var string Actual download start time of the video recording
Note: This field is returned only when the IsRespActualTime parameter is set to true in the request.
     */
    public $ActualBeginTime;

    /**
     * @var string Actual download end time of the video recording
Note: This field is returned only when the IsRespActualTime parameter is set to true in the request.
     */
    public $ActualEndTime;

    /**
     * @param string $Url Video recording file download URL
Note:
The URL is valid for 10 minutes. Access will be denied after expiry. Obtain a new one if needed. 
Video file download uses chunked transfer encoding, and the response header is Transfer-Encoding: chunked. 
The naming format of the downloaded file is {ChannelId}-{BeginTime}-{EndTime}.{FileType}
     * @param string $ActualBeginTime Actual download start time of the video recording
Note: This field is returned only when the IsRespActualTime parameter is set to true in the request.
     * @param string $ActualEndTime Actual download end time of the video recording
Note: This field is returned only when the IsRespActualTime parameter is set to true in the request.
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("ActualBeginTime",$param) and $param["ActualBeginTime"] !== null) {
            $this->ActualBeginTime = $param["ActualBeginTime"];
        }

        if (array_key_exists("ActualEndTime",$param) and $param["ActualEndTime"] !== null) {
            $this->ActualEndTime = $param["ActualEndTime"];
        }
    }
}
