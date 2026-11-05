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
 * CreatePerson request structure.
 *
 * @method string getGroupId() Obtain <p>ID of the personnel database to be added, which is the GroupId in the API for creating a personnel database.</p>
 * @method void setGroupId(string $GroupId) Set <p>ID of the personnel database to be added, which is the GroupId in the API for creating a personnel database.</p>
 * @method string getPersonName() Obtain <p>Person name. [1, 60] characters, modifiable, repeatable.</p>
 * @method void setPersonName(string $PersonName) Set <p>Person name. [1, 60] characters, modifiable, repeatable.</p>
 * @method string getPersonId() Obtain <p>Person ID.</p><ul><li>Cannot be modified or repeated under a single Tencent Cloud account.</li><li>Supports English letters, digits, -%@#&amp;_, length limited to 64B.</li></ul>
 * @method void setPersonId(string $PersonId) Set <p>Person ID.</p><ul><li>Cannot be modified or repeated under a single Tencent Cloud account.</li><li>Supports English letters, digits, -%@#&amp;_, length limited to 64B.</li></ul>
 * @method integer getGender() Obtain <p>Gender.</p><ul><li>Value range: 0 represents empty, 1 represents man, 2 represents woman.</li></ul>
 * @method void setGender(integer $Gender) Set <p>Gender.</p><ul><li>Value range: 0 represents empty, 1 represents man, 2 represents woman.</li></ul>
 * @method array getPersonExDescriptionInfos() Obtain <p>Person description field content, key-value. [0, 60] characters, modifiable, repeatable.</p>
 * @method void setPersonExDescriptionInfos(array $PersonExDescriptionInfos) Set <p>Person description field content, key-value. [0, 60] characters, modifiable, repeatable.</p>
 * @method string getImage() Obtain <p>base64 image data.</p><ul><li>base64-encoded data must not exceed 5 MB.</li><li>For jpg images, the long edge must not exceed 4000 pixels. For other formats, the long edge must not exceed 2000 pixels. The short edge of images in all formats must be at least 64 pixels.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
 * @method void setImage(string $Image) Set <p>base64 image data.</p><ul><li>base64-encoded data must not exceed 5 MB.</li><li>For jpg images, the long edge must not exceed 4000 pixels. For other formats, the long edge must not exceed 2000 pixels. The short edge of images in all formats must be at least 64 pixels.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
 * @method string getUrl() Obtain <p>Image Url.</p><ul><li>The corresponding Image size after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000. The short side pixel of images in all formats must not be less than 64.</li><li>Either Url or Image must be provided. If both are provided, only Url is used.</li><li>Images stored in Tencent Cloud's Url can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of URLs not stored in Tencent Cloud may be affected to a certain extent.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
 * @method void setUrl(string $Url) Set <p>Image Url.</p><ul><li>The corresponding Image size after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000. The short side pixel of images in all formats must not be less than 64.</li><li>Either Url or Image must be provided. If both are provided, only Url is used.</li><li>Images stored in Tencent Cloud's Url can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of URLs not stored in Tencent Cloud may be affected to a certain extent.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
 * @method integer getUniquePersonControl() Obtain <p>This parameter is used to control whether the human face contained in the image specified by Image or Url is determined to be a suspected duplicate person already existing in the person library. </p><ul><li>If determined to be the same person already in the person library, no new person will be created, and the personnel information of the suspected duplicate person will be returned. </li><li>If not, the person will be created. </li><li>Value range:<br>0: No judgment is performed, and the person will be stored regardless of whether there is a suspected duplicate person in the library;<br>1: Low duplicate person judgment requirement (1% false recognition rate);<br>2: Normal duplicate person judgment requirement (0.1% false recognition rate);<br>3: High duplicate person judgment requirement (0.01% false recognition rate);<br>4: Very high duplicate person judgment requirement (0.001% false recognition rate). </li><li>Default value: 0. </li><li>Note: The higher the requirement, the lower the probability of suspected duplicate persons. The false recognition rates for different requirements are for reference only and can be adjusted according to the actual situation.</li></ul>
 * @method void setUniquePersonControl(integer $UniquePersonControl) Set <p>This parameter is used to control whether the human face contained in the image specified by Image or Url is determined to be a suspected duplicate person already existing in the person library. </p><ul><li>If determined to be the same person already in the person library, no new person will be created, and the personnel information of the suspected duplicate person will be returned. </li><li>If not, the person will be created. </li><li>Value range:<br>0: No judgment is performed, and the person will be stored regardless of whether there is a suspected duplicate person in the library;<br>1: Low duplicate person judgment requirement (1% false recognition rate);<br>2: Normal duplicate person judgment requirement (0.1% false recognition rate);<br>3: High duplicate person judgment requirement (0.01% false recognition rate);<br>4: Very high duplicate person judgment requirement (0.001% false recognition rate). </li><li>Default value: 0. </li><li>Note: The higher the requirement, the lower the probability of suspected duplicate persons. The false recognition rates for different requirements are for reference only and can be adjusted according to the actual situation.</li></ul>
 * @method integer getQualityControl() Obtain <p>Image quality control. </p><ul><li>Value range: <br>0: no control; <br>1: low quality requirement, where the image is very blurry, or at least one or more of the eyes, nose, or mouth are occluded; <br>2: general quality requirement, where the image is bright, dark, blurry or generally blurry, with at least three of the following: eyebrow occlusion, cheek occlusion, or chin occlusion; <br>3: high quality requirement, where the image is bright, dark, generally blurry, with one or two of the following: eyebrow occlusion, cheek occlusion, or chin occlusion; <br>4: very high quality requirement, where each dimension is optimal or at most one dimension has a minor problem; </li><li>Default: 0. </li><li>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</li></ul>
 * @method void setQualityControl(integer $QualityControl) Set <p>Image quality control. </p><ul><li>Value range: <br>0: no control; <br>1: low quality requirement, where the image is very blurry, or at least one or more of the eyes, nose, or mouth are occluded; <br>2: general quality requirement, where the image is bright, dark, blurry or generally blurry, with at least three of the following: eyebrow occlusion, cheek occlusion, or chin occlusion; <br>3: high quality requirement, where the image is bright, dark, generally blurry, with one or two of the following: eyebrow occlusion, cheek occlusion, or chin occlusion; <br>4: very high quality requirement, where each dimension is optimal or at most one dimension has a minor problem; </li><li>Default: 0. </li><li>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</li></ul>
 * @method integer getNeedRotateDetection() Obtain <p>Whether to enable image rotation recognition support.</p><ul><li>Value range: 0 for disabled, 1 for enabled.</li><li>Default value: 0.</li><li>This parameter is used to correctly detect and recognize human faces in an image when the faces are rotated and the image has no exif information. If image rotation recognition support is not enabled in this case, the faces cannot be detected or recognized.</li><li>If you confirm that the image contains exif information or that the human faces in the input image will not be rotated, do not enable this parameter. Once enabled, the overall duration may increase by several hundred milliseconds.</li></ul>
 * @method void setNeedRotateDetection(integer $NeedRotateDetection) Set <p>Whether to enable image rotation recognition support.</p><ul><li>Value range: 0 for disabled, 1 for enabled.</li><li>Default value: 0.</li><li>This parameter is used to correctly detect and recognize human faces in an image when the faces are rotated and the image has no exif information. If image rotation recognition support is not enabled in this case, the faces cannot be detected or recognized.</li><li>If you confirm that the image contains exif information or that the human faces in the input image will not be rotated, do not enable this parameter. Once enabled, the overall duration may increase by several hundred milliseconds.</li></ul>
 * @method Encryption getEncryption() Obtain <p>Whether to encrypt the entire request body. Supported encryption algorithm: AES-256-CBC. Users with encryption requirements can use this parameter.</p>
 * @method void setEncryption(Encryption $Encryption) Set <p>Whether to encrypt the entire request body. Supported encryption algorithm: AES-256-CBC. Users with encryption requirements can use this parameter.</p>
 * @method string getEncryptedBody() Obtain <p>Encrypted ciphertext. The data format before encryption is as follows: {&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}.</p>
 * @method void setEncryptedBody(string $EncryptedBody) Set <p>Encrypted ciphertext. The data format before encryption is as follows: {&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}.</p>
 */
