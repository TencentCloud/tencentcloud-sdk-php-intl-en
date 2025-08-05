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
 * @method string getMaxSpeed() Obtain The speed limit value specifies the size of the speed limit. fill in a value or variable with a unit. the currently supported unit is: KB/s.
 * @method void setMaxSpeed(string $MaxSpeed) Set The speed limit value specifies the size of the speed limit. fill in a value or variable with a unit. the currently supported unit is: KB/s.
 * @method string getStartAt() Obtain The speed limit start value can be download size or specified duration. fill in a value with unit or variable to specify download size or specified duration.

-When the Mode value is LimitAfterSpecificBytesDownloaded, the valid values of the unit are: KB.

-When the Mode value is LimitAfterSpecificSecondsDownloaded, the valid value of the unit is: s.

 * @method void setStartAt(string $StartAt) Set The speed limit start value can be download size or specified duration. fill in a value with unit or variable to specify download size or specified duration.

-When the Mode value is LimitAfterSpecificBytesDownloaded, the valid values of the unit are: KB.

-When the Mode value is LimitAfterSpecificSecondsDownloaded, the valid value of the unit is: s.
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
     * @var string The speed limit value specifies the size of the speed limit. fill in a value or variable with a unit. the currently supported unit is: KB/s.
     */
    public $MaxSpeed;

    /**
     * @var string The speed limit start value can be download size or specified duration. fill in a value with unit or variable to specify download size or specified duration.

-When the Mode value is LimitAfterSpecificBytesDownloaded, the valid values of the unit are: KB.

-When the Mode value is LimitAfterSpecificSecondsDownloaded, the valid value of the unit is: s.

     */
    public $StartAt;

    /**
     * @param string $Mode Download rate limit mode. valid values:.
<Li>LimitUponDownload: rate limit throughout the download process;</li>.
<Li>LimitAfterSpecificBytesDownloaded: rate limit after downloading specific bytes at full speed;</li>.
<Li>LimitAfterSpecificSecondsDownloaded: start speed limit after downloading at full speed for a specific duration.</li>.
     * @param string $MaxSpeed The speed limit value specifies the size of the speed limit. fill in a value or variable with a unit. the currently supported unit is: KB/s.
     * @param string $StartAt The speed limit start value can be download size or specified duration. fill in a value with unit or variable to specify download size or specified duration.

-When the Mode value is LimitAfterSpecificBytesDownloaded, the valid values of the unit are: KB.

-When the Mode value is LimitAfterSpecificSecondsDownloaded, the valid value of the unit is: s.
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
