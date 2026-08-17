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
 * AI narration and video re-creation result information
 *
 * @method string getVideoPath() Obtain Path of the commentated video.
 * @method void setVideoPath(string $VideoPath) Set Path of the commentated video.
 * @method array getVideoPaths() Obtain Path list of the commentated video.

**Note**:
1. When returning a file, `VideoPath` returns a file path, and `VideoPaths` is likewise populated with an element of the same path.
2. When multiple files are returned, `VideoPath` returns an empty string, and `VideoPaths` returns a file path list.
 * @method void setVideoPaths(array $VideoPaths) Set Path list of the commentated video.

**Note**:
1. When returning a file, `VideoPath` returns a file path, and `VideoPaths` is likewise populated with an element of the same path.
2. When multiple files are returned, `VideoPath` returns an empty string, and `VideoPaths` returns a file path list.
 * @method string getScriptPath() Obtain Script file path

 * @method void setScriptPath(string $ScriptPath) Set Script file path

 * @method TaskOutputStorage getOutputStorage() Obtain Storage location of the commentated video.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Storage location of the commentated video.
 */
class AiAnalysisTaskReelOutput extends AbstractModel
{
    /**
     * @var string Path of the commentated video.
     */
    public $VideoPath;

    /**
     * @var array Path list of the commentated video.

**Note**:
1. When returning a file, `VideoPath` returns a file path, and `VideoPaths` is likewise populated with an element of the same path.
2. When multiple files are returned, `VideoPath` returns an empty string, and `VideoPaths` returns a file path list.
     */
    public $VideoPaths;

    /**
     * @var string Script file path

     */
    public $ScriptPath;

    /**
     * @var TaskOutputStorage Storage location of the commentated video.
     */
    public $OutputStorage;

    /**
     * @param string $VideoPath Path of the commentated video.
     * @param array $VideoPaths Path list of the commentated video.

**Note**:
1. When returning a file, `VideoPath` returns a file path, and `VideoPaths` is likewise populated with an element of the same path.
2. When multiple files are returned, `VideoPath` returns an empty string, and `VideoPaths` returns a file path list.
     * @param string $ScriptPath Script file path

     * @param TaskOutputStorage $OutputStorage Storage location of the commentated video.
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
        if (array_key_exists("VideoPath",$param) and $param["VideoPath"] !== null) {
            $this->VideoPath = $param["VideoPath"];
        }

        if (array_key_exists("VideoPaths",$param) and $param["VideoPaths"] !== null) {
            $this->VideoPaths = $param["VideoPaths"];
        }

        if (array_key_exists("ScriptPath",$param) and $param["ScriptPath"] !== null) {
            $this->ScriptPath = $param["ScriptPath"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }
    }
}
