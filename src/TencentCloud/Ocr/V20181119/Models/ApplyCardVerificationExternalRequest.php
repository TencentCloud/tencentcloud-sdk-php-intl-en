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
 * @method string getNationality() Obtain Specifies the country of the document.
ARG:Argentina
AUS:Australia
KHM:Cambodia
CAN:Canada
SGP:Singapore
CHL:Chile
DEU:Germany
MEX:Mexico
MMR:Myanmar
NZL:New Zealand
BGD:Bangladesh
NGA:Nigeria
PAK:Pakistan
RUS:Russia
IDN:Indonesia
HKG:Hong Kong, China
THA:Thailand
MYS:Malaysia
JPN:Japan
PHL:Philippines
MAC:Macao, China
CHN:ChinaPermit
TWN:Taiwan, China
BGD:Bangladesh
NGA:Nigeria 
PAK:Pakistan

AUTO: supports cards and documents from 200+ countries
 * @method void setNationality(string $Nationality) Set Specifies the country of the document.
ARG:Argentina
AUS:Australia
KHM:Cambodia
CAN:Canada
SGP:Singapore
CHL:Chile
DEU:Germany
MEX:Mexico
MMR:Myanmar
NZL:New Zealand
BGD:Bangladesh
NGA:Nigeria
PAK:Pakistan
RUS:Russia
IDN:Indonesia
HKG:Hong Kong, China
THA:Thailand
MYS:Malaysia
JPN:Japan
PHL:Philippines
MAC:Macao, China
CHN:ChinaPermit
TWN:Taiwan, China
BGD:Bangladesh
NGA:Nigeria 
PAK:Pakistan

AUTO: supports cards and documents from 200+ countries
 * @method string getCardType() Obtain Document type.
ID_CARD
PASSPORT
DRIVING_LICENSE
RESIDENCE_PERMIT (Supported in certain countries/regions, including Australia, Canada, Germany, New Zealand, Nigeria, Singapore).
 * @method void setCardType(string $CardType) Set Document type.
ID_CARD
PASSPORT
DRIVING_LICENSE
RESIDENCE_PERMIT (Supported in certain countries/regions, including Australia, Canada, Germany, New Zealand, Nigeria, Singapore).
 * @method string getImageBase64Front() Obtain The Base64 value of the document Front. supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlFront will be used.
 * @method void setImageBase64Front(string $ImageBase64Front) Set The Base64 value of the document Front. supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlFront will be used.
 * @method string getImageBase64Back() Obtain The Base64 value of the reverse side of the document. Supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlBack is used.
 * @method void setImageBase64Back(string $ImageBase64Back) Set The Base64 value of the reverse side of the document. Supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlBack is used.
 * @method string getImageUrlFront() Obtain Url of the document Front. supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlFront will be used.
 * @method void setImageUrlFront(string $ImageUrlFront) Set Url of the document Front. supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlFront will be used.
 * @method string getImageUrlBack() Obtain Specifies the Url of the document Back. supported image formats: PNG, JPG/JPEG
Supported image size: no more than 2M after Base64 encoding. image download time should not exceed 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only use ImageUrlBack.

 * @method void setImageUrlBack(string $ImageUrlBack) Set Specifies the Url of the document Back. supported image formats: PNG, JPG/JPEG
Supported image size: no more than 2M after Base64 encoding. image download time should not exceed 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only use ImageUrlBack.

 * @method boolean getReturnHeadImage() Obtain Whether to extract the ID portrait. Default value: false.
 * @method void setReturnHeadImage(boolean $ReturnHeadImage) Set Whether to extract the ID portrait. Default value: false.
 */
class ApplyCardVerificationExternalRequest extends AbstractModel
{
    /**
     * @var string Specifies the country of the document.
ARG:Argentina
AUS:Australia
KHM:Cambodia
CAN:Canada
SGP:Singapore
CHL:Chile
DEU:Germany
MEX:Mexico
MMR:Myanmar
NZL:New Zealand
BGD:Bangladesh
NGA:Nigeria
PAK:Pakistan
RUS:Russia
IDN:Indonesia
HKG:Hong Kong, China
THA:Thailand
MYS:Malaysia
JPN:Japan
PHL:Philippines
MAC:Macao, China
CHN:ChinaPermit
TWN:Taiwan, China
BGD:Bangladesh
NGA:Nigeria 
PAK:Pakistan

AUTO: supports cards and documents from 200+ countries
     */
    public $Nationality;

    /**
     * @var string Document type.
ID_CARD
PASSPORT
DRIVING_LICENSE
RESIDENCE_PERMIT (Supported in certain countries/regions, including Australia, Canada, Germany, New Zealand, Nigeria, Singapore).
     */
    public $CardType;

    /**
     * @var string The Base64 value of the document Front. supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlFront will be used.
     */
    public $ImageBase64Front;

    /**
     * @var string The Base64 value of the reverse side of the document. Supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlBack is used.
     */
    public $ImageBase64Back;

    /**
     * @var string Url of the document Front. supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlFront will be used.
     */
    public $ImageUrlFront;

    /**
     * @var string Specifies the Url of the document Back. supported image formats: PNG, JPG/JPEG
Supported image size: no more than 2M after Base64 encoding. image download time should not exceed 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only use ImageUrlBack.

     */
    public $ImageUrlBack;

    /**
     * @var boolean Whether to extract the ID portrait. Default value: false.
     */
    public $ReturnHeadImage;

    /**
     * @param string $Nationality Specifies the country of the document.
ARG:Argentina
AUS:Australia
KHM:Cambodia
CAN:Canada
SGP:Singapore
CHL:Chile
DEU:Germany
MEX:Mexico
MMR:Myanmar
NZL:New Zealand
BGD:Bangladesh
NGA:Nigeria
PAK:Pakistan
RUS:Russia
IDN:Indonesia
HKG:Hong Kong, China
THA:Thailand
MYS:Malaysia
JPN:Japan
PHL:Philippines
MAC:Macao, China
CHN:ChinaPermit
TWN:Taiwan, China
BGD:Bangladesh
NGA:Nigeria 
PAK:Pakistan

AUTO: supports cards and documents from 200+ countries
     * @param string $CardType Document type.
ID_CARD
PASSPORT
DRIVING_LICENSE
RESIDENCE_PERMIT (Supported in certain countries/regions, including Australia, Canada, Germany, New Zealand, Nigeria, Singapore).
     * @param string $ImageBase64Front The Base64 value of the document Front. supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlFront will be used.
     * @param string $ImageBase64Back The Base64 value of the reverse side of the document. Supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlBack is used.
     * @param string $ImageUrlFront Url of the document Front. supported image formats: PNG, JPG/JPEG. 
Supported image size: the downloaded image after Base64 encoding must be no more than 2M. image download time must be no more than 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only ImageUrlFront will be used.
     * @param string $ImageUrlBack Specifies the Url of the document Back. supported image formats: PNG, JPG/JPEG
Supported image size: no more than 2M after Base64 encoding. image download time should not exceed 5 seconds. 
Supported image resolution: between 256 \* 256 and 4096 \* 4096. For some documents, either ImageUrlBack or ImageBase64Back must be provided. If both are provided, only use ImageUrlBack.

     * @param boolean $ReturnHeadImage Whether to extract the ID portrait. Default value: false.
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
