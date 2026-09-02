<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * @method string getId() Obtain Return urgent vulnerabilities when the value is 1, return the emergency vulnerability list when the value is 2, and use with the CVEId field as input to display the vulnerability data when the value is 3.
 * @method void setId(string $Id) Set Return urgent vulnerabilities when the value is 1, return the emergency vulnerability list when the value is 2, and use with the CVEId field as input to display the vulnerability data when the value is 3.
 * @method string getCVEId() Obtain Pass in this parameter when id=3.
 * @method void setCVEId(string $CVEId) Set Pass in this parameter when id=3.
 */
class DescribeSearchBugInfoRequest extends AbstractModel
{
    /**
     * @var string Return urgent vulnerabilities when the value is 1, return the emergency vulnerability list when the value is 2, and use with the CVEId field as input to display the vulnerability data when the value is 3.
     */
    public $Id;

    /**
     * @var string Pass in this parameter when id=3.
     */
    public $CVEId;

    /**
     * @param string $Id Return urgent vulnerabilities when the value is 1, return the emergency vulnerability list when the value is 2, and use with the CVEId field as input to display the vulnerability data when the value is 3.
     * @param string $CVEId Pass in this parameter when id=3.
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
