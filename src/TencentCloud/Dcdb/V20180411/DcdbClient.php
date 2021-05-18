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

namespace TencentCloud\Dcdb\V20180411;

use TencentCloud\Common\AbstractClient;
use TencentCloud\Common\Profile\ClientProfile;
use TencentCloud\Common\Credential;
use TencentCloud\Dcdb\V20180411\Models as Models;

/**
 * @method Models\AssociateSecurityGroupsResponse AssociateSecurityGroups(Models\AssociateSecurityGroupsRequest $req) This API is used to associate security groups with Tencent Cloud resources in batches.
 * @method Models\CloneAccountResponse CloneAccount(Models\CloneAccountRequest $req) This API is used to clone an instance account.
 * @method Models\CloseDBExtranetAccessResponse CloseDBExtranetAccess(Models\CloseDBExtranetAccessRequest $req) This API is used to disable public network access for a TencentDB instance, which will make the public IP address inaccessible. The `DescribeDCDBInstances` API will not return the public domain name and port information of the corresponding instance.
 * @method Models\CopyAccountPrivilegesResponse CopyAccountPrivileges(Models\CopyAccountPrivilegesRequest $req) This API is used to copy the permissions of a TencentDB account.
Note: Accounts with the same username but different hosts are different accounts. Permissions can only be copied between accounts with the same `Readonly` attribute.
 * @method Models\CreateAccountResponse CreateAccount(Models\CreateAccountRequest $req) This API is used to create a TencentDB account. Multiple accounts can be created for one instance. Accounts with the same username but different hosts are different accounts.
 * @method Models\DeleteAccountResponse DeleteAccount(Models\DeleteAccountRequest $req) This API is used to delete a TencentDB account, which is uniquely identified by username and host.
 * @method Models\DescribeAccountPrivilegesResponse DescribeAccountPrivileges(Models\DescribeAccountPrivilegesRequest $req) This API is used to query the permissions of a TencentDB account.
Note: accounts with the same username but different hosts are different accounts.
 * @method Models\DescribeAccountsResponse DescribeAccounts(Models\DescribeAccountsRequest $req) This API is used to query the list of accounts of a specified TencentDB instance.
 * @method Models\DescribeDBLogFilesResponse DescribeDBLogFiles(Models\DescribeDBLogFilesRequest $req) This API is used to get the list of various logs of a database, including cold backups, binlogs, errlogs, and slowlogs.
 * @method Models\DescribeDBParametersResponse DescribeDBParameters(Models\DescribeDBParametersRequest $req) This API is used to get the current parameter settings of a database.
 * @method Models\DescribeDBSecurityGroupsResponse DescribeDBSecurityGroups(Models\DescribeDBSecurityGroupsRequest $req) This API is used to query the security group details of an instance.
 * @method Models\DescribeDBSyncModeResponse DescribeDBSyncMode(Models\DescribeDBSyncModeRequest $req) This API is used to query the sync mode of a TencentDB instance.
 * @method Models\DescribeDCDBInstanceNodeInfoResponse DescribeDCDBInstanceNodeInfo(Models\DescribeDCDBInstanceNodeInfoRequest $req) This API is used to query the information of instance nodes.
 * @method Models\DescribeDCDBInstancesResponse DescribeDCDBInstances(Models\DescribeDCDBInstancesRequest $req) This API is used to query the list of TencentDB instances. It supports filtering instances by project ID, instance ID, private network address, and instance name.
If no filter is specified, 10 instances will be returned by default. Up to 100 instances can be returned for a single request.
 * @method Models\DescribeDCDBShardsResponse DescribeDCDBShards(Models\DescribeDCDBShardsRequest $req) This API is used to query the information of shards of a TencentDB instance.
 * @method Models\DescribeDatabaseObjectsResponse DescribeDatabaseObjects(Models\DescribeDatabaseObjectsRequest $req) This API is used to query the list of database objects in a TencentDB instance, including tables, stored procedures, views, and functions.
 * @method Models\DescribeDatabaseTableResponse DescribeDatabaseTable(Models\DescribeDatabaseTableRequest $req) This API is used to query the table information of a TencentDB instance.
 * @method Models\DescribeDatabasesResponse DescribeDatabases(Models\DescribeDatabasesRequest $req) This API is used to query the list of databases of a TencentDB instance.
 * @method Models\DescribeProjectSecurityGroupsResponse DescribeProjectSecurityGroups(Models\DescribeProjectSecurityGroupsRequest $req) This API is used to query the security group details of a project.
 * @method Models\DescribeProjectsResponse DescribeProjects(Models\DescribeProjectsRequest $req) This API is used to query the project list.
 * @method Models\DisassociateSecurityGroupsResponse DisassociateSecurityGroups(Models\DisassociateSecurityGroupsRequest $req) This API is used to unassociate security groups from instances in batches.
 * @method Models\GrantAccountPrivilegesResponse GrantAccountPrivileges(Models\GrantAccountPrivilegesRequest $req) This API is used to grant permissions to a TencentDB account.
Note: accounts with the same username but different hosts are different accounts.
 * @method Models\InitDCDBInstancesResponse InitDCDBInstances(Models\InitDCDBInstancesRequest $req) This API is used to initialize instances, including setting the default character set and table name case sensitivity.
 * @method Models\ModifyAccountDescriptionResponse ModifyAccountDescription(Models\ModifyAccountDescriptionRequest $req) This API is used to modify the remarks of a TencentDB account.
Note: accounts with the same username but different hosts are different accounts.
 * @method Models\ModifyDBInstanceSecurityGroupsResponse ModifyDBInstanceSecurityGroups(Models\ModifyDBInstanceSecurityGroupsRequest $req) This API is used to modify the security groups associated with TencentDB.
 * @method Models\ModifyDBInstancesProjectResponse ModifyDBInstancesProject(Models\ModifyDBInstancesProjectRequest $req) This API is used to modify the project to which TencentDB instances belong.
 * @method Models\ModifyDBParametersResponse ModifyDBParameters(Models\ModifyDBParametersRequest $req) This API is used to modify database parameters.
 * @method Models\ModifyDBSyncModeResponse ModifyDBSyncMode(Models\ModifyDBSyncModeRequest $req) This API is used to modify the sync mode of a TencentDB instance.
 * @method Models\OpenDBExtranetAccessResponse OpenDBExtranetAccess(Models\OpenDBExtranetAccessRequest $req) This API is used to enable public network access for a TencentDB instance. After that, you can access the instance with the public domain name and port obtained through the `DescribeDCDBInstances` API.
 * @method Models\ResetAccountPasswordResponse ResetAccountPassword(Models\ResetAccountPasswordRequest $req) This API is used to reset the password of a TencentDB account.
Note: accounts with the same username but different hosts are different accounts.
 */

class DcdbClient extends AbstractClient
{
    /**
     * @var string
     */
    protected $endpoint = "dcdb.tencentcloudapi.com";

    /**
     * @var string
     */
    protected $service = "dcdb";

    /**
     * @var string
     */
    protected $version = "2018-04-11";

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
        $respClass = "TencentCloud"."\\".ucfirst("dcdb")."\\"."V20180411\\Models"."\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
