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
 * CreateFace request structure.
 *
 * @method string getPersonId() Obtain <p>Person ID, which is the PersonId in the person creation API.</p>
 * @method void setPersonId(string $PersonId) Set <p>Person ID, which is the PersonId in the person creation API.</p>
 * @method array getImages() Obtain <p>base64 data of the image.</p><ul><li>base64 encoded size must not exceed 5M.</li><li>For jpg format, the long side pixel must not exceed 4000. For other formats, the image long edge must not exceed 2000. The short side pixel of images in all formats must be not less than 64.</li><li>The total number of faces must not exceed 5.</li><li>If the image contains several faces, only the face with the maximum area is selected.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
 * @method void setImages(array $Images) Set <p>base64 data of the image.</p><ul><li>base64 encoded size must not exceed 5M.</li><li>For jpg format, the long side pixel must not exceed 4000. For other formats, the image long edge must not exceed 2000. The short side pixel of images in all formats must be not less than 64.</li><li>The total number of faces must not exceed 5.</li><li>If the image contains several faces, only the face with the maximum area is selected.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
 * @method array getUrls() Obtain <p>Image Url.</p><ul><li>The size of the corresponding Image after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel must not exceed 4000. For other Image formats, the long side pixel must not exceed 2000. The short side pixel of images in all formats must be not less than 64.</li><li>Either Url or Image must be provided. If both are provided, only Url is used.</li><li>Images stored in Tencent Cloud URLs can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of non-Tencent Cloud Storage URLs may be affected to a certain extent.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li><li>The total number of human faces must not exceed 5.</li><li>If the Image contains several faces, only the face with the maximum area is selected.</li></ul>
 * @method void setUrls(array $Urls) Set <p>Image Url.</p><ul><li>The size of the corresponding Image after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel must not exceed 4000. For other Image formats, the long side pixel must not exceed 2000. The short side pixel of images in all formats must be not less than 64.</li><li>Either Url or Image must be provided. If both are provided, only Url is used.</li><li>Images stored in Tencent Cloud URLs can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of non-Tencent Cloud Storage URLs may be affected to a certain extent.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li><li>The total number of human faces must not exceed 5.</li><li>If the Image contains several faces, only the face with the maximum area is selected.</li></ul>
 * @method float getFaceMatchThreshold() Obtain <p>Only faces with a similarity to the person's existing faces exceeding the FaceMatchThreshold can be added successfully. </p><ul><li>Default value: 60. </li><li>Value range: [0,100]. </li></ul>
 * @method void setFaceMatchThreshold(float $FaceMatchThreshold) Set <p>Only faces with a similarity to the person's existing faces exceeding the FaceMatchThreshold can be added successfully. </p><ul><li>Default value: 60. </li><li>Value range: [0,100]. </li></ul>
 * @method integer getQualityControl() Obtain <p>Image quality control. </p><ul><li>Value range: <br>0: no control; <br>1: low quality requirement, where the image is super blurry, or at least one or more of the following exist: eye occlusion, nose occlusion, or mouth occlusion; <br>2: normal quality requirement, where the image is bright, dark, blurry or generally blurry, or at least three of the following exist: eyebrow obstruction, cheek obstruction, or chin obstruction; <br>3: high quality requirement, where the image is bright, dark, generally blurry, or one to two of the following exist: eyebrow obstruction, cheek obstruction, or chin obstruction; <br>4: super high quality requirement, where each dimension is at its best or at most one dimension has a minor problem; </li><li>Default: 0. </li><li>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</li></ul>
 * @method void setQualityControl(integer $QualityControl) Set <p>Image quality control. </p><ul><li>Value range: <br>0: no control; <br>1: low quality requirement, where the image is super blurry, or at least one or more of the following exist: eye occlusion, nose occlusion, or mouth occlusion; <br>2: normal quality requirement, where the image is bright, dark, blurry or generally blurry, or at least three of the following exist: eyebrow obstruction, cheek obstruction, or chin obstruction; <br>3: high quality requirement, where the image is bright, dark, generally blurry, or one to two of the following exist: eyebrow obstruction, cheek obstruction, or chin obstruction; <br>4: super high quality requirement, where each dimension is at its best or at most one dimension has a minor problem; </li><li>Default: 0. </li><li>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</li></ul>
 * @method integer getNeedRotateDetection() Obtain <p>Whether to enable image rotation recognition support.</p><ul><li>Value range: 0 means not enabled, 1 means enabled.</li><li>Default value: 0.</li><li>This parameter is used when the human face in the image is rotated and the image has no exif information. If image rotation recognition support is not enabled, the human face in the image cannot be correctly detected or recognized.</li><li>If you confirm that the image contains exif information or that the human face in the input image will not be rotated, do not enable this parameter. Once enabled, the overall duration may increase by several hundred milliseconds.</li></ul>
 * @method void setNeedRotateDetection(integer $NeedRotateDetection) Set <p>Whether to enable image rotation recognition support.</p><ul><li>Value range: 0 means not enabled, 1 means enabled.</li><li>Default value: 0.</li><li>This parameter is used when the human face in the image is rotated and the image has no exif information. If image rotation recognition support is not enabled, the human face in the image cannot be correctly detected or recognized.</li><li>If you confirm that the image contains exif information or that the human face in the input image will not be rotated, do not enable this parameter. Once enabled, the overall duration may increase by several hundred milliseconds.</li></ul>
 * @method Encryption getEncryption() Obtain <p>Whether full-body encryption is required for the request information. Supported encryption algorithm: AES-256-CBC. Users with encryption requirements can use this parameter.</p>
 * @method void setEncryption(Encryption $Encryption) Set <p>Whether full-body encryption is required for the request information. Supported encryption algorithm: AES-256-CBC. Users with encryption requirements can use this parameter.</p>
 * @method string getEncryptedBody() Obtain <p>Encrypted ciphertext. The data format before encryption is as follows: {&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}。</p>
 * @method void setEncryptedBody(string $EncryptedBody) Set <p>Encrypted ciphertext. The data format before encryption is as follows: {&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}。</p>
 */
