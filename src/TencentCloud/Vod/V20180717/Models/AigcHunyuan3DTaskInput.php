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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Input of the AIGC Hunyuan 3D task.
 *
 * @method array getImageInfos() Obtain <p>Generate 3D reference image information.</p>
 * @method void setImageInfos(array $ImageInfos) Set <p>Generate 3D reference image information.</p>
 * @method array getMultiViewImageInfos() Obtain <p>Multi-perspective image information used to generate a 3D model.</p><p>The array length must be between 2 and 8 and must contain the front perspective.</p>
 * @method void setMultiViewImageInfos(array $MultiViewImageInfos) Set <p>Multi-perspective image information used to generate a 3D model.</p><p>The array length must be between 2 and 8 and must contain the front perspective.</p>
 * @method string getPrompt() Obtain <p>Prompt for generating a 3D model.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for generating a 3D model.</p>
 * @method string getGenerateType() Obtain <p>Generation Type.</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture);</li><li>Geometry: Generate only geometry (no texture, faster output speed);</li><li>Texture: Generate only texture (requires filling in MeshInfos)</li></ul>
 * @method void setGenerateType(string $GenerateType) Set <p>Generation Type.</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture);</li><li>Geometry: Generate only geometry (no texture, faster output speed);</li><li>Texture: Generate only texture (requires filling in MeshInfos)</li></ul>
 * @method array getMeshInfos() Obtain <p>Reference 3D model used to generate a 3D model.</p>
 * @method void setMeshInfos(array $MeshInfos) Set <p>Reference 3D model used to generate a 3D model.</p>
 * @method string getEnablePBR() Obtain <p>Whether to enable output PBR material.</p><p>Enumeration values:</p><ul><li>Enabled: enable;</li><li>Disabled: disable.</li></ul>
 * @method void setEnablePBR(string $EnablePBR) Set <p>Whether to enable output PBR material.</p><p>Enumeration values:</p><ul><li>Enabled: enable;</li><li>Disabled: disable.</li></ul>
 * @method integer getFaceCount() Obtain <p>Number of patches. This parameter is valid only when the value of GenerateType is Normal or Geometry.</p>
 * @method void setFaceCount(integer $FaceCount) Set <p>Number of patches. This parameter is valid only when the value of GenerateType is Normal or Geometry.</p>
 * @method string getKeepUV() Obtain <p>Whether to retain UV unfolding.</p><p>Enumeration values:</p><ul><li>Enabled: reserved;</li><li>Disabled: not retain.</li></ul>
 * @method void setKeepUV(string $KeepUV) Set <p>Whether to retain UV unfolding.</p><p>Enumeration values:</p><ul><li>Enabled: reserved;</li><li>Disabled: not retain.</li></ul>
 * @method string getResultFormat() Obtain <p>Result format. In addition to the default return of obj and glb, an extra output format.</p><p>Enumeration values:</p><ul><li>FBX: FBX format file.</li></ul>
 * @method void setResultFormat(string $ResultFormat) Set <p>Result format. In addition to the default return of obj and glb, an extra output format.</p><p>Enumeration values:</p><ul><li>FBX: FBX format file.</li></ul>
 * @method integer getSeed() Obtain <p>Random Seed. Results can be reproduced with the same Seed input.</p>
 * @method void setSeed(integer $Seed) Set <p>Random Seed. Results can be reproduced with the same Seed input.</p>
 * @method string getStyle() Obtain <p>Style control word.</p>
 * @method void setStyle(string $Style) Set <p>Style control word.</p>
 * @method AigcHunyuan3DOutputConfig getOutputConfig() Obtain <p>Configuration of the output media file of the task.</p>
 * @method void setOutputConfig(AigcHunyuan3DOutputConfig $OutputConfig) Set <p>Configuration of the output media file of the task.</p>
 */
class AigcHunyuan3DTaskInput extends AbstractModel
{
    /**
     * @var array <p>Generate 3D reference image information.</p>
     */
    public $ImageInfos;

    /**
     * @var array <p>Multi-perspective image information used to generate a 3D model.</p><p>The array length must be between 2 and 8 and must contain the front perspective.</p>
     */
    public $MultiViewImageInfos;

    /**
     * @var string <p>Prompt for generating a 3D model.</p>
     */
    public $Prompt;

