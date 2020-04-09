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
 * @method string getType() Obtain Content audit type. Valid values:
<li>ImagePorn: Porn information detection in image</li>
<li>ImageTerrorism: Terrorism information detection in image</li>
<li>ImagePolitical: Politically sensitive information detection in image</li>
<li>PornVoice: Porn information detection in speech</li>
 * @method void setType(string $Type) Set Content audit type. Valid values:
<li>ImagePorn: Porn information detection in image</li>
<li>ImageTerrorism: Terrorism information detection in image</li>
<li>ImagePolitical: Politically sensitive information detection in image</li>
<li>PornVoice: Porn information detection in speech</li>
 * @method array getImagePornResultSet() Obtain Result of porn information detection in image, which is valid when `Type` is `ImagePorn`.
 * @method void setImagePornResultSet(array $ImagePornResultSet) Set Result of porn information detection in image, which is valid when `Type` is `ImagePorn`.
 * @method array getImageTerrorismResultSet() Obtain Result of terrorism information detection in image, which is valid when `Type` is `ImageTerrorism`.
 * @method void setImageTerrorismResultSet(array $ImageTerrorismResultSet) Set Result of terrorism information detection in image, which is valid when `Type` is `ImageTerrorism`.
 * @method array getImagePoliticalResultSet() Obtain Result of politically sensitive information detection in image, which is valid when `Type` is `ImagePolitical`.
 * @method void setImagePoliticalResultSet(array $ImagePoliticalResultSet) Set Result of politically sensitive information detection in image, which is valid when `Type` is `ImagePolitical`.
 * @method array getVoicePornResultSet() Obtain Result of porn information detection in speech, which is valid when `Type` is `PornVoice`.
 * @method void setVoicePornResultSet(array $VoicePornResultSet) Set Result of porn information detection in speech, which is valid when `Type` is `PornVoice`.
 */
class LiveStreamAiReviewResultItem extends AbstractModel
{
    /**
     * @var string Content audit type. Valid values:
<li>ImagePorn: Porn information detection in image</li>
<li>ImageTerrorism: Terrorism information detection in image</li>
<li>ImagePolitical: Politically sensitive information detection in image</li>
<li>PornVoice: Porn information detection in speech</li>
     */
    public $Type;

    /**
     * @var array Result of porn information detection in image, which is valid when `Type` is `ImagePorn`.
     */
    public $ImagePornResultSet;

    /**
     * @var array Result of terrorism information detection in image, which is valid when `Type` is `ImageTerrorism`.
     */
    public $ImageTerrorismResultSet;

    /**
     * @var array Result of politically sensitive information detection in image, which is valid when `Type` is `ImagePolitical`.
     */
    public $ImagePoliticalResultSet;

    /**
     * @var array Result of porn information detection in speech, which is valid when `Type` is `PornVoice`.
     */
    public $VoicePornResultSet;

    /**
     * @param string $Type Content audit type. Valid values:
<li>ImagePorn: Porn information detection in image</li>
<li>ImageTerrorism: Terrorism information detection in image</li>
<li>ImagePolitical: Politically sensitive information detection in image</li>
<li>PornVoice: Porn information detection in speech</li>
     * @param array $ImagePornResultSet Result of porn information detection in image, which is valid when `Type` is `ImagePorn`.
     * @param array $ImageTerrorismResultSet Result of terrorism information detection in image, which is valid when `Type` is `ImageTerrorism`.
     * @param array $ImagePoliticalResultSet Result of politically sensitive information detection in image, which is valid when `Type` is `ImagePolitical`.
     * @param array $VoicePornResultSet Result of porn information detection in speech, which is valid when `Type` is `PornVoice`.
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
