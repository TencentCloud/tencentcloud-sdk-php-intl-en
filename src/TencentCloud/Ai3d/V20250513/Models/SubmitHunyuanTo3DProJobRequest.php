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
namespace TencentCloud\Ai3d\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitHunyuanTo3DProJob request structure.
 *
 * @method string getPrompt() Obtain Generates 3D content, describes 3D content, chinese forward prompt content.
Supports up to 1024 utf-8 characters.
Text-To-3D. specifies image, image_url, or prompt is required. prompt and image/image_url cannot coexist.
 * @method void setPrompt(string $Prompt) Set Generates 3D content, describes 3D content, chinese forward prompt content.
Supports up to 1024 utf-8 characters.
Text-To-3D. specifies image, image_url, or prompt is required. prompt and image/image_url cannot coexist.
 * @method string getImageBase64() Obtain Enter the Base64 code of the image.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Valid values: jpg, png, jpeg, webp.
ImageBase64, ImageUrl, or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
 * @method void setImageBase64(string $ImageBase64) Set Enter the Base64 code of the image.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Valid values: jpg, png, jpeg, webp.
ImageBase64, ImageUrl, or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
 * @method string getImageUrl() Obtain Input image Url.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Valid values: jpg, png, jpeg, webp.
Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
 * @method void setImageUrl(string $ImageUrl) Set Input image Url.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Valid values: jpg, png, jpeg, webp.
Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
 * @method array getMultiViewImages() Obtain Multi-Perspective model image. reference value for viewing angle:.
left view.
right view.
back view.

Each viewing angle allows only one image.
Image size limit: must not exceed 8M after encoding.
Image resolution limitation: specifies the unilateral resolution should be less than 5000 and greater than 128.
●Supported image format: JPG or PNG
 * @method void setMultiViewImages(array $MultiViewImages) Set Multi-Perspective model image. reference value for viewing angle:.
left view.
right view.
back view.

Each viewing angle allows only one image.
Image size limit: must not exceed 8M after encoding.
Image resolution limitation: specifies the unilateral resolution should be less than 5000 and greater than 128.
●Supported image format: JPG or PNG
 * @method boolean getEnablePBR() Obtain Specifies whether PBR material generation is enabled, false by default.
 * @method void setEnablePBR(boolean $EnablePBR) Set Specifies whether PBR material generation is enabled, false by default.
 * @method integer getFaceCount() Obtain Specifies the face count of the generated 3D model. default value is 500000.
Specifies the supported face count range. value range: 40000-1500000.
 * @method void setFaceCount(integer $FaceCount) Set Specifies the face count of the generated 3D model. default value is 500000.
Specifies the supported face count range. value range: 40000-1500000.
 * @method string getGenerateType() Obtain Generation task type. default: Normal. valid values:.
Generates a textured geometry model.
LowPoly: specifies whether to generate a model with smart polygon reduction.
Geometry: specifies whether to generate a Geometry model without texture (white model). when this task is selected, the EnablePBR parameter does not take effect.
Sketch: enter a Sketch or line art to generate a model. in this mode, prompt and ImageUrl/ImageBase64 can be input together.
 * @method void setGenerateType(string $GenerateType) Set Generation task type. default: Normal. valid values:.
Generates a textured geometry model.
LowPoly: specifies whether to generate a model with smart polygon reduction.
Geometry: specifies whether to generate a Geometry model without texture (white model). when this task is selected, the EnablePBR parameter does not take effect.
Sketch: enter a Sketch or line art to generate a model. in this mode, prompt and ImageUrl/ImageBase64 can be input together.
 * @method string getPolygonType() Obtain This parameter only takes effect when LowPoly mode is selected from GenerateType.

Polygon type, indicates the model surface is composed of polygon grids, defaults to triangle. valid values:.
Specifies the triangle face.
quadrilateral: generates a mix of quadrangle and triangle faces.
 * @method void setPolygonType(string $PolygonType) Set This parameter only takes effect when LowPoly mode is selected from GenerateType.

Polygon type, indicates the model surface is composed of polygon grids, defaults to triangle. valid values:.
Specifies the triangle face.
quadrilateral: generates a mix of quadrangle and triangle faces.
 */
class SubmitHunyuanTo3DProJobRequest extends AbstractModel
{
    /**
     * @var string Generates 3D content, describes 3D content, chinese forward prompt content.
Supports up to 1024 utf-8 characters.
Text-To-3D. specifies image, image_url, or prompt is required. prompt and image/image_url cannot coexist.
     */
    public $Prompt;

