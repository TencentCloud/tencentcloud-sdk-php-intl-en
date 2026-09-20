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
 * Scenario-based information of an AIGC video task.
 *
 * @method AigcVideoSceneInfo getSceneInfo() Obtain Scenario-based image generation parameter configuration.
 * @method void setSceneInfo(AigcVideoSceneInfo $SceneInfo) Set Scenario-based image generation parameter configuration.
 * @method array getFileInfos() Obtain List of input images.
 * @method void setFileInfos(array $FileInfos) Set List of input images.
 * @method SceneAigcVideoOutputConfig getOutputConfig() Obtain Configuration of the output media file for the scenario-based image generation task.
 * @method void setOutputConfig(SceneAigcVideoOutputConfig $OutputConfig) Set Configuration of the output media file for the scenario-based image generation task.
 */
class SceneAigcVideoTaskInput extends AbstractModel
{
    /**
     * @var AigcVideoSceneInfo Scenario-based image generation parameter configuration.
     */
    public $SceneInfo;

    /**
     * @var array List of input images.
     */
    public $FileInfos;

    /**
     * @var SceneAigcVideoOutputConfig Configuration of the output media file for the scenario-based image generation task.
     */
    public $OutputConfig;

    /**
     * @param AigcVideoSceneInfo $SceneInfo Scenario-based image generation parameter configuration.
     * @param array $FileInfos List of input images.
     * @param SceneAigcVideoOutputConfig $OutputConfig Configuration of the output media file for the scenario-based image generation task.
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
