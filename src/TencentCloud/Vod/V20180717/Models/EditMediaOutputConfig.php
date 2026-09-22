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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Output of the result file of video editing.
 *
 * @method string getMediaName() Obtain Output filename, up to 64 characters. By default, the system generates the filename.
 * @method void setMediaName(string $MediaName) Set Output filename, up to 64 characters. By default, the system generates the filename.
 * @method string getType() Obtain Output file format. Available values: mp4, hls. mp4 is selected by default.
 * @method void setType(string $Type) Set Output file format. Available values: mp4, hls. mp4 is selected by default.
 * @method integer getClassId() Obtain Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812) API.
<li>Default value: 0, indicate other categories.</li>
 * @method void setClassId(integer $ClassId) Set Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812) API.
<li>Default value: 0, indicate other categories.</li>
 * @method string getExpireTime() Obtain Expiry date of the output file. The file will be deleted after this time. It never expires by default. The format is according to the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setExpireTime(string $ExpireTime) Set Expiry date of the output file. The file will be deleted after this time. It never expires by default. The format is according to the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method EditMediaVideoStream getVideoStream() Obtain Output video information.
 * @method void setVideoStream(EditMediaVideoStream $VideoStream) Set Output video information.
 * @method EditMediaTEHDConfig getTEHDConfig() Obtain TSC transcoding parameters.
 * @method void setTEHDConfig(EditMediaTEHDConfig $TEHDConfig) Set TSC transcoding parameters.
 */
class EditMediaOutputConfig extends AbstractModel
{
    /**
     * @var string Output filename, up to 64 characters. By default, the system generates the filename.
     */
    public $MediaName;

    /**
     * @var string Output file format. Available values: mp4, hls. mp4 is selected by default.
     */
    public $Type;

    /**
     * @var integer Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812) API.
<li>Default value: 0, indicate other categories.</li>
     */
    public $ClassId;

    /**
     * @var string Expiry date of the output file. The file will be deleted after this time. It never expires by default. The format is according to the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ExpireTime;

    /**
     * @var EditMediaVideoStream Output video information.
     */
    public $VideoStream;

    /**
     * @var EditMediaTEHDConfig TSC transcoding parameters.
     */
    public $TEHDConfig;

    /**
     * @param string $MediaName Output filename, up to 64 characters. By default, the system generates the filename.
     * @param string $Type Output file format. Available values: mp4, hls. mp4 is selected by default.
     * @param integer $ClassId Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812) API.
<li>Default value: 0, indicate other categories.</li>
     * @param string $ExpireTime Expiry date of the output file. The file will be deleted after this time. It never expires by default. The format is according to the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param EditMediaVideoStream $VideoStream Output video information.
     * @param EditMediaTEHDConfig $TEHDConfig TSC transcoding parameters.
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
