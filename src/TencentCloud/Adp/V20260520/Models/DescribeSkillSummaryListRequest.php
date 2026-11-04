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
 * DescribeSkillSummaryList request structure.
 *
 * @method string getSpaceId() Obtain Space ID. Required.
 * @method void setSpaceId(string $SpaceId) Set Space ID. Required.
 * @method boolean getFavoriteOnly() Obtain Query only the Skills favorited by the current user
 * @method void setFavoriteOnly(boolean $FavoriteOnly) Set Query only the Skills favorited by the current user
 * @method array getFilterList() Obtain Filter criteria (multiple Filters are in an AND relationship, while multiple Values within the same Filter are in an OR relationship):
-SkillIdList: List of skill IDs, string array, exact match
- ProviderType: Skill provider type, enumerated value array, exact match
     (SKILL_PROVIDER_TYPE_OFFICIAL=1/SKILL_PROVIDER_TYPE_THIRD_PARTY=2/SKILL_PROVIDER_TYPE_CUSTOM=3/SKILL_PROVIDER_TYPE_CUSTOM_SHARED=4)
-CategoryKey: Category identifier, string array, exact match.
- AnalysisStatus: Security detection status, enumeration value array, exact match.
     (SKILL_ANALYSIS_PENDING=0/SKILL_ANALYSIS_RUNNING=1/SKILL_ANALYSIS_AVAILABLE=2/SKILL_ANALYSIS_UNAVAILABLE=3/SKILL_ANALYSIS_FAILED=4)
- RiskLevel: Risk level, enumerated value array, exact match
     (SKILL_RISK_NONE=0/SKILL_RISK_LOW=1/SKILL_RISK_MEDIUM=2/SKILL_RISK_HIGH=3)
- SkillStatus: Publishing status in the Skill dimension. Enumerated value array. Exact match. OR between multiple values. Only meaningful when Perspective is EDITOR or ALL.
(SKILL_STATUS_INITIALIZED=0/SKILL_STATUS_AUDITING=1/SKILL_STATUS_PENDING_RELEASE=2/SKILL_STATUS_RELEASED=3)
- ShareStatus: Shared status, enumeration value array, exact match. This parameter is valid only when ProviderType includes SKILL_PROVIDER_TYPE_CUSTOM/SKILL_PROVIDER_TYPE_CUSTOM_SHARED.
     (SHARE_STATUS_UNSHARED=0/SHARE_STATUS_SHARED=1/SHARE_STATUS_APPROVING=2)
-Perspective: Perspective enum, string single value. The length of Values must be 1. Multi-value is deemed as illegal. This parameter is valid only when ProviderType=SKILL_PROVIDER_TYPE_CUSTOM. Default if not passed: USER
(USER=User perspective. Only Skills with usage permissions are returned / EDITOR=Editor perspective. Only Skills with edit permission are returned / ALL=Full perspective. Skills with any permission bit are returned)
-Creator: Filter by creator. String single value. The length of Values must be 1. Multi-value is deemed as illegal. This parameter is valid only when ProviderType=SKILL_PROVIDER_TYPE_CUSTOM.
Currently, only the placeholder "$self" is supported, which means only Skills created by the current caller are returned.
To scale to a specified identity subsequently, add the agreement here if needed.
 * @method void setFilterList(array $FilterList) Set Filter criteria (multiple Filters are in an AND relationship, while multiple Values within the same Filter are in an OR relationship):
-SkillIdList: List of skill IDs, string array, exact match
- ProviderType: Skill provider type, enumerated value array, exact match
     (SKILL_PROVIDER_TYPE_OFFICIAL=1/SKILL_PROVIDER_TYPE_THIRD_PARTY=2/SKILL_PROVIDER_TYPE_CUSTOM=3/SKILL_PROVIDER_TYPE_CUSTOM_SHARED=4)
-CategoryKey: Category identifier, string array, exact match.
- AnalysisStatus: Security detection status, enumeration value array, exact match.
     (SKILL_ANALYSIS_PENDING=0/SKILL_ANALYSIS_RUNNING=1/SKILL_ANALYSIS_AVAILABLE=2/SKILL_ANALYSIS_UNAVAILABLE=3/SKILL_ANALYSIS_FAILED=4)
