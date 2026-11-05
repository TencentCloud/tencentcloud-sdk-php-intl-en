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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchPersons request structure.
 *
 * @method array getGroupIds() Obtain <p>List of person libraries to query, with a capacity limit of 100. The value of an array element is the GroupId in the person library creation API.</p>
 * @method void setGroupIds(array $GroupIds) Set <p>List of person libraries to query, with a capacity limit of 100. The value of an array element is the GroupId in the person library creation API.</p>
 * @method string getImage() Obtain <p>Image base64 data.</p><ul><li>Size after base64 encoding must not exceed 5M.</li><li>Long side pixel of jpg images cannot exceed 4000, and that of other formats cannot exceed 2000.</li><li>Short side pixel of images in all formats must not be less than 64.</li><li>If an image contains several faces, only the face with the maximum area is selected.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
 * @method void setImage(string $Image) Set <p>Image base64 data.</p><ul><li>Size after base64 encoding must not exceed 5M.</li><li>Long side pixel of jpg images cannot exceed 4000, and that of other formats cannot exceed 2000.</li><li>Short side pixel of images in all formats must not be less than 64.</li><li>If an image contains several faces, only the face with the maximum area is selected.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
 * @method string getUrl() Obtain <p>Image Url.</p><ul><li>The size of the corresponding Image after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000.</li><li>The short side pixel of images in all formats must be not less than 64.</li><li>Either Url or Image must be provided. If both are provided, only Url is used.</li><li>Urls of images stored in Tencent Cloud can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of Urls not stored in Tencent Cloud may be affected to a certain extent.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
 * @method void setUrl(string $Url) Set <p>Image Url.</p><ul><li>The size of the corresponding Image after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000.</li><li>The short side pixel of images in all formats must be not less than 64.</li><li>Either Url or Image must be provided. If both are provided, only Url is used.</li><li>Urls of images stored in Tencent Cloud can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of Urls not stored in Tencent Cloud may be affected to a certain extent.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
 * @method integer getMaxFaceNum() Obtain <p>Maximum number of human faces to be recognized.</p><ul><li>Default value: 1 (only the face with the maximum area in the image is detected). Maximum value: 10.</li><li>MaxFaceNum is used to set the number of faces to search when the input image to be recognized contains several faces.</li><li>For example, if the image in the input Image or Url contains several faces and MaxFaceNum is set to 5, the 5 faces with the maximum area in the image will be recognized.</li></ul>
 * @method void setMaxFaceNum(integer $MaxFaceNum) Set <p>Maximum number of human faces to be recognized.</p><ul><li>Default value: 1 (only the face with the maximum area in the image is detected). Maximum value: 10.</li><li>MaxFaceNum is used to set the number of faces to search when the input image to be recognized contains several faces.</li><li>For example, if the image in the input Image or Url contains several faces and MaxFaceNum is set to 5, the 5 faces with the maximum area in the image will be recognized.</li></ul>
 * @method integer getMinFaceSize() Obtain <p>Minimum length and width of a human face, unit: pixel.</p><ul><li>Default value: 34.</li><li>Less than 34 will affect search accuracy.</li><li>Set it to 80.</li></ul>
 * @method void setMinFaceSize(integer $MinFaceSize) Set <p>Minimum length and width of a human face, unit: pixel.</p><ul><li>Default value: 34.</li><li>Less than 34 will affect search accuracy.</li><li>Set it to 80.</li></ul>
 * @method integer getMaxPersonNum() Obtain <p>Number of most similar persons returned for a single recognized human face.</p><ul><li>Default value: 5. Maximum value: 100.</li><li>For example, if MaxFaceNum is 1 and MaxPersonNum is 8, the information of the Top 8 similar persons is returned.</li><li>A larger value means a longer time to process. It is advisable not to exceed 10.</li></ul>
 * @method void setMaxPersonNum(integer $MaxPersonNum) Set <p>Number of most similar persons returned for a single recognized human face.</p><ul><li>Default value: 5. Maximum value: 100.</li><li>For example, if MaxFaceNum is 1 and MaxPersonNum is 8, the information of the Top 8 similar persons is returned.</li><li>A larger value means a longer time to process. It is advisable not to exceed 10.</li></ul>
 * @method integer getQualityControl() Obtain <p>Image quality control. </p><ul><li>Value range:<br>0: No control.<br>1: Low quality requirement. The image is super blurry, with at least one of the following: eye, nose, or mouth occlusion.<br>2: Normal quality requirement. The image is bright, dark, blurry or generally blurry, with at least three of the following: eyebrow occlusion, cheek occlusion, or chin occlusion.<br>3: High quality requirement. The image is bright, dark, generally blurry, with one or two of the following: eyebrow occlusion, cheek occlusion, or chin occlusion.<br>4: Very high quality requirement. Each dimension is optimal or at most one dimension has a minor problem.</li><li>Default: 0. </li><li>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</li></ul>
 * @method void setQualityControl(integer $QualityControl) Set <p>Image quality control. </p><ul><li>Value range:<br>0: No control.<br>1: Low quality requirement. The image is super blurry, with at least one of the following: eye, nose, or mouth occlusion.<br>2: Normal quality requirement. The image is bright, dark, blurry or generally blurry, with at least three of the following: eyebrow occlusion, cheek occlusion, or chin occlusion.<br>3: High quality requirement. The image is bright, dark, generally blurry, with one or two of the following: eyebrow occlusion, cheek occlusion, or chin occlusion.<br>4: Very high quality requirement. Each dimension is optimal or at most one dimension has a minor problem.</li><li>Default: 0. </li><li>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</li></ul>
 * @method float getFaceMatchThreshold() Obtain <p>In the output parameter Score, only results equal to or greater than the FaceMatchThreshold value will be returned.</p><ul><li>Default value: 0.</li><li>Value range: [0.0,100.0).</li></ul>
 * @method void setFaceMatchThreshold(float $FaceMatchThreshold) Set <p>In the output parameter Score, only results equal to or greater than the FaceMatchThreshold value will be returned.</p><ul><li>Default value: 0.</li><li>Value range: [0.0,100.0).</li></ul>
 * @method integer getNeedPersonInfo() Obtain <p>Whether to return specific personnel information.</p><ul><li>Value range: 0 to disable, 1 to enable.</li><li>Default value: 0.</li><li>Other values other than 0 and 1 default to 0.</li></ul>
 * @method void setNeedPersonInfo(integer $NeedPersonInfo) Set <p>Whether to return specific personnel information.</p><ul><li>Value range: 0 to disable, 1 to enable.</li><li>Default value: 0.</li><li>Other values other than 0 and 1 default to 0.</li></ul>
 * @method integer getNeedRotateDetection() Obtain <p>Whether to enable image rotation recognition support.</p><ul><li>Value range: 0 for not enabled, 1 for enabled.</li><li>Default value: 0.</li><li>This parameter is used when the human face in the image is rotated and the image has no exif information. If image rotation recognition support is not enabled, the human face in the image cannot be correctly detected and recognized.</li><li>If you confirm that the image contains exif information or that the human face in the input image will not be rotated, do not enable this parameter. Once enabled, the overall duration may increase by several hundred milliseconds.</li></ul>
 * @method void setNeedRotateDetection(integer $NeedRotateDetection) Set <p>Whether to enable image rotation recognition support.</p><ul><li>Value range: 0 for not enabled, 1 for enabled.</li><li>Default value: 0.</li><li>This parameter is used when the human face in the image is rotated and the image has no exif information. If image rotation recognition support is not enabled, the human face in the image cannot be correctly detected and recognized.</li><li>If you confirm that the image contains exif information or that the human face in the input image will not be rotated, do not enable this parameter. Once enabled, the overall duration may increase by several hundred milliseconds.</li></ul>
 * @method Encryption getEncryption() Obtain <p>Whether full request body encryption is required. Supported encryption algorithm: AES-256-CBC. Users with encryption requirements can use this parameter.</p>
 * @method void setEncryption(Encryption $Encryption) Set <p>Whether full request body encryption is required. Supported encryption algorithm: AES-256-CBC. Users with encryption requirements can use this parameter.</p>
 * @method string getEncryptedBody() Obtain <p>Encrypted ciphertext. The data format before encryption is as follows: {&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}.</p>
 * @method void setEncryptedBody(string $EncryptedBody) Set <p>Encrypted ciphertext. The data format before encryption is as follows: {&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}.</p>
 */
