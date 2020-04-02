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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() Obtain Instance ID, which is passed through from the input parameters.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which is passed through from the input parameters.
 * @method string getUserName() Obtain Username, which is passed through from the input parameters.
 * @method void setUserName(string $UserName) Set Username, which is passed through from the input parameters.
 * @method string getHost() Obtain Host allowed for access, which is passed through from the input parameters.
 * @method void setHost(string $Host) Set Host allowed for access, which is passed through from the input parameters.
 * @method integer getReadOnly() Obtain Passed through from the input parameters.
 * @method void setReadOnly(integer $ReadOnly) Set Passed through from the input parameters.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *CreateAccount response structure.
 */
class CreateAccountResponse extends AbstractModel
{
    /**
     * @var string Instance ID, which is passed through from the input parameters.
     */
    public $InstanceId;

    /**
     * @var string Username, which is passed through from the input parameters.
     */
    public $UserName;

    /**
     * @var string Host allowed for access, which is passed through from the input parameters.
     */
    public $Host;

    /**
     * @var integer Passed through from the input parameters.
     */
    public $ReadOnly;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $InstanceId Instance ID, which is passed through from the input parameters.
     * @param string $UserName Username, which is passed through from the input parameters.
     * @param string $Host Host allowed for access, which is passed through from the input parameters.
     * @param integer $ReadOnly Passed through from the input parameters.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
