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
namespace TencentCloud\Facefusion\V20220927\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Face position information on the face image and material template image for fusion
 *
 * @method string getImage() Obtain Enter the image Base64 code.
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Material image limitation: face size in the image greater than 34×34 pixels; image size greater than 64×64 pixels. (After encoding, the image size may increase by about 30%. It is recommended to control the image size reasonably.)
●Supported image format: JPG or PNG
 * @method void setImage(string $Image) Set Enter the image Base64 code.
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Material image limitation: face size in the image greater than 34×34 pixels; image size greater than 64×64 pixels. (After encoding, the image size may increase by about 30%. It is recommended to control the image size reasonably.)
●Supported image format: JPG or PNG
 * @method string getUrl() Obtain Enter the image URL.
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Material image limitation: face size in the image greater than 34×34 pixels; image size greater than 64×64 pixels. (After encoding, the image size may increase by about 30%. It is recommended to control the image size reasonably.)
●Supported image format: JPG or PNG
 * @method void setUrl(string $Url) Set Enter the image URL.
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Material image limitation: face size in the image greater than 34×34 pixels; image size greater than 64×64 pixels. (After encoding, the image size may increase by about 30%. It is recommended to control the image size reasonably.)
●Supported image format: JPG or PNG
 * @method FaceRect getInputImageFaceRect() Obtain Face position information (face box) on the uploaded image
Width and height are no less than 30.
 * @method void setInputImageFaceRect(FaceRect $InputImageFaceRect) Set Face position information (face box) on the uploaded image
Width and height are no less than 30.
 * @method string getTemplateFaceID() Obtain Material face ID. If this parameter is left blank, the largest face is used by default.
 * @method void setTemplateFaceID(string $TemplateFaceID) Set Material face ID. If this parameter is left blank, the largest face is used by default.
 * @method FaceRect getTemplateFaceRect() Obtain Face position information (face box) on the template. If this parameter is left blank, the largest face is used by default. This parameter applies to scenes where custom material templates are used for fusion.
Width and height are no less than 30.
 * @method void setTemplateFaceRect(FaceRect $TemplateFaceRect) Set Face position information (face box) on the template. If this parameter is left blank, the largest face is used by default. This parameter applies to scenes where custom material templates are used for fusion.
Width and height are no less than 30.
 */
class MergeInfo extends AbstractModel
{
    /**
     * @var string Enter the image Base64 code.
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Material image limitation: face size in the image greater than 34×34 pixels; image size greater than 64×64 pixels. (After encoding, the image size may increase by about 30%. It is recommended to control the image size reasonably.)
●Supported image format: JPG or PNG
     */
    public $Image;

    /**
     * @var string Enter the image URL.
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Material image limitation: face size in the image greater than 34×34 pixels; image size greater than 64×64 pixels. (After encoding, the image size may increase by about 30%. It is recommended to control the image size reasonably.)
●Supported image format: JPG or PNG
     */
    public $Url;

    /**
     * @var FaceRect Face position information (face box) on the uploaded image
Width and height are no less than 30.
     */
    public $InputImageFaceRect;

    /**
     * @var string Material face ID. If this parameter is left blank, the largest face is used by default.
     */
    public $TemplateFaceID;

    /**
     * @var FaceRect Face position information (face box) on the template. If this parameter is left blank, the largest face is used by default. This parameter applies to scenes where custom material templates are used for fusion.
Width and height are no less than 30.
     */
    public $TemplateFaceRect;

    /**
     * @param string $Image Enter the image Base64 code.
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Material image limitation: face size in the image greater than 34×34 pixels; image size greater than 64×64 pixels. (After encoding, the image size may increase by about 30%. It is recommended to control the image size reasonably.)
●Supported image format: JPG or PNG
     * @param string $Url Enter the image URL.
●Either the Base64 code or URL must be provided. If both are provided, URL prevails.
●Material image limitation: face size in the image greater than 34×34 pixels; image size greater than 64×64 pixels. (After encoding, the image size may increase by about 30%. It is recommended to control the image size reasonably.)
●Supported image format: JPG or PNG
     * @param FaceRect $InputImageFaceRect Face position information (face box) on the uploaded image
Width and height are no less than 30.
     * @param string $TemplateFaceID Material face ID. If this parameter is left blank, the largest face is used by default.
     * @param FaceRect $TemplateFaceRect Face position information (face box) on the template. If this parameter is left blank, the largest face is used by default. This parameter applies to scenes where custom material templates are used for fusion.
Width and height are no less than 30.
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
        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("InputImageFaceRect",$param) and $param["InputImageFaceRect"] !== null) {
            $this->InputImageFaceRect = new FaceRect();
            $this->InputImageFaceRect->deserialize($param["InputImageFaceRect"]);
        }

        if (array_key_exists("TemplateFaceID",$param) and $param["TemplateFaceID"] !== null) {
            $this->TemplateFaceID = $param["TemplateFaceID"];
        }

        if (array_key_exists("TemplateFaceRect",$param) and $param["TemplateFaceRect"] !== null) {
            $this->TemplateFaceRect = new FaceRect();
            $this->TemplateFaceRect->deserialize($param["TemplateFaceRect"]);
        }
    }
}
