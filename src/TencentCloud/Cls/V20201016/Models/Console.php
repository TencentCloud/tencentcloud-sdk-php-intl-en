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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DataSight Console instance
 *
 * @method string getConsoleId() Obtain <p>DataSight Console Id</p>
 * @method void setConsoleId(string $ConsoleId) Set <p>DataSight Console Id</p>
 * @method array getAccessMode() Obtain <p>Access method: public - internet, internal - intranet</p>
 * @method void setAccessMode(array $AccessMode) Set <p>Access method: public - internet, internal - intranet</p>
 * @method integer getLoginMode() Obtain <p>Log-in methods: 0-account password authentication, 1-anonymous login, 2-third-party authentication login</p>
 * @method void setLoginMode(integer $LoginMode) Set <p>Log-in methods: 0-account password authentication, 1-anonymous login, 2-third-party authentication login</p>
 * @method string getDomainPrefix() Obtain <p>Custom domain name prefix</p>
 * @method void setDomainPrefix(string $DomainPrefix) Set <p>Custom domain name prefix</p>
 * @method array getAccounts() Obtain <p>User account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccounts(array $Accounts) Set <p>User account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getIntranetType() Obtain <p>Private network type, defaults to 0</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntranetType(integer $IntranetType) Set <p>Private network type, defaults to 0</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getIntranetRegion() Obtain <p>Private network region</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntranetRegion(string $IntranetRegion) Set <p>Private network region</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain <p>Private network VpcId</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set <p>Private network VpcId</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubnetId() Obtain <p>Private subnet SubnetId</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubnetId(string $SubnetId) Set <p>Private subnet SubnetId</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method AnonymousLoginInfo getAnonymousLogin() Obtain <p>Anonymous login account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnonymousLogin(AnonymousLoginInfo $AnonymousLogin) Set <p>Anonymous login account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAuthRoles() Obtain <p>auth user role information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthRoles(array $AuthRoles) Set <p>auth user role information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain <p>Bound tag information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set <p>Bound tag information</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getHideParams() Obtain <p>Custom hidden parameter</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHideParams(array $HideParams) Set <p>Custom hidden parameter</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAccessControlRules() Obtain <p>Access Control Rule</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessControlRules(array $AccessControlRules) Set <p>Access Control Rule</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRemarks() Obtain <p>Remark</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemarks(string $Remarks) Set <p>Remark</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMenus() Obtain <p>Customize menu</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMenus(array $Menus) Set <p>Customize menu</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDomain() Obtain <p>Public access domain name</p>
 * @method void setDomain(string $Domain) Set <p>Public access domain name</p>
 * @method string getIntranetDomain() Obtain <p>private network access domain</p>
 * @method void setIntranetDomain(string $IntranetDomain) Set <p>private network access domain</p>
 */
class Console extends AbstractModel
{
    /**
     * @var string <p>DataSight Console Id</p>
     */
    public $ConsoleId;

    /**
     * @var array <p>Access method: public - internet, internal - intranet</p>
     */
    public $AccessMode;

    /**
     * @var integer <p>Log-in methods: 0-account password authentication, 1-anonymous login, 2-third-party authentication login</p>
     */
    public $LoginMode;

    /**
     * @var string <p>Custom domain name prefix</p>
     */
    public $DomainPrefix;

    /**
     * @var array <p>User account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Accounts;

    /**
     * @var integer <p>Private network type, defaults to 0</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntranetType;

    /**
     * @var string <p>Private network region</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntranetRegion;

    /**
     * @var string <p>Private network VpcId</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string <p>Private subnet SubnetId</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubnetId;

    /**
     * @var AnonymousLoginInfo <p>Anonymous login account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AnonymousLogin;

    /**
     * @var array <p>auth user role information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthRoles;

    /**
     * @var array <p>Bound tag information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var array <p>Custom hidden parameter</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HideParams;

    /**
     * @var array <p>Access Control Rule</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessControlRules;

    /**
     * @var string <p>Remark</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remarks;

    /**
     * @var array <p>Customize menu</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Menus;

    /**
     * @var string <p>Public access domain name</p>
     */
    public $Domain;

    /**
     * @var string <p>private network access domain</p>
     */
    public $IntranetDomain;

    /**
     * @param string $ConsoleId <p>DataSight Console Id</p>
     * @param array $AccessMode <p>Access method: public - internet, internal - intranet</p>
     * @param integer $LoginMode <p>Log-in methods: 0-account password authentication, 1-anonymous login, 2-third-party authentication login</p>
     * @param string $DomainPrefix <p>Custom domain name prefix</p>
     * @param array $Accounts <p>User account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $IntranetType <p>Private network type, defaults to 0</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $IntranetRegion <p>Private network region</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId <p>Private network VpcId</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubnetId <p>Private subnet SubnetId</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param AnonymousLoginInfo $AnonymousLogin <p>Anonymous login account information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AuthRoles <p>auth user role information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags <p>Bound tag information</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $HideParams <p>Custom hidden parameter</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AccessControlRules <p>Access Control Rule</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Remarks <p>Remark</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Menus <p>Customize menu</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Domain <p>Public access domain name</p>
     * @param string $IntranetDomain <p>private network access domain</p>
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
        if (array_key_exists("ConsoleId",$param) and $param["ConsoleId"] !== null) {
            $this->ConsoleId = $param["ConsoleId"];
        }

        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("LoginMode",$param) and $param["LoginMode"] !== null) {
            $this->LoginMode = $param["LoginMode"];
        }

        if (array_key_exists("DomainPrefix",$param) and $param["DomainPrefix"] !== null) {
            $this->DomainPrefix = $param["DomainPrefix"];
        }

        if (array_key_exists("Accounts",$param) and $param["Accounts"] !== null) {
            $this->Accounts = [];
            foreach ($param["Accounts"] as $key => $value){
                $obj = new ConsoleAccount();
                $obj->deserialize($value);
                array_push($this->Accounts, $obj);
            }
        }

        if (array_key_exists("IntranetType",$param) and $param["IntranetType"] !== null) {
            $this->IntranetType = $param["IntranetType"];
        }

        if (array_key_exists("IntranetRegion",$param) and $param["IntranetRegion"] !== null) {
            $this->IntranetRegion = $param["IntranetRegion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("AnonymousLogin",$param) and $param["AnonymousLogin"] !== null) {
            $this->AnonymousLogin = new AnonymousLoginInfo();
            $this->AnonymousLogin->deserialize($param["AnonymousLogin"]);
        }

        if (array_key_exists("AuthRoles",$param) and $param["AuthRoles"] !== null) {
            $this->AuthRoles = [];
            foreach ($param["AuthRoles"] as $key => $value){
                $obj = new AuthRoleInfo();
                $obj->deserialize($value);
                array_push($this->AuthRoles, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HideParams",$param) and $param["HideParams"] !== null) {
            $this->HideParams = $param["HideParams"];
        }

        if (array_key_exists("AccessControlRules",$param) and $param["AccessControlRules"] !== null) {
            $this->AccessControlRules = [];
            foreach ($param["AccessControlRules"] as $key => $value){
                $obj = new AccessControlRule();
                $obj->deserialize($value);
                array_push($this->AccessControlRules, $obj);
            }
        }

        if (array_key_exists("Remarks",$param) and $param["Remarks"] !== null) {
            $this->Remarks = $param["Remarks"];
        }

        if (array_key_exists("Menus",$param) and $param["Menus"] !== null) {
            $this->Menus = $param["Menus"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("IntranetDomain",$param) and $param["IntranetDomain"] !== null) {
            $this->IntranetDomain = $param["IntranetDomain"];
        }
    }
}
