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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Single connection download speed limit configuration parameter.
 *
 * @method string getMode() Obtain Download speed limit mode. Valid values:
<li>LimitUponDownload: download speed limit for the entire process;</li>
<li>LimitAfterSpecificBytesDownloaded: Start speed limit after downloading specific bytes at full speed;</li>
<li>LimitAfterSpecificSecondsDownloaded: Start rate limiting after downloading at full speed for a specified time.</li>
 * @method void setMode(string $Mode) Set Download speed limit mode. Valid values:
<li>LimitUponDownload: download speed limit for the entire process;</li>
<li>LimitAfterSpecificBytesDownloaded: Start speed limit after downloading specific bytes at full speed;</li>
<li>LimitAfterSpecificSecondsDownloaded: Start rate limiting after downloading at full speed for a specified time.</li>
 * @method string getMaxSpeed() Obtain Rate-limiting value. Specify the rate limit. Fill in a value with a unit or a variable. Currently supported unit: KB/s.
 * @method void setMaxSpeed(string $MaxSpeed) Set Rate-limiting value. Specify the rate limit. Fill in a value with a unit or a variable. Currently supported unit: KB/s.
 * @method string getStartAt() Obtain Speed limit start value, which can be the download size or specified duration. Fill in a value with a unit or a variable to specify the download size or duration.

-When Mode is LimitAfterSpecificBytesDownloaded, valid values of the unit are: KB;

-When Mode is LimitAfterSpecificSecondsDownloaded, valid values of the measurement unit: s.

 * @method void setStartAt(string $StartAt) Set Speed limit start value, which can be the download size or specified duration. Fill in a value with a unit or a variable to specify the download size or duration.

-When Mode is LimitAfterSpecificBytesDownloaded, valid values of the unit are: KB;

-When Mode is LimitAfterSpecificSecondsDownloaded, valid values of the measurement unit: s.
 */
class ResponseSpeedLimitParameters extends AbstractModel
{
    /**
     * @var string Download speed limit mode. Valid values:
<li>LimitUponDownload: download speed limit for the entire process;</li>
<li>LimitAfterSpecificBytesDownloaded: Start speed limit after downloading specific bytes at full speed;</li>
<li>LimitAfterSpecificSecondsDownloaded: Start rate limiting after downloading at full speed for a specified time.</li>
     */
    public $Mode;

    /**
     * @var string Rate-limiting value. Specify the rate limit. Fill in a value with a unit or a variable. Currently supported unit: KB/s.
     */
    public $MaxSpeed;

    /**
     * @var string Speed limit start value, which can be the download size or specified duration. Fill in a value with a unit or a variable to specify the download size or duration.

-When Mode is LimitAfterSpecificBytesDownloaded, valid values of the unit are: KB;

-When Mode is LimitAfterSpecificSecondsDownloaded, valid values of the measurement unit: s.

     */
    public $StartAt;

    /**
     * @param string $Mode Download speed limit mode. Valid values:
<li>LimitUponDownload: download speed limit for the entire process;</li>
<li>LimitAfterSpecificBytesDownloaded: Start speed limit after downloading specific bytes at full speed;</li>
<li>LimitAfterSpecificSecondsDownloaded: Start rate limiting after downloading at full speed for a specified time.</li>
     * @param string $MaxSpeed Rate-limiting value. Specify the rate limit. Fill in a value with a unit or a variable. Currently supported unit: KB/s.
     * @param string $StartAt Speed limit start value, which can be the download size or specified duration. Fill in a value with a unit or a variable to specify the download size or duration.

-When Mode is LimitAfterSpecificBytesDownloaded, valid values of the unit are: KB;

-When Mode is LimitAfterSpecificSecondsDownloaded, valid values of the measurement unit: s.
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
