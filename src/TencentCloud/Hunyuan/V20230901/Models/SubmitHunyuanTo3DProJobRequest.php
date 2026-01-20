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
 * SubmitHunyuanTo3DProJob request structure.
 *
 * @method string getModel() Obtain Tencent HY 3D Global model version
Defaults to 3.0, with optional choices: 3.0, 3.1
When selecting version 3.1, the LowPoly parameter is unavailable
Example value:3.0
 * @method void setModel(string $Model) Set Tencent HY 3D Global model version
Defaults to 3.0, with optional choices: 3.0, 3.1
When selecting version 3.1, the LowPoly parameter is unavailable
Example value:3.0
 * @method string getPrompt() Obtain Generates 3D content, describes 3D content.
Supports up to 1024 utf-8 characters.
Text-To-3D. Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
 * @method void setPrompt(string $Prompt) Set Generates 3D content, describes 3D content.
Supports up to 1024 utf-8 characters.
Text-To-3D. Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
 * @method string getImageBase64() Obtain Enter the Base64 code of the image.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Input image suggestion:
1.Simple background (solid-color background) 
2.No text or blended colors
3.Single object
4.The object occupies over 50% of the frame
Valid values: jpg, png, jpeg, webp.
Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
 * @method void setImageBase64(string $ImageBase64) Set Enter the Base64 code of the image.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Input image suggestion:
1.Simple background (solid-color background) 
2.No text or blended colors
3.Single object
4.The object occupies over 50% of the frame
Valid values: jpg, png, jpeg, webp.
Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
 * @method string getImageUrl() Obtain Input image Url.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Input image suggestion:
1.Simple background (solid-color background) 
2.No text or blended colors
3.Single object
4.The object occupies over 50% of the frame
Valid values: jpg, png, jpeg, webp.
Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
 * @method void setImageUrl(string $ImageUrl) Set Input image Url.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Input image suggestion:
1.Simple background (solid-color background) 
2.No text or blended colors
3.Single object
4.The object occupies over 50% of the frame
Valid values: jpg, png, jpeg, webp.
Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
 * @method array getMultiViewImages() Obtain Multi-Perspective model image. reference value for viewing angle:.
left: Left view;
right: Right view;
back: Rear view;
top: Top view (only supported in Model 3.1);
bottom: Bottom view (only supported in Model 3.1);
left_front: Left front 45 degree view (only supported in Model 3.1);
right_front: Right front 45 degree view (only supported in Model 3.1);

Each perspective is limited to one image.
Image size limit. the value must not exceed 8 mb after encoding.
Image resolution limitation: the unilateral resolution should be less than 5000 and greater than 128.
Supported image format: JPG or PNG
 * @method void setMultiViewImages(array $MultiViewImages) Set Multi-Perspective model image. reference value for viewing angle:.
left: Left view;
right: Right view;
back: Rear view;
top: Top view (only supported in Model 3.1);
bottom: Bottom view (only supported in Model 3.1);
left_front: Left front 45 degree view (only supported in Model 3.1);
right_front: Right front 45 degree view (only supported in Model 3.1);

Each perspective is limited to one image.
Image size limit. the value must not exceed 8 mb after encoding.
Image resolution limitation: the unilateral resolution should be less than 5000 and greater than 128.
Supported image format: JPG or PNG
 * @method boolean getEnablePBR() Obtain Specifies whether PBR material generation is enabled. default false.
 * @method void setEnablePBR(boolean $EnablePBR) Set Specifies whether PBR material generation is enabled. default false.
 * @method integer getFaceCount() Obtain Specifies the face count for 3D model generation. default value is 500000.
Specifies the supported face count generation range. value range: 40000-1500000.
 * @method void setFaceCount(integer $FaceCount) Set Specifies the face count for 3D model generation. default value is 500000.
Specifies the supported face count generation range. value range: 40000-1500000.
 * @method string getGenerateType() Obtain Generation task type. default: Normal. valid values:.
Normal: generates a geometric model with textures.
LowPoly: specifies the model generated after intelligent polygon reduction.
Geometry: specifies whether to generate a Geometry model without textures (white model). when this task is selected, the EnablePBR parameter does not take effect.
Specifies the Sketch for the generative model, allowing input of a Sketch or line drawing. in this mode, both prompt and ImageUrl/ImageBase64 can be entered together.
 * @method void setGenerateType(string $GenerateType) Set Generation task type. default: Normal. valid values:.
Normal: generates a geometric model with textures.
LowPoly: specifies the model generated after intelligent polygon reduction.
Geometry: specifies whether to generate a Geometry model without textures (white model). when this task is selected, the EnablePBR parameter does not take effect.
Specifies the Sketch for the generative model, allowing input of a Sketch or line drawing. in this mode, both prompt and ImageUrl/ImageBase64 can be entered together.
 * @method string getPolygonType() Obtain This parameter only takes effect when LowPoly mode is selected from GenerateType.

Polygon type, indicates the number of sides in the model's surface grid, defaults to triangle. valid values:.
triangle. specifies the triangular face.
quadrilateral: mix quadrangle and triangle faces to generate.
 * @method void setPolygonType(string $PolygonType) Set This parameter only takes effect when LowPoly mode is selected from GenerateType.

Polygon type, indicates the number of sides in the model's surface grid, defaults to triangle. valid values:.
triangle. specifies the triangular face.
quadrilateral: mix quadrangle and triangle faces to generate.
 */