    /**
     * @var string Enter the Base64 code of the image.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Valid values: jpg, png, jpeg, webp.
ImageBase64, ImageUrl, or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
     */
    public $ImageBase64;

    /**
     * @var string Input image Url.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Valid values: jpg, png, jpeg, webp.
Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
     */
    public $ImageUrl;

    /**
     * @var array Multi-Perspective model image. reference value for viewing angle:.
left view.
right view.
back view.

Each viewing angle allows only one image.
Image size limit: must not exceed 8M after encoding.
Image resolution limitation: specifies the unilateral resolution should be less than 5000 and greater than 128.
●Supported image format: JPG or PNG
     */
    public $MultiViewImages;

    /**
     * @var boolean Specifies whether PBR material generation is enabled, false by default.
     */
    public $EnablePBR;

    /**
     * @var integer Specifies the face count of the generated 3D model. default value is 500000.
Specifies the supported face count range. value range: 40000-1500000.
     */
    public $FaceCount;

    /**
     * @var string Generation task type. default: Normal. valid values:.
Generates a textured geometry model.
LowPoly: specifies whether to generate a model with smart polygon reduction.
Geometry: specifies whether to generate a Geometry model without texture (white model). when this task is selected, the EnablePBR parameter does not take effect.
Sketch: enter a Sketch or line art to generate a model. in this mode, prompt and ImageUrl/ImageBase64 can be input together.
     */
    public $GenerateType;

    /**
     * @var string This parameter only takes effect when LowPoly mode is selected from GenerateType.

Polygon type, indicates the model surface is composed of polygon grids, defaults to triangle. valid values:.
Specifies the triangle face.
quadrilateral: generates a mix of quadrangle and triangle faces.
     */
    public $PolygonType;

    /**
     * @param string $Prompt Generates 3D content, describes 3D content, chinese forward prompt content.
Supports up to 1024 utf-8 characters.
Text-To-3D. specifies image, image_url, or prompt is required. prompt and image/image_url cannot coexist.
     * @param string $ImageBase64 Enter the Base64 code of the image.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Valid values: jpg, png, jpeg, webp.
ImageBase64, ImageUrl, or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
     * @param string $ImageUrl Input image Url.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Valid values: jpg, png, jpeg, webp.
Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
     * @param array $MultiViewImages Multi-Perspective model image. reference value for viewing angle:.
left view.
right view.
back view.

Each viewing angle allows only one image.
Image size limit: must not exceed 8M after encoding.
Image resolution limitation: specifies the unilateral resolution should be less than 5000 and greater than 128.
●Supported image format: JPG or PNG
     * @param boolean $EnablePBR Specifies whether PBR material generation is enabled, false by default.
     * @param integer $FaceCount Specifies the face count of the generated 3D model. default value is 500000.
Specifies the supported face count range. value range: 40000-1500000.
     * @param string $GenerateType Generation task type. default: Normal. valid values:.
Generates a textured geometry model.
LowPoly: specifies whether to generate a model with smart polygon reduction.
Geometry: specifies whether to generate a Geometry model without texture (white model). when this task is selected, the EnablePBR parameter does not take effect.
Sketch: enter a Sketch or line art to generate a model. in this mode, prompt and ImageUrl/ImageBase64 can be input together.
     * @param string $PolygonType This parameter only takes effect when LowPoly mode is selected from GenerateType.

Polygon type, indicates the model surface is composed of polygon grids, defaults to triangle. valid values:.
Specifies the triangle face.
quadrilateral: generates a mix of quadrangle and triangle faces.
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

        if (array_key_exists("MultiViewImages",$param) and $param["MultiViewImages"] !== null) {
            $this->MultiViewImages = [];
            foreach ($param["MultiViewImages"] as $key => $value){
                $obj = new ViewImage();
                $obj->deserialize($value);
                array_push($this->MultiViewImages, $obj);
            }
        }

        if (array_key_exists("EnablePBR",$param) and $param["EnablePBR"] !== null) {
            $this->EnablePBR = $param["EnablePBR"];
        }

        if (array_key_exists("FaceCount",$param) and $param["FaceCount"] !== null) {
            $this->FaceCount = $param["FaceCount"];
        }

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("PolygonType",$param) and $param["PolygonType"] !== null) {
            $this->PolygonType = $param["PolygonType"];
        }
    }
}
