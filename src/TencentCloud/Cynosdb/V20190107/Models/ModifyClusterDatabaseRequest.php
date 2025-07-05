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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterDatabase request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getDbName() Obtain Database name
 * @method void setDbName(string $DbName) Set Database name
 * @method array getNewUserHostPrivileges() Obtain Host permissions of the new authorized user
 * @method void setNewUserHostPrivileges(array $NewUserHostPrivileges) Set Host permissions of the new authorized user
 * @method string getDescription() Obtain Remarks
 * @method void setDescription(string $Description) Set Remarks
 * @method array getOldUserHostPrivileges() Obtain Host permissions of previously authorized users
 * @method void setOldUserHostPrivileges(array $OldUserHostPrivileges) Set Host permissions of previously authorized users
 */
class ModifyClusterDatabaseRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Database name
     */
    public $DbName;

    /**
     * @var array Host permissions of the new authorized user
     */
    public $NewUserHostPrivileges;

    /**
     * @var string Remarks
     */
    public $Description;

    /**
     * @var array Host permissions of previously authorized users
     */
    public $OldUserHostPrivileges;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $DbName Database name
     * @param array $NewUserHostPrivileges Host permissions of the new authorized user
     * @param string $Description Remarks
     * @param array $OldUserHostPrivileges Host permissions of previously authorized users
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("NewUserHostPrivileges",$param) and $param["NewUserHostPrivileges"] !== null) {
            $this->NewUserHostPrivileges = [];
            foreach ($param["NewUserHostPrivileges"] as $key => $value){
                $obj = new UserHostPrivilege();
                $obj->deserialize($value);
                array_push($this->NewUserHostPrivileges, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OldUserHostPrivileges",$param) and $param["OldUserHostPrivileges"] !== null) {
            $this->OldUserHostPrivileges = [];
            foreach ($param["OldUserHostPrivileges"] as $key => $value){
                $obj = new UserHostPrivilege();
                $obj->deserialize($value);
                array_push($this->OldUserHostPrivileges, $obj);
            }
        }
    }
}
