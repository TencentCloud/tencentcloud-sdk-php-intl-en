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
 * CreateSecurityGroup request structure.
 *
 * @method string getGroupName() Obtain Security group name, which can be customized with up to 60 characters.
 * @method void setGroupName(string $GroupName) Set Security group name, which can be customized with up to 60 characters.
 * @method string getGroupDescription() Obtain Security group remarks, which can contain up to 100 characters.
 * @method void setGroupDescription(string $GroupDescription) Set Security group remarks, which can contain up to 100 characters.
 * @method array getTags() Obtain List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 * @method void setTags(array $Tags) Set List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
 */
class CreateSecurityGroupRequest extends AbstractModel
{
    /**
     * @var string Security group name, which can be customized with up to 60 characters.
     */
    public $GroupName;

    /**
     * @var string Security group remarks, which can contain up to 100 characters.
     */
    public $GroupDescription;

    /**
     * @var array List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
     */
    public $Tags;

    /**
     * @param string $GroupName Security group name, which can be customized with up to 60 characters.
     * @param string $GroupDescription Security group remarks, which can contain up to 100 characters.
     * @param array $Tags List of bound tags, such as [{"Key": "city", "Value": "shanghai"}].
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("GroupDescription",$param) and $param["GroupDescription"] !== null) {
            $this->GroupDescription = $param["GroupDescription"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
