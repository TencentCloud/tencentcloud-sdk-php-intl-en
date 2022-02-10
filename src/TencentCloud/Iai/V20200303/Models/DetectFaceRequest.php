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
namespace TencentCloud\Iai\V20200303\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DetectFace request structure.
 *
 * @method integer getMaxFaceNum() Obtain Maximum number of processable faces. Default value: 1 (i.e., detecting only the face with the largest size in the image). Maximum value: 120. 
This parameter is used to control the number of faces in the image to be detected. The smaller the value, the faster the processing.
 * @method void setMaxFaceNum(integer $MaxFaceNum) Set Maximum number of processable faces. Default value: 1 (i.e., detecting only the face with the largest size in the image). Maximum value: 120. 
This parameter is used to control the number of faces in the image to be detected. The smaller the value, the faster the processing.
 * @method integer getMinFaceSize() Obtain Minimum height and width of face in px.
Default value: 34. We recommend keeping it at or above 34.
Faces below the `MinFaceSize` value will not be detected.
 * @method void setMinFaceSize(integer $MinFaceSize) Set Minimum height and width of face in px.
Default value: 34. We recommend keeping it at or above 34.
Faces below the `MinFaceSize` value will not be detected.
 * @method string getImage() Obtain Base64-encoded image data, which cannot exceed 5 MB.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats.
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
 * @method void setImage(string $Image) Set Base64-encoded image data, which cannot exceed 5 MB.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats.
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
 * @method string getUrl() Obtain Image URL. The image cannot exceed 5 MB in size after being Base64-encoded.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats.
Either `Url` or `Image` must be provided; if both are provided, only `Url` will be used.  
We recommend storing the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. 
The download speed and stability of non-Tencent Cloud URLs may be low.
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
 * @method void setUrl(string $Url) Set Image URL. The image cannot exceed 5 MB in size after being Base64-encoded.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats.
Either `Url` or `Image` must be provided; if both are provided, only `Url` will be used.  
We recommend storing the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. 
The download speed and stability of non-Tencent Cloud URLs may be low.
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
 * @method integer getNeedFaceAttributes() Obtain Whether the face attribute information (FaceAttributesInfo) needs to be returned. 0: no; 1: yes. Default value: 0. 
If the value is not 1, it will be deemed as no need to return, and `FaceAttributesInfo` is meaningless in this case.  
The face attribute information of up to 5 largest faces in the image will be returned, and `FaceAttributesInfo` of the 6th and rest faces is meaningless.  
Extracting face attribute information is quite time-consuming. If face attribute information is not required, we recommend disabling this feature to speed up face detection.
 * @method void setNeedFaceAttributes(integer $NeedFaceAttributes) Set Whether the face attribute information (FaceAttributesInfo) needs to be returned. 0: no; 1: yes. Default value: 0. 
If the value is not 1, it will be deemed as no need to return, and `FaceAttributesInfo` is meaningless in this case.  
The face attribute information of up to 5 largest faces in the image will be returned, and `FaceAttributesInfo` of the 6th and rest faces is meaningless.  
Extracting face attribute information is quite time-consuming. If face attribute information is not required, we recommend disabling this feature to speed up face detection.
 * @method integer getNeedQualityDetection() Obtain Whether to enable quality detection. 0: no; 1: yes. Default value: 0. 
If the value is not 1, it will be deemed not to perform quality detection.
The face quality score information of up to 30 largest faces in the image will be returned, and `FaceQualityInfo` of the 31st and rest faces is meaningless.  
We recommend enabling this feature for the face adding operation.
 * @method void setNeedQualityDetection(integer $NeedQualityDetection) Set Whether to enable quality detection. 0: no; 1: yes. Default value: 0. 
If the value is not 1, it will be deemed not to perform quality detection.
The face quality score information of up to 30 largest faces in the image will be returned, and `FaceQualityInfo` of the 31st and rest faces is meaningless.  
We recommend enabling this feature for the face adding operation.
 * @method string getFaceModelVersion() Obtain Algorithm model version used by the Face Recognition service.

Currently, `2.0` and `3.0` are supported.

This parameter is `3.0` by default starting from April 2, 2020. If it is left empty for accounts that used this API, `2.0` will be used by default.

