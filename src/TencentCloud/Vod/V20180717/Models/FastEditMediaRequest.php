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
 * @method array getFileInfos() Obtain Input media file information. Supports up to 100 incoming media.
 * @method void setFileInfos(array $FileInfos) Set Input media file information. Supports up to 100 incoming media.
 * @method string getClipMode() Obtain ClipMode indicates whether to include a shard when the editing time point falls in the middle of a TS segment. There are two parameter values: <li>StartInclusiveEndInclusive: When both the start time point and end time point fall in the middle of a shard, the shard will be included;</li> <li>StartInclusiveEndExclusive: When the start time point falls in the middle of a shard, the shard will be included; when the end time point falls in the middle of a shard, the shard will not be included.</li> Default value: StartInclusiveEndInclusive.
 * @method void setClipMode(string $ClipMode) Set ClipMode indicates whether to include a shard when the editing time point falls in the middle of a TS segment. There are two parameter values: <li>StartInclusiveEndInclusive: When both the start time point and end time point fall in the middle of a shard, the shard will be included;</li> <li>StartInclusiveEndExclusive: When the start time point falls in the middle of a shard, the shard will be included; when the end time point falls in the middle of a shard, the shard will not be included.</li> Default value: StartInclusiveEndInclusive.
 * @method integer getSubAppId() Obtain <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 * @method void setSubAppId(integer $SubAppId) Set <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
 */
class FastEditMediaRequest extends AbstractModel
{
    /**
     * @var array Input media file information. Supports up to 100 incoming media.
     */
    public $FileInfos;

    /**
     * @var string ClipMode indicates whether to include a shard when the editing time point falls in the middle of a TS segment. There are two parameter values: <li>StartInclusiveEndInclusive: When both the start time point and end time point fall in the middle of a shard, the shard will be included;</li> <li>StartInclusiveEndExclusive: When the start time point falls in the middle of a shard, the shard will be included; when the end time point falls in the middle of a shard, the shard will not be included.</li> Default value: StartInclusiveEndInclusive.
     */
    public $ClipMode;

    /**
     * @var integer <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
     */
    public $SubAppId;

    /**
     * @param array $FileInfos Input media file information. Supports up to 100 incoming media.
     * @param string $ClipMode ClipMode indicates whether to include a shard when the editing time point falls in the middle of a TS segment. There are two parameter values: <li>StartInclusiveEndInclusive: When both the start time point and end time point fall in the middle of a shard, the shard will be included;</li> <li>StartInclusiveEndExclusive: When the start time point falls in the middle of a shard, the shard will be included; when the end time point falls in the middle of a shard, the shard will not be included.</li> Default value: StartInclusiveEndInclusive.
     * @param integer $SubAppId <b>On-demand [application](https://www.tencentcloud.com/document/product/266/14574?from_cn_redirect=1) ID. Customers who activate on-demand services from December 25, 2023 must fill this field with the app ID when accessing resources in on-demand applications (whether default or newly created).</b>
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