class SearchPersonsRequest extends AbstractModel
{
    /**
     * @var array <p>List of person libraries to query, with a capacity limit of 100. The value of an array element is the GroupId in the person library creation API.</p>
     */
    public $GroupIds;

    /**
     * @var string <p>Image base64 data.</p><ul><li>Size after base64 encoding must not exceed 5M.</li><li>Long side pixel of jpg images cannot exceed 4000, and that of other formats cannot exceed 2000.</li><li>Short side pixel of images in all formats must not be less than 64.</li><li>If an image contains several faces, only the face with the maximum area is selected.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
     */
    public $Image;

    /**
     * @var string <p>Image Url.</p><ul><li>The size of the corresponding Image after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000.</li><li>The short side pixel of images in all formats must be not less than 64.</li><li>Either Url or Image must be provided. If both are provided, only Url is used.</li><li>Urls of images stored in Tencent Cloud can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of Urls not stored in Tencent Cloud may be affected to a certain extent.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
     */
    public $Url;

    /**
     * @var integer <p>Maximum number of human faces to be recognized.</p><ul><li>Default value: 1 (only the face with the maximum area in the image is detected). Maximum value: 10.</li><li>MaxFaceNum is used to set the number of faces to search when the input image to be recognized contains several faces.</li><li>For example, if the image in the input Image or Url contains several faces and MaxFaceNum is set to 5, the 5 faces with the maximum area in the image will be recognized.</li></ul>
     */
    public $MaxFaceNum;

