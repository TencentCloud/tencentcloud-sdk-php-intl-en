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

namespace TencentCloud\Postgres\V20170312;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Postgres\V20170312\Models as Models;

/**
 * @method Models\CloseDBExtranetAccessResponse CloseDBExtranetAccess(Models\CloseDBExtranetAccessRequest $req) This API is used to disable the public network link to an instance.
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to get the instance user list.
 * @method Models\DescribeDBBackupsResponse DescribeDBBackups(Models\DescribeDBBackupsRequest $req) This API is used to query the instance backup list.
 * @method Models\DescribeDBErrlogsResponse DescribeDBErrlogs(Models\DescribeDBErrlogsRequest $req) This API is used to get error logs.
 * @method Models\DescribeDBInstanceAttributeResponse DescribeDBInstanceAttribute(Models\DescribeDBInstanceAttributeRequest $req) This API is used to query the details of one instance.
 * @method Models\DescribeDBSlowlogsResponse DescribeDBSlowlogs(Models\DescribeDBSlowlogsRequest $req) This API is used to get slow query logs.
 * @method Models\DescribeDBXlogsResponse DescribeDBXlogs(Models\DescribeDBXlogsRequest $req) This API is used to get the instance Xlog list.
 * @method Models\DescribeOrdersResponse DescribeOrders(Models\DescribeOrdersRequest $req) This API is used to get order information.
 * @method Models\DescribeProductConfigResponse DescribeProductConfig(Models\DescribeProductConfigRequest $req) This API is used to query the purchasable specification configuration.
 * @method Models\DescribeRegionsResponse DescribeRegions(Models\DescribeRegionsRequest $req) This API is used to query the purchasable regions.
 * @method Models\DescribeZonesResponse DescribeZones(Models\DescribeZonesRequest $req) This API is used to query the supported AZs.
 * @method Models\InitDBInstancesResponse InitDBInstances(Models\InitDBInstancesRequest $req) This API is used to initialize a TencentDB for PostgreSQL instance.
 * @method Models\InquiryPriceUpgradeDBInstanceResponse InquiryPriceUpgradeDBInstance(Models\InquiryPriceUpgradeDBInstanceRequest $req) This API is used to query the upgrade price of an instance.
 * @method Models\ModifyAccountRemarkResponse ModifyAccountRemark(Models\ModifyAccountRemarkRequest $req) This API is used to modify account remarks.
 * @method Models\ModifyDBInstanceNameResponse ModifyDBInstanceName(Models\ModifyDBInstanceNameRequest $req) This API is used to rename a TencentDB for PostgreSQL instance.
 * @method Models\ModifyDBInstancesProjectResponse ModifyDBInstancesProject(Models\ModifyDBInstancesProjectRequest $req) This API is used to transfer an instance to another project.
 * @method Models\OpenDBExtranetAccessResponse OpenDBExtranetAccess(Models\OpenDBExtranetAccessRequest $req) This API is used to enable public network access.
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) This API is used to reset the account password of an instance.
 * @method Models\RestartDBInstanceResponse RestartDBInstance(Models\RestartDBInstanceRequest $req) This API is used to restart an instance.
 */

class PostgresClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "postgres.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $version = "2017-03-12";

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
        $respClass = "TencentCloud"."\\".ucfirst("postgres")."\\"."V20170312\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
