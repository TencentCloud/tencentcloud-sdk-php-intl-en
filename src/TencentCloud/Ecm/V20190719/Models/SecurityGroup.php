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
 * Security group object
 *
 * @method string getSecurityGroupId() Obtain Security group instance ID, such as `esg-ohuuioma`.
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group instance ID, such as `esg-ohuuioma`.
 * @method string getSecurityGroupName() Obtain Security group name, which can be customized with up to 60 characters.
 * @method void setSecurityGroupName(string $SecurityGroupName) Set Security group name, which can be customized with up to 60 characters.
 * @method string getSecurityGroupDesc() Obtain Security group remarks, which can contain up to 100 characters.
 * @method void setSecurityGroupDesc(string $SecurityGroupDesc) Set Security group remarks, which can contain up to 100 characters.
 * @method boolean getIsDefault() Obtain Whether it is the default security group (which cannot be deleted).
 * @method void setIsDefault(boolean $IsDefault) Set Whether it is the default security group (which cannot be deleted).
 * @method string getCreatedTime() Obtain Security group creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Security group creation time.
 * @method array getTagSet() Obtain Tag key-value pairs.
 * @method void setTagSet(array $TagSet) Set Tag key-value pairs.
 */
class SecurityGroup extends AbstractModel
{
    /**
     * @var string Security group instance ID, such as `esg-ohuuioma`.
     */
    public $SecurityGroupId;

    /**
     * @var string Security group name, which can be customized with up to 60 characters.
     */
    public $SecurityGroupName;

    /**
     * @var string Security group remarks, which can contain up to 100 characters.
     */
    public $SecurityGroupDesc;

    /**
     * @var boolean Whether it is the default security group (which cannot be deleted).
     */
    public $IsDefault;

    /**
     * @var string Security group creation time.
     */
    public $CreatedTime;

    /**
     * @var array Tag key-value pairs.
     */
    public $TagSet;

    /**
     * @param string $SecurityGroupId Security group instance ID, such as `esg-ohuuioma`.
     * @param string $SecurityGroupName Security group name, which can be customized with up to 60 characters.
     * @param string $SecurityGroupDesc Security group remarks, which can contain up to 100 characters.
     * @param boolean $IsDefault Whether it is the default security group (which cannot be deleted).
     * @param string $CreatedTime Security group creation time.
     * @param array $TagSet Tag key-value pairs.
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
        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("SecurityGroupName",$param) and $param["SecurityGroupName"] !== null) {
            $this->SecurityGroupName = $param["SecurityGroupName"];
        }

        if (array_key_exists("SecurityGroupDesc",$param) and $param["SecurityGroupDesc"] !== null) {
            $this->SecurityGroupDesc = $param["SecurityGroupDesc"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }
    }
}
