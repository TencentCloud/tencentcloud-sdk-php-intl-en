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
 * FastEditMedia request structure.
 *
 * @method array getFileInfos() Obtain Input media file information. Supports up to 100 media inputs.
 * @method void setFileInfos(array $FileInfos) Set Input media file information. Supports up to 100 media inputs.
 * @method string getClipMode() Obtain ClipMode indicates whether to include a TS shard when the editing time point falls in the middle of it. There are two values: <li>StartInclusiveEndInclusive: When both the start time point and end time point fall in the middle of a shard, the shard is included.</li> <li>StartInclusiveEndExclusive: When the start time point falls in the middle of a shard, the shard is included; when the end time point falls in the middle of a shard, the shard is not included.</li> If not specified, it defaults to StartInclusiveEndInclusive.
 * @method void setClipMode(string $ClipMode) Set ClipMode indicates whether to include a TS shard when the editing time point falls in the middle of it. There are two values: <li>StartInclusiveEndInclusive: When both the start time point and end time point fall in the middle of a shard, the shard is included.</li> <li>StartInclusiveEndExclusive: When the start time point falls in the middle of a shard, the shard is included; when the end time point falls in the middle of a shard, the shard is not included.</li> If not specified, it defaults to StartInclusiveEndInclusive.
 * @method integer getSubAppId() Obtain <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
 */
class FastEditMediaRequest extends AbstractModel
{
    /**
     * @var array Input media file information. Supports up to 100 media inputs.
     */
    public $FileInfos;

    /**
     * @var string ClipMode indicates whether to include a TS shard when the editing time point falls in the middle of it. There are two values: <li>StartInclusiveEndInclusive: When both the start time point and end time point fall in the middle of a shard, the shard is included.</li> <li>StartInclusiveEndExclusive: When the start time point falls in the middle of a shard, the shard is included; when the end time point falls in the middle of a shard, the shard is not included.</li> If not specified, it defaults to StartInclusiveEndInclusive.
     */
    public $ClipMode;

    /**
     * @var integer <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
     */
    public $SubAppId;

    /**
     * @param array $FileInfos Input media file information. Supports up to 100 media inputs.
     * @param string $ClipMode ClipMode indicates whether to include a TS shard when the editing time point falls in the middle of it. There are two values: <li>StartInclusiveEndInclusive: When both the start time point and end time point fall in the middle of a shard, the shard is included.</li> <li>StartInclusiveEndExclusive: When the start time point falls in the middle of a shard, the shard is included; when the end time point falls in the middle of a shard, the shard is not included.</li> If not specified, it defaults to StartInclusiveEndInclusive.
     * @param integer $SubAppId <b>VOD [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. For customers who activate VOD after December 25, 2023, this field must be set to the app ID when accessing resources in VOD applications, whether in the default application or a newly created application.</b>
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
        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new FastEditMediaFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("ClipMode",$param) and $param["ClipMode"] !== null) {
            $this->ClipMode = $param["ClipMode"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }
    }
}
