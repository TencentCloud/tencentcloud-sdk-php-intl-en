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
 * Organization service settings.
 *
 * @method integer getServiceId() Obtain Organization service ID.
 * @method void setServiceId(integer $ServiceId) Set Organization service ID.
 * @method string getProductName() Obtain Organization service product name.
 * @method void setProductName(string $ProductName) Set Organization service product name.
 * @method integer getIsAssign() Obtain Specifies whether delegation is supported. Valid values: 1: yes; 2: no.
 * @method void setIsAssign(integer $IsAssign) Set Specifies whether delegation is supported. Valid values: 1: yes; 2: no.
 * @method string getDescription() Obtain Organization service description.
 * @method void setDescription(string $Description) Set Organization service description.
 * @method string getMemberNum() Obtain Number of delegated administrators.
 * @method void setMemberNum(string $MemberNum) Set Number of delegated administrators.
 * @method string getDocument() Obtain Help documentation.
 * @method void setDocument(string $Document) Set Help documentation.
 * @method string getConsoleUrl() Obtain Path to the console for organization service products.
 * @method void setConsoleUrl(string $ConsoleUrl) Set Path to the console for organization service products.
 * @method integer getIsUsageStatus() Obtain Whether to access the usage status. valid values: 1 (yes). 
2: no.
 * @method void setIsUsageStatus(integer $IsUsageStatus) Set Whether to access the usage status. valid values: 1 (yes). 
2: no.
 * @method integer getCanAssignCount() Obtain Limit on the number of delegated administrators.
 * @method void setCanAssignCount(integer $CanAssignCount) Set Limit on the number of delegated administrators.
 * @method string getProduct() Obtain Organization service product ID.
 * @method void setProduct(string $Product) Set Organization service product ID.
 * @method integer getServiceGrant() Obtain Specifies whether organization service authorization is supported. Valid values: 1: yes; 2: no.
 * @method void setServiceGrant(integer $ServiceGrant) Set Specifies whether organization service authorization is supported. Valid values: 1: yes; 2: no.
 * @method string getGrantStatus() Obtain Specifies whether organization services are authorized. This field is valid when the value of ServiceGrant is 1. Valid values: Enabled: authorized; Disabled: not authorized. 
 * @method void setGrantStatus(string $GrantStatus) Set Specifies whether organization services are authorized. This field is valid when the value of ServiceGrant is 1. Valid values: Enabled: authorized; Disabled: not authorized. 
 * @method integer getIsSetManagementScope() Obtain Specifies whether the scope of delegated management can be set. Valid values: 1: yes; 2 no.
 * @method void setIsSetManagementScope(integer $IsSetManagementScope) Set Specifies whether the scope of delegated management can be set. Valid values: 1: yes; 2 no.
 */
class OrganizationServiceAssign extends AbstractModel
{
    /**
     * @var integer Organization service ID.
     */
    public $ServiceId;

    /**
     * @var string Organization service product name.
     */
    public $ProductName;

    /**
     * @var integer Specifies whether delegation is supported. Valid values: 1: yes; 2: no.
     */
    public $IsAssign;

    /**
     * @var string Organization service description.
     */
    public $Description;

    /**
     * @var string Number of delegated administrators.
     */
    public $MemberNum;

    /**
     * @var string Help documentation.
     */
    public $Document;

    /**
     * @var string Path to the console for organization service products.
     */
    public $ConsoleUrl;

    /**
     * @var integer Whether to access the usage status. valid values: 1 (yes). 
2: no.
     */
    public $IsUsageStatus;

    /**
     * @var integer Limit on the number of delegated administrators.
     */
    public $CanAssignCount;

    /**
     * @var string Organization service product ID.
     */
    public $Product;

    /**
     * @var integer Specifies whether organization service authorization is supported. Valid values: 1: yes; 2: no.
     */
    public $ServiceGrant;

    /**
     * @var string Specifies whether organization services are authorized. This field is valid when the value of ServiceGrant is 1. Valid values: Enabled: authorized; Disabled: not authorized. 
     */
    public $GrantStatus;

    /**
     * @var integer Specifies whether the scope of delegated management can be set. Valid values: 1: yes; 2 no.
     */
    public $IsSetManagementScope;

    /**
     * @param integer $ServiceId Organization service ID.
     * @param string $ProductName Organization service product name.
     * @param integer $IsAssign Specifies whether delegation is supported. Valid values: 1: yes; 2: no.
     * @param string $Description Organization service description.
     * @param string $MemberNum Number of delegated administrators.
     * @param string $Document Help documentation.
     * @param string $ConsoleUrl Path to the console for organization service products.
     * @param integer $IsUsageStatus Whether to access the usage status. valid values: 1 (yes). 
2: no.
     * @param integer $CanAssignCount Limit on the number of delegated administrators.
     * @param string $Product Organization service product ID.
     * @param integer $ServiceGrant Specifies whether organization service authorization is supported. Valid values: 1: yes; 2: no.
     * @param string $GrantStatus Specifies whether organization services are authorized. This field is valid when the value of ServiceGrant is 1. Valid values: Enabled: authorized; Disabled: not authorized. 
     * @param integer $IsSetManagementScope Specifies whether the scope of delegated management can be set. Valid values: 1: yes; 2 no.
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
