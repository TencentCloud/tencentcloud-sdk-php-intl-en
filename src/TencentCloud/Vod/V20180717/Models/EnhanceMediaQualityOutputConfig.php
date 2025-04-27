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
 * Remaster result file output
 *
 * @method string getMediaName() Obtain Output file name, up to 64 characters. The system will specify the file name by default
 * @method void setMediaName(string $MediaName) Set Output file name, up to 64 characters. The system will specify the file name by default
 * @method integer getClassId() Obtain Category ID, used for media classification management, can be obtained by [creating a category](https://intl.cloud.tencent.com/document/product/266/7812?from_cn_redirect=1) interface, create a category, get the category ID.
<li>Default value: 0, which means other categories.</li>
 * @method void setClassId(integer $ClassId) Set Category ID, used for media classification management, can be obtained by [creating a category](https://intl.cloud.tencent.com/document/product/266/7812?from_cn_redirect=1) interface, create a category, get the category ID.
<li>Default value: 0, which means other categories.</li>
 * @method string getExpireTime() Obtain The expiration time of the output file, the file will be deleted after this time, the default is never to expire, the format is in accordance with the ISO 8601 standard, see [ISO date format description](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setExpireTime(string $ExpireTime) Set The expiration time of the output file, the file will be deleted after this time, the default is never to expire, the format is in accordance with the ISO 8601 standard, see [ISO date format description](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class EnhanceMediaQualityOutputConfig extends AbstractModel
{
    /**
     * @var string Output file name, up to 64 characters. The system will specify the file name by default
     */
    public $MediaName;

    /**
     * @var integer Category ID, used for media classification management, can be obtained by [creating a category](https://intl.cloud.tencent.com/document/product/266/7812?from_cn_redirect=1) interface, create a category, get the category ID.
<li>Default value: 0, which means other categories.</li>
     */
    public $ClassId;

    /**
     * @var string The expiration time of the output file, the file will be deleted after this time, the default is never to expire, the format is in accordance with the ISO 8601 standard, see [ISO date format description](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ExpireTime;

    /**
     * @param string $MediaName Output file name, up to 64 characters. The system will specify the file name by default
     * @param integer $ClassId Category ID, used for media classification management, can be obtained by [creating a category](https://intl.cloud.tencent.com/document/product/266/7812?from_cn_redirect=1) interface, create a category, get the category ID.
<li>Default value: 0, which means other categories.</li>
     * @param string $ExpireTime The expiration time of the output file, the file will be deleted after this time, the default is never to expire, the format is in accordance with the ISO 8601 standard, see [ISO date format description](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
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

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
