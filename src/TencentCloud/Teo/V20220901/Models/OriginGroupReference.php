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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getInstanceType() Obtain 
 * @method void setInstanceType(string $InstanceType) Set 
 * @method string getInstanceId() Obtain 
 * @method void setInstanceId(string $InstanceId) Set 
 * @method string getInstanceName() Obtain 
 * @method void setInstanceName(string $InstanceName) Set 
 */
class OriginGroupReference extends AbstractModel
{
    /**
     * @var string 
     */
    public $InstanceType;

    /**
     * @var string 
     */
    public $InstanceId;

    /**
     * @var string 
     */
    public $InstanceName;

    /**
     * @param string $InstanceType 
     * @param string $InstanceId 
     * @param string $InstanceName 
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
