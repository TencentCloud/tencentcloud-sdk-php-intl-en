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
 * Scene AIGC image task input.
 *
 * @method AigcImageSceneInfo getSceneInfo() Obtain Scenario-based Image Generation Parameter Configuration.
 * @method void setSceneInfo(AigcImageSceneInfo $SceneInfo) Set Scenario-based Image Generation Parameter Configuration.
 * @method array getFileInfos() Obtain File information of the input image.
 * @method void setFileInfos(array $FileInfos) Set File information of the input image.
 * @method SceneAigcImageOutputConfig getOutputConfig() Obtain Output media file configuration for the task.
 * @method void setOutputConfig(SceneAigcImageOutputConfig $OutputConfig) Set Output media file configuration for the task.
 */
class SceneAigcImageTaskInput extends AbstractModel
{
    /**
     * @var AigcImageSceneInfo Scenario-based Image Generation Parameter Configuration.
     */
    public $SceneInfo;

    /**
     * @var array File information of the input image.
     */
    public $FileInfos;

    /**
     * @var SceneAigcImageOutputConfig Output media file configuration for the task.
     */
    public $OutputConfig;

    /**
     * @param AigcImageSceneInfo $SceneInfo Scenario-based Image Generation Parameter Configuration.
     * @param array $FileInfos File information of the input image.
     * @param SceneAigcImageOutputConfig $OutputConfig Output media file configuration for the task.
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
            $this->SceneInfo = new AigcImageSceneInfo();
            $this->SceneInfo->deserialize($param["SceneInfo"]);
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new SceneAigcImageTaskInputFileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new SceneAigcImageOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
