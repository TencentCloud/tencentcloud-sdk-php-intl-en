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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getDuration() Obtain Duration in ms, valid when MOTION_Graphics_ACTIVATE, required; An integer in the range of 0-86400000, where 0 represents the duration until the end of the live stream.
 * @method void setDuration(integer $Duration) Set Duration in ms, valid when MOTION_Graphics_ACTIVATE, required; An integer in the range of 0-86400000, where 0 represents the duration until the end of the live stream.
 * @method string getUrl() Obtain The address of HTML5 needs to comply with the format specification of http/https.
 * @method void setUrl(string $Url) Set The address of HTML5 needs to comply with the format specification of http/https.
 */
class MotionGraphicsActivateSetting extends AbstractModel
{
    /**
     * @var integer Duration in ms, valid when MOTION_Graphics_ACTIVATE, required; An integer in the range of 0-86400000, where 0 represents the duration until the end of the live stream.
     */
    public $Duration;

    /**
     * @var string The address of HTML5 needs to comply with the format specification of http/https.
     */
    public $Url;

    /**
     * @param integer $Duration Duration in ms, valid when MOTION_Graphics_ACTIVATE, required; An integer in the range of 0-86400000, where 0 represents the duration until the end of the live stream.
     * @param string $Url The address of HTML5 needs to comply with the format specification of http/https.
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
        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
