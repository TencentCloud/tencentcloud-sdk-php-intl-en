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
 * ModifyUserPrivilegesV3 request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID
 * @method void setInstanceId(string $InstanceId) Set Cluster ID
 * @method string getUserName() Obtain Username
 * @method void setUserName(string $UserName) Set Username
 * @method UpdateUserPrivileges getUserPrivileges() Obtain User permission
 * @method void setUserPrivileges(UpdateUserPrivileges $UserPrivileges) Set User permission
 * @method string getWhiteHost() Obtain The IP address of the user link	
 * @method void setWhiteHost(string $WhiteHost) Set The IP address of the user link	
 */
class ModifyUserPrivilegesV3Request extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $InstanceId;

    /**
     * @var string Username
     */
    public $UserName;

    /**
     * @var UpdateUserPrivileges User permission
     */
    public $UserPrivileges;

    /**
     * @var string The IP address of the user link	
     */
    public $WhiteHost;

    /**
     * @param string $InstanceId Cluster ID
     * @param string $UserName Username
     * @param UpdateUserPrivileges $UserPrivileges User permission
     * @param string $WhiteHost The IP address of the user link	
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

        if (array_key_exists("UserPrivileges",$param) and $param["UserPrivileges"] !== null) {
            $this->UserPrivileges = new UpdateUserPrivileges();
            $this->UserPrivileges->deserialize($param["UserPrivileges"]);
        }

        if (array_key_exists("WhiteHost",$param) and $param["WhiteHost"] !== null) {
            $this->WhiteHost = $param["WhiteHost"];
        }
    }
}
