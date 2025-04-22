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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster operation description
 *
 * @method integer getId() Obtain Operation name, such as create_instance, and scaleout_instance
 * @method void setId(integer $Id) Set Operation name, such as create_instance, and scaleout_instance
 * @method string getInstanceId() Obtain Cluster ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAction() Obtain Operation name description, such as creating, and modifying the cluster name.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAction(string $Action) Set Operation name description, such as creating, and modifying the cluster name.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStatus() Obtain Status.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(integer $Status) Set Status.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() Obtain Operation start time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) Set Operation start time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() Obtain Operation end time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) Set Operation end time.

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getContext() Obtain Operation context.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setContext(string $Context) Set Operation context.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Operation update time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Operation update time.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUin() Obtain Operation UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUin(string $Uin) Set Operation UIN.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InstanceOperation extends AbstractModel
{
    /**
     * @var integer Operation name, such as create_instance, and scaleout_instance
     */
    public $Id;

    /**
     * @var string Cluster ID.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Operation name description, such as creating, and modifying the cluster name.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Action;

    /**
     * @var integer Status.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var string Operation start time.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Operation end time.

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Operation context.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Context;

    /**
     * @var string Operation update time.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Operation UIN.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Uin;

    /**
     * @param integer $Id Operation name, such as create_instance, and scaleout_instance
     * @param string $InstanceId Cluster ID.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Action Operation name description, such as creating, and modifying the cluster name.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Status Status.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Operation start time.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime Operation end time.

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Context Operation context.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UpdateTime Operation update time.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Uin Operation UIN.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }
    }
}
