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
 * Output for media quality enhance task
 *
 * @method string getFileType() Obtain File types such as mp4, flv, etc.
 * @method void setFileType(string $FileType) Set File types such as mp4, flv, etc.
 * @method string getFileUrl() Obtain Media file playback address.
 * @method void setFileUrl(string $FileUrl) Set Media file playback address.
 * @method string getFileId() Obtain Media file ID.
 * @method void setFileId(string $FileId) Set Media file ID.
 * @method string getMediaName() Obtain Output file name, up to 64 characters. By default, the generated file name is specified by the system.
 * @method void setMediaName(string $MediaName) Set Output file name, up to 64 characters. By default, the generated file name is specified by the system.
 * @method integer getClassId() Obtain Classification ID is used to classify media. You can create a classification through the [Create Classification](https://intl.cloud.tencent.com/document/product/266/7812?from_cn_redirect=1) interface to obtain the classification ID. 
<li>Default value: 0, indicating other categories. </li>
 * @method void setClassId(integer $ClassId) Set Classification ID is used to classify media. You can create a classification through the [Create Classification](https://intl.cloud.tencent.com/document/product/266/7812?from_cn_redirect=1) interface to obtain the classification ID. 
<li>Default value: 0, indicating other categories. </li>
 * @method string getExpireTime() Obtain The expiration time of the output file. The file will be deleted after this time. The default is permanent and not expired. The format is expressed in accordance with the ISO 8601 standard. For details, see [ISO Date Format Description](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 * @method void setExpireTime(string $ExpireTime) Set The expiration time of the output file. The file will be deleted after this time. The default is permanent and not expired. The format is expressed in accordance with the ISO 8601 standard. For details, see [ISO Date Format Description](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
 */
class QualityEnhanceTaskOutput extends AbstractModel
{
    /**
     * @var string File types such as mp4, flv, etc.
     */
    public $FileType;

    /**
     * @var string Media file playback address.
     */
    public $FileUrl;

    /**
     * @var string Media file ID.
     */
    public $FileId;

    /**
     * @var string Output file name, up to 64 characters. By default, the generated file name is specified by the system.
     */
    public $MediaName;

    /**
     * @var integer Classification ID is used to classify media. You can create a classification through the [Create Classification](https://intl.cloud.tencent.com/document/product/266/7812?from_cn_redirect=1) interface to obtain the classification ID. 
<li>Default value: 0, indicating other categories. </li>
     */
    public $ClassId;

    /**
     * @var string The expiration time of the output file. The file will be deleted after this time. The default is permanent and not expired. The format is expressed in accordance with the ISO 8601 standard. For details, see [ISO Date Format Description](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
     */
    public $ExpireTime;

    /**
     * @param string $FileType File types such as mp4, flv, etc.
     * @param string $FileUrl Media file playback address.
     * @param string $FileId Media file ID.
     * @param string $MediaName Output file name, up to 64 characters. By default, the generated file name is specified by the system.
     * @param integer $ClassId Classification ID is used to classify media. You can create a classification through the [Create Classification](https://intl.cloud.tencent.com/document/product/266/7812?from_cn_redirect=1) interface to obtain the classification ID. 
<li>Default value: 0, indicating other categories. </li>
     * @param string $ExpireTime The expiration time of the output file. The file will be deleted after this time. The default is permanent and not expired. The format is expressed in accordance with the ISO 8601 standard. For details, see [ISO Date Format Description](https://www.tencentcloud.com/document/product/266/11732#iso-date-format).
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
        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
