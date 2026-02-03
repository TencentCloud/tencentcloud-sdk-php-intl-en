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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitHunyuanTo3DUVJob request structure.
 *
 * @method InputFile3D getFile() Obtain File URL of the 3D model requiring UV unfold
Supported formats: FBX, OBJ, GLB
3D model limit: less than 30000 faces
 * @method void setFile(InputFile3D $File) Set File URL of the 3D model requiring UV unfold
Supported formats: FBX, OBJ, GLB
3D model limit: less than 30000 faces
 */
class SubmitHunyuanTo3DUVJobRequest extends AbstractModel
{
    /**
     * @var InputFile3D File URL of the 3D model requiring UV unfold
Supported formats: FBX, OBJ, GLB
3D model limit: less than 30000 faces
     */
    public $File;

    /**
     * @param InputFile3D $File File URL of the 3D model requiring UV unfold
Supported formats: FBX, OBJ, GLB
3D model limit: less than 30000 faces
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
        if (array_key_exists("File",$param) and $param["File"] !== null) {
            $this->File = new InputFile3D();
            $this->File->deserialize($param["File"]);
        }
    }
}
