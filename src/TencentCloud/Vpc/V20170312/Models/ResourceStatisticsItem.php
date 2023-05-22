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
 * Resource statistical items
 *
 * @method string getResourceType() Obtain Resource type, such as CVM, ENI
 * @method void setResourceType(string $ResourceType) Set Resource type, such as CVM, ENI
 * @method string getResourceName() Obtain Resource name.
 * @method void setResourceName(string $ResourceName) Set Resource name.
 * @method integer getResourceCount() Obtain Number of resources
 * @method void setResourceCount(integer $ResourceCount) Set Number of resources
 */
class ResourceStatisticsItem extends AbstractModel
{
    /**
     * @var string Resource type, such as CVM, ENI
     */
    public $ResourceType;

    /**
     * @var string Resource name.
     */
    public $ResourceName;

    /**
     * @var integer Number of resources
     */
    public $ResourceCount;

    /**
     * @param string $ResourceType Resource type, such as CVM, ENI
     * @param string $ResourceName Resource name.
     * @param integer $ResourceCount Number of resources
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
        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ResourceCount",$param) and $param["ResourceCount"] !== null) {
            $this->ResourceCount = $param["ResourceCount"];
        }
    }
}
