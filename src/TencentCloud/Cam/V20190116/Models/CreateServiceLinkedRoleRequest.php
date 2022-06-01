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
namespace TencentCloud\Cam\V20190116\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateServiceLinkedRole request structure.
 *
 * @method array getQCSServiceName() Obtain Authorized service, i.e., Tencent Cloud service entity with this role attached.
 * @method void setQCSServiceName(array $QCSServiceName) Set Authorized service, i.e., Tencent Cloud service entity with this role attached.
 * @method string getCustomSuffix() Obtain Custom suffix. A string you provide, which is combined with the service-provided prefix to form the complete role name.
 * @method void setCustomSuffix(string $CustomSuffix) Set Custom suffix. A string you provide, which is combined with the service-provided prefix to form the complete role name.
 * @method string getDescription() Obtain Role description.
 * @method void setDescription(string $Description) Set Role description.
 * @method array getTags() Obtain Tags bound to the role.
 * @method void setTags(array $Tags) Set Tags bound to the role.
 */
class CreateServiceLinkedRoleRequest extends AbstractModel
{
    /**
     * @var array Authorized service, i.e., Tencent Cloud service entity with this role attached.
     */
    public $QCSServiceName;

    /**
     * @var string Custom suffix. A string you provide, which is combined with the service-provided prefix to form the complete role name.
     */
    public $CustomSuffix;

    /**
     * @var string Role description.
     */
    public $Description;

    /**
     * @var array Tags bound to the role.
     */
    public $Tags;

    /**
     * @param array $QCSServiceName Authorized service, i.e., Tencent Cloud service entity with this role attached.
     * @param string $CustomSuffix Custom suffix. A string you provide, which is combined with the service-provided prefix to form the complete role name.
     * @param string $Description Role description.
     * @param array $Tags Tags bound to the role.
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
        if (array_key_exists("QCSServiceName",$param) and $param["QCSServiceName"] !== null) {
            $this->QCSServiceName = $param["QCSServiceName"];
        }

        if (array_key_exists("CustomSuffix",$param) and $param["CustomSuffix"] !== null) {
            $this->CustomSuffix = $param["CustomSuffix"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new RoleTags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
