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
 * Live stream AI review result
 *
 * @method string getType() Obtain Review result type. Valid values:
<li>ImagePorn: image porn detection.</li>
<li>ImageTerrorism: image terrorism.</li>
<li>ImagePolitical: image political sensitivity.</li>
<li>VoicePorn: sound rule violation.</li>
 * @method void setType(string $Type) Set Review result type. Valid values:
<li>ImagePorn: image porn detection.</li>
<li>ImageTerrorism: image terrorism.</li>
<li>ImagePolitical: image political sensitivity.</li>
<li>VoicePorn: sound rule violation.</li>
 * @method array getImagePornResultSet() Obtain Image porn detection result, valid when Type is ImagePorn.
 * @method void setImagePornResultSet(array $ImagePornResultSet) Set Image porn detection result, valid when Type is ImagePorn.
 * @method array getImageTerrorismResultSet() Obtain Result of image terrorism detection, valid when Type is ImageTerrorism.
 * @method void setImageTerrorismResultSet(array $ImageTerrorismResultSet) Set Result of image terrorism detection, valid when Type is ImageTerrorism.
 * @method array getImagePoliticalResultSet() Obtain The result of image sensitivity, valid when Type is ImagePolitical.
 * @method void setImagePoliticalResultSet(array $ImagePoliticalResultSet) Set The result of image sensitivity, valid when Type is ImagePolitical.
 * @method array getVoicePornResultSet() Obtain Result of sound rule violation, valid when Type is VoicePorn.
 * @method void setVoicePornResultSet(array $VoicePornResultSet) Set Result of sound rule violation, valid when Type is VoicePorn.
 */
class LiveStreamAiReviewResultItem extends AbstractModel
{
    /**
     * @var string Review result type. Valid values:
<li>ImagePorn: image porn detection.</li>
<li>ImageTerrorism: image terrorism.</li>
<li>ImagePolitical: image political sensitivity.</li>
<li>VoicePorn: sound rule violation.</li>
     */
    public $Type;

    /**
     * @var array Image porn detection result, valid when Type is ImagePorn.
     */
    public $ImagePornResultSet;

    /**
     * @var array Result of image terrorism detection, valid when Type is ImageTerrorism.
     */
    public $ImageTerrorismResultSet;

    /**
     * @var array The result of image sensitivity, valid when Type is ImagePolitical.
     */
    public $ImagePoliticalResultSet;

    /**
     * @var array Result of sound rule violation, valid when Type is VoicePorn.
     */
    public $VoicePornResultSet;

    /**
     * @param string $Type Review result type. Valid values:
<li>ImagePorn: image porn detection.</li>
<li>ImageTerrorism: image terrorism.</li>
<li>ImagePolitical: image political sensitivity.</li>
<li>VoicePorn: sound rule violation.</li>
     * @param array $ImagePornResultSet Image porn detection result, valid when Type is ImagePorn.
     * @param array $ImageTerrorismResultSet Result of image terrorism detection, valid when Type is ImageTerrorism.
     * @param array $ImagePoliticalResultSet The result of image sensitivity, valid when Type is ImagePolitical.
     * @param array $VoicePornResultSet Result of sound rule violation, valid when Type is VoicePorn.
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
