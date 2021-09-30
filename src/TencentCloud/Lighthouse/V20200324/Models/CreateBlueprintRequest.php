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
     * @param string $BlueprintName Image name, which can contain up to 60 characters.
     * @param string $Description Image description, which can contain up to 60 characters.
     * @param string $InstanceId ID of the instance for which to make an image.
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
    }
}
