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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Single-link download speed limit configuration parameters
 *
 * @method string getMode() Obtain Download rate limit mode. valid values:.
<Li>LimitUponDownload: rate limit throughout the download process;</li>.
<Li>LimitAfterSpecificBytesDownloaded: rate limit after downloading specific bytes at full speed;</li>.
<Li>LimitAfterSpecificSecondsDownloaded: start speed limit after downloading at full speed for a specific duration.</li>.
 * @method void setMode(string $Mode) Set Download rate limit mode. valid values:.
<Li>LimitUponDownload: rate limit throughout the download process;</li>.
<Li>LimitAfterSpecificBytesDownloaded: rate limit after downloading specific bytes at full speed;</li>.
<Li>LimitAfterSpecificSecondsDownloaded: start speed limit after downloading at full speed for a specific duration.</li>.
 * @method string getMaxSpeed() Obtain Rate-Limiting value, in kb/s. enter a numerical value to specify the rate limit.
 * @method void setMaxSpeed(string $MaxSpeed) Set Rate-Limiting value, in kb/s. enter a numerical value to specify the rate limit.
 * @method string getStartAt() Obtain Rate-Limiting start value, which can be the download size or specified duration, in kb or s. this parameter is required when mode is set to limitafterspecificbytesdownloaded or limitafterspecificsecondsdownloaded. enter a numerical value to specify the download size or duration.
 * @method void setStartAt(string $StartAt) Set Rate-Limiting start value, which can be the download size or specified duration, in kb or s. this parameter is required when mode is set to limitafterspecificbytesdownloaded or limitafterspecificsecondsdownloaded. enter a numerical value to specify the download size or duration.
 */
class ResponseSpeedLimitParameters extends AbstractModel
{
    /**
     * @var string Download rate limit mode. valid values:.
<Li>LimitUponDownload: rate limit throughout the download process;</li>.
<Li>LimitAfterSpecificBytesDownloaded: rate limit after downloading specific bytes at full speed;</li>.
<Li>LimitAfterSpecificSecondsDownloaded: start speed limit after downloading at full speed for a specific duration.</li>.
     */
    public $Mode;

    /**
     * @var string Rate-Limiting value, in kb/s. enter a numerical value to specify the rate limit.
     */
    public $MaxSpeed;

    /**
     * @var string Rate-Limiting start value, which can be the download size or specified duration, in kb or s. this parameter is required when mode is set to limitafterspecificbytesdownloaded or limitafterspecificsecondsdownloaded. enter a numerical value to specify the download size or duration.
     */
    public $StartAt;

    /**
     * @param string $Mode Download rate limit mode. valid values:.
<Li>LimitUponDownload: rate limit throughout the download process;</li>.
<Li>LimitAfterSpecificBytesDownloaded: rate limit after downloading specific bytes at full speed;</li>.
<Li>LimitAfterSpecificSecondsDownloaded: start speed limit after downloading at full speed for a specific duration.</li>.
     * @param string $MaxSpeed Rate-Limiting value, in kb/s. enter a numerical value to specify the rate limit.
     * @param string $StartAt Rate-Limiting start value, which can be the download size or specified duration, in kb or s. this parameter is required when mode is set to limitafterspecificbytesdownloaded or limitafterspecificsecondsdownloaded. enter a numerical value to specify the download size or duration.
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("MaxSpeed",$param) and $param["MaxSpeed"] !== null) {
            $this->MaxSpeed = $param["MaxSpeed"];
        }

        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }
    }
}