- RiskLevel: Risk level, enumerated value array, exact match
     (SKILL_RISK_NONE=0/SKILL_RISK_LOW=1/SKILL_RISK_MEDIUM=2/SKILL_RISK_HIGH=3)
- SkillStatus: Publishing status in the Skill dimension. Enumerated value array. Exact match. OR between multiple values. Only meaningful when Perspective is EDITOR or ALL.
(SKILL_STATUS_INITIALIZED=0/SKILL_STATUS_AUDITING=1/SKILL_STATUS_PENDING_RELEASE=2/SKILL_STATUS_RELEASED=3)
- ShareStatus: Shared status, enumeration value array, exact match. This parameter is valid only when ProviderType includes SKILL_PROVIDER_TYPE_CUSTOM/SKILL_PROVIDER_TYPE_CUSTOM_SHARED.
     (SHARE_STATUS_UNSHARED=0/SHARE_STATUS_SHARED=1/SHARE_STATUS_APPROVING=2)
-Perspective: Perspective enum, string single value. The length of Values must be 1. Multi-value is deemed as illegal. This parameter is valid only when ProviderType=SKILL_PROVIDER_TYPE_CUSTOM. Default if not passed: USER
(USER=User perspective. Only Skills with usage permissions are returned / EDITOR=Editor perspective. Only Skills with edit permission are returned / ALL=Full perspective. Skills with any permission bit are returned)
-Creator: Filter by creator. String single value. The length of Values must be 1. Multi-value is deemed as illegal. This parameter is valid only when ProviderType=SKILL_PROVIDER_TYPE_CUSTOM.
Currently, only the placeholder "$self" is supported, which means only Skills created by the current caller are returned.
To scale to a specified identity subsequently, add the agreement here if needed.
 * @method integer getPageNumber() Obtain Page number, starting from 0
 * @method void setPageNumber(integer $PageNumber) Set Page number, starting from 0
 * @method integer getPageSize() Obtain Number of items per page. Maximum value: 100.
 * @method void setPageSize(integer $PageSize) Set Number of items per page. Maximum value: 100.
 * @method string getQuery() Obtain Fuzzy search by name/display name
 * @method void setQuery(string $Query) Set Fuzzy search by name/display name
 */
class DescribeSkillSummaryListRequest extends AbstractModel
{
    /**
     * @var string Space ID. Required.
     */
    public $SpaceId;

    /**
     * @var boolean Query only the Skills favorited by the current user
     */
    public $FavoriteOnly;

    /**
     * @var array Filter criteria (multiple Filters are in an AND relationship, while multiple Values within the same Filter are in an OR relationship):
-SkillIdList: List of skill IDs, string array, exact match
- ProviderType: Skill provider type, enumerated value array, exact match
     (SKILL_PROVIDER_TYPE_OFFICIAL=1/SKILL_PROVIDER_TYPE_THIRD_PARTY=2/SKILL_PROVIDER_TYPE_CUSTOM=3/SKILL_PROVIDER_TYPE_CUSTOM_SHARED=4)
-CategoryKey: Category identifier, string array, exact match.
- AnalysisStatus: Security detection status, enumeration value array, exact match.
     (SKILL_ANALYSIS_PENDING=0/SKILL_ANALYSIS_RUNNING=1/SKILL_ANALYSIS_AVAILABLE=2/SKILL_ANALYSIS_UNAVAILABLE=3/SKILL_ANALYSIS_FAILED=4)
- RiskLevel: Risk level, enumerated value array, exact match
     (SKILL_RISK_NONE=0/SKILL_RISK_LOW=1/SKILL_RISK_MEDIUM=2/SKILL_RISK_HIGH=3)
- SkillStatus: Publishing status in the Skill dimension. Enumerated value array. Exact match. OR between multiple values. Only meaningful when Perspective is EDITOR or ALL.
(SKILL_STATUS_INITIALIZED=0/SKILL_STATUS_AUDITING=1/SKILL_STATUS_PENDING_RELEASE=2/SKILL_STATUS_RELEASED=3)
- ShareStatus: Shared status, enumeration value array, exact match. This parameter is valid only when ProviderType includes SKILL_PROVIDER_TYPE_CUSTOM/SKILL_PROVIDER_TYPE_CUSTOM_SHARED.
     (SHARE_STATUS_UNSHARED=0/SHARE_STATUS_SHARED=1/SHARE_STATUS_APPROVING=2)
-Perspective: Perspective enum, string single value. The length of Values must be 1. Multi-value is deemed as illegal. This parameter is valid only when ProviderType=SKILL_PROVIDER_TYPE_CUSTOM. Default if not passed: USER
(USER=User perspective. Only Skills with usage permissions are returned / EDITOR=Editor perspective. Only Skills with edit permission are returned / ALL=Full perspective. Skills with any permission bit are returned)
-Creator: Filter by creator. String single value. The length of Values must be 1. Multi-value is deemed as illegal. This parameter is valid only when ProviderType=SKILL_PROVIDER_TYPE_CUSTOM.
Currently, only the placeholder "$self" is supported, which means only Skills created by the current caller are returned.
To scale to a specified identity subsequently, add the agreement here if needed.
     */
    public $FilterList;

