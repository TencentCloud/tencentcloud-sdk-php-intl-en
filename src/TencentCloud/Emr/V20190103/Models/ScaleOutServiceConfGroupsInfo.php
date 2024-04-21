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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getServiceComponentName() Obtain 
 * @method void setServiceComponentName(string $ServiceComponentName) Set 
 * @method string getConfGroupName() Obtain 
 * @method void setConfGroupName(string $ConfGroupName) Set 
 */
class ScaleOutServiceConfGroupsInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $ServiceComponentName;

    /**
     * @var string 
     */
    public $ConfGroupName;

    /**
     * @param string $ServiceComponentName 
     * @param string $ConfGroupName 
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
        if (array_key_exists("ServiceComponentName",$param) and $param["ServiceComponentName"] !== null) {
            $this->ServiceComponentName = $param["ServiceComponentName"];
        }

        if (array_key_exists("ConfGroupName",$param) and $param["ConfGroupName"] !== null) {
            $this->ConfGroupName = $param["ConfGroupName"];
        }
    }
}
