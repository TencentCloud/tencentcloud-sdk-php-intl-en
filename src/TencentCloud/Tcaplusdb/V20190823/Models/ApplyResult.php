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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application update results
 *
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method integer getApplicationType() Obtain Application type
 * @method void setApplicationType(integer $ApplicationType) Set Application type
 * @method integer getApplicationStatus() Obtain Status. Valid values: `0` (pending approval), `1` (application approved and task submitted), `2` (rejected)
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setApplicationStatus(integer $ApplicationStatus) Set Status. Valid values: `0` (pending approval), `1` (application approved and task submitted), `2` (rejected)
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getTaskId() Obtain ID of the submitted task
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set ID of the submitted task
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method ErrorInfo getError() Obtain Error information
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setError(ErrorInfo $Error) Set Error information
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 */
class ApplyResult extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var integer Application type
     */
    public $ApplicationType;

    /**
     * @var integer Status. Valid values: `0` (pending approval), `1` (application approved and task submitted), `2` (rejected)
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $ApplicationStatus;

    /**
     * @var string ID of the submitted task
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var ErrorInfo Error information
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $Error;

    /**
     * @param string $ApplicationId Application ID
     * @param integer $ApplicationType Application type
     * @param integer $ApplicationStatus Status. Valid values: `0` (pending approval), `1` (application approved and task submitted), `2` (rejected)
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $TaskId ID of the submitted task
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param ErrorInfo $Error Error information
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ApplicationStatus",$param) and $param["ApplicationStatus"] !== null) {
            $this->ApplicationStatus = $param["ApplicationStatus"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Error",$param) and $param["Error"] !== null) {
            $this->Error = new ErrorInfo();
            $this->Error->deserialize($param["Error"]);
        }
    }
}
