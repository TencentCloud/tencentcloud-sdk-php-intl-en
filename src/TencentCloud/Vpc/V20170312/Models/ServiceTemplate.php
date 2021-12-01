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
 * Protocol port template
 *
 * @method string getServiceTemplateId() Obtain Protocol port instance ID, such as `ppm-f5n1f8da`.
 * @method void setServiceTemplateId(string $ServiceTemplateId) Set Protocol port instance ID, such as `ppm-f5n1f8da`.
 * @method string getServiceTemplateName() Obtain Template name.
 * @method void setServiceTemplateName(string $ServiceTemplateName) Set Template name.
 * @method array getServiceSet() Obtain Protocol port information.
 * @method void setServiceSet(array $ServiceSet) Set Protocol port information.
 * @method string getCreatedTime() Obtain Creation Time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation Time.
 * @method array getServiceExtraSet() Obtain Protocol port template information with remarks
 * @method void setServiceExtraSet(array $ServiceExtraSet) Set Protocol port template information with remarks
 */
class ServiceTemplate extends AbstractModel
{
    /**
     * @var string Protocol port instance ID, such as `ppm-f5n1f8da`.
     */
    public $ServiceTemplateId;

    /**
     * @var string Template name.
     */
    public $ServiceTemplateName;

    /**
     * @var array Protocol port information.
     */
    public $ServiceSet;

    /**
     * @var string Creation Time.
     */
    public $CreatedTime;

    /**
     * @var array Protocol port template information with remarks
     */
    public $ServiceExtraSet;

    /**
     * @param string $ServiceTemplateId Protocol port instance ID, such as `ppm-f5n1f8da`.
     * @param string $ServiceTemplateName Template name.
     * @param array $ServiceSet Protocol port information.
     * @param string $CreatedTime Creation Time.
     * @param array $ServiceExtraSet Protocol port template information with remarks
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
        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
        }

        if (array_key_exists("ServiceTemplateName",$param) and $param["ServiceTemplateName"] !== null) {
            $this->ServiceTemplateName = $param["ServiceTemplateName"];
        }

        if (array_key_exists("ServiceSet",$param) and $param["ServiceSet"] !== null) {
            $this->ServiceSet = $param["ServiceSet"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ServiceExtraSet",$param) and $param["ServiceExtraSet"] !== null) {
            $this->ServiceExtraSet = [];
            foreach ($param["ServiceExtraSet"] as $key => $value){
                $obj = new ServicesInfo();
                $obj->deserialize($value);
                array_push($this->ServiceExtraSet, $obj);
            }
        }
    }
}
