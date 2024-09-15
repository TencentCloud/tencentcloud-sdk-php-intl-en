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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDatabase request structure.
 *
 * @method string getDbName() Obtain The database name to be modified
 * @method void setDbName(string $DbName) Set The database name to be modified
 * @method string getOperation() Obtain Modify the operation type, such as SET_QUOTA, RENAME, SET_REPLICA_QUOTA, and SET_PROPERTIES. Modify the operation type, such as SET_QUOTA, RENAME, SET_REPLICA_QUOTA, and SET_PROPERTIES.
 * @method void setOperation(string $Operation) Set Modify the operation type, such as SET_QUOTA, RENAME, SET_REPLICA_QUOTA, and SET_PROPERTIES. Modify the operation type, such as SET_QUOTA, RENAME, SET_REPLICA_QUOTA, and SET_PROPERTIES.
 * @method string getInstanceId() Obtain InstanceId
 * @method void setInstanceId(string $InstanceId) Set InstanceId
 * @method string getQuota() Obtain Quota value, which is used to set the quota of data volume or replicas.
 * @method void setQuota(string $Quota) Set Quota value, which is used to set the quota of data volume or replicas.
 * @method string getNewDbName() Obtain New database name, used for renaming operation.
 * @method void setNewDbName(string $NewDbName) Set New database name, used for renaming operation.
 * @method array getProperties() Obtain Attribute key-value pair to be set
 * @method void setProperties(array $Properties) Set Attribute key-value pair to be set
 * @method string getUserName() Obtain Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setUserName(string $UserName) Set Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getPassWord() Obtain Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method void setPassWord(string $PassWord) Set Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
 * @method string getCatalogName() Obtain The name of the catalog, if left unspecified, defaults to "internal".
 * @method void setCatalogName(string $CatalogName) Set The name of the catalog, if left unspecified, defaults to "internal".
 */
class UpdateDatabaseRequest extends AbstractModel
{
    /**
     * @var string The database name to be modified
     */
    public $DbName;

    /**
     * @var string Modify the operation type, such as SET_QUOTA, RENAME, SET_REPLICA_QUOTA, and SET_PROPERTIES. Modify the operation type, such as SET_QUOTA, RENAME, SET_REPLICA_QUOTA, and SET_PROPERTIES.
     */
    public $Operation;

    /**
     * @var string InstanceId
     */
    public $InstanceId;

    /**
     * @var string Quota value, which is used to set the quota of data volume or replicas.
     */
    public $Quota;

    /**
     * @var string New database name, used for renaming operation.
     */
    public $NewDbName;

    /**
     * @var array Attribute key-value pair to be set
     */
    public $Properties;

    /**
     * @var string Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $UserName;

    /**
     * @var string Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     */
    public $PassWord;

    /**
     * @var string The name of the catalog, if left unspecified, defaults to "internal".
     */
    public $CatalogName;

    /**
     * @param string $DbName The database name to be modified
     * @param string $Operation Modify the operation type, such as SET_QUOTA, RENAME, SET_REPLICA_QUOTA, and SET_PROPERTIES. Modify the operation type, such as SET_QUOTA, RENAME, SET_REPLICA_QUOTA, and SET_PROPERTIES.
     * @param string $InstanceId InstanceId
     * @param string $Quota Quota value, which is used to set the quota of data volume or replicas.
     * @param string $NewDbName New database name, used for renaming operation.
     * @param array $Properties Attribute key-value pair to be set
     * @param string $UserName Use the user who has corresponding permissions for operations. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $PassWord Password corresponding to the user. If the TCHouse-D cluster uses a kernel account registered by a CAM user, you do not need to fill it in.
     * @param string $CatalogName The name of the catalog, if left unspecified, defaults to "internal".
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

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = $param["Quota"];
        }

        if (array_key_exists("NewDbName",$param) and $param["NewDbName"] !== null) {
            $this->NewDbName = $param["NewDbName"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new PropertiesMap();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("PassWord",$param) and $param["PassWord"] !== null) {
            $this->PassWord = $param["PassWord"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }
    }
}
