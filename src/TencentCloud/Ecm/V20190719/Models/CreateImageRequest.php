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
 * CreateImage request structure.
 *
 * @method string getImageName() Obtain Image name.
 * @method void setImageName(string $ImageName) Set Image name.
 * @method string getInstanceId() Obtain ID of the instance for which to make an image.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance for which to make an image.
 * @method string getImageDescription() Obtain Image description.
 * @method void setImageDescription(string $ImageDescription) Set Image description.
 * @method string getForcePoweroff() Obtain Whether to perform a forced shutdown to make an image. Valid values:
TRUE: yes
FALSE: no
Default value: FALSE.
 * @method void setForcePoweroff(string $ForcePoweroff) Set Whether to perform a forced shutdown to make an image. Valid values:
TRUE: yes
FALSE: no
Default value: FALSE.
 */
class CreateImageRequest extends AbstractModel
{
    /**
     * @var string Image name.
     */
    public $ImageName;

    /**
     * @var string ID of the instance for which to make an image.
     */
    public $InstanceId;

    /**
     * @var string Image description.
     */
    public $ImageDescription;

    /**
     * @var string Whether to perform a forced shutdown to make an image. Valid values:
TRUE: yes
FALSE: no
Default value: FALSE.
     */
    public $ForcePoweroff;

    /**
     * @param string $ImageName Image name.
     * @param string $InstanceId ID of the instance for which to make an image.
     * @param string $ImageDescription Image description.
     * @param string $ForcePoweroff Whether to perform a forced shutdown to make an image. Valid values:
TRUE: yes
FALSE: no
Default value: FALSE.
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
        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ImageDescription",$param) and $param["ImageDescription"] !== null) {
            $this->ImageDescription = $param["ImageDescription"];
        }

        if (array_key_exists("ForcePoweroff",$param) and $param["ForcePoweroff"] !== null) {
            $this->ForcePoweroff = $param["ForcePoweroff"];
        }
    }
}
