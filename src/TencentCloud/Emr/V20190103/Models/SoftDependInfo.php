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
 * Client component dependencies
 *
 * @method string getSoftName() Obtain The component name.
 * @method void setSoftName(string $SoftName) Set The component name.
 * @method boolean getRequired() Obtain Whether the component is required.
 * @method void setRequired(boolean $Required) Set Whether the component is required.
 */
class SoftDependInfo extends AbstractModel
{
    /**
     * @var string The component name.
     */
    public $SoftName;

    /**
     * @var boolean Whether the component is required.
     */
    public $Required;

    /**
     * @param string $SoftName The component name.
     * @param boolean $Required Whether the component is required.
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
        if (array_key_exists("SoftName",$param) and $param["SoftName"] !== null) {
            $this->SoftName = $param["SoftName"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }
    }
}
