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
namespace TencentCloud\Ocr\V20181119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyCardVerificationExternal request structure.
 *
 * @method string getNationality() Obtain Country/Region of the document. For the full list of supported countries/regions, refer to the API description.
 * @method void setNationality(string $Nationality) Set Country/Region of the document. For the full list of supported countries/regions, refer to the API description.
 * @method string getCardType() Obtain Document type. Supported values: ID_CARD, PASSPORT, DRIVING_LICENSE, RESIDENCE_PERMIT (only supported in certain countries/regions, including Australia, Canada, Germany, New Zealand, Nigeria, Singapore).
 * @method void setCardType(string $CardType) Set Document type. Supported values: ID_CARD, PASSPORT, DRIVING_LICENSE, RESIDENCE_PERMIT (only supported in certain countries/regions, including Australia, Canada, Germany, New Zealand, Nigeria, Singapore).
 * @method string getImageBase64Front() Obtain Base64-encoded image of the document front.
Supported image formats: PNG, JPG/JPEG (GIF not supported).
Supported image size: The downloaded image after Base64 encoding must not exceed 2 MB. Image download time must not exceed 5 seconds.
Supported image resolution: Between 256*256 and 4096*4096 pixels.
Note: You must provide either ImageUrlFront or ImageBase64Front. If both are provided, only ImageUrlFront is used.
 * @method void setImageBase64Front(string $ImageBase64Front) Set Base64-encoded image of the document front.
Supported image formats: PNG, JPG/JPEG (GIF not supported).
Supported image size: The downloaded image after Base64 encoding must not exceed 2 MB. Image download time must not exceed 5 seconds.
Supported image resolution: Between 256*256 and 4096*4096 pixels.
Note: You must provide either ImageUrlFront or ImageBase64Front. If both are provided, only ImageUrlFront is used.
 * @method string getImageBase64Back() Obtain The Base64 value of the reverse side of the document. Supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. Image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlBack is used.
 * @method void setImageBase64Back(string $ImageBase64Back) Set The Base64 value of the reverse side of the document. Supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. Image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlBack is used.
 * @method string getImageUrlFront() Obtain URL of the document front image.
Supported image formats: PNG, JPG/JPEG (GIF not supported).
Supported image size: The downloaded image after Base64 encoding must not exceed 2 MB. Image download time must not exceed 5 seconds.
Supported image resolution: Between 256*256 and 4096*4096 pixels.
Note: You must provide either ImageUrlFront or ImageBase64Front. If both are provided, only ImageUrlFront is used.
 * @method void setImageUrlFront(string $ImageUrlFront) Set URL of the document front image.
Supported image formats: PNG, JPG/JPEG (GIF not supported).
Supported image size: The downloaded image after Base64 encoding must not exceed 2 MB. Image download time must not exceed 5 seconds.
Supported image resolution: Between 256*256 and 4096*4096 pixels.
Note: You must provide either ImageUrlFront or ImageBase64Front. If both are provided, only ImageUrlFront is used.
 * @method string getImageUrlBack() Obtain URL of the document back image.
Supported image formats: PNG, JPG/JPEG (GIF not supported).
Supported image size: The downloaded image after Base64 encoding must not exceed 2 MB. Image download time must not exceed 5 seconds.
Supported image resolution: Between 256*256 and 4096*4096 pixels.
Note: For some documents, you must provide either ImageUrlBack or ImageBase64Back. If both are provided, only ImageUrlBack is used.
 * @method void setImageUrlBack(string $ImageUrlBack) Set URL of the document back image.
Supported image formats: PNG, JPG/JPEG (GIF not supported).
Supported image size: The downloaded image after Base64 encoding must not exceed 2 MB. Image download time must not exceed 5 seconds.
Supported image resolution: Between 256*256 and 4096*4096 pixels.
Note: For some documents, you must provide either ImageUrlBack or ImageBase64Back. If both are provided, only ImageUrlBack is used.
 * @method boolean getReturnHeadImage() Obtain Whether to crop and return the face image from the document. Default: false.
If set to true, the image constraints are:
- Size after Base64 encoding must not exceed 5 MB.
- Maximum pixel width/height: 4000 for JPG, 2000 for other formats.
- Minimum pixel width/height: 64.
- Supported formats: PNG, JPG, JPEG, BMP (GIF not supported).
 * @method void setReturnHeadImage(boolean $ReturnHeadImage) Set Whether to crop and return the face image from the document. Default: false.
If set to true, the image constraints are:
- Size after Base64 encoding must not exceed 5 MB.
- Maximum pixel width/height: 4000 for JPG, 2000 for other formats.
- Minimum pixel width/height: 64.
- Supported formats: PNG, JPG, JPEG, BMP (GIF not supported).
 */
class ApplyCardVerificationExternalRequest extends AbstractModel
{
    /**
     * @var string Country/Region of the document. For the full list of supported countries/regions, refer to the API description.
     */
    public $Nationality;

    /**
     * @var string Document type. Supported values: ID_CARD, PASSPORT, DRIVING_LICENSE, RESIDENCE_PERMIT (only supported in certain countries/regions, including Australia, Canada, Germany, New Zealand, Nigeria, Singapore).
     */
    public $CardType;