class CreateFaceRequest extends AbstractModel
{
    /**
     * @var string <p>Person ID, which is the PersonId in the person creation API.</p>
     */
    public $PersonId;

    /**
     * @var array <p>base64 data of the image.</p><ul><li>base64 encoded size must not exceed 5M.</li><li>For jpg format, the long side pixel must not exceed 4000. For other formats, the image long edge must not exceed 2000. The short side pixel of images in all formats must be not less than 64.</li><li>The total number of faces must not exceed 5.</li><li>If the image contains several faces, only the face with the maximum area is selected.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
     */
    public $Images;

    /**
     * @var array <p>Image Url.</p><ul><li>The size of the corresponding Image after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel must not exceed 4000. For other Image formats, the long side pixel must not exceed 2000. The short side pixel of images in all formats must be not less than 64.</li><li>Either Url or Image must be provided. If both are provided, only Url is used.</li><li>Images stored in Tencent Cloud URLs can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of non-Tencent Cloud Storage URLs may be affected to a certain extent.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li><li>The total number of human faces must not exceed 5.</li><li>If the Image contains several faces, only the face with the maximum area is selected.</li></ul>
     */
    public $Urls;

    /**
     * @var float <p>Only faces with a similarity to the person's existing faces exceeding the FaceMatchThreshold can be added successfully. </p><ul><li>Default value: 60. </li><li>Value range: [0,100]. </li></ul>
     */
    public $FaceMatchThreshold;

    /**
     * @var integer <p>Image quality control. </p><ul><li>Value range: <br>0: no control; <br>1: low quality requirement, where the image is super blurry, or at least one or more of the following exist: eye occlusion, nose occlusion, or mouth occlusion; <br>2: normal quality requirement, where the image is bright, dark, blurry or generally blurry, or at least three of the following exist: eyebrow obstruction, cheek obstruction, or chin obstruction; <br>3: high quality requirement, where the image is bright, dark, generally blurry, or one to two of the following exist: eyebrow obstruction, cheek obstruction, or chin obstruction; <br>4: super high quality requirement, where each dimension is at its best or at most one dimension has a minor problem; </li><li>Default: 0. </li><li>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</li></ul>
     */
    public $QualityControl;

