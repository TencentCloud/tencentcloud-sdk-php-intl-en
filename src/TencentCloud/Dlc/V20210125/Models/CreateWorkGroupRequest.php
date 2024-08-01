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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateWorkGroup request structure.
 *
 * @method string getWorkGroupName() Obtain Working group name
 * @method void setWorkGroupName(string $WorkGroupName) Set Working group name
 * @method string getWorkGroupDescription() Obtain Working group description
 * @method void setWorkGroupDescription(string $WorkGroupDescription) Set Working group description
 * @method array getPolicySet() Obtain Collections of authentication policies bound to working groups
 * @method void setPolicySet(array $PolicySet) Set Collections of authentication policies bound to working groups
 * @method array getUserIds() Obtain Collection of IDs of users to be bound to working groups
 * @method void setUserIds(array $UserIds) Set Collection of IDs of users to be bound to working groups
 */
class CreateWorkGroupRequest extends AbstractModel
{
    /**
     * @var string Working group name
     */
    public $WorkGroupName;

    /**
     * @var string Working group description
     */
    public $WorkGroupDescription;

    /**
     * @var array Collections of authentication policies bound to working groups
     */
    public $PolicySet;

    /**
     * @var array Collection of IDs of users to be bound to working groups
     */
    public $UserIds;

    /**
     * @param string $WorkGroupName Working group name
     * @param string $WorkGroupDescription Working group description
     * @param array $PolicySet Collections of authentication policies bound to working groups
     * @param array $UserIds Collection of IDs of users to be bound to working groups
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
        if (array_key_exists("WorkGroupName",$param) and $param["WorkGroupName"] !== null) {
            $this->WorkGroupName = $param["WorkGroupName"];
        }

        if (array_key_exists("WorkGroupDescription",$param) and $param["WorkGroupDescription"] !== null) {
            $this->WorkGroupDescription = $param["WorkGroupDescription"];
        }

        if (array_key_exists("PolicySet",$param) and $param["PolicySet"] !== null) {
            $this->PolicySet = [];
            foreach ($param["PolicySet"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->PolicySet, $obj);
            }
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }
    }
}
