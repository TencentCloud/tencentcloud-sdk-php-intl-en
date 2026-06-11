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
 * CreateConsole request structure.
 *
 * @method array getAccessMode() Obtain <p>Access method: public - public network, internal - private network</p>
 * @method void setAccessMode(array $AccessMode) Set <p>Access method: public - public network, internal - private network</p>
 * @method integer getLoginMode() Obtain <p>Login method</p><p>Enumeration value:</p><ul><li>0: Account password authentication</li><li>1: Anonymous login</li><li>2: Third-party authentication login</li></ul>
 * @method void setLoginMode(integer $LoginMode) Set <p>Login method</p><p>Enumeration value:</p><ul><li>0: Account password authentication</li><li>1: Anonymous login</li><li>2: Third-party authentication login</li></ul>
 * @method string getDomainPrefix() Obtain <p>Custom domain name prefix</p>
 * @method void setDomainPrefix(string $DomainPrefix) Set <p>Custom domain name prefix</p>
 * @method array getAccounts() Obtain <p>User account information</p><p>"Account password authentication" is required for login method</p>
 * @method void setAccounts(array $Accounts) Set <p>User account information</p><p>"Account password authentication" is required for login method</p>
 * @method AnonymousLoginInfo getAnonymousLogin() Obtain <p>Anonymous login account information</p><p>"Anonymous login" is a required login method.</p>
 * @method void setAnonymousLogin(AnonymousLoginInfo $AnonymousLogin) Set <p>Anonymous login account information</p><p>"Anonymous login" is a required login method.</p>
 * @method integer getIntranetType() Obtain <p>Private network type, defaults to 0</p>
 * @method void setIntranetType(integer $IntranetType) Set <p>Private network type, defaults to 0</p>
 * @method string getIntranetRegion() Obtain <p>Private network region</p>
 * @method void setIntranetRegion(string $IntranetRegion) Set <p>Private network region</p>
 * @method string getVpcId() Obtain <p>Private network VpcId</p>
 * @method void setVpcId(string $VpcId) Set <p>Private network VpcId</p>
 * @method string getSubnetId() Obtain <p>Private subnet SubnetId</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Private subnet SubnetId</p>
 * @method array getAuthRoles() Obtain <p>Auth role information</p><p>"Third-party authentication login" is a required login method.</p>
 * @method void setAuthRoles(array $AuthRoles) Set <p>Auth role information</p><p>"Third-party authentication login" is a required login method.</p>
 * @method array getTags() Obtain <p>Tag description list. By specifying this parameter, you can simultaneously bind tags to the corresponding log topic. Supports up to 10 tag key-value pairs. The same resource can only be bound to the same tag key.</p>
 * @method void setTags(array $Tags) Set <p>Tag description list. By specifying this parameter, you can simultaneously bind tags to the corresponding log topic. Supports up to 10 tag key-value pairs. The same resource can only be bound to the same tag key.</p>
 * @method array getHideParams() Obtain <p>Custom hidden parameter</p>
 * @method void setHideParams(array $HideParams) Set <p>Custom hidden parameter</p>
 * @method array getAccessControlRules() Obtain <p>Access Control Rule</p><p>The "third-party authentication login" login method requires the AccessMode: internal && Action: ACCEPT rule.</p>
 * @method void setAccessControlRules(array $AccessControlRules) Set <p>Access Control Rule</p><p>The "third-party authentication login" login method requires the AccessMode: internal && Action: ACCEPT rule.</p>
 * @method string getRemarks() Obtain <p>Remark</p>
 * @method void setRemarks(string $Remarks) Set <p>Remark</p>
 * @method array getMenus() Obtain <p>Customize menu</p>
 * @method void setMenus(array $Menus) Set <p>Customize menu</p>
 */
class CreateConsoleRequest extends AbstractModel
{
    /**
     * @var array <p>Access method: public - public network, internal - private network</p>
     */
    public $AccessMode;

    /**
     * @var integer <p>Login method</p><p>Enumeration value:</p><ul><li>0: Account password authentication</li><li>1: Anonymous login</li><li>2: Third-party authentication login</li></ul>
     */
    public $LoginMode;

    /**
     * @var string <p>Custom domain name prefix</p>
     */
    public $DomainPrefix;

    /**
     * @var array <p>User account information</p><p>"Account password authentication" is required for login method</p>
     */
    public $Accounts;

    /**
     * @var AnonymousLoginInfo <p>Anonymous login account information</p><p>"Anonymous login" is a required login method.</p>
     */
    public $AnonymousLogin;

    /**
     * @var integer <p>Private network type, defaults to 0</p>
     */
    public $IntranetType;

    /**
     * @var string <p>Private network region</p>
     */
    public $IntranetRegion;

    /**
     * @var string <p>Private network VpcId</p>
     */
    public $VpcId;

    /**
     * @var string <p>Private subnet SubnetId</p>
     */
    public $SubnetId;

    /**
     * @var array <p>Auth role information</p><p>"Third-party authentication login" is a required login method.</p>
     */
    public $AuthRoles;

    /**
     * @var array <p>Tag description list. By specifying this parameter, you can simultaneously bind tags to the corresponding log topic. Supports up to 10 tag key-value pairs. The same resource can only be bound to the same tag key.</p>
     */
    public $Tags;

    /**
     * @var array <p>Custom hidden parameter</p>
     */
    public $HideParams;

    /**
     * @var array <p>Access Control Rule</p><p>The "third-party authentication login" login method requires the AccessMode: internal && Action: ACCEPT rule.</p>
     */
    public $AccessControlRules;

    /**
     * @var string <p>Remark</p>
     */
    public $Remarks;

    /**
     * @var array <p>Customize menu</p>
     */
    public $Menus;

    /**
     * @param array $AccessMode <p>Access method: public - public network, internal - private network</p>
     * @param integer $LoginMode <p>Login method</p><p>Enumeration value:</p><ul><li>0: Account password authentication</li><li>1: Anonymous login</li><li>2: Third-party authentication login</li></ul>
     * @param string $DomainPrefix <p>Custom domain name prefix</p>
     * @param array $Accounts <p>User account information</p><p>"Account password authentication" is required for login method</p>
     * @param AnonymousLoginInfo $AnonymousLogin <p>Anonymous login account information</p><p>"Anonymous login" is a required login method.</p>
     * @param integer $IntranetType <p>Private network type, defaults to 0</p>
     * @param string $IntranetRegion <p>Private network region</p>
     * @param string $VpcId <p>Private network VpcId</p>
     * @param string $SubnetId <p>Private subnet SubnetId</p>
     * @param array $AuthRoles <p>Auth role information</p><p>"Third-party authentication login" is a required login method.</p>
     * @param array $Tags <p>Tag description list. By specifying this parameter, you can simultaneously bind tags to the corresponding log topic. Supports up to 10 tag key-value pairs. The same resource can only be bound to the same tag key.</p>
     * @param array $HideParams <p>Custom hidden parameter</p>
     * @param array $AccessControlRules <p>Access Control Rule</p><p>The "third-party authentication login" login method requires the AccessMode: internal && Action: ACCEPT rule.</p>
     * @param string $Remarks <p>Remark</p>
     * @param array $Menus <p>Customize menu</p>
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

        if (array_key_exists("AnonymousLogin",$param) and $param["AnonymousLogin"] !== null) {
            $this->AnonymousLogin = new AnonymousLoginInfo();
            $this->AnonymousLogin->deserialize($param["AnonymousLogin"]);
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
    }
}
