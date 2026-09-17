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
 * @method AigcVideoSceneInfo getSceneInfo() Obtain 
 * @method void setSceneInfo(AigcVideoSceneInfo $SceneInfo) Set 
 * @method array getFileInfos() Obtain 
 * @method void setFileInfos(array $FileInfos) Set 
 * @method SceneAigcVideoOutputConfig getOutputConfig() Obtain 
 * @method void setOutputConfig(SceneAigcVideoOutputConfig $OutputConfig) Set 
 */
class SceneAigcVideoTaskInput extends AbstractModel
{
    /**
     * @var AigcVideoSceneInfo 
     */
    public $SceneInfo;

    /**
     * @var array 
     */
    public $FileInfos;

    /**
     * @var SceneAigcVideoOutputConfig 
     */
    public $OutputConfig;

    /**
     * @param AigcVideoSceneInfo $SceneInfo 
     * @param array $FileInfos 
     * @param SceneAigcVideoOutputConfig $OutputConfig 
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
        if (array_key_exists("SceneInfo",$param) and $param["SceneInfo"] !== null) {
            $this->SceneInfo = new AigcVideoSceneInfo();
            $this->SceneInfo->deserialize($param["SceneInfo"]);
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new SceneAigcVideoTaskInputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new SceneAigcVideoOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
