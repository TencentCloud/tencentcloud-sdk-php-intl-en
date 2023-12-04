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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Media type
 *
 * @method string getCodecs() Obtain This field is used to return the codec of the media file passed in, such as WAV, MP3, AAC, FLAC, AMR, 3GP, M4A, WMA, OGG, and APE.
 * @method void setCodecs(string $Codecs) Set This field is used to return the codec of the media file passed in, such as WAV, MP3, AAC, FLAC, AMR, 3GP, M4A, WMA, OGG, and APE.
 * @method integer getDuration() Obtain This field is used to return the segment length of the input streaming media file in milliseconds.** It is 15 seconds** by default and is customizable.
 * @method void setDuration(integer $Duration) Set This field is used to return the segment length of the input streaming media file in milliseconds.** It is 15 seconds** by default and is customizable.
 * @method integer getWidth() Obtain *This field is in beta test. Stay tuned*
 * @method void setWidth(integer $Width) Set *This field is in beta test. Stay tuned*
 * @method integer getHeight() Obtain *This field is in beta test. Stay tuned*
 * @method void setHeight(integer $Height) Set *This field is in beta test. Stay tuned*
 * @method string getThumbnail() Obtain *This field is in beta test. Stay tuned*
 * @method void setThumbnail(string $Thumbnail) Set *This field is in beta test. Stay tuned*
 */
class MediaInfo extends AbstractModel
{
    /**
     * @var string This field is used to return the codec of the media file passed in, such as WAV, MP3, AAC, FLAC, AMR, 3GP, M4A, WMA, OGG, and APE.
     */
    public $Codecs;

    /**
     * @var integer This field is used to return the segment length of the input streaming media file in milliseconds.** It is 15 seconds** by default and is customizable.
     */
    public $Duration;

    /**
     * @var integer *This field is in beta test. Stay tuned*
     */
    public $Width;

    /**
     * @var integer *This field is in beta test. Stay tuned*
     */
    public $Height;

    /**
     * @var string *This field is in beta test. Stay tuned*
     */
    public $Thumbnail;

    /**
     * @param string $Codecs This field is used to return the codec of the media file passed in, such as WAV, MP3, AAC, FLAC, AMR, 3GP, M4A, WMA, OGG, and APE.
     * @param integer $Duration This field is used to return the segment length of the input streaming media file in milliseconds.** It is 15 seconds** by default and is customizable.
     * @param integer $Width *This field is in beta test. Stay tuned*
     * @param integer $Height *This field is in beta test. Stay tuned*
     * @param string $Thumbnail *This field is in beta test. Stay tuned*
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