The parameter can be set only to `3.0` for accounts that purchase the service after November 26, 2020.

Different algorithm model versions correspond to different face recognition algorithms. The 3.0 version has a better overall effect than the legacy version and is recommended.
 * @method void setFaceModelVersion(string $FaceModelVersion) Set Algorithm model version used by the Face Recognition service.

Currently, `2.0` and `3.0` are supported.

This parameter is `3.0` by default starting from April 2, 2020. If it is left empty for accounts that used this API, `2.0` will be used by default.

The parameter can be set only to `3.0` for accounts that purchase the service after November 26, 2020.

Different algorithm model versions correspond to different face recognition algorithms. The 3.0 version has a better overall effect than the legacy version and is recommended.
 * @method integer getNeedRotateDetection() Obtain Whether to enable the support for rotated image recognition. 0: no; 1: yes. Default value: 0. When the face in the image is rotated and the image has no EXIF information, if this parameter is not enabled, the face in the image cannot be correctly detected and recognized. If you are sure that the input image contains EXIF information or the face in the image will not be rotated, do not enable this parameter, as the overall time consumption may increase by hundreds of milliseconds after it is enabled.
 * @method void setNeedRotateDetection(integer $NeedRotateDetection) Set Whether to enable the support for rotated image recognition. 0: no; 1: yes. Default value: 0. When the face in the image is rotated and the image has no EXIF information, if this parameter is not enabled, the face in the image cannot be correctly detected and recognized. If you are sure that the input image contains EXIF information or the face in the image will not be rotated, do not enable this parameter, as the overall time consumption may increase by hundreds of milliseconds after it is enabled.
 */
class DetectFaceRequest extends AbstractModel
{
    /**
     * @var integer Maximum number of processable faces. Default value: 1 (i.e., detecting only the face with the largest size in the image). Maximum value: 120. 
This parameter is used to control the number of faces in the image to be detected. The smaller the value, the faster the processing.
     */
    public $MaxFaceNum;

    /**
     * @var integer Minimum height and width of face in px.
Default value: 34. We recommend keeping it at or above 34.
Faces below the `MinFaceSize` value will not be detected.
     */
    public $MinFaceSize;

    /**
     * @var string Base64-encoded image data, which cannot exceed 5 MB.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats.
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
     */
    public $Image;

    /**
     * @var string Image URL. The image cannot exceed 5 MB in size after being Base64-encoded.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats.
Either `Url` or `Image` must be provided; if both are provided, only `Url` will be used.  
We recommend storing the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. 
The download speed and stability of non-Tencent Cloud URLs may be low.
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
     */
    public $Url;

    /**
     * @var integer Whether the face attribute information (FaceAttributesInfo) needs to be returned. 0: no; 1: yes. Default value: 0. 
If the value is not 1, it will be deemed as no need to return, and `FaceAttributesInfo` is meaningless in this case.  
The face attribute information of up to 5 largest faces in the image will be returned, and `FaceAttributesInfo` of the 6th and rest faces is meaningless.  
Extracting face attribute information is quite time-consuming. If face attribute information is not required, we recommend disabling this feature to speed up face detection.
     */
    public $NeedFaceAttributes;

    /**
     * @var integer Whether to enable quality detection. 0: no; 1: yes. Default value: 0. 
If the value is not 1, it will be deemed not to perform quality detection.
The face quality score information of up to 30 largest faces in the image will be returned, and `FaceQualityInfo` of the 31st and rest faces is meaningless.  
We recommend enabling this feature for the face adding operation.
     */
    public $NeedQualityDetection;

    /**
     * @var string Algorithm model version used by the Face Recognition service.

Currently, `2.0` and `3.0` are supported.

This parameter is `3.0` by default starting from April 2, 2020. If it is left empty for accounts that used this API, `2.0` will be used by default.

The parameter can be set only to `3.0` for accounts that purchase the service after November 26, 2020.

Different algorithm model versions correspond to different face recognition algorithms. The 3.0 version has a better overall effect than the legacy version and is recommended.
     */
    public $FaceModelVersion;

