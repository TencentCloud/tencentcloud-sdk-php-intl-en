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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The TRTC audio/video duration generated in a certain time period.
 *
 * @method string getTimeKey() Obtain The time point in the format of `YYYY-MM-DD HH:mm:ss`. If more than one day is queried, `HH:mm:ss` is `00:00:00`.
 * @method void setTimeKey(string $TimeKey) Set The time point in the format of `YYYY-MM-DD HH:mm:ss`. If more than one day is queried, `HH:mm:ss` is `00:00:00`.
 * @method array getUsageValue() Obtain The usage (minutes). Each element of this parameter corresponds to an element of `UsageKey` in the order they are listed.
 * @method void setUsageValue(array $UsageValue) Set The usage (minutes). Each element of this parameter corresponds to an element of `UsageKey` in the order they are listed.
 */
class TrtcUsage extends AbstractModel
{
    /**
     * @var string The time point in the format of `YYYY-MM-DD HH:mm:ss`. If more than one day is queried, `HH:mm:ss` is `00:00:00`.
     */
    public $TimeKey;

    /**
     * @var array The usage (minutes). Each element of this parameter corresponds to an element of `UsageKey` in the order they are listed.
     */
    public $UsageValue;

    /**
     * @param string $TimeKey The time point in the format of `YYYY-MM-DD HH:mm:ss`. If more than one day is queried, `HH:mm:ss` is `00:00:00`.
     * @param array $UsageValue The usage (minutes). Each element of this parameter corresponds to an element of `UsageKey` in the order they are listed.
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
        if (array_key_exists("TimeKey",$param) and $param["TimeKey"] !== null) {
            $this->TimeKey = $param["TimeKey"];
        }

        if (array_key_exists("UsageValue",$param) and $param["UsageValue"] !== null) {
            $this->UsageValue = $param["UsageValue"];
        }
    }
}
