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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBImportJob request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method string getUser() Obtain TencentDB username
 * @method void setUser(string $User) Set TencentDB username
 * @method string getFileName() Obtain Filename. The file must be a .sql file uploaded to Tencent Cloud.
 * @method void setFileName(string $FileName) Set Filename. The file must be a .sql file uploaded to Tencent Cloud.
 * @method string getPassword() Obtain Password of a TencentDB instance user account
 * @method void setPassword(string $Password) Set Password of a TencentDB instance user account
 * @method string getDbName() Obtain Name of the target database. If this parameter is not passed in, no database is specified.
 * @method void setDbName(string $DbName) Set Name of the target database. If this parameter is not passed in, no database is specified.
 * @method string getCosUrl() Obtain URL of a .sql file stored in COS. Either `FileName` or `CosUrl` must be specified.
 * @method void setCosUrl(string $CosUrl) Set URL of a .sql file stored in COS. Either `FileName` or `CosUrl` must be specified.
 */
class CreateDBImportJobRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var string TencentDB username
     */
    public $User;

    /**
     * @var string Filename. The file must be a .sql file uploaded to Tencent Cloud.
     */
    public $FileName;

    /**
     * @var string Password of a TencentDB instance user account
     */
    public $Password;

    /**
     * @var string Name of the target database. If this parameter is not passed in, no database is specified.
     */
    public $DbName;

    /**
     * @var string URL of a .sql file stored in COS. Either `FileName` or `CosUrl` must be specified.
     */
    public $CosUrl;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param string $User TencentDB username
     * @param string $FileName Filename. The file must be a .sql file uploaded to Tencent Cloud.
     * @param string $Password Password of a TencentDB instance user account
     * @param string $DbName Name of the target database. If this parameter is not passed in, no database is specified.
     * @param string $CosUrl URL of a .sql file stored in COS. Either `FileName` or `CosUrl` must be specified.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }
    }
}