    /**
     * @var string <p>Generation Type.</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture);</li><li>Geometry: Generate only geometry (no texture, faster output speed);</li><li>Texture: Generate only texture (requires filling in MeshInfos)</li></ul>
     */
    public $GenerateType;

    /**
     * @var array <p>Reference 3D model used to generate a 3D model.</p>
     */
    public $MeshInfos;

    /**
     * @var string <p>Whether to enable output PBR material.</p><p>Enumeration values:</p><ul><li>Enabled: enable;</li><li>Disabled: disable.</li></ul>
     */
    public $EnablePBR;

    /**
     * @var integer <p>Number of patches. This parameter is valid only when the value of GenerateType is Normal or Geometry.</p>
     */
    public $FaceCount;

    /**
     * @var string <p>Whether to retain UV unfolding.</p><p>Enumeration values:</p><ul><li>Enabled: reserved;</li><li>Disabled: not retain.</li></ul>
     */
    public $KeepUV;

    /**
     * @var string <p>Result format. In addition to the default return of obj and glb, an extra output format.</p><p>Enumeration values:</p><ul><li>FBX: FBX format file.</li></ul>
     */
    public $ResultFormat;

    /**
     * @var integer <p>Random Seed. Results can be reproduced with the same Seed input.</p>
     */
    public $Seed;

    /**
     * @var string <p>Style control word.</p>
     */
    public $Style;

    /**
     * @var AigcHunyuan3DOutputConfig <p>Configuration of the output media file of the task.</p>
     */
    public $OutputConfig;

    /**
     * @param array $ImageInfos <p>Generate 3D reference image information.</p>
     * @param array $MultiViewImageInfos <p>Multi-perspective image information used to generate a 3D model.</p><p>The array length must be between 2 and 8 and must contain the front perspective.</p>
     * @param string $Prompt <p>Prompt for generating a 3D model.</p>
     * @param string $GenerateType <p>Generation Type.</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture);</li><li>Geometry: Generate only geometry (no texture, faster output speed);</li><li>Texture: Generate only texture (requires filling in MeshInfos)</li></ul>
     * @param array $MeshInfos <p>Reference 3D model used to generate a 3D model.</p>
     * @param string $EnablePBR <p>Whether to enable output PBR material.</p><p>Enumeration values:</p><ul><li>Enabled: enable;</li><li>Disabled: disable.</li></ul>
     * @param integer $FaceCount <p>Number of patches. This parameter is valid only when the value of GenerateType is Normal or Geometry.</p>
     * @param string $KeepUV <p>Whether to retain UV unfolding.</p><p>Enumeration values:</p><ul><li>Enabled: reserved;</li><li>Disabled: not retain.</li></ul>
     * @param string $ResultFormat <p>Result format. In addition to the default return of obj and glb, an extra output format.</p><p>Enumeration values:</p><ul><li>FBX: FBX format file.</li></ul>
     * @param integer $Seed <p>Random Seed. Results can be reproduced with the same Seed input.</p>
     * @param string $Style <p>Style control word.</p>
     * @param AigcHunyuan3DOutputConfig $OutputConfig <p>Configuration of the output media file of the task.</p>
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
        if (array_key_exists("ImageInfos",$param) and $param["ImageInfos"] !== null) {
            $this->ImageInfos = [];
            foreach ($param["ImageInfos"] as $key => $value){
                $obj = new AigcHunyuan3DReferenceImageInfo();
                $obj->deserialize($value);
                array_push($this->ImageInfos, $obj);
            }
        }

        if (array_key_exists("MultiViewImageInfos",$param) and $param["MultiViewImageInfos"] !== null) {
            $this->MultiViewImageInfos = [];
            foreach ($param["MultiViewImageInfos"] as $key => $value){
                $obj = new AigcHunyuan3DMultiViewImageInfo();
                $obj->deserialize($value);
                array_push($this->MultiViewImageInfos, $obj);
            }
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("MeshInfos",$param) and $param["MeshInfos"] !== null) {
            $this->MeshInfos = [];
            foreach ($param["MeshInfos"] as $key => $value){
                $obj = new AigcHunyuan3DMeshInfo();
                $obj->deserialize($value);
                array_push($this->MeshInfos, $obj);
            }
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

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new AigcHunyuan3DOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
