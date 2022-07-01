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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyZone request structure.
 *
 * @method string getId() Obtain Site ID, which is used to identify the site.
 * @method void setId(string $Id) Set Site ID, which is used to identify the site.
 * @method string getType() Obtain Specifies how the site is connected to EdgeOne.
- `full`: Connect via the name server.
- `partial`: Connect via the CNAME.
 * @method void setType(string $Type) Set Specifies how the site is connected to EdgeOne.
- `full`: Connect via the name server.
- `partial`: Connect via the CNAME.
 * @method VanityNameServers getVanityNameServers() Obtain Custom site information
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) Set Custom site information
 */
class ModifyZoneRequest extends AbstractModel
{
    /**
     * @var string Site ID, which is used to identify the site.
     */
    public $Id;

    /**
     * @var string Specifies how the site is connected to EdgeOne.
- `full`: Connect via the name server.
- `partial`: Connect via the CNAME.
     */
    public $Type;

    /**
     * @var VanityNameServers Custom site information
     */
    public $VanityNameServers;

    /**
     * @param string $Id Site ID, which is used to identify the site.
     * @param string $Type Specifies how the site is connected to EdgeOne.
- `full`: Connect via the name server.
- `partial`: Connect via the CNAME.
     * @param VanityNameServers $VanityNameServers Custom site information
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VanityNameServers",$param) and $param["VanityNameServers"] !== null) {
            $this->VanityNameServers = new VanityNameServers();
            $this->VanityNameServers->deserialize($param["VanityNameServers"]);
        }
    }
}
