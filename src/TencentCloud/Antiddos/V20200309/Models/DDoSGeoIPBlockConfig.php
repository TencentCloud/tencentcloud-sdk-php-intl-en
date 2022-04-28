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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Anti-DDoS region blocking configuration
 *
 * @method string getRegionType() Obtain Region type. Valid values:
`oversea`: Outside the Chinese mainland
`china`: The Chinese mainland
`customized`: User-specified region
]
 * @method void setRegionType(string $RegionType) Set Region type. Valid values:
`oversea`: Outside the Chinese mainland
`china`: The Chinese mainland
`customized`: User-specified region
]
 * @method string getAction() Obtain Blocking action. Valid values:
`drop`: the request is blocked.
`trans`: the request is allowed.
]
 * @method void setAction(string $Action) Set Blocking action. Valid values:
`drop`: the request is blocked.
`trans`: the request is allowed.
]
 * @method string getId() Obtain Configuration ID, which is generated after a configuration is added. This field is only required to modify or delete a configuration.
 * @method void setId(string $Id) Set Configuration ID, which is generated after a configuration is added. This field is only required to modify or delete a configuration.
 * @method array getAreaList() Obtain When `RegionType = customized`, AreaList is required and contains up to 128 areas.
 * @method void setAreaList(array $AreaList) Set When `RegionType = customized`, AreaList is required and contains up to 128 areas.
 */
class DDoSGeoIPBlockConfig extends AbstractModel
{
    /**
     * @var string Region type. Valid values:
`oversea`: Outside the Chinese mainland
`china`: The Chinese mainland
`customized`: User-specified region
]
     */
    public $RegionType;

    /**
     * @var string Blocking action. Valid values:
`drop`: the request is blocked.
`trans`: the request is allowed.
]
     */
    public $Action;

    /**
     * @var string Configuration ID, which is generated after a configuration is added. This field is only required to modify or delete a configuration.
     */
    public $Id;

    /**
     * @var array When `RegionType = customized`, AreaList is required and contains up to 128 areas.
     */
    public $AreaList;

    /**
     * @param string $RegionType Region type. Valid values:
`oversea`: Outside the Chinese mainland
`china`: The Chinese mainland
`customized`: User-specified region
]
     * @param string $Action Blocking action. Valid values:
`drop`: the request is blocked.
`trans`: the request is allowed.
]
     * @param string $Id Configuration ID, which is generated after a configuration is added. This field is only required to modify or delete a configuration.
     * @param array $AreaList When `RegionType = customized`, AreaList is required and contains up to 128 areas.
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
        if (array_key_exists("RegionType",$param) and $param["RegionType"] !== null) {
            $this->RegionType = $param["RegionType"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("AreaList",$param) and $param["AreaList"] !== null) {
            $this->AreaList = $param["AreaList"];
        }
    }
}