class CreatePersonRequest extends AbstractModel
{
    /**
     * @var string <p>ID of the personnel database to be added, which is the GroupId in the API for creating a personnel database.</p>
     */
    public $GroupId;

    /**
     * @var string <p>Person name. [1, 60] characters, modifiable, repeatable.</p>
     */
    public $PersonName;

    /**
     * @var string <p>Person ID.</p><ul><li>Cannot be modified or repeated under a single Tencent Cloud account.</li><li>Supports English letters, digits, -%@#&amp;_, length limited to 64B.</li></ul>
     */
    public $PersonId;

    /**
     * @var integer <p>Gender.</p><ul><li>Value range: 0 represents empty, 1 represents man, 2 represents woman.</li></ul>
     */
    public $Gender;

    /**
     * @var array <p>Person description field content, key-value. [0, 60] characters, modifiable, repeatable.</p>
     */
    public $PersonExDescriptionInfos;

    /**
     * @var string <p>base64 image data.</p><ul><li>base64-encoded data must not exceed 5 MB.</li><li>For jpg images, the long edge must not exceed 4000 pixels. For other formats, the long edge must not exceed 2000 pixels. The short edge of images in all formats must be at least 64 pixels.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
     */
    public $Image;

    /**
     * @var string <p>Image Url.</p><ul><li>The corresponding Image size after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000. The short side pixel of images in all formats must not be less than 64.</li><li>Either Url or Image must be provided. If both are provided, only Url is used.</li><li>Images stored in Tencent Cloud's Url can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of URLs not stored in Tencent Cloud may be affected to a certain extent.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
     */
    public $Url;

