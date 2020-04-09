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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP address template group
 *
 * @method string getAddressTemplateGroupName() Obtain IP address template group name.
 * @method void setAddressTemplateGroupName(string $AddressTemplateGroupName) Set IP address template group name.
 * @method string getAddressTemplateGroupId() Obtain IP address template group instance ID, such as `ipmg-dih8xdbq`.
 * @method void setAddressTemplateGroupId(string $AddressTemplateGroupId) Set IP address template group instance ID, such as `ipmg-dih8xdbq`.
 * @method array getAddressTemplateIdSet() Obtain IP address template ID.
 * @method void setAddressTemplateIdSet(array $AddressTemplateIdSet) Set IP address template ID.
 * @method string getCreatedTime() Obtain Creation Time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation Time.
 * @method array getAddressTemplateSet() Obtain IP address template instance
 * @method void setAddressTemplateSet(array $AddressTemplateSet) Set IP address template instance
 */
class AddressTemplateGroup extends AbstractModel
{
    /**
     * @var string IP address template group name.
     */
    public $AddressTemplateGroupName;

    /**
     * @var string IP address template group instance ID, such as `ipmg-dih8xdbq`.
     */
    public $AddressTemplateGroupId;

    /**
     * @var array IP address template ID.
     */
    public $AddressTemplateIdSet;

    /**
     * @var string Creation Time.
     */
    public $CreatedTime;

    /**
     * @var array IP address template instance
     */
    public $AddressTemplateSet;

    /**
     * @param string $AddressTemplateGroupName IP address template group name.
     * @param string $AddressTemplateGroupId IP address template group instance ID, such as `ipmg-dih8xdbq`.
     * @param array $AddressTemplateIdSet IP address template ID.
     * @param string $CreatedTime Creation Time.
     * @param array $AddressTemplateSet IP address template instance
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
        if (array_key_exists("AddressTemplateGroupName",$param) and $param["AddressTemplateGroupName"] !== null) {
            $this->AddressTemplateGroupName = $param["AddressTemplateGroupName"];
        }

        if (array_key_exists("AddressTemplateGroupId",$param) and $param["AddressTemplateGroupId"] !== null) {
            $this->AddressTemplateGroupId = $param["AddressTemplateGroupId"];
        }

        if (array_key_exists("AddressTemplateIdSet",$param) and $param["AddressTemplateIdSet"] !== null) {
            $this->AddressTemplateIdSet = $param["AddressTemplateIdSet"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("AddressTemplateSet",$param) and $param["AddressTemplateSet"] !== null) {
            $this->AddressTemplateSet = [];
            foreach ($param["AddressTemplateSet"] as $key => $value){
                $obj = new AddressTemplateItem();
                $obj->deserialize($value);
                array_push($this->AddressTemplateSet, $obj);
            }
        }
    }
}
