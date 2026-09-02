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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitHunyuan3DTask request structure.
 *
 * @method string getPrompt() Obtain <p>Prompt for text-to-3D</p><p>Input limit: up to 1024 utf-8 characters</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for text-to-3D</p><p>Input limit: up to 1024 utf-8 characters</p>
 * @method string getImageUrl() Obtain <p>Image URL (http/https) for image-to-3D</p>
 * @method void setImageUrl(string $ImageUrl) Set <p>Image URL (http/https) for image-to-3D</p>
 * @method array getMultiViewImages() Obtain <p>Generate 3D from multi-perspective images. At least 2 images are required, and a front view must be included.</p>
 * @method void setMultiViewImages(array $MultiViewImages) Set <p>Generate 3D from multi-perspective images. At least 2 images are required, and a front view must be included.</p>
 * @method string getGenerateType() Obtain <p>Generation Type</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture)</li><li>Geometry: Generate only the geometry (no texture, faster output speed)</li><li>Texture: Generate only the texture (MeshUrl is required)</li></ul><p>Default value: Normal</p>
 * @method void setGenerateType(string $GenerateType) Set <p>Generation Type</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture)</li><li>Geometry: Generate only the geometry (no texture, faster output speed)</li><li>Texture: Generate only the texture (MeshUrl is required)</li></ul><p>Default value: Normal</p>
 * @method string getMeshUrl() Obtain <p>URL of the existing 3D model (only .glb / .obj supported). If MeshUrl is passed, GenerateType=Texture is mandatory (texture scenario)</p>
 * @method void setMeshUrl(string $MeshUrl) Set <p>URL of the existing 3D model (only .glb / .obj supported). If MeshUrl is passed, GenerateType=Texture is mandatory (texture scenario)</p>
 * @method boolean getEnablePBR() Obtain <p>Whether to output the PBR material</p><p>Default value: false</p>
 * @method void setEnablePBR(boolean $EnablePBR) Set <p>Whether to output the PBR material</p><p>Default value: false</p>
 * @method integer getFaceCount() Obtain <p>Patch count in the range of [3000, 1500000]. This parameter takes effect only for the Normal/Geometry branch.</p><p>Parameter value range: [3000, 1500000]</p><p>Default value: 500000</p>
 * @method void setFaceCount(integer $FaceCount) Set <p>Patch count in the range of [3000, 1500000]. This parameter takes effect only for the Normal/Geometry branch.</p><p>Parameter value range: [3000, 1500000]</p><p>Default value: 500000</p>
 * @method boolean getKeepUV() Obtain <p>Reserve UV unfolding or not</p><p>Default value: false</p>
 * @method void setKeepUV(boolean $KeepUV) Set <p>Reserve UV unfolding or not</p><p>Default value: false</p>
 * @method string getResultFormat() Obtain <p>A format attached to the output in addition to the default obj + glb. Currently only support FBX</p>
 * @method void setResultFormat(string $ResultFormat) Set <p>A format attached to the output in addition to the default obj + glb. Currently only support FBX</p>
 * @method integer getSeed() Obtain <p>Random Seed. The result can be reproduced with identical Seed input.</p>
 * @method void setSeed(integer $Seed) Set <p>Random Seed. The result can be reproduced with identical Seed input.</p>
 * @method string getStyle() Obtain <p>Style control words</p>
 * @method void setStyle(string $Style) Set <p>Style control words</p>
 */
class SubmitHunyuan3DTaskRequest extends AbstractModel
{
    /**
     * @var string <p>Prompt for text-to-3D</p><p>Input limit: up to 1024 utf-8 characters</p>
     */
    public $Prompt;

    /**
     * @var string <p>Image URL (http/https) for image-to-3D</p>
     */
    public $ImageUrl;

    /**
     * @var array <p>Generate 3D from multi-perspective images. At least 2 images are required, and a front view must be included.</p>
     */
    public $MultiViewImages;

    /**
     * @var string <p>Generation Type</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture)</li><li>Geometry: Generate only the geometry (no texture, faster output speed)</li><li>Texture: Generate only the texture (MeshUrl is required)</li></ul><p>Default value: Normal</p>
     */
    public $GenerateType;

    /**
     * @var string <p>URL of the existing 3D model (only .glb / .obj supported). If MeshUrl is passed, GenerateType=Texture is mandatory (texture scenario)</p>
     */
    public $MeshUrl;

    /**
     * @var boolean <p>Whether to output the PBR material</p><p>Default value: false</p>
     */
    public $EnablePBR;

    /**
     * @var integer <p>Patch count in the range of [3000, 1500000]. This parameter takes effect only for the Normal/Geometry branch.</p><p>Parameter value range: [3000, 1500000]</p><p>Default value: 500000</p>
     */
    public $FaceCount;

    /**
     * @var boolean <p>Reserve UV unfolding or not</p><p>Default value: false</p>
     */
    public $KeepUV;

    /**
     * @var string <p>A format attached to the output in addition to the default obj + glb. Currently only support FBX</p>
     */
    public $ResultFormat;

    /**
     * @var integer <p>Random Seed. The result can be reproduced with identical Seed input.</p>
     */
    public $Seed;

    /**
     * @var string <p>Style control words</p>
     */
    public $Style;

    /**
     * @param string $Prompt <p>Prompt for text-to-3D</p><p>Input limit: up to 1024 utf-8 characters</p>
     * @param string $ImageUrl <p>Image URL (http/https) for image-to-3D</p>
     * @param array $MultiViewImages <p>Generate 3D from multi-perspective images. At least 2 images are required, and a front view must be included.</p>
     * @param string $GenerateType <p>Generation Type</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture)</li><li>Geometry: Generate only the geometry (no texture, faster output speed)</li><li>Texture: Generate only the texture (MeshUrl is required)</li></ul><p>Default value: Normal</p>
     * @param string $MeshUrl <p>URL of the existing 3D model (only .glb / .obj supported). If MeshUrl is passed, GenerateType=Texture is mandatory (texture scenario)</p>
     * @param boolean $EnablePBR <p>Whether to output the PBR material</p><p>Default value: false</p>
     * @param integer $FaceCount <p>Patch count in the range of [3000, 1500000]. This parameter takes effect only for the Normal/Geometry branch.</p><p>Parameter value range: [3000, 1500000]</p><p>Default value: 500000</p>
     * @param boolean $KeepUV <p>Reserve UV unfolding or not</p><p>Default value: false</p>
     * @param string $ResultFormat <p>A format attached to the output in addition to the default obj + glb. Currently only support FBX</p>
     * @param integer $Seed <p>Random Seed. The result can be reproduced with identical Seed input.</p>
     * @param string $Style <p>Style control words</p>
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

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("MeshUrl",$param) and $param["MeshUrl"] !== null) {
            $this->MeshUrl = $param["MeshUrl"];
        }

        if (array_key_exists("EnablePBR",$param) and $param["EnablePBR"] !== null) {
            $this->EnablePBR = $param["EnablePBR"];
        }

        if (array_key_exists("FaceCount",$param) and $param["FaceCount"] !== null) {
            $this->FaceCount = $param["FaceCount"];
        }

        if (array_key_exists("KeepUV",$param) and $param["KeepUV"] !== null) {
            $this->KeepUV = $param["KeepUV"];
        }

        if (array_key_exists("ResultFormat",$param) and $param["ResultFormat"] !== null) {
            $this->ResultFormat = $param["ResultFormat"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }
    }
}
