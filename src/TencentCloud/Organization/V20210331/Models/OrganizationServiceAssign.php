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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Organization service settings.
 *
 * @method integer getServiceId() Obtain Organization service ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceId(integer $ServiceId) Set Organization service ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProductName() Obtain Organization service product name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductName(string $ProductName) Set Organization service product name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsAssign() Obtain Whether to support delegation. Valid values: 1 (yes), 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsAssign(integer $IsAssign) Set Whether to support delegation. Valid values: 1 (yes), 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDescription() Obtain Organization service description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDescription(string $Description) Set Organization service description.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMemberNum() Obtain Number of the current delegated admins.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberNum(string $MemberNum) Set Number of the current delegated admins.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDocument() Obtain Help documentation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDocument(string $Document) Set Help documentation.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConsoleUrl() Obtain Console path of the organization service product.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsoleUrl(string $ConsoleUrl) Set Console path of the organization service product.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsUsageStatus() Obtain Whether to access the usage status. Valid values: 1 (yes), 
 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsUsageStatus(integer $IsUsageStatus) Set Whether to access the usage status. Valid values: 1 (yes), 
 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCanAssignCount() Obtain Limit for the number of delegated admins.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCanAssignCount(integer $CanAssignCount) Set Limit for the number of delegated admins.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProduct() Obtain Organization service product identifier.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProduct(string $Product) Set Organization service product identifier.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getServiceGrant() Obtain Whether to support organization service authorization. Valid values: 1 (yes), 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceGrant(integer $ServiceGrant) Set Whether to support organization service authorization. Valid values: 1 (yes), 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGrantStatus() Obtain Enabling status of organization service authorization. This field is valid when ServiceGrant is 1. Valid values: Enabled, Disabled. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGrantStatus(string $GrantStatus) Set Enabling status of organization service authorization. This field is valid when ServiceGrant is 1. Valid values: Enabled, Disabled. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIsSetManagementScope() Obtain Whether to support setting the delegated management scope. Valid values: 1 (yes), 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsSetManagementScope(integer $IsSetManagementScope) Set Whether to support setting the delegated management scope. Valid values: 1 (yes), 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class OrganizationServiceAssign extends AbstractModel
{
    /**
     * @var integer Organization service ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceId;

    /**
     * @var string Organization service product name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductName;

    /**
     * @var integer Whether to support delegation. Valid values: 1 (yes), 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsAssign;

    /**
     * @var string Organization service description.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Description;

    /**
     * @var string Number of the current delegated admins.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberNum;

    /**
     * @var string Help documentation.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Document;

    /**
     * @var string Console path of the organization service product.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsoleUrl;

    /**
     * @var integer Whether to access the usage status. Valid values: 1 (yes), 
 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsUsageStatus;

    /**
     * @var integer Limit for the number of delegated admins.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CanAssignCount;

    /**
     * @var string Organization service product identifier.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Product;

    /**
     * @var integer Whether to support organization service authorization. Valid values: 1 (yes), 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceGrant;

    /**
     * @var string Enabling status of organization service authorization. This field is valid when ServiceGrant is 1. Valid values: Enabled, Disabled. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GrantStatus;

    /**
     * @var integer Whether to support setting the delegated management scope. Valid values: 1 (yes), 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsSetManagementScope;

    /**
     * @param integer $ServiceId Organization service ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProductName Organization service product name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsAssign Whether to support delegation. Valid values: 1 (yes), 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Description Organization service description.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MemberNum Number of the current delegated admins.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Document Help documentation.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConsoleUrl Console path of the organization service product.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsUsageStatus Whether to access the usage status. Valid values: 1 (yes), 
 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CanAssignCount Limit for the number of delegated admins.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Product Organization service product identifier.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ServiceGrant Whether to support organization service authorization. Valid values: 1 (yes), 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GrantStatus Enabling status of organization service authorization. This field is valid when ServiceGrant is 1. Valid values: Enabled, Disabled. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IsSetManagementScope Whether to support setting the delegated management scope. Valid values: 1 (yes), 2 (no).
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("IsAssign",$param) and $param["IsAssign"] !== null) {
            $this->IsAssign = $param["IsAssign"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MemberNum",$param) and $param["MemberNum"] !== null) {
            $this->MemberNum = $param["MemberNum"];
        }

        if (array_key_exists("Document",$param) and $param["Document"] !== null) {
            $this->Document = $param["Document"];
        }

        if (array_key_exists("ConsoleUrl",$param) and $param["ConsoleUrl"] !== null) {
            $this->ConsoleUrl = $param["ConsoleUrl"];
        }

        if (array_key_exists("IsUsageStatus",$param) and $param["IsUsageStatus"] !== null) {
            $this->IsUsageStatus = $param["IsUsageStatus"];
        }

        if (array_key_exists("CanAssignCount",$param) and $param["CanAssignCount"] !== null) {
            $this->CanAssignCount = $param["CanAssignCount"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ServiceGrant",$param) and $param["ServiceGrant"] !== null) {
            $this->ServiceGrant = $param["ServiceGrant"];
        }

        if (array_key_exists("GrantStatus",$param) and $param["GrantStatus"] !== null) {
            $this->GrantStatus = $param["GrantStatus"];
        }

        if (array_key_exists("IsSetManagementScope",$param) and $param["IsSetManagementScope"] !== null) {
            $this->IsSetManagementScope = $param["IsSetManagementScope"];
        }
    }
}
