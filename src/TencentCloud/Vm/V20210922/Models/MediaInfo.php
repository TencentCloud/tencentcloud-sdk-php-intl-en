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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Media type
 *
 * @method string getCodecs() Obtain Encoding format
 * @method void setCodecs(string $Codecs) Set Encoding format
 * @method integer getDuration() Obtain Segment duration during stream detection
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDuration(integer $Duration) Set Segment duration during stream detection
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getWidth() Obtain Width, in pixels
 * @method void setWidth(integer $Width) Set Width, in pixels
 * @method integer getHeight() Obtain Height, in pixels
 * @method void setHeight(integer $Height) Set Height, in pixels
 * @method string getThumbnail() Obtain Cover
 * @method void setThumbnail(string $Thumbnail) Set Cover
 */
class MediaInfo extends AbstractModel
{
    /**
     * @var string Encoding format
     */
    public $Codecs;

    /**
     * @var integer Segment duration during stream detection
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Duration;

    /**
     * @var integer Width, in pixels
     */
    public $Width;

    /**
     * @var integer Height, in pixels
     */
    public $Height;

    /**
     * @var string Cover
     */
    public $Thumbnail;

    /**
     * @param string $Codecs Encoding format
     * @param integer $Duration Segment duration during stream detection
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Width Width, in pixels
     * @param integer $Height Height, in pixels
     * @param string $Thumbnail Cover
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
        if (array_key_exists("Codecs",$param) and $param["Codecs"] !== null) {
            $this->Codecs = $param["Codecs"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Thumbnail",$param) and $param["Thumbnail"] !== null) {
            $this->Thumbnail = $param["Thumbnail"];
        }
    }
}