    /**
     * @var integer Whether to enable the support for rotated image recognition. 0: no; 1: yes. Default value: 0. When the face in the image is rotated and the image has no EXIF information, if this parameter is not enabled, the face in the image cannot be correctly detected and recognized. If you are sure that the input image contains EXIF information or the face in the image will not be rotated, do not enable this parameter, as the overall time consumption may increase by hundreds of milliseconds after it is enabled.
     */
    public $NeedRotateDetection;

    /**
     * @param integer $MaxFaceNum Maximum number of processable faces. Default value: 1 (i.e., detecting only the face with the largest size in the image). Maximum value: 120. 
This parameter is used to control the number of faces in the image to be detected. The smaller the value, the faster the processing.
     * @param integer $MinFaceSize Minimum height and width of face in px.
Default value: 34. We recommend keeping it at or above 34.
Faces below the `MinFaceSize` value will not be detected.
     * @param string $Image Base64-encoded image data, which cannot exceed 5 MB.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats.
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
     * @param string $Url Image URL. The image cannot exceed 5 MB in size after being Base64-encoded.
The long side cannot exceed 4,000 px for images in JPG format or 2,000 px for images in other formats.
Either `Url` or `Image` must be provided; if both are provided, only `Url` will be used.  
We recommend storing the image in Tencent Cloud, as a Tencent Cloud URL can guarantee higher download speed and stability. 
The download speed and stability of non-Tencent Cloud URLs may be low.
PNG, JPG, JPEG, and BMP images are supported, while GIF images are not.
     * @param integer $NeedFaceAttributes Whether the face attribute information (FaceAttributesInfo) needs to be returned. 0: no; 1: yes. Default value: 0. 
If the value is not 1, it will be deemed as no need to return, and `FaceAttributesInfo` is meaningless in this case.  
The face attribute information of up to 5 largest faces in the image will be returned, and `FaceAttributesInfo` of the 6th and rest faces is meaningless.  
Extracting face attribute information is quite time-consuming. If face attribute information is not required, we recommend disabling this feature to speed up face detection.
     * @param integer $NeedQualityDetection Whether to enable quality detection. 0: no; 1: yes. Default value: 0. 
If the value is not 1, it will be deemed not to perform quality detection.
The face quality score information of up to 30 largest faces in the image will be returned, and `FaceQualityInfo` of the 31st and rest faces is meaningless.  
We recommend enabling this feature for the face adding operation.
     * @param string $FaceModelVersion Algorithm model version used by the Face Recognition service.

Currently, `2.0` and `3.0` are supported.

This parameter is `3.0` by default starting from April 2, 2020. If it is left empty for accounts that used this API, `2.0` will be used by default.

The parameter can be set only to `3.0` for accounts that purchase the service after November 26, 2020.

Different algorithm model versions correspond to different face recognition algorithms. The 3.0 version has a better overall effect than the legacy version and is recommended.
     * @param integer $NeedRotateDetection Whether to enable the support for rotated image recognition. 0: no; 1: yes. Default value: 0. When the face in the image is rotated and the image has no EXIF information, if this parameter is not enabled, the face in the image cannot be correctly detected and recognized. If you are sure that the input image contains EXIF information or the face in the image will not be rotated, do not enable this parameter, as the overall time consumption may increase by hundreds of milliseconds after it is enabled.
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
        if (array_key_exists("MaxFaceNum",$param) and $param["MaxFaceNum"] !== null) {
            $this->MaxFaceNum = $param["MaxFaceNum"];
        }

        if (array_key_exists("MinFaceSize",$param) and $param["MinFaceSize"] !== null) {
            $this->MinFaceSize = $param["MinFaceSize"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("NeedFaceAttributes",$param) and $param["NeedFaceAttributes"] !== null) {
            $this->NeedFaceAttributes = $param["NeedFaceAttributes"];
        }

        if (array_key_exists("NeedQualityDetection",$param) and $param["NeedQualityDetection"] !== null) {
            $this->NeedQualityDetection = $param["NeedQualityDetection"];
        }

        if (array_key_exists("FaceModelVersion",$param) and $param["FaceModelVersion"] !== null) {
            $this->FaceModelVersion = $param["FaceModelVersion"];
        }

        if (array_key_exists("NeedRotateDetection",$param) and $param["NeedRotateDetection"] !== null) {
            $this->NeedRotateDetection = $param["NeedRotateDetection"];
        }
    }
}
