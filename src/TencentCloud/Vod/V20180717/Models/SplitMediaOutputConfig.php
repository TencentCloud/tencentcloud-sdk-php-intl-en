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
 * Video splitting result file output.
 *
 * @method string getMediaName() Obtain Output filename, up to 64 characters. By default, the system assigns the generated filename.
 * @method void setMediaName(string $MediaName) Set Output filename, up to 64 characters. By default, the system assigns the generated filename.
 * @method string getType() Obtain Output file format. Available values: mp4, hls. mp4 is selected by default.
 * @method void setType(string $Type) Set Output file format. Available values: mp4, hls. mp4 is selected by default.
 * @method integer getClassId() Obtain Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812) API.
<li>Default value: 0, indicate other categories.</li>
 * @method void setClassId(integer $ClassId) Set Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812) API.
<li>Default value: 0, indicate other categories.</li>
 * @method string getExpireTime() Obtain Expiry date of the output file. The file will be deleted after this time. It never expires by default. Format according to the ISO 8601 standard representation. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setExpireTime(string $ExpireTime) Set Expiry date of the output file. The file will be deleted after this time. It never expires by default. Format according to the ISO 8601 standard representation. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class SplitMediaOutputConfig extends AbstractModel
{
    /**
     * @var string Output filename, up to 64 characters. By default, the system assigns the generated filename.
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
     * @var string Expiry date of the output file. The file will be deleted after this time. It never expires by default. Format according to the ISO 8601 standard representation. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ExpireTime;

    /**
     * @param string $MediaName Output filename, up to 64 characters. By default, the system assigns the generated filename.
     * @param string $Type Output file format. Available values: mp4, hls. mp4 is selected by default.
     * @param integer $ClassId Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812) API.
<li>Default value: 0, indicate other categories.</li>
     * @param string $ExpireTime Expiry date of the output file. The file will be deleted after this time. It never expires by default. Format according to the ISO 8601 standard representation. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
    }
}
