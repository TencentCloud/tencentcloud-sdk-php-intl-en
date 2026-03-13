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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCfsRule request structure.
 *
 * @method string getPGroupId() Obtain Permission group ID, which can be obtained through the api [DescribeCfsPGroups](https://www.tencentcloud.com/document/api/582/38157?from_cn_redirect=1).
 * @method void setPGroupId(string $PGroupId) Set Permission group ID, which can be obtained through the api [DescribeCfsPGroups](https://www.tencentcloud.com/document/api/582/38157?from_cn_redirect=1).
 * @method string getRuleId() Obtain Rule ID, which can be obtained through the [DescribeCfsRules](https://www.tencentcloud.com/document/api/582/38156?from_cn_redirect=1) api.
 * @method void setRuleId(string $RuleId) Set Rule ID, which can be obtained through the [DescribeCfsRules](https://www.tencentcloud.com/document/api/582/38156?from_cn_redirect=1) api.
 * @method string getAuthClientIp() Obtain You can enter a single IP or IP range, such as 10.1.10.11 or 10.10.1.0/24. The default visiting address is `*`, indicating that all IPs are allowed. Please note that you need to enter the CVM instance's private IP here.
 * @method void setAuthClientIp(string $AuthClientIp) Set You can enter a single IP or IP range, such as 10.1.10.11 or 10.10.1.0/24. The default visiting address is `*`, indicating that all IPs are allowed. Please note that you need to enter the CVM instance's private IP here.
 * @method string getRWPermission() Obtain Read/write permission. Valid values: RO (read-only), RW (read & write). Default value: RO
 * @method void setRWPermission(string $RWPermission) Set Read/write permission. Valid values: RO (read-only), RW (read & write). Default value: RO
 * @method string getUserPermission() Obtain User permission. valid values: all_squash, no_all_squash, root_squash, no_root_squash. default value: root_squash.
All_squash: all accessing users (including the root user) will be mapped to anonymous users or groups.
no_all_squash: all accessing users (including the root user) retain original UID/GID information.
root_squash: maps visiting root user to anonymous user or user group. non-root user keeps original UID/GID information.
no_root_squash: has the same effect as no_all_squash. all accessing users (including the root user) retain their original UID/GID information.

 * @method void setUserPermission(string $UserPermission) Set User permission. valid values: all_squash, no_all_squash, root_squash, no_root_squash. default value: root_squash.
All_squash: all accessing users (including the root user) will be mapped to anonymous users or groups.
no_all_squash: all accessing users (including the root user) retain original UID/GID information.
root_squash: maps visiting root user to anonymous user or user group. non-root user keeps original UID/GID information.
no_root_squash: has the same effect as no_all_squash. all accessing users (including the root user) retain their original UID/GID information.

 * @method integer getPriority() Obtain Rule priority. value range: 1-100. among them, 1 is the highest and 100 is the minimum. default value: 100.
 * @method void setPriority(integer $Priority) Set Rule priority. value range: 1-100. among them, 1 is the highest and 100 is the minimum. default value: 100.
 */
class UpdateCfsRuleRequest extends AbstractModel
{
    /**
     * @var string Permission group ID, which can be obtained through the api [DescribeCfsPGroups](https://www.tencentcloud.com/document/api/582/38157?from_cn_redirect=1).
     */
    public $PGroupId;

    /**
     * @var string Rule ID, which can be obtained through the [DescribeCfsRules](https://www.tencentcloud.com/document/api/582/38156?from_cn_redirect=1) api.
     */
    public $RuleId;

    /**
     * @var string You can enter a single IP or IP range, such as 10.1.10.11 or 10.10.1.0/24. The default visiting address is `*`, indicating that all IPs are allowed. Please note that you need to enter the CVM instance's private IP here.
     */
    public $AuthClientIp;

    /**
     * @var string Read/write permission. Valid values: RO (read-only), RW (read & write). Default value: RO
     */
    public $RWPermission;

    /**
     * @var string User permission. valid values: all_squash, no_all_squash, root_squash, no_root_squash. default value: root_squash.
All_squash: all accessing users (including the root user) will be mapped to anonymous users or groups.
no_all_squash: all accessing users (including the root user) retain original UID/GID information.
root_squash: maps visiting root user to anonymous user or user group. non-root user keeps original UID/GID information.
no_root_squash: has the same effect as no_all_squash. all accessing users (including the root user) retain their original UID/GID information.

     */
    public $UserPermission;

    /**
     * @var integer Rule priority. value range: 1-100. among them, 1 is the highest and 100 is the minimum. default value: 100.
     */
    public $Priority;

    /**
     * @param string $PGroupId Permission group ID, which can be obtained through the api [DescribeCfsPGroups](https://www.tencentcloud.com/document/api/582/38157?from_cn_redirect=1).
     * @param string $RuleId Rule ID, which can be obtained through the [DescribeCfsRules](https://www.tencentcloud.com/document/api/582/38156?from_cn_redirect=1) api.
     * @param string $AuthClientIp You can enter a single IP or IP range, such as 10.1.10.11 or 10.10.1.0/24. The default visiting address is `*`, indicating that all IPs are allowed. Please note that you need to enter the CVM instance's private IP here.
     * @param string $RWPermission Read/write permission. Valid values: RO (read-only), RW (read & write). Default value: RO
     * @param string $UserPermission User permission. valid values: all_squash, no_all_squash, root_squash, no_root_squash. default value: root_squash.
All_squash: all accessing users (including the root user) will be mapped to anonymous users or groups.
no_all_squash: all accessing users (including the root user) retain original UID/GID information.
root_squash: maps visiting root user to anonymous user or user group. non-root user keeps original UID/GID information.
no_root_squash: has the same effect as no_all_squash. all accessing users (including the root user) retain their original UID/GID information.

     * @param integer $Priority Rule priority. value range: 1-100. among them, 1 is the highest and 100 is the minimum. default value: 100.
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
    }
}
