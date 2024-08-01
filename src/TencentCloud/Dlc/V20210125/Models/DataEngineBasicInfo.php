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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic information of DataEngine
 *
 * @method string getDataEngineName() Obtain DataEngine name
 * @method void setDataEngineName(string $DataEngineName) Set DataEngine name
 * @method integer getState() Obtain Data engine status: -2: deleted; -1: failed; 0: initializing; 1: suspended; 2: running; 3: ready to delete; 4: deleting
 * @method void setState(integer $State) Set Data engine status: -2: deleted; -1: failed; 0: initializing; 1: suspended; 2: running; 3: ready to delete; 4: deleting
 * @method integer getCreateTime() Obtain Creation time
 * @method void setCreateTime(integer $CreateTime) Set Creation time
 * @method integer getUpdateTime() Obtain Update time
 * @method void setUpdateTime(integer $UpdateTime) Set Update time
 * @method string getMessage() Obtain Returned information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Returned information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDataEngineId() Obtain Engine ID
 * @method void setDataEngineId(string $DataEngineId) Set Engine ID
 * @method string getDataEngineType() Obtain Engine types, and the valid values are PrestoSQL, SparkSQL, and SparkBatch.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDataEngineType(string $DataEngineType) Set Engine types, and the valid values are PrestoSQL, SparkSQL, and SparkBatch.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAppId() Obtain User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAppId(integer $AppId) Set User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserUin() Obtain Account ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserUin(string $UserUin) Set Account ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DataEngineBasicInfo extends AbstractModel
{
    /**
     * @var string DataEngine name
     */
    public $DataEngineName;

    /**
     * @var integer Data engine status: -2: deleted; -1: failed; 0: initializing; 1: suspended; 2: running; 3: ready to delete; 4: deleting
     */
    public $State;

    /**
     * @var integer Creation time
     */
    public $CreateTime;

    /**
     * @var integer Update time
     */
    public $UpdateTime;

    /**
     * @var string Returned information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string Engine ID
     */
    public $DataEngineId;

    /**
     * @var string Engine types, and the valid values are PrestoSQL, SparkSQL, and SparkBatch.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DataEngineType;

    /**
     * @var integer User ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AppId;

    /**
     * @var string Account ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserUin;

    /**
     * @param string $DataEngineName DataEngine name
     * @param integer $State Data engine status: -2: deleted; -1: failed; 0: initializing; 1: suspended; 2: running; 3: ready to delete; 4: deleting
     * @param integer $CreateTime Creation time
     * @param integer $UpdateTime Update time
     * @param string $Message Returned information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DataEngineId Engine ID
     * @param string $DataEngineType Engine types, and the valid values are PrestoSQL, SparkSQL, and SparkBatch.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AppId User ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserUin Account ID
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("DataEngineType",$param) and $param["DataEngineType"] !== null) {
            $this->DataEngineType = $param["DataEngineType"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }
    }
}
