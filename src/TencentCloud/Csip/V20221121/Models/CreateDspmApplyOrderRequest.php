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
 * CreateDspmApplyOrder request structure.
 *
 * @method string getAssetId() Obtain Asset ID
 * @method void setAssetId(string $AssetId) Set Asset ID
 * @method integer getApplyType() Obtain Application type. `0`: sub-account authorization. `1`: visitor authorization.
 * @method void setApplyType(integer $ApplyType) Set Application type. `0`: sub-account authorization. `1`: visitor authorization.
 * @method DspmDbAccountPrivilege getPrivilege() Obtain Permission information.
 * @method void setPrivilege(DspmDbAccountPrivilege $Privilege) Set Permission information.
 * @method string getHost() Obtain Host address. Currently only support '%'. Default: '%'.
 * @method void setHost(string $Host) Set Host address. Currently only support '%'. Default: '%'.
 * @method integer getValidatePeriod() Obtain Access privilege expiration time calculated after approval is complete. The temporary account is valid. Milliseconds.
 * @method void setValidatePeriod(integer $ValidatePeriod) Set Access privilege expiration time calculated after approval is complete. The temporary account is valid. Milliseconds.
 * @method array getApproverUin() Obtain List of approvers. If empty, all asset admins are used.
 * @method void setApproverUin(array $ApproverUin) Set List of approvers. If empty, all asset admins are used.
 * @method string getReason() Obtain Reason for request
 * @method void setReason(string $Reason) Set Reason for request
 * @method integer getManagerType() Obtain Management type. 0: ordinary member; 1: admin.
 * @method void setManagerType(integer $ManagerType) Set Management type. 0: ordinary member; 1: admin.
 * @method string getSubject() Obtain Authorized person. For sub-account authorization, pass the target uin. If empty, use the current uin by default. For visitor authorization, pass the visitor identity ID.
 * @method void setSubject(string $Subject) Set Authorized person. For sub-account authorization, pass the target uin. If empty, use the current uin by default. For visitor authorization, pass the visitor identity ID.
 */
class CreateDspmApplyOrderRequest extends AbstractModel
{
    /**
     * @var string Asset ID
     */
    public $AssetId;

    /**
     * @var integer Application type. `0`: sub-account authorization. `1`: visitor authorization.
     */
    public $ApplyType;

    /**
     * @var DspmDbAccountPrivilege Permission information.
     */
    public $Privilege;

    /**
     * @var string Host address. Currently only support '%'. Default: '%'.
     */
    public $Host;

    /**
     * @var integer Access privilege expiration time calculated after approval is complete. The temporary account is valid. Milliseconds.
     */
    public $ValidatePeriod;

    /**
     * @var array List of approvers. If empty, all asset admins are used.
     */
    public $ApproverUin;

    /**
     * @var string Reason for request
     */
    public $Reason;

    /**
     * @var integer Management type. 0: ordinary member; 1: admin.
     */
    public $ManagerType;

    /**
     * @var string Authorized person. For sub-account authorization, pass the target uin. If empty, use the current uin by default. For visitor authorization, pass the visitor identity ID.
     */
    public $Subject;

    /**
     * @param string $AssetId Asset ID
     * @param integer $ApplyType Application type. `0`: sub-account authorization. `1`: visitor authorization.
     * @param DspmDbAccountPrivilege $Privilege Permission information.
     * @param string $Host Host address. Currently only support '%'. Default: '%'.
     * @param integer $ValidatePeriod Access privilege expiration time calculated after approval is complete. The temporary account is valid. Milliseconds.
     * @param array $ApproverUin List of approvers. If empty, all asset admins are used.
     * @param string $Reason Reason for request
     * @param integer $ManagerType Management type. 0: ordinary member; 1: admin.
     * @param string $Subject Authorized person. For sub-account authorization, pass the target uin. If empty, use the current uin by default. For visitor authorization, pass the visitor identity ID.
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = new DspmDbAccountPrivilege();
            $this->Privilege->deserialize($param["Privilege"]);
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("ValidatePeriod",$param) and $param["ValidatePeriod"] !== null) {
            $this->ValidatePeriod = $param["ValidatePeriod"];
        }

        if (array_key_exists("ApproverUin",$param) and $param["ApproverUin"] !== null) {
            $this->ApproverUin = $param["ApproverUin"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("ManagerType",$param) and $param["ManagerType"] !== null) {
            $this->ManagerType = $param["ManagerType"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }
    }
}
