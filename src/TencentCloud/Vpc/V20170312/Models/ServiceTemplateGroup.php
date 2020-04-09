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
 * Protocol port template group
 *
 * @method string getServiceTemplateGroupId() Obtain Protocol port template group instance ID, such as `ppmg-2klmrefu`.
 * @method void setServiceTemplateGroupId(string $ServiceTemplateGroupId) Set Protocol port template group instance ID, such as `ppmg-2klmrefu`.
 * @method string getServiceTemplateGroupName() Obtain Protocol port template group name.
 * @method void setServiceTemplateGroupName(string $ServiceTemplateGroupName) Set Protocol port template group name.
 * @method array getServiceTemplateIdSet() Obtain Protocol port template instance ID.
 * @method void setServiceTemplateIdSet(array $ServiceTemplateIdSet) Set Protocol port template instance ID.
 * @method string getCreatedTime() Obtain Creation Time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation Time.
 * @method array getServiceTemplateSet() Obtain Protocol port template instance information.
 * @method void setServiceTemplateSet(array $ServiceTemplateSet) Set Protocol port template instance information.
 */
class ServiceTemplateGroup extends AbstractModel
{
    /**
     * @var string Protocol port template group instance ID, such as `ppmg-2klmrefu`.
     */
    public $ServiceTemplateGroupId;

    /**
     * @var string Protocol port template group name.
     */
    public $ServiceTemplateGroupName;

    /**
     * @var array Protocol port template instance ID.
     */
    public $ServiceTemplateIdSet;

    /**
     * @var string Creation Time.
     */
    public $CreatedTime;

    /**
     * @var array Protocol port template instance information.
     */
    public $ServiceTemplateSet;

    /**
     * @param string $ServiceTemplateGroupId Protocol port template group instance ID, such as `ppmg-2klmrefu`.
     * @param string $ServiceTemplateGroupName Protocol port template group name.
     * @param array $ServiceTemplateIdSet Protocol port template instance ID.
     * @param string $CreatedTime Creation Time.
     * @param array $ServiceTemplateSet Protocol port template instance information.
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
        if (array_key_exists("ServiceTemplateGroupId",$param) and $param["ServiceTemplateGroupId"] !== null) {
            $this->ServiceTemplateGroupId = $param["ServiceTemplateGroupId"];
        }

        if (array_key_exists("ServiceTemplateGroupName",$param) and $param["ServiceTemplateGroupName"] !== null) {
            $this->ServiceTemplateGroupName = $param["ServiceTemplateGroupName"];
        }

        if (array_key_exists("ServiceTemplateIdSet",$param) and $param["ServiceTemplateIdSet"] !== null) {
            $this->ServiceTemplateIdSet = $param["ServiceTemplateIdSet"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ServiceTemplateSet",$param) and $param["ServiceTemplateSet"] !== null) {
            $this->ServiceTemplateSet = [];
            foreach ($param["ServiceTemplateSet"] as $key => $value){
                $obj = new ServiceTemplate();
                $obj->deserialize($value);
                array_push($this->ServiceTemplateSet, $obj);
            }
        }
    }
}
