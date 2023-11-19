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
 * Result file output of edited video.
 *
 * @method string getMediaName() Obtain Output file name, up to 64 characters. By default, the generated file name is specified by the system.
 * @method void setMediaName(string $MediaName) Set Output file name, up to 64 characters. By default, the generated file name is specified by the system.
 * @method string getType() Obtain Output file format, optional values: mp4, hls. The default is mp4.
 * @method void setType(string $Type) Set Output file format, optional values: mp4, hls. The default is mp4.
 * @method integer getClassId() Obtain Classification ID is used to classify media. You can create a classification through the Create Classification interface to obtain the classification ID. 
<li>Default value: 0, indicating other categories. </li>
 * @method void setClassId(integer $ClassId) Set Classification ID is used to classify media. You can create a classification through the Create Classification interface to obtain the classification ID. 
<li>Default value: 0, indicating other categories. </li>
 * @method string getExpireTime() Obtain The expiration time of the output file. The file will be deleted after this time. The default is permanent and not expired. The format is expressed in accordance with the ISO 8601 standard. For details, see [ISO Date Format Description](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method void setExpireTime(string $ExpireTime) Set The expiration time of the output file. The file will be deleted after this time. The default is permanent and not expired. The format is expressed in accordance with the ISO 8601 standard. For details, see [ISO Date Format Description](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method EditMediaVideoStream getVideoStream() Obtain Output video information.
 * @method void setVideoStream(EditMediaVideoStream $VideoStream) Set Output video information.
 * @method EditMediaTEHDConfig getTEHDConfig() Obtain TSC Transcoding Config.
 * @method void setTEHDConfig(EditMediaTEHDConfig $TEHDConfig) Set TSC Transcoding Config.
 */
class EditMediaOutputConfig extends AbstractModel
{
    /**
     * @var string Output file name, up to 64 characters. By default, the generated file name is specified by the system.
     */
    public $MediaName;

    /**
     * @var string Output file format, optional values: mp4, hls. The default is mp4.
     */
    public $Type;

    /**
     * @var integer Classification ID is used to classify media. You can create a classification through the Create Classification interface to obtain the classification ID. 
<li>Default value: 0, indicating other categories. </li>
     */
    public $ClassId;

    /**
     * @var string The expiration time of the output file. The file will be deleted after this time. The default is permanent and not expired. The format is expressed in accordance with the ISO 8601 standard. For details, see [ISO Date Format Description](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     */
    public $ExpireTime;

    /**
     * @var EditMediaVideoStream Output video information.
     */
    public $VideoStream;

    /**
     * @var EditMediaTEHDConfig TSC Transcoding Config.
     */
    public $TEHDConfig;

    /**
     * @param string $MediaName Output file name, up to 64 characters. By default, the generated file name is specified by the system.
     * @param string $Type Output file format, optional values: mp4, hls. The default is mp4.
     * @param integer $ClassId Classification ID is used to classify media. You can create a classification through the Create Classification interface to obtain the classification ID. 
<li>Default value: 0, indicating other categories. </li>
     * @param string $ExpireTime The expiration time of the output file. The file will be deleted after this time. The default is permanent and not expired. The format is expressed in accordance with the ISO 8601 standard. For details, see [ISO Date Format Description](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     * @param EditMediaVideoStream $VideoStream Output video information.
     * @param EditMediaTEHDConfig $TEHDConfig TSC Transcoding Config.
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
        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("VideoStream",$param) and $param["VideoStream"] !== null) {
            $this->VideoStream = new EditMediaVideoStream();
            $this->VideoStream->deserialize($param["VideoStream"]);
        }

        if (array_key_exists("TEHDConfig",$param) and $param["TEHDConfig"] !== null) {
            $this->TEHDConfig = new EditMediaTEHDConfig();
            $this->TEHDConfig->deserialize($param["TEHDConfig"]);
        }
    }
}
