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
 * Protocol port template information
 *
 * @method string getService() Obtain Protocol port
 * @method void setService(string $Service) Set Protocol port
 * @method string getDescription() Obtain Remarks
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Remarks
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class ServicesInfo extends AbstractModel
{
    /**
     * @var string Protocol port
     */
    public $Service;

    /**
     * @var string Remarks
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @param string $Service Protocol port
     * @param string $Description Remarks
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
