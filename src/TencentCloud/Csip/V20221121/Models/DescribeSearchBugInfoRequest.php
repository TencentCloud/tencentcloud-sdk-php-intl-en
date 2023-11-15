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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSearchBugInfo request structure.
 *
 * @method string getId() Obtain Type of the query action. `1`: Query emergency vulnerabilities; `2`: Query all vulnerabilities; `3`: Query a specific vulnerability. When `Id=3`, `CVEId` is required. 
 * @method void setId(string $Id) Set Type of the query action. `1`: Query emergency vulnerabilities; `2`: Query all vulnerabilities; `3`: Query a specific vulnerability. When `Id=3`, `CVEId` is required. 
 * @method string getCVEId() Obtain CVE number of the vulnerability. It's required when `Id=3`.
 * @method void setCVEId(string $CVEId) Set CVE number of the vulnerability. It's required when `Id=3`.
 */
class DescribeSearchBugInfoRequest extends AbstractModel
{
    /**
     * @var string Type of the query action. `1`: Query emergency vulnerabilities; `2`: Query all vulnerabilities; `3`: Query a specific vulnerability. When `Id=3`, `CVEId` is required. 
     */
    public $Id;

    /**
     * @var string CVE number of the vulnerability. It's required when `Id=3`.
     */
    public $CVEId;

    /**
     * @param string $Id Type of the query action. `1`: Query emergency vulnerabilities; `2`: Query all vulnerabilities; `3`: Query a specific vulnerability. When `Id=3`, `CVEId` is required. 
     * @param string $CVEId CVE number of the vulnerability. It's required when `Id=3`.
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

        if (array_key_exists("CVEId",$param) and $param["CVEId"] !== null) {
            $this->CVEId = $param["CVEId"];
        }
    }
}
