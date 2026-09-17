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
 * 
 *
 * @method array getImageInfos() Obtain 
 * @method void setImageInfos(array $ImageInfos) Set 
 * @method array getMultiViewImageInfos() Obtain 
 * @method void setMultiViewImageInfos(array $MultiViewImageInfos) Set 
 * @method string getPrompt() Obtain 
 * @method void setPrompt(string $Prompt) Set 
 * @method string getGenerateType() Obtain 
 * @method void setGenerateType(string $GenerateType) Set 
 * @method array getMeshInfos() Obtain 
 * @method void setMeshInfos(array $MeshInfos) Set 
 * @method string getEnablePBR() Obtain 
 * @method void setEnablePBR(string $EnablePBR) Set 
 * @method integer getFaceCount() Obtain 
 * @method void setFaceCount(integer $FaceCount) Set 
 * @method string getKeepUV() Obtain 
 * @method void setKeepUV(string $KeepUV) Set 
 * @method string getResultFormat() Obtain 
 * @method void setResultFormat(string $ResultFormat) Set 
 * @method integer getSeed() Obtain 
 * @method void setSeed(integer $Seed) Set 
 * @method string getStyle() Obtain 
 * @method void setStyle(string $Style) Set 
 * @method AigcHunyuan3DOutputConfig getOutputConfig() Obtain 
 * @method void setOutputConfig(AigcHunyuan3DOutputConfig $OutputConfig) Set 
 */
class AigcHunyuan3DTaskInput extends AbstractModel
{
    /**
     * @var array 
     */
    public $ImageInfos;

    /**
     * @var array 
     */
    public $MultiViewImageInfos;

    /**
     * @var string 
     */
    public $Prompt;

    /**
     * @var string 
     */
    public $GenerateType;

    /**
     * @var array 
     */
    public $MeshInfos;

    /**
     * @var string 
     */
    public $EnablePBR;

    /**
     * @var integer 
     */
    public $FaceCount;

    /**
     * @var string 
     */
    public $KeepUV;

    /**
     * @var string 
     */
    public $ResultFormat;

    /**
     * @var integer 
     */
    public $Seed;

    /**
     * @var string 
     */
    public $Style;

    /**
     * @var AigcHunyuan3DOutputConfig 
     */
    public $OutputConfig;

    /**
     * @param array $ImageInfos 
     * @param array $MultiViewImageInfos 
     * @param string $Prompt 
     * @param string $GenerateType 
     * @param array $MeshInfos 
     * @param string $EnablePBR 
     * @param integer $FaceCount 
     * @param string $KeepUV 
     * @param string $ResultFormat 
     * @param integer $Seed 
     * @param string $Style 
     * @param AigcHunyuan3DOutputConfig $OutputConfig 
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
