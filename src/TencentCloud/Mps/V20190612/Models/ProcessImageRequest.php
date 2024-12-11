<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ProcessImage request structure.
 *
 * @method MediaInputInfo getInputInfo() Obtain File input information for image processing.
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set File input information for image processing.
 * @method TaskOutputStorage getOutputStorage() Obtain Target storage for image processing output files. If left blank, it inherits the storage location in InputInfo.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Target storage for image processing output files. If left blank, it inherits the storage location in InputInfo.
 * @method string getOutputDir() Obtain Output file path for image processing. If left blank, it is the directory of the file in InputInfo. If it is a directory, such as `/image/201907/`, it means inheriting the original filename and outputting to this directory.
 * @method void setOutputDir(string $OutputDir) Set Output file path for image processing. If left blank, it is the directory of the file in InputInfo. If it is a directory, such as `/image/201907/`, it means inheriting the original filename and outputting to this directory.
 * @method ImageTaskInput getImageTask() Obtain Image processing parameter.
 * @method void setImageTask(ImageTaskInput $ImageTask) Set Image processing parameter.
 */
class ProcessImageRequest extends AbstractModel
{
    /**
     * @var MediaInputInfo File input information for image processing.
     */
    public $InputInfo;

    /**
     * @var TaskOutputStorage Target storage for image processing output files. If left blank, it inherits the storage location in InputInfo.
     */
    public $OutputStorage;

    /**
     * @var string Output file path for image processing. If left blank, it is the directory of the file in InputInfo. If it is a directory, such as `/image/201907/`, it means inheriting the original filename and outputting to this directory.
     */
    public $OutputDir;

    /**
     * @var ImageTaskInput Image processing parameter.
     */
    public $ImageTask;

    /**
     * @param MediaInputInfo $InputInfo File input information for image processing.
     * @param TaskOutputStorage $OutputStorage Target storage for image processing output files. If left blank, it inherits the storage location in InputInfo.
     * @param string $OutputDir Output file path for image processing. If left blank, it is the directory of the file in InputInfo. If it is a directory, such as `/image/201907/`, it means inheriting the original filename and outputting to this directory.
     * @param ImageTaskInput $ImageTask Image processing parameter.
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
        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputDir",$param) and $param["OutputDir"] !== null) {
            $this->OutputDir = $param["OutputDir"];
        }

        if (array_key_exists("ImageTask",$param) and $param["ImageTask"] !== null) {
            $this->ImageTask = new ImageTaskInput();
            $this->ImageTask->deserialize($param["ImageTask"]);
        }
    }
}