    /**
     * @var integer <p>This parameter is used to control whether the human face contained in the image specified by Image or Url is determined to be a suspected duplicate person already existing in the person library. </p><ul><li>If determined to be the same person already in the person library, no new person will be created, and the personnel information of the suspected duplicate person will be returned. </li><li>If not, the person will be created. </li><li>Value range:<br>0: No judgment is performed, and the person will be stored regardless of whether there is a suspected duplicate person in the library;<br>1: Low duplicate person judgment requirement (1% false recognition rate);<br>2: Normal duplicate person judgment requirement (0.1% false recognition rate);<br>3: High duplicate person judgment requirement (0.01% false recognition rate);<br>4: Very high duplicate person judgment requirement (0.001% false recognition rate). </li><li>Default value: 0. </li><li>Note: The higher the requirement, the lower the probability of suspected duplicate persons. The false recognition rates for different requirements are for reference only and can be adjusted according to the actual situation.</li></ul>
     */
    public $UniquePersonControl;

    /**
     * @var integer <p>Image quality control. </p><ul><li>Value range: <br>0: no control; <br>1: low quality requirement, where the image is very blurry, or at least one or more of the eyes, nose, or mouth are occluded; <br>2: general quality requirement, where the image is bright, dark, blurry or generally blurry, with at least three of the following: eyebrow occlusion, cheek occlusion, or chin occlusion; <br>3: high quality requirement, where the image is bright, dark, generally blurry, with one or two of the following: eyebrow occlusion, cheek occlusion, or chin occlusion; <br>4: very high quality requirement, where each dimension is optimal or at most one dimension has a minor problem; </li><li>Default: 0. </li><li>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</li></ul>
     */
    public $QualityControl;

    /**
     * @var integer <p>Whether to enable image rotation recognition support.</p><ul><li>Value range: 0 for disabled, 1 for enabled.</li><li>Default value: 0.</li><li>This parameter is used to correctly detect and recognize human faces in an image when the faces are rotated and the image has no exif information. If image rotation recognition support is not enabled in this case, the faces cannot be detected or recognized.</li><li>If you confirm that the image contains exif information or that the human faces in the input image will not be rotated, do not enable this parameter. Once enabled, the overall duration may increase by several hundred milliseconds.</li></ul>
     */
    public $NeedRotateDetection;

    /**
     * @var Encryption <p>Whether to encrypt the entire request body. Supported encryption algorithm: AES-256-CBC. Users with encryption requirements can use this parameter.</p>
     */
    public $Encryption;

    /**
     * @var string <p>Encrypted ciphertext. The data format before encryption is as follows: {&quot;Url&quot;:&quot;<strong>&quot;,&quot;Image&quot;:&quot;</strong>&quot;}.</p>
     */
    public $EncryptedBody;

