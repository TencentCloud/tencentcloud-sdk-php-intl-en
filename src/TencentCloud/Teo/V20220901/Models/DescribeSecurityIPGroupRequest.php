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
 * DescribeSecurityIPGroup request structure.
 *
 * @method string getZoneId() Obtain Site ID, used to specify the scope of the queried site.
 * @method void setZoneId(string $ZoneId) Set Site ID, used to specify the scope of the queried site.
 * @method array getGroupIds() Obtain Specifies the security ip group id. <li>when this parameter is provided, only the configuration of the specified security ip group id is queried;</li> <li>when this parameter is not provided, information of all security ip groups under the site is returned.</li>.
 * @method void setGroupIds(array $GroupIds) Set Specifies the security ip group id. <li>when this parameter is provided, only the configuration of the specified security ip group id is queried;</li> <li>when this parameter is not provided, information of all security ip groups under the site is returned.</li>.
 */
class DescribeSecurityIPGroupRequest extends AbstractModel
{
    /**
     * @var string Site ID, used to specify the scope of the queried site.
     */
    public $ZoneId;

    /**
     * @var array Specifies the security ip group id. <li>when this parameter is provided, only the configuration of the specified security ip group id is queried;</li> <li>when this parameter is not provided, information of all security ip groups under the site is returned.</li>.
     */
    public $GroupIds;

    /**
     * @param string $ZoneId Site ID, used to specify the scope of the queried site.
     * @param array $GroupIds Specifies the security ip group id. <li>when this parameter is provided, only the configuration of the specified security ip group id is queried;</li> <li>when this parameter is not provided, information of all security ip groups under the site is returned.</li>.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }
    }
}