class SubmitHunyuanTo3DProJobRequest extends AbstractModel
{
    /**
     * @var string Tencent HY 3D Global model version
Defaults to 3.0, with optional choices: 3.0, 3.1
When selecting version 3.1, the LowPoly parameter is unavailable
Example value:3.0
     */
    public $Model;

    /**
     * @var string Generates 3D content, describes 3D content.
Supports up to 1024 utf-8 characters.
Text-To-3D. Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
     */
    public $Prompt;

    /**
     * @var string Enter the Base64 code of the image.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Input image suggestion:
1.Simple background (solid-color background) 
2.No text or blended colors
3.Single object
4.The object occupies over 50% of the frame
Valid values: jpg, png, jpeg, webp.
Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
     */
    public $ImageBase64;

    /**
     * @var string Input image Url.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Input image suggestion:
1.Simple background (solid-color background) 
2.No text or blended colors
3.Single object
4.The object occupies over 50% of the frame
Valid values: jpg, png, jpeg, webp.
Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
     */
    public $ImageUrl;

    /**
     * @var array Multi-Perspective model image. reference value for viewing angle:.
left: Left view;
right: Right view;
back: Rear view;
top: Top view (only supported in Model 3.1);
bottom: Bottom view (only supported in Model 3.1);
left_front: Left front 45 degree view (only supported in Model 3.1);
right_front: Right front 45 degree view (only supported in Model 3.1);

Each perspective is limited to one image.
Image size limit. the value must not exceed 8 mb after encoding.
Image resolution limitation: the unilateral resolution should be less than 5000 and greater than 128.
Supported image format: JPG or PNG
     */
    public $MultiViewImages;

    /**
     * @var boolean Specifies whether PBR material generation is enabled. default false.
     */
    public $EnablePBR;

    /**
     * @var integer Specifies the face count for 3D model generation. default value is 500000.
Specifies the supported face count generation range. value range: 40000-1500000.
     */
    public $FaceCount;

    /**
     * @var string Generation task type. default: Normal. valid values:.
Normal: generates a geometric model with textures.
LowPoly: specifies the model generated after intelligent polygon reduction.
Geometry: specifies whether to generate a Geometry model without textures (white model). when this task is selected, the EnablePBR parameter does not take effect.
Specifies the Sketch for the generative model, allowing input of a Sketch or line drawing. in this mode, both prompt and ImageUrl/ImageBase64 can be entered together.
     */
    public $GenerateType;

    /**
     * @var string This parameter only takes effect when LowPoly mode is selected from GenerateType.

Polygon type, indicates the number of sides in the model's surface grid, defaults to triangle. valid values:.
triangle. specifies the triangular face.
quadrilateral: mix quadrangle and triangle faces to generate.
     */
    public $PolygonType;

    /**
     * @param string $Model Tencent HY 3D Global model version
Defaults to 3.0, with optional choices: 3.0, 3.1
When selecting version 3.1, the LowPoly parameter is unavailable
Example value:3.0
     * @param string $Prompt Generates 3D content, describes 3D content.
Supports up to 1024 utf-8 characters.
Text-To-3D. Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
     * @param string $ImageBase64 Enter the Base64 code of the image.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Input image suggestion:
1.Simple background (solid-color background) 
2.No text or blended colors
3.Single object
4.The object occupies over 50% of the frame
Valid values: jpg, png, jpeg, webp.
Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
     * @param string $ImageUrl Input image Url.
Size: specifies the unilateral resolution requirement, not less than 128 and not greater than 5000. size should not exceed 8m (after encoding, it increases by about 30%, recommend actual input image size no more than 6m).
Input image suggestion:
1.Simple background (solid-color background) 
2.No text or blended colors
3.Single object
4.The object occupies over 50% of the frame
Valid values: jpg, png, jpeg, webp.
Specifies either ImageBase64/ImageUrl or Prompt is required. Prompt and ImageBase64/ImageUrl cannot coexist.
     * @param array $MultiViewImages Multi-Perspective model image. reference value for viewing angle:.
left: Left view;
right: Right view;
back: Rear view;
top: Top view (only supported in Model 3.1);
bottom: Bottom view (only supported in Model 3.1);
left_front: Left front 45 degree view (only supported in Model 3.1);
right_front: Right front 45 degree view (only supported in Model 3.1);

Each perspective is limited to one image.
Image size limit. the value must not exceed 8 mb after encoding.
Image resolution limitation: the unilateral resolution should be less than 5000 and greater than 128.
Supported image format: JPG or PNG
     * @param boolean $EnablePBR Specifies whether PBR material generation is enabled. default false.
     * @param integer $FaceCount Specifies the face count for 3D model generation. default value is 500000.
Specifies the supported face count generation range. value range: 40000-1500000.
     * @param string $GenerateType Generation task type. default: Normal. valid values:.
Normal: generates a geometric model with textures.
LowPoly: specifies the model generated after intelligent polygon reduction.
Geometry: specifies whether to generate a Geometry model without textures (white model). when this task is selected, the EnablePBR parameter does not take effect.
Specifies the Sketch for the generative model, allowing input of a Sketch or line drawing. in this mode, both prompt and ImageUrl/ImageBase64 can be entered together.
     * @param string $PolygonType This parameter only takes effect when LowPoly mode is selected from GenerateType.

Polygon type, indicates the number of sides in the model's surface grid, defaults to triangle. valid values:.
triangle. specifies the triangular face.
quadrilateral: mix quadrangle and triangle faces to generate.
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
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
