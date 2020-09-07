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
 * List of permission group rules
 *
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method string getAuthClientIp() Obtain Client IP allowed for access
 * @method void setAuthClientIp(string $AuthClientIp) Set Client IP allowed for access
 * @method string getRWPermission() Obtain Read/write permission. ro: read-only; rw: read & write
 * @method void setRWPermission(string $RWPermission) Set Read/write permission. ro: read-only; rw: read & write
 * @method string getUserPermission() Obtain User permission. all_squash: any visiting user will be mapped to an anonymous user or user group; no_all_squash: a visiting user will be first matched with a local user, and if the match fails, it will be mapped to an anonymous user or user group; root_squash: a visiting root user will be mapped to an anonymous user or user group; no_root_squash: a visiting root user will be allowed to maintain root account permissions.
 * @method void setUserPermission(string $UserPermission) Set User permission. all_squash: any visiting user will be mapped to an anonymous user or user group; no_all_squash: a visiting user will be first matched with a local user, and if the match fails, it will be mapped to an anonymous user or user group; root_squash: a visiting root user will be mapped to an anonymous user or user group; no_root_squash: a visiting root user will be allowed to maintain root account permissions.
 * @method integer getPriority() Obtain Rule priority. Value range: 1-100. 1 represents the highest priority, while 100 the lowest
 * @method void setPriority(integer $Priority) Set Rule priority. Value range: 1-100. 1 represents the highest priority, while 100 the lowest
 */
class PGroupRuleInfo extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Client IP allowed for access
     */
    public $AuthClientIp;

    /**
     * @var string Read/write permission. ro: read-only; rw: read & write
     */
    public $RWPermission;

    /**
     * @var string User permission. all_squash: any visiting user will be mapped to an anonymous user or user group; no_all_squash: a visiting user will be first matched with a local user, and if the match fails, it will be mapped to an anonymous user or user group; root_squash: a visiting root user will be mapped to an anonymous user or user group; no_root_squash: a visiting root user will be allowed to maintain root account permissions.
     */
    public $UserPermission;

    /**
     * @var integer Rule priority. Value range: 1-100. 1 represents the highest priority, while 100 the lowest
     */
    public $Priority;

    /**
     * @param string $RuleId Rule ID
     * @param string $AuthClientIp Client IP allowed for access
     * @param string $RWPermission Read/write permission. ro: read-only; rw: read & write
     * @param string $UserPermission User permission. all_squash: any visiting user will be mapped to an anonymous user or user group; no_all_squash: a visiting user will be first matched with a local user, and if the match fails, it will be mapped to an anonymous user or user group; root_squash: a visiting root user will be mapped to an anonymous user or user group; no_root_squash: a visiting root user will be allowed to maintain root account permissions.
     * @param integer $Priority Rule priority. Value range: 1-100. 1 represents the highest priority, while 100 the lowest
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
    }
}
