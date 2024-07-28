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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance details
 *
 * @method integer getAppId() Obtain appId
 * @method void setAppId(integer $AppId) Set appId
 * @method integer getAuditStatus() Obtain Audit status. Valid values: `0` (Not enabled), `1` (Enabled).
 * @method void setAuditStatus(integer $AuditStatus) Set Audit status. Valid values: `0` (Not enabled), `1` (Enabled).
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getRegion() Obtain The region where the instance resides
 * @method void setRegion(string $Region) Set The region where the instance resides
 * @method array getResourceTags() Obtain Resource tags
 * @method void setResourceTags(array $ResourceTags) Set Resource tags
 */
class AuditInstanceInfo extends AbstractModel
{
    /**
     * @var integer appId
     */
    public $AppId;

    /**
     * @var integer Audit status. Valid values: `0` (Not enabled), `1` (Enabled).
     */
    public $AuditStatus;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string The region where the instance resides
     */
    public $Region;

    /**
     * @var array Resource tags
     */
    public $ResourceTags;

    /**
     * @param integer $AppId appId
     * @param integer $AuditStatus Audit status. Valid values: `0` (Not enabled), `1` (Enabled).
     * @param string $InstanceId Instance ID
     * @param string $InstanceName Instance name
     * @param integer $ProjectId Project ID
     * @param string $Region The region where the instance resides
     * @param array $ResourceTags Resource tags
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = $param["ResourceTags"];
        }
    }
}
