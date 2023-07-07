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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterDatabase request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getDbName() Obtain Database name
 * @method void setDbName(string $DbName) Set Database name
 * @method string getCharacterSet() Obtain Character set
 * @method void setCharacterSet(string $CharacterSet) Set Character set
 * @method string getCollateRule() Obtain Collation
 * @method void setCollateRule(string $CollateRule) Set Collation
 * @method array getUserHostPrivileges() Obtain Host permissions of the authorized user
 * @method void setUserHostPrivileges(array $UserHostPrivileges) Set Host permissions of the authorized user
 * @method string getDescription() Obtain Remarks
 * @method void setDescription(string $Description) Set Remarks
 */
class CreateClusterDatabaseRequest extends AbstractModel
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
     * @var string Character set
     */
    public $CharacterSet;

    /**
     * @var string Collation
     */
    public $CollateRule;

    /**
     * @var array Host permissions of the authorized user
     */
    public $UserHostPrivileges;

    /**
     * @var string Remarks
     */
    public $Description;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $DbName Database name
     * @param string $CharacterSet Character set
     * @param string $CollateRule Collation
     * @param array $UserHostPrivileges Host permissions of the authorized user
     * @param string $Description Remarks
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

        if (array_key_exists("CharacterSet",$param) and $param["CharacterSet"] !== null) {
            $this->CharacterSet = $param["CharacterSet"];
        }

        if (array_key_exists("CollateRule",$param) and $param["CollateRule"] !== null) {
            $this->CollateRule = $param["CollateRule"];
        }

        if (array_key_exists("UserHostPrivileges",$param) and $param["UserHostPrivileges"] !== null) {
            $this->UserHostPrivileges = [];
            foreach ($param["UserHostPrivileges"] as $key => $value){
                $obj = new UserHostPrivilege();
                $obj->deserialize($value);
                array_push($this->UserHostPrivileges, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
