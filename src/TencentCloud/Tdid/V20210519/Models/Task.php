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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The output parameter of `CreateDidService` and `CheckDidDeploy`.
 *
 * @method integer getId() Obtain The task ID.
 * @method void setId(integer $Id) Set The task ID.
 * @method integer getAppId() Obtain The application ID.
 * @method void setAppId(integer $AppId) Set The application ID.
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method integer getServiceId() Obtain The service ID.
 * @method void setServiceId(integer $ServiceId) Set The service ID.
 * @method integer getStatus() Obtain `0`: Under deployment; `1`: Deployed successfully; other values: Deployment failed.
 * @method void setStatus(integer $Status) Set `0`: Under deployment; `1`: Deployed successfully; other values: Deployment failed.
 * @method string getErrorCode() Obtain The error code.
 * @method void setErrorCode(string $ErrorCode) Set The error code.
 * @method string getErrorMsg() Obtain The error message.
 * @method void setErrorMsg(string $ErrorMsg) Set The error message.
 * @method string getCreateTime() Obtain The creation time.
 * @method void setCreateTime(string $CreateTime) Set The creation time.
 * @method string getUpdateTime() Obtain The last updated time.
 * @method void setUpdateTime(string $UpdateTime) Set The last updated time.
 */
class Task extends AbstractModel
{
    /**
     * @var integer The task ID.
     */
    public $Id;

    /**
     * @var integer The application ID.
     */
    public $AppId;

    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @var integer The service ID.
     */
    public $ServiceId;

    /**
     * @var integer `0`: Under deployment; `1`: Deployed successfully; other values: Deployment failed.
     */
    public $Status;

    /**
     * @var string The error code.
     */
    public $ErrorCode;

    /**
     * @var string The error message.
     */
    public $ErrorMsg;

    /**
     * @var string The creation time.
     */
    public $CreateTime;

    /**
     * @var string The last updated time.
     */
    public $UpdateTime;

    /**
     * @param integer $Id The task ID.
     * @param integer $AppId The application ID.
     * @param string $ClusterId The network ID.
     * @param integer $GroupId The group ID.
     * @param integer $ServiceId The service ID.
     * @param integer $Status `0`: Under deployment; `1`: Deployed successfully; other values: Deployment failed.
     * @param string $ErrorCode The error code.
     * @param string $ErrorMsg The error message.
     * @param string $CreateTime The creation time.
     * @param string $UpdateTime The last updated time.
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
