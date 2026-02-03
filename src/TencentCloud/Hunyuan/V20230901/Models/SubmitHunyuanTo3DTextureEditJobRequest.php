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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitHunyuanTo3DTextureEditJob request structure.
 *
 * @method InputFile3D getFile3D() Obtain File URL of the 3D model file that requires texture edit
Supported formats: FBX, OBJ, GLB
3D model limit: less than 100000 faces
 * @method void setFile3D(InputFile3D $File3D) Set File URL of the 3D model file that requires texture edit
Supported formats: FBX, OBJ, GLB
3D model limit: less than 100000 faces
 * @method ImageInfo getImage() Obtain Reference image for 3D model texture editing: Base64 data and image Url
Either Base64 or Url must be provided. if both are provided, Url prevails
Image restrictions: unilateral resolution less than 4096 and greater than 128, converted into Base64 string less than 10MB
Format support: jpg, jpeg, png
 * @method void setImage(ImageInfo $Image) Set Reference image for 3D model texture editing: Base64 data and image Url
Either Base64 or Url must be provided. if both are provided, Url prevails
Image restrictions: unilateral resolution less than 4096 and greater than 128, converted into Base64 string less than 10MB
Format support: jpg, jpeg, png
 * @method string getPrompt() Obtain Describes texture editing, forward prompt content
Supports up to 1024 utf-8 characters
Either image or prompt is required, and prompt and image cannot coexist
Example value: a kitten
 * @method void setPrompt(string $Prompt) Set Describes texture editing, forward prompt content
Supports up to 1024 utf-8 characters
Either image or prompt is required, and prompt and image cannot coexist
Example value: a kitten
 * @method boolean getEnablePBR() Obtain Whether to enable the PBR texture parameter, only supports enabling when entering the Prompt
Example value: true
 * @method void setEnablePBR(boolean $EnablePBR) Set Whether to enable the PBR texture parameter, only supports enabling when entering the Prompt
Example value: true
 */
class SubmitHunyuanTo3DTextureEditJobRequest extends AbstractModel
{
    /**
     * @var InputFile3D File URL of the 3D model file that requires texture edit
Supported formats: FBX, OBJ, GLB
3D model limit: less than 100000 faces
     */
    public $File3D;

    /**
     * @var ImageInfo Reference image for 3D model texture editing: Base64 data and image Url
Either Base64 or Url must be provided. if both are provided, Url prevails
Image restrictions: unilateral resolution less than 4096 and greater than 128, converted into Base64 string less than 10MB
Format support: jpg, jpeg, png
     */
    public $Image;

    /**
     * @var string Describes texture editing, forward prompt content
Supports up to 1024 utf-8 characters
Either image or prompt is required, and prompt and image cannot coexist
Example value: a kitten
     */
    public $Prompt;

    /**
     * @var boolean Whether to enable the PBR texture parameter, only supports enabling when entering the Prompt
Example value: true
     */
    public $EnablePBR;

    /**
     * @param InputFile3D $File3D File URL of the 3D model file that requires texture edit
Supported formats: FBX, OBJ, GLB
3D model limit: less than 100000 faces
     * @param ImageInfo $Image Reference image for 3D model texture editing: Base64 data and image Url
Either Base64 or Url must be provided. if both are provided, Url prevails
Image restrictions: unilateral resolution less than 4096 and greater than 128, converted into Base64 string less than 10MB
Format support: jpg, jpeg, png
     * @param string $Prompt Describes texture editing, forward prompt content
Supports up to 1024 utf-8 characters
Either image or prompt is required, and prompt and image cannot coexist
Example value: a kitten
     * @param boolean $EnablePBR Whether to enable the PBR texture parameter, only supports enabling when entering the Prompt
Example value: true
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
        if (array_key_exists("File3D",$param) and $param["File3D"] !== null) {
            $this->File3D = new InputFile3D();
            $this->File3D->deserialize($param["File3D"]);
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = new ImageInfo();
            $this->Image->deserialize($param["Image"]);
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("EnablePBR",$param) and $param["EnablePBR"] !== null) {
            $this->EnablePBR = $param["EnablePBR"];
        }
    }
}
