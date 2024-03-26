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
 * FastEditMedia request structure.
 *
 * @method array getFileInfos() Obtain Input media file information. Support for up to 100 media inputs.
 * @method void setFileInfos(array $FileInfos) Set Input media file information. Support for up to 100 media inputs.
 * @method string getClipMode() Obtain ClipMode is used to indicate whether to include this segment when the clipping time point falls in the middle of a TS segment. There are two values:<li>StartInclusiveEndInclusive: When the clip start time point and end time point fall in the middle of a segment, this segment will be included; </li> <li>StartInclusiveEndExclusive: When the starting time point falls in the middle of a segment, the segment will be included; when the end time point falls in the middle of a segment, the segment will not be included.</li> If not specified, the default is StartInclusiveEndInclusive.
 * @method void setClipMode(string $ClipMode) Set ClipMode is used to indicate whether to include this segment when the clipping time point falls in the middle of a TS segment. There are two values:<li>StartInclusiveEndInclusive: When the clip start time point and end time point fall in the middle of a segment, this segment will be included; </li> <li>StartInclusiveEndExclusive: When the starting time point falls in the middle of a segment, the segment will be included; when the end time point falls in the middle of a segment, the segment will not be included.</li> If not specified, the default is StartInclusiveEndInclusive.
 * @method integer getSubAppId() Obtain <b> VOD [Application](/document/product/266/14574) ID. Customers who activate VOD services from December 25, 2023, if they access resources in VOD applications (whether it is a default application or a newly created application), must fill in this field as the application ID. </b>
 * @method void setSubAppId(integer $SubAppId) Set <b> VOD [Application](/document/product/266/14574) ID. Customers who activate VOD services from December 25, 2023, if they access resources in VOD applications (whether it is a default application or a newly created application), must fill in this field as the application ID. </b>
 */
class FastEditMediaRequest extends AbstractModel
{
    /**
     * @var array Input media file information. Support for up to 100 media inputs.
     */
    public $FileInfos;

    /**
     * @var string ClipMode is used to indicate whether to include this segment when the clipping time point falls in the middle of a TS segment. There are two values:<li>StartInclusiveEndInclusive: When the clip start time point and end time point fall in the middle of a segment, this segment will be included; </li> <li>StartInclusiveEndExclusive: When the starting time point falls in the middle of a segment, the segment will be included; when the end time point falls in the middle of a segment, the segment will not be included.</li> If not specified, the default is StartInclusiveEndInclusive.
     */
    public $ClipMode;

    /**
     * @var integer <b> VOD [Application](/document/product/266/14574) ID. Customers who activate VOD services from December 25, 2023, if they access resources in VOD applications (whether it is a default application or a newly created application), must fill in this field as the application ID. </b>
     */
    public $SubAppId;

    /**
     * @param array $FileInfos Input media file information. Support for up to 100 media inputs.
     * @param string $ClipMode ClipMode is used to indicate whether to include this segment when the clipping time point falls in the middle of a TS segment. There are two values:<li>StartInclusiveEndInclusive: When the clip start time point and end time point fall in the middle of a segment, this segment will be included; </li> <li>StartInclusiveEndExclusive: When the starting time point falls in the middle of a segment, the segment will be included; when the end time point falls in the middle of a segment, the segment will not be included.</li> If not specified, the default is StartInclusiveEndInclusive.
     * @param integer $SubAppId <b> VOD [Application](/document/product/266/14574) ID. Customers who activate VOD services from December 25, 2023, if they access resources in VOD applications (whether it is a default application or a newly created application), must fill in this field as the application ID. </b>
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
