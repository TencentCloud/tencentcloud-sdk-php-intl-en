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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource map entity
 *
 * @method string getResourceMapId() Obtain <p>Resource map ID</p>
 * @method void setResourceMapId(string $ResourceMapId) Set <p>Resource map ID</p>
 * @method string getName() Obtain <p>Resource map name</p>
 * @method void setName(string $Name) Set <p>Resource map name</p>
 * @method string getDescription() Obtain <p>Resource map description</p>
 * @method void setDescription(string $Description) Set <p>Resource map description</p>
 * @method integer getInstanceCount() Obtain <p>Total number of instances</p>
 * @method void setInstanceCount(integer $InstanceCount) Set <p>Total number of instances</p>
 */
class ResourceMapInfo extends AbstractModel
{
    /**
     * @var string <p>Resource map ID</p>
     */
    public $ResourceMapId;

    /**
     * @var string <p>Resource map name</p>
     */
    public $Name;

    /**
     * @var string <p>Resource map description</p>
     */
    public $Description;

    /**
     * @var integer <p>Total number of instances</p>
     */
    public $InstanceCount;

    /**
     * @param string $ResourceMapId <p>Resource map ID</p>
     * @param string $Name <p>Resource map name</p>
     * @param string $Description <p>Resource map description</p>
     * @param integer $InstanceCount <p>Total number of instances</p>
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
        if (array_key_exists("ResourceMapId",$param) and $param["ResourceMapId"] !== null) {
            $this->ResourceMapId = $param["ResourceMapId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }
    }
}
