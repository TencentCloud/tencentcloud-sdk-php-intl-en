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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRaspRules request structure.
 *
 * @method integer getId() Obtain Rule ID. (Leave it blank during addition, and specify it during editing.)
 * @method void setId(integer $Id) Set Rule ID. (Leave it blank during addition, and specify it during editing.)
 * @method array getVulVulsIDs() Obtain Vulnerability ID array.
 * @method void setVulVulsIDs(array $VulVulsIDs) Set Vulnerability ID array.
 * @method string getURLRegexp() Obtain Base64-encoded regular expression for allowlisting requests within a custom request scope. It cannot be left blank unless all requests are to be allowlisted.
 * @method void setURLRegexp(string $URLRegexp) Set Base64-encoded regular expression for allowlisting requests within a custom request scope. It cannot be left blank unless all requests are to be allowlisted.
 * @method integer getWhiteType() Obtain Allowlisting method. 0: allowlist requests within a custom request scope; 1: allowlist all requests.
 * @method void setWhiteType(integer $WhiteType) Set Allowlisting method. 0: allowlist requests within a custom request scope; 1: allowlist all requests.
 */
class ModifyRaspRulesRequest extends AbstractModel
{
    /**
     * @var integer Rule ID. (Leave it blank during addition, and specify it during editing.)
     */
    public $Id;

    /**
     * @var array Vulnerability ID array.
     */
    public $VulVulsIDs;

    /**
     * @var string Base64-encoded regular expression for allowlisting requests within a custom request scope. It cannot be left blank unless all requests are to be allowlisted.
     */
    public $URLRegexp;

    /**
     * @var integer Allowlisting method. 0: allowlist requests within a custom request scope; 1: allowlist all requests.
     */
    public $WhiteType;

    /**
     * @param integer $Id Rule ID. (Leave it blank during addition, and specify it during editing.)
     * @param array $VulVulsIDs Vulnerability ID array.
     * @param string $URLRegexp Base64-encoded regular expression for allowlisting requests within a custom request scope. It cannot be left blank unless all requests are to be allowlisted.
     * @param integer $WhiteType Allowlisting method. 0: allowlist requests within a custom request scope; 1: allowlist all requests.
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

        if (array_key_exists("VulVulsIDs",$param) and $param["VulVulsIDs"] !== null) {
            $this->VulVulsIDs = $param["VulVulsIDs"];
        }

        if (array_key_exists("URLRegexp",$param) and $param["URLRegexp"] !== null) {
            $this->URLRegexp = $param["URLRegexp"];
        }

        if (array_key_exists("WhiteType",$param) and $param["WhiteType"] !== null) {
            $this->WhiteType = $param["WhiteType"];
        }
    }
}
