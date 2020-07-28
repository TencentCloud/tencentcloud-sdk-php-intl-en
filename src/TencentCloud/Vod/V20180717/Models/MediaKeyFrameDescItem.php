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
 * Video timestamp information
 *
 * @method float getTimeOffset() Obtain Offset time of video timestamp in seconds.
 * @method void setTimeOffset(float $TimeOffset) Set Offset time of video timestamp in seconds.
 * @method string getContent() Obtain Content string of timestamp containing 1-128 characters.
 * @method void setContent(string $Content) Set Content string of timestamp containing 1-128 characters.
 */
class MediaKeyFrameDescItem extends AbstractModel
{
    /**
     * @var float Offset time of video timestamp in seconds.
     */
    public $TimeOffset;

    /**
     * @var string Content string of timestamp containing 1-128 characters.
     */
    public $Content;

    /**
     * @param float $TimeOffset Offset time of video timestamp in seconds.
     * @param string $Content Content string of timestamp containing 1-128 characters.
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
        if (array_key_exists("TimeOffset",$param) and $param["TimeOffset"] !== null) {
            $this->TimeOffset = $param["TimeOffset"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
