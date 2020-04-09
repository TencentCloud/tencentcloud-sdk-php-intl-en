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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCfsRule response structure.
 *
 * @method string getPGroupId() Obtain Permission group ID
 * @method void setPGroupId(string $PGroupId) Set Permission group ID
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method string getAuthClientIp() Obtain Client IP or IP range allowed for access
 * @method void setAuthClientIp(string $AuthClientIp) Set Client IP or IP range allowed for access
 * @method string getRWPermission() Obtain Read & write permission
 * @method void setRWPermission(string $RWPermission) Set Read & write permission
 * @method string getUserPermission() Obtain User permission
 * @method void setUserPermission(string $UserPermission) Set User permission
 * @method integer getPriority() Obtain Priority
 * @method void setPriority(integer $Priority) Set Priority
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class UpdateCfsRuleResponse extends AbstractModel
{
    /**
     * @var string Permission group ID
     */
    public $PGroupId;

    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Client IP or IP range allowed for access
     */
    public $AuthClientIp;

    /**
     * @var string Read & write permission
     */
    public $RWPermission;

    /**
     * @var string User permission
     */
    public $UserPermission;

    /**
     * @var integer Priority
     */
    public $Priority;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $PGroupId Permission group ID
     * @param string $RuleId Rule ID
     * @param string $AuthClientIp Client IP or IP range allowed for access
     * @param string $RWPermission Read & write permission
     * @param string $UserPermission User permission
     * @param integer $Priority Priority
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("PGroupId",$param) and $param["PGroupId"] !== null) {
            $this->PGroupId = $param["PGroupId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("AuthClientIp",$param) and $param["AuthClientIp"] !== null) {
            $this->AuthClientIp = $param["AuthClientIp"];
        }

        if (array_key_exists("RWPermission",$param) and $param["RWPermission"] !== null) {
            $this->RWPermission = $param["RWPermission"];
        }

        if (array_key_exists("UserPermission",$param) and $param["UserPermission"] !== null) {
            $this->UserPermission = $param["UserPermission"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
