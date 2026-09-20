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
 * CreateAigcHunyuan3DTask request structure.
 *
 * @method integer getSubAppId() Obtain <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, this field must be filled with the app ID to access resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method void setSubAppId(integer $SubAppId) Set <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, this field must be filled with the app ID to access resources in on-demand applications (whether the default application or a newly created application).</b></p>
 * @method array getImageInfos() Obtain <p>Reference image information for generating a 3D model.</p><p>Input parameter limitation: The maximum array length is 1.</p><p>The three input parameters ImageInfos, MultiViewImageInfos, and Prompt are mutually exclusive. One and only one must be filled in.</p>
 * @method void setImageInfos(array $ImageInfos) Set <p>Reference image information for generating a 3D model.</p><p>Input parameter limitation: The maximum array length is 1.</p><p>The three input parameters ImageInfos, MultiViewImageInfos, and Prompt are mutually exclusive. One and only one must be filled in.</p>
 * @method array getMultiViewImageInfos() Obtain <p>Multi-perspective image information used to generate a 3D model.</p><p>Input limits: The array length must be between 2 and 8, and the front perspective must be included.</p><p>The three input parameters ImageInfos, MultiViewImageInfos, and Prompt are mutually exclusive with each other. One and only one must be filled in.</p>
 * @method void setMultiViewImageInfos(array $MultiViewImageInfos) Set <p>Multi-perspective image information used to generate a 3D model.</p><p>Input limits: The array length must be between 2 and 8, and the front perspective must be included.</p><p>The three input parameters ImageInfos, MultiViewImageInfos, and Prompt are mutually exclusive with each other. One and only one must be filled in.</p>
 * @method string getPrompt() Obtain <p>Prompt for generating a 3D model.</p><p>Input parameter limit: up to 1024 utf-8 characters.</p><p>ImageInfos, MultiViewImageInfos, and Prompt are mutually exclusive. One and only one must be filled in.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt for generating a 3D model.</p><p>Input parameter limit: up to 1024 utf-8 characters.</p><p>ImageInfos, MultiViewImageInfos, and Prompt are mutually exclusive. One and only one must be filled in.</p>
 * @method string getGenerateType() Obtain <p>Generation Type.</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture);</li><li>Geometry: Generate only the geometry (no texture, faster output speed);</li><li>Texture: Generate only the texture (requires filling in MeshInfos)</li></ul><p>Default value: Normal</p>
 * @method void setGenerateType(string $GenerateType) Set <p>Generation Type.</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture);</li><li>Geometry: Generate only the geometry (no texture, faster output speed);</li><li>Texture: Generate only the texture (requires filling in MeshInfos)</li></ul><p>Default value: Normal</p>
 * @method array getMeshInfos() Obtain <p>Reference 3D model used to generate a 3D model.</p><p>Input parameter limit: when MeshInfos is filled in, GenerateType must be Texture (texture scenario).</p>
 * @method void setMeshInfos(array $MeshInfos) Set <p>Reference 3D model used to generate a 3D model.</p><p>Input parameter limit: when MeshInfos is filled in, GenerateType must be Texture (texture scenario).</p>
 * @method string getEnablePBR() Obtain <p>Whether to enable output PBR materials.</p><p>Enumeration values:</p><ul><li>Enabled: enable;</li><li>Disabled: disable.</li></ul><p>Default value: Disabled</p>
 * @method void setEnablePBR(string $EnablePBR) Set <p>Whether to enable output PBR materials.</p><p>Enumeration values:</p><ul><li>Enabled: enable;</li><li>Disabled: disable.</li></ul><p>Default value: Disabled</p>
 * @method integer getFaceCount() Obtain <p>Number of patches. This parameter is valid only when GenerateType is Normal or Geometry.</p><p>Value range: [3000, 1500000]</p><p>Default value: 500000</p>
 * @method void setFaceCount(integer $FaceCount) Set <p>Number of patches. This parameter is valid only when GenerateType is Normal or Geometry.</p><p>Value range: [3000, 1500000]</p><p>Default value: 500000</p>
 * @method string getKeepUV() Obtain <p>Whether to retain UV unfolding.</p><p>Enumeration values:</p><ul><li>Enabled: retained;</li><li>Disabled: not retain.</li></ul><p>Default value: Disabled</p>
 * @method void setKeepUV(string $KeepUV) Set <p>Whether to retain UV unfolding.</p><p>Enumeration values:</p><ul><li>Enabled: retained;</li><li>Disabled: not retain.</li></ul><p>Default value: Disabled</p>
 * @method string getResultFormat() Obtain <p>Result format. An extra output format in addition to the default return of obj and glb.</p><p>Enumeration values:</p><ul><li>FBX: FBX format file.</li></ul>
 * @method void setResultFormat(string $ResultFormat) Set <p>Result format. An extra output format in addition to the default return of obj and glb.</p><p>Enumeration values:</p><ul><li>FBX: FBX format file.</li></ul>
 * @method integer getSeed() Obtain <p>Random Seed. Results are reproducible with the same Seed input.</p><p>Value range: [0, 2147483647]</p>
 * @method void setSeed(integer $Seed) Set <p>Random Seed. Results are reproducible with the same Seed input.</p><p>Value range: [0, 2147483647]</p>
 * @method string getStyle() Obtain <p>Style control words.</p>
 * @method void setStyle(string $Style) Set <p>Style control words.</p>
 * @method AigcHunyuan3DOutputConfig getOutputConfig() Obtain <p>Configuration of the output media file of the task.</p>
 * @method void setOutputConfig(AigcHunyuan3DOutputConfig $OutputConfig) Set <p>Configuration of the output media file of the task.</p>
 * @method string getSessionId() Obtain <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method void setSessionId(string $SessionId) Set <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
 * @method string getSessionContext() Obtain <p>Source context, used to pass through user request information. The value of this field will be returned in the audio and video quality revival completion callback. It can contain up to 1000 characters.</p>
 * @method void setSessionContext(string $SessionContext) Set <p>Source context, used to pass through user request information. The value of this field will be returned in the audio and video quality revival completion callback. It can contain up to 1000 characters.</p>
 * @method integer getTasksPriority() Obtain <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.</p>
 * @method void setTasksPriority(integer $TasksPriority) Set <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.</p>
 */
