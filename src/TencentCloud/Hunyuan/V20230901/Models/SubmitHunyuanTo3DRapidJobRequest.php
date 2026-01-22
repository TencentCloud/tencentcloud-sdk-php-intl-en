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
 * SubmitHunyuanTo3DRapidJob request structure.
 *
 * @method string getPrompt() Obtain Text-To-3D, description of 3D content, forward Prompt content
Supports up to 200 utf-8 characters
Either ImageBase64, ImageUrl, or Prompt is required, and Prompt cannot coexist with ImageBase64/ImageUrl
 * @method void setPrompt(string $Prompt) Set Text-To-3D, description of 3D content, forward Prompt content
Supports up to 200 utf-8 characters
Either ImageBase64, ImageUrl, or Prompt is required, and Prompt cannot coexist with ImageBase64/ImageUrl
 * @method string getImageBase64() Obtain Input image Base64 data
Size: unilateral resolution requirement not less than 128, not greater than 5000, size not greater than 6mb (after encoding, size increases by approximately 30%). format:
jpg, png, jpeg, webp
Imagebase64, imageurl, and Prompt are required, but Prompt and imagebase64/imageurl cannot coexist
 * @method void setImageBase64(string $ImageBase64) Set Input image Base64 data
Size: unilateral resolution requirement not less than 128, not greater than 5000, size not greater than 6mb (after encoding, size increases by approximately 30%). format:
jpg, png, jpeg, webp
Imagebase64, imageurl, and Prompt are required, but Prompt and imagebase64/imageurl cannot coexist
 * @method string getImageUrl() Obtain Input image Url size: 
Unilateral resolution requirement not less than 128, not greater than 5000. size not greater than 8mb
Format: jpg, png, jpeg, webp
Imagebase64, imageurl, and Prompt are required, and Prompt cannot coexist with imagebase64/imageurl	
 * @method void setImageUrl(string $ImageUrl) Set Input image Url size: 
Unilateral resolution requirement not less than 128, not greater than 5000. size not greater than 8mb
Format: jpg, png, jpeg, webp
Imagebase64, imageurl, and Prompt are required, and Prompt cannot coexist with imagebase64/imageurl	
 * @method boolean getEnablePBR() Obtain Specifies whether PBR material generation is enabled, false by default.	
 * @method void setEnablePBR(boolean $EnablePBR) Set Specifies whether PBR material generation is enabled, false by default.	
 * @method boolean getEnableGeometry() Obtain Specifies whether to enable the single geometry generation option
When enabled, it generates a 3D model without textures (white model)
When enabled, the generative model does not support OBJ format
Default model file format is GLB
 * @method void setEnableGeometry(boolean $EnableGeometry) Set Specifies whether to enable the single geometry generation option
When enabled, it generates a 3D model without textures (white model)
When enabled, the generative model does not support OBJ format
Default model file format is GLB
 */
class SubmitHunyuanTo3DRapidJobRequest extends AbstractModel
{
    /**
     * @var string Text-To-3D, description of 3D content, forward Prompt content
Supports up to 200 utf-8 characters
Either ImageBase64, ImageUrl, or Prompt is required, and Prompt cannot coexist with ImageBase64/ImageUrl
     */
    public $Prompt;

    /**
     * @var string Input image Base64 data
Size: unilateral resolution requirement not less than 128, not greater than 5000, size not greater than 6mb (after encoding, size increases by approximately 30%). format:
jpg, png, jpeg, webp
Imagebase64, imageurl, and Prompt are required, but Prompt and imagebase64/imageurl cannot coexist
     */
    public $ImageBase64;

    /**
     * @var string Input image Url size: 
Unilateral resolution requirement not less than 128, not greater than 5000. size not greater than 8mb
Format: jpg, png, jpeg, webp
Imagebase64, imageurl, and Prompt are required, and Prompt cannot coexist with imagebase64/imageurl	
     */
    public $ImageUrl;

    /**
     * @var boolean Specifies whether PBR material generation is enabled, false by default.	
     */
    public $EnablePBR;

    /**
     * @var boolean Specifies whether to enable the single geometry generation option
When enabled, it generates a 3D model without textures (white model)
When enabled, the generative model does not support OBJ format
Default model file format is GLB
     */
    public $EnableGeometry;

    /**
     * @param string $Prompt Text-To-3D, description of 3D content, forward Prompt content
Supports up to 200 utf-8 characters
Either ImageBase64, ImageUrl, or Prompt is required, and Prompt cannot coexist with ImageBase64/ImageUrl
     * @param string $ImageBase64 Input image Base64 data
Size: unilateral resolution requirement not less than 128, not greater than 5000, size not greater than 6mb (after encoding, size increases by approximately 30%). format:
jpg, png, jpeg, webp
Imagebase64, imageurl, and Prompt are required, but Prompt and imagebase64/imageurl cannot coexist
     * @param string $ImageUrl Input image Url size: 
Unilateral resolution requirement not less than 128, not greater than 5000. size not greater than 8mb
Format: jpg, png, jpeg, webp
Imagebase64, imageurl, and Prompt are required, and Prompt cannot coexist with imagebase64/imageurl	
     * @param boolean $EnablePBR Specifies whether PBR material generation is enabled, false by default.	
     * @param boolean $EnableGeometry Specifies whether to enable the single geometry generation option
When enabled, it generates a 3D model without textures (white model)
When enabled, the generative model does not support OBJ format
Default model file format is GLB
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("ImageBase64",$param) and $param["ImageBase64"] !== null) {
            $this->ImageBase64 = $param["ImageBase64"];
        }

        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("EnablePBR",$param) and $param["EnablePBR"] !== null) {
            $this->EnablePBR = $param["EnablePBR"];
        }

        if (array_key_exists("EnableGeometry",$param) and $param["EnableGeometry"] !== null) {
            $this->EnableGeometry = $param["EnableGeometry"];
        }
    }
}
