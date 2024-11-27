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
 * ListTasks request structure.
 *
 * @method string getZoneId() Obtain Space ID.
 * @method void setZoneId(string $ZoneId) Set Space ID.
 * @method string getPrincipalId() Obtain User synchronization ID. Valid values: When PrincipalType is Group, it is a user group ID (g-****). When PrincipalType is User, it is a user ID (u-****).
 * @method void setPrincipalId(string $PrincipalId) Set User synchronization ID. Valid values: When PrincipalType is Group, it is a user group ID (g-****). When PrincipalType is User, it is a user ID (u-****).
 * @method string getNextToken() Obtain Token for querying the next page of returned results. During use of the API for the first time, NextToken is not needed. When you call the API for the first time, if the total number of returned data entries exceeds the MaxResults limit, the data is truncated and only MaxResults data entries are returned. Meanwhile, the return parameter IsTruncated is true and a NextToken is returned. You can use the NextToken returned last time to continue calling the API with other request parameters unchanged, to query the truncated data. You can use this method for multiple queries until IsTruncated is false, indicating that all data has been queried.
 * @method void setNextToken(string $NextToken) Set Token for querying the next page of returned results. During use of the API for the first time, NextToken is not needed. When you call the API for the first time, if the total number of returned data entries exceeds the MaxResults limit, the data is truncated and only MaxResults data entries are returned. Meanwhile, the return parameter IsTruncated is true and a NextToken is returned. You can use the NextToken returned last time to continue calling the API with other request parameters unchanged, to query the truncated data. You can use this method for multiple queries until IsTruncated is false, indicating that all data has been queried.
 * @method integer getMaxResults() Obtain Maximum number of data entries per page. Value range: 1-100. Default value: 10.
 * @method void setMaxResults(integer $MaxResults) Set Maximum number of data entries per page. Value range: 1-100. Default value: 10.
 * @method string getPrincipalType() Obtain Identity types synchronized for CAM users. Valid values: User: indicates the synchronized identity is a user. Group: indicates the synchronized identity is a user group.
 * @method void setPrincipalType(string $PrincipalType) Set Identity types synchronized for CAM users. Valid values: User: indicates the synchronized identity is a user. Group: indicates the synchronized identity is a user group.
 * @method integer getTargetUin() Obtain UIN of the synchronized target account of the Tencent Cloud Organization.
 * @method void setTargetUin(integer $TargetUin) Set UIN of the synchronized target account of the Tencent Cloud Organization.
 * @method string getTargetType() Obtain Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
 * @method void setTargetType(string $TargetType) Set Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
 * @method string getRoleConfigurationId() Obtain Permission configuration ID.
 * @method void setRoleConfigurationId(string $RoleConfigurationId) Set Permission configuration ID.
 * @method string getStatus() Obtain InProgress: The task is being executed; Success: The task execution succeeded; Failed: The task execution failed.
 * @method void setStatus(string $Status) Set InProgress: The task is being executed; Success: The task execution succeeded; Failed: The task execution failed.
 * @method string getTaskType() Obtain Task type.
 * @method void setTaskType(string $TaskType) Set Task type.
 */
class ListTasksRequest extends AbstractModel
{
    /**
     * @var string Space ID.
     */
    public $ZoneId;

    /**
     * @var string User synchronization ID. Valid values: When PrincipalType is Group, it is a user group ID (g-****). When PrincipalType is User, it is a user ID (u-****).
     */
    public $PrincipalId;

    /**
     * @var string Token for querying the next page of returned results. During use of the API for the first time, NextToken is not needed. When you call the API for the first time, if the total number of returned data entries exceeds the MaxResults limit, the data is truncated and only MaxResults data entries are returned. Meanwhile, the return parameter IsTruncated is true and a NextToken is returned. You can use the NextToken returned last time to continue calling the API with other request parameters unchanged, to query the truncated data. You can use this method for multiple queries until IsTruncated is false, indicating that all data has been queried.
     */
    public $NextToken;

    /**
     * @var integer Maximum number of data entries per page. Value range: 1-100. Default value: 10.
     */
    public $MaxResults;

    /**
     * @var string Identity types synchronized for CAM users. Valid values: User: indicates the synchronized identity is a user. Group: indicates the synchronized identity is a user group.
     */
    public $PrincipalType;

    /**
     * @var integer UIN of the synchronized target account of the Tencent Cloud Organization.
     */
    public $TargetUin;

    /**
     * @var string Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
     */
    public $TargetType;

    /**
     * @var string Permission configuration ID.
     */
    public $RoleConfigurationId;

    /**
     * @var string InProgress: The task is being executed; Success: The task execution succeeded; Failed: The task execution failed.
     */
    public $Status;

    /**
     * @var string Task type.
     */
    public $TaskType;

    /**
     * @param string $ZoneId Space ID.
     * @param string $PrincipalId User synchronization ID. Valid values: When PrincipalType is Group, it is a user group ID (g-****). When PrincipalType is User, it is a user ID (u-****).
     * @param string $NextToken Token for querying the next page of returned results. During use of the API for the first time, NextToken is not needed. When you call the API for the first time, if the total number of returned data entries exceeds the MaxResults limit, the data is truncated and only MaxResults data entries are returned. Meanwhile, the return parameter IsTruncated is true and a NextToken is returned. You can use the NextToken returned last time to continue calling the API with other request parameters unchanged, to query the truncated data. You can use this method for multiple queries until IsTruncated is false, indicating that all data has been queried.
     * @param integer $MaxResults Maximum number of data entries per page. Value range: 1-100. Default value: 10.
     * @param string $PrincipalType Identity types synchronized for CAM users. Valid values: User: indicates the synchronized identity is a user. Group: indicates the synchronized identity is a user group.
     * @param integer $TargetUin UIN of the synchronized target account of the Tencent Cloud Organization.
     * @param string $TargetType Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
     * @param string $RoleConfigurationId Permission configuration ID.
     * @param string $Status InProgress: The task is being executed; Success: The task execution succeeded; Failed: The task execution failed.
     * @param string $TaskType Task type.
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

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("PrincipalType",$param) and $param["PrincipalType"] !== null) {
            $this->PrincipalType = $param["PrincipalType"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
