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
 * CreateVideoRedrawTask request structure.
 *
 * @method VideoRedrawInput getInput() Obtain <p>Input the url information of the video to be redrawn</p>
 * @method void setInput(VideoRedrawInput $Input) Set <p>Input the url information of the video to be redrawn</p>
 * @method VideoRedrawCosInfo getCosInfo() Obtain <p>User cos information, used to store the generation result</p>
 * @method void setCosInfo(VideoRedrawCosInfo $CosInfo) Set <p>User cos information, used to store the generation result</p>
 * @method VideoRedrawTaskInfo getTaskInfo() Obtain <p>ai redrawing task information</p>
 * @method void setTaskInfo(VideoRedrawTaskInfo $TaskInfo) Set <p>ai redrawing task information</p>
 */
class CreateVideoRedrawTaskRequest extends AbstractModel
{
    /**
     * @var VideoRedrawInput <p>Input the url information of the video to be redrawn</p>
     */
    public $Input;

    /**
     * @var VideoRedrawCosInfo <p>User cos information, used to store the generation result</p>
     */
    public $CosInfo;

    /**
     * @var VideoRedrawTaskInfo <p>ai redrawing task information</p>
     */
    public $TaskInfo;

    /**
     * @param VideoRedrawInput $Input <p>Input the url information of the video to be redrawn</p>
     * @param VideoRedrawCosInfo $CosInfo <p>User cos information, used to store the generation result</p>
     * @param VideoRedrawTaskInfo $TaskInfo <p>ai redrawing task information</p>
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new VideoRedrawInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("CosInfo",$param) and $param["CosInfo"] !== null) {
            $this->CosInfo = new VideoRedrawCosInfo();
            $this->CosInfo->deserialize($param["CosInfo"]);
        }

        if (array_key_exists("TaskInfo",$param) and $param["TaskInfo"] !== null) {
            $this->TaskInfo = new VideoRedrawTaskInfo();
            $this->TaskInfo->deserialize($param["TaskInfo"]);
        }
    }
}