    /**
     * @var string Base64-encoded image of the document front.
Supported image formats: PNG, JPG/JPEG (GIF not supported).
Supported image size: The downloaded image after Base64 encoding must not exceed 2 MB. Image download time must not exceed 5 seconds.
Supported image resolution: Between 256*256 and 4096*4096 pixels.
Note: You must provide either ImageUrlFront or ImageBase64Front. If both are provided, only ImageUrlFront is used.
     */
    public $ImageBase64Front;

    /**
     * @var string The Base64 value of the reverse side of the document. Supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. Image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlBack is used.
     */
    public $ImageBase64Back;

    /**
     * @var string URL of the document front image.
Supported image formats: PNG, JPG/JPEG (GIF not supported).
Supported image size: The downloaded image after Base64 encoding must not exceed 2 MB. Image download time must not exceed 5 seconds.
Supported image resolution: Between 256*256 and 4096*4096 pixels.
Note: You must provide either ImageUrlFront or ImageBase64Front. If both are provided, only ImageUrlFront is used.
     */
    public $ImageUrlFront;

    /**
     * @var string URL of the document back image.
Supported image formats: PNG, JPG/JPEG (GIF not supported).
Supported image size: The downloaded image after Base64 encoding must not exceed 2 MB. Image download time must not exceed 5 seconds.
Supported image resolution: Between 256*256 and 4096*4096 pixels.
Note: For some documents, you must provide either ImageUrlBack or ImageBase64Back. If both are provided, only ImageUrlBack is used.
     */
    public $ImageUrlBack;

    /**
     * @var boolean Whether to crop and return the face image from the document. Default: false.
If set to true, the image constraints are:
- Size after Base64 encoding must not exceed 5 MB.
- Maximum pixel width/height: 4000 for JPG, 2000 for other formats.
- Minimum pixel width/height: 64.
- Supported formats: PNG, JPG, JPEG, BMP (GIF not supported).
     */
    public $ReturnHeadImage;

    /**
     * @param string $Nationality Country/Region of the document. For the full list of supported countries/regions, refer to the API description.
     * @param string $CardType Document type. Supported values: ID_CARD, PASSPORT, DRIVING_LICENSE, RESIDENCE_PERMIT (only supported in certain countries/regions, including Australia, Canada, Germany, New Zealand, Nigeria, Singapore).
     * @param string $ImageBase64Front Base64-encoded image of the document front.
Supported image formats: PNG, JPG/JPEG (GIF not supported).
Supported image size: The downloaded image after Base64 encoding must not exceed 2 MB. Image download time must not exceed 5 seconds.
Supported image resolution: Between 256*256 and 4096*4096 pixels.
Note: You must provide either ImageUrlFront or ImageBase64Front. If both are provided, only ImageUrlFront is used.
     * @param string $ImageBase64Back The Base64 value of the reverse side of the document. Supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. Image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlBack is used.
     * @param string $ImageUrlFront URL of the document front image.
Supported image formats: PNG, JPG/JPEG (GIF not supported).
Supported image size: The downloaded image after Base64 encoding must not exceed 2 MB. Image download time must not exceed 5 seconds.
Supported image resolution: Between 256*256 and 4096*4096 pixels.
Note: You must provide either ImageUrlFront or ImageBase64Front. If both are provided, only ImageUrlFront is used.
     * @param string $ImageUrlBack URL of the document back image.
Supported image formats: PNG, JPG/JPEG (GIF not supported).
Supported image size: The downloaded image after Base64 encoding must not exceed 2 MB. Image download time must not exceed 5 seconds.
Supported image resolution: Between 256*256 and 4096*4096 pixels.
Note: For some documents, you must provide either ImageUrlBack or ImageBase64Back. If both are provided, only ImageUrlBack is used.
     * @param boolean $ReturnHeadImage Whether to crop and return the face image from the document. Default: false.
If set to true, the image constraints are:
- Size after Base64 encoding must not exceed 5 MB.
- Maximum pixel width/height: 4000 for JPG, 2000 for other formats.
- Minimum pixel width/height: 64.
- Supported formats: PNG, JPG, JPEG, BMP (GIF not supported).
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
        if (array_key_exists("Nationality",$param) and $param["Nationality"] !== null) {
            $this->Nationality = $param["Nationality"];
        }

        if (array_key_exists("CardType",$param) and $param["CardType"] !== null) {
            $this->CardType = $param["CardType"];
        }

        if (array_key_exists("ImageBase64Front",$param) and $param["ImageBase64Front"] !== null) {
            $this->ImageBase64Front = $param["ImageBase64Front"];
        }

        if (array_key_exists("ImageBase64Back",$param) and $param["ImageBase64Back"] !== null) {
            $this->ImageBase64Back = $param["ImageBase64Back"];
        }

        if (array_key_exists("ImageUrlFront",$param) and $param["ImageUrlFront"] !== null) {
            $this->ImageUrlFront = $param["ImageUrlFront"];
        }

        if (array_key_exists("ImageUrlBack",$param) and $param["ImageUrlBack"] !== null) {
            $this->ImageUrlBack = $param["ImageUrlBack"];
        }

        if (array_key_exists("ReturnHeadImage",$param) and $param["ReturnHeadImage"] !== null) {
            $this->ReturnHeadImage = $param["ReturnHeadImage"];
        }
    }
}
