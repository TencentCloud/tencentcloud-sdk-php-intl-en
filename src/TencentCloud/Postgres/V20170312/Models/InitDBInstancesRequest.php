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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InitDBInstances request structure.
 *
 * @method array getDBInstanceIdSet() Obtain Instance ID set.
 * @method void setDBInstanceIdSet(array $DBInstanceIdSet) Set Instance ID set.
 * @method string getAdminName() Obtain Instance admin account username.
 * @method void setAdminName(string $AdminName) Set Instance admin account username.
 * @method string getAdminPassword() Obtain Password corresponding to instance root account username.
 * @method void setAdminPassword(string $AdminPassword) Set Password corresponding to instance root account username.
 * @method string getCharset() Obtain Instance character set. Valid values: UTF8, LATIN1.
 * @method void setCharset(string $Charset) Set Instance character set. Valid values: UTF8, LATIN1.
 */
class InitDBInstancesRequest extends AbstractModel
{
    /**
     * @var array Instance ID set.
     */
    public $DBInstanceIdSet;

    /**
     * @var string Instance admin account username.
     */
    public $AdminName;

    /**
     * @var string Password corresponding to instance root account username.
     */
    public $AdminPassword;

    /**
     * @var string Instance character set. Valid values: UTF8, LATIN1.
     */
    public $Charset;

    /**
     * @param array $DBInstanceIdSet Instance ID set.
     * @param string $AdminName Instance admin account username.
     * @param string $AdminPassword Password corresponding to instance root account username.
     * @param string $Charset Instance character set. Valid values: UTF8, LATIN1.
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
        if (array_key_exists("DBInstanceIdSet",$param) and $param["DBInstanceIdSet"] !== null) {
            $this->DBInstanceIdSet = $param["DBInstanceIdSet"];
        }

        if (array_key_exists("AdminName",$param) and $param["AdminName"] !== null) {
            $this->AdminName = $param["AdminName"];
        }

        if (array_key_exists("AdminPassword",$param) and $param["AdminPassword"] !== null) {
            $this->AdminPassword = $param["AdminPassword"];
        }

        if (array_key_exists("Charset",$param) and $param["Charset"] !== null) {
            $this->Charset = $param["Charset"];
        }
    }
}