    /**
     * @var integer <p>Minimum length and width of a human face, unit: pixel.</p><ul><li>Default value: 34.</li><li>Less than 34 will affect search accuracy.</li><li>Set it to 80.</li></ul>
     */
    public $MinFaceSize;

    /**
     * @var integer <p>Number of most similar persons returned for a single recognized human face.</p><ul><li>Default value: 5. Maximum value: 100.</li><li>For example, if MaxFaceNum is 1 and MaxPersonNum is 8, the information of the Top 8 similar persons is returned.</li><li>A larger value means a longer time to process. It is advisable not to exceed 10.</li></ul>
     */
    public $MaxPersonNum;

    /**
     * @var integer <p>Image quality control. </p><ul><li>Value range:<br>0: No control.<br>1: Low quality requirement. The image is super blurry, with at least one of the following: eye, nose, or mouth occlusion.<br>2: Normal quality requirement. The image is bright, dark, blurry or generally blurry, with at least three of the following: eyebrow occlusion, cheek occlusion, or chin occlusion.<br>3: High quality requirement. The image is bright, dark, generally blurry, with one or two of the following: eyebrow occlusion, cheek occlusion, or chin occlusion.<br>4: Very high quality requirement. Each dimension is optimal or at most one dimension has a minor problem.</li><li>Default: 0. </li><li>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</li></ul>
     */
    public $QualityControl;

    /**
     * @var float <p>In the output parameter Score, only results equal to or greater than the FaceMatchThreshold value will be returned.</p><ul><li>Default value: 0.</li><li>Value range: [0.0,100.0).</li></ul>
     */
    public $FaceMatchThreshold;

    /**
     * @var integer <p>Whether to return specific personnel information.</p><ul><li>Value range: 0 to disable, 1 to enable.</li><li>Default value: 0.</li><li>Other values other than 0 and 1 default to 0.</li></ul>
     */
    public $NeedPersonInfo;

    /**
     * @var integer <p>Whether to enable image rotation recognition support.</p><ul><li>Value range: 0 for not enabled, 1 for enabled.</li><li>Default value: 0.</li><li>This parameter is used when the human face in the image is rotated and the image has no exif information. If image rotation recognition support is not enabled, the human face in the image cannot be correctly detected and recognized.</li><li>If you confirm that the image contains exif information or that the human face in the input image will not be rotated, do not enable this parameter. Once enabled, the overall duration may increase by several hundred milliseconds.</li></ul>
     */
    public $NeedRotateDetection;

    /**
     * @var Encryption <p>Whether full request body encryption is required. Supported encryption algorithm: AES-256-CBC. Users with encryption requirements can use this parameter.</p>
     */
    public $Encryption;

    /**
     * @var string <p>Encrypted ciphertext. The data format before encryption is as follows: {&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}.</p>
     */
    public $EncryptedBody;