    /**
     * @var integer <p>Whether to enable image rotation recognition support.</p><ul><li>Value range: 0 means not enabled, 1 means enabled.</li><li>Default value: 0.</li><li>This parameter is used when the human face in the image is rotated and the image has no exif information. If image rotation recognition support is not enabled, the human face in the image cannot be correctly detected or recognized.</li><li>If you confirm that the image contains exif information or that the human face in the input image will not be rotated, do not enable this parameter. Once enabled, the overall duration may increase by several hundred milliseconds.</li></ul>
     */
    public $NeedRotateDetection;

    /**
     * @var Encryption <p>Whether full-body encryption is required for the request information. Supported encryption algorithm: AES-256-CBC. Users with encryption requirements can use this parameter.</p>
     */
    public $Encryption;

    /**
     * @var string <p>Encrypted ciphertext. The data format before encryption is as follows: {&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}。</p>
     */
    public $EncryptedBody;

    /**
     * @param string $PersonId <p>Person ID, which is the PersonId in the person creation API.</p>
     * @param array $Images <p>base64 data of the image.</p><ul><li>base64 encoded size must not exceed 5M.</li><li>For jpg format, the long side pixel must not exceed 4000. For other formats, the image long edge must not exceed 2000. The short side pixel of images in all formats must be not less than 64.</li><li>The total number of faces must not exceed 5.</li><li>If the image contains several faces, only the face with the maximum area is selected.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
     * @param array $Urls <p>Image Url.</p><ul><li>The size of the corresponding Image after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel must not exceed 4000. For other Image formats, the long side pixel must not exceed 2000. The short side pixel of images in all formats must be not less than 64.</li><li>Either Url or Image must be provided. If both are provided, only Url is used.</li><li>Images stored in Tencent Cloud URLs can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of non-Tencent Cloud Storage URLs may be affected to a certain extent.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li><li>The total number of human faces must not exceed 5.</li><li>If the Image contains several faces, only the face with the maximum area is selected.</li></ul>
     * @param float $FaceMatchThreshold <p>Only faces with a similarity to the person's existing faces exceeding the FaceMatchThreshold can be added successfully. </p><ul><li>Default value: 60. </li><li>Value range: [0,100]. </li></ul>
     * @param integer $QualityControl <p>Image quality control. </p><ul><li>Value range: <br>0: no control; <br>1: low quality requirement, where the image is super blurry, or at least one or more of the following exist: eye occlusion, nose occlusion, or mouth occlusion; <br>2: normal quality requirement, where the image is bright, dark, blurry or generally blurry, or at least three of the following exist: eyebrow obstruction, cheek obstruction, or chin obstruction; <br>3: high quality requirement, where the image is bright, dark, generally blurry, or one to two of the following exist: eyebrow obstruction, cheek obstruction, or chin obstruction; <br>4: super high quality requirement, where each dimension is at its best or at most one dimension has a minor problem; </li><li>Default: 0. </li><li>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</li></ul>
     * @param integer $NeedRotateDetection <p>Whether to enable image rotation recognition support.</p><ul><li>Value range: 0 means not enabled, 1 means enabled.</li><li>Default value: 0.</li><li>This parameter is used when the human face in the image is rotated and the image has no exif information. If image rotation recognition support is not enabled, the human face in the image cannot be correctly detected or recognized.</li><li>If you confirm that the image contains exif information or that the human face in the input image will not be rotated, do not enable this parameter. Once enabled, the overall duration may increase by several hundred milliseconds.</li></ul>
     * @param Encryption $Encryption <p>Whether full-body encryption is required for the request information. Supported encryption algorithm: AES-256-CBC. Users with encryption requirements can use this parameter.</p>
     * @param string $EncryptedBody <p>Encrypted ciphertext. The data format before encryption is as follows: {&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}。</p>
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Images",$param) and $param["Images"] !== null) {
            $this->Images = $param["Images"];
        }

        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("FaceMatchThreshold",$param) and $param["FaceMatchThreshold"] !== null) {
            $this->FaceMatchThreshold = $param["FaceMatchThreshold"];
        }

        if (array_key_exists("QualityControl",$param) and $param["QualityControl"] !== null) {
            $this->QualityControl = $param["QualityControl"];
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
