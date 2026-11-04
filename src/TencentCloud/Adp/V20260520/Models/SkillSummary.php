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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Skill summary in the SkillSummary list.
 *
 * @method SkillClassification getClassificationInfo() Obtain Classification information
 * @method void setClassificationInfo(SkillClassification $ClassificationInfo) Set Classification information
 * @method SkillVersion getCurrentVersionInfo() Obtain Current version information
 * @method void setCurrentVersionInfo(SkillVersion $CurrentVersionInfo) Set Current version information
 * @method boolean getIsFavorite() Obtain Whether the current user collects it
 * @method void setIsFavorite(boolean $IsFavorite) Set Whether the current user collects it
 * @method SkillProfile getProfile() Obtain Basic information
 * @method void setProfile(SkillProfile $Profile) Set Basic information
 * @method string getSkillId() Obtain Skill ID
 * @method void setSkillId(string $SkillId) Set Skill ID
 * @method array getNoticeList() Obtain Skill exception notification list
 * @method void setNoticeList(array $NoticeList) Set Skill exception notification list
 * @method array getPermissionIdList() Obtain List of resource operation permission bits of the current user for this Skill. This parameter is fixed as an empty array for built-in or shared skills.
 * @method void setPermissionIdList(array $PermissionIdList) Set List of resource operation permission bits of the current user for this Skill. This parameter is fixed as an empty array for built-in or shared skills.
 * @method array getShareList() Obtain Share information; there may be two entries, one is shared and the other is under review.
 * @method void setShareList(array $ShareList) Set Share information; there may be two entries, one is shared and the other is under review.
 * @method integer getSkillStatus() Obtain Skill status 

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | Initialization (no published versions, and the latest version is in INITIALIZED/UNRELEASED) |
Security detection in progress (no published versions, and the latest version is in AUDITING)
| 2 | To be released (no published versions, and the latest version is in PENDING_RELEASE) |
| 3 | Released (any RELEASED version exists, absorbent state) |
 * @method void setSkillStatus(integer $SkillStatus) Set Skill status 

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | Initialization (no published versions, and the latest version is in INITIALIZED/UNRELEASED) |
Security detection in progress (no published versions, and the latest version is in AUDITING)
| 2 | To be released (no published versions, and the latest version is in PENDING_RELEASE) |
| 3 | Released (any RELEASED version exists, absorbent state) |
 */
class SkillSummary extends AbstractModel
{
    /**
     * @var SkillClassification Classification information
     */
    public $ClassificationInfo;

    /**
     * @var SkillVersion Current version information
     */
    public $CurrentVersionInfo;

    /**
     * @var boolean Whether the current user collects it
     */
    public $IsFavorite;

    /**
     * @var SkillProfile Basic information
     */
    public $Profile;

    /**
     * @var string Skill ID
     */
    public $SkillId;

    /**
     * @var array Skill exception notification list
     */
    public $NoticeList;

    /**
     * @var array List of resource operation permission bits of the current user for this Skill. This parameter is fixed as an empty array for built-in or shared skills.
     */
    public $PermissionIdList;

    /**
     * @var array Share information; there may be two entries, one is shared and the other is under review.
     */
    public $ShareList;

    /**
     * @var integer Skill status 

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | Initialization (no published versions, and the latest version is in INITIALIZED/UNRELEASED) |
Security detection in progress (no published versions, and the latest version is in AUDITING)
| 2 | To be released (no published versions, and the latest version is in PENDING_RELEASE) |
| 3 | Released (any RELEASED version exists, absorbent state) |
     */
    public $SkillStatus;

    /**
     * @param SkillClassification $ClassificationInfo Classification information
     * @param SkillVersion $CurrentVersionInfo Current version information
     * @param boolean $IsFavorite Whether the current user collects it
     * @param SkillProfile $Profile Basic information
     * @param string $SkillId Skill ID
     * @param array $NoticeList Skill exception notification list
     * @param array $PermissionIdList List of resource operation permission bits of the current user for this Skill. This parameter is fixed as an empty array for built-in or shared skills.
     * @param array $ShareList Share information; there may be two entries, one is shared and the other is under review.
     * @param integer $SkillStatus Skill status 

Enumeration values:
| uint | Description |
| --- | --- |
| 0 | Initialization (no published versions, and the latest version is in INITIALIZED/UNRELEASED) |
Security detection in progress (no published versions, and the latest version is in AUDITING)
| 2 | To be released (no published versions, and the latest version is in PENDING_RELEASE) |
| 3 | Released (any RELEASED version exists, absorbent state) |
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
        if (array_key_exists("ClassificationInfo",$param) and $param["ClassificationInfo"] !== null) {
            $this->ClassificationInfo = new SkillClassification();
            $this->ClassificationInfo->deserialize($param["ClassificationInfo"]);
        }

        if (array_key_exists("CurrentVersionInfo",$param) and $param["CurrentVersionInfo"] !== null) {
            $this->CurrentVersionInfo = new SkillVersion();
            $this->CurrentVersionInfo->deserialize($param["CurrentVersionInfo"]);
        }

        if (array_key_exists("IsFavorite",$param) and $param["IsFavorite"] !== null) {
            $this->IsFavorite = $param["IsFavorite"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = new SkillProfile();
            $this->Profile->deserialize($param["Profile"]);
        }

        if (array_key_exists("SkillId",$param) and $param["SkillId"] !== null) {
            $this->SkillId = $param["SkillId"];
        }

        if (array_key_exists("NoticeList",$param) and $param["NoticeList"] !== null) {
            $this->NoticeList = [];
            foreach ($param["NoticeList"] as $key => $value){
                $obj = new SkillNotice();
                $obj->deserialize($value);
                array_push($this->NoticeList, $obj);
            }
        }

        if (array_key_exists("PermissionIdList",$param) and $param["PermissionIdList"] !== null) {
            $this->PermissionIdList = $param["PermissionIdList"];
        }

        if (array_key_exists("ShareList",$param) and $param["ShareList"] !== null) {
            $this->ShareList = [];
            foreach ($param["ShareList"] as $key => $value){
                $obj = new SkillShare();
                $obj->deserialize($value);
                array_push($this->ShareList, $obj);
            }
        }

        if (array_key_exists("SkillStatus",$param) and $param["SkillStatus"] !== null) {
            $this->SkillStatus = $param["SkillStatus"];
        }
    }
}
