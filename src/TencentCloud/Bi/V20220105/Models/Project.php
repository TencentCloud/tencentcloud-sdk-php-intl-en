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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Project description
 *
 * @method integer getId() Obtain Project ID.
 * @method void setId(integer $Id) Set Project ID.
 * @method string getLogo() Obtain Project logo.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLogo(string $Logo) Set Project logo.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getName() Obtain Project name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setName(string $Name) Set Project name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getColorCode() Obtain Background color of the logo.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setColorCode(string $ColorCode) Set Background color of the logo.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedUser() Obtain Creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedUser(string $CreatedUser) Set Creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedAt() Obtain Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedAt(string $CreatedAt) Set Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemberCount() Obtain Number of members.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemberCount(integer $MemberCount) Set Number of members.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPageCount() Obtain Number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPageCount(integer $PageCount) Set Number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLastModifyName() Obtain Last modified report and dashboard names.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLastModifyName(string $LastModifyName) Set Last modified report and dashboard names.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSource() Obtain ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSource(string $Source) Set ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getApply() Obtain ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApply(boolean $Apply) Set ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedUser() Obtain ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedUser(string $UpdatedUser) Set ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdatedAt() Obtain ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdatedAt(string $UpdatedAt) Set ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCorpId() Obtain ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCorpId(string $CorpId) Set ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMark() Obtain ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMark(string $Mark) Set ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSeed() Obtain ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSeed(string $Seed) Set ""
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAuthList() Obtain Permission list in the project.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAuthList(array $AuthList) Set Permission list in the project.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPanelScope() Obtain Default dashboard.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPanelScope(string $PanelScope) Set Default dashboard.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsExternalManage() Obtain Whether it is managed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsExternalManage(boolean $IsExternalManage) Set Whether it is managed.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getManagePlatform() Obtain Management platform name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setManagePlatform(string $ManagePlatform) Set Management platform name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getConfigList() Obtain Customization parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigList(array $ConfigList) Set Customization parameter.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreatedUserName() Obtain Creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreatedUserName(string $CreatedUserName) Set Creator.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOwner() Obtain Associated person ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwner(string $Owner) Set Associated person ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOwnerName() Obtain Associated person.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerName(string $OwnerName) Set Associated person.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getNormalCount() Obtain Number of dashboard pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNormalCount(integer $NormalCount) Set Number of dashboard pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFreeCount() Obtain Number of free canvas pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFreeCount(integer $FreeCount) Set Number of free canvas pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAdhocCount() Obtain Number of ad-hoc analysis pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAdhocCount(integer $AdhocCount) Set Number of ad-hoc analysis pages.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getBriefingCount() Obtain Number of pages in the briefing
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBriefingCount(integer $BriefingCount) Set Number of pages in the briefing
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Project extends AbstractModel
{
    /**
     * @var integer Project ID.
     */
    public $Id;

    /**
     * @var string Project logo.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Logo;

    /**
     * @var string Project name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Name;

    /**
     * @var string Background color of the logo.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ColorCode;

    /**
     * @var string Creator.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedUser;

    /**
     * @var string Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedAt;

    /**
     * @var integer Number of members.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MemberCount;

    /**
     * @var integer Number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PageCount;

    /**
     * @var string Last modified report and dashboard names.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LastModifyName;

    /**
     * @var string ""
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Source;

    /**
     * @var boolean ""
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Apply;

    /**
     * @var string ""
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedUser;

    /**
     * @var string ""
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdatedAt;

    /**
     * @var string ""
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CorpId;

    /**
     * @var string ""
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Mark;

    /**
     * @var string ""
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Seed;

    /**
     * @var array Permission list in the project.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AuthList;

    /**
     * @var string Default dashboard.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PanelScope;

    /**
     * @var boolean Whether it is managed.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsExternalManage;

    /**
     * @var string Management platform name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ManagePlatform;

    /**
     * @var array Customization parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConfigList;

    /**
     * @var string Creator.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreatedUserName;

    /**
     * @var string Associated person ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Owner;

    /**
     * @var string Associated person.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerName;

    /**
     * @var integer Number of dashboard pages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NormalCount;

    /**
     * @var integer Number of free canvas pages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FreeCount;

    /**
     * @var integer Number of ad-hoc analysis pages.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AdhocCount;

    /**
     * @var integer Number of pages in the briefing
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BriefingCount;

    /**
     * @param integer $Id Project ID.
     * @param string $Logo Project logo.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Name Project name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ColorCode Background color of the logo.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedUser Creator.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedAt Creation time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $MemberCount Number of members.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PageCount Number of pages.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LastModifyName Last modified report and dashboard names.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Source ""
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Apply ""
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedUser ""
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdatedAt ""
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CorpId ""
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Mark ""
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Seed ""
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AuthList Permission list in the project.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PanelScope Default dashboard.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsExternalManage Whether it is managed.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ManagePlatform Management platform name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ConfigList Customization parameter.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreatedUserName Creator.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Owner Associated person ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OwnerName Associated person.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $NormalCount Number of dashboard pages.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FreeCount Number of free canvas pages.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AdhocCount Number of ad-hoc analysis pages.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $BriefingCount Number of pages in the briefing
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ColorCode",$param) and $param["ColorCode"] !== null) {
            $this->ColorCode = $param["ColorCode"];
        }

        if (array_key_exists("CreatedUser",$param) and $param["CreatedUser"] !== null) {
            $this->CreatedUser = $param["CreatedUser"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("LastModifyName",$param) and $param["LastModifyName"] !== null) {
            $this->LastModifyName = $param["LastModifyName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Apply",$param) and $param["Apply"] !== null) {
            $this->Apply = $param["Apply"];
        }

        if (array_key_exists("UpdatedUser",$param) and $param["UpdatedUser"] !== null) {
            $this->UpdatedUser = $param["UpdatedUser"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("AuthList",$param) and $param["AuthList"] !== null) {
            $this->AuthList = $param["AuthList"];
        }

        if (array_key_exists("PanelScope",$param) and $param["PanelScope"] !== null) {
            $this->PanelScope = $param["PanelScope"];
        }

        if (array_key_exists("IsExternalManage",$param) and $param["IsExternalManage"] !== null) {
            $this->IsExternalManage = $param["IsExternalManage"];
        }

        if (array_key_exists("ManagePlatform",$param) and $param["ManagePlatform"] !== null) {
            $this->ManagePlatform = $param["ManagePlatform"];
        }

        if (array_key_exists("ConfigList",$param) and $param["ConfigList"] !== null) {
            $this->ConfigList = [];
            foreach ($param["ConfigList"] as $key => $value){
                $obj = new ProjectConfigList();
                $obj->deserialize($value);
                array_push($this->ConfigList, $obj);
            }
        }

        if (array_key_exists("CreatedUserName",$param) and $param["CreatedUserName"] !== null) {
            $this->CreatedUserName = $param["CreatedUserName"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("NormalCount",$param) and $param["NormalCount"] !== null) {
            $this->NormalCount = $param["NormalCount"];
        }

        if (array_key_exists("FreeCount",$param) and $param["FreeCount"] !== null) {
            $this->FreeCount = $param["FreeCount"];
        }

        if (array_key_exists("AdhocCount",$param) and $param["AdhocCount"] !== null) {
            $this->AdhocCount = $param["AdhocCount"];
        }

        if (array_key_exists("BriefingCount",$param) and $param["BriefingCount"] !== null) {
            $this->BriefingCount = $param["BriefingCount"];
        }
    }
}
