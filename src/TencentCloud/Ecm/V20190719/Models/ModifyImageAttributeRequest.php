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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyImageAttribute request structure.
 *
 * @method string getImageId() Obtain Image ID, such as `img-gvbnzy6f`
 * @method void setImageId(string $ImageId) Set Image ID, such as `img-gvbnzy6f`
 * @method string getImageName() Obtain Image name, which must meet the following requirements:
It can contain up to 20 characters.
- The image name cannot be the same as existing image names.
 * @method void setImageName(string $ImageName) Set Image name, which must meet the following requirements:
It can contain up to 20 characters.
- The image name cannot be the same as existing image names.
 * @method string getImageDescription() Obtain Image description, which must meet the following requirements:
- It cannot exceed 60 characters.
 * @method void setImageDescription(string $ImageDescription) Set Image description, which must meet the following requirements:
- It cannot exceed 60 characters.
 */
class ModifyImageAttributeRequest extends AbstractModel
{
    /**
     * @var string Image ID, such as `img-gvbnzy6f`
     */
    public $ImageId;

    /**
     * @var string Image name, which must meet the following requirements:
It can contain up to 20 characters.
- The image name cannot be the same as existing image names.
     */
    public $ImageName;

    /**
     * @var string Image description, which must meet the following requirements:
- It cannot exceed 60 characters.
     */
    public $ImageDescription;

    /**
     * @param string $ImageId Image ID, such as `img-gvbnzy6f`
     * @param string $ImageName Image name, which must meet the following requirements:
It can contain up to 20 characters.
- The image name cannot be the same as existing image names.
     * @param string $ImageDescription Image description, which must meet the following requirements:
- It cannot exceed 60 characters.
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }
    }
}
