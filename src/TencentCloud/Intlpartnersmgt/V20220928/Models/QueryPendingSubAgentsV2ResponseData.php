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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of second-level reseller application in progress.
 *
 * @method integer getSubAgentUin() Obtain Second-level reseller UIN.
 * @method void setSubAgentUin(integer $SubAgentUin) Set Second-level reseller UIN.
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getMobile() Obtain Mobile number.
 * @method void setMobile(string $Mobile) Set Mobile number.
 * @method string getEmail() Obtain Specifies the mailbox.
 * @method void setEmail(string $Email) Set Specifies the mailbox.
 * @method string getApplyTime() Obtain Application time
 * @method void setApplyTime(string $ApplyTime) Set Application time
 * @method string getStatus() Obtain Approval status

{Reviewing: pending review}.
 * @method void setStatus(string $Status) Set Approval status

{Reviewing: pending review}.
 * @method string getMaterialUrl() Obtain Application material.
 * @method void setMaterialUrl(string $MaterialUrl) Set Application material.
 * @method integer getAuthState() Obtain Identity verification status -1: file not uploaded 0: pending review 1: under review; 2: review error; 3: approved.
 * @method void setAuthState(integer $AuthState) Set Identity verification status -1: file not uploaded 0: pending review 1: under review; 2: review error; 3: approved.
 */
class QueryPendingSubAgentsV2ResponseData extends AbstractModel
{
    /**
     * @var integer Second-level reseller UIN.
     */
    public $SubAgentUin;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Mobile number.
     */
    public $Mobile;

    /**
     * @var string Specifies the mailbox.
     */
    public $Email;

    /**
     * @var string Application time
     */
    public $ApplyTime;

    /**
     * @var string Approval status

{Reviewing: pending review}.
     */
    public $Status;

    /**
     * @var string Application material.
     */
    public $MaterialUrl;

    /**
     * @var integer Identity verification status -1: file not uploaded 0: pending review 1: under review; 2: review error; 3: approved.
     */
    public $AuthState;

    /**
     * @param integer $SubAgentUin Second-level reseller UIN.
     * @param string $Name Name
     * @param string $Mobile Mobile number.
     * @param string $Email Specifies the mailbox.
     * @param string $ApplyTime Application time
     * @param string $Status Approval status

{Reviewing: pending review}.
     * @param string $MaterialUrl Application material.
     * @param integer $AuthState Identity verification status -1: file not uploaded 0: pending review 1: under review; 2: review error; 3: approved.
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
        if (array_key_exists("SubAgentUin",$param) and $param["SubAgentUin"] !== null) {
            $this->SubAgentUin = $param["SubAgentUin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("ApplyTime",$param) and $param["ApplyTime"] !== null) {
            $this->ApplyTime = $param["ApplyTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MaterialUrl",$param) and $param["MaterialUrl"] !== null) {
            $this->MaterialUrl = $param["MaterialUrl"];
        }

        if (array_key_exists("AuthState",$param) and $param["AuthState"] !== null) {
            $this->AuthState = $param["AuthState"];
        }
    }
}
