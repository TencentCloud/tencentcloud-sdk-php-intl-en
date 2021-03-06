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

namespace TencentCloud\Dbbrain\V20210527;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dbbrain\V20210527\Models as Models;

/**
 * @method Models\AddUserContactResponse AddUserContact(Models\AddUserContactRequest $req) This API is used to add the contact name and email. The returned value is the ID of the successfully added contact. Please always select Guangzhou for `Region`.
 * @method Models\CreateDBDiagReportTaskResponse CreateDBDiagReportTask(Models\CreateDBDiagReportTaskRequest $req) This API is used to create a health report and send it via email as configured.
 * @method Models\CreateDBDiagReportUrlResponse CreateDBDiagReportUrl(Models\CreateDBDiagReportUrlRequest $req) This API is used to create a URL for a health report.
 * @method Models\CreateMailProfileResponse CreateMailProfile(Models\CreateMailProfileRequest $req) This API is used to create the email configuration. The input parameter `ProfileType` represents the type of the email configuration. Valid values: `dbScan_mail_configuration` (email configuration of database inspection report) and `scheduler_mail_configuration` (email sending configuration of scheduled task health report). Please always select Guangzhou for `Region`, regardless of the region where the instance resides.
 * @method Models\CreateSchedulerMailProfileResponse CreateSchedulerMailProfile(Models\CreateSchedulerMailProfileRequest $req) This API is used to create the regular generation time of health reports and the regular email sending configuration. Please pass in the regular generation time of health reports as a parameter (Monday to Sunday) to set the regular generation time, and save the corresponding regular email sending configuration.
 * @method Models\CreateSecurityAuditLogExportTaskResponse CreateSecurityAuditLogExportTask(Models\CreateSecurityAuditLogExportTaskRequest $req) This API is used to create a security audit log export task.
 * @method Models\DeleteSecurityAuditLogExportTasksResponse DeleteSecurityAuditLogExportTasks(Models\DeleteSecurityAuditLogExportTasksRequest $req) This API is used to delete a security audit log export task.
 * @method Models\DescribeAllUserContactResponse DescribeAllUserContact(Models\DescribeAllUserContactRequest $req) This API is used to get the information of the contact in the email.
 * @method Models\DescribeAllUserGroupResponse DescribeAllUserGroup(Models\DescribeAllUserGroupRequest $req) This API is used to get the information of the contact group in the email.
 * @method Models\DescribeDBDiagEventResponse DescribeDBDiagEvent(Models\DescribeDBDiagEventRequest $req) This API is used to get the details of an instance exception diagnosis event.
 * @method Models\DescribeDBDiagHistoryResponse DescribeDBDiagHistory(Models\DescribeDBDiagHistoryRequest $req) This API is used to get the list of instance diagnosis events.
 * @method Models\DescribeDBDiagReportTasksResponse DescribeDBDiagReportTasks(Models\DescribeDBDiagReportTasksRequest $req) This API is used to query the list of health report generation tasks.
 * @method Models\DescribeDBSpaceStatusResponse DescribeDBSpaceStatus(Models\DescribeDBSpaceStatusRequest $req) This API is used to query the overview of instance space usage during a specified time period, including disk usage growth (MB), available disk space (MB), total disk space (MB), and estimated number of available days.
 * @method Models\DescribeDiagDBInstancesResponse DescribeDiagDBInstances(Models\DescribeDiagDBInstancesRequest $req) This API is used to get the instance information list. Please always select Guangzhou for `Region`.
 * @method Models\DescribeHealthScoreResponse DescribeHealthScore(Models\DescribeHealthScoreRequest $req) This API is used to get the health score and deduction for exceptions in the specified time period (30 minutes) based on the instance ID.
 * @method Models\DescribeMailProfileResponse DescribeMailProfile(Models\DescribeMailProfileRequest $req) This API is used to get the email sending configuration, including the email configuration for database inspection and the email sending configuration for scheduled task health reports. Please always select Guangzhou for `Region`.
 * @method Models\DescribeMySqlProcessListResponse DescribeMySqlProcessList(Models\DescribeMySqlProcessListRequest $req) This API is used to query the real-time thread list of a relational database.
 * @method Models\DescribeSecurityAuditLogDownloadUrlsResponse DescribeSecurityAuditLogDownloadUrls(Models\DescribeSecurityAuditLogDownloadUrlsRequest $req) This API is used to query the download link of a security audit log export file. Currently, log file download only provides a Tencent Cloud private network address. Please download it by using a CVM instance in the Guangzhou region.
 * @method Models\DescribeSecurityAuditLogExportTasksResponse DescribeSecurityAuditLogExportTasks(Models\DescribeSecurityAuditLogExportTasksRequest $req) This API is used to query the list of security audit log export tasks.
 * @method Models\DescribeSlowLogTimeSeriesStatsResponse DescribeSlowLogTimeSeriesStats(Models\DescribeSlowLogTimeSeriesStatsRequest $req) This API is used to get the slow log statistics histogram.
 * @method Models\DescribeSlowLogTopSqlsResponse DescribeSlowLogTopSqls(Models\DescribeSlowLogTopSqlsRequest $req) This API is used to get and sort the top slow SQL statements in a specified time period by the aggregation mode of SQL template plus schema.
 * @method Models\DescribeSlowLogUserHostStatsResponse DescribeSlowLogUserHostStats(Models\DescribeSlowLogUserHostStatsRequest $req) This API is used to get the statistical distribution chart of slow log source addresses.
 * @method Models\DescribeTopSpaceSchemaTimeSeriesResponse DescribeTopSpaceSchemaTimeSeries(Models\DescribeTopSpaceSchemaTimeSeriesRequest $req) This API is used to get the daily space data of top databases consuming the most instance space. The data is daily collected by DBbrain during a specified time period. The returned results are sorted by size by default.
 * @method Models\DescribeTopSpaceSchemasResponse DescribeTopSpaceSchemas(Models\DescribeTopSpaceSchemasRequest $req) This API is used to get the real-time space statistics of top databases of an instance. The returned results are sorted by size by default.
 * @method Models\DescribeTopSpaceTableTimeSeriesResponse DescribeTopSpaceTableTimeSeries(Models\DescribeTopSpaceTableTimeSeriesRequest $req) This API is used to get the daily space data of top tables consuming the most instance space. The data is daily collected by DBbrain during a specified time period. The returned results are sorted by size by default.
 * @method Models\DescribeTopSpaceTablesResponse DescribeTopSpaceTables(Models\DescribeTopSpaceTablesRequest $req) This API is used to get the real-time space statistics of top tables of an instance. The returned results are sorted by size by default.
 * @method Models\DescribeUserSqlAdviceResponse DescribeUserSqlAdvice(Models\DescribeUserSqlAdviceRequest $req) This API is used to get SQL statement optimization suggestions.
 * @method Models\ModifyDiagDBInstanceConfResponse ModifyDiagDBInstanceConf(Models\ModifyDiagDBInstanceConfRequest $req) This API is used to enable/disable instance inspection.
 */

class DbbrainClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dbbrain.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dbbrain";

    /**
     * @var string
     */
    protected $version = "2021-05-27";

    /**
     * @param Credential $credential
     * @param string $region
     * @param ClientProfile|null $profile
     * @throws TencentCloudSDKException
     */
    function __construct($credential, $region, $profile=null)
    {
        parent::__construct($this->endpoint, $this->version, $credential, $region, $profile);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "TencentCloud"."\\".ucfirst("dbbrain")."\\"."V20210527\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
