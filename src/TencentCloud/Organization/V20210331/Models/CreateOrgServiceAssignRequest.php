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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOrgServiceAssign request structure.
 *
 * @method array getMemberUins() Obtain Uin list of the delegated admins, including up to 20 items.
 * @method void setMemberUins(array $MemberUins) Set Uin list of the delegated admins, including up to 20 items.
 * @method integer getServiceId() Obtain Group service ID. either this or group service product identifier is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
 * @method void setServiceId(integer $ServiceId) Set Group service ID. either this or group service product identifier is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
 * @method string getProduct() Obtain Group service product identifier. either this or group service ID is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
 * @method void setProduct(string $Product) Set Group service product identifier. either this or group service ID is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
 * @method integer getManagementScope() Obtain Management scope of the delegated admin. Valid values: 1 (all members), 2 (partial members). Default value: 1.
 * @method void setManagementScope(integer $ManagementScope) Set Management scope of the delegated admin. Valid values: 1 (all members), 2 (partial members). Default value: 1.
 * @method array getManagementScopeUins() Obtain Uin list of the managed members. This parameter is valid when ManagementScope is 2.
 * @method void setManagementScopeUins(array $ManagementScopeUins) Set Uin list of the managed members. This parameter is valid when ManagementScope is 2.
 * @method array getManagementScopeNodeIds() Obtain ID list of the managed departments. This parameter is valid when ManagementScope is 2.
 * @method void setManagementScopeNodeIds(array $ManagementScopeNodeIds) Set ID list of the managed departments. This parameter is valid when ManagementScope is 2.
 */
class CreateOrgServiceAssignRequest extends AbstractModel
{
    /**
     * @var array Uin list of the delegated admins, including up to 20 items.
     */
    public $MemberUins;

    /**
     * @var integer Group service ID. either this or group service product identifier is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
     */
    public $ServiceId;

    /**
     * @var string Group service product identifier. either this or group service ID is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
     */
    public $Product;

    /**
     * @var integer Management scope of the delegated admin. Valid values: 1 (all members), 2 (partial members). Default value: 1.
     */
    public $ManagementScope;

    /**
     * @var array Uin list of the managed members. This parameter is valid when ManagementScope is 2.
     */
    public $ManagementScopeUins;

    /**
     * @var array ID list of the managed departments. This parameter is valid when ManagementScope is 2.
     */
    public $ManagementScopeNodeIds;

    /**
     * @param array $MemberUins Uin list of the delegated admins, including up to 20 items.
     * @param integer $ServiceId Group service ID. either this or group service product identifier is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
     * @param string $Product Group service product identifier. either this or group service ID is required. can be obtained through ListOrganizationService (https://www.tencentcloud.com/document/product/850/109561?from_cn_redirect=1).
     * @param integer $ManagementScope Management scope of the delegated admin. Valid values: 1 (all members), 2 (partial members). Default value: 1.
     * @param array $ManagementScopeUins Uin list of the managed members. This parameter is valid when ManagementScope is 2.
     * @param array $ManagementScopeNodeIds ID list of the managed departments. This parameter is valid when ManagementScope is 2.
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
        if (array_key_exists("MemberUins",$param) and $param["MemberUins"] !== null) {
            $this->MemberUins = $param["MemberUins"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ManagementScope",$param) and $param["ManagementScope"] !== null) {
            $this->ManagementScope = $param["ManagementScope"];
        }

        if (array_key_exists("ManagementScopeUins",$param) and $param["ManagementScopeUins"] !== null) {
            $this->ManagementScopeUins = $param["ManagementScopeUins"];
        }

        if (array_key_exists("ManagementScopeNodeIds",$param) and $param["ManagementScopeNodeIds"] !== null) {
            $this->ManagementScopeNodeIds = $param["ManagementScopeNodeIds"];
        }
    }
}
