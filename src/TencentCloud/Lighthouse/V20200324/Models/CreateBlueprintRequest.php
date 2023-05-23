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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBlueprint request structure.
 *
 * @method string getBlueprintName() Obtain Image name, which can contain up to 60 characters.
 * @method void setBlueprintName(string $BlueprintName) Set Image name, which can contain up to 60 characters.
 * @method string getDescription() Obtain Image description, which can contain up to 60 characters.
 * @method void setDescription(string $Description) Set Image description, which can contain up to 60 characters.
 * @method string getInstanceId() Obtain ID of the instance for which to make an image.
 * @method void setInstanceId(string $InstanceId) Set ID of the instance for which to make an image.
 * @method boolean getForcePowerOff() Obtain Whether to forcibly shut down the instance before creating the image 
Valid values: 
`True`: Shut down and instance first 
`False`: Create the image when the instance is running 
Default: `True` 
Note that if you create an image when the instance is running, there might be data loss.
 * @method void setForcePowerOff(boolean $ForcePowerOff) Set Whether to forcibly shut down the instance before creating the image 
Valid values: 
`True`: Shut down and instance first 
`False`: Create the image when the instance is running 
Default: `True` 
Note that if you create an image when the instance is running, there might be data loss.
 */
class CreateBlueprintRequest extends AbstractModel
{
    /**
     * @var string Image name, which can contain up to 60 characters.
     */
    public $BlueprintName;

    /**
     * @var string Image description, which can contain up to 60 characters.
     */
    public $Description;

    /**
     * @var string ID of the instance for which to make an image.
     */
    public $InstanceId;

    /**
     * @var boolean Whether to forcibly shut down the instance before creating the image 
Valid values: 
`True`: Shut down and instance first 
`False`: Create the image when the instance is running 
Default: `True` 
Note that if you create an image when the instance is running, there might be data loss.
     */
    public $ForcePowerOff;

    /**
     * @param string $BlueprintName Image name, which can contain up to 60 characters.
     * @param string $Description Image description, which can contain up to 60 characters.
     * @param string $InstanceId ID of the instance for which to make an image.
     * @param boolean $ForcePowerOff Whether to forcibly shut down the instance before creating the image 
Valid values: 
`True`: Shut down and instance first 
`False`: Create the image when the instance is running 
Default: `True` 
Note that if you create an image when the instance is running, there might be data loss.
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
        if (array_key_exists("BlueprintName",$param) and $param["BlueprintName"] !== null) {
            $this->BlueprintName = $param["BlueprintName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ForcePowerOff",$param) and $param["ForcePowerOff"] !== null) {
            $this->ForcePowerOff = $param["ForcePowerOff"];
        }
    }
}
