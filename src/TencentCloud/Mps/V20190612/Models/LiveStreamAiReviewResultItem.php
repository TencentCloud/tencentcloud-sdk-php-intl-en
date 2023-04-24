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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Result of AI-based live stream audit
 *
 * @method string getType() Obtain The type of moderation result. Valid values:
<li>ImagePorn</li>
<li>ImageTerrorism</li>
<li>ImagePolitical</li>
<li>VoicePorn</li>
 * @method void setType(string $Type) Set The type of moderation result. Valid values:
<li>ImagePorn</li>
<li>ImageTerrorism</li>
<li>ImagePolitical</li>
<li>VoicePorn</li>
 * @method array getImagePornResultSet() Obtain Result of porn information detection in image, which is valid when `Type` is `ImagePorn`.
 * @method void setImagePornResultSet(array $ImagePornResultSet) Set Result of porn information detection in image, which is valid when `Type` is `ImagePorn`.
 * @method array getImageTerrorismResultSet() Obtain The result of detecting sensitive information in images, which is valid if `Type` is `ImageTerrorism`.
 * @method void setImageTerrorismResultSet(array $ImageTerrorismResultSet) Set The result of detecting sensitive information in images, which is valid if `Type` is `ImageTerrorism`.
 * @method array getImagePoliticalResultSet() Obtain The result of detecting sensitive information in images, which is valid if `Type` is `ImagePolitical`.
 * @method void setImagePoliticalResultSet(array $ImagePoliticalResultSet) Set The result of detecting sensitive information in images, which is valid if `Type` is `ImagePolitical`.
 * @method array getVoicePornResultSet() Obtain The result for moderation of pornographic content in audio. This parameter is valid if `Type` is `VoicePorn`.
 * @method void setVoicePornResultSet(array $VoicePornResultSet) Set The result for moderation of pornographic content in audio. This parameter is valid if `Type` is `VoicePorn`.
 */
class LiveStreamAiReviewResultItem extends AbstractModel
{
    /**
     * @var string The type of moderation result. Valid values:
<li>ImagePorn</li>
<li>ImageTerrorism</li>
<li>ImagePolitical</li>
<li>VoicePorn</li>
     */
    public $Type;

    /**
     * @var array Result of porn information detection in image, which is valid when `Type` is `ImagePorn`.
     */
    public $ImagePornResultSet;

    /**
     * @var array The result of detecting sensitive information in images, which is valid if `Type` is `ImageTerrorism`.
     */
    public $ImageTerrorismResultSet;

    /**
     * @var array The result of detecting sensitive information in images, which is valid if `Type` is `ImagePolitical`.
     */
    public $ImagePoliticalResultSet;

    /**
     * @var array The result for moderation of pornographic content in audio. This parameter is valid if `Type` is `VoicePorn`.
     */
    public $VoicePornResultSet;

    /**
     * @param string $Type The type of moderation result. Valid values:
<li>ImagePorn</li>
<li>ImageTerrorism</li>
<li>ImagePolitical</li>
<li>VoicePorn</li>
     * @param array $ImagePornResultSet Result of porn information detection in image, which is valid when `Type` is `ImagePorn`.
     * @param array $ImageTerrorismResultSet The result of detecting sensitive information in images, which is valid if `Type` is `ImageTerrorism`.
     * @param array $ImagePoliticalResultSet The result of detecting sensitive information in images, which is valid if `Type` is `ImagePolitical`.
     * @param array $VoicePornResultSet The result for moderation of pornographic content in audio. This parameter is valid if `Type` is `VoicePorn`.
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

        if (array_key_exists("ImagePornResultSet",$param) and $param["ImagePornResultSet"] !== null) {
            $this->ImagePornResultSet = [];
            foreach ($param["ImagePornResultSet"] as $key => $value){
                $obj = new LiveStreamAiReviewImagePornResult();
                $obj->deserialize($value);
                array_push($this->ImagePornResultSet, $obj);
            }
        }

        if (array_key_exists("ImageTerrorismResultSet",$param) and $param["ImageTerrorismResultSet"] !== null) {
            $this->ImageTerrorismResultSet = [];
            foreach ($param["ImageTerrorismResultSet"] as $key => $value){
                $obj = new LiveStreamAiReviewImageTerrorismResult();
                $obj->deserialize($value);
                array_push($this->ImageTerrorismResultSet, $obj);
            }
        }

        if (array_key_exists("ImagePoliticalResultSet",$param) and $param["ImagePoliticalResultSet"] !== null) {
            $this->ImagePoliticalResultSet = [];
            foreach ($param["ImagePoliticalResultSet"] as $key => $value){
                $obj = new LiveStreamAiReviewImagePoliticalResult();
                $obj->deserialize($value);
                array_push($this->ImagePoliticalResultSet, $obj);
            }
        }

        if (array_key_exists("VoicePornResultSet",$param) and $param["VoicePornResultSet"] !== null) {
            $this->VoicePornResultSet = [];
            foreach ($param["VoicePornResultSet"] as $key => $value){
                $obj = new LiveStreamAiReviewVoicePornResult();
                $obj->deserialize($value);
                array_push($this->VoicePornResultSet, $obj);
            }
        }
    }
}
