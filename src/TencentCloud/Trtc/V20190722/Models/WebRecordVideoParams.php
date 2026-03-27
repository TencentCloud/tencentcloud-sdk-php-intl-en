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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Page recording control parameters
 *
 * @method integer getWidth() Obtain Recording screen width, defaults to 1280, value range [0, 1920]
 * @method void setWidth(integer $Width) Set Recording screen width, defaults to 1280, value range [0, 1920]
 * @method integer getHeight() Obtain Recording screen height, defaults to 720, value range [0, 1080]
 * @method void setHeight(integer $Height) Set Recording screen height, defaults to 720, value range [0, 1080]
 * @method string getFormat() Obtain Specify the output format, optional hls, mp4. When storing to VOD, this parameter is invalid; please use the MediaType setting within TencentVod (https://cloud.tencent.com/document/api/647/44055#TencentVod).
 
 * @method void setFormat(string $Format) Set Specify the output format, optional hls, mp4. When storing to VOD, this parameter is invalid; please use the MediaType setting within TencentVod (https://cloud.tencent.com/document/api/647/44055#TencentVod).
 
 * @method integer getMaxMediaFileDuration() Obtain If the file format is aac or mp4, the system will automatically split the video file when it exceeds the length limit. Unit: minutes. Default: 1440 min (24h), value range: 1-1440. [Single file size is limited to a maximum of 2G. Files will be automatically split if either condition is met: file size >2G or recording duration > 24h]
This parameter does not take effect for Hls format recordings.
Sample value: 1440
 * @method void setMaxMediaFileDuration(integer $MaxMediaFileDuration) Set If the file format is aac or mp4, the system will automatically split the video file when it exceeds the length limit. Unit: minutes. Default: 1440 min (24h), value range: 1-1440. [Single file size is limited to a maximum of 2G. Files will be automatically split if either condition is met: file size >2G or recording duration > 24h]
This parameter does not take effect for Hls format recordings.
Sample value: 1440
 */
class WebRecordVideoParams extends AbstractModel
{
    /**
     * @var integer Recording screen width, defaults to 1280, value range [0, 1920]
     */
    public $Width;

    /**
     * @var integer Recording screen height, defaults to 720, value range [0, 1080]
     */
    public $Height;

    /**
     * @var string Specify the output format, optional hls, mp4. When storing to VOD, this parameter is invalid; please use the MediaType setting within TencentVod (https://cloud.tencent.com/document/api/647/44055#TencentVod).
 
     */
    public $Format;

    /**
     * @var integer If the file format is aac or mp4, the system will automatically split the video file when it exceeds the length limit. Unit: minutes. Default: 1440 min (24h), value range: 1-1440. [Single file size is limited to a maximum of 2G. Files will be automatically split if either condition is met: file size >2G or recording duration > 24h]
This parameter does not take effect for Hls format recordings.
Sample value: 1440
     */
    public $MaxMediaFileDuration;

    /**
     * @param integer $Width Recording screen width, defaults to 1280, value range [0, 1920]
     * @param integer $Height Recording screen height, defaults to 720, value range [0, 1080]
     * @param string $Format Specify the output format, optional hls, mp4. When storing to VOD, this parameter is invalid; please use the MediaType setting within TencentVod (https://cloud.tencent.com/document/api/647/44055#TencentVod).
 
     * @param integer $MaxMediaFileDuration If the file format is aac or mp4, the system will automatically split the video file when it exceeds the length limit. Unit: minutes. Default: 1440 min (24h), value range: 1-1440. [Single file size is limited to a maximum of 2G. Files will be automatically split if either condition is met: file size >2G or recording duration > 24h]
This parameter does not take effect for Hls format recordings.
Sample value: 1440
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
        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("MaxMediaFileDuration",$param) and $param["MaxMediaFileDuration"] !== null) {
            $this->MaxMediaFileDuration = $param["MaxMediaFileDuration"];
        }
    }
}
