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
 * Database details
 *
 * @method string getDbName() Obtain Database name
 * @method void setDbName(string $DbName) Set Database name
 * @method string getCharacterSet() Obtain Character set
 * @method void setCharacterSet(string $CharacterSet) Set Character set
 * @method string getStatus() Obtain Database status
 * @method void setStatus(string $Status) Set Database status
 * @method string getCollateRule() Obtain Collation
 * @method void setCollateRule(string $CollateRule) Set Collation
 * @method string getDescription() Obtain Specifies the remark of the database.
 * @method void setDescription(string $Description) Set Specifies the remark of the database.
 * @method array getUserHostPrivileges() Obtain User permission
 * @method void setUserHostPrivileges(array $UserHostPrivileges) Set User permission
 * @method integer getDbId() Obtain Database ID
 * @method void setDbId(integer $DbId) Set Database ID
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method integer getAppId() Obtain User appid.
 * @method void setAppId(integer $AppId) Set User appid.
 * @method string getUin() Obtain User UIN
 * @method void setUin(string $Uin) Set User UIN
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 */
class DbInfo extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $DbName;

    /**
     * @var string Character set
     */
    public $CharacterSet;

    /**
     * @var string Database status
     */
    public $Status;

    /**
     * @var string Collation
     */
    public $CollateRule;

    /**
     * @var string Specifies the remark of the database.
     */
    public $Description;

    /**
     * @var array User permission
     */
    public $UserHostPrivileges;

    /**
     * @var integer Database ID
     */
    public $DbId;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var integer User appid.
     */
    public $AppId;

    /**
     * @var string User UIN
     */
    public $Uin;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @param string $DbName Database name
     * @param string $CharacterSet Character set
     * @param string $Status Database status
     * @param string $CollateRule Collation
     * @param string $Description Specifies the remark of the database.
     * @param array $UserHostPrivileges User permission
     * @param integer $DbId Database ID
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Update time.
     * @param integer $AppId User appid.
     * @param string $Uin User UIN
     * @param string $ClusterId Cluster ID
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("CharacterSet",$param) and $param["CharacterSet"] !== null) {
            $this->CharacterSet = $param["CharacterSet"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CollateRule",$param) and $param["CollateRule"] !== null) {
            $this->CollateRule = $param["CollateRule"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("UserHostPrivileges",$param) and $param["UserHostPrivileges"] !== null) {
            $this->UserHostPrivileges = [];
            foreach ($param["UserHostPrivileges"] as $key => $value){
                $obj = new UserHostPrivilege();
                $obj->deserialize($value);
                array_push($this->UserHostPrivileges, $obj);
            }
        }

        if (array_key_exists("DbId",$param) and $param["DbId"] !== null) {
            $this->DbId = $param["DbId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
