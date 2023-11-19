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
 * AI-based sample management - face data operation.
 *
 * @method string getType() Obtain Operation type. Valid values: add, delete, reset. The `reset` operation will clear the existing face data of a figure and add `FaceContents` as the specified face data.
 * @method void setType(string $Type) Set Operation type. Valid values: add, delete, reset. The `reset` operation will clear the existing face data of a figure and add `FaceContents` as the specified face data.
 * @method array getFaceIds() Obtain Face ID set, which is required if `Type` is `delete`.
 * @method void setFaceIds(array $FaceIds) Set Face ID set, which is required if `Type` is `delete`.
 * @method array getFaceContents() Obtain Face image [Base64](https://tools.ietf.org/html/rfc4648) Encoded string collection, only supports jpeg and png image formats. 
<li>When Type is add or reset, this field is required;</li>
<li>Array length limit: 5 pictures. </li>
Note: The picture must be a clear frontal photo of a single person, with a pixel size of no less than 200*200.
 * @method void setFaceContents(array $FaceContents) Set Face image [Base64](https://tools.ietf.org/html/rfc4648) Encoded string collection, only supports jpeg and png image formats. 
<li>When Type is add or reset, this field is required;</li>
<li>Array length limit: 5 pictures. </li>
Note: The picture must be a clear frontal photo of a single person, with a pixel size of no less than 200*200.
 */
class AiSampleFaceOperation extends AbstractModel
{
    /**
     * @var string Operation type. Valid values: add, delete, reset. The `reset` operation will clear the existing face data of a figure and add `FaceContents` as the specified face data.
     */
    public $Type;

    /**
     * @var array Face ID set, which is required if `Type` is `delete`.
     */
    public $FaceIds;

    /**
     * @var array Face image [Base64](https://tools.ietf.org/html/rfc4648) Encoded string collection, only supports jpeg and png image formats. 
<li>When Type is add or reset, this field is required;</li>
<li>Array length limit: 5 pictures. </li>
Note: The picture must be a clear frontal photo of a single person, with a pixel size of no less than 200*200.
     */
    public $FaceContents;

    /**
     * @param string $Type Operation type. Valid values: add, delete, reset. The `reset` operation will clear the existing face data of a figure and add `FaceContents` as the specified face data.
     * @param array $FaceIds Face ID set, which is required if `Type` is `delete`.
     * @param array $FaceContents Face image [Base64](https://tools.ietf.org/html/rfc4648) Encoded string collection, only supports jpeg and png image formats. 
<li>When Type is add or reset, this field is required;</li>
<li>Array length limit: 5 pictures. </li>
Note: The picture must be a clear frontal photo of a single person, with a pixel size of no less than 200*200.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FaceIds",$param) and $param["FaceIds"] !== null) {
            $this->FaceIds = $param["FaceIds"];
        }

        if (array_key_exists("FaceContents",$param) and $param["FaceContents"] !== null) {
            $this->FaceContents = $param["FaceContents"];
        }
    }
}
