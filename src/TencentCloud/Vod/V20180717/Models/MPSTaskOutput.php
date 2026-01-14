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
 * The MPS subtask output returns the result.
 *
 * @method array getOutputFiles() Obtain The file type in the task's return result. For example, in a smart erase, the erased video file will be stored in the media asset and its FileId will be given in this field. The URL of the subtitle file extracted based on the image will also be given in this field.
 * @method void setOutputFiles(array $OutputFiles) Set The file type in the task's return result. For example, in a smart erase, the erased video file will be stored in the media asset and its FileId will be given in this field. The URL of the subtitle file extracted based on the image will also be given in this field.
 */
class MPSTaskOutput extends AbstractModel
{
    /**
     * @var array The file type in the task's return result. For example, in a smart erase, the erased video file will be stored in the media asset and its FileId will be given in this field. The URL of the subtitle file extracted based on the image will also be given in this field.
     */
    public $OutputFiles;

    /**
     * @param array $OutputFiles The file type in the task's return result. For example, in a smart erase, the erased video file will be stored in the media asset and its FileId will be given in this field. The URL of the subtitle file extracted based on the image will also be given in this field.
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
        if (array_key_exists("OutputFiles",$param) and $param["OutputFiles"] !== null) {
            $this->OutputFiles = [];
            foreach ($param["OutputFiles"] as $key => $value){
                $obj = new MPSOutputFile();
                $obj->deserialize($value);
                array_push($this->OutputFiles, $obj);
            }
        }
    }
}