class CreateAigcHunyuan3DTaskRequest extends AbstractModel
{
    /**
     * @var integer <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, this field must be filled with the app ID to access resources in on-demand applications (whether the default application or a newly created application).</b></p>
     */
    public $SubAppId;

    /**
     * @var array <p>Reference image information for generating a 3D model.</p><p>Input parameter limitation: The maximum array length is 1.</p><p>The three input parameters ImageInfos, MultiViewImageInfos, and Prompt are mutually exclusive. One and only one must be filled in.</p>
     */
    public $ImageInfos;

    /**
     * @var array <p>Multi-perspective image information used to generate a 3D model.</p><p>Input limits: The array length must be between 2 and 8, and the front perspective must be included.</p><p>The three input parameters ImageInfos, MultiViewImageInfos, and Prompt are mutually exclusive with each other. One and only one must be filled in.</p>
     */
    public $MultiViewImageInfos;

    /**
     * @var string <p>Prompt for generating a 3D model.</p><p>Input parameter limit: up to 1024 utf-8 characters.</p><p>ImageInfos, MultiViewImageInfos, and Prompt are mutually exclusive. One and only one must be filled in.</p>
     */
    public $Prompt;

    /**
     * @var string <p>Generation Type.</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture);</li><li>Geometry: Generate only the geometry (no texture, faster output speed);</li><li>Texture: Generate only the texture (requires filling in MeshInfos)</li></ul><p>Default value: Normal</p>
     */
    public $GenerateType;

    /**
     * @var array <p>Reference 3D model used to generate a 3D model.</p><p>Input parameter limit: when MeshInfos is filled in, GenerateType must be Texture (texture scenario).</p>
     */
    public $MeshInfos;

    /**
     * @var string <p>Whether to enable output PBR materials.</p><p>Enumeration values:</p><ul><li>Enabled: enable;</li><li>Disabled: disable.</li></ul><p>Default value: Disabled</p>
     */
    public $EnablePBR;

    /**
     * @var integer <p>Number of patches. This parameter is valid only when GenerateType is Normal or Geometry.</p><p>Value range: [3000, 1500000]</p><p>Default value: 500000</p>
     */
    public $FaceCount;

    /**
     * @var string <p>Whether to retain UV unfolding.</p><p>Enumeration values:</p><ul><li>Enabled: retained;</li><li>Disabled: not retain.</li></ul><p>Default value: Disabled</p>
     */
    public $KeepUV;

