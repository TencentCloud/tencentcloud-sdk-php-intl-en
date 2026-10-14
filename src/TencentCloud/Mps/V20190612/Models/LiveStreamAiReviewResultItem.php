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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI review result of the live stream
 *
 * @method string getType() Obtain Type of the review result. Valid values:
<li>ImagePorn: image moderation.</li>
<li>ImageTerrorism: image involving sensitive content.</li>
<li>ImagePolitical: politically sensitive image.</li>
<li>VoicePorn: sound violation.</li>
 * @method void setType(string $Type) Set Type of the review result. Valid values:
<li>ImagePorn: image moderation.</li>
<li>ImageTerrorism: image involving sensitive content.</li>
<li>ImagePolitical: politically sensitive image.</li>
<li>VoicePorn: sound violation.</li>
 * @method array getImagePornResultSet() Obtain Result of porn detection on the image. Valid when Type is ImagePorn.
 * @method void setImagePornResultSet(array $ImagePornResultSet) Set Result of porn detection on the image. Valid when Type is ImagePorn.
 * @method array getImageTerrorismResultSet() Obtain Image moderation result. Valid when Type is ImageTerrorism.
 * @method void setImageTerrorismResultSet(array $ImageTerrorismResultSet) Set Image moderation result. Valid when Type is ImageTerrorism.
 * @method array getImagePoliticalResultSet() Obtain Image moderation result. Valid when Type is ImagePolitical.
 * @method void setImagePoliticalResultSet(array $ImagePoliticalResultSet) Set Image moderation result. Valid when Type is ImagePolitical.
 * @method array getVoicePornResultSet() Obtain Result of sound rule violation. Valid when `Type` is `VoicePorn`.
 * @method void setVoicePornResultSet(array $VoicePornResultSet) Set Result of sound rule violation. Valid when `Type` is `VoicePorn`.
 */
class LiveStreamAiReviewResultItem extends AbstractModel
{
    /**
     * @var string Type of the review result. Valid values:
<li>ImagePorn: image moderation.</li>
<li>ImageTerrorism: image involving sensitive content.</li>
<li>ImagePolitical: politically sensitive image.</li>
<li>VoicePorn: sound violation.</li>
     */
    public $Type;

    /**
     * @var array Result of porn detection on the image. Valid when Type is ImagePorn.
     */
    public $ImagePornResultSet;

    /**
     * @var array Image moderation result. Valid when Type is ImageTerrorism.
     */
    public $ImageTerrorismResultSet;

    /**
     * @var array Image moderation result. Valid when Type is ImagePolitical.
     */
    public $ImagePoliticalResultSet;

    /**
     * @var array Result of sound rule violation. Valid when `Type` is `VoicePorn`.
     */
    public $VoicePornResultSet;

    /**
     * @param string $Type Type of the review result. Valid values:
<li>ImagePorn: image moderation.</li>
<li>ImageTerrorism: image involving sensitive content.</li>
<li>ImagePolitical: politically sensitive image.</li>
<li>VoicePorn: sound violation.</li>
     * @param array $ImagePornResultSet Result of porn detection on the image. Valid when Type is ImagePorn.
     * @param array $ImageTerrorismResultSet Image moderation result. Valid when Type is ImageTerrorism.
     * @param array $ImagePoliticalResultSet Image moderation result. Valid when Type is ImagePolitical.
     * @param array $VoicePornResultSet Result of sound rule violation. Valid when `Type` is `VoicePorn`.
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
