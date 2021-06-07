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
 * Application ID and status
 *
 * @method string getApplicationId() Obtain Value format: cluster ID-application ID
 * @method void setApplicationId(string $ApplicationId) Set Value format: cluster ID-application ID
 * @method integer getApplicationStatus() Obtain Status. Valid values: `-1` (canceled), `0` (pending approval), `1` (application approved and task submitted), `2` (rejected). Only applications in the pending approval status can be updated.
 * @method void setApplicationStatus(integer $ApplicationStatus) Set Status. Valid values: `-1` (canceled), `0` (pending approval), `1` (application approved and task submitted), `2` (rejected). Only applications in the pending approval status can be updated.
 * @method integer getApplicationType() Obtain Application type
 * @method void setApplicationType(integer $ApplicationType) Set Application type
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 */
class ApplyStatus extends AbstractModel
{
    /**
     * @var string Value format: cluster ID-application ID
     */
    public $ApplicationId;

    /**
     * @var integer Status. Valid values: `-1` (canceled), `0` (pending approval), `1` (application approved and task submitted), `2` (rejected). Only applications in the pending approval status can be updated.
     */
    public $ApplicationStatus;

    /**
     * @var integer Application type
     */
    public $ApplicationType;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @param string $ApplicationId Value format: cluster ID-application ID
     * @param integer $ApplicationStatus Status. Valid values: `-1` (canceled), `0` (pending approval), `1` (application approved and task submitted), `2` (rejected). Only applications in the pending approval status can be updated.
     * @param integer $ApplicationType Application type
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationStatus",$param) and $param["ApplicationStatus"] !== null) {
            $this->ApplicationStatus = $param["ApplicationStatus"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
