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
 * ListRoleConfigurations request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getNextToken() Obtain Token for querying the next page of returned results. During use of the API for the first time, NextToken is not needed. When you call the API for the first time, if the total number of returned data entries exceeds the MaxResults limit, the data is truncated and only MaxResults data entries are returned. Meanwhile, the return parameter IsTruncated is true and a NextToken is returned. You can use the NextToken returned last time to continue calling the API with other request parameters unchanged, to query the truncated data. You can use this method for multiple queries until IsTruncated is false, indicating that all data has been queried.
 * @method void setNextToken(string $NextToken) Set Token for querying the next page of returned results. During use of the API for the first time, NextToken is not needed. When you call the API for the first time, if the total number of returned data entries exceeds the MaxResults limit, the data is truncated and only MaxResults data entries are returned. Meanwhile, the return parameter IsTruncated is true and a NextToken is returned. You can use the NextToken returned last time to continue calling the API with other request parameters unchanged, to query the truncated data. You can use this method for multiple queries until IsTruncated is false, indicating that all data has been queried.
 * @method integer getMaxResults() Obtain Maximum number of data entries per page. Value range: 1-100. Default value: 10.
 * @method void setMaxResults(integer $MaxResults) Set Maximum number of data entries per page. Value range: 1-100. Default value: 10.
 * @method string getFilter() Obtain Filter criteria, which are case insensitive. Currently, only RoleConfigurationName is supported and only eq (Equals) and sw (Start With) are supported. Example: Filter = "RoleConfigurationName, only sw test" means querying all permission configurations starting with test. Filter = "RoleConfigurationName, only eq TestRoleConfiguration" means querying the permission configuration named TestRoleConfiguration.
 * @method void setFilter(string $Filter) Set Filter criteria, which are case insensitive. Currently, only RoleConfigurationName is supported and only eq (Equals) and sw (Start With) are supported. Example: Filter = "RoleConfigurationName, only sw test" means querying all permission configurations starting with test. Filter = "RoleConfigurationName, only eq TestRoleConfiguration" means querying the permission configuration named TestRoleConfiguration.
 * @method array getFilterTargets() Obtain Check whether the member account has been configured with permissions. If configured, return IsSelected: true; otherwise, return false.
 * @method void setFilterTargets(array $FilterTargets) Set Check whether the member account has been configured with permissions. If configured, return IsSelected: true; otherwise, return false.
 * @method string getPrincipalId() Obtain UserId of the authorized user or GroupId of the authorized user group, which must be set together with the input parameter FilterTargets.
 * @method void setPrincipalId(string $PrincipalId) Set UserId of the authorized user or GroupId of the authorized user group, which must be set together with the input parameter FilterTargets.
 */
class ListRoleConfigurationsRequest extends AbstractModel
{
    /**
     * @var string Space ID.
     */
    public $ZoneId;

    /**
     * @var string Token for querying the next page of returned results. During use of the API for the first time, NextToken is not needed. When you call the API for the first time, if the total number of returned data entries exceeds the MaxResults limit, the data is truncated and only MaxResults data entries are returned. Meanwhile, the return parameter IsTruncated is true and a NextToken is returned. You can use the NextToken returned last time to continue calling the API with other request parameters unchanged, to query the truncated data. You can use this method for multiple queries until IsTruncated is false, indicating that all data has been queried.
     */
    public $NextToken;

    /**
     * @var integer Maximum number of data entries per page. Value range: 1-100. Default value: 10.
     */
    public $MaxResults;

    /**
     * @var string Filter criteria, which are case insensitive. Currently, only RoleConfigurationName is supported and only eq (Equals) and sw (Start With) are supported. Example: Filter = "RoleConfigurationName, only sw test" means querying all permission configurations starting with test. Filter = "RoleConfigurationName, only eq TestRoleConfiguration" means querying the permission configuration named TestRoleConfiguration.
     */
    public $Filter;

    /**
     * @var array Check whether the member account has been configured with permissions. If configured, return IsSelected: true; otherwise, return false.
     */
    public $FilterTargets;

    /**
     * @var string UserId of the authorized user or GroupId of the authorized user group, which must be set together with the input parameter FilterTargets.
     */
    public $PrincipalId;

    /**
     * @param string $ZoneId Space ID.
     * @param string $NextToken Token for querying the next page of returned results. During use of the API for the first time, NextToken is not needed. When you call the API for the first time, if the total number of returned data entries exceeds the MaxResults limit, the data is truncated and only MaxResults data entries are returned. Meanwhile, the return parameter IsTruncated is true and a NextToken is returned. You can use the NextToken returned last time to continue calling the API with other request parameters unchanged, to query the truncated data. You can use this method for multiple queries until IsTruncated is false, indicating that all data has been queried.
     * @param integer $MaxResults Maximum number of data entries per page. Value range: 1-100. Default value: 10.
     * @param string $Filter Filter criteria, which are case insensitive. Currently, only RoleConfigurationName is supported and only eq (Equals) and sw (Start With) are supported. Example: Filter = "RoleConfigurationName, only sw test" means querying all permission configurations starting with test. Filter = "RoleConfigurationName, only eq TestRoleConfiguration" means querying the permission configuration named TestRoleConfiguration.
     * @param array $FilterTargets Check whether the member account has been configured with permissions. If configured, return IsSelected: true; otherwise, return false.
     * @param string $PrincipalId UserId of the authorized user or GroupId of the authorized user group, which must be set together with the input parameter FilterTargets.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("FilterTargets",$param) and $param["FilterTargets"] !== null) {
            $this->FilterTargets = $param["FilterTargets"];
        }

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }
    }
}
