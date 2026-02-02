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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CNAME configuration status for domain integration.
 *
 * @method string getRecordName() Obtain Domain name.
 * @method void setRecordName(string $RecordName) Set Domain name.
 * @method string getCname() Obtain EdgeOne is assigned to the CNAME of the domain name.
 * @method void setCname(string $Cname) Set EdgeOne is assigned to the CNAME of the domain name.
 * @method string getStatus() Obtain CNAME configuration status verification result. valid values:.
<li>active: indicates that the domain name is correctly configured to the designated CNAME assigned by EdgeOne.</li>.
<li>moved: indicates the domain name is not configured to the designated CNAME assigned by EdgeOne;</li>.
<li>invalid: indicates the CNAME in the access domain configuration is assigned by EdgeOne to another domain, which can cause service exception. change it to the CNAME provided by EdgeOne for this domain. you can get the CNAME provided by EdgeOne for this domain from the CNAME field in this struct.</li>.
 * @method void setStatus(string $Status) Set CNAME configuration status verification result. valid values:.
<li>active: indicates that the domain name is correctly configured to the designated CNAME assigned by EdgeOne.</li>.
<li>moved: indicates the domain name is not configured to the designated CNAME assigned by EdgeOne;</li>.
<li>invalid: indicates the CNAME in the access domain configuration is assigned by EdgeOne to another domain, which can cause service exception. change it to the CNAME provided by EdgeOne for this domain. you can get the CNAME provided by EdgeOne for this domain from the CNAME field in this struct.</li>.
 */
class CnameStatus extends AbstractModel
{
    /**
     * @var string Domain name.
     */
    public $RecordName;

    /**
     * @var string EdgeOne is assigned to the CNAME of the domain name.
     */
    public $Cname;

    /**
     * @var string CNAME configuration status verification result. valid values:.
<li>active: indicates that the domain name is correctly configured to the designated CNAME assigned by EdgeOne.</li>.
<li>moved: indicates the domain name is not configured to the designated CNAME assigned by EdgeOne;</li>.
<li>invalid: indicates the CNAME in the access domain configuration is assigned by EdgeOne to another domain, which can cause service exception. change it to the CNAME provided by EdgeOne for this domain. you can get the CNAME provided by EdgeOne for this domain from the CNAME field in this struct.</li>.
     */
    public $Status;

    /**
     * @param string $RecordName Domain name.
     * @param string $Cname EdgeOne is assigned to the CNAME of the domain name.
     * @param string $Status CNAME configuration status verification result. valid values:.
<li>active: indicates that the domain name is correctly configured to the designated CNAME assigned by EdgeOne.</li>.
<li>moved: indicates the domain name is not configured to the designated CNAME assigned by EdgeOne;</li>.
<li>invalid: indicates the CNAME in the access domain configuration is assigned by EdgeOne to another domain, which can cause service exception. change it to the CNAME provided by EdgeOne for this domain. you can get the CNAME provided by EdgeOne for this domain from the CNAME field in this struct.</li>.
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
        if (array_key_exists("RecordName",$param) and $param["RecordName"] !== null) {
            $this->RecordName = $param["RecordName"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
