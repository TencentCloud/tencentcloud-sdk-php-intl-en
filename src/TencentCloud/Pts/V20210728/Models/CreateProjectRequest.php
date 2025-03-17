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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProject request structure.
 *
 * @method string getName() Obtain Project name.
 * @method void setName(string $Name) Set Project name.
 * @method string getDescription() Obtain Project description.
 * @method void setDescription(string $Description) Set Project description.
 * @method array getTags() Obtain Array of tags.
 * @method void setTags(array $Tags) Set Array of tags.
 */
class CreateProjectRequest extends AbstractModel
{
    /**
     * @var string Project name.
     */
    public $Name;

    /**
     * @var string Project description.
     */
    public $Description;

    /**
     * @var array Array of tags.
     */
    public $Tags;

    /**
     * @param string $Name Project name.
     * @param string $Description Project description.
     * @param array $Tags Array of tags.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagSpec();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
