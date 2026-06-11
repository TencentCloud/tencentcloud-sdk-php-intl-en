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
 * AddOrModifyMaliciousConnectionWhiteList request structure.
 *
 * @method string getRequestType() Obtain Enumerate
IP: IP
Domain name: DOMAIN
 * @method void setRequestType(string $RequestType) Set Enumerate
IP: IP
Domain name: DOMAIN
 * @method array getWhiteDomainList() Obtain Allowlisted domain names
 * @method void setWhiteDomainList(array $WhiteDomainList) Set Allowlisted domain names
 * @method array getWhiteIPList() Obtain Allowlisted IP
 * @method void setWhiteIPList(array $WhiteIPList) Set Allowlisted IP
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getID() Obtain Allowlist Record ID, Required Only for Modification
 * @method void setID(integer $ID) Set Allowlist Record ID, Required Only for Modification
 */
class AddOrModifyMaliciousConnectionWhiteListRequest extends AbstractModel
{
    /**
     * @var string Enumerate
IP: IP
Domain name: DOMAIN
     */
    public $RequestType;

    /**
     * @var array Allowlisted domain names
     */
    public $WhiteDomainList;

    /**
     * @var array Allowlisted IP
     */
    public $WhiteIPList;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer Allowlist Record ID, Required Only for Modification
     */
    public $ID;

    /**
     * @param string $RequestType Enumerate
IP: IP
Domain name: DOMAIN
     * @param array $WhiteDomainList Allowlisted domain names
     * @param array $WhiteIPList Allowlisted IP
     * @param string $Remark Remarks
     * @param integer $ID Allowlist Record ID, Required Only for Modification
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
        if (array_key_exists("RequestType",$param) and $param["RequestType"] !== null) {
            $this->RequestType = $param["RequestType"];
        }

        if (array_key_exists("WhiteDomainList",$param) and $param["WhiteDomainList"] !== null) {
            $this->WhiteDomainList = $param["WhiteDomainList"];
        }

        if (array_key_exists("WhiteIPList",$param) and $param["WhiteIPList"] !== null) {
            $this->WhiteIPList = $param["WhiteIPList"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
