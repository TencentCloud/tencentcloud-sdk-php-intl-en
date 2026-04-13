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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifies the permissions for modifying a database object, including the data structure of the database object description, the list of permissions required for modification, and the modification type.
 *
 * @method DatabasePrivilege getDatabasePrivilege() Obtain Specifies the database object and permission list to be modified.
 * @method void setDatabasePrivilege(DatabasePrivilege $DatabasePrivilege) Set Specifies the database object and permission list to be modified.
 * @method string getModifyType() Obtain Modifies via grantObject, revokeObject, or alterRole. grantObject represents authorization, revokeObject represents withdraw, alterRole represents modify account type.
 * @method void setModifyType(string $ModifyType) Set Modifies via grantObject, revokeObject, or alterRole. grantObject represents authorization, revokeObject represents withdraw, alterRole represents modify account type.
 * @method boolean getIsCascade() Obtain This parameter is required only when ModifyType is revokeObject. when set to true, the permission will be revoked with cascading effect. default false.
 * @method void setIsCascade(boolean $IsCascade) Set This parameter is required only when ModifyType is revokeObject. when set to true, the permission will be revoked with cascading effect. default false.
 */
class ModifyPrivilege extends AbstractModel
{
    /**
     * @var DatabasePrivilege Specifies the database object and permission list to be modified.
     */
    public $DatabasePrivilege;

    /**
     * @var string Modifies via grantObject, revokeObject, or alterRole. grantObject represents authorization, revokeObject represents withdraw, alterRole represents modify account type.
     */
    public $ModifyType;

    /**
     * @var boolean This parameter is required only when ModifyType is revokeObject. when set to true, the permission will be revoked with cascading effect. default false.
     */
    public $IsCascade;

    /**
     * @param DatabasePrivilege $DatabasePrivilege Specifies the database object and permission list to be modified.
     * @param string $ModifyType Modifies via grantObject, revokeObject, or alterRole. grantObject represents authorization, revokeObject represents withdraw, alterRole represents modify account type.
     * @param boolean $IsCascade This parameter is required only when ModifyType is revokeObject. when set to true, the permission will be revoked with cascading effect. default false.
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
        if (array_key_exists("DatabasePrivilege",$param) and $param["DatabasePrivilege"] !== null) {
            $this->DatabasePrivilege = new DatabasePrivilege();
            $this->DatabasePrivilege->deserialize($param["DatabasePrivilege"]);
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("IsCascade",$param) and $param["IsCascade"] !== null) {
            $this->IsCascade = $param["IsCascade"];
        }
    }
}
