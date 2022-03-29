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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Media type
 *
 * @method integer getDuration() Obtain This field is used to return the segment length of the input video stream in seconds. It is **5 seconds by default** and is customizable.<br>Note: this field will take effect only when the moderated file is streaming media. If it returns 0, no valid value has been obtained.
 * @method void setDuration(integer $Duration) Set This field is used to return the segment length of the input video stream in seconds. It is **5 seconds by default** and is customizable.<br>Note: this field will take effect only when the moderated file is streaming media. If it returns 0, no valid value has been obtained.
 */
class MediaInfo extends AbstractModel
{
    /**
     * @var integer This field is used to return the segment length of the input video stream in seconds. It is **5 seconds by default** and is customizable.<br>Note: this field will take effect only when the moderated file is streaming media. If it returns 0, no valid value has been obtained.
     */
    public $Duration;

    /**
     * @param integer $Duration This field is used to return the segment length of the input video stream in seconds. It is **5 seconds by default** and is customizable.<br>Note: this field will take effect only when the moderated file is streaming media. If it returns 0, no valid value has been obtained.
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
    }
}