    /**
     * @param string $GroupId <p>ID of the personnel database to be added, which is the GroupId in the API for creating a personnel database.</p>
     * @param string $PersonName <p>Person name. [1, 60] characters, modifiable, repeatable.</p>
     * @param string $PersonId <p>Person ID.</p><ul><li>Cannot be modified or repeated under a single Tencent Cloud account.</li><li>Supports English letters, digits, -%@#&amp;_, length limited to 64B.</li></ul>
     * @param integer $Gender <p>Gender.</p><ul><li>Value range: 0 represents empty, 1 represents man, 2 represents woman.</li></ul>
     * @param array $PersonExDescriptionInfos <p>Person description field content, key-value. [0, 60] characters, modifiable, repeatable.</p>
     * @param string $Image <p>base64 image data.</p><ul><li>base64-encoded data must not exceed 5 MB.</li><li>For jpg images, the long edge must not exceed 4000 pixels. For other formats, the long edge must not exceed 2000 pixels. The short edge of images in all formats must be at least 64 pixels.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
     * @param string $Url <p>Image Url.</p><ul><li>The corresponding Image size after base64 encoding must not exceed 5M.</li><li>For jpg format, the long side pixel cannot exceed 4000. For other formats, the long side pixel cannot exceed 2000. The short side pixel of images in all formats must not be less than 64.</li><li>Either Url or Image must be provided. If both are provided, only Url is used.</li><li>Images stored in Tencent Cloud's Url can guarantee higher download speed and stability. It is recommended to store images in Tencent Cloud.</li><li>The speed and stability of URLs not stored in Tencent Cloud may be affected to a certain extent.</li><li>PNG, jpg, JPEG, and BMP are supported. GIF images are not supported.</li></ul>
     * @param integer $UniquePersonControl <p>This parameter is used to control whether the human face contained in the image specified by Image or Url is determined to be a suspected duplicate person already existing in the person library. </p><ul><li>If determined to be the same person already in the person library, no new person will be created, and the personnel information of the suspected duplicate person will be returned. </li><li>If not, the person will be created. </li><li>Value range:<br>0: No judgment is performed, and the person will be stored regardless of whether there is a suspected duplicate person in the library;<br>1: Low duplicate person judgment requirement (1% false recognition rate);<br>2: Normal duplicate person judgment requirement (0.1% false recognition rate);<br>3: High duplicate person judgment requirement (0.01% false recognition rate);<br>4: Very high duplicate person judgment requirement (0.001% false recognition rate). </li><li>Default value: 0. </li><li>Note: The higher the requirement, the lower the probability of suspected duplicate persons. The false recognition rates for different requirements are for reference only and can be adjusted according to the actual situation.</li></ul>
     * @param integer $QualityControl <p>Image quality control. </p><ul><li>Value range: <br>0: no control; <br>1: low quality requirement, where the image is very blurry, or at least one or more of the eyes, nose, or mouth are occluded; <br>2: general quality requirement, where the image is bright, dark, blurry or generally blurry, with at least three of the following: eyebrow occlusion, cheek occlusion, or chin occlusion; <br>3: high quality requirement, where the image is bright, dark, generally blurry, with one or two of the following: eyebrow occlusion, cheek occlusion, or chin occlusion; <br>4: very high quality requirement, where each dimension is optimal or at most one dimension has a minor problem; </li><li>Default: 0. </li><li>If the image quality fails to satisfy the requirement, the returned result will prompt that the image quality detection does not meet the requirement.</li></ul>
     * @param integer $NeedRotateDetection <p>Whether to enable image rotation recognition support.</p><ul><li>Value range: 0 for disabled, 1 for enabled.</li><li>Default value: 0.</li><li>This parameter is used to correctly detect and recognize human faces in an image when the faces are rotated and the image has no exif information. If image rotation recognition support is not enabled in this case, the faces cannot be detected or recognized.</li><li>If you confirm that the image contains exif information or that the human faces in the input image will not be rotated, do not enable this parameter. Once enabled, the overall duration may increase by several hundred milliseconds.</li></ul>
     * @param Encryption $Encryption <p>Whether to encrypt the entire request body. Supported encryption algorithm: AES-256-CBC. Users with encryption requirements can use this parameter.</p>
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("Gender",$param) and $param["Gender"] !== null) {
            $this->Gender = $param["Gender"];
        }

        if (array_key_exists("PersonExDescriptionInfos",$param) and $param["PersonExDescriptionInfos"] !== null) {
            $this->PersonExDescriptionInfos = [];
            foreach ($param["PersonExDescriptionInfos"] as $key => $value){
                $obj = new PersonExDescriptionInfo();
                $obj->deserialize($value);
                array_push($this->PersonExDescriptionInfos, $obj);
            }
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("UniquePersonControl",$param) and $param["UniquePersonControl"] !== null) {
            $this->UniquePersonControl = $param["UniquePersonControl"];
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