    /**
     * @var string <p>Result format. An extra output format in addition to the default return of obj and glb.</p><p>Enumeration values:</p><ul><li>FBX: FBX format file.</li></ul>
     */
    public $ResultFormat;

    /**
     * @var integer <p>Random Seed. Results are reproducible with the same Seed input.</p><p>Value range: [0, 2147483647]</p>
     */
    public $Seed;

    /**
     * @var string <p>Style control words.</p>
     */
    public $Style;

    /**
     * @var AigcHunyuan3DOutputConfig <p>Configuration of the output media file of the task.</p>
     */
    public $OutputConfig;

    /**
     * @var string <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     */
    public $SessionId;

    /**
     * @var string <p>Source context, used to pass through user request information. The value of this field will be returned in the audio and video quality revival completion callback. It can contain up to 1000 characters.</p>
     */
    public $SessionContext;

    /**
     * @var integer <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.</p>
     */
    public $TasksPriority;

    /**
     * @param integer $SubAppId <p><b>On-demand <a href="/document/product/266/14574">application</a> ID. For customers who activate on-demand services from December 25, 2023, this field must be filled with the app ID to access resources in on-demand applications (whether the default application or a newly created application).</b></p>
     * @param array $ImageInfos <p>Reference image information for generating a 3D model.</p><p>Input parameter limitation: The maximum array length is 1.</p><p>The three input parameters ImageInfos, MultiViewImageInfos, and Prompt are mutually exclusive. One and only one must be filled in.</p>
     * @param array $MultiViewImageInfos <p>Multi-perspective image information used to generate a 3D model.</p><p>Input limits: The array length must be between 2 and 8, and the front perspective must be included.</p><p>The three input parameters ImageInfos, MultiViewImageInfos, and Prompt are mutually exclusive with each other. One and only one must be filled in.</p>
     * @param string $Prompt <p>Prompt for generating a 3D model.</p><p>Input parameter limit: up to 1024 utf-8 characters.</p><p>ImageInfos, MultiViewImageInfos, and Prompt are mutually exclusive. One and only one must be filled in.</p>
     * @param string $GenerateType <p>Generation Type.</p><p>Enumeration values:</p><ul><li>Normal: Generate a complete 3D asset (geometry + texture);</li><li>Geometry: Generate only the geometry (no texture, faster output speed);</li><li>Texture: Generate only the texture (requires filling in MeshInfos)</li></ul><p>Default value: Normal</p>
     * @param array $MeshInfos <p>Reference 3D model used to generate a 3D model.</p><p>Input parameter limit: when MeshInfos is filled in, GenerateType must be Texture (texture scenario).</p>
     * @param string $EnablePBR <p>Whether to enable output PBR materials.</p><p>Enumeration values:</p><ul><li>Enabled: enable;</li><li>Disabled: disable.</li></ul><p>Default value: Disabled</p>
     * @param integer $FaceCount <p>Number of patches. This parameter is valid only when GenerateType is Normal or Geometry.</p><p>Value range: [3000, 1500000]</p><p>Default value: 500000</p>
     * @param string $KeepUV <p>Whether to retain UV unfolding.</p><p>Enumeration values:</p><ul><li>Enabled: retained;</li><li>Disabled: not retain.</li></ul><p>Default value: Disabled</p>
     * @param string $ResultFormat <p>Result format. An extra output format in addition to the default return of obj and glb.</p><p>Enumeration values:</p><ul><li>FBX: FBX format file.</li></ul>
     * @param integer $Seed <p>Random Seed. Results are reproducible with the same Seed input.</p><p>Value range: [0, 2147483647]</p>
     * @param string $Style <p>Style control words.</p>
     * @param AigcHunyuan3DOutputConfig $OutputConfig <p>Configuration of the output media file of the task.</p>
     * @param string $SessionId <p>Identifier for deduplication. If a request with the same identifier has been sent within the past three days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.</p>
     * @param string $SessionContext <p>Source context, used to pass through user request information. The value of this field will be returned in the audio and video quality revival completion callback. It can contain up to 1000 characters.</p>
     * @param integer $TasksPriority <p>Task priority. The higher the value, the higher the priority. The value range is from -10 to 10. If left blank, the default value is 0.</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }
    }
}