    /**
     * @param array $GroupIds <p>List of person libraries to query, with a capacity limit of 100. The value of an array element is the GroupId in the person library creation API.</p>
     * @param string $Image <p>Image base64 data.</p><ul><li>Size after base64 encoding must not exceed 5M.</li><li>Long side pixel of jpg images cannot exceed 4000, and that of other formats cannot exceed 2000.</li><li>Short side pixel of images in all formats must not be less than 64.</li><li>If an image contains several faces, only the face with the maximum area is selected.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
     * @param string $Url <p>Image Url.</p><ul><li>The size of the corresponding Image after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000.</li><li>The short side pixel of images in all formats must be not less than 64.</li><li>Either Url or Image must be provided. If both are provided, only Url is used.</li><li>Urls of images stored in Tencent Cloud can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of Urls not stored in Tencent Cloud may be affected to a certain extent.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
     * @param integer $MaxFaceNum <p>Maximum number of human faces to be recognized.</p><ul><li>Default value: 1 (only the face with the maximum area in the image is detected). Maximum value: 10.</li><li>MaxFaceNum is used to set the number of faces to search when the input image to be recognized contains several faces.</li><li>For example, if the image in the input Image or Url contains several faces and MaxFaceNum is set to 5, the 5 faces with the maximum area in the image will be recognized.</li></ul>
     * @param integer $MinFaceSize <p>Minimum length and width of a human face, unit: pixel.</p><ul><li>Default value: 34.</li><li>Less than 34 will affect search accuracy.</li><li>Set it to 80.</li></ul>
     * @param integer $MaxPersonNum <p>Number of most similar persons returned for a single recognized human face.</p><ul><li>Default value: 5. Maximum value: 100.</li><li>For example, if MaxFaceNum is 1 and MaxPersonNum is 8, the information of the Top 8 similar persons is returned.</li><li>A larger value means a longer time to process. It is advisable not to exceed 10.</li></ul>
     * @param integer $QualityControl <p>Image quality control. </p><ul><li>Value range:<br>0: No control.<br>1: Low quality requirement. The image is super blurry, with at least one of the following: eye, nose, or mouth occlusion.<br>2: Normal quality requirement. The image is bright, dark, blurry or generally blurry, with at least three of the following: eyebrow occlusion, cheek occlusion, or chin occlusion.<br>3: High quality requirement. The image is bright, dark, generally blurry, with one or two of the following: eyebrow occlusion, cheek occlusion, or chin occlusion.<br>4: Very high quality requirement. Each dimension is optimal or at most one dimension has a minor problem.</li><li>Default: 0. </li><li>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</li></ul>
     * @param float $FaceMatchThreshold <p>In the output parameter Score, only results equal to or greater than the FaceMatchThreshold value will be returned.</p><ul><li>Default value: 0.</li><li>Value range: [0.0,100.0).</li></ul>
     * @param integer $NeedPersonInfo <p>Whether to return specific personnel information.</p><ul><li>Value range: 0 to disable, 1 to enable.</li><li>Default value: 0.</li><li>Other values other than 0 and 1 default to 0.</li></ul>
     * @param integer $NeedRotateDetection <p>Whether to enable image rotation recognition support.</p><ul><li>Value range: 0 for not enabled, 1 for enabled.</li><li>Default value: 0.</li><li>This parameter is used when the human face in the image is rotated and the image has no exif information. If image rotation recognition support is not enabled, the human face in the image cannot be correctly detected and recognized.</li><li>If you confirm that the image contains exif information or that the human face in the input image will not be rotated, do not enable this parameter. Once enabled, the overall duration may increase by several hundred milliseconds.</li></ul>
     * @param Encryption $Encryption <p>Whether full request body encryption is required. Supported encryption algorithm: AES-256-CBC. Users with encryption requirements can use this parameter.</p>
     * @param string $EncryptedBody <p>Encrypted ciphertext. The data format before encryption is as follows: {&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}.</p>
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
        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("MaxFaceNum",$param) and $param["MaxFaceNum"] !== null) {
            $this->MaxFaceNum = $param["MaxFaceNum"];
        }

        if (array_key_exists("MinFaceSize",$param) and $param["MinFaceSize"] !== null) {
            $this->MinFaceSize = $param["MinFaceSize"];
        }

        if (array_key_exists("MaxPersonNum",$param) and $param["MaxPersonNum"] !== null) {
            $this->MaxPersonNum = $param["MaxPersonNum"];
        }

        if (array_key_exists("QualityControl",$param) and $param["QualityControl"] !== null) {
            $this->QualityControl = $param["QualityControl"];
        }

        if (array_key_exists("FaceMatchThreshold",$param) and $param["FaceMatchThreshold"] !== null) {
            $this->FaceMatchThreshold = $param["FaceMatchThreshold"];
        }

        if (array_key_exists("NeedPersonInfo",$param) and $param["NeedPersonInfo"] !== null) {
            $this->NeedPersonInfo = $param["NeedPersonInfo"];
        }

        if (array_key_exists("NeedRotateDetection",$param) and $param["NeedRotateDetection"] !== null) {
            $this->NeedRotateDetection = $param["NeedRotateDetection"];
        }

        if (array_key_exists("Encryption",$param) and $param["Encryption"] !== null) {
            $this->Encryption = new Encryption();
            $this->Encryption->deserialize($param["Encryption"]);
        }

        if (array_key_exists("EncryptedBody",$param) and $param["EncryptedBody"] !== null) {
            $this->EncryptedBody = $param["EncryptedBody"];
        }
    }
}