    /**
     * @var integer Page number, starting from 0
     */
    public $PageNumber;

    /**
     * @var integer Number of items per page. Maximum value: 100.
     */
    public $PageSize;

    /**
     * @var string Fuzzy search by name/display name
     */
    public $Query;

    /**
     * @param string $SpaceId Space ID. Required.
     * @param boolean $FavoriteOnly Query only the Skills favorited by the current user
     * @param array $FilterList Filter criteria (multiple Filters are in an AND relationship, while multiple Values within the same Filter are in an OR relationship):
-SkillIdList: List of skill IDs, string array, exact match
- ProviderType: Skill provider type, enumerated value array, exact match
     (SKILL_PROVIDER_TYPE_OFFICIAL=1/SKILL_PROVIDER_TYPE_THIRD_PARTY=2/SKILL_PROVIDER_TYPE_CUSTOM=3/SKILL_PROVIDER_TYPE_CUSTOM_SHARED=4)
-CategoryKey: Category identifier, string array, exact match.
- AnalysisStatus: Security detection status, enumeration value array, exact match.
     (SKILL_ANALYSIS_PENDING=0/SKILL_ANALYSIS_RUNNING=1/SKILL_ANALYSIS_AVAILABLE=2/SKILL_ANALYSIS_UNAVAILABLE=3/SKILL_ANALYSIS_FAILED=4)
- RiskLevel: Risk level, enumerated value array, exact match
     (SKILL_RISK_NONE=0/SKILL_RISK_LOW=1/SKILL_RISK_MEDIUM=2/SKILL_RISK_HIGH=3)
- SkillStatus: Publishing status in the Skill dimension. Enumerated value array. Exact match. OR between multiple values. Only meaningful when Perspective is EDITOR or ALL.
(SKILL_STATUS_INITIALIZED=0/SKILL_STATUS_AUDITING=1/SKILL_STATUS_PENDING_RELEASE=2/SKILL_STATUS_RELEASED=3)
- ShareStatus: Shared status, enumeration value array, exact match. This parameter is valid only when ProviderType includes SKILL_PROVIDER_TYPE_CUSTOM/SKILL_PROVIDER_TYPE_CUSTOM_SHARED.
     (SHARE_STATUS_UNSHARED=0/SHARE_STATUS_SHARED=1/SHARE_STATUS_APPROVING=2)
-Perspective: Perspective enum, string single value. The length of Values must be 1. Multi-value is deemed as illegal. This parameter is valid only when ProviderType=SKILL_PROVIDER_TYPE_CUSTOM. Default if not passed: USER
(USER=User perspective. Only Skills with usage permissions are returned / EDITOR=Editor perspective. Only Skills with edit permission are returned / ALL=Full perspective. Skills with any permission bit are returned)
-Creator: Filter by creator. String single value. The length of Values must be 1. Multi-value is deemed as illegal. This parameter is valid only when ProviderType=SKILL_PROVIDER_TYPE_CUSTOM.
Currently, only the placeholder "$self" is supported, which means only Skills created by the current caller are returned.
To scale to a specified identity subsequently, add the agreement here if needed.
     * @param integer $PageNumber Page number, starting from 0
     * @param integer $PageSize Number of items per page. Maximum value: 100.
     * @param string $Query Fuzzy search by name/display name
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("FavoriteOnly",$param) and $param["FavoriteOnly"] !== null) {
            $this->FavoriteOnly = $param["FavoriteOnly"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
